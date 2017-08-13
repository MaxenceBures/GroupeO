<?php

/**
 * Description of ModuleController
 *
 * @author Alois
 */

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ModuleController extends Controller {

    /**
     * @Route("/module/frameSearch", name="frame_search")
     */
    public function frameSearchAction() {
        $em = $this->getDoctrine()->getManager('eni');

        $repository_formation = $em->getRepository('EniBundle:Formation');
        $formations_temp = $repository_formation->findBy(array("archiver" => "0"));

        $formations = array();
        foreach ($formations_temp as $x) {
            array_push($formations, array('court' => $x->getLibellecourt(), 'long' => $x->getLibellelong(), 'id' => $x->getCodeformation()));
        }

        return $this->render('EniBundle:Module:frameSearch.html.twig', array(
                    "status" => "ok", "formations" => $formations
        ));
    }

    /**
     * @Route("/module/listeSearch", name="liste_search")
     */
    public function listeSearchAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $data_temp = $request->get("data");
            $module_temp = $data_temp['modules'];
            $formation_temp = $data_temp['formation'];
            $libelle_temp = $data_temp['libelle'];

            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Module');

            $modules_temp = $repository->getModulesListeSearch($module_temp,$formation_temp, $libelle_temp,$em);
            $temp = array();
            foreach ($modules_temp as $m) {
                array_push($temp, array("id" => $m["idmodule"], "libelle" => $m["libelle"], "duree" => $m["dureeenheures"], "codeformation" => $m["codeformation"], "libelleformation" => $m['libellelong']));
            }

            return new Response(json_encode(array("modules" => $temp)));
        }
        return new Response(json_encode("error"));
    }

}

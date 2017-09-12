<?php

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of CoursController
 *
 * @author Alois
 */
class CoursController extends Controller {

    /**
     * @Route("/cours/listePlanning", name="recherche")
     */
    public function rechercheAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $cours_temp = $request->get("data");
            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Cours');

            $cours_temp = $repository->getCoursById($cours_temp, $em);

            $temp = array();
            foreach ($cours_temp as $c) {
                $temp = array(
                    "id" => $c["idcours"], "title" => $c["libellecours"], "start" => $c["debut"],
                    "end" => $c["fin"], "idmodule" => $c["idmodule"], "libellemodule" => $c["module"],
                    "lieu" => $c["lieu"], "duree" => $c['dureereelleenheures']
                );
            }


            return new Response(json_encode(array("cours" => $temp)));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/cours/listePlanning", name="liste_cours_planning")
     */
    public function listePlanningAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $data_temp = $request->get("data");
            $modules_temp = $data_temp['modules'];
            $modules_selected_temp = $data_temp['modules_selected'];
            $lieux_temp = $data_temp['lieux'];
            $debut_temp = $data_temp['debut'];
            $fin_temp = $data_temp['fin'];
            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Cours');

            $cours_temp = $repository->getCoursByModulesLieux($modules_temp,$modules_selected_temp, $lieux_temp, $debut_temp, $fin_temp, $em);

            $temp = array();
            foreach ($cours_temp as $c) {
                array_push($temp, array("id" => $c["idcours"], "title" => $c["libellecours"], "start" => $c["debut"], "end" => $c["fin"], "idmodule" => $c["idmodule"], "libellemodule" => $c["module"], "lieu" => $c["lieu"]));
            }


            return new Response(json_encode(array("cours" => $temp)));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/cours/liste", name="planning_liste")
     */
    public function listeAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Cours');

            $cours_temp = $repository->getCours($em);

            $temp = array();
            foreach ($cours_temp as $c) {
                array_push($temp, array("id" => $c["idcours"], "title" => $c["libellecours"], "start" => $c["debut"], "end" => $c["fin"], "idmodule" => $c["idmodule"], "libellemodule" => $c["module"], "lieu" => $c["lieu"], 'lieu_code' => $c["lieu_code"]));
            }


            return new Response(json_encode(array("cours" => $temp)));
        }
        return new Response(json_encode("error"));
    }

}

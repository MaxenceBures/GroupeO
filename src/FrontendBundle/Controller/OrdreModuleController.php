<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\OrdreModule;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Description of ordreModuleController
 *
 * @author Alois-laptop
 */
class OrdreModuleController extends Controller {

    /**
     * @Route("/ordreModule/liste", name="ordre_module_liste")
     */
    public function listeAction(Request $request) {

        if ($request->isXMLHttpRequest()) {
            $data_temp = $request->get("data");
            $module_temp = $data_temp['modules'];
            $formation_temp = $data_temp['formation'];
            $libelle_temp = $data_temp['libelle'];

            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Module');
            $modules_temp = $repository->getModulesListeSearch($module_temp, $formation_temp, $libelle_temp, $em);
            $modules_final = array();
            foreach ($modules_temp as $m) {
                array_push($modules_final, array("id" => $m["idmodule"], "libelle" => $m["libelle"]));
            }

            $repository_ordre_module = $this->getDoctrine()->getRepository('FrontendBundle:OrdreModule');
            $ordre_temp = $repository_ordre_module->findBy(array("formationCode" => $formation_temp));
            $ordre_final = array();
            //var_dump($ordre_temp);
            foreach ($ordre_temp as $o) {
                array_push($ordre_final, array("to" => $o->getModuleId(), "from" => $o->getPrecedentId()));
            }

            return new Response(json_encode(array("status" => "ok", "modules" => $modules_final, "relations" => $ordre_final)));
        }
        return "error";
    }

    /**
     * @Route("/ordreModule/ajouter", name="ordre_module_ajouter")
     */
    public function ajouterAction(Request $request) {

        if ($request->isXMLHttpRequest()) {


            $ordres_modules_temp = $request->get("data");
            $formation_code = $request->get("formation");
            $repository_ordre_module = $this->getDoctrine()->getRepository('FrontendBundle:OrdreModule');

            array_map("unserialize", array_unique(array_map("serialize", $ordres_modules_temp)));
            foreach ($ordres_modules_temp as $ordre_array) {
                if (!empty($ordre_array['precedents'][0])) {
                    foreach ($ordre_array['precedents'] as $precedents) {
                        if (!empty($precedents)) {
                            $ordre_module = new OrdreModule();
                            $ordre_module->setModuleId($ordre_array['id']);
                            $ordre_module->setPrecedentId($precedents);
                            $ordre_module->setOrdre($ordre_array['ordre']);
                            $ordre_module->setFormationCode($formation_code);
                            $repository_ordre_module->insertOrdreModule($ordre_module, $this->getDoctrine()->getManager());
                        }
                    }
                } else {
                    $ordre_module = new OrdreModule();
                    $ordre_module->setModuleId($ordre_array['id']);
                    $ordre_module->setPrecedentId(NULL);
                    $ordre_module->setOrdre($ordre_array['ordre']);
                    $ordre_module->setFormationCode($formation_code);
                    $repository_ordre_module->insertOrdreModule($ordre_module, $this->getDoctrine()->getManager());
                }
            }
            return new Response(json_encode(array("status" => "ok")));
        }
        return "error";
    }

    /**
     * @Route("/ordreModule/ordrePlanning", name="ordre_module_planning")
     */
    public function ordrePlanningAction(Request $request) {

        if ($request->isXMLHttpRequest()) {
            $module_temp = $request->get("module");
            $formation_code = $request->get("formation");
            $couleur_temp = $request->get("couleur");
            $modules_actif_temps = $request->get("modules_actif");
            $em_eni = $this->getDoctrine()->getManager('eni');
            $repository_ordre_module = $this->getDoctrine()->getRepository('FrontendBundle:OrdreModule');
            $repository_modules = $em_eni->getRepository("EniBundle:Module");
            $ordre_module_temp = $repository_ordre_module->getModuleSuivant($module_temp, $formation_code, $modules_actif_temps, $this->getDoctrine()->getManager());

            $ordre_module_array = array();
            $couleur = array("btn-warning", "btn-danger", "btn-info", "btn-success", "bg-gray", "bg-orange", "bg-purple");
            unset($couleur[array_search($couleur_temp, $couleur)]);
            $couleur = array_values($couleur);
            $i = 0;
            foreach ($ordre_module_temp as $om) {
                $random = rand(0, count($couleur) - 1);
                $couleur_module = $i == 0 ? $couleur_temp : $couleur[$random];
                $module = $repository_modules->findBy(array("idmodule" => $om["moduleId"]));
                array_push($ordre_module_array, array("module_id" => $om["moduleId"], "libelle" => $module[0]->getLibelle(),
                    "couleur" => $couleur_module, "ordre" => $om["ordre"]));
                if ($i != 0) {
                    unset($couleur[$random]);
                }
                $i++;
            }
            return new Response(json_encode(array("status" => "ok", "modules" => $ordre_module_array)));
        }
        return "error";
    }

}

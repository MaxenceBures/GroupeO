<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlanningGlobalController extends Controller
{
    public function indexAction()
    {

        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl('connexion_login'));
        }

        return $this->render('FrontendBundle:PlanningGlobal:index.html.twig');
    }

    /**
     * @Route("/planninggloba/recherche", name="planning_global_recherche")
     */
    public function rechercheAction(Request $request)
    {

        if ($request->isXMLHttpRequest()) {

            $em =  $this->getDoctrine()->getEntityManager('groupeo');
            $em2 = $this->getDoctrine()->getEntityManager('eni');

            $cours_temp = $request->get("cours");

            $repository_planning_cours = $em->getRepository('FrontendBundle:PlanningCours');
            $repository_planning = $em->getRepository('FrontendBundle:Planning');

            $repository_stagiaire = $em2->getRepository('EniBundle:Stagiaireparentreprise');

            $planning = $repository_planning_cours->getPlanningByCours($cours_temp,$em);

            if(count($planning) == 0){
                $planning_custom = $repository_planning_cours->getPlanningByCoursCustom($cours_temp,$em);
            }


            $datas = array();

            if(count($planning) == 0 && count($planning_custom) == 0){
                $datas["planning_status"] = 0;
            }else{
                $datas["planning_status"] = 1;
            }

            if(count($planning) != 0){
                foreach ($planning as $val){
                    $num = $repository_planning->getPlanningNumLienById($val->getPlanning()->getIdPlanning(),$em);
                    $name = $repository_stagiaire->getNameByIdStagiaireEntreprise($num[0]["stagiaireEntrepriseNumlien"],$em2);

                    $datas["stagiaires"][] = $name[0];
                }
            }elseif (count($planning_custom) != 0){

                foreach ($planning_custom as $val){
                    $num = $repository_planning->getPlanningNumLienById($val->getPlanning()->getIdPlanning(),$em);
                    $name = $repository_stagiaire->getNameByIdStagiaireEntreprise($num[0]["stagiaireEntrepriseNumlien"],$em2);

                    $datas["stagiaires"][] = $name[0];
                }
            }

            return new Response(json_encode(array("status" =>"ok", "planning" => $datas)));
        }

        return "error";
    }
}

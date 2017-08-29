<?php

namespace FrontendBundle\Controller;

use EniBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlanningController extends Controller {

    /**
     * @Route("/planning/frame", name="planning_frame")
     */
    public function frameAction() {
        $em = $this->getDoctrine()->getManager('eni');

        $repository_formation = $em->getRepository('EniBundle:Formation');
        $formations_temp = $repository_formation->findBy(array("archiver" => "0"));

        $repository_entreprise = $em->getRepository('EniBundle:Entreprise');
        $entreprise_temp = $repository_entreprise->findAll();

        $formations = array();
        foreach ($formations_temp as $x) {
            array_push($formations, array('court' => $x->getLibellecourt(), 'long' => $x->getLibellelong(), 'id' => $x->getCodeformation()));
        }

        $entreprises = array();
        foreach ($entreprise_temp as $x) {
            array_push($entreprises, array('raison' => $x->getRaisonsociale(), 'ville' => $x->getVille(), 'id' => $x->getCodeentreprise()));
        }

        return $this->render('FrontendBundle:Planning:frame.html.twig', array(
                    "status" => "ok", "formations" => $formations, "entreprises" => $entreprises
        ));
    }

    /**
     * @Route("/planning/editeur", name="planning_editeur")
     */
    public function editeurAction(Request $request) {
        if ($request->get("planning")) {
            $planning_temp = $request->get("planning");
        } else {
            
        }

        return $this->render('FrontendBundle:Planning:editeur.html.twig', array(
        ));
    }

    /**
     * @Route("/planning/status_update", name="planning_status_update")
     */
    public function status_updateAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em =  $this->getDoctrine()->getEntityManager('groupeo');
            $repository_planning = $em->getRepository('FrontendBundle:Planning');

            $recherche_temp = $request->get("recherche");

            $plannings = $repository_planning->getPlanningByLien($recherche_temp["planning"],$this->getDoctrine()->getManager('groupeo'));

            $planning = $plannings[0];

            $planning->setEtat($recherche_temp["status"]);

            $new_planning = $repository_planning->modifierPlanningStatus($planning,$this->getDoctrine()->getManager('groupeo'));

            return new Response(json_encode(array("status" =>"ok")));
        }
    }

}

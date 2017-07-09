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
        $modules = null;
        $cours = null;
        $lieux = null;
        $stagiaire_temp = $request->get("stagiaire");
        $entreprise_temp = $request->get("entreprise");
        $formation_temp = $request->get("formation");
        $planning_temp = $request->get("planning");

        $em_eni = $this->getDoctrine()->getManager('eni');
        $repository_alternant = $em_eni->getRepository('EniBundle:Stagiaire');
        $repository_entreprise = $em_eni->getRepository("EniBundle:Entreprise");
        $repository_formation = $em_eni->getRepository("EniBundle:Formation");
        $stagiaire = $repository_alternant->findBy(array("codestagiaire" => $stagiaire_temp));
        $entreprise = $repository_entreprise->findBy(array("codeentreprise" => $entreprise_temp));
        $formation = $repository_formation->findBy(array("codeformation" => $formation_temp));


        if ($planning_temp == "0") {
            $planning['date_creation'] = date("d/m/Y");
            $planning['nom'] = $stagiaire[0]->getNom() . "_" . $stagiaire[0]->getPrenom()."_". str_replace(" ", "_",$entreprise[0]->getRaisonSociale())."_".trim($formation[0]->getLibelleCourt())."_V1";
        } else {
            
        }

        return $this->render('FrontendBundle:Planning:editeur.html.twig', array(
                    "planning" => $planning, "modules" => $modules, "lieu" => $lieux
        ));
    }

}

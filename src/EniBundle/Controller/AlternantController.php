<?php

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AlternantController extends Controller {

    /**
     * @Route("/alternant/recherche", name="alternant_recherche")
     */
    public function rechercheAction() {
        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl($this->container->getParameter('url_login')));
        }

        return $this->render('EniBundle:Alternant:recherche.html.twig');
    }

    /**
     * @Route("/alternant/chargement", name="alternant_chargement")
     */
    public function chargementAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em =  $this->getDoctrine()->getEntityManager('eni');
            $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');

            $em2 =  $this->getDoctrine()->getEntityManager('groupeo');
            $repository_planning = $em2->getRepository('FrontendBundle:Planning');

            $repository_formation = $em->getRepository('EniBundle:Formation');

            $recherche_temp = $request->get("recherche");

            //select_entreprise input_nom input_prenom input_mail
            if(($recherche_temp["entreprise"] != -1) AND ($recherche_temp["formation"] == -1) AND (($recherche_temp["nom"] != "") OR ($recherche_temp["prenom"] != "") OR ($recherche_temp["mail"] != ""))){
                $utilisateurs = $repository_stagiaire->rechercherNominativeEntreprise($recherche_temp,$this->getDoctrine()->getManager('eni'));

                $utilisateurs_temp = array();

                foreach ($utilisateurs as $k => $v){
                    $temp = $v;
                    $codeFormation = $repository_planning->getPlanningFormation($v["numlien"],$this->getDoctrine()->getManager('groupeo'));

                    if(trim($codeFormation[0]["formationCode"]) != ""){
                        $formation = $repository_formation->getFormationId($codeFormation[0]["formationCode"],$this->getDoctrine()->getManager('eni'));
                        $temp["code_formation"] = $codeFormation[0]["formationCode"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];
                    }else{
                        $temp["code_formation"] = 0;
                        $temp["libelle_formation"] = "Aucune formation";
                    }

                    array_push($utilisateurs_temp,$temp);
                }
            }

            //input_nom input_prenom input_mail
            if((($recherche_temp["nom"] != "") OR ($recherche_temp["prenom"] != "") OR ($recherche_temp["mail"] != "")) AND ($recherche_temp["entreprise"] == -1) AND ($recherche_temp["formation"] == -1)){
                $utilisateurs = $repository_stagiaire->rechercherNominative($recherche_temp,$this->getDoctrine()->getManager('eni'));

                $utilisateurs_temp = array();

                foreach ($utilisateurs as $k => $v){
                    $temp = $v;

                    if($v["numlien"] != null){
                        $codeFormation = $repository_planning->getPlanningFormation($v["numlien"],$this->getDoctrine()->getManager('groupeo'));

                        if(trim($codeFormation[0]["formationCode"]) != ""){
                            $formation = $repository_formation->getFormationId($codeFormation[0]["formationCode"],$this->getDoctrine()->getManager('eni'));
                            $temp["code_formation"] = $codeFormation[0]["formationCode"];
                            $temp["libelle_formation"] = $formation[0]["libellelong"];
                        }else{
                            $temp["code_formation"] = 0;
                            $temp["libelle_formation"] = "Aucune formation";
                        }
                    }else{
                        $temp["code_formation"] = 0;
                        $temp["libelle_formation"] = "Aucune formation";
                        $temp["codeentreprise"] = 0;
                        $temp["raisonsociale"] = "Aucune entreprise";
                    }

                    array_push($utilisateurs_temp,$temp);
                }
            }

            //select_entreprise
            if($recherche_temp["entreprise"] != -1 AND ($recherche_temp["nom"] == "") AND ($recherche_temp["prenom"] == "") AND ($recherche_temp["mail"] == "") AND $recherche_temp["formation"] == -1){
                $utilisateurs = $repository_stagiaire->rechercherNominativeEntreprise($recherche_temp,$this->getDoctrine()->getManager('eni'));

                $utilisateurs_temp = array();

                foreach ($utilisateurs as $k => $v){
                    $temp = $v;
                    $codeFormation = $repository_planning->getPlanningFormation($v["numlien"],$this->getDoctrine()->getManager('groupeo'));

                    if(trim($codeFormation[0]["formationCode"]) != ""){
                        $formation = $repository_formation->getFormationId($codeFormation[0]["formationCode"],$this->getDoctrine()->getManager('eni'));
                        $temp["code_formation"] = $codeFormation[0]["formationCode"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];
                    }else{
                        $temp["code_formation"] = 0;
                        $temp["libelle_formation"] = "Aucune formation";
                    }

                    array_push($utilisateurs_temp,$temp);
                }
            }

            //select_formation
            if($recherche_temp["formation"] != -1 AND (($recherche_temp["nom"] == "") AND ($recherche_temp["prenom"] == "") AND ($recherche_temp["mail"] == "")) AND $recherche_temp["entreprise"] == -1){
                $utilisateurs_temp = array();

                $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"],$this->getDoctrine()->getManager('groupeo'));

                foreach ($stagiaires_id as $k => $v) {
                    $stagiaire = $repository_stagiaire->rechercherStagiaireNumLien($v["stagiaireEntrepriseNumlien"], $this->getDoctrine()->getManager('eni'));

                    if (isset($stagiaire[0])) {
                        $temp = $stagiaire[0];
                        $formation = $repository_formation->getFormationId($recherche_temp["formation"], $this->getDoctrine()->getManager('eni'));

                        $temp["code_formation"] = $recherche_temp["formation"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];

                        array_push($utilisateurs_temp, $temp);
                    }
                }
            }

            //select_formation input_nom input_prenom input_mail
            if($recherche_temp["formation"] != -1 AND (($recherche_temp["nom"] != "") OR ($recherche_temp["prenom"] != "") OR ($recherche_temp["mail"] != "")) AND $recherche_temp["entreprise"] == -1){
                $utilisateurs_temp = array();

                $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"],$this->getDoctrine()->getManager('groupeo'));

                foreach ($stagiaires_id as $k => $v){
                    $stagiaire = $repository_stagiaire->rechercherStagiaireNumLienSpec($v["stagiaireEntrepriseNumlien"],$recherche_temp,$this->getDoctrine()->getManager('eni'));

                    if(isset($stagiaires[0])){
                        $temp = $stagiaire[0];
                        $formation = $repository_formation->getFormationId($recherche_temp["formation"],$this->getDoctrine()->getManager('eni'));

                        $temp["code_formation"] = $recherche_temp["formation"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];

                        array_push($utilisateurs_temp,$temp);
                    }
                }
            }

            //select_formation select_entreprise
            if($recherche_temp["formation"] != -1 AND $recherche_temp["entreprise"] != -1){
                $utilisateurs_temp = array();

                $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"],$this->getDoctrine()->getManager('groupeo'));

                foreach ($stagiaires_id as $k => $v){
                    $stagiaire = $repository_stagiaire->rechercherStagiaireNumLienSpecEntreprise($v["stagiaireEntrepriseNumlien"],$recherche_temp,$this->getDoctrine()->getManager('eni'));

                    if(isset($stagiaire[0])){
                        $temp = $stagiaire[0];
                        $formation = $repository_formation->getFormationId($recherche_temp["formation"],$this->getDoctrine()->getManager('eni'));

                        $temp["code_formation"] = $recherche_temp["formation"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];

                        array_push($utilisateurs_temp,$temp);
                    }
                }
            }

            return new Response(json_encode(array("status" =>"ok", "datas" => $utilisateurs_temp)));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/alternant/detail", name="alternant_detail")
     */
    public function detailAction(Request $request, $id) {
        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl($this->container->getParameter('url_login')));
        }

        $em =  $this->getDoctrine()->getEntityManager('eni');
        $em2 =  $this->getDoctrine()->getEntityManager('groupeo');

        $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');
        $repository_formation = $em->getRepository('EniBundle:Formation');
        $repository_planning = $em2->getRepository('FrontendBundle:Planning');

        $utilisateur = $repository_stagiaire->rechercherNominativeDetail($id,$this->getDoctrine()->getManager('eni'));

        $temp = $utilisateur[0];

        if(isset($temp["stagiaire_entreprise_lien"])){
            $planning = $repository_planning->getPlanningFormationDetail($temp["stagiaire_entreprise_lien"],$this->getDoctrine()->getManager('groupeo'));
            $formation = $repository_formation->getFormationId($planning[0]["formationCode"],$this->getDoctrine()->getManager('eni'));

            $temp["planning_debut"] = $planning[0]["dateDebut"];
            $temp["planning_fin"] = $planning[0]["dateFin"];
            $temp["formation_long"] = $formation[0]["libellelong"];
            $temp["formation_cout"] = $planning[0]["formationCode"];
        }else{
            $temp["planning_debut"] = "";
            $temp["planning_fin"] = "";
            $temp["formation_long"] = "";
            $temp["formation_cout"] = "";
        }

        $plannings_temp = array();
        $status = true;

        if(isset($temp["stagiaire_entreprise_lien"])){
            foreach ($utilisateur as $k => $v){
                $planning_temp = array();

                $planning = $repository_planning->getPlanningFormationDetail($v["stagiaire_entreprise_lien"],$this->getDoctrine()->getManager('groupeo'));
                $formation = $repository_formation->getFormationId($planning[0]["formationCode"],$this->getDoctrine()->getManager('eni'));

                $planning_temp["stagiaire_entreprise_lien"] = $v["stagiaire_entreprise_lien"];
                $planning_temp["entreprise_datedebut"] = $v["entreprise_datedebut"];
                $planning_temp["entreprise_datefin"] = $v["entreprise_datefin"];
                $planning_temp["entreprise_raisonsociale"] = $v["entreprise_raisonsociale"];
                $planning_temp["entreprise_ville"] = $v["entreprise_ville"];
                $planning_temp["formation"] = $formation[0]["libellecourt"];

                array_push($plannings_temp,$planning_temp);
            }
        }else{
            $status = false;
        }



        return $this->render('EniBundle:Alternant:detail.html.twig', array('utilisateur' => $temp, 'plannings' => $plannings_temp, 'status' => $status));
    }

    /**
     * @Route("/alternant/recherchePlanning", name="recherche_alternant_planning")
     */
    public function recherchePlanningAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getEntityManager('eni');
            $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');

            $em2 = $this->getDoctrine()->getEntityManager('groupeo');
            $repository_planning = $em2->getRepository('FrontendBundle:Planning');

            $repository_formation = $em->getRepository('EniBundle:Formation');

            $recherche_temp = $request->get("recherche");

            if (($recherche_temp["nom"] != "") OR ( $recherche_temp["prenom"] != "") OR ( $recherche_temp["mail"] != "") AND $recherche_temp["entreprise"] == -1 AND $recherche_temp["formation"] == -1) {
                $utilisateurs = $repository_stagiaire->rechercherNominative($recherche_temp, $this->getDoctrine()->getManager('eni'));

                $utilisateurs_temp = array();

                foreach ($utilisateurs as $k => $v) {
                    $temp = $v;
                    $codeFormation = $repository_planning->getPlanningFormation($v["numlien"], $this->getDoctrine()->getManager('groupeo'));

                    if (count($codeFormation) > 0) {
                        $formation = $repository_formation->getFormationId($codeFormation[0]["formationCode"], $this->getDoctrine()->getManager('eni'));
                        $temp["code_formation"] = $codeFormation[0]["formationCode"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];
                    } else {
                        $temp["code_formation"] = 0;
                        $temp["libelle_formation"] = "Aucune formation";
                    }


                    array_push($utilisateurs_temp, $temp);
                }
            }
            return new Response(json_encode(array("status" => "ok", "datas" => $utilisateurs_temp)));
        }
        return new Response(json_encode("error"));
    }

}

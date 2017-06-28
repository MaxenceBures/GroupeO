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

                    $codeFormation = $repository_planning->getPlanningFormation($v["numlien"],$this->getDoctrine()->getManager('groupeo'));

                    if(trim($codeFormation[0]["formationCode"]) != ""){
                        $formation = $repository_formation->getFormationId($codeFormation[0]["formationCode"],$this->getDoctrine()->getManager('eni'));
                        $temp["code_formation"] = $codeFormation[0]["formationCode"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];
                    }else{
                        $temp["code_formation"] = 0;
                        $temp["libelle_formation"] = "Aucune formation";
                    }

                    array_push($utilisateurs_temp, $temp);
                }
            }

            if ($recherche_temp["entreprise"] != -1 AND ( $recherche_temp["nom"] == "") AND ( $recherche_temp["prenom"] == "") AND ( $recherche_temp["mail"] == "") AND $recherche_temp["formation"] == -1) {
                $utilisateurs = $repository_stagiaire->rechercherNominativeEntreprise($recherche_temp, $this->getDoctrine()->getManager('eni'));

                $utilisateurs_temp = array();

                foreach ($utilisateurs as $k => $v) {
                    $temp = $v;
                    $codeFormation = $repository_planning->getPlanningFormation($v["numlien"], $this->getDoctrine()->getManager('groupeo'));

                    if (trim($codeFormation[0]["formationCode"]) != "") {
                        $formation = $repository_formation->getFormationId($codeFormation[0]["formationCode"], $this->getDoctrine()->getManager('eni'));
                        $temp["code_formation"] = $codeFormation[0]["formationCode"];
                        $temp["libelle_formation"] = $formation[0]["libellelong"];
                    } else {

                        $temp["code_formation"] = 0;
                        $temp["libelle_formation"] = "Aucune formation";
                    }

                    array_push($utilisateurs_temp,$temp);
                }
            }

            if ($recherche_temp["formation"] != -1 AND ( ($recherche_temp["nom"] == "") OR ( $recherche_temp["prenom"] == "") OR ( $recherche_temp["mail"] == "")) AND $recherche_temp["entreprise"] == -1) {
                $utilisateurs_temp = array();

                $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"], $this->getDoctrine()->getManager('groupeo'));

                foreach ($stagiaires_id as $k => $v) {
                    $stagiaire = $repository_stagiaire->rechercherStagiaireNumLien($v["stagiaireEntrepriseNumlien"], $this->getDoctrine()->getManager('eni'));
                    $temp = $stagiaire[0];
                    $formation = $repository_formation->getFormationId($recherche_temp["formation"], $this->getDoctrine()->getManager('eni'));

                    $temp["code_formation"] = $recherche_temp["formation"];
                    $temp["libelle_formation"] = $formation[0]["libellelong"];

                    array_push($utilisateurs_temp, $temp);
                }
            }

            if ($recherche_temp["formation"] != -1 AND ( ($recherche_temp["nom"] != "") OR ( $recherche_temp["prenom"] != "") OR ( $recherche_temp["mail"] != "")) AND $recherche_temp["entreprise"] == -1) {
                $utilisateurs_temp = array();

                $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"], $this->getDoctrine()->getManager('groupeo'));

                foreach ($stagiaires_id as $k => $v) {
                    $stagiaire = $repository_stagiaire->rechercherStagiaireNumLienSpec($v["stagiaireEntrepriseNumlien"], $recherche_temp, $this->getDoctrine()->getManager('eni'));
                    $temp = $stagiaire[0];
                    $formation = $repository_formation->getFormationId($recherche_temp["formation"], $this->getDoctrine()->getManager('eni'));

                    $temp["code_formation"] = $recherche_temp["formation"];
                    $temp["libelle_formation"] = $formation[0]["libellelong"];

                    array_push($utilisateurs_temp, $temp);
                }
            }

            if ($recherche_temp["formation"] != -1 AND $recherche_temp["entreprise"] != -1) {
                $utilisateurs_temp = array();

                $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"], $this->getDoctrine()->getManager('groupeo'));

                foreach ($stagiaires_id as $k => $v) {
                    $stagiaire = $repository_stagiaire->rechercherStagiaireNumLienSpecEntreprise($v["stagiaireEntrepriseNumlien"], $recherche_temp, $this->getDoctrine()->getManager('eni'));
                    $temp = $stagiaire[0];
                    $formation = $repository_formation->getFormationId($recherche_temp["formation"], $this->getDoctrine()->getManager('eni'));

                    $temp["code_formation"] = $recherche_temp["formation"];
                    $temp["libelle_formation"] = $formation[0]["libellelong"];

                    array_push($utilisateurs_temp, $temp);
                }
            }

            return new Response(json_encode(array("status" => "ok", "datas" => $utilisateurs_temp)));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/alternant/detail", name="alternant_detail")
     */
    public function detailAction(Request $request, $id) {
        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl($this->container->getParameter('url_login')));
        }

        $em = $this->getDoctrine()->getEntityManager('eni');
        $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');

        $utilisateur = $repository_stagiaire->rechercherNominativeId($id, $this->getDoctrine()->getManager('eni'));


        return $this->render('EniBundle:Alternant:detail.html.twig', array('utilisateur' => $utilisateur[0]));
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

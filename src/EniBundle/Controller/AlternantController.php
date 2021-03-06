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
     * @Route("/recherche", name="user_alternant_recherche")
     * Affichage de la page de recherche d'un alternant pour un utilisateur
     */
    public function user_rechercheAction() {
        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('connexion_login'));
        }

        return $this->render('EniBundle:Alternant:user_recherche.html.twig');
    }

    /**
     * @Route("/alternant/chargement", name="alternant_chargement")
     * Recherche des alternants
     */
    public function chargementAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getEntityManager('eni');
            $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');

            $em2 = $this->getDoctrine()->getEntityManager('groupeo');
            $repository_planning = $em2->getRepository('FrontendBundle:Planning');

            $repository_formation = $em->getRepository('EniBundle:Formation');

            $recherche_temp = $request->get("recherche");

            if ($recherche_temp["date_status"] == 0) {
                //select_entreprise input_nom input_prenom input_mail
                if (($recherche_temp["entreprise"] != -1) AND ( $recherche_temp["formation"] == -1) AND ( ($recherche_temp["nom"] != "") OR ( $recherche_temp["prenom"] != "") OR ( $recherche_temp["mail"] != ""))) {
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

                        array_push($utilisateurs_temp, $temp);
                    }
                }

                //input_nom input_prenom input_mail
                if ((($recherche_temp["nom"] != "") OR ( $recherche_temp["prenom"] != "") OR ( $recherche_temp["mail"] != "")) AND ( $recherche_temp["entreprise"] == -1) AND ( $recherche_temp["formation"] == -1)) {
                    $utilisateurs = $repository_stagiaire->rechercherNominativeUnion($recherche_temp, $this->getDoctrine()->getManager('eni'));
                    //rechercherNominativeUnion
                    $utilisateurs_temp = array();

                    $last_id = array();

                    foreach ($utilisateurs as $k => $v) {
                        $temp = $v;

                        if (!in_array($v["codestagiaire"], $last_id)) {
                            array_push($last_id, $v["codestagiaire"]);

                            if ($v["numlien"] != null) {
                                $codeFormation = $repository_planning->getPlanningFormation($v["numlien"], $this->getDoctrine()->getManager('groupeo'));

                                if (trim($codeFormation[0]["formationCode"]) != "") {
                                    $formation = $repository_formation->getFormationId($codeFormation[0]["formationCode"], $this->getDoctrine()->getManager('eni'));
                                    $temp["code_formation"] = $codeFormation[0]["formationCode"];
                                    $temp["libelle_formation"] = $formation[0]["libellelong"];
                                } else {
                                    $temp["code_formation"] = 0;
                                    $temp["libelle_formation"] = "Aucune formation";
                                }
                            } else {
                                $temp["code_formation"] = 0;
                                $temp["libelle_formation"] = "Aucune formation";
                                $temp["codeentreprise"] = 0;
                                $temp["raisonsociale"] = "Aucune entreprise";
                            }

                            array_push($utilisateurs_temp, $temp);
                        }
                    }
                }

                //select_entreprise
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

                        array_push($utilisateurs_temp, $temp);
                    }
                }

                //select_formation
                if ($recherche_temp["formation"] != -1 AND ( ($recherche_temp["nom"] == "") AND ( $recherche_temp["prenom"] == "") AND ( $recherche_temp["mail"] == "")) AND $recherche_temp["entreprise"] == -1) {
                    $utilisateurs_temp = array();

                    $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"], $this->getDoctrine()->getManager('groupeo'));

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
                if ($recherche_temp["formation"] != -1 AND ( ($recherche_temp["nom"] != "") OR ( $recherche_temp["prenom"] != "") OR ( $recherche_temp["mail"] != "")) AND $recherche_temp["entreprise"] == -1) {
                    $utilisateurs_temp = array();

                    $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"], $this->getDoctrine()->getManager('groupeo'));

                    foreach ($stagiaires_id as $k => $v) {
                        $stagiaire = $repository_stagiaire->rechercherStagiaireNumLienSpec($v["stagiaireEntrepriseNumlien"], $recherche_temp, $this->getDoctrine()->getManager('eni'));

                        if (isset($stagiaire[0])) {
                            $temp = $stagiaire[0];
                            $formation = $repository_formation->getFormationId($recherche_temp["formation"], $this->getDoctrine()->getManager('eni'));

                            $temp["code_formation"] = $recherche_temp["formation"];
                            $temp["libelle_formation"] = $formation[0]["libellelong"];

                            array_push($utilisateurs_temp, $temp);
                        }
                    }
                }

                //select_formation select_entreprise
                if ($recherche_temp["formation"] != -1 AND $recherche_temp["entreprise"] != -1) {
                    $utilisateurs_temp = array();

                    $stagiaires_id = $repository_planning->getPlanningStagiaires($recherche_temp["formation"], $this->getDoctrine()->getManager('groupeo'));

                    foreach ($stagiaires_id as $k => $v) {
                        $stagiaire = $repository_stagiaire->rechercherStagiaireNumLienSpecEntreprise($v["stagiaireEntrepriseNumlien"], $recherche_temp, $this->getDoctrine()->getManager('eni'));

                        if (isset($stagiaire[0])) {
                            $temp = $stagiaire[0];
                            $formation = $repository_formation->getFormationId($recherche_temp["formation"], $this->getDoctrine()->getManager('eni'));

                            $temp["code_formation"] = $recherche_temp["formation"];
                            $temp["libelle_formation"] = $formation[0]["libellelong"];

                            array_push($utilisateurs_temp, $temp);
                        }
                    }
                }
            } else {
                //Filtre sans formation
                if ($recherche_temp["formation"] == -1) {
                    $utilisateurs_temp = array();

                    $plannings = $repository_planning->rechercherPlanningDates($recherche_temp, $this->getDoctrine()->getManager('groupeo'));


                    foreach ($plannings as $k => $v) {

                        $stagiaire = $repository_stagiaire->rechercherStagiaireNumLien($v["stagiaireEntrepriseNumlien"], $this->getDoctrine()->getManager('eni'));
                        $formation = $repository_formation->getFormationId($v["formationCode"], $this->getDoctrine()->getManager('eni'));


                        $temp = array(
                            'libelle_formation' => $formation[0]["libellelong"],
                            'code_formation' => $formation[0]["libellecourt"],
                            'codestagiaire' => $stagiaire[0]["codestagiaire"],
                            'nom' => $stagiaire[0]["nom"],
                            'prenom' => $stagiaire[0]["prenom"],
                            'email' => $stagiaire[0]["email"],
                            'codeentreprise' => $stagiaire[0]["codeentreprise"],
                            'raisonsociale' => $stagiaire[0]["raisonsociale"],
                            'ville' => $stagiaire[0]["ville"],
                            'numlien' => $stagiaire[0]["numlien"]
                        );

                        array_push($utilisateurs_temp, $temp);
                    }
                }
                //Filtre avec formation
                if ($recherche_temp["formation"] != -1) {
                    $utilisateurs_temp = array();

                    $plannings = $repository_planning->rechercherPlanningDatesFormation($recherche_temp, $this->getDoctrine()->getManager('groupeo'));


                    foreach ($plannings as $k => $v) {

                        $stagiaire = $repository_stagiaire->rechercherStagiaireNumLien($v["stagiaireEntrepriseNumlien"], $this->getDoctrine()->getManager('eni'));
                        $formation = $repository_formation->getFormationId($v["formationCode"], $this->getDoctrine()->getManager('eni'));


                        $temp = array(
                            'libelle_formation' => $formation[0]["libellelong"],
                            'code_formation' => $formation[0]["libellecourt"],
                            'codestagiaire' => $stagiaire[0]["codestagiaire"],
                            'nom' => $stagiaire[0]["nom"],
                            'prenom' => $stagiaire[0]["prenom"],
                            'email' => $stagiaire[0]["email"],
                            'codeentreprise' => $stagiaire[0]["codeentreprise"],
                            'raisonsociale' => $stagiaire[0]["raisonsociale"],
                            'ville' => $stagiaire[0]["ville"],
                            'numlien' => $stagiaire[0]["numlien"]
                        );

                        array_push($utilisateurs_temp, $temp);
                    }
                }
            }

            return new Response(json_encode(array("status" => "ok", "datas" => $utilisateurs_temp)));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/alternant/detail", name="alternant_detail")
     * Affichage du detail d'un alternant
     */
    public function detailAction(Request $request, $id) {
        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('connexion_login'));
        }

        $em = $this->getDoctrine()->getEntityManager('eni');
        $em2 = $this->getDoctrine()->getEntityManager('groupeo');

        $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');
        $repository_formation = $em->getRepository('EniBundle:Formation');
        $repository_planning = $em2->getRepository('FrontendBundle:Planning');

        $utilisateur = $repository_stagiaire->rechercherNominativeDetail($id, $this->getDoctrine()->getManager('eni'));

        $temp = $utilisateur[0];

        foreach ($utilisateur as $key => $value) {
            if (($value["entreprise_datedebut"]->format("Ymd")) > ($temp["entreprise_datedebut"]->format("Ymd"))) {
                $temp = $value;
            }
        }

        if (isset($temp["stagiaire_entreprise_lien"])) {
            $planning = $repository_planning->getPlanningFormationDetail($temp["stagiaire_entreprise_lien"], $this->getDoctrine()->getManager('groupeo'));

            $formation = $repository_formation->getFormationId($planning[0]["formationCode"], $this->getDoctrine()->getManager('eni'));

            $status_test = array(1 => 'Validée', 2 => 'Refusée', 3 => 'En cours de validation', 4 => 'Terminée', 5 => 'En cours de formation');


            if (count($planning) == 1) {
                $temp["planning_debut"] = $planning[0]["dateDebut"];
                $temp["planning_fin"] = $planning[0]["dateFin"];
                $temp["formation_long"] = $formation[0]["libellelong"];
                $temp["formation_cout"] = $planning[0]["formationCode"];
                //$temp["planning_nom"] = $planning[0]["nom"];
            } else {
                foreach ($planning as $val) {
                    $planning[0]["others"][] = array("nom" => $val["nom"], "etat" => $status_test[$val["etat"]], "etat_val" => $val["etat"]);
                }
                $temp["planning_debut"] = $planning[0]["dateDebut"];
                $temp["planning_fin"] = $planning[0]["dateFin"];
                $temp["formation_long"] = $formation[0]["libellelong"];
                $temp["formation_cout"] = $planning[0]["formationCode"];
            }
        } else {
            $temp["planning_debut"] = "";
            $temp["planning_fin"] = "";
            $temp["formation_long"] = "";
            $temp["formation_cout"] = "";
        }

        $plannings_temp = array();
        $status = true;

        //$status_test = array(1 => 'Validée', 2 => 'Refusée', 3 => 'En cours de validation', 4 => 'Terminée', 5 => 'En cours de formation');

        if (isset($temp["stagiaire_entreprise_lien"])) {
            foreach ($utilisateur as $k => $v) {

                $planning_temp = array();

                $planning = $repository_planning->getPlanningFormationDetail($v["stagiaire_entreprise_lien"], $this->getDoctrine()->getManager('groupeo'));
                $formation = $repository_formation->getFormationId($planning[0]["formationCode"], $this->getDoctrine()->getManager('eni'));

                //$status = $this->get('planning_status')->getStatutLibelle($planning[0]["etat"]);

                $planning_temp["stagiaire_entreprise_lien"] = $v["stagiaire_entreprise_lien"];
                $planning_temp["entreprise_datedebut"] = $v["entreprise_datedebut"];
                $planning_temp["entreprise_datefin"] = $v["entreprise_datefin"];
                $planning_temp["entreprise_raisonsociale"] = $v["entreprise_raisonsociale"];
                $planning_temp["entreprise_ville"] = $v["entreprise_ville"];
                $planning_temp["formation"] = $formation[0]["libellecourt"];
                $planning_temp["etat"] = $status_test[$planning[0]["etat"]];
                $planning_temp["id"] = $planning[0]["idPlanning"];

                if (count($planning) > 1) {
                    foreach ($planning as $val) {
                        $planning_temp["others"][] = array("nom" => $val["nom"], "etat" => $status_test[$val["etat"]], "etat_val" => $val["etat"], "idPlanning" => $val["idPlanning"]);
                    }
                } else {
                    $planning_temp["nom"] = $planning[0]["nom"];
                }

                array_push($plannings_temp, $planning_temp);
            }
        } else {
            $status = false;
        }

        return $this->render('EniBundle:Alternant:detail.html.twig', array('utilisateur' => $temp, 'plannings' => $plannings_temp, 'status' => $status));
    }

    /**
     * @Route("/alternant/recherchePlanning", name="recherche_alternant_planning")
     * Page de recherche des alternants pour les utilisateurs
     */
    public function recherchePlanningAction(Request $request) {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getEntityManager('eni');
            $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');

            $em2 = $this->getDoctrine()->getEntityManager('groupeo');
            $repository_planning = $em2->getRepository('FrontendBundle:Planning');

            $repository_formation = $em->getRepository('EniBundle:Formation');

            $recherche_temp = $request->get("recherche");

            if ((($recherche_temp["nom"] != "") OR ( $recherche_temp["prenom"] != "") OR ( $recherche_temp["mail"] != "") AND $recherche_temp["entreprise"] == -1) AND $recherche_temp["formation"] == -1) {
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

    /**
     * @Route("/alternant/recherche", name="alternant_recherche")
     * Affichage de la page de recherche d'un alternant
     */
    public function rechercheAction() {
        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('connexion_login'));
        }

        return $this->render('EniBundle:Alternant:recherche.html.twig');
    }

    /**
     * @Route("/detail", name="user_alternant_detail")
     */
    public function user_detailAction(Request $request, $id) {
        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('connexion_login'));
        }

        $em = $this->getDoctrine()->getEntityManager('eni');
        $em2 = $this->getDoctrine()->getEntityManager('groupeo');

        $repository_stagiaire = $em->getRepository('EniBundle:Stagiaire');
        $repository_formation = $em->getRepository('EniBundle:Formation');
        $repository_planning = $em2->getRepository('FrontendBundle:Planning');

        $utilisateur = $repository_stagiaire->rechercherNominativeDetail($id, $this->getDoctrine()->getManager('eni'));

        $temp = $utilisateur[0];

        foreach ($utilisateur as $key => $value) {
            if (($value["entreprise_datedebut"]->format("Ymd")) > ($temp["entreprise_datedebut"]->format("Ymd"))) {
                $temp = $value;
            }
        }

        if (isset($temp["stagiaire_entreprise_lien"])) {
            $planning = $repository_planning->getPlanningFormationDetail($temp["stagiaire_entreprise_lien"], $this->getDoctrine()->getManager('groupeo'));

            $formation = $repository_formation->getFormationId($planning[0]["formationCode"], $this->getDoctrine()->getManager('eni'));

            $status_test = array(1 => 'Validée', 2 => 'Refusée', 3 => 'En cours de validation', 4 => 'Terminée', 5 => 'En cours de formation');

            if (count($planning) == 1) {
                $temp["planning_debut"] = $planning[0]["dateDebut"];
                $temp["planning_fin"] = $planning[0]["dateFin"];
                $temp["formation_long"] = $formation[0]["libellelong"];
                $temp["formation_cout"] = $planning[0]["formationCode"];
                $temp["planning_nom"] = $planning[0]["nom"];
            } else {
                foreach ($planning as $val) {
                    $planning[0]["others"][] = array("nom" => $val["nom"], "etat" => $status_test[$val["etat"]], "etat_val" => $val["etat"]);
                }
                $temp["planning_debut"] = $planning[0]["dateDebut"];
                $temp["planning_fin"] = $planning[0]["dateFin"];
                $temp["formation_long"] = $formation[0]["libellelong"];
                $temp["formation_cout"] = $planning[0]["formationCode"];
            }
        } else {
            $temp["planning_debut"] = "";
            $temp["planning_fin"] = "";
            $temp["formation_long"] = "";
            $temp["formation_cout"] = "";
        }

        $plannings_temp = array();
        $status = true;

        if (isset($temp["stagiaire_entreprise_lien"])) {
            foreach ($utilisateur as $k => $v) {

                $planning_temp = array();

                $planning = $repository_planning->getPlanningFormationDetail($v["stagiaire_entreprise_lien"], $this->getDoctrine()->getManager('groupeo'));
                $formation = $repository_formation->getFormationId($planning[0]["formationCode"], $this->getDoctrine()->getManager('eni'));

                //$status = $this->get('planning_status')->getStatutLibelle($planning[0]["etat"]);

                $planning_temp["stagiaire_entreprise_lien"] = $v["stagiaire_entreprise_lien"];
                $planning_temp["entreprise_datedebut"] = $v["entreprise_datedebut"];
                $planning_temp["entreprise_datefin"] = $v["entreprise_datefin"];
                $planning_temp["entreprise_raisonsociale"] = $v["entreprise_raisonsociale"];
                $planning_temp["entreprise_ville"] = $v["entreprise_ville"];
                $planning_temp["formation"] = $formation[0]["libellecourt"];
                $planning_temp["etat"] = $status_test[$planning[0]["etat"]];
                $planning_temp["id"] = $planning[0]["idPlanning"];

                if (count($planning) > 1) {
                    foreach ($planning as $val) {
                        $planning_temp["others"][] = array("nom" => $val["nom"], "etat" => $status_test[$val["etat"]], "etat_val" => $val["etat"], "idPlanning" => $val["idPlanning"]);
                    }
                } else {
                    $planning_temp["nom"] = $planning[0]["nom"];
                }

                array_push($plannings_temp, $planning_temp);
            }
        } else {
            $status = false;
        }
        return $this->render('EniBundle:Alternant:user_detail.html.twig', array('utilisateur' => $temp, 'plannings' => $plannings_temp, 'status' => $status));
    }

}

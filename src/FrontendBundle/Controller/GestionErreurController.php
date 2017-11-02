<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class GestionErreurController extends Controller
{
    /**
     * @Route("/erreur/liste", name="erreur_liste")
     * Erreur :
     *          1 - Le cours n'existe pas
     *          2 - Les dates du cours ne correspondent pas
     *          3 - Le cours n'a pas de reference
     *          4 - Cours independant inexistant
     *          5 - Les dates du cours ne correspondent pas
     *          6 - Fermeture des locaux
     *
     */
    public function listeAction()
    {
        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl('connexion_login'));
        }

        if(trim($this->getUser()->getRole()) == "ROLE_USER"){
            return $this->render("EniBundle:Alternant:user_recherche.html.twig");
        }

        $erreur = array();

        $doctrine=$this->getDoctrine()->getManager();
        $doctrine_eni = $this->getDoctrine()->getManager('eni');



        $repository_planning = $this->getDoctrine()->getRepository('FrontendBundle:Planning');
        $repository_planning_cours = $this->getDoctrine()->getRepository('FrontendBundle:PlanningCours');

        $repository_cours_independant = $this->getDoctrine()->getRepository('FrontendBundle:CoursIndependant');
        $repository_fermeture = $this->getDoctrine()->getRepository('FrontendBundle:FermetureLieu');

        $repository_cours = $doctrine_eni->getRepository('EniBundle:Cours');
        $repository_stagiaire = $doctrine_eni->getRepository('EniBundle:Stagiaire');
        $repository_lieux = $doctrine_eni->getRepository('EniBundle:Lieu');


        $lieux = $repository_lieux->findAll();

        $plannings_temp = $repository_planning->getPlannings($doctrine);

        $fermetures = $repository_fermeture->getFermeture($this->getDoctrine()->getManager());

        $lieux_temp = array();

        foreach ($lieux as $id => $val){

            array_push($lieux_temp,array('id' => $val->getCodelieu(), 'libelle' => $val->getLibelle()));
        }

        $fermeture_temp = array();

        foreach ($fermetures as $fermeture){

            array_push($fermeture_temp,array('id' => $fermeture->getIdFermeture(),'lieu' => $fermeture->getLieuCode(),'deb'=>$fermeture->getDateDebut(),'fin'=>$fermeture->getDateFin()));
        }


        foreach ($plannings_temp as $planning_id ){
            $cours_temps = $repository_planning_cours->getCoursByIdPlanning($planning_id["idPlanning"],$doctrine);

            if(count($cours_temps) != 0){
                foreach ($cours_temps as $cours){
                    if($cours->getCoursId() != null){
                        $cours_temp_1 = $repository_cours->getCoursById($cours->getCoursId(), $doctrine_eni);

                        if(count($cours_temp_1) == 0){
                            array_push($erreur,array('erreur' => 1,'planning_id' => $planning_id["idPlanning"],'planning_cours_id' => $cours->getIdPlanningCours(),'cours_id' => $cours->getCoursId()));
                        }else {
                            if (!($this->checkDate($cours_temp_1[0]["debut"], $cours->getDebut()) && $this->checkDate($cours_temp_1[0]["fin"], $cours->getFin()))) {
                                array_push($erreur, array('erreur' => 2, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                            } else {
                                foreach ($fermeture_temp as $fermeture) {
                                    if ($fermeture["lieu"] == 99) {
                                        if ($cours_temp_1[0]["debut"] == $fermeture["deb"]) {
                                            array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                        } else if ($cours_temp_1[0]["fin"] == $fermeture["fin"]) {
                                            array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                        } else if (((int)$cours_temp_1[0]["debut"]->format('Ymd') <= (int)$fermeture["deb"]->format('Ymd')) && ((int)$cours_temp_1[0]["fin"]->format('Ymd') >= (int)$fermeture["deb"]->format('Ymd'))) {
                                            array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                        } else if (($cours_temp_1[0]["debut"]->format('Ymd') >= $fermeture["deb"]->format('Ymd')) && ($cours_temp_1[0]["fin"]->format('Ymd') <= $fermeture["fin"]->format('Ymd'))) {
                                            array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                        }
                                    } else {
                                        foreach ($lieux_temp as $lieu) {
                                            if ($lieu["id"] == $fermeture["lieu"]) {
                                                if ($cours_temp_1[0]["debut"] == $fermeture["deb"]) {
                                                    array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                                } else if ($cours_temp_1[0]["fin"] == $fermeture["fin"]) {
                                                    array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                                } else if (((int)$cours_temp_1[0]["debut"]->format('Ymd') <= (int)$fermeture["deb"]->format('Ymd')) && ((int)$cours_temp_1[0]["fin"]->format('Ymd') >= (int)$fermeture["deb"]->format('Ymd'))) {
                                                    array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                                } else if (($cours_temp_1[0]["debut"]->format('Ymd') >= $fermeture["deb"]->format('Ymd')) && ($cours_temp_1[0]["fin"]->format('Ymd') <= $fermeture["fin"]->format('Ymd'))) {
                                                    array_push($erreur, array('erreur' => 6, 'planning_id' => $planning_id["idPlanning"], 'planning_cours_id' => $cours->getIdPlanningCours(), 'cours_id' => $cours->getCoursId()));
                                                }
                                            }
                                        }
                                    }
                                }

                            }
                        }
                    }else if($cours->getCoursIndependant() != null){
                        $cours_temp_1 = $repository_cours_independant->getCours2ById($cours->getCoursIndependant(),$doctrine);

                        if(count($cours_temp_1) == 0){
                            array_push($erreur,array('erreur' => 4,'planning_id' => $planning_id["idPlanning"],'planning_cours_id' => $cours->getIdPlanningCours(),'cours_independant_id' => $cours->getCoursIndependant()));
                        }else{
                            if(!($this->checkDate($cours_temp_1[0]->getDebut(),$cours->getDebut()) && $this->checkDate($cours_temp_1[0]->getFin(),$cours->getFin()))){
                                array_push($erreur,array('erreur' => 5,'planning_id' => $planning_id["idPlanning"],'planning_cours_id' => $cours->getIdPlanningCours(),'cours_independant_id' => $cours->getCoursIndependant()));
                            }
                        }

                    }else{
                        array_push($erreur,array('erreur' => 3,'planning_id' => $planning_id["idPlanning"],'planning_cours_id' => $cours->getIdPlanningCours(),'cours_id' => $cours->getCoursId(),'cours_independant_id' => $cours->getCoursIndependant()));
                    }
                }
            }
        }

        $tmp_1 = array();
        $tmp_2 = array();
        $erreur_1 = 0;
        $erreur_2 = 0;


        foreach ($erreur as $v){
            $planning = $repository_planning->getPlanningStagiaireById($v["planning_id"],$doctrine);
            $stagiaire = $repository_stagiaire->rechercherStagiaireNomPrenom($planning[0]["stagiaireCode"],$doctrine_eni);

            $tmp = $v;

            $tmp["formation_code"] = $planning[0]["formationCode"];
            $tmp["stagiaire_code"] = $planning[0]["stagiaireCode"];
            $tmp["stagiaire_nominatif"] = $stagiaire[0]["nom"]." ".$stagiaire[0]["prenom"];

            $check_1 = true;
            $check_2 = true;

            foreach ($tmp_1 as $t1){
                if($t1["planning_id"] == $v["planning_id"]){
                    $check_1 = false;
                }
            }

            foreach ($tmp_2 as $t2){
                if($t2["planning_id"] == $v["planning_id"]){
                    $check_2 = false;
                }
            }



            if($tmp["erreur"] == 1 OR $tmp["erreur"] == 3 OR $tmp["erreur"] == 4 OR $tmp["erreur"] == 6){
                if($check_2 == true){
                    $erreur_2++;
                    array_push($tmp_2,$tmp);
                }
            }else{
                if($check_1 == true){
                    $erreur_1++;
                    array_push($tmp_1,$tmp);
                }
            }

        }


        return $this->render('FrontendBundle:GestionErreur:liste.html.twig',array('erreur_val_1'=> $tmp_1,'erreur_val_2' => $tmp_2,'erreur_1' => $erreur_1, 'erreur_2' => $erreur_2));
    }

    function checkDate($date1, $date2){
        $result = false;

        if($date1 == $date2){
            $result = true;
        }

        return $result;
    }

    /**
     * @Route("/erreur/planning", name="gestion_erreur_planning")
     */
    public function replannification_planningAction(Request $request){
        if ($request->isXMLHttpRequest()) {

            $detail = $request->get("detail");

            $doctrine=$this->getDoctrine()->getManager();
            $doctrine_eni = $this->getDoctrine()->getManager('eni');


            $repository_lieux = $doctrine_eni->getRepository('EniBundle:Lieu');
            $repository_cours = $doctrine_eni->getRepository('EniBundle:Cours');

            $repository_planning_cours = $this->getDoctrine()->getRepository('FrontendBundle:PlanningCours');
            $repository_cours_independant = $this->getDoctrine()->getRepository('FrontendBundle:CoursIndependant');

            $lieux = $repository_lieux->findAll();

            $lieux_temp = array();

            foreach ($lieux as $id => $val){

                $lieux_temp[$val->getCodelieu()] = $val->getLibelle();
            }

            $cours_temps = $repository_planning_cours->getCoursByIdCoursPlanning($detail,$doctrine);

            $cours = $repository_cours->getCoursByIdCours($cours_temps[0]->getCoursId(),$doctrine_eni);

            if(count($cours) == 0){
                 $cours = $repository_cours_independant->getCours2ById($cours_temps[0]->getCoursIndependant(),$doctrine);

                 $news_cours = $repository_cours_independant->getCours($cours[0]->getModuleIndependant(),$doctrine);
            }else{
                $id_module = $cours[0]->getIdModule()->getIdModule();

                $news_cours = $repository_cours->getCoursByModuleId($id_module,$doctrine_eni);
            }


            $datas = array();

            foreach ($news_cours as $x){
                $tmp = array();
                $tmp["fin"] = $x->getFin()->format('d/m/Y');
                $tmp["debut"] = $x->getDebut()->format('d/m/Y');

                $tmp["id"] = $x->getIdCours();

                if($x->getCodelieu() != null){
                    $tmp["lieu"] = $lieux_temp[$x->getCodeLieu()] ;
                }else{
                    $tmp["lieu"] = "Aucun centre" ;
                }

                array_push($datas,$tmp);
            }

            return new Response(json_encode(array("status" =>"ok", "datas" => json_encode($datas))));
        }


        return  new Response(json_encode(array("status" =>"ko")));
    }

    /**
     * @Route("/erreur/modification", name="gestion_erreur_planning")
     */
    public function modification_planningAction(Request $request){
        if ($request->isXMLHttpRequest()) {
            $detail = $request->get("detail");

            $doctrine=$this->getDoctrine()->getManager();
            $doctrine_eni = $this->getDoctrine()->getManager('eni');


            $repository_cours = $doctrine_eni->getRepository('EniBundle:Cours');

            $repository_planning_cours = $this->getDoctrine()->getRepository('FrontendBundle:PlanningCours');
            $repository_cours_independant = $this->getDoctrine()->getRepository('FrontendBundle:CoursIndependant');

            $cours = $repository_cours->getCoursByIdCours($detail["module"],$doctrine_eni);

            $datas = $repository_planning_cours->getCoursByIdCoursPlanning($detail["replace_module"],$doctrine);

            $datas = $datas[0];

            $datas->setCoursIndependant(null);
            $datas->setCoursId(null);

            if(count($cours) == 0){
                $cours_tmp = $repository_cours_independant->getCours2ById($detail["module"],$doctrine);

                $datas->setCoursIndependant($cours_tmp[0]);
                $datas->setDebut($cours_tmp[0]->getDebut());
                $datas->setFin($cours_tmp[0]->getFin());
            }else{
                $cours_tmp = $repository_cours->getCoursByIdCours($detail["module"],$doctrine_eni);
                $datas->setCoursId($cours_tmp[0]->getIdcours());
                $datas->setDebut($cours_tmp[0]->getDebut());
                $datas->setFin($cours_tmp[0]->getFin());
            }


            $repository_planning_cours->updateCours($datas,$doctrine);

            return  new Response(json_encode(array("status" =>"ok")));

        }

        return  new Response(json_encode(array("status" =>"ko")));
    }

    /**
     * @Route("/erreur/planning", name="gestion_erreur_planning")
     */
    public function detail_planningAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $planning = $request->get("planning");

            $doctrine=$this->getDoctrine()->getManager();
            $doctrine_eni = $this->getDoctrine()->getManager('eni');

            $repository_planning = $doctrine->getRepository('FrontendBundle:PlanningCours');
            $repository_cours_independant = $doctrine->getRepository('FrontendBundle:CoursIndependant');
            $repository_fermeture = $this->getDoctrine()->getRepository('FrontendBundle:FermetureLieu');

            $repository_lieux = $doctrine_eni->getRepository('EniBundle:Lieu');
            $repository_cours = $doctrine_eni->getRepository('EniBundle:Cours');



            $liste_cours = $repository_planning->getCoursByIdPlanning($planning,$doctrine);

            $lieux = $repository_lieux->findAll();

            $fermetures = $repository_fermeture->getFermeture($this->getDoctrine()->getManager());

            $lieux_temp = array();

            foreach ($lieux as $id => $val){

                array_push($lieux_temp,array('id' => $val->getCodelieu(), 'libelle' => $val->getLibelle()));
            }

            $fermeture_temp = array();

            foreach ($fermetures as $fermeture){

                array_push($fermeture_temp,array('id' => $fermeture->getIdFermeture(),'lieu' => $fermeture->getLieuCode(),'deb'=>$fermeture->getDateDebut(),'fin'=>$fermeture->getDateFin()));
            }


            $tmp = array();

            foreach ($liste_cours as $cours){

                if($cours->getCoursId() != null){
                    $cours_temp_1 = $repository_cours->getCoursById($cours->getCoursId(), $doctrine_eni);
                    $checkFermeture = false;
                    if(($this->checkDate($cours_temp_1[0]["debut"],$cours->getDebut()) && $this->checkDate($cours_temp_1[0]["fin"],$cours->getFin()))){
                        foreach ($fermeture_temp as $fermeture) {
                            if ($fermeture["lieu"] == 99) {
                                if ($cours_temp_1[0]["debut"] == $fermeture["deb"]) {
                                    $checkFermeture = true;
                                    array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                } else if ($cours_temp_1[0]["fin"] == $fermeture["fin"]) {
                                    $checkFermeture = true;
                                    array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                } else if (((int)$cours_temp_1[0]["debut"]->format('Ymd') <= (int)$fermeture["deb"]->format('Ymd')) && ((int)$cours_temp_1[0]["fin"]->format('Ymd') >= (int)$fermeture["deb"]->format('Ymd'))) {
                                    $checkFermeture = true;
                                    array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                } else if (($cours_temp_1[0]["debut"]->format('Ymd') >= $fermeture["deb"]->format('Ymd')) && ($cours_temp_1[0]["fin"]->format('Ymd') <= $fermeture["fin"]->format('Ymd'))) {
                                    $checkFermeture = true;
                                    array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                }
                            } else {
                                foreach ($lieux_temp as $lieu) {
                                    if ($lieu["id"] == $fermeture["lieu"]) {
                                        if ($cours_temp_1[0]["debut"] == $fermeture["deb"]) {
                                            $checkFermeture = true;
                                            array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                        } else if ($cours_temp_1[0]["fin"] == $fermeture["fin"]) {
                                            $checkFermeture = true;
                                            array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                        } else if (((int)$cours_temp_1[0]["debut"]->format('Ymd') <= (int)$fermeture["deb"]->format('Ymd')) && ((int)$cours_temp_1[0]["fin"]->format('Ymd') >= (int)$fermeture["deb"]->format('Ymd'))) {
                                            $checkFermeture = true;
                                            array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                        } else if (($cours_temp_1[0]["debut"]->format('Ymd') >= $fermeture["deb"]->format('Ymd')) && ($cours_temp_1[0]["fin"]->format('Ymd') <= $fermeture["fin"]->format('Ymd'))) {
                                            $checkFermeture = true;
                                            array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'erreur' => 'Fermeture programmée du '.$fermeture["deb"]->format('d/m/Y').' au '.$fermeture["fin"]->format('d/m/Y'),'status' => false));
                                        }
                                    }
                                }
                            }
                        }
                        if($checkFermeture == false){
                            array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'status' => true));
                        }
                    }else{
                        array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]["libellecours"],'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'status' => false));
                    }



                }elseif ($cours->getCoursIndependant() != null){
                    $cours_temp_1 = $repository_cours_independant->getCours2ById($cours->getCoursIndependant(),$doctrine);

                    if(($this->checkDate($cours_temp_1[0]->getDebut(),$cours->getDebut()) && $this->checkDate($cours_temp_1[0]->getFin(),$cours->getFin()))){
                        array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]->getLibellecours(),'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'status' => true));
                    }else{
                        array_push($tmp, array('ordre' => $cours->getOrdre(),'id' => $cours->getIdPlanningCours(),'libelle' => $cours_temp_1[0]->getLibellecours(),'date_deb' => $cours->getDebut()->format('d/m/Y'),'date_fin' => $cours->getFin()->format('d/m/Y'),'status' => false));
                    }

                }
            }

            if(count($tmp) != 0){
                return new Response(json_encode(array("status" =>"ok", "datas" => json_encode($tmp))));
            }

        }


        return  new Response(json_encode(array("status" =>"ko")));
    }
}

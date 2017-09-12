<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\CoursIndependant;
use FrontendBundle\Entity\FermetureLieu;
use FrontendBundle\Entity\ModuleIndependant;
use FrontendBundle\Entity\ModuleIndependent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Symfony\Component\Validator\Constraints\Date;

class ParametrageController extends Controller
{
    /**
     * @Route("/parametrage", name="parametrage_module")
     */
    public function liste_modulesAction()
    {
        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl('connexion_login'));
        }

        if(trim($this->getUser()->getRole()) == "ROLE_USER"){
            return $this->render("EniBundle:Alternant:user_recherche.html.twig");
        }

        return $this->render('FrontendBundle:Parametrage:modules.html.twig');
    }

    /**
     * @Route("/parametrage/lieu", name="parametrage_lieu")
     */
    public function liste_lieuxAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em =  $this->getDoctrine()->getEntityManager('eni');
            $repository_lieux = $em->getRepository('EniBundle:Lieu');

            $lieux = $repository_lieux->findAll();

            $temp = array();

            foreach ($lieux as $id => $val){

                array_push($temp,array('id' => $val->getCodelieu(), 'libelle' => $val->getLibelle()));
            }

            return new Response(json_encode(array("status" =>"ok", "datas" => json_encode($temp))));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/parametrage/lieu/ajouter", name="parametrage_fermeture_ajout")
     */
    public function ajouter_fermetureAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:FermetureLieu');

            $lieux_temp = $request->get("datas");

            $fermeture = new FermetureLieu();
            $fermeture->setDateDebut(new \DateTime($lieux_temp["deb"]));
            $fermeture->setDateFin(new \DateTime($lieux_temp["fin"]));
            $fermeture->setDescription($lieux_temp["description"]);
            $fermeture->setLieuCode($lieux_temp["lieu"]);

            $new_fermeture = $repository->insertFermeture($fermeture,$this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" =>"ok","fermeture_id" => $new_fermeture->getIdFermeture())));
        }

        return "error";
    }

    /**
     * @Route("/parametrage/lieu/ajouter_verif", name="parametrage_fermeture_ajout_verif")
     */
    public function ajouter_fermeture_verifAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $lieux_temp = $request->get("datas");

            $em =  $this->getDoctrine()->getEntityManager('eni');

            $repository_independant = $this->getDoctrine()->getRepository('FrontendBundle:CoursIndependant');
            $repository = $em->getRepository('EniBundle:Cours');

            $cours_independant_debut = $repository_independant->getCoursDateDebutFirst(new \DateTime($lieux_temp["deb"]),$this->getDoctrine()->getManager());
            $cours_independant_fin = $repository_independant->getCoursDateFinFirst(new \DateTime($lieux_temp["fin"]),$this->getDoctrine()->getManager());

            $cours_independant_test_1 = $repository_independant->getCoursDateTest1($lieux_temp["deb"],$lieux_temp["fin"],$this->getDoctrine()->getManager());
            $cours_independant_test_2 = $repository_independant->getCoursDateTest2($lieux_temp["deb"],$lieux_temp["fin"],$this->getDoctrine()->getManager());
            $cours_independant_test_3 = $repository_independant->getCoursDateTest3($lieux_temp["deb"],$lieux_temp["fin"],$this->getDoctrine()->getManager());

            if(count($cours_independant_debut) === 0 && count($cours_independant_fin) === 0 && count($cours_independant_test_1) === 0 && count($cours_independant_test_2) === 0 && count($cours_independant_test_3) === 0){
                return new Response(json_encode(array("status" =>"ok")));
            }else{
                return new Response(json_encode(array("status" =>"ko")));
            }
        }

        return "error";
    }

    /**
     * @Route("/parametrage/lieu/supprimer", name="parametrage_fermeture_supprimer")
     */
    public function supprimer_fermetureAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:FermetureLieu');

            $fermeture_temp = $request->get("datas");

            $fermeture = $repository->getFermeturebyId($fermeture_temp["id"],$this->getDoctrine()->getManager());

            $repository->removeFermeture($fermeture,$this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" =>"ok")));
        }

        return "error";
    }

    /**
     * @Route("/parametrage/lieu/fermeture", name="parametrage_fermeture_liste")
     */
    public function liste_fermetureAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em =  $this->getDoctrine()->getEntityManager();
            $repository_fermeture = $em->getRepository('FrontendBundle:FermetureLieu');

            $fermeture = $repository_fermeture->getFermeture($this->getDoctrine()->getManager());

            $temp = array();

            foreach ($fermeture as $id => $val){
                array_push($temp,array('id' => $val->getIdFermeture(),'lieu' => $val->getLieuCode(), 'description' => $val->getDescription(),'deb'=>$val->getDateDebut(),'fin'=>$val->getDateFin()));
            }

            return new Response(json_encode(array("status" =>"ok", "datas" => json_encode($temp))));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/parametrage/module/ajouter", name="parametrage_module_ajout")
     */
    public function ajouter_moduleAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:ModuleIndependant');

            $module_temp = $request->get("datas");

            $module = new ModuleIndependant();
            $module->setLibelle($module_temp["long"]);
            $module->setLibelleCourt($module_temp["court"]);
            $module->setDateCreation(new \DateTime());
            $module->setDureeEnHeures(0);
            $module->setDureeEnSemaines(0);
            $module->setPrixPublicEnCours(0);

            $new_module = $repository->insertModule($module,$this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" =>"ok","module_id" => $new_module->getIdModule())));
        }

        return "error";
    }

    /**
     * @Route("/parametrage/module/supprimer", name="parametrage_module_supprimer")
     */
    public function supprimer_moduleAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $module_temp = $request->get("datas");

            $em =  $this->getDoctrine()->getEntityManager();
            $repository_cours = $em->getRepository('FrontendBundle:CoursIndependant');

            $cours = $repository_cours->getCours($module_temp["id"],$em);

            if(count($cours) === 0){
                $repository = $this->getDoctrine()->getRepository('FrontendBundle:ModuleIndependant');

                $module = $repository->getModulebyId($module_temp["id"],$this->getDoctrine()->getManager());

                $repository->removeModule($module,$this->getDoctrine()->getManager());

                return new Response(json_encode(array("status" =>"ok")));

            }else{
                return new Response(json_encode(array("status" =>"ko")));
            }

        }

        return "error";
    }

    /**
     * @Route("/parametrage/module/liste", name="parametrage_module")
     */
    public function liste_moduleAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em =  $this->getDoctrine()->getEntityManager();
            $repository_modules = $em->getRepository('FrontendBundle:ModuleIndependant');

            $repository_cours = $em->getRepository('FrontendBundle:CoursIndependant');


            $modules = $repository_modules->getModules($em);

            $temp = array();

            foreach ($modules as $id => $val){

                $cours = $repository_cours->getCoursFirst($val->getIdModule(),$em);

                if(count($cours) == 0){
                    array_push($temp,array('id' => $val->getIdModule(), 'long' => $val->getLibelle(),'cours' => $val->getLibelleCourt(),'reelle' => 'Non Defini', 'prevue' => 'Non Defini'));
                }else{
                    array_push($temp,array('id' => $val->getIdModule(), 'long' => $val->getLibelle(),'cours' => $val->getLibelleCourt(),'reelle' => $cours->getDureereelleenheures(),'prevue' => $cours->getDureeprevueenheures()));
                }

            }

            return new Response(json_encode(array("status" =>"ok", "datas" => json_encode($temp))));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/parametrage/module/modifier", name="parametrage_module_modifier")
     */
    public function modifier_moduleAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:ModuleIndependant');

            $module_temp = $request->get("datas");

            $module = $repository->getModulebyId($module_temp["id"],$this->getDoctrine()->getManager());

            $module->setLibelle($module_temp["long"]);
            $module->setLibelleCourt($module_temp["court"]);

            $new_module = $repository->updateModule($module,$this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" =>"ok","module_id" => $new_module->getIdModule())));
        }

        return "error";
    }

    /**
     * @Route("/parametrage/cours/ajouter", name="parametrage_module_plannification_ajout")
     */
    public function ajouter_coursAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $cours_temp = $request->get("datas");

            $repository_module = $this->getDoctrine()->getRepository('FrontendBundle:ModuleIndependant');
            $module = $repository_module->getModulebyId($cours_temp["module"],$this->getDoctrine()->getManager());

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:CoursIndependant');



            $cours = new CoursIndependant();
            $cours->setModuleIndependant($module);
            $cours->setDebut(new \DateTime($cours_temp["deb"]));
            $cours->setFin(new \DateTime($cours_temp["fin"]));
            $cours->setCodelieu($cours_temp["lieu"]);

            $cours->setDureeprevueenheures($cours_temp["duree_prevue"]);
            $cours->setDureereelleenheures($cours_temp["duree_reelle"]);
            $cours->setPrixpublicaffecte(0);
            $cours->setDatecreation(new \DateTime());
            $cours->setLibellecours("");

            $cours->setLibellecours($module->getLibelleCourt());
            $cours->setDateadefinir(false);

            $new_cours = $repository->insertCours($cours,$this->getDoctrine()->getManager());

            $obj = $repository->getId($cours,$this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" =>"ok","cours_id" => $obj[0]->getIdCours())));
        }

        return "error";
    }

    /**
     * @Route("/parametrage/cours/ajouterCustom", name="parametrage_module_plannification_ajout_custom")
     */
    public function ajouter_cours_customAction(Request $request){


        if ($request->isXMLHttpRequest()) {

            $cours_temp = $request->get("datas");

            $repository_module = $this->getDoctrine()->getRepository('FrontendBundle:ModuleIndependant');
            $module = $repository_module->getModulebyId($cours_temp["module"],$this->getDoctrine()->getManager());

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:CoursIndependant');

            $cours_temp_db = $repository->getCoursFirst($cours_temp["module"],$this->getDoctrine()->getManager());


            $cours = new CoursIndependant();
            $cours->setModuleIndependant($module);
            $cours->setDebut(new \DateTime($cours_temp["deb"]));
            $cours->setFin(new \DateTime($cours_temp["fin"]));
            $cours->setCodelieu($cours_temp["lieu"]);

            $cours->setDureeprevueenheures($cours_temp_db->getDureeprevueenheures());
            $cours->setDureereelleenheures($cours_temp_db->getDureereelleenheures());
            $cours->setPrixpublicaffecte(0);
            $cours->setDatecreation(new \DateTime());
            $cours->setLibellecours("");

            $cours->setLibellecours($module->getLibelleCourt());
            $cours->setDateadefinir(false);

            $new_cours = $repository->insertCours($cours,$this->getDoctrine()->getManager());

            $obj = $repository->getId($cours,$this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" =>"ok","cours_id" => $obj[0]->getIdCours())));
        }

        return "error";
    }

    /**
     * @Route("/parametrage/cours/liste", name="parametrage_cours")
     */
    public function liste_coursAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $cours_temp = $request->get("datas");

            $em =  $this->getDoctrine()->getEntityManager();
            $repository_cours = $em->getRepository('FrontendBundle:CoursIndependant');

            $cours = $repository_cours->getCours($cours_temp["id"],$em);

            $temp = array();

            foreach ($cours as $id => $val){

                array_push($temp,array('id' => $val->getIdCours(), 'deb' => $val->getDebut(),'fin' => $val->getFin(),'lieu' => $val->getCodelieu()));
            }

            return new Response(json_encode(array("status" =>"ok", "datas" => json_encode($temp))));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/parametrage/cours/supprimer", name="parametrage_cours_supprimer")
     */
    public function supprimer_coursAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $cours_temp = $request->get("datas");

            $em =  $this->getDoctrine()->getEntityManager();
            $repository_planning = $em->getRepository('FrontendBundle:PlanningCours');

            $planning = $repository_planning->getPlanningByCours($cours_temp["id"],$em);


            if(count($planning) === 0){
                $repository = $this->getDoctrine()->getRepository('FrontendBundle:CoursIndependant');

                $cours = $repository->getCoursbyId($cours_temp["id"],$this->getDoctrine()->getManager());

                $repository->removeCours($cours,$this->getDoctrine()->getManager());

                return new Response(json_encode(array("status" =>"ok")));

            }else{
                return new Response(json_encode(array("status" =>"ko")));
            }

        }

        return "error";
    }

    /**
     * @Route("/parametrage/indicateur/modifier", name="parametrage_indicateur_modifier")
     */
    public function indicateur_modifierAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $indicateur_temp = $request->get("datas");

            dump($indicateur_temp);
            die('ok');

            return new Response(json_encode(array("status" =>"ok")));

        }

        return "error";
    }

    /**
     * @Route("/parametrage/indicateur/load", name="parametrage_indicateur_load")
     */
    public function indicateur_loadAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            return new Response(json_encode(array("status" =>"ok", "indicateur" => 15)));

        }

        return "error";
    }



}

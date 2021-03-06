<?php

namespace FrontendBundle\Controller;

use DateTime;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManagerInterface;
use FrontendBundle\Entity\Planning;
use FrontendBundle\Entity\PlanningCours;
use FrontendBundle\Entity\PlanningExclusion;
use Knp\Snappy\Pdf;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlanningController extends Controller {

    /**
     * @Route("/planning/frame", name="planning_frame")
     */
    public function frameAction(Request $request) {
        $em = $this->getDoctrine()->getManager('eni');
        $planning = null;
        $planning_temps = $request->get("id_planning");
        if (!empty($planning_temps)) {
            $repository_planning = $em->getRepository('FrontendBundle:Planning');
            $planning = $repository_planning->findBy(array("id" => $planning_temps));
            $id_planning = $planning[0]->getIdplanning();
        } else {
            $id_planning = 0;
        }
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
                    "status" => "ok", "formations" => $formations, "entreprises" => $entreprises, "planning" => $planning[0],
                    "id_planning" => $id_planning
        ));
    }

    /**
     * @Route("/planning/editeur", name="planning_editeur")
     */
    public function editeurAction(Request $request) {
        $modules = null;
        $cours = null;
        $lieux = null;
        $cours_plannifier = null;

        $planning_temp = $request->get("planning");
        $em_eni = $this->getDoctrine()->getManager('eni');
        $em_front = $this->getDoctrine()->getManager('groupeo');
        $repository_lieu = $em_eni->getRepository("EniBundle:Lieu");
        $repository_modules = $em_eni->getRepository("EniBundle:Module");
        $repository_formation = $em_eni->getRepository("EniBundle:Formation");
        $repository_alternant = $em_eni->getRepository('EniBundle:Stagiaire');
        $repository_entreprise = $em_eni->getRepository("EniBundle:Entreprise");
        $repository_modules_inde = $em_front->getRepository("FrontendBundle:ModuleIndependant");
        $repository_ordre_module = $em_front->getRepository("FrontendBundle:OrdreModule");
        $planning_exclusion = $em_front->getRepository("FrontendBundle:PlanningExclusion");
        $repository_entreprise_stagiaire = $em_eni->getRepository("EniBundle:Stagiaireparentreprise");
        $repository_planning = $em_front->getRepository("FrontendBundle:Planning");
        $repository_planning_cours = $em_front->getRepository("FrontendBundle:PlanningCours");
        if ($planning_temp == "0") {
            $stagiaire_temp = $request->get("stagiaire");
            $entreprise_temp = $request->get("entreprise");
            $formation_temp = $request->get("formation");
            $date_debut_temp = $request->get("date_debut_contrat");
            $date_fin_temp = $request->get("date_fin_contrat");
            $max_heure_temp = $request->get("maxHeure");
            $max_semaine_temp = $request->get("maxSemaine");
            $planning_identique_temp = $request->get("planning_identique");
            $date_creation_temp = date("d/m/Y");
            $exclusions = $request->get("exclusion");
            $planning_obj_temp = $repository_planning->getPlanningMaxIdByStagiaire($planning_identique_temp, $formation_temp, $em_front);
            $planning_obj_temp = $repository_planning->findBy(array("idPlanning" => $planning_obj_temp[0][1]));
            $cours_plannifier = $repository_planning_cours->getCoursByPlanning($planning_obj_temp, $em_front);

//            $planning['']
        } else {
            $planning_obj_temp = $repository_planning->findBy(array("idPlanning" => $planning_temp));
            $stagiaire_temp = $planning_obj_temp[0]->getStagiairecode();
            $entreprise_temp = $planning_obj_temp[0]->getEntreprisecode();
            $formation_temp = $planning_obj_temp[0]->getFormationcode();
            $date_creation_temp = date_format($planning_obj_temp[0]->getDatecreation(), "d/m/y");
            $date_debut_temp = date_format($planning_obj_temp[0]->getDatedebut(), "d/m/y");
            $date_fin_temp = date_format($planning_obj_temp[0]->getDatefin(), "d/m/y");
            $max_heure_temp = $planning_obj_temp[0]->getMaxheureformation();
            $max_semaine_temp = $planning_obj_temp[0]->getMaxtempsformation();
            $cours_plannifier = $repository_planning_cours->getCoursByPlanning($planning_obj_temp, $em_front);
            $exclusions = $planning_exclusion->findBy(array("planningId" => $planning_temp));
        }
        $exclusions = !empty($exclusions) ? $exclusions : "";
        //var_dump($exclusions);
        $stagiaire = $repository_alternant->findBy(array("codestagiaire" => $stagiaire_temp));
        $entreprise = $repository_entreprise->findBy(array("codeentreprise" => $entreprise_temp));
        $formation = $repository_formation->findBy(array("codeformation" => $formation_temp));
        $lieux = $repository_lieu->findBy(array("archive" => "0"));
        $modules = $repository_modules->getModulesByLieuxFormation(array($lieux[0]->getCodelieu()), $formation[0]->getCodeformation(), $em_eni);
        $modules_Independant = $repository_modules_inde->findAll();
        $stagiaire_entreprise = $repository_entreprise_stagiaire->getIdStagiaireEntreprise($stagiaire[0]->getCodestagiaire(), $entreprise[0]->getCodeentreprise(), $em_eni);
        $nom_planning_temp = $planning_temp == "0" ? $stagiaire[0]->getNom() . "_" . $stagiaire[0]->getPrenom() . "_" . str_replace(" ", "_", $entreprise[0]->getRaisonSociale()) . "_" . trim($formation[0]->getLibelleCourt()) . "_V1" : $planning_obj_temp[0]->getNom();
        $planning['id'] = $planning_temp;
        $planning['date_creation'] = $date_creation_temp;
        $planning['nom'] = $nom_planning_temp;
        $planning['stagiaire'] = $stagiaire[0];
        $planning['entreprise'] = $entreprise[0];
        $planning['stagiaire_entreprise'] = $stagiaire_entreprise[0]["numlien"];
        $planning['date_debut_contrat'] = $date_debut_temp;
        $planning['date_fin_contrat'] = $date_fin_temp;
        $planning['max_heure'] = !empty($max_heure_temp) ? $max_heure_temp : $formation[0]->getHeurescentre();
        $planning['max_semaine'] = !empty($max_semaine_temp) ? $max_semaine_temp : 0;
        $planning['createur'] = 1;
        $ordre_module_temp = $repository_ordre_module->findBy(array("ordre" => 0, "formationCode" => $formation[0]->getCodeformation()));
        $ordre_module_array = array();
        $couleur = array("btn-warning", "btn-danger", "btn-info", "btn-success", "bg-gray", "bg-orange", "bg-purple");
        foreach ($ordre_module_temp as $om) {
            $random = rand(0, count($couleur) - 1);
            $module = $repository_modules->findBy(array("idmodule" => $om->getModuleId()));
            array_push($ordre_module_array, array("module_id" => $om->getModuleId(), "libelle" => $module[0]->getLibelle(),
                "couleur" => $couleur[$random], "ordre" => 0));
            unset($couleur[$random]);
        }
        return $this->render('FrontendBundle:Planning:editeur.html.twig', array(
                    "planning" => $planning, "cours_plannifier" => $cours_plannifier, "modules" => $modules,
                    "modulesIndependants" => $modules_Independant, "cours" => $cours, "lieux" => $lieux,
                    "formation" => $formation[0], "ordre_module" => $ordre_module_array, "exclusions" => json_encode($exclusions)
        ));
    }

    /**
     * @Route("/planning/status_update", name="planning_status_update")
     * Mise à jour de l'etat d'un planning
     */
    public function status_updateAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getEntityManager('groupeo');
            $repository_planning = $em->getRepository('FrontendBundle:Planning');

            $recherche_temp = $request->get("recherche");

            $plannings = $repository_planning->getPlanningByLien($recherche_temp["planning"], $this->getDoctrine()->getManager('groupeo'));

            $planning = $plannings[0];

            $planning->setEtat($recherche_temp["status"]);

            $new_planning = $repository_planning->modifierPlanningStatus($planning, $this->getDoctrine()->getManager('groupeo'));

            return new Response(json_encode(array("status" => "ok")));
        }
    }

    /**
     * @Route("/planning/ajouter", name="planning_ajouter")
     */
    public function ajouterAction(Request $request) {
        $planning_temp = $request->get("id");
        $nom_planning_temp = $request->get("nom");
        $stagiaire_temp = $request->get("stagiaire");
        $entreprise_temp = $request->get("entreprise");
        $stagiaire_entreprise_temp = $request->get("stagiaire_entreprise");
        $formation_temp = $request->get("formation");
        $date_debut_temp = $request->get("date_debut");
        $date_fin_temp = $request->get("date_fin");
        $max_heure_temp = $request->get("max_heure");
        $max_semaine_temp = $request->get("max_semaine");
        $createur_temp = $request->get("createur");
        $cours_temps = $request->get("cours");
        $exclusions = $request->get("exclusions");
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $planning = new Planning();
        $planning->setNom($nom_planning_temp);
        $planning->setDateCreation(new DateTime());
        $planning->setDateDebut(DateTime::createFromFormat('d/m/Y', $date_debut_temp));
        $planning->setDateFin(DateTime::createFromFormat('d/m/Y', $date_fin_temp));
        $planning->setMaxHeureFormation($max_heure_temp);
        $planning->setMaxTempsFormation($max_semaine_temp);
        $planning->setEntrepriseCode($entreprise_temp);
        $planning->setFormationCode($formation_temp);
        $planning->setStagiaireCode($stagiaire_temp);
        $planning->setStagiaireEntrepriseNumlien($stagiaire_entreprise_temp);
        $planning->setCreateur($usr);
        $planning->setEtat(3);

        $repository = $this->getDoctrine()->getRepository('FrontendBundle:Planning');
        $repository_planning_cours = $this->getDoctrine()->getRepository('FrontendBundle:PlanningCours');
        $repository_planning_exclusion = $this->getDoctrine()->getRepository('FrontendBundle:PlanningExclusion');
        $new_planning = $repository->insertPlanning($planning, $this->getDoctrine()->getManager());

        if (isset($cours_temps["ajouter"])) {
            foreach ($cours_temps["ajouter"] as $pla_cours) {
                $cours = new PlanningCours();
                $cours->setPlanning($new_planning);
                $cours->setCoursId($pla_cours['id']);
                $cours->setOrdre($pla_cours['ordre']);
                if ($pla_cours['inde']) {
                    $cours->setCoursIndependant($pla_cours['id']);
                }
                $repository_planning_cours->insertCours($cours, $this->getDoctrine()->getManager());
            }
        }

        $exclusions = json_decode($exclusions);
        if (!empty($exclusions)) {
            for ($i = 0; $i < count($exclusions['debut']); $i++) {
                $exclusions_new = new PlanningExclusion();
                $exclusions_new->setPlanning($new_planning);
                $exclusions_new->setDateDebut(exclusions['debut'][$i]);
                $exclusions_new->setDateFin(exclusions['fin'][$i]);
                $repository_planning_exclusion->insertExclusion($exclusions_new, $this->getDoctrine()->getManager());
            }
        }

        return new Response(json_encode(array("status" => "ok", "planning_id" => $new_planning->getIdPlanning())));
    }

    /**
     * @Route("/planning/modifier", name="planning_modifier")
     */
    public function modifierAction(Request $request) {
        $planning_temp = $request->get("id");
        $nom_planning_temp = $request->get("nom");
        $stagiaire_temp = $request->get("stagiaire");
        $entreprise_temp = $request->get("entreprise");
        $stagiaire_entreprise_temp = $request->get("stagiaire_entreprise");
        $formation_temp = $request->get("formation");
        $date_debut_temp = $request->get("date_debut");
        $date_fin_temp = $request->get("date_fin");
        $max_heure_temp = $request->get("max_heure");
        $max_semaine_temp = $request->get("max_semaine");
        $createur_temp = $request->get("createur");
        $cours_temps = $request->get("cours");
        $usr = $this->get('security.token_storage')->getToken()->getUser();

        $repository = $this->getDoctrine()->getRepository('FrontendBundle:Planning');
        $repository_planning_cours = $this->getDoctrine()->getRepository('FrontendBundle:PlanningCours');
        $planning = $repository->findBy(array("idPlanning" => $planning_temp));

        if (isset($cours_temps["supprimer"])) {
            foreach ($cours_temps["supprimer"] as $pla_cours) {
                $cours = new PlanningCours();
                $cours->setPlanning($planning[0]);
                $cours->setCoursId($pla_cours['id']);
                $cours->setOrdre($pla_cours['ordre']);
                if ($pla_cours['inde']) {
                    $cours->setCoursIndependant($pla_cours['id']);
                }
                $repository_planning_cours->deleteCours($cours, $this->getDoctrine()->getManager());
            }
        }
        if (isset($cours_temps["modifier"])) {
            foreach ($cours_temps["modifier"] as $pla_cours) {
                $cours = new PlanningCours();
                $cours->setPlanning($planning[0]);
                $cours->setCoursId($pla_cours['id']);
                $cours->setOrdre($pla_cours['ordre']);
                if ($pla_cours['inde']) {
                    $cours->setCoursIndependant($pla_cours['id']);
                }
                $repository_planning_cours->updateCours($cours, $this->getDoctrine()->getManager());
            }
        }
        if (isset($cours_temps["ajouter"])) {
            foreach ($cours_temps["ajouter"] as $pla_cours) {
                $cours = new PlanningCours();
                $cours->setPlanning($planning[0]);
                $cours->setCoursId($pla_cours['id']);
                $cours->setOrdre($pla_cours['ordre']);
                if ($pla_cours['inde']) {
                    $cours->setCoursIndependant($pla_cours['id']);
                }
                $repository_planning_cours->insertCours($cours, $this->getDoctrine()->getManager());
            }
        }



        return new Response(json_encode(array("status" => "ok", "planning_id" => $planning[0]->getIdPlanning())));
    }

    /**
     * Export to PDF
     * 
     * @Route("/planning/pdf", name="planning_pdf")
     */
    public function pdfAction(Request $request, $id) {
        $planning_cours = array();
        $em_eni = $this->getDoctrine()->getManager('eni');
        $em_front = $this->getDoctrine()->getManager('groupeo');

        $repository_lieu = $em_eni->getRepository("EniBundle:Lieu");
        $repository_modules = $em_eni->getRepository("EniBundle:Module");
        $repository_cours = $em_eni->getRepository("EniBundle:Cours");
        $repository_formation = $em_eni->getRepository("EniBundle:Formation");
        $repository_alternant = $em_eni->getRepository('EniBundle:Stagiaire');
        $repository_entreprise = $em_eni->getRepository("EniBundle:Entreprise");
        $repository_modules_inde = $em_front->getRepository("FrontendBundle:ModuleIndependant");
        $repository_entreprise_stagiaire = $em_eni->getRepository("EniBundle:Stagiaireparentreprise");

        $repo_planning = $em_front->getRepository('FrontendBundle:Planning');
        $repo_planning_cours = $em_front->getRepository('FrontendBundle:PlanningCours');
        $planning = $repo_planning->findBy(array("idPlanning" => $id));
        $planning_cours_temp = $repo_planning_cours->findBy(array("planning" => $id), array('ordre' => 'ASC'));

        $formation = $repository_formation->findBy(array("codeformation" => $planning[0]->getFormationCode()));
        $entreprise = $repository_entreprise->findBy(array("codeentreprise" => $planning[0]->getEntrepriseCode()));
        $stagiaire = $repository_alternant->findBy(array("codestagiaire" => $planning[0]->getStagiaireCode()));
        $duree_total = 0;

        if (count($planning_cours_temp) != 0) {

            foreach ($planning_cours_temp as $k) {
                // var_dump($k) . "<br>";
                $cours = ($k->getCoursid() != null) ? $repository_cours->findBy(array("idcours" => $k->getCoursid())) : null;
                $lieu_temps = ($k->getCoursid() != null) ? $repository_lieu->findBy(array("codelieu" => $cours[0]->getCodelieu())) : null;
                $cours_temps = ($k->getCoursid() != null) ? array("id" => $k->getCoursid(), "debut" => $cours[0]->getDebut(), "fin" => $cours[0]->getFin(), "dureeheure" => $cours[0]->getDureereelleenheures(), "lieu_lib" => $lieu_temps[0]->getLibelle()) : null;
                $module = ($k->getCoursid() != null) ? $repository_modules->findBy(array("idmodule" => $cours[0]->getIdmodule())) : null;
                $module_temps = ($k->getCoursid() != null) ? array("libelle" => $module[0]->getLibelle()) : null;
                $cours_inde = null;
                $module_inde = null;
                $duree_total += ($k->getCoursid() != null) ? $cours[0]->getDureereelleenheures() : 0;
                $planning_temp = array("cours" => $cours_temps,
                    "module" => $module_temps);
                array_push($planning_cours, $planning_temp);
            }


            $html = $this->renderView('FrontendBundle:Planning:pdf.html.twig', array("planning" => $planning[0], "formation" => $formation[0],
                "entreprise" => $entreprise[0], "stagiaire" => $stagiaire[0], "planning_cours" => $planning_cours, "duree_tot" => $duree_total,
                'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()));

            $filename = $planning[0]->getNom() . '.pdf';

            $snappy = new Pdf($this->get('kernel')->getRootDir() . '/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf.exe');

            return new Response(
                    $snappy->getOutputFromHtml($html, array('lowquality' => false,
                        'encoding' => 'utf-8',
                        'images' => true, 'load-error-handling' => 'ignore')), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                    ]
            );
        } else {
            return $this->render('FrontendBundle:Accueil:erreur.html.twig', array("erreur" => "Le planning ne possendant aucun module, il est impossible de le gÃ©nÃ©rer"));
        }
    }

    /**
     * @Route("/planning/pdfcustom", name="planning_pdf")
     * Generation d'un pdf 
     */
    public function pdfCustomAction(Request $request, $id) {


        $planning_cours = array();
        $em_eni = $this->getDoctrine()->getManager('eni');
        $em_front = $this->getDoctrine()->getManager('groupeo');
        /* $formation_temp = $request->get("code_formation");
          $repository = $em_front->getRepository('FrontendBundle:Planning');
          $repository_stagiaire = $em_eni->getRepository('EniBundle:Stagiaire');
          $stagiaires_temps = $repository->getPlanningStagiaires($formation_temp, $em_front); */

        $repository_lieu = $em_eni->getRepository("EniBundle:Lieu");
        $repository_modules = $em_eni->getRepository("EniBundle:Module");
        $repository_cours = $em_eni->getRepository("EniBundle:Cours");
        $repository_formation = $em_eni->getRepository("EniBundle:Formation");
        $repository_alternant = $em_eni->getRepository('EniBundle:Stagiaire');
        $repository_entreprise = $em_eni->getRepository("EniBundle:Entreprise");
        $repository_modules_inde = $em_front->getRepository("FrontendBundle:ModuleIndependant");
        $repository_cours_inde = $em_front->getRepository("FrontendBundle:CoursIndependant");
        $repository_entreprise_stagiaire = $em_eni->getRepository("EniBundle:Stagiaireparentreprise");

        $repo_planning = $em_front->getRepository('FrontendBundle:Planning');
        $repo_planning_cours = $em_front->getRepository('FrontendBundle:PlanningCours');
        $planning = $repo_planning->findBy(array("idPlanning" => $id));
        $planning_cours_temp = $repo_planning_cours->findBy(array("planning" => $id), array('ordre' => 'ASC'));

        $formation = $repository_formation->findBy(array("codeformation" => $planning[0]->getFormationCode()));
        $entreprise = $repository_entreprise->findBy(array("codeentreprise" => $planning[0]->getEntrepriseCode()));
        $stagiaire = $repository_alternant->findBy(array("codestagiaire" => $planning[0]->getStagiaireCode()));

        $duree_total = 0;

        if (count($planning_cours_temp) != 0) {
            foreach ($planning_cours_temp as $k) {
                // var_dump($k) . "<br>";
                $cours = ($k->getCoursid() != null) ? $repository_cours->findBy(array("idcours" => $k->getCoursid())) : null;


                if ($k->getCoursid() == null) {
                    $cours = $repository_cours_inde->getCours2ById($k->getCoursIndependant(), $em_front);

                    $lieu_temps = ($k->getCoursIndependant() != null) ? $repository_lieu->findBy(array("codelieu" => $cours[0]->getCodelieu())) : null;
                    $cours_temps = ($k->getCoursIndependant() != null) ? array("id" => $k->getCoursIndependant()->getIdCours(), "debut" => $cours[0]->getDebut(), "fin" => $cours[0]->getFin(), "dureeheure" => $cours[0]->getDureereelleenheures(), "lieu_lib" => $lieu_temps[0]->getLibelle()) : null;
                    $module_temps = array("libelle" => $k->getCoursIndependant()->getLibelleCours());
                } else {
                    $lieu_temps = ($k->getCoursid() != null) ? $repository_lieu->findBy(array("codelieu" => $cours[0]->getCodelieu())) : null;
                    $cours_temps = ($k->getCoursid() != null) ? array("id" => $k->getCoursid(), "debut" => $cours[0]->getDebut(), "fin" => $cours[0]->getFin(), "dureeheure" => $cours[0]->getDureereelleenheures(), "lieu_lib" => $lieu_temps[0]->getLibelle()) : null;
                    $module = ($k->getCoursid() != null) ? $repository_modules->findBy(array("idmodule" => $cours[0]->getIdmodule())) : null;
                    //$module_temps = ($k->getCoursid() != null) ? array("libelle" => $module[0]->getLibelle()) : null;
                    $module_temps = ($k->getCoursid() != null) ? array("libelle" => $cours[0]->getLibelleCours()) : null;
                }

                $cours_inde = null;
                $module_inde = null;

                $duree_total += ($k->getCoursid() != null) ? $cours[0]->getDureereelleenheures() : 0;
                $planning_temp = array("cours" => $cours_temps,
                    "module" => $module_temps);
                array_push($planning_cours, $planning_temp);
            }


            $html = $this->renderView('FrontendBundle:Planning:pdf.html.twig', array("planning" => $planning[0], "formation" => $formation[0],
                "entreprise" => $entreprise[0], "stagiaire" => $stagiaire[0], "planning_cours" => $planning_cours, "duree_tot" => $duree_total,
                'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()));

            $filename = $planning[0]->getNom() . '.pdf';


            return new Response(
                    $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array('lowquality' => false,
                        'encoding' => 'utf-8',
                        'images' => true, 'load-error-handling' => 'ignore')), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                    ]
            );
        } else {
            return $this->render('FrontendBundle:Accueil:erreur.html.twig', array("erreur" => "Le planning ne possendant aucun module, il est impossible de le gÃ©nÃ©rer"));
        }
    }

    /**
     * @Route("/planning/pdfcustom", name="planning_pdf")
     * Generation d'un planning + envoi par mail
     */
    public function mailAction(Request $request, $id, $mail) {

        $planning_cours = array();
        $em_eni = $this->getDoctrine()->getManager('eni');
        $em_front = $this->getDoctrine()->getManager('groupeo');

        $repository_lieu = $em_eni->getRepository("EniBundle:Lieu");
        $repository_modules = $em_eni->getRepository("EniBundle:Module");
        $repository_cours = $em_eni->getRepository("EniBundle:Cours");
        $repository_formation = $em_eni->getRepository("EniBundle:Formation");
        $repository_alternant = $em_eni->getRepository('EniBundle:Stagiaire');
        $repository_entreprise = $em_eni->getRepository("EniBundle:Entreprise");
        $repository_modules_inde = $em_front->getRepository("FrontendBundle:ModuleIndependant");
        $repository_cours_inde = $em_front->getRepository("FrontendBundle:CoursIndependant");
        $repository_entreprise_stagiaire = $em_eni->getRepository("EniBundle:Stagiaireparentreprise");

        $repo_planning = $em_front->getRepository('FrontendBundle:Planning');
        $repo_planning_cours = $em_front->getRepository('FrontendBundle:PlanningCours');
        $planning = $repo_planning->findBy(array("idPlanning" => $id));
        $planning_cours_temp = $repo_planning_cours->findBy(array("planning" => $id), array('ordre' => 'ASC'));

        $formation = $repository_formation->findBy(array("codeformation" => $planning[0]->getFormationCode()));
        $entreprise = $repository_entreprise->findBy(array("codeentreprise" => $planning[0]->getEntrepriseCode()));
        $stagiaire = $repository_alternant->findBy(array("codestagiaire" => $planning[0]->getStagiaireCode()));

        $duree_total = 0;

        if (count($planning_cours_temp) != 0) {
            foreach ($planning_cours_temp as $k) {
                // var_dump($k) . "<br>";
                $cours = ($k->getCoursid() != null) ? $repository_cours->findBy(array("idcours" => $k->getCoursid())) : null;

                if ($k->getCoursid() == null) {
                    $cours = $repository_cours_inde->getCours2ById($k->getCoursIndependant(), $em_front);

                    $lieu_temps = ($k->getCoursIndependant() != null) ? $repository_lieu->findBy(array("codelieu" => $cours[0]->getCodelieu())) : null;
                    $cours_temps = ($k->getCoursIndependant() != null) ? array("id" => $k->getCoursIndependant()->getIdCours(), "debut" => $cours[0]->getDebut(), "fin" => $cours[0]->getFin(), "dureeheure" => $cours[0]->getDureereelleenheures(), "lieu_lib" => $lieu_temps[0]->getLibelle()) : null;
                    $module_temps = array("libelle" => $k->getCoursIndependant()->getLibelleCours());
                } else {
                    $lieu_temps = ($k->getCoursid() != null) ? $repository_lieu->findBy(array("codelieu" => $cours[0]->getCodelieu())) : null;
                    $cours_temps = ($k->getCoursid() != null) ? array("id" => $k->getCoursid(), "debut" => $cours[0]->getDebut(), "fin" => $cours[0]->getFin(), "dureeheure" => $cours[0]->getDureereelleenheures(), "lieu_lib" => $lieu_temps[0]->getLibelle()) : null;
                    $module = ($k->getCoursid() != null) ? $repository_modules->findBy(array("idmodule" => $cours[0]->getIdmodule())) : null;
                    //$module_temps = ($k->getCoursid() != null) ? array("libelle" => $module[0]->getLibelle()) : null;
                    $module_temps = ($k->getCoursid() != null) ? array("libelle" => $cours[0]->getLibelleCours()) : null;
                }

                $cours_inde = null;
                $module_inde = null;

                $duree_total += ($k->getCoursid() != null) ? $cours[0]->getDureereelleenheures() : 0;
                $planning_temp = array("cours" => $cours_temps,
                    "module" => $module_temps);
                array_push($planning_cours, $planning_temp);
            }


            $html = $this->renderView('FrontendBundle:Planning:pdf.html.twig', array("planning" => $planning[0], "formation" => $formation[0],
                "entreprise" => $entreprise[0], "stagiaire" => $stagiaire[0], "planning_cours" => $planning_cours, "duree_tot" => $duree_total,
                'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()));

            $filename = $planning[0]->getNom() . '.pdf';


            $name = $stagiaire[0]->getNom() . ' ' . $stagiaire[0]->getPrenom();
            $formation = $formation[0]->getLibelleLong();

            $message = (new \Swift_Message('Planning de formation ' . $name))
                    ->setFrom('eniecolegroupeo@gmail.com')
                    ->setTo($mail)
                    ->setBody(
                    $this->renderView(
                            'Mail/mailPlanning.html.twig', array('name' => $name, 'formation' => $formation)
                    ), 'text/html'
            );

            $attachment = \Swift_Attachment::newInstance($this->get('knp_snappy.pdf')->getOutputFromHtml($html, array('lowquality' => false, 'encoding' => 'utf-8', 'images' => true, 'load-error-handling' => 'ignore')), 'Planning ' . $name . '.pdf', 'application/pdf');
            // Attach it to the message
            $message->attach($attachment);


            $this->get('mailer')->send($message);

            return $this->render('FrontendBundle:Accueil:mail.html.twig');
        } else {
            return $this->render('FrontendBundle:Accueil:erreur.html.twig', array("erreur" => "Le planning ne possendant aucun module, il est impossible de le gÃ©nÃ©rer"));
        }
    }

}

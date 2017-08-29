<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Planning;
use FrontendBundle\Entity\PlanningCours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

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
                    "status" => "ok", "formations" => $formations, "entreprises" => $entreprises, "planning" => $planning
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
        $repository_entreprise_stagiaire = $em_eni->getRepository("EniBundle:Stagiaireparentreprise");
        if ($planning_temp === "0") {
            $stagiaire_temp = $request->get("stagiaire");
            $entreprise_temp = $request->get("entreprise");
            $formation_temp = $request->get("formation");
            $date_debut_temp = $request->get("date_debut_contrat");
            $date_fin_temp = $request->get("date_fin_contrat");
            $max_heure_temp = $request->get("max_heure");
            $max_semaine_temp = $request->get("max_semaine");
            $date_creation_temp = date("d/m/Y");
//            $planning['']
        } else {
            $repository_planning = $em_front->getRepository("FrontendBundle:Planning");
            $repository_planning_cours = $em_front->getRepository("FrontendBundle:PlanningCours");
            $planning_obj_temp = $repository_planning->findBy(array("idPlanning" => $planning_temp));
            $stagiaire_temp = $planning_obj_temp[0]->getStagiairecode();
            $entreprise_temp = $planning_obj_temp[0]->getEntreprisecode();
            $formation_temp = $planning_obj_temp[0]->getFormationcode();
            $date_creation_temp = date_format($planning_obj_temp[0]->getDatecreation(), "d/m/y");
            $date_debut_temp = date_format($planning_obj_temp[0]->getDatedebut(), "d/m/y");
            $date_fin_temp = date_format($planning_obj_temp[0]->getDatefin(), "d/m/y");
            $max_heure_temp = $planning_obj_temp[0]->getMaxheureformation();
            $max_semaine_temp = $planning_obj_temp[0]->getMaxtempsformation();
            $cours_plannifier = $repository_planning_cours->getCoursByPLanning($planning_obj_temp,$em_front);
            
        }

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
        return $this->render('FrontendBundle:Planning:editeur.html.twig', array(
                    "planning" => $planning, "cours_plannifier" => $cours_plannifier, "modules" => $modules, "modulesIndependants" => $modules_Independant, "cours" => $cours, "lieux" => $lieux, "formation" => $formation[0]
        ));
    }

    /**
     * @Route("/planning/status_update", name="planning_status_update")
     */
    /*public function status_updateAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $em =  $this->getDoctrine()->getEntityManager('groupeo');
            $repository_planning = $em->getRepository('FrontendBundle:Planning');

            $recherche_temp = $request->get("recherche");

            $plannings = $repository_planning->getPlanningByLien($recherche_temp["planning"],$this->getDoctrine()->getManager('groupeo'));

            $planning = $plannings[0];

            $planning->setEtat($recherche_temp["status"]);

            $new_planning = $repository_planning->modifierPlanningStatus($planning,$this->getDoctrine()->getManager('groupeo'));

            return new Response(json_encode(array("status" =>"ok")));
        }*/
        
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

        $repository = $this->getDoctrine()->getRepository('FrontendBundle:Planning');
        $repository_planning_cours = $this->getDoctrine()->getRepository('FrontendBundle:PlanningCours');
        $new_planning = $repository->insertPlanning($planning, $this->getDoctrine()->getManager());

        foreach ($cours_temps as $pla_cours) {
            $cours = new PlanningCours();
            $cours->setPlanning($new_planning);
            $cours->setCoursId($pla_cours['id']);
            $cours->setOrdre($pla_cours['ordre']);
            if ($pla_cours['inde']) {
                $cours->setCoursIndependant($pla_cours['id']);
            }
            $repository_planning_cours->insertCours($cours, $this->getDoctrine()->getManager());
        }

        return new Response(json_encode(array("status" => "ok", "planning_id" => $new_planning->getIdPlanning())));
    }

    /**
     * Export to PDF
     * 
     * @Route("/planning/pdf/{id}", name="planning_pdf")
     */
    public function pdfAction(Request $request, $id) {

        $repo_planning = $this->getDoctrine()->getRepository('FrontendBundle:Planning');
        $planning = $repo_planning->findBy(array("id" => $id));

        $html = $this->renderView('FrontendBundle:Planning:pdf.html.twig', array("planning" => $planning));

        $filename = sprintf($planning->getNom() . '.pdf', date('Y-m-d'));

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                ]
        );
>>>>>>> origin/master
    }

}

<?php

namespace FrontendBundle\Controller;

use EniBundle\Entity\Stagiaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MailController extends Controller
{
    public function test_passwordMailAction()
    {
        $message = (new \Swift_Message('Nouveau mot de passe'))
            ->setFrom('eniecolegroupeo@gmail.com')
            ->setTo('eniecolegroupeoclient@gmail.com')
            ->setBody(
                $this->renderView(
                    'Mail/mailPassword.html.twig',
                    array('password' => 'test')
                ),
                'text/html'
            );


        $this->get('mailer')->send($message);


        return $this->render('FrontendBundle:Accueil:mail.html.twig');
    }

    public function test_planningMailAction(Request $request)
    {
        $id = 4;

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
        //$stagiaire = $repository_alternant->findBy(array("codestagiaire" => $planning[0]->getStagiaireCode()));

        $stagiaire = new Stagiaire();
        $stagiaire->setNom("Bures");
        $stagiaire->setPrenom("Maxence");

        $duree_total = 0;

        foreach ($planning_cours_temp as $k) {
            // var_dump($k) . "<br>";
            $cours = ($k->getCoursid() != null) ? $repository_cours->findBy(array("idcours" => $k->getCoursid())) : null;

            if($k->getCoursid() == null) {
                $cours = $repository_cours_inde->getCours2ById($k->getCoursIndependant(),$em_front);

                $lieu_temps = ($k->getCoursIndependant() != null) ? $repository_lieu->findBy(array("codelieu" => $cours[0]->getCodelieu())) : null;
                $cours_temps = ($k->getCoursIndependant() != null) ? array("id" => $k->getCoursIndependant()->getIdCours(), "debut" => $cours[0]->getDebut(), "fin" => $cours[0]->getFin(), "dureeheure" => $cours[0]->getDureereelleenheures(), "lieu_lib" => $lieu_temps[0]->getLibelle()) : null;
                $module_temps = array("libelle" => $k->getCoursIndependant()->getLibelleCours());

            }else{
                $lieu_temps = ($k->getCoursid() != null) ? $repository_lieu->findBy(array("codelieu" => $cours[0]->getCodelieu())) : null;
                $cours_temps = ($k->getCoursid() != null) ? array("id" => $k->getCoursid(), "debut" => $cours[0]->getDebut(), "fin" => $cours[0]->getFin(), "dureeheure" => $cours[0]->getDureereelleenheures(), "lieu_lib" => $lieu_temps[0]->getLibelle()) : null;
                $module = ($k->getCoursid() != null) ? $repository_modules->findBy(array("idmodule" => $cours[0]->getIdmodule())) : null;
                $module_temps = ($k->getCoursid() != null) ? array("libelle" => $module[0]->getLibelle()) : null;
            }

            $cours_inde = null;
            $module_inde = null;

            $duree_total += ($k->getCoursid() != null) ? $cours[0]->getDureereelleenheures() : 0;
            $planning_temp = array("cours" => $cours_temps,
                "module" => $module_temps);
            array_push($planning_cours, $planning_temp);
        }


        $html = $this->renderView('FrontendBundle:Planning:pdf.html.twig', array("planning" => $planning[0], "formation" => $formation[0],
            "entreprise" => $entreprise[0], "stagiaire" => $stagiaire, "planning_cours" => $planning_cours,"duree_tot" => $duree_total,
            'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()));

        $filename = $planning[0]->getNom() . '.pdf';


        $name = "Maxence Bures";
        $formation = "Manager des systèmes d'informations";

        $message = (new \Swift_Message('Planning de formation '.$name))
            ->setFrom('eniecolegroupeo@gmail.com')
            ->setTo('eniecolegroupeoclient@gmail.com')
            ->setBody(
                $this->renderView(
                    'Mail/mailPlanning.html.twig',
                    array('name' => $name, 'formation' => $formation)
                ),
                'text/html'
            );

        $attachment = \Swift_Attachment::newInstance($this->get('knp_snappy.pdf')->getOutputFromHtml($html, array('lowquality' => false, 'encoding' => 'utf-8', 'images' => true, 'load-error-handling' => 'ignore')), 'Planning '.$name.'.pdf', 'application/pdf');
        // Attach it to the message
        $message->attach($attachment);


        $this->get('mailer')->send($message);

        return $this->render('FrontendBundle:Accueil:mail.html.twig');
    }
}

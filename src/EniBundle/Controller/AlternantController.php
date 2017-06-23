<?php

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AlternantController extends Controller
{
    /**
     * @Route("/alternant/recherche", name="alternant_recherche")
     */
    public function rechercheAction()
    {
        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl($this->container->getParameter('url_login')));
        }

        return $this->render('EniBundle:Alternant:recherche.html.twig');
    }

    /**
     * @Route("/alternant/chargement", name="alternant_chargement")
     */
    public function chargementAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getEntityManager('eni')->getRepository('EniBundle:Entreprise');

            //dump($this->getDoctrine()->getEntityManager('eni2')->getRepository('SiteEniBundle:Entreprise') instanceOf EniBunble\Repository\EntrepriseRepository);
            //die('ok');
            //dump($repository);

            //die($repository);

            //$utilisateur = $repository->search(null,$this->getDoctrine()->getManager('eni'));

            echo 'le repository est de classe '.get_class($repository);exit;

            $utilisateur = $repository->test();
            //dump($utilisateur);

            //dump($utilisateur);
            die('ok');

            /*$recherche_temp = $request->get("recherche");

            $repository = $this->getDoctrine()->getManager('eni')->getRepository('EniBundle:Stagiaire');

            $utilisateurs = $repository->test($recherche_temp,$this->getDoctrine()->getManager('eni'));

            dump($recherche_temp);
            die("");
            /*
            /*
            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Alternant');


            $formations_temp = $repository->findAll();

            $temp = array();
            foreach ($formations_temp as $x){
                array_push($temp,array('court' => $x->getLibellecourt(), 'long' => $x->getLibellelong(), 'id' => $x->getCodeformation()));
            }*/


            return new Response(json_encode(array("status" =>"ok")));
        }
        return new Response(json_encode("error"));
    }
}

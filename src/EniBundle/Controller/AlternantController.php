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

            $em =  $this->getDoctrine()->getEntityManager('eni');
            $recherche_temp = $request->get("recherche");
            
            if(($recherche_temp["nom"] != "") OR ($recherche_temp["prenom"] != "") OR ($recherche_temp["mail"] != "") AND $recherche_temp["entreprise"] == -1 AND $recherche_temp["formation"] == -1){
                $repository = $em->getRepository('EniBundle:Stagiaire');
                $utilisateurs = $repository->rechercherNominative($recherche_temp,$this->getDoctrine()->getManager('eni'));
            }

            if($recherche_temp["entreprise"] != -1){
                $repository = $em->getRepository('EniBundle:Stagiaire');
                $utilisateurs = $repository->rechercherNominativeEntreprise($recherche_temp,$this->getDoctrine()->getManager('eni'));
            }

            if($recherche_temp["formation"] != -1){

            }

            return new Response(json_encode(array("status" =>"ok", "datas" => $utilisateurs)));
        }
        return new Response(json_encode("error"));
    }

    /**
     * @Route("/alternant/detail", name="alternant_detail")
     */
    public function detailAction(Request $request){
        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl($this->container->getParameter('url_login')));
        }

        return $this->render('EniBundle:Alternant:detail.html.twig');
    }
}

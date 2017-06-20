<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Utilisateur;
use FrontendBundle\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UtilisateurController extends Controller
{
    /**
     * @Route("/utilisateur/liste", name="utilisateur_liste")
     */
    public function listeAction()
    {
        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl($this->container->getParameter('url_login')));
        }

        $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');

        $utilisateurs_temp = $repository->findAll();

        return $this->render('FrontendBundle:Utilisateur:liste.html.twig',array('utilisateurs'=> $utilisateurs_temp));
    }

    /**
     * @Route("/utilisateur/ajouter", name="utilisateur_ajouter")
     */
    public function ajouterAction(Request $request){

        if ($request->isXMLHttpRequest()) {


            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = new Utilisateur();
            $utilisateur->setName($utilisateur_temp["nom"]);
            $utilisateur->setEmail($utilisateur_temp["mail"]);
            $utilisateur->setPassword(sha1($utilisateur_temp["motdepasse"]));
            $utilisateur->setIsActive(TRUE);

            if($utilisateur_temp["role"] == "Administrateur"){
                $utilisateur->setRole("ROLE_ADMIN");
            }else{
                $utilisateur->setRole("ROLE_USER");
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();


            /*$repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');
            $repository->insertUtilisateur($utilisateur)*/

            return new Response(json_encode(array("status" =>"ok","utilisateur_id" => $utilisateur->getId(), "utilisateur_role" => $utilisateur->getRole())));
        }

        return "error";
    }

    /**
     * @Route("/utilisateur/modifier", name="utilisateur_modifier")
     */
    public function modifierAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('FrontendBundle:Utilisateur');
            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = $repository->find($utilisateur_temp["id"]);
            $utilisateur->setName($utilisateur_temp["nom"]);
            $utilisateur->setEmail($utilisateur_temp["mail"]);

            if($utilisateur_temp["role"] == "Administrateur"){
                $utilisateur->setRole("ROLE_ADMIN");
            }else{
                $utilisateur->setRole("ROLE_USER");
            }

            $em->persist($utilisateur);
            $em->flush();

            return new Response(json_encode(array("status" =>"ok", "utilisateur_role" => $utilisateur->getRole())));
        }

        return "error";
    }

    /**
     * @Route("/utilisateur/supprimer", name="utilisateur_supprimer")
     */
    public function supprimerAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('FrontendBundle:Utilisateur');
            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = $repository->find($utilisateur_temp["id"]);


            $em->remove($utilisateur);
            $em->flush();

            return new Response(json_encode(array("status" =>"ok")));
        }

        return "error";
    }


    /**
     * @Route("/utilisateur/envoi_mdp", name="utilisateur_envoi_mdp")
     */
    public function envoi_mdpAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('FrontendBundle:Utilisateur');
            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = $repository->find($utilisateur_temp["id"]);

            $pass = trim($utilisateur->getName());

            $utilisateur->setPassword(sha1($pass));


            $em->persist($utilisateur);
            $em->flush();

            return new Response(json_encode(array("status" =>"ok")));
        }

        return "error";
    }
}

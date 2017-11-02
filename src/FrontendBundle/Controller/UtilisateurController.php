<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Utilisateur;
use FrontendBundle\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UtilisateurController extends Controller {

    /**
     * @Route("/utilisateur/liste", name="utilisateur_liste")
     * Affichage des utilisateurs
     */
    public function listeAction() {
        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('connexion_login'));
        }

        if (trim($this->getUser()->getRole()) == "ROLE_USER") {
            return $this->render("EniBundle:Alternant:user_recherche.html.twig");
        }

        $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');

        $utilisateurs_temp = $repository->findAll();

        return $this->render('FrontendBundle:Utilisateur:liste.html.twig', array('utilisateurs' => $utilisateurs_temp));
    }

    /**
     * @Route("/utilisateur/ajouter", name="utilisateur_ajouter")
     * Ajout d'un utilisateur
     */
    public function ajouterAction(Request $request) {

        if ($request->isXMLHttpRequest()) {


            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = new Utilisateur();
            $utilisateur->setName($utilisateur_temp["nom"]);
            $utilisateur->setEmail($utilisateur_temp["mail"]);
            $utilisateur->setPassword(sha1($utilisateur_temp["motdepasse"]));
            $utilisateur->setIsActive(TRUE);

            if ($utilisateur_temp["role"] == "Administrateur") {
                $utilisateur->setRole("ROLE_ADMIN");
            } else {
                $utilisateur->setRole("ROLE_USER");
            }

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');
            $new_utilisateur = $repository->insertUtilisateur($utilisateur, $this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" => "ok", "utilisateur_id" => $new_utilisateur->getId(), "utilisateur_role" => $new_utilisateur->getRole())));
        }

        return "error";
    }

    /**
     * @Route("/utilisateur/modifier", name="utilisateur_modifier")
     * Modification d'un utilisateur
     */
    public function modifierAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');

            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = $repository->getUtilisateur($utilisateur_temp["id"], $this->getDoctrine()->getManager());

            $utilisateur->setName($utilisateur_temp["nom"]);
            $utilisateur->setEmail($utilisateur_temp["mail"]);

            if ($utilisateur_temp["role"] == "Administrateur") {
                $utilisateur->setRole("ROLE_ADMIN");
            } else {
                $utilisateur->setRole("ROLE_USER");
            }

            $new_utilisateur = $repository->updateUtilisateur($utilisateur, $this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" => "ok", "utilisateur_role" => $new_utilisateur->getRole())));
        }

        return "error";
    }

    /**
     * @Route("/utilisateur/supprimer", name="utilisateur_supprimer")
     * Suppression d'un utilisateur
     */
    public function supprimerAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');
            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = $repository->getUtilisateur($utilisateur_temp["id"], $this->getDoctrine()->getManager());

            $new_utilisateur = $repository->removeUtilisateur($utilisateur, $this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" => "ok")));
        }

        return "error";
    }

    /**
     * @Route("/utilisateur/envoi_mdp", name="utilisateur_envoi_mdp")
     * Envoi le mot de passe par mail
     */
    public function envoi_mdpAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');
            $utilisateur_temp = $request->get("utilisateur");

            $utilisateur = $repository->getUtilisateur($utilisateur_temp["id"], $this->getDoctrine()->getManager());

            $pass = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90));

            $utilisateur->setPassword(sha1($pass));

            $new_utilisateur = $repository->updateUtilisateur($utilisateur, $this->getDoctrine()->getManager());

            //Modifier la valeur de setto par $utilisateur->getEmail() afin d'envoyer le mail à l'utilisateur
            $message = (new \Swift_Message('Nouveau mot de passe'))
                    ->setFrom('eniecolegroupeo@gmail.com')
                    ->setTo('eniecolegroupeoclient@gmail.com')
                    ->setBody(
                    $this->renderView(
                            'Mail/mailPassword.html.twig', array('password' => $pass)
                    ), 'text/html'
            );


            $this->get('mailer')->send($message);

            return new Response(json_encode(array("status" => "ok")));
        }

        return "error";
    }

    /**
     * @Route("/password_update", name="user_utilisateur_modifier_password")
     * Modification du mot de passe
     */
    public function user_modifier_passwordAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            $tmp = $request->get("utilisateur");

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');

            $utilisateur = $repository->getUtilisateur($this->getUser()->getId(), $this->getDoctrine()->getManager());

            $utilisateur->setPassword(sha1($tmp["password"]));

            $new_utilisateur = $repository->updateUtilisateur($utilisateur, $this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" => "ok")));
        }

        return "error";
    }

}

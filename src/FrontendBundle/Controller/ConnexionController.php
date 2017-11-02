<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Utilisateur;
use FrontendBundle\Form\UtilisateurType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ConnexionController extends Controller {

    /**
     * @Route("/connexion", name="connexion_formulaire")
     * Affichage de la page de connexion
     */
    public function formulaireAction() {
        return $this->render('FrontendBundle:Connexion:formulaire.html.twig');
    }

    /**
     * @Route("/register", name="register")
     * Ajout d'un utilisateur
     */
    public function registerAction(Request $request) {
        // Create a new blank user and process the form
        $user = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password = sha1($user->getPlainPassword());
            //$password = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // Set their role
            $user->setRole('ROLE_USER');

            // Save
            $em = $this->getDoctrine('groupeo')->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('connexion_login');
        }

        return $this->render('auth/register.html.twig', [
                    'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/login", name="connexion_login")
     */
    public function loginAction(Request $request) {
        $helper = $this->get('security.authentication_utils');

        return $this->render(
                        'auth/login.html.twig', array(
                    'last_username' => $helper->getLastUsername(),
                    'error' => $helper->getLastAuthenticationError(),
                        )
        );
    }

    /**
     * @Route("/login_check", name="connexion_login_check")
     */
    public function login_checkAction() {
        //die('login_check');
    }

    /**
     * @Route("/logout", name="connexion_logout")
     */
    public function logoutAction() {
        
    }

    /**
     * @Route("/password", name="connexion_password")
     * Recuperation du mot de passe + envoi par mail
     */
    public function passwordAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');
            $detail = $request->get("detail");

            $utilisateur = $repository->getUtilisateurMail($detail["mail"], $this->getDoctrine()->getManager());

            if (count($utilisateur) == 1) {


                $utilisateur = $utilisateur[0];


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
            } else {
                return new Response(json_encode(array("status" => "ok")));
            }
        }

        return new Response(json_encode(array("status" => "ko")));
    }

}

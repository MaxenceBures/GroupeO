<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Utilisateur;
use FrontendBundle\Form\UtilisateurType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnexionController extends Controller
{
    /**
     * @Route("/connexion", name="connexion_formulaire")
     */
    public function formulaireAction()
    {
        return $this->render('FrontendBundle:Connexion:formulaire.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
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
    public function loginAction(Request $request)
    {
        $helper = $this->get('security.authentication_utils');

        return $this->render(
            'auth/login.html.twig',
            array(
                'last_username' => $helper->getLastUsername(),
                'error'         => $helper->getLastAuthenticationError(),
            )
        );
    }

    /**
     * @Route("/login_check", name="connexion_login_check")
     */
    public function login_checkAction()
    {
        //die('login_check');
    }

    /**
     * @Route("/logout", name="connexion_logout")
     */
    public function logoutAction()
    {

    }


}

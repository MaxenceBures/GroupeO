<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Utilisateur;
use FrontendBundle\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UtilisateurController extends Controller
{
    /**
     * @Route("/utilisateur/liste", name="utilisateur_liste")
     */
    public function listeAction()
    {
        $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');

        $utilisateurs = $repository->findAll();

        return $this->render('FrontendBundle:Utilisateur:liste.html.twig',array('utilisateurs'=> $utilisateurs));
    }
}

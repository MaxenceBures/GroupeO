<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {

        if(!$this->getUser()){
            return $this->redirect( $this->generateUrl('connexion_login'));
        }

        if(trim($this->getUser()->getRole()) == "ROLE_ADMIN"){
            return $this->render("FrontendBundle:Accueil:accueil.html.twig");
        }

        return $this->redirect( $this->generateUrl('user_alternant_recherche'));

        //return $this->render($path);
    }

    public function erreurAction()
    {
        return $this->render('FrontendBundle:Accueil:erreur.html.twig',array('erreur' => phpinfo()));
    }

    public function testAction()
    {

    }
}

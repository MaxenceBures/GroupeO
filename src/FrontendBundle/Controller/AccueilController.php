<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendBundle:Accueil:index.html.twig');
    }

    public function erreurAction()
    {
        return $this->render('FrontendBundle:Accueil:erreur.html.twig',array('erreur' => phpinfo()));
    }
}

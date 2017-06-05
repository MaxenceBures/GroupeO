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

}

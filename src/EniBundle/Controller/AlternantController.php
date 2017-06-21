<?php

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
}

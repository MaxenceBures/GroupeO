<?php

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EniBundle:Default:index.html.twig');
    }
}

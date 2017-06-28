<?php

namespace FrontendBundle\Controller;

use EniBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlanningController extends Controller
{
    /**
    * @Route("/planning/frame", name="planning_frame")
    */
    public function frameAction()
    {
        
        return $this->render('FrontendBundle:Planning:frame.html.twig', array(
            "status" =>"ok", "formations" => array()
        ));
    }

}

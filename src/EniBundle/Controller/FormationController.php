<?php

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FormationController extends Controller
{
    /**
     * @Route("/formation/liste", name="formation_liste")
     */
    public function listeAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Formation');


            $formations_temp = $repository->findAll();

            $temp = array();
            foreach ($formations_temp as $x){
                array_push($temp,array('court' => $x->getLibellecourt(), 'long' => $x->getLibellelong(), 'id' => $x->getCodeformation()));
            }


            return new Response(json_encode(array("status" =>"ok","formations" => json_encode($temp))));
        }
        return new Response(json_encode("error"));
    }
}

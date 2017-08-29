<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ModuleIndependantController extends Controller {

    /**
     * @Route("/moduleInde/editFrame", name="edit_frame")
     */
    public function editFrameAction() {
        $id = 0;
        $em = $this->getDoctrine()->getManager('groupeo');
        if ($id != 0) {
            
        } else {
            $module = array("id" => 0, "libelle" => "", "court" => "", "creation" => date('d/m/Y'), "dureeheures" => 0, "dureesemaines" => 0, "prix" => 0);
        }
//        $repository_formation = $em->getRepository('FrontendBundle:ModuleIndependant');
//        $formations_temp = $repository_formation->findBy(array("archiver" => "0"));
//
//        $formations = array();
//        foreach ($formations_temp as $x) {
//            array_push($formations, array('court' => $x->getLibellecourt(), 'long' => $x->getLibellelong(), 'id' => $x->getCodeformation()));
//        }

        return $this->render('FrontendBundle:ModuleIndependant:frameEdition.html.twig', array(
                    "status" => "ok", "module" => $module
        ));
    }

}

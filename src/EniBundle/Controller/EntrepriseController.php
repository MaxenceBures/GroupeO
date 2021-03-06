<?php

namespace EniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EntrepriseController extends Controller
{
    /**
     * @Route("/entreprise/liste", name="entreprise_liste")
	 * Affichage de la liste des entreprises
     */
    public function listeAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager('eni');
            $repository = $em->getRepository('EniBundle:Entreprise');

            $entreprises_temp = $repository->findAll();

            $temp = array();
            foreach ($entreprises_temp as $x){
                array_push($temp,array('raison' => $x->getRaisonsociale(), 'ville' => $x->getVille(), 'id' => $x->getCodeentreprise()));
            }


            return new Response(json_encode(array("status" =>"ok","entreprises" => json_encode($temp))));
        }
        return new Response(json_encode("error"));
    }

}

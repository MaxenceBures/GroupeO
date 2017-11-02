<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\DBAL\DBALException;

class AccueilController extends Controller {

    public function indexAction() {

        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('connexion_login'));
        }

        if (trim($this->getUser()->getRole()) == "ROLE_ADMIN") {
            return $this->render("FrontendBundle:Accueil:accueil.html.twig");
        }

        return $this->redirect($this->generateUrl('user_alternant_recherche'));

        //return $this->render($path);
    }

    public function erreurAction() {
        return $this->render('FrontendBundle:Accueil:erreur.html.twig', array('erreur' => phpinfo()));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function testAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager('groupeo');
        $em2 = $this->getDoctrine()->getEntityManager('eni');


        $repository_utilisateur = $em->getRepository('FrontendBundle:Utilisateur');

        $repository_stagiaire = $em2->getRepository('EniBundle:Stagiaire');

        $check_stagiaire = true;
        $check_utilisateur = true;


        $output_stagiaire = $repository_stagiaire->findBy(array(), array('codestagiaire' => 'DESC'), 5);
        $output_utilisateur = $repository_utilisateur->findBy(array(), array('id' => 'DESC'), 5);


        return $this->render('FrontendBundle:Accueil:test.html.twig');
    }

    /**
     * @Route("/password", name="connexion_password")
     */
    public function passwordAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $repository = $this->getDoctrine()->getRepository('FrontendBundle:Utilisateur');
            $detail = $request->get("detail");

            $user = $this->get('security.token_storage')->getToken()->getUser();

            $user->setPassword(sha1($detail["pass"]));

            $new_utilisateur = $repository->updateUtilisateur($user, $this->getDoctrine()->getManager());

            return new Response(json_encode(array("status" => "ok")));
        } else {
            return new Response(json_encode(array("status" => "ko")));
        }
        return new Response(json_encode(array("status" => "ko")));
    }

}

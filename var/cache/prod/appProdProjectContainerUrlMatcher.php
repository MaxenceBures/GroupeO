<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // alternant_recherche
        if ('/alternant/recherche' === $pathinfo) {
            return array (  '_controller' => 'EniBundle\\Controller\\AlternantController::rechercheAction',  '_route' => 'alternant_recherche',);
        }

        // entreprise_liste
        if ('/entreprise/liste' === $pathinfo) {
            return array (  '_controller' => 'EniBundle\\Controller\\EntrepriseController::listeAction',  '_route' => 'entreprise_liste',);
        }

        // frontend_erreur
        if ('/erreur' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\AccueilController::erreurAction',  '_route' => 'frontend_erreur',);
        }

        // frontend_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontend_homepage');
            }

            return array (  '_controller' => 'FrontendBundle\\Controller\\AccueilController::indexAction',  '_route' => 'frontend_homepage',);
        }

        // frontend_test
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\AccueilController::indexAction',  '_route' => 'frontend_test',);
        }

        // connexion_formulaire
        if ('/connexion' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\ConnexionController::formulaireAction',  '_route' => 'connexion_formulaire',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // connexion_login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\ConnexionController::loginAction',  '_route' => 'connexion_login',);
            }

            // connexion_login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\ConnexionController::login_checkAction',  '_route' => 'connexion_login_check',);
            }

        }

        // connexion_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\ConnexionController::logoutAction',  '_route' => 'connexion_logout',);
        }

        // connexion_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\ConnexionController::registerAction',  '_route' => 'connexion_register',);
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur_liste
            if ('/utilisateur/liste' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::listeAction',  '_route' => 'utilisateur_liste',);
            }

            // utilisateur_ajouter
            if ('/utilisateur/ajouter' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_utilisateur_ajouter;
                }

                return array (  '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::ajouterAction',  '_route' => 'utilisateur_ajouter',);
            }
            not_utilisateur_ajouter:

            // utilisateur_modifier
            if ('/utilisateur/modifier' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_utilisateur_modifier;
                }

                return array (  '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::modifierAction',  '_route' => 'utilisateur_modifier',);
            }
            not_utilisateur_modifier:

            // utilisateur_supprimer
            if ('/utilisateur/supprimer' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_utilisateur_supprimer;
                }

                return array (  '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::supprimerAction',  '_route' => 'utilisateur_supprimer',);
            }
            not_utilisateur_supprimer:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

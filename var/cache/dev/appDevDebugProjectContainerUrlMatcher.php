<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // alternant_recherche
        if ('/alternant/recherche' === $pathinfo) {
            return array (  '_controller' => 'EniBundle\\Controller\\AlternantController::rechercheAction',  '_route' => 'alternant_recherche',);
        }

        // alternant_chargement
        if ('/alternant/chargement' === $pathinfo) {
            return array (  '_controller' => 'EniBundle\\Controller\\AlternantController::chargementAction',  '_route' => 'alternant_chargement',);
        }

        // entreprise_liste
        if ('/entreprise/liste' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_entreprise_liste;
            }

            return array (  '_controller' => 'EniBundle\\Controller\\EntrepriseController::listeAction',  '_route' => 'entreprise_liste',);
        }
        not_entreprise_liste:

        // frontend_erreur
        if ('/erreur' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\AccueilController::erreurAction',  '_route' => 'frontend_erreur',);
        }

        // formation_liste
        if ('/formation/liste' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_formation_liste;
            }

            return array (  '_controller' => 'EniBundle\\Controller\\FormationController::listeAction',  '_route' => 'formation_liste',);
        }
        not_formation_liste:

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

        // planning_frame
        if ('/planning/frame' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_planning_frame;
            }

            return array (  '_controller' => 'FrontendBundle\\Controller\\PlanningController::frameAction',  '_route' => 'planning_frame',);
        }
        not_planning_frame:

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

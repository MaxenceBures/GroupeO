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

        elseif (0 === strpos($pathinfo, '/alternant')) {
            if (0 === strpos($pathinfo, '/alternant/recherche')) {
                // alternant_recherche
                if ('/alternant/recherche' === $pathinfo) {
                    return array (  '_controller' => 'EniBundle\\Controller\\AlternantController::rechercheAction',  '_route' => 'alternant_recherche',);
                }

                // recherche_alternant_planning
                if ('/alternant/recherchePlanning' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_recherche_alternant_planning;
                    }

                    return array (  '_controller' => 'EniBundle\\Controller\\AlternantController::recherchePlanningAction',  '_route' => 'recherche_alternant_planning',);
                }
                not_recherche_alternant_planning:

            }

            // alternant_chargement
            if ('/alternant/chargement' === $pathinfo) {
                return array (  '_controller' => 'EniBundle\\Controller\\AlternantController::chargementAction',  '_route' => 'alternant_chargement',);
            }

            // alternant_detail
            if (0 === strpos($pathinfo, '/alternant/detail') && preg_match('#^/alternant/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_alternant_detail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alternant_detail')), array (  '_controller' => 'EniBundle\\Controller\\AlternantController::detailAction',));
            }
            not_alternant_detail:

        }

        // user_alternant_recherche
        if ('/recherche' === $pathinfo) {
            return array (  '_controller' => 'EniBundle\\Controller\\AlternantController::user_rechercheAction',  '_route' => 'user_alternant_recherche',);
        }

        // connexion_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'FrontendBundle\\Controller\\ConnexionController::registerAction',  '_route' => 'connexion_register',);
        }

        // user_alternant_detail
        if (0 === strpos($pathinfo, '/detail') && preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_alternant_detail')), array (  '_controller' => 'EniBundle\\Controller\\AlternantController::user_detailAction',));
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

        if (0 === strpos($pathinfo, '/co')) {
            // recherche
            if ('/cours/recherche' === $pathinfo) {
                return array (  '_controller' => 'EniBundle\\Controller\\CoursController::rechercheAction',  '_route' => 'recherche',);
            }

            // liste_cours_planning
            if ('/cours/liste_cours_planning' === $pathinfo) {
                return array (  '_controller' => 'EniBundle\\Controller\\CoursController::listePlanningAction',  '_route' => 'liste_cours_planning',);
            }

            // connexion_formulaire
            if ('/connexion' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\ConnexionController::formulaireAction',  '_route' => 'connexion_formulaire',);
            }

        }

        elseif (0 === strpos($pathinfo, '/module')) {
            // frame_search
            if ('/module/frameSearch' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_frame_search;
                }

                return array (  '_controller' => 'EniBundle\\Controller\\ModuleController::frameSearchAction',  '_route' => 'frame_search',);
            }
            not_frame_search:

            // liste_search
            if ('/module/listeSearch' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_liste_search;
                }

                return array (  '_controller' => 'EniBundle\\Controller\\ModuleController::listeSearchAction',  '_route' => 'liste_search',);
            }
            not_liste_search:

            // edit_frame
            if ('/moduleInde/editFrame' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\ModuleIndependantController::editFrameAction',  '_route' => 'edit_frame',);
            }

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
            return array (  '_controller' => 'FrontendBundle\\Controller\\AccueilController::testAction',  '_route' => 'frontend_test',);
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

        elseif (0 === strpos($pathinfo, '/p')) {
            // user_utilisateur_modifier_password
            if ('/password_update' === $pathinfo) {
                return array (  '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::user_modifier_passwordAction',  '_route' => 'user_utilisateur_modifier_password',);
            }

            if (0 === strpos($pathinfo, '/parametrage')) {
                // parametrage_module
                if ('/parametrage' === $pathinfo) {
                    return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_modulesAction',  '_route' => 'parametrage_module',);
                }

                if (0 === strpos($pathinfo, '/parametrage/lieu')) {
                    // parametrage_lieu
                    if ('/parametrage/lieu' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_lieuxAction',  '_route' => 'parametrage_lieu',);
                    }

                    if (0 === strpos($pathinfo, '/parametrage/lieu/ajouter')) {
                        // parametrage_fermeture_ajout
                        if ('/parametrage/lieu/ajouter' === $pathinfo) {
                            return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_fermetureAction',  '_route' => 'parametrage_fermeture_ajout',);
                        }

                        // parametrage_fermeture_ajout_verif
                        if ('/parametrage/lieu/ajouter_verif' === $pathinfo) {
                            return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_fermeture_verifAction',  '_route' => 'parametrage_fermeture_ajout_verif',);
                        }

                    }

                    // parametrage_fermeture_liste
                    if ('/parametrage/lieu/fermeture' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_fermetureAction',  '_route' => 'parametrage_fermeture_liste',);
                    }

                    // parametrage_fermeture_supprimer
                    if ('/parametrage/lieu/supprimer' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::supprimer_fermetureAction',  '_route' => 'parametrage_fermeture_supprimer',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/parametrage/module')) {
                    // parametrage_module_ajout
                    if ('/parametrage/module/ajouter' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_moduleAction',  '_route' => 'parametrage_module_ajout',);
                    }

                    // parametrage_module_supprimer
                    if ('/parametrage/module/supprimer' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::supprimer_moduleAction',  '_route' => 'parametrage_module_supprimer',);
                    }

                    // parametrage_module_liste
                    if ('/parametrage/module/liste' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_moduleAction',  '_route' => 'parametrage_module_liste',);
                    }

                    // parametrage_module_modifier
                    if ('/parametrage/module/modifier' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::modifier_moduleAction',  '_route' => 'parametrage_module_modifier',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/parametrage/cours')) {
                    if (0 === strpos($pathinfo, '/parametrage/cours/ajouter')) {
                        // parametrage_cours_ajout
                        if ('/parametrage/cours/ajouter' === $pathinfo) {
                            return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_coursAction',  '_route' => 'parametrage_cours_ajout',);
                        }

                        // parametrage_cours_ajout_custom
                        if ('/parametrage/cours/ajouterCustom' === $pathinfo) {
                            return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_cours_customAction',  '_route' => 'parametrage_cours_ajout_custom',);
                        }

                    }

                    // parametrage_cours_liste
                    if ('/parametrage/cours/liste' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_coursAction',  '_route' => 'parametrage_cours_liste',);
                    }

                    // parametrage_cours_supprimer
                    if ('/parametrage/cours/supprimer' === $pathinfo) {
                        return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::supprimer_coursAction',  '_route' => 'parametrage_cours_supprimer',);
                    }

                }

                // parametrage_indicateur_modifier
                if ('/parametrage/indicateur/modifier' === $pathinfo) {
                    return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::indicateur_modifierAction',  '_route' => 'parametrage_indicateur_modifier',);
                }

                // parametrage_indicateur_load
                if ('/parametrage/indicateur/load' === $pathinfo) {
                    return array (  '_controller' => 'FrontendBundle\\Controller\\ParametrageController::indicateur_loadAction',  '_route' => 'parametrage_indicateur_load',);
                }

            }

            elseif (0 === strpos($pathinfo, '/planning')) {
                // planning_frame
                if ('/planning/frame' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_planning_frame;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\PlanningController::frameAction',  '_route' => 'planning_frame',);
                }
                not_planning_frame:

                // planning_editeur
                if ('/planning/editeur' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_planning_editeur;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\PlanningController::editeurAction',  '_route' => 'planning_editeur',);
                }
                not_planning_editeur:

                // planning_status_update
                if ('/planning/status_update' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_planning_status_update;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\PlanningController::status_updateAction',  '_route' => 'planning_status_update',);
                }
                not_planning_status_update:

                // planning_ajouter
                if ('/planning/ajouter' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_planning_ajouter;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\PlanningController::ajouterAction',  '_route' => 'planning_ajouter',);
                }
                not_planning_ajouter:

                // planning_modifier
                if ('/planning/modifier' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_planning_modifier;
                    }

                    return array (  '_controller' => 'FrontendBundle\\Controller\\PlanningController::modifierAction',  '_route' => 'planning_modifier',);
                }
                not_planning_modifier:

                // planning_pdf
                if (0 === strpos($pathinfo, '/planning/pdf') && preg_match('#^/planning/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_planning_pdf;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_pdf')), array (  '_controller' => 'FrontendBundle\\Controller\\PlanningController::pdfAction',));
                }
                not_planning_pdf:

            }

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

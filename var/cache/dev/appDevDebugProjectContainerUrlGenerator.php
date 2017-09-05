<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alternant_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\AlternantController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alternant/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alternant_chargement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\AlternantController::chargementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alternant/chargement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recherche_alternant_planning' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\AlternantController::recherchePlanningAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alternant/recherchePlanning',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alternant_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\AlternantController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/alternant/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_alternant_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\AlternantController::user_rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_alternant_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\AlternantController::user_detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'entreprise_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\EntrepriseController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/entreprise/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formation_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\FormationController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formation/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\CoursController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cours/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_cours_planning' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\CoursController::listePlanningAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cours/liste_cours_planning',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frame_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\ModuleController::frameSearchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/frameSearch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\ModuleController::listeSearchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/module/listeSearch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frontend_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\AccueilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frontend_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\AccueilController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frontend_erreur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\AccueilController::erreurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erreur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion_formulaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ConnexionController::formulaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ConnexionController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ConnexionController::login_checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ConnexionController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ConnexionController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_modifier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_supprimer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_utilisateur_modifier_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\UtilisateurController::user_modifier_passwordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/password_update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planning_frame' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\PlanningController::frameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/frame',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planning_editeur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\PlanningController::editeurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/editeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planning_status_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\PlanningController::status_updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/status_update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_module' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_modulesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_lieu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_lieuxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/lieu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_fermeture_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_fermetureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/lieu/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_fermeture_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_fermetureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/lieu/fermeture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_fermeture_supprimer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::supprimer_fermetureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/lieu/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_module_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_moduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/module/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_module_supprimer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::supprimer_moduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/module/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_module_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_moduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/module/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_module_modifier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::modifier_moduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/module/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_cours_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::ajouter_coursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/cours/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_cours_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::liste_coursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/cours/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parametrage_cours_supprimer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ParametrageController::supprimer_coursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametrage/cours/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planning_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\PlanningController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planning_modifier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\PlanningController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planning_pdf' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\PlanningController::pdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/planning/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_frame' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\ModuleIndependantController::editFrameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/moduleInde/editFrame',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

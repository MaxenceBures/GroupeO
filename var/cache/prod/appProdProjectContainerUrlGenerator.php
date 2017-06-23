<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'alternant_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\AlternantController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alternant/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'entreprise_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EniBundle\\Controller\\EntrepriseController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/entreprise/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frontend_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\AccueilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frontend_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontendBundle\\Controller\\AccueilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

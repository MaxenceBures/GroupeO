<?php

/* EniBundle:Alternant:recherche.html.twig */
class __TwigTemplate_49f0d1767e01109b9a1d6cce6267a026b1b316150f6fc8a96ee3b33c5946e22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EniBundle:Alternant:recherche.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_897bf1220246903ed5fac8359143b5a4ee044ea77a83813ca01377bd223b5731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897bf1220246903ed5fac8359143b5a4ee044ea77a83813ca01377bd223b5731->enter($__internal_897bf1220246903ed5fac8359143b5a4ee044ea77a83813ca01377bd223b5731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $__internal_2bca82a1281a2ff95218081a44c5bf88fe90b0787ac8e78c04810fd37dc828db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bca82a1281a2ff95218081a44c5bf88fe90b0787ac8e78c04810fd37dc828db->enter($__internal_2bca82a1281a2ff95218081a44c5bf88fe90b0787ac8e78c04810fd37dc828db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897bf1220246903ed5fac8359143b5a4ee044ea77a83813ca01377bd223b5731->leave($__internal_897bf1220246903ed5fac8359143b5a4ee044ea77a83813ca01377bd223b5731_prof);

        
        $__internal_2bca82a1281a2ff95218081a44c5bf88fe90b0787ac8e78c04810fd37dc828db->leave($__internal_2bca82a1281a2ff95218081a44c5bf88fe90b0787ac8e78c04810fd37dc828db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29d146c53f964419c76bbaf187e257f69014139228a4f97b1ec110dc87396ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d146c53f964419c76bbaf187e257f69014139228a4f97b1ec110dc87396ea7->enter($__internal_29d146c53f964419c76bbaf187e257f69014139228a4f97b1ec110dc87396ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_237d7eadfd9cc33b52fc0f7a24ea3baf24aacc5a477a343bf79a3bafc6597982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237d7eadfd9cc33b52fc0f7a24ea3baf24aacc5a477a343bf79a3bafc6597982->enter($__internal_237d7eadfd9cc33b52fc0f7a24ea3baf24aacc5a477a343bf79a3bafc6597982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <H1>Liste Alternants</H1>

    <div id=\"div_recherche\" style=\"margin-top: 30px; background-color: grey;\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Recherche</h3>
                <div class=\"box-body\">
                    <div class=\"row\">
                        <form id=\"form_search\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <input class=\"form-control\" placeholder=\"Nom\" type=\"text\" id=\"input_nom\">
                                </div>
                                <div class=\"col-xs-3\">
                                    <input class=\"form-control\" placeholder=\"Prenom\" type=\"text\" id=\"input_prenom\">
                                </div>
                                <div class=\"col-xs-6\">
                                    <input class=\"form-control\" placeholder=\"XXXX@eni-ecole.fr\" type=\"text\" id=\"input_mail\">
                                </div>
                            </div>
                            <div class=\"row\" style=\"margin-top: 30px;\">
                                <div class=\"col-xs-4\">
                                    <select id=\"select_entreprise\" class=\"form-control select2\" style=\"width: 300px;\">Entreprise</select>
                                </div>
                                <div class=\"col-xs-4\">
                                    <select id=\"select_formation\" class=\"form-control select2\" style=\"width: 300px;\">Formation</select>
                                </div>
                                <div class=\"col-xs-2\"><button id=\"rechercher\" class=\"btn btn-block btn-primary\">Rechercher</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"div_liste\" style=\"margin-top: 20px;\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Liste</h3>
                <div class=\"box-body\">
                    <div class=\"row\">
                <table id=\"liste_utilisateur\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Nom - Prénom</th>
                        <th>Mail</th>
                        <th>Entreprise</th>
                        <th>Formation</th>
                        <th>Edition</th>
                    </tr>
                    </thead>
                    <tbody id=\"liste_utilisateur_ligne\">

                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
";
        
        $__internal_237d7eadfd9cc33b52fc0f7a24ea3baf24aacc5a477a343bf79a3bafc6597982->leave($__internal_237d7eadfd9cc33b52fc0f7a24ea3baf24aacc5a477a343bf79a3bafc6597982_prof);

        
        $__internal_29d146c53f964419c76bbaf187e257f69014139228a4f97b1ec110dc87396ea7->leave($__internal_29d146c53f964419c76bbaf187e257f69014139228a4f97b1ec110dc87396ea7_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a02e4be07a3237f9c0d52f7639b699fc11b4ba909c097fbc78a95ae600acbe9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02e4be07a3237f9c0d52f7639b699fc11b4ba909c097fbc78a95ae600acbe9e->enter($__internal_a02e4be07a3237f9c0d52f7639b699fc11b4ba909c097fbc78a95ae600acbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89fa17d4ff85d0967bb49e696665c7d2954b797454e9acc0af83c010cf55fa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fa17d4ff85d0967bb49e696665c7d2954b797454e9acc0af83c010cf55fa2d->enter($__internal_89fa17d4ff85d0967bb49e696665c7d2954b797454e9acc0af83c010cf55fa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/alternant/recherche.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_89fa17d4ff85d0967bb49e696665c7d2954b797454e9acc0af83c010cf55fa2d->leave($__internal_89fa17d4ff85d0967bb49e696665c7d2954b797454e9acc0af83c010cf55fa2d_prof);

        
        $__internal_a02e4be07a3237f9c0d52f7639b699fc11b4ba909c097fbc78a95ae600acbe9e->leave($__internal_a02e4be07a3237f9c0d52f7639b699fc11b4ba909c097fbc78a95ae600acbe9e_prof);

    }

    public function getTemplateName()
    {
        return "EniBundle:Alternant:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 67,  127 => 66,  116 => 69,  114 => 66,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    <H1>Liste Alternants</H1>

    <div id=\"div_recherche\" style=\"margin-top: 30px; background-color: grey;\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Recherche</h3>
                <div class=\"box-body\">
                    <div class=\"row\">
                        <form id=\"form_search\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <input class=\"form-control\" placeholder=\"Nom\" type=\"text\" id=\"input_nom\">
                                </div>
                                <div class=\"col-xs-3\">
                                    <input class=\"form-control\" placeholder=\"Prenom\" type=\"text\" id=\"input_prenom\">
                                </div>
                                <div class=\"col-xs-6\">
                                    <input class=\"form-control\" placeholder=\"XXXX@eni-ecole.fr\" type=\"text\" id=\"input_mail\">
                                </div>
                            </div>
                            <div class=\"row\" style=\"margin-top: 30px;\">
                                <div class=\"col-xs-4\">
                                    <select id=\"select_entreprise\" class=\"form-control select2\" style=\"width: 300px;\">Entreprise</select>
                                </div>
                                <div class=\"col-xs-4\">
                                    <select id=\"select_formation\" class=\"form-control select2\" style=\"width: 300px;\">Formation</select>
                                </div>
                                <div class=\"col-xs-2\"><button id=\"rechercher\" class=\"btn btn-block btn-primary\">Rechercher</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"div_liste\" style=\"margin-top: 20px;\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Liste</h3>
                <div class=\"box-body\">
                    <div class=\"row\">
                <table id=\"liste_utilisateur\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Nom - Prénom</th>
                        <th>Mail</th>
                        <th>Entreprise</th>
                        <th>Formation</th>
                        <th>Edition</th>
                    </tr>
                    </thead>
                    <tbody id=\"liste_utilisateur_ligne\">

                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {% block javascripts %}
        <script src=\"{{ asset('Js/alternant/recherche.js') }}\"></script>
    {% endblock %}

{% endblock %}", "EniBundle:Alternant:recherche.html.twig", "C:\\wamp\\www\\GroupeO\\src\\EniBundle/Resources/views/Alternant/recherche.html.twig");
    }
}

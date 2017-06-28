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
        $__internal_e6e5d67251afd61f25687a184b1b065cc84975b45f35946d53e77d9ab3f2d83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e5d67251afd61f25687a184b1b065cc84975b45f35946d53e77d9ab3f2d83a->enter($__internal_e6e5d67251afd61f25687a184b1b065cc84975b45f35946d53e77d9ab3f2d83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $__internal_4decaa3c34b1368affa57ef49408c6b8554c72e695f708407772b8428206aced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4decaa3c34b1368affa57ef49408c6b8554c72e695f708407772b8428206aced->enter($__internal_4decaa3c34b1368affa57ef49408c6b8554c72e695f708407772b8428206aced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e5d67251afd61f25687a184b1b065cc84975b45f35946d53e77d9ab3f2d83a->leave($__internal_e6e5d67251afd61f25687a184b1b065cc84975b45f35946d53e77d9ab3f2d83a_prof);

        
        $__internal_4decaa3c34b1368affa57ef49408c6b8554c72e695f708407772b8428206aced->leave($__internal_4decaa3c34b1368affa57ef49408c6b8554c72e695f708407772b8428206aced_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_646bd028f6b7be5dde20823f1fcf705347d1218e13a4a76afbf5e5437afd87a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646bd028f6b7be5dde20823f1fcf705347d1218e13a4a76afbf5e5437afd87a7->enter($__internal_646bd028f6b7be5dde20823f1fcf705347d1218e13a4a76afbf5e5437afd87a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b86ffed72c26e7abaaacd1a8ef8be56a0e79a78db3166bc1f0ddd1b1b6774eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86ffed72c26e7abaaacd1a8ef8be56a0e79a78db3166bc1f0ddd1b1b6774eb2->enter($__internal_b86ffed72c26e7abaaacd1a8ef8be56a0e79a78db3166bc1f0ddd1b1b6774eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <div class=\"col-xs-6\">
                                    <select id=\"select_formation\" class=\"form-control select2\" style=\"width: 500px;\">Formation</select>
                                </div>
                                <div class=\"col-xs-1\"><button id=\"rechercher\" class=\"btn btn-block btn-primary\">Rechercher</button></div>
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
        
        $__internal_b86ffed72c26e7abaaacd1a8ef8be56a0e79a78db3166bc1f0ddd1b1b6774eb2->leave($__internal_b86ffed72c26e7abaaacd1a8ef8be56a0e79a78db3166bc1f0ddd1b1b6774eb2_prof);

        
        $__internal_646bd028f6b7be5dde20823f1fcf705347d1218e13a4a76afbf5e5437afd87a7->leave($__internal_646bd028f6b7be5dde20823f1fcf705347d1218e13a4a76afbf5e5437afd87a7_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7718efc4d7715bdd13bccb3ef0574f1c801af090354f660f80ca3f3d0780f7d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7718efc4d7715bdd13bccb3ef0574f1c801af090354f660f80ca3f3d0780f7d2->enter($__internal_7718efc4d7715bdd13bccb3ef0574f1c801af090354f660f80ca3f3d0780f7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66800a8fe459f54363d2dfbb292a0550f433e30f45dca4ac4cb0c4db79b864a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66800a8fe459f54363d2dfbb292a0550f433e30f45dca4ac4cb0c4db79b864a3->enter($__internal_66800a8fe459f54363d2dfbb292a0550f433e30f45dca4ac4cb0c4db79b864a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/alternant/recherche.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_66800a8fe459f54363d2dfbb292a0550f433e30f45dca4ac4cb0c4db79b864a3->leave($__internal_66800a8fe459f54363d2dfbb292a0550f433e30f45dca4ac4cb0c4db79b864a3_prof);

        
        $__internal_7718efc4d7715bdd13bccb3ef0574f1c801af090354f660f80ca3f3d0780f7d2->leave($__internal_7718efc4d7715bdd13bccb3ef0574f1c801af090354f660f80ca3f3d0780f7d2_prof);

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
        return array (  133 => 71,  124 => 70,  50 => 4,  41 => 3,  11 => 1,);
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
                                <div class=\"col-xs-6\">
                                    <select id=\"select_formation\" class=\"form-control select2\" style=\"width: 500px;\">Formation</select>
                                </div>
                                <div class=\"col-xs-1\"><button id=\"rechercher\" class=\"btn btn-block btn-primary\">Rechercher</button></div>
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




{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('Js/alternant/recherche.js') }}\"></script>
{% endblock %}", "EniBundle:Alternant:recherche.html.twig", "C:\\wamp\\www\\GroupeO\\src\\EniBundle/Resources/views/Alternant/recherche.html.twig");
    }
}

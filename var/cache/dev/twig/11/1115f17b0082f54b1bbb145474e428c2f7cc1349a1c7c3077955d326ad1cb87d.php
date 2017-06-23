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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd522e95d76925bab98e32069d8e89cf99f55626b125dafb1db91f326b6dbfd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd522e95d76925bab98e32069d8e89cf99f55626b125dafb1db91f326b6dbfd4->enter($__internal_cd522e95d76925bab98e32069d8e89cf99f55626b125dafb1db91f326b6dbfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $__internal_acc6ab0a27227dccd0bb4ca15285009495995440945650f8d1abab0098a7c757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc6ab0a27227dccd0bb4ca15285009495995440945650f8d1abab0098a7c757->enter($__internal_acc6ab0a27227dccd0bb4ca15285009495995440945650f8d1abab0098a7c757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd522e95d76925bab98e32069d8e89cf99f55626b125dafb1db91f326b6dbfd4->leave($__internal_cd522e95d76925bab98e32069d8e89cf99f55626b125dafb1db91f326b6dbfd4_prof);

        
        $__internal_acc6ab0a27227dccd0bb4ca15285009495995440945650f8d1abab0098a7c757->leave($__internal_acc6ab0a27227dccd0bb4ca15285009495995440945650f8d1abab0098a7c757_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc2b2acadf1d777b1b76909840dfc72714929891b3b6574ca992e3ce8199fc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2b2acadf1d777b1b76909840dfc72714929891b3b6574ca992e3ce8199fc70->enter($__internal_fc2b2acadf1d777b1b76909840dfc72714929891b3b6574ca992e3ce8199fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_defff88971df5083de198f82680dd24b33f82eeb758bb3275e1a4c718e8cffa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defff88971df5083de198f82680dd24b33f82eeb758bb3275e1a4c718e8cffa2->enter($__internal_defff88971df5083de198f82680dd24b33f82eeb758bb3275e1a4c718e8cffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <H1>Liste Alternants</H1>

    <div id=\"div_recherche\" style=\"margin-top: 100px; background-color: grey;\">

            <div class=\"col-md-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-align-justify\"></i> </span>
                        <h5>Recherche</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <form class=\"form-inline\" action=\"#\" method=\"post\">

                            Nom <input type=\"text\" id=\"input_nom\" placeholder=\"Nom\"/>
                            Prenom <input type=\"text\" id=\"input_prenom\" placeholder=\"Prenom\"/>
                            Email <input type=\"email\" id=\"input_mail\" placeholder=\"XXXX@eni-ecole.fr\"/>

                           <br>
                            <select id=\"select_entreprise\" style=\"width: 200px;\">Entreprise</select>
                            <select id=\"select_formation\" style=\"width: 200px;\">Formation</select>
                            <button>Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>

    </div>
    <!--<div style=\"height: 100px;width: 100px;\"></div>-->
    <div id=\"div_liste\">
        <table id=\"liste_utilisateur\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr>
                <th>Nom - Prénom</th>
                <th>Mail</th>
                <th>Role</th>
                <th>Edition</th>
            </tr>
            </thead>
            <tbody id=\"liste_utilisateur_ligne\">

            </tbody>
        </table>
    </div>


    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/alternant/recherche.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_defff88971df5083de198f82680dd24b33f82eeb758bb3275e1a4c718e8cffa2->leave($__internal_defff88971df5083de198f82680dd24b33f82eeb758bb3275e1a4c718e8cffa2_prof);

        
        $__internal_fc2b2acadf1d777b1b76909840dfc72714929891b3b6574ca992e3ce8199fc70->leave($__internal_fc2b2acadf1d777b1b76909840dfc72714929891b3b6574ca992e3ce8199fc70_prof);

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
        return array (  99 => 49,  95 => 48,  49 => 4,  40 => 3,  11 => 1,);
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

    <div id=\"div_recherche\" style=\"margin-top: 100px; background-color: grey;\">

            <div class=\"col-md-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-align-justify\"></i> </span>
                        <h5>Recherche</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <form class=\"form-inline\" action=\"#\" method=\"post\">

                            Nom <input type=\"text\" id=\"input_nom\" placeholder=\"Nom\"/>
                            Prenom <input type=\"text\" id=\"input_prenom\" placeholder=\"Prenom\"/>
                            Email <input type=\"email\" id=\"input_mail\" placeholder=\"XXXX@eni-ecole.fr\"/>

                           <br>
                            <select id=\"select_entreprise\" style=\"width: 200px;\">Entreprise</select>
                            <select id=\"select_formation\" style=\"width: 200px;\">Formation</select>
                            <button>Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>

    </div>
    <!--<div style=\"height: 100px;width: 100px;\"></div>-->
    <div id=\"div_liste\">
        <table id=\"liste_utilisateur\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr>
                <th>Nom - Prénom</th>
                <th>Mail</th>
                <th>Role</th>
                <th>Edition</th>
            </tr>
            </thead>
            <tbody id=\"liste_utilisateur_ligne\">

            </tbody>
        </table>
    </div>


    <script src=\"{{ asset('template/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('Js/alternant/recherche.js') }}\"></script>

{% endblock %}", "EniBundle:Alternant:recherche.html.twig", "C:\\wamp\\www\\GroupeO\\src\\EniBundle/Resources/views/Alternant/recherche.html.twig");
    }
}

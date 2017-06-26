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
        $__internal_c16720817bd82a57ffe0166ac1cd35f2d0e4700d2dde2f39adbeb0430d594756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16720817bd82a57ffe0166ac1cd35f2d0e4700d2dde2f39adbeb0430d594756->enter($__internal_c16720817bd82a57ffe0166ac1cd35f2d0e4700d2dde2f39adbeb0430d594756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $__internal_4e9aadcf101c200075c6b93b25948fb7cde731f5f5e379bba2246fcb8bb68efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9aadcf101c200075c6b93b25948fb7cde731f5f5e379bba2246fcb8bb68efd->enter($__internal_4e9aadcf101c200075c6b93b25948fb7cde731f5f5e379bba2246fcb8bb68efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c16720817bd82a57ffe0166ac1cd35f2d0e4700d2dde2f39adbeb0430d594756->leave($__internal_c16720817bd82a57ffe0166ac1cd35f2d0e4700d2dde2f39adbeb0430d594756_prof);

        
        $__internal_4e9aadcf101c200075c6b93b25948fb7cde731f5f5e379bba2246fcb8bb68efd->leave($__internal_4e9aadcf101c200075c6b93b25948fb7cde731f5f5e379bba2246fcb8bb68efd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84a8f997135fc14fe2ebc60e4c072acb561c880195c40e8191dadf312adbb89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a8f997135fc14fe2ebc60e4c072acb561c880195c40e8191dadf312adbb89f->enter($__internal_84a8f997135fc14fe2ebc60e4c072acb561c880195c40e8191dadf312adbb89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ada005f8482db6db77b1686c946cf990fc5b79f58701cbb20697e1b459fb6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ada005f8482db6db77b1686c946cf990fc5b79f58701cbb20697e1b459fb6da->enter($__internal_9ada005f8482db6db77b1686c946cf990fc5b79f58701cbb20697e1b459fb6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <H1>Liste Alternants</H1>

    <div id=\"div_recherche\" style=\"margin-top: 100px; background-color: grey;\">

            <div class=\"col-md-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-align-justify\"></i> </span>
                        <h5>Recherche</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <form class=\"form-inline\" id=\"form_search\">

                            Nom <input type=\"text\" id=\"input_nom\" placeholder=\"Nom\"/>
                            Prenom <input type=\"text\" id=\"input_prenom\" placeholder=\"Prenom\"/>
                            Email <input type=\"email\" id=\"input_mail\" placeholder=\"XXXX@eni-ecole.fr\"/>

                           <br>
                            <select id=\"select_entreprise\" style=\"width: 200px;\">Entreprise</select>
                            <select id=\"select_formation\" style=\"width: 200px;\">Formation</select>
                            <button id=\"rechercher\">Rechercher</button>
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
                <th>Entreprise</th>
                <th>Formation</th>
                <th>Edition</th>
            </tr>
            </thead>
            <tbody id=\"liste_utilisateur_ligne\">

            </tbody>
        </table>
    </div>


    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/alternant/recherche.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_9ada005f8482db6db77b1686c946cf990fc5b79f58701cbb20697e1b459fb6da->leave($__internal_9ada005f8482db6db77b1686c946cf990fc5b79f58701cbb20697e1b459fb6da_prof);

        
        $__internal_84a8f997135fc14fe2ebc60e4c072acb561c880195c40e8191dadf312adbb89f->leave($__internal_84a8f997135fc14fe2ebc60e4c072acb561c880195c40e8191dadf312adbb89f_prof);

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
        return array (  100 => 50,  96 => 49,  49 => 4,  40 => 3,  11 => 1,);
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
                        <form class=\"form-inline\" id=\"form_search\">

                            Nom <input type=\"text\" id=\"input_nom\" placeholder=\"Nom\"/>
                            Prenom <input type=\"text\" id=\"input_prenom\" placeholder=\"Prenom\"/>
                            Email <input type=\"email\" id=\"input_mail\" placeholder=\"XXXX@eni-ecole.fr\"/>

                           <br>
                            <select id=\"select_entreprise\" style=\"width: 200px;\">Entreprise</select>
                            <select id=\"select_formation\" style=\"width: 200px;\">Formation</select>
                            <button id=\"rechercher\">Rechercher</button>
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
                <th>Entreprise</th>
                <th>Formation</th>
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

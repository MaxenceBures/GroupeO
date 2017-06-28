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
        $__internal_b1a99347d4645e71b6cf79ab1c8bbd8af0df736ac95bc28eb4f250321142358b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a99347d4645e71b6cf79ab1c8bbd8af0df736ac95bc28eb4f250321142358b->enter($__internal_b1a99347d4645e71b6cf79ab1c8bbd8af0df736ac95bc28eb4f250321142358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $__internal_df9ab08481bd74b4c23438e66d4096b77423157c1004c0ce4ea3643e4c09b859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9ab08481bd74b4c23438e66d4096b77423157c1004c0ce4ea3643e4c09b859->enter($__internal_df9ab08481bd74b4c23438e66d4096b77423157c1004c0ce4ea3643e4c09b859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a99347d4645e71b6cf79ab1c8bbd8af0df736ac95bc28eb4f250321142358b->leave($__internal_b1a99347d4645e71b6cf79ab1c8bbd8af0df736ac95bc28eb4f250321142358b_prof);

        
        $__internal_df9ab08481bd74b4c23438e66d4096b77423157c1004c0ce4ea3643e4c09b859->leave($__internal_df9ab08481bd74b4c23438e66d4096b77423157c1004c0ce4ea3643e4c09b859_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9fc5ecbcfd31400bd0885309b7be4b7a9660aec99e105d42e9957912b57b084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fc5ecbcfd31400bd0885309b7be4b7a9660aec99e105d42e9957912b57b084->enter($__internal_a9fc5ecbcfd31400bd0885309b7be4b7a9660aec99e105d42e9957912b57b084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cb225a3c95d11e90d0c7282e20cfc2240f90c1c9d1b10060f8a3a1afd5c18d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb225a3c95d11e90d0c7282e20cfc2240f90c1c9d1b10060f8a3a1afd5c18d2->enter($__internal_9cb225a3c95d11e90d0c7282e20cfc2240f90c1c9d1b10060f8a3a1afd5c18d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9cb225a3c95d11e90d0c7282e20cfc2240f90c1c9d1b10060f8a3a1afd5c18d2->leave($__internal_9cb225a3c95d11e90d0c7282e20cfc2240f90c1c9d1b10060f8a3a1afd5c18d2_prof);

        
        $__internal_a9fc5ecbcfd31400bd0885309b7be4b7a9660aec99e105d42e9957912b57b084->leave($__internal_a9fc5ecbcfd31400bd0885309b7be4b7a9660aec99e105d42e9957912b57b084_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8b8f091419b590dc7f85909597a8a627cf5ca88fd83577c0d265e80268327ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b8f091419b590dc7f85909597a8a627cf5ca88fd83577c0d265e80268327ec->enter($__internal_a8b8f091419b590dc7f85909597a8a627cf5ca88fd83577c0d265e80268327ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d87b0f4c9eadc35a34f1814ba2b05c4ee05bc2ad284d9b6c70561a12ec5eff7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87b0f4c9eadc35a34f1814ba2b05c4ee05bc2ad284d9b6c70561a12ec5eff7d->enter($__internal_d87b0f4c9eadc35a34f1814ba2b05c4ee05bc2ad284d9b6c70561a12ec5eff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/alternant/recherche.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d87b0f4c9eadc35a34f1814ba2b05c4ee05bc2ad284d9b6c70561a12ec5eff7d->leave($__internal_d87b0f4c9eadc35a34f1814ba2b05c4ee05bc2ad284d9b6c70561a12ec5eff7d_prof);

        
        $__internal_a8b8f091419b590dc7f85909597a8a627cf5ca88fd83577c0d265e80268327ec->leave($__internal_a8b8f091419b590dc7f85909597a8a627cf5ca88fd83577c0d265e80268327ec_prof);

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

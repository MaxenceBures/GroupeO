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
        $__internal_cd8109196342402ecceb3699ca891f68b03129a0fc6917b0062d9ff1cdbfec32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8109196342402ecceb3699ca891f68b03129a0fc6917b0062d9ff1cdbfec32->enter($__internal_cd8109196342402ecceb3699ca891f68b03129a0fc6917b0062d9ff1cdbfec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $__internal_fc78a5e09b4eb0b3afb8ff59e58c80c04cb06d8ddca306d7f9cd8e431b5e343d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc78a5e09b4eb0b3afb8ff59e58c80c04cb06d8ddca306d7f9cd8e431b5e343d->enter($__internal_fc78a5e09b4eb0b3afb8ff59e58c80c04cb06d8ddca306d7f9cd8e431b5e343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EniBundle:Alternant:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8109196342402ecceb3699ca891f68b03129a0fc6917b0062d9ff1cdbfec32->leave($__internal_cd8109196342402ecceb3699ca891f68b03129a0fc6917b0062d9ff1cdbfec32_prof);

        
        $__internal_fc78a5e09b4eb0b3afb8ff59e58c80c04cb06d8ddca306d7f9cd8e431b5e343d->leave($__internal_fc78a5e09b4eb0b3afb8ff59e58c80c04cb06d8ddca306d7f9cd8e431b5e343d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49dd50cbe73508fb37787e880512fd8e2cc277c01f165e34739c504fed4107d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49dd50cbe73508fb37787e880512fd8e2cc277c01f165e34739c504fed4107d3->enter($__internal_49dd50cbe73508fb37787e880512fd8e2cc277c01f165e34739c504fed4107d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81b9a5b43733518821f1b56bbfdf8c4af20578ef9c3fb7deee3f316381f2be1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b9a5b43733518821f1b56bbfdf8c4af20578ef9c3fb7deee3f316381f2be1c->enter($__internal_81b9a5b43733518821f1b56bbfdf8c4af20578ef9c3fb7deee3f316381f2be1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/alternant/recherche.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_81b9a5b43733518821f1b56bbfdf8c4af20578ef9c3fb7deee3f316381f2be1c->leave($__internal_81b9a5b43733518821f1b56bbfdf8c4af20578ef9c3fb7deee3f316381f2be1c_prof);

        
        $__internal_49dd50cbe73508fb37787e880512fd8e2cc277c01f165e34739c504fed4107d3->leave($__internal_49dd50cbe73508fb37787e880512fd8e2cc277c01f165e34739c504fed4107d3_prof);

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
        return array (  112 => 65,  49 => 4,  40 => 3,  11 => 1,);
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

    <script src=\"{{ asset('Js/alternant/recherche.js') }}\"></script>

{% endblock %}", "EniBundle:Alternant:recherche.html.twig", "C:\\wamp\\www\\GroupeO\\src\\EniBundle/Resources/views/Alternant/recherche.html.twig");
    }
}

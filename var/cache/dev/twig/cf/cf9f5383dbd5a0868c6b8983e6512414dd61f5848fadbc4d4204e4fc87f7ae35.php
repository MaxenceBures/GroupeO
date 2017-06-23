<?php

/* FrontendBundle:Accueil:accueil.html.twig */
class __TwigTemplate_aeabe486b98982501eddecf218fb4ba597c4bd152f35db66e5978de168f390cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "FrontendBundle:Accueil:accueil.html.twig", 1);
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
        $__internal_3e6c2b98f6d5437bb6a11252824ff80d1f1098b1621fd40c80924c2f4991e7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6c2b98f6d5437bb6a11252824ff80d1f1098b1621fd40c80924c2f4991e7df->enter($__internal_3e6c2b98f6d5437bb6a11252824ff80d1f1098b1621fd40c80924c2f4991e7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $__internal_33dedcf267d671d35469a29dee151cfb5afb1cc2c2660c7e5d22eadd0ad4b743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33dedcf267d671d35469a29dee151cfb5afb1cc2c2660c7e5d22eadd0ad4b743->enter($__internal_33dedcf267d671d35469a29dee151cfb5afb1cc2c2660c7e5d22eadd0ad4b743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6c2b98f6d5437bb6a11252824ff80d1f1098b1621fd40c80924c2f4991e7df->leave($__internal_3e6c2b98f6d5437bb6a11252824ff80d1f1098b1621fd40c80924c2f4991e7df_prof);

        
        $__internal_33dedcf267d671d35469a29dee151cfb5afb1cc2c2660c7e5d22eadd0ad4b743->leave($__internal_33dedcf267d671d35469a29dee151cfb5afb1cc2c2660c7e5d22eadd0ad4b743_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf5bc11ab2c1f82e1752f56edec3a1cb85647fa301f6ce12c3cff314b215a765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5bc11ab2c1f82e1752f56edec3a1cb85647fa301f6ce12c3cff314b215a765->enter($__internal_cf5bc11ab2c1f82e1752f56edec3a1cb85647fa301f6ce12c3cff314b215a765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cdffb713f1fb0691ba9e4c32ff1a31c9d1f8b21de379507998bc88e80802c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdffb713f1fb0691ba9e4c32ff1a31c9d1f8b21de379507998bc88e80802c48->enter($__internal_9cdffb713f1fb0691ba9e4c32ff1a31c9d1f8b21de379507998bc88e80802c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <H1>Accueil</H1>

Hello World!
    <ul>

        <li><a href=\"register\">Enregistrement</a></li>
        <li><a href=\"utilisateur/liste\">Utilisateur - Liste</a></li>
        <li><a href=\"alternant/recherche\">Alternant - Recherche</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

";
        
        $__internal_9cdffb713f1fb0691ba9e4c32ff1a31c9d1f8b21de379507998bc88e80802c48->leave($__internal_9cdffb713f1fb0691ba9e4c32ff1a31c9d1f8b21de379507998bc88e80802c48_prof);

        
        $__internal_cf5bc11ab2c1f82e1752f56edec3a1cb85647fa301f6ce12c3cff314b215a765->leave($__internal_cf5bc11ab2c1f82e1752f56edec3a1cb85647fa301f6ce12c3cff314b215a765_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <H1>Accueil</H1>

Hello World!
    <ul>

        <li><a href=\"register\">Enregistrement</a></li>
        <li><a href=\"utilisateur/liste\">Utilisateur - Liste</a></li>
        <li><a href=\"alternant/recherche\">Alternant - Recherche</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

{% endblock %}", "FrontendBundle:Accueil:accueil.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Accueil/accueil.html.twig");
    }
}

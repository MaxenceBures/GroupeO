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
            'title' => array($this, 'block_title'),
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
        $__internal_7cf3768dca0ca01d00a49d9251efbf02ad71958943ef9288849ee4778d8d4c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf3768dca0ca01d00a49d9251efbf02ad71958943ef9288849ee4778d8d4c85->enter($__internal_7cf3768dca0ca01d00a49d9251efbf02ad71958943ef9288849ee4778d8d4c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $__internal_0fd914b7217380878b014b078be8e03336acc96b609127e3d45c050104a2f431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd914b7217380878b014b078be8e03336acc96b609127e3d45c050104a2f431->enter($__internal_0fd914b7217380878b014b078be8e03336acc96b609127e3d45c050104a2f431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf3768dca0ca01d00a49d9251efbf02ad71958943ef9288849ee4778d8d4c85->leave($__internal_7cf3768dca0ca01d00a49d9251efbf02ad71958943ef9288849ee4778d8d4c85_prof);

        
        $__internal_0fd914b7217380878b014b078be8e03336acc96b609127e3d45c050104a2f431->leave($__internal_0fd914b7217380878b014b078be8e03336acc96b609127e3d45c050104a2f431_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb18ea31337944ca72095f619c55cb262acefcaef594776e1bac1c9c808d90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb18ea31337944ca72095f619c55cb262acefcaef594776e1bac1c9c808d90c->enter($__internal_dbb18ea31337944ca72095f619c55cb262acefcaef594776e1bac1c9c808d90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb2badd8be93e69c9cb4897809cdc1002d7c266fba798ccd894f54a3772ddd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2badd8be93e69c9cb4897809cdc1002d7c266fba798ccd894f54a3772ddd08->enter($__internal_fb2badd8be93e69c9cb4897809cdc1002d7c266fba798ccd894f54a3772ddd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ENI Ecole - Accueil";
        
        $__internal_fb2badd8be93e69c9cb4897809cdc1002d7c266fba798ccd894f54a3772ddd08->leave($__internal_fb2badd8be93e69c9cb4897809cdc1002d7c266fba798ccd894f54a3772ddd08_prof);

        
        $__internal_dbb18ea31337944ca72095f619c55cb262acefcaef594776e1bac1c9c808d90c->leave($__internal_dbb18ea31337944ca72095f619c55cb262acefcaef594776e1bac1c9c808d90c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_136b8ca197513958665b7f8c4a33e5c0466191ff79f9f9a2d2b25ee3d8b87616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136b8ca197513958665b7f8c4a33e5c0466191ff79f9f9a2d2b25ee3d8b87616->enter($__internal_136b8ca197513958665b7f8c4a33e5c0466191ff79f9f9a2d2b25ee3d8b87616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69187934e033b2735931c16b450f307478d022c9d08bf37b47bc8fd50f075562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69187934e033b2735931c16b450f307478d022c9d08bf37b47bc8fd50f075562->enter($__internal_69187934e033b2735931c16b450f307478d022c9d08bf37b47bc8fd50f075562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <H1>Accueil</H1>
    <ul>
        <li><a href=\"register\">Enregistrement</a></li>
        <li><a href=\"utilisateur/liste\">Utilisateur - Liste</a></li>
        <li><a href=\"alternant/recherche\">Alternant - Recherche</a></li>
        <li><a href=\"#\" onclick=\"getFramePlanning()\">Création de planning</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

";
        
        $__internal_69187934e033b2735931c16b450f307478d022c9d08bf37b47bc8fd50f075562->leave($__internal_69187934e033b2735931c16b450f307478d022c9d08bf37b47bc8fd50f075562_prof);

        
        $__internal_136b8ca197513958665b7f8c4a33e5c0466191ff79f9f9a2d2b25ee3d8b87616->leave($__internal_136b8ca197513958665b7f8c4a33e5c0466191ff79f9f9a2d2b25ee3d8b87616_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_657d2eb84cfda98d1c1a00b87248a5c7ce9f72421a35544b69fd4cc12ab6287e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657d2eb84cfda98d1c1a00b87248a5c7ce9f72421a35544b69fd4cc12ab6287e->enter($__internal_657d2eb84cfda98d1c1a00b87248a5c7ce9f72421a35544b69fd4cc12ab6287e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af0a2baa9e0a417e7cb8307ab2dbb9ba07d6c6845b62b452f59edd0261f23740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0a2baa9e0a417e7cb8307ab2dbb9ba07d6c6845b62b452f59edd0261f23740->enter($__internal_af0a2baa9e0a417e7cb8307ab2dbb9ba07d6c6845b62b452f59edd0261f23740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/planning/generation.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_af0a2baa9e0a417e7cb8307ab2dbb9ba07d6c6845b62b452f59edd0261f23740->leave($__internal_af0a2baa9e0a417e7cb8307ab2dbb9ba07d6c6845b62b452f59edd0261f23740_prof);

        
        $__internal_657d2eb84cfda98d1c1a00b87248a5c7ce9f72421a35544b69fd4cc12ab6287e->leave($__internal_657d2eb84cfda98d1c1a00b87248a5c7ce9f72421a35544b69fd4cc12ab6287e_prof);

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
        return array (  98 => 17,  89 => 16,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
{% block title %}ENI Ecole - Accueil{% endblock %}
{% block body %}
    <H1>Accueil</H1>
    <ul>
        <li><a href=\"register\">Enregistrement</a></li>
        <li><a href=\"utilisateur/liste\">Utilisateur - Liste</a></li>
        <li><a href=\"alternant/recherche\">Alternant - Recherche</a></li>
        <li><a href=\"#\" onclick=\"getFramePlanning()\">Création de planning</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('Js/planning/generation.js') }}\" type=\"text/javascript\"></script>
{% endblock %}", "FrontendBundle:Accueil:accueil.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Accueil/accueil.html.twig");
    }
}

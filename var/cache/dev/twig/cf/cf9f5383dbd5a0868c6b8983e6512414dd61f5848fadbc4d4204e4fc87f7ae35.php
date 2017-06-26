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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5aedabad61e353bcf6999c16924845721e2dd64360dddac2c79d3a6dec323178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aedabad61e353bcf6999c16924845721e2dd64360dddac2c79d3a6dec323178->enter($__internal_5aedabad61e353bcf6999c16924845721e2dd64360dddac2c79d3a6dec323178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $__internal_46a5a1401641d18b5340a034acbdda16cf96cf91e22882f0c4dd38fe6ca208b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a5a1401641d18b5340a034acbdda16cf96cf91e22882f0c4dd38fe6ca208b4->enter($__internal_46a5a1401641d18b5340a034acbdda16cf96cf91e22882f0c4dd38fe6ca208b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aedabad61e353bcf6999c16924845721e2dd64360dddac2c79d3a6dec323178->leave($__internal_5aedabad61e353bcf6999c16924845721e2dd64360dddac2c79d3a6dec323178_prof);

        
        $__internal_46a5a1401641d18b5340a034acbdda16cf96cf91e22882f0c4dd38fe6ca208b4->leave($__internal_46a5a1401641d18b5340a034acbdda16cf96cf91e22882f0c4dd38fe6ca208b4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2818a199d15235b7c4e2d48d6dbe4cdcb6ac39257415bfaf3ae2d2c98581b81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2818a199d15235b7c4e2d48d6dbe4cdcb6ac39257415bfaf3ae2d2c98581b81c->enter($__internal_2818a199d15235b7c4e2d48d6dbe4cdcb6ac39257415bfaf3ae2d2c98581b81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ebaabad9211cd411799e1536ea8421ba97c99cfa47ef0b9a35a5fdd3e9da62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebaabad9211cd411799e1536ea8421ba97c99cfa47ef0b9a35a5fdd3e9da62b->enter($__internal_1ebaabad9211cd411799e1536ea8421ba97c99cfa47ef0b9a35a5fdd3e9da62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ENI Ecole - Accueil";
        
        $__internal_1ebaabad9211cd411799e1536ea8421ba97c99cfa47ef0b9a35a5fdd3e9da62b->leave($__internal_1ebaabad9211cd411799e1536ea8421ba97c99cfa47ef0b9a35a5fdd3e9da62b_prof);

        
        $__internal_2818a199d15235b7c4e2d48d6dbe4cdcb6ac39257415bfaf3ae2d2c98581b81c->leave($__internal_2818a199d15235b7c4e2d48d6dbe4cdcb6ac39257415bfaf3ae2d2c98581b81c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29f9305ead045f5c019851800f03e89ccb8bc7a89c5e991ba40cac961507c29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f9305ead045f5c019851800f03e89ccb8bc7a89c5e991ba40cac961507c29b->enter($__internal_29f9305ead045f5c019851800f03e89ccb8bc7a89c5e991ba40cac961507c29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_037a111500498c5eb6a74ab4ea5f05b11a339607d89335aca3bf002d51345140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037a111500498c5eb6a74ab4ea5f05b11a339607d89335aca3bf002d51345140->enter($__internal_037a111500498c5eb6a74ab4ea5f05b11a339607d89335aca3bf002d51345140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <H1>Accueil</H1>
    <ul>
        <li><a href=\"register\">Enregistrement</a></li>
        <li><a href=\"utilisateur/liste\">Utilisateur - Liste</a></li>
        <li><a href=\"alternant/recherche\">Alternant - Recherche</a></li>
        <li><a href=\"alternant/recherche\">Création de planning</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

";
        
        $__internal_037a111500498c5eb6a74ab4ea5f05b11a339607d89335aca3bf002d51345140->leave($__internal_037a111500498c5eb6a74ab4ea5f05b11a339607d89335aca3bf002d51345140_prof);

        
        $__internal_29f9305ead045f5c019851800f03e89ccb8bc7a89c5e991ba40cac961507c29b->leave($__internal_29f9305ead045f5c019851800f03e89ccb8bc7a89c5e991ba40cac961507c29b_prof);

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
        return array (  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
        <li><a href=\"alternant/recherche\">Création de planning</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

{% endblock %}", "FrontendBundle:Accueil:accueil.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Accueil/accueil.html.twig");
    }
}

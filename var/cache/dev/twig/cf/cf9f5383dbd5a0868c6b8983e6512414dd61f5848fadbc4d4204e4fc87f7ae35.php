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
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_a025e85234d2c8f6f78a5b1b797b5da4c5754d694ddab83f36634d278ee84772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a025e85234d2c8f6f78a5b1b797b5da4c5754d694ddab83f36634d278ee84772->enter($__internal_a025e85234d2c8f6f78a5b1b797b5da4c5754d694ddab83f36634d278ee84772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $__internal_9487960ddf27d51399f6cf7305827ff9306fe1dedfa49fd970de955d2b576784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9487960ddf27d51399f6cf7305827ff9306fe1dedfa49fd970de955d2b576784->enter($__internal_9487960ddf27d51399f6cf7305827ff9306fe1dedfa49fd970de955d2b576784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a025e85234d2c8f6f78a5b1b797b5da4c5754d694ddab83f36634d278ee84772->leave($__internal_a025e85234d2c8f6f78a5b1b797b5da4c5754d694ddab83f36634d278ee84772_prof);

        
        $__internal_9487960ddf27d51399f6cf7305827ff9306fe1dedfa49fd970de955d2b576784->leave($__internal_9487960ddf27d51399f6cf7305827ff9306fe1dedfa49fd970de955d2b576784_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9466ae0f94bf20bede430a16255d523146f477243514f477157101a78c4d0528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9466ae0f94bf20bede430a16255d523146f477243514f477157101a78c4d0528->enter($__internal_9466ae0f94bf20bede430a16255d523146f477243514f477157101a78c4d0528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55e3833248fa79ad9f5695f5e857a5a141249fd25a771012085e1e574c0e0bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e3833248fa79ad9f5695f5e857a5a141249fd25a771012085e1e574c0e0bb7->enter($__internal_55e3833248fa79ad9f5695f5e857a5a141249fd25a771012085e1e574c0e0bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ENI Ecole - Accueil";
        
        $__internal_55e3833248fa79ad9f5695f5e857a5a141249fd25a771012085e1e574c0e0bb7->leave($__internal_55e3833248fa79ad9f5695f5e857a5a141249fd25a771012085e1e574c0e0bb7_prof);

        
        $__internal_9466ae0f94bf20bede430a16255d523146f477243514f477157101a78c4d0528->leave($__internal_9466ae0f94bf20bede430a16255d523146f477243514f477157101a78c4d0528_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a3bc51edb1534dc79106ad07169f269bccbbc0a45e388dd6df227507792f2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3bc51edb1534dc79106ad07169f269bccbbc0a45e388dd6df227507792f2c9->enter($__internal_8a3bc51edb1534dc79106ad07169f269bccbbc0a45e388dd6df227507792f2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09dd9b5f43f426aace03fb78c42eab1374407906545e5ad30b88c92b3c5bb7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dd9b5f43f426aace03fb78c42eab1374407906545e5ad30b88c92b3c5bb7cc->enter($__internal_09dd9b5f43f426aace03fb78c42eab1374407906545e5ad30b88c92b3c5bb7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style> .content-wrapper,.main-footer{ margin-left : 0!important}</style>
";
        
        $__internal_09dd9b5f43f426aace03fb78c42eab1374407906545e5ad30b88c92b3c5bb7cc->leave($__internal_09dd9b5f43f426aace03fb78c42eab1374407906545e5ad30b88c92b3c5bb7cc_prof);

        
        $__internal_8a3bc51edb1534dc79106ad07169f269bccbbc0a45e388dd6df227507792f2c9->leave($__internal_8a3bc51edb1534dc79106ad07169f269bccbbc0a45e388dd6df227507792f2c9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c221c9f4b7541c0561efdf3a5122bfa740dc526efb14061991b688f0f5bf8d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c221c9f4b7541c0561efdf3a5122bfa740dc526efb14061991b688f0f5bf8d23->enter($__internal_c221c9f4b7541c0561efdf3a5122bfa740dc526efb14061991b688f0f5bf8d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62d45fe1f5955e6c912762d3d17707c8d71cf471b7bb20963afabf0e68f9572d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d45fe1f5955e6c912762d3d17707c8d71cf471b7bb20963afabf0e68f9572d->enter($__internal_62d45fe1f5955e6c912762d3d17707c8d71cf471b7bb20963afabf0e68f9572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <H1>Accueil</H1>
    <ul>
        <li><a href=\"register\">Enregistrement</a></li>
        <li><a href=\"utilisateur/liste\">Utilisateur - Liste</a></li>
        <li><a href=\"alternant/recherche\">Alternant - Recherche</a></li>
        <li><a href=\"#\" onclick=\"getFramePlanning();\">Création de planning</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

";
        
        $__internal_62d45fe1f5955e6c912762d3d17707c8d71cf471b7bb20963afabf0e68f9572d->leave($__internal_62d45fe1f5955e6c912762d3d17707c8d71cf471b7bb20963afabf0e68f9572d_prof);

        
        $__internal_c221c9f4b7541c0561efdf3a5122bfa740dc526efb14061991b688f0f5bf8d23->leave($__internal_c221c9f4b7541c0561efdf3a5122bfa740dc526efb14061991b688f0f5bf8d23_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ded4db392150b82733d54866bb2abd2bbe23de73134b90bcd0e3b286097a94f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded4db392150b82733d54866bb2abd2bbe23de73134b90bcd0e3b286097a94f3->enter($__internal_ded4db392150b82733d54866bb2abd2bbe23de73134b90bcd0e3b286097a94f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fd5ab732a5b64fcdcca9e230ac16a050591e3234caff0ebd52b2126c8016d364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5ab732a5b64fcdcca9e230ac16a050591e3234caff0ebd52b2126c8016d364->enter($__internal_fd5ab732a5b64fcdcca9e230ac16a050591e3234caff0ebd52b2126c8016d364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/planning/generation.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_fd5ab732a5b64fcdcca9e230ac16a050591e3234caff0ebd52b2126c8016d364->leave($__internal_fd5ab732a5b64fcdcca9e230ac16a050591e3234caff0ebd52b2126c8016d364_prof);

        
        $__internal_ded4db392150b82733d54866bb2abd2bbe23de73134b90bcd0e3b286097a94f3->leave($__internal_ded4db392150b82733d54866bb2abd2bbe23de73134b90bcd0e3b286097a94f3_prof);

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
        return array (  119 => 20,  110 => 19,  90 => 7,  81 => 6,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% block stylesheets %}
    <style> .content-wrapper,.main-footer{ margin-left : 0!important}</style>
{% endblock %}
{% block body %}
    <H1>Accueil</H1>
    <ul>
        <li><a href=\"register\">Enregistrement</a></li>
        <li><a href=\"utilisateur/liste\">Utilisateur - Liste</a></li>
        <li><a href=\"alternant/recherche\">Alternant - Recherche</a></li>
        <li><a href=\"#\" onclick=\"getFramePlanning();\">Création de planning</a></li>
        <li><a href=\"logout\">Deconnexion</a></li>
        <li><a href=\"erreur\">phpinfo</a></li>
    </ul>

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('Js/planning/generation.js') }}\" type=\"text/javascript\"></script>
{% endblock %}", "FrontendBundle:Accueil:accueil.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Accueil/accueil.html.twig");
    }
}

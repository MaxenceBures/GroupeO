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
        $__internal_66e92b076754c2d8e5f7e43b4b47e36ea62ef1e5be96c0820d9ec6308be064cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e92b076754c2d8e5f7e43b4b47e36ea62ef1e5be96c0820d9ec6308be064cc->enter($__internal_66e92b076754c2d8e5f7e43b4b47e36ea62ef1e5be96c0820d9ec6308be064cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $__internal_b32723d81383ab16332f035d07cb9437ae7e530d68fd2fbeb525a06e2add4d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32723d81383ab16332f035d07cb9437ae7e530d68fd2fbeb525a06e2add4d55->enter($__internal_b32723d81383ab16332f035d07cb9437ae7e530d68fd2fbeb525a06e2add4d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e92b076754c2d8e5f7e43b4b47e36ea62ef1e5be96c0820d9ec6308be064cc->leave($__internal_66e92b076754c2d8e5f7e43b4b47e36ea62ef1e5be96c0820d9ec6308be064cc_prof);

        
        $__internal_b32723d81383ab16332f035d07cb9437ae7e530d68fd2fbeb525a06e2add4d55->leave($__internal_b32723d81383ab16332f035d07cb9437ae7e530d68fd2fbeb525a06e2add4d55_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3d811307736f95b6d9e0cc567c08509b129bc81ad593aad0a94677aab53141a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d811307736f95b6d9e0cc567c08509b129bc81ad593aad0a94677aab53141a->enter($__internal_c3d811307736f95b6d9e0cc567c08509b129bc81ad593aad0a94677aab53141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4cbecfe96df1b9b999c3e589fb26d7cdea7748e38688d09896bf21dff08fa9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cbecfe96df1b9b999c3e589fb26d7cdea7748e38688d09896bf21dff08fa9c->enter($__internal_e4cbecfe96df1b9b999c3e589fb26d7cdea7748e38688d09896bf21dff08fa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ENI Ecole - Accueil";
        
        $__internal_e4cbecfe96df1b9b999c3e589fb26d7cdea7748e38688d09896bf21dff08fa9c->leave($__internal_e4cbecfe96df1b9b999c3e589fb26d7cdea7748e38688d09896bf21dff08fa9c_prof);

        
        $__internal_c3d811307736f95b6d9e0cc567c08509b129bc81ad593aad0a94677aab53141a->leave($__internal_c3d811307736f95b6d9e0cc567c08509b129bc81ad593aad0a94677aab53141a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67b98af0519c7b008b152a0d2f2d8d269ce69e4f6b7274de588d6228e51537ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b98af0519c7b008b152a0d2f2d8d269ce69e4f6b7274de588d6228e51537ac->enter($__internal_67b98af0519c7b008b152a0d2f2d8d269ce69e4f6b7274de588d6228e51537ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4740c87946793c7ca46687e34c8bd5b981f1c1d7d18f64a22f32fddd875ca0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4740c87946793c7ca46687e34c8bd5b981f1c1d7d18f64a22f32fddd875ca0a6->enter($__internal_4740c87946793c7ca46687e34c8bd5b981f1c1d7d18f64a22f32fddd875ca0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style> .content-wrapper,.main-footer{ margin-left : 0!important}</style>
";
        
        $__internal_4740c87946793c7ca46687e34c8bd5b981f1c1d7d18f64a22f32fddd875ca0a6->leave($__internal_4740c87946793c7ca46687e34c8bd5b981f1c1d7d18f64a22f32fddd875ca0a6_prof);

        
        $__internal_67b98af0519c7b008b152a0d2f2d8d269ce69e4f6b7274de588d6228e51537ac->leave($__internal_67b98af0519c7b008b152a0d2f2d8d269ce69e4f6b7274de588d6228e51537ac_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ee85534e6b6dd62950290b16e6753d9dcb58ef7447b51e5565971cf586615e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ee85534e6b6dd62950290b16e6753d9dcb58ef7447b51e5565971cf586615e->enter($__internal_a8ee85534e6b6dd62950290b16e6753d9dcb58ef7447b51e5565971cf586615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fda884956cdca77911aec090722834fba361f6c749788a04dab5025f6578812a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda884956cdca77911aec090722834fba361f6c749788a04dab5025f6578812a->enter($__internal_fda884956cdca77911aec090722834fba361f6c749788a04dab5025f6578812a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fda884956cdca77911aec090722834fba361f6c749788a04dab5025f6578812a->leave($__internal_fda884956cdca77911aec090722834fba361f6c749788a04dab5025f6578812a_prof);

        
        $__internal_a8ee85534e6b6dd62950290b16e6753d9dcb58ef7447b51e5565971cf586615e->leave($__internal_a8ee85534e6b6dd62950290b16e6753d9dcb58ef7447b51e5565971cf586615e_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bcd6c458623d891aa3a210c5c6e1cbb8a553a1117075bfc48a93a217d4ec7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bcd6c458623d891aa3a210c5c6e1cbb8a553a1117075bfc48a93a217d4ec7f8->enter($__internal_1bcd6c458623d891aa3a210c5c6e1cbb8a553a1117075bfc48a93a217d4ec7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_09cdf965dc21ef5e986e8c820cd724a615400cd2e6658dc49d6679708b81d8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cdf965dc21ef5e986e8c820cd724a615400cd2e6658dc49d6679708b81d8a0->enter($__internal_09cdf965dc21ef5e986e8c820cd724a615400cd2e6658dc49d6679708b81d8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/planning/generation.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/input-mask/jquery.inputmask.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/input-mask/jquery.inputmask.date.extensions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/input-mask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_09cdf965dc21ef5e986e8c820cd724a615400cd2e6658dc49d6679708b81d8a0->leave($__internal_09cdf965dc21ef5e986e8c820cd724a615400cd2e6658dc49d6679708b81d8a0_prof);

        
        $__internal_1bcd6c458623d891aa3a210c5c6e1cbb8a553a1117075bfc48a93a217d4ec7f8->leave($__internal_1bcd6c458623d891aa3a210c5c6e1cbb8a553a1117075bfc48a93a217d4ec7f8_prof);

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
        return array (  132 => 23,  128 => 22,  124 => 21,  119 => 20,  110 => 19,  90 => 7,  81 => 6,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
    <script src=\"{{ asset('template/plugins/input-mask/jquery.inputmask.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('template/plugins/input-mask/jquery.inputmask.date.extensions.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('template/plugins/input-mask/jquery.inputmask.extensions.js') }}\" type=\"text/javascript\"></script>
{% endblock %}", "FrontendBundle:Accueil:accueil.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Accueil/accueil.html.twig");
    }
}

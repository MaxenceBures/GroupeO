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
        $__internal_b865c0fc03bd4ff1186d57718a4e4bc2d256dc9cb39c3b7965679a7864b06bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b865c0fc03bd4ff1186d57718a4e4bc2d256dc9cb39c3b7965679a7864b06bff->enter($__internal_b865c0fc03bd4ff1186d57718a4e4bc2d256dc9cb39c3b7965679a7864b06bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $__internal_56ea44842e476fda6bf5b7191396f81fdfeab5b58897b6a33dd97e1ea1590930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ea44842e476fda6bf5b7191396f81fdfeab5b58897b6a33dd97e1ea1590930->enter($__internal_56ea44842e476fda6bf5b7191396f81fdfeab5b58897b6a33dd97e1ea1590930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b865c0fc03bd4ff1186d57718a4e4bc2d256dc9cb39c3b7965679a7864b06bff->leave($__internal_b865c0fc03bd4ff1186d57718a4e4bc2d256dc9cb39c3b7965679a7864b06bff_prof);

        
        $__internal_56ea44842e476fda6bf5b7191396f81fdfeab5b58897b6a33dd97e1ea1590930->leave($__internal_56ea44842e476fda6bf5b7191396f81fdfeab5b58897b6a33dd97e1ea1590930_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_74be270913f7c815ed87768bab429dc2908286c027d215957ae6b763f4c05276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74be270913f7c815ed87768bab429dc2908286c027d215957ae6b763f4c05276->enter($__internal_74be270913f7c815ed87768bab429dc2908286c027d215957ae6b763f4c05276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34cd68407c371aca33c4b08ff7431f4ccb44f3a0e8453bc70d8440d8473faaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34cd68407c371aca33c4b08ff7431f4ccb44f3a0e8453bc70d8440d8473faaf4->enter($__internal_34cd68407c371aca33c4b08ff7431f4ccb44f3a0e8453bc70d8440d8473faaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ENI Ecole - Accueil";
        
        $__internal_34cd68407c371aca33c4b08ff7431f4ccb44f3a0e8453bc70d8440d8473faaf4->leave($__internal_34cd68407c371aca33c4b08ff7431f4ccb44f3a0e8453bc70d8440d8473faaf4_prof);

        
        $__internal_74be270913f7c815ed87768bab429dc2908286c027d215957ae6b763f4c05276->leave($__internal_74be270913f7c815ed87768bab429dc2908286c027d215957ae6b763f4c05276_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2376d665376c26879a12f7d46835f23d2d6b65701be69dc9f641dbfc05555bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2376d665376c26879a12f7d46835f23d2d6b65701be69dc9f641dbfc05555bf0->enter($__internal_2376d665376c26879a12f7d46835f23d2d6b65701be69dc9f641dbfc05555bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cd6b124e3919618a314eb93e6cc0b943a1bf2012d62dd333f627e56bb7dd9f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6b124e3919618a314eb93e6cc0b943a1bf2012d62dd333f627e56bb7dd9f70->enter($__internal_cd6b124e3919618a314eb93e6cc0b943a1bf2012d62dd333f627e56bb7dd9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style> .content-wrapper,.main-footer{ margin-left : 0!important}</style>
";
        
        $__internal_cd6b124e3919618a314eb93e6cc0b943a1bf2012d62dd333f627e56bb7dd9f70->leave($__internal_cd6b124e3919618a314eb93e6cc0b943a1bf2012d62dd333f627e56bb7dd9f70_prof);

        
        $__internal_2376d665376c26879a12f7d46835f23d2d6b65701be69dc9f641dbfc05555bf0->leave($__internal_2376d665376c26879a12f7d46835f23d2d6b65701be69dc9f641dbfc05555bf0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e987ed7850094be115ca4578c1799e6a22abedd2f6995da079cf90507b6d62f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e987ed7850094be115ca4578c1799e6a22abedd2f6995da079cf90507b6d62f2->enter($__internal_e987ed7850094be115ca4578c1799e6a22abedd2f6995da079cf90507b6d62f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c353328396402864fec6b92ea6632902537064959d9936dcbd8692fd34ed4c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c353328396402864fec6b92ea6632902537064959d9936dcbd8692fd34ed4c0e->enter($__internal_c353328396402864fec6b92ea6632902537064959d9936dcbd8692fd34ed4c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c353328396402864fec6b92ea6632902537064959d9936dcbd8692fd34ed4c0e->leave($__internal_c353328396402864fec6b92ea6632902537064959d9936dcbd8692fd34ed4c0e_prof);

        
        $__internal_e987ed7850094be115ca4578c1799e6a22abedd2f6995da079cf90507b6d62f2->leave($__internal_e987ed7850094be115ca4578c1799e6a22abedd2f6995da079cf90507b6d62f2_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca9d2207e864856faea53f8756b629b4914d2ad5e0db7aa515612551eff0bd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9d2207e864856faea53f8756b629b4914d2ad5e0db7aa515612551eff0bd3d->enter($__internal_ca9d2207e864856faea53f8756b629b4914d2ad5e0db7aa515612551eff0bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb20240dee7db5497ef0d36bbefc4c5427111083317b55df5ae4dc6b908d5221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb20240dee7db5497ef0d36bbefc4c5427111083317b55df5ae4dc6b908d5221->enter($__internal_bb20240dee7db5497ef0d36bbefc4c5427111083317b55df5ae4dc6b908d5221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bb20240dee7db5497ef0d36bbefc4c5427111083317b55df5ae4dc6b908d5221->leave($__internal_bb20240dee7db5497ef0d36bbefc4c5427111083317b55df5ae4dc6b908d5221_prof);

        
        $__internal_ca9d2207e864856faea53f8756b629b4914d2ad5e0db7aa515612551eff0bd3d->leave($__internal_ca9d2207e864856faea53f8756b629b4914d2ad5e0db7aa515612551eff0bd3d_prof);

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

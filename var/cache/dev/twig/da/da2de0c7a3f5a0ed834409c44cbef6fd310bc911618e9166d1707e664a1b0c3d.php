<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d872a3466c96359f7cd0df564b780be741be7df4252b62eb827fd25e7443c994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_014d6c7aceb1b35d0e02ceff86e894c656dd22d8f5f182253959a1553702f782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014d6c7aceb1b35d0e02ceff86e894c656dd22d8f5f182253959a1553702f782->enter($__internal_014d6c7aceb1b35d0e02ceff86e894c656dd22d8f5f182253959a1553702f782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e108ea7ae88b0b07d6c7776aa3f9fc65092f993bff575fba2701c1419e8951d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e108ea7ae88b0b07d6c7776aa3f9fc65092f993bff575fba2701c1419e8951d4->enter($__internal_e108ea7ae88b0b07d6c7776aa3f9fc65092f993bff575fba2701c1419e8951d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_014d6c7aceb1b35d0e02ceff86e894c656dd22d8f5f182253959a1553702f782->leave($__internal_014d6c7aceb1b35d0e02ceff86e894c656dd22d8f5f182253959a1553702f782_prof);

        
        $__internal_e108ea7ae88b0b07d6c7776aa3f9fc65092f993bff575fba2701c1419e8951d4->leave($__internal_e108ea7ae88b0b07d6c7776aa3f9fc65092f993bff575fba2701c1419e8951d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a69f038f18566f7806adbc427c6af7cb2f0841ef8f5d97c8a028c0a16c591c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69f038f18566f7806adbc427c6af7cb2f0841ef8f5d97c8a028c0a16c591c03->enter($__internal_a69f038f18566f7806adbc427c6af7cb2f0841ef8f5d97c8a028c0a16c591c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f12dc9c68c0f006eb8fc79b6cf7db31317385155a1244fa6862866dc1f39389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f12dc9c68c0f006eb8fc79b6cf7db31317385155a1244fa6862866dc1f39389->enter($__internal_2f12dc9c68c0f006eb8fc79b6cf7db31317385155a1244fa6862866dc1f39389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f12dc9c68c0f006eb8fc79b6cf7db31317385155a1244fa6862866dc1f39389->leave($__internal_2f12dc9c68c0f006eb8fc79b6cf7db31317385155a1244fa6862866dc1f39389_prof);

        
        $__internal_a69f038f18566f7806adbc427c6af7cb2f0841ef8f5d97c8a028c0a16c591c03->leave($__internal_a69f038f18566f7806adbc427c6af7cb2f0841ef8f5d97c8a028c0a16c591c03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb43155dab5535cb8f0d2c62228e329386e66653da1eb53ddf23a200cfd2532d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb43155dab5535cb8f0d2c62228e329386e66653da1eb53ddf23a200cfd2532d->enter($__internal_bb43155dab5535cb8f0d2c62228e329386e66653da1eb53ddf23a200cfd2532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ee9cb7c4056a820a94f987615691d43128dac520e8a49035aee1edf63c40616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee9cb7c4056a820a94f987615691d43128dac520e8a49035aee1edf63c40616->enter($__internal_3ee9cb7c4056a820a94f987615691d43128dac520e8a49035aee1edf63c40616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ee9cb7c4056a820a94f987615691d43128dac520e8a49035aee1edf63c40616->leave($__internal_3ee9cb7c4056a820a94f987615691d43128dac520e8a49035aee1edf63c40616_prof);

        
        $__internal_bb43155dab5535cb8f0d2c62228e329386e66653da1eb53ddf23a200cfd2532d->leave($__internal_bb43155dab5535cb8f0d2c62228e329386e66653da1eb53ddf23a200cfd2532d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7958e83cb699a4e4a6d8d8e766c47f942973194cde6bb8747b68ada413c34506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7958e83cb699a4e4a6d8d8e766c47f942973194cde6bb8747b68ada413c34506->enter($__internal_7958e83cb699a4e4a6d8d8e766c47f942973194cde6bb8747b68ada413c34506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c6e73e06f893f38ed6333a253be8c8b15e721951629477c3e0a4bbc18c68c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6e73e06f893f38ed6333a253be8c8b15e721951629477c3e0a4bbc18c68c61->enter($__internal_1c6e73e06f893f38ed6333a253be8c8b15e721951629477c3e0a4bbc18c68c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c6e73e06f893f38ed6333a253be8c8b15e721951629477c3e0a4bbc18c68c61->leave($__internal_1c6e73e06f893f38ed6333a253be8c8b15e721951629477c3e0a4bbc18c68c61_prof);

        
        $__internal_7958e83cb699a4e4a6d8d8e766c47f942973194cde6bb8747b68ada413c34506->leave($__internal_7958e83cb699a4e4a6d8d8e766c47f942973194cde6bb8747b68ada413c34506_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\GroupeO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

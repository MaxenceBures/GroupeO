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
        $__internal_ef981ebe0d425e321ae94aaa97d868257869bad2cf309ad11ae01cd70c0e49f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef981ebe0d425e321ae94aaa97d868257869bad2cf309ad11ae01cd70c0e49f3->enter($__internal_ef981ebe0d425e321ae94aaa97d868257869bad2cf309ad11ae01cd70c0e49f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5ee6bda6f193e5b8390b1f18237ea55446605efdef7863a26a415a8dc4bf589d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee6bda6f193e5b8390b1f18237ea55446605efdef7863a26a415a8dc4bf589d->enter($__internal_5ee6bda6f193e5b8390b1f18237ea55446605efdef7863a26a415a8dc4bf589d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef981ebe0d425e321ae94aaa97d868257869bad2cf309ad11ae01cd70c0e49f3->leave($__internal_ef981ebe0d425e321ae94aaa97d868257869bad2cf309ad11ae01cd70c0e49f3_prof);

        
        $__internal_5ee6bda6f193e5b8390b1f18237ea55446605efdef7863a26a415a8dc4bf589d->leave($__internal_5ee6bda6f193e5b8390b1f18237ea55446605efdef7863a26a415a8dc4bf589d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0563bd92c081d55b4234a7d6b5eb6ab0e9695ec9e5e0dcf9c66109aa9f74f9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0563bd92c081d55b4234a7d6b5eb6ab0e9695ec9e5e0dcf9c66109aa9f74f9e1->enter($__internal_0563bd92c081d55b4234a7d6b5eb6ab0e9695ec9e5e0dcf9c66109aa9f74f9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9c6e5835f7adc9fbedff4357315d36962970ac630940c1a1b04ce840dea12e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6e5835f7adc9fbedff4357315d36962970ac630940c1a1b04ce840dea12e88->enter($__internal_9c6e5835f7adc9fbedff4357315d36962970ac630940c1a1b04ce840dea12e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c6e5835f7adc9fbedff4357315d36962970ac630940c1a1b04ce840dea12e88->leave($__internal_9c6e5835f7adc9fbedff4357315d36962970ac630940c1a1b04ce840dea12e88_prof);

        
        $__internal_0563bd92c081d55b4234a7d6b5eb6ab0e9695ec9e5e0dcf9c66109aa9f74f9e1->leave($__internal_0563bd92c081d55b4234a7d6b5eb6ab0e9695ec9e5e0dcf9c66109aa9f74f9e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d65b3e915eb97d80800c81394d55ff331e985b8848a906895128258c26a11e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65b3e915eb97d80800c81394d55ff331e985b8848a906895128258c26a11e9e->enter($__internal_d65b3e915eb97d80800c81394d55ff331e985b8848a906895128258c26a11e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26d2d41c874d81d1e318e60cf18481feab0bf390b8390362aee4d7b9743e6252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d2d41c874d81d1e318e60cf18481feab0bf390b8390362aee4d7b9743e6252->enter($__internal_26d2d41c874d81d1e318e60cf18481feab0bf390b8390362aee4d7b9743e6252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_26d2d41c874d81d1e318e60cf18481feab0bf390b8390362aee4d7b9743e6252->leave($__internal_26d2d41c874d81d1e318e60cf18481feab0bf390b8390362aee4d7b9743e6252_prof);

        
        $__internal_d65b3e915eb97d80800c81394d55ff331e985b8848a906895128258c26a11e9e->leave($__internal_d65b3e915eb97d80800c81394d55ff331e985b8848a906895128258c26a11e9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f60c1cb98ab0006b1e33fe570df8be5d9e6a336ea3f9385c4f98c949d74c9003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60c1cb98ab0006b1e33fe570df8be5d9e6a336ea3f9385c4f98c949d74c9003->enter($__internal_f60c1cb98ab0006b1e33fe570df8be5d9e6a336ea3f9385c4f98c949d74c9003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cdcb89e3793083b17da43295080a1f4cdbfd3de6f79ef2f069768b27e8e42f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcb89e3793083b17da43295080a1f4cdbfd3de6f79ef2f069768b27e8e42f9e->enter($__internal_cdcb89e3793083b17da43295080a1f4cdbfd3de6f79ef2f069768b27e8e42f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cdcb89e3793083b17da43295080a1f4cdbfd3de6f79ef2f069768b27e8e42f9e->leave($__internal_cdcb89e3793083b17da43295080a1f4cdbfd3de6f79ef2f069768b27e8e42f9e_prof);

        
        $__internal_f60c1cb98ab0006b1e33fe570df8be5d9e6a336ea3f9385c4f98c949d74c9003->leave($__internal_f60c1cb98ab0006b1e33fe570df8be5d9e6a336ea3f9385c4f98c949d74c9003_prof);

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

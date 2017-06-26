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
        $__internal_e751b4827a939472c48cf703b9c4e911340f83d1d1a7aa0476d250452b56f8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e751b4827a939472c48cf703b9c4e911340f83d1d1a7aa0476d250452b56f8fc->enter($__internal_e751b4827a939472c48cf703b9c4e911340f83d1d1a7aa0476d250452b56f8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5aec1ca27bcfcc65c38b5cd6ad2091796dc796d5b5dc54759aaeafeb1c3a841a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aec1ca27bcfcc65c38b5cd6ad2091796dc796d5b5dc54759aaeafeb1c3a841a->enter($__internal_5aec1ca27bcfcc65c38b5cd6ad2091796dc796d5b5dc54759aaeafeb1c3a841a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e751b4827a939472c48cf703b9c4e911340f83d1d1a7aa0476d250452b56f8fc->leave($__internal_e751b4827a939472c48cf703b9c4e911340f83d1d1a7aa0476d250452b56f8fc_prof);

        
        $__internal_5aec1ca27bcfcc65c38b5cd6ad2091796dc796d5b5dc54759aaeafeb1c3a841a->leave($__internal_5aec1ca27bcfcc65c38b5cd6ad2091796dc796d5b5dc54759aaeafeb1c3a841a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14e000d4f996c7e656999e662954d5451cfaba21f6c6a322ae574997ef622471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e000d4f996c7e656999e662954d5451cfaba21f6c6a322ae574997ef622471->enter($__internal_14e000d4f996c7e656999e662954d5451cfaba21f6c6a322ae574997ef622471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e177420452da172db5ed5c0a9f4c5a7beb92baeda167651c33f576d824e8577a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e177420452da172db5ed5c0a9f4c5a7beb92baeda167651c33f576d824e8577a->enter($__internal_e177420452da172db5ed5c0a9f4c5a7beb92baeda167651c33f576d824e8577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e177420452da172db5ed5c0a9f4c5a7beb92baeda167651c33f576d824e8577a->leave($__internal_e177420452da172db5ed5c0a9f4c5a7beb92baeda167651c33f576d824e8577a_prof);

        
        $__internal_14e000d4f996c7e656999e662954d5451cfaba21f6c6a322ae574997ef622471->leave($__internal_14e000d4f996c7e656999e662954d5451cfaba21f6c6a322ae574997ef622471_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8516d15226ca2133c0705f38748ed00997c2d26ea2af1553b78b26eeea45bfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8516d15226ca2133c0705f38748ed00997c2d26ea2af1553b78b26eeea45bfc1->enter($__internal_8516d15226ca2133c0705f38748ed00997c2d26ea2af1553b78b26eeea45bfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0afa3f00f21587f278ec013420e860daebe7ccdfaa375e9224df2b7cdc0edf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afa3f00f21587f278ec013420e860daebe7ccdfaa375e9224df2b7cdc0edf07->enter($__internal_0afa3f00f21587f278ec013420e860daebe7ccdfaa375e9224df2b7cdc0edf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0afa3f00f21587f278ec013420e860daebe7ccdfaa375e9224df2b7cdc0edf07->leave($__internal_0afa3f00f21587f278ec013420e860daebe7ccdfaa375e9224df2b7cdc0edf07_prof);

        
        $__internal_8516d15226ca2133c0705f38748ed00997c2d26ea2af1553b78b26eeea45bfc1->leave($__internal_8516d15226ca2133c0705f38748ed00997c2d26ea2af1553b78b26eeea45bfc1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5fe5e5f9b77ad337a88ed17142fa87030340a8127df04703a0562842f7079ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5fe5e5f9b77ad337a88ed17142fa87030340a8127df04703a0562842f7079ac->enter($__internal_f5fe5e5f9b77ad337a88ed17142fa87030340a8127df04703a0562842f7079ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5aeae1e5b146fb880754576a75e888ced92e2b54d2babc8564a86865c223123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5aeae1e5b146fb880754576a75e888ced92e2b54d2babc8564a86865c223123->enter($__internal_f5aeae1e5b146fb880754576a75e888ced92e2b54d2babc8564a86865c223123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5aeae1e5b146fb880754576a75e888ced92e2b54d2babc8564a86865c223123->leave($__internal_f5aeae1e5b146fb880754576a75e888ced92e2b54d2babc8564a86865c223123_prof);

        
        $__internal_f5fe5e5f9b77ad337a88ed17142fa87030340a8127df04703a0562842f7079ac->leave($__internal_f5fe5e5f9b77ad337a88ed17142fa87030340a8127df04703a0562842f7079ac_prof);

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

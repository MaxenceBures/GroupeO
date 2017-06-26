<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_57f0fe9e82f9df80022ccd9891730a1d51613bd6e1b6cba0785b208ae2661e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_83772fcad7dda423885104e1b2894d8d37a467586d09a8589fb82c2cf31c4499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83772fcad7dda423885104e1b2894d8d37a467586d09a8589fb82c2cf31c4499->enter($__internal_83772fcad7dda423885104e1b2894d8d37a467586d09a8589fb82c2cf31c4499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_273e7aaf06b5c8798cd5729ad9d12b31c18848d4980726ec71142a388b015dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273e7aaf06b5c8798cd5729ad9d12b31c18848d4980726ec71142a388b015dc1->enter($__internal_273e7aaf06b5c8798cd5729ad9d12b31c18848d4980726ec71142a388b015dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83772fcad7dda423885104e1b2894d8d37a467586d09a8589fb82c2cf31c4499->leave($__internal_83772fcad7dda423885104e1b2894d8d37a467586d09a8589fb82c2cf31c4499_prof);

        
        $__internal_273e7aaf06b5c8798cd5729ad9d12b31c18848d4980726ec71142a388b015dc1->leave($__internal_273e7aaf06b5c8798cd5729ad9d12b31c18848d4980726ec71142a388b015dc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d849323541735708ffaf5b58d44c46357f4e6f950a2916a29682b590f895f17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d849323541735708ffaf5b58d44c46357f4e6f950a2916a29682b590f895f17b->enter($__internal_d849323541735708ffaf5b58d44c46357f4e6f950a2916a29682b590f895f17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e6c2b5f5d7cb58c84a9cae5fa089a684419f4c2db3d8b7b13d8fd4b404dbfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6c2b5f5d7cb58c84a9cae5fa089a684419f4c2db3d8b7b13d8fd4b404dbfbb->enter($__internal_1e6c2b5f5d7cb58c84a9cae5fa089a684419f4c2db3d8b7b13d8fd4b404dbfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1e6c2b5f5d7cb58c84a9cae5fa089a684419f4c2db3d8b7b13d8fd4b404dbfbb->leave($__internal_1e6c2b5f5d7cb58c84a9cae5fa089a684419f4c2db3d8b7b13d8fd4b404dbfbb_prof);

        
        $__internal_d849323541735708ffaf5b58d44c46357f4e6f950a2916a29682b590f895f17b->leave($__internal_d849323541735708ffaf5b58d44c46357f4e6f950a2916a29682b590f895f17b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8012b67a58a6300927d8458fd2a58c1fe76401760a8bb6440b9975e2e03f8ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8012b67a58a6300927d8458fd2a58c1fe76401760a8bb6440b9975e2e03f8ba5->enter($__internal_8012b67a58a6300927d8458fd2a58c1fe76401760a8bb6440b9975e2e03f8ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e5724c20bb75b56c2559e7879badf1364888bcd8914eb63a433fbb357452aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5724c20bb75b56c2559e7879badf1364888bcd8914eb63a433fbb357452aaa->enter($__internal_7e5724c20bb75b56c2559e7879badf1364888bcd8914eb63a433fbb357452aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7e5724c20bb75b56c2559e7879badf1364888bcd8914eb63a433fbb357452aaa->leave($__internal_7e5724c20bb75b56c2559e7879badf1364888bcd8914eb63a433fbb357452aaa_prof);

        
        $__internal_8012b67a58a6300927d8458fd2a58c1fe76401760a8bb6440b9975e2e03f8ba5->leave($__internal_8012b67a58a6300927d8458fd2a58c1fe76401760a8bb6440b9975e2e03f8ba5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14cc3cb8ef6ab1ee0caf0acdd51997b3704535d4c9cd76880e2a735fe7514662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cc3cb8ef6ab1ee0caf0acdd51997b3704535d4c9cd76880e2a735fe7514662->enter($__internal_14cc3cb8ef6ab1ee0caf0acdd51997b3704535d4c9cd76880e2a735fe7514662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f838b5881d0c2dd7ae144c3baa54983928bef43ca21fe64623b5e0cadd7e67b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f838b5881d0c2dd7ae144c3baa54983928bef43ca21fe64623b5e0cadd7e67b1->enter($__internal_f838b5881d0c2dd7ae144c3baa54983928bef43ca21fe64623b5e0cadd7e67b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f838b5881d0c2dd7ae144c3baa54983928bef43ca21fe64623b5e0cadd7e67b1->leave($__internal_f838b5881d0c2dd7ae144c3baa54983928bef43ca21fe64623b5e0cadd7e67b1_prof);

        
        $__internal_14cc3cb8ef6ab1ee0caf0acdd51997b3704535d4c9cd76880e2a735fe7514662->leave($__internal_14cc3cb8ef6ab1ee0caf0acdd51997b3704535d4c9cd76880e2a735fe7514662_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\GroupeO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_426124b5e4a0e79c4b9cb3aa797d3f817af3b9b3b8c1af8165562695b7d92d9a extends Twig_Template
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
        $__internal_c3ba5347628948dfe524f1c0fed1c3624625032ec6baeb4a06c68d7fdcf78910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ba5347628948dfe524f1c0fed1c3624625032ec6baeb4a06c68d7fdcf78910->enter($__internal_c3ba5347628948dfe524f1c0fed1c3624625032ec6baeb4a06c68d7fdcf78910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5b7d10c1e3216b89f26b92d2af743711488df014b91f2d571db9c4218a7c6d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7d10c1e3216b89f26b92d2af743711488df014b91f2d571db9c4218a7c6d57->enter($__internal_5b7d10c1e3216b89f26b92d2af743711488df014b91f2d571db9c4218a7c6d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ba5347628948dfe524f1c0fed1c3624625032ec6baeb4a06c68d7fdcf78910->leave($__internal_c3ba5347628948dfe524f1c0fed1c3624625032ec6baeb4a06c68d7fdcf78910_prof);

        
        $__internal_5b7d10c1e3216b89f26b92d2af743711488df014b91f2d571db9c4218a7c6d57->leave($__internal_5b7d10c1e3216b89f26b92d2af743711488df014b91f2d571db9c4218a7c6d57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f94c2ec72a8dc5856c515456270d93cceb6b990cb25e9c16f951d640d6f2d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f94c2ec72a8dc5856c515456270d93cceb6b990cb25e9c16f951d640d6f2d08->enter($__internal_2f94c2ec72a8dc5856c515456270d93cceb6b990cb25e9c16f951d640d6f2d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dff72edb4d71c18c533b27b09cbd4b2cbd241133270dbc00c894cc843880cb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff72edb4d71c18c533b27b09cbd4b2cbd241133270dbc00c894cc843880cb62->enter($__internal_dff72edb4d71c18c533b27b09cbd4b2cbd241133270dbc00c894cc843880cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dff72edb4d71c18c533b27b09cbd4b2cbd241133270dbc00c894cc843880cb62->leave($__internal_dff72edb4d71c18c533b27b09cbd4b2cbd241133270dbc00c894cc843880cb62_prof);

        
        $__internal_2f94c2ec72a8dc5856c515456270d93cceb6b990cb25e9c16f951d640d6f2d08->leave($__internal_2f94c2ec72a8dc5856c515456270d93cceb6b990cb25e9c16f951d640d6f2d08_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfd74a0e9887aa6f763492fcd2235a0c5c5e26333d5f48a3b0df1d46a4739979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd74a0e9887aa6f763492fcd2235a0c5c5e26333d5f48a3b0df1d46a4739979->enter($__internal_bfd74a0e9887aa6f763492fcd2235a0c5c5e26333d5f48a3b0df1d46a4739979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85cd1c3e36fc7d5f8be7489397f3a58e4f9beb6b73bc55e5258fdbcf043b2b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cd1c3e36fc7d5f8be7489397f3a58e4f9beb6b73bc55e5258fdbcf043b2b1c->enter($__internal_85cd1c3e36fc7d5f8be7489397f3a58e4f9beb6b73bc55e5258fdbcf043b2b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85cd1c3e36fc7d5f8be7489397f3a58e4f9beb6b73bc55e5258fdbcf043b2b1c->leave($__internal_85cd1c3e36fc7d5f8be7489397f3a58e4f9beb6b73bc55e5258fdbcf043b2b1c_prof);

        
        $__internal_bfd74a0e9887aa6f763492fcd2235a0c5c5e26333d5f48a3b0df1d46a4739979->leave($__internal_bfd74a0e9887aa6f763492fcd2235a0c5c5e26333d5f48a3b0df1d46a4739979_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b119a20cc984c6b8aff32d8e9032eedee6d4a4b8571b94d7cf1acae038742c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b119a20cc984c6b8aff32d8e9032eedee6d4a4b8571b94d7cf1acae038742c8b->enter($__internal_b119a20cc984c6b8aff32d8e9032eedee6d4a4b8571b94d7cf1acae038742c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b23dc644e90eeacce6ce5d22950606315ac0d7687862c4616e6cde5fc5dec48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b23dc644e90eeacce6ce5d22950606315ac0d7687862c4616e6cde5fc5dec48->enter($__internal_7b23dc644e90eeacce6ce5d22950606315ac0d7687862c4616e6cde5fc5dec48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b23dc644e90eeacce6ce5d22950606315ac0d7687862c4616e6cde5fc5dec48->leave($__internal_7b23dc644e90eeacce6ce5d22950606315ac0d7687862c4616e6cde5fc5dec48_prof);

        
        $__internal_b119a20cc984c6b8aff32d8e9032eedee6d4a4b8571b94d7cf1acae038742c8b->leave($__internal_b119a20cc984c6b8aff32d8e9032eedee6d4a4b8571b94d7cf1acae038742c8b_prof);

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

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_70c1364a8aec406652717b790ec40582dff20a96b686521ae5c354eacaacb5a3 extends Twig_Template
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
        $__internal_47606b381b48e0dc36d25c02b20c2245bed2c7afc01b256614f0f61031affcc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47606b381b48e0dc36d25c02b20c2245bed2c7afc01b256614f0f61031affcc1->enter($__internal_47606b381b48e0dc36d25c02b20c2245bed2c7afc01b256614f0f61031affcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b3d9bc8941587c85480fcdf1785f2f21dda85eb4a0b6a1609d6a0790f308d5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d9bc8941587c85480fcdf1785f2f21dda85eb4a0b6a1609d6a0790f308d5e2->enter($__internal_b3d9bc8941587c85480fcdf1785f2f21dda85eb4a0b6a1609d6a0790f308d5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47606b381b48e0dc36d25c02b20c2245bed2c7afc01b256614f0f61031affcc1->leave($__internal_47606b381b48e0dc36d25c02b20c2245bed2c7afc01b256614f0f61031affcc1_prof);

        
        $__internal_b3d9bc8941587c85480fcdf1785f2f21dda85eb4a0b6a1609d6a0790f308d5e2->leave($__internal_b3d9bc8941587c85480fcdf1785f2f21dda85eb4a0b6a1609d6a0790f308d5e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf2d06f2acdf07a164a0073431281607dbf89975432778f9c3d1e5949576d8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2d06f2acdf07a164a0073431281607dbf89975432778f9c3d1e5949576d8fc->enter($__internal_bf2d06f2acdf07a164a0073431281607dbf89975432778f9c3d1e5949576d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64fd1cbb7060de94e6dcac106168d0bdd2aa50075f3de685fb745c9dc88a52ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fd1cbb7060de94e6dcac106168d0bdd2aa50075f3de685fb745c9dc88a52ce->enter($__internal_64fd1cbb7060de94e6dcac106168d0bdd2aa50075f3de685fb745c9dc88a52ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_64fd1cbb7060de94e6dcac106168d0bdd2aa50075f3de685fb745c9dc88a52ce->leave($__internal_64fd1cbb7060de94e6dcac106168d0bdd2aa50075f3de685fb745c9dc88a52ce_prof);

        
        $__internal_bf2d06f2acdf07a164a0073431281607dbf89975432778f9c3d1e5949576d8fc->leave($__internal_bf2d06f2acdf07a164a0073431281607dbf89975432778f9c3d1e5949576d8fc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_584b3e9aa24595064624c6097066a3df2f0976d1d890e6d4019cfb543735a538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584b3e9aa24595064624c6097066a3df2f0976d1d890e6d4019cfb543735a538->enter($__internal_584b3e9aa24595064624c6097066a3df2f0976d1d890e6d4019cfb543735a538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78617aebae9b77ad1c43e2a9dec46663d76b17daa38573673e59ac2f9a0c3793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78617aebae9b77ad1c43e2a9dec46663d76b17daa38573673e59ac2f9a0c3793->enter($__internal_78617aebae9b77ad1c43e2a9dec46663d76b17daa38573673e59ac2f9a0c3793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_78617aebae9b77ad1c43e2a9dec46663d76b17daa38573673e59ac2f9a0c3793->leave($__internal_78617aebae9b77ad1c43e2a9dec46663d76b17daa38573673e59ac2f9a0c3793_prof);

        
        $__internal_584b3e9aa24595064624c6097066a3df2f0976d1d890e6d4019cfb543735a538->leave($__internal_584b3e9aa24595064624c6097066a3df2f0976d1d890e6d4019cfb543735a538_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e03e7a55329ba2d3ed232daaa3a2c45e15566d81eb27ca68b9a8e2c69a4945a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e03e7a55329ba2d3ed232daaa3a2c45e15566d81eb27ca68b9a8e2c69a4945a->enter($__internal_7e03e7a55329ba2d3ed232daaa3a2c45e15566d81eb27ca68b9a8e2c69a4945a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd213588c8db5102038e6f62128ec43978aac8f72e89ef47dc39b166fd13cd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd213588c8db5102038e6f62128ec43978aac8f72e89ef47dc39b166fd13cd95->enter($__internal_fd213588c8db5102038e6f62128ec43978aac8f72e89ef47dc39b166fd13cd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fd213588c8db5102038e6f62128ec43978aac8f72e89ef47dc39b166fd13cd95->leave($__internal_fd213588c8db5102038e6f62128ec43978aac8f72e89ef47dc39b166fd13cd95_prof);

        
        $__internal_7e03e7a55329ba2d3ed232daaa3a2c45e15566d81eb27ca68b9a8e2c69a4945a->leave($__internal_7e03e7a55329ba2d3ed232daaa3a2c45e15566d81eb27ca68b9a8e2c69a4945a_prof);

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

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
        $__internal_52214af3795498320de5557e6124a2dfa7deec0be8e9a82f0ee4a10fb7e87e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52214af3795498320de5557e6124a2dfa7deec0be8e9a82f0ee4a10fb7e87e56->enter($__internal_52214af3795498320de5557e6124a2dfa7deec0be8e9a82f0ee4a10fb7e87e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8beb9da61496dfb60b321e87d2376e31f44ebff90fb3f1d9ba824415b5c6d6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8beb9da61496dfb60b321e87d2376e31f44ebff90fb3f1d9ba824415b5c6d6eb->enter($__internal_8beb9da61496dfb60b321e87d2376e31f44ebff90fb3f1d9ba824415b5c6d6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52214af3795498320de5557e6124a2dfa7deec0be8e9a82f0ee4a10fb7e87e56->leave($__internal_52214af3795498320de5557e6124a2dfa7deec0be8e9a82f0ee4a10fb7e87e56_prof);

        
        $__internal_8beb9da61496dfb60b321e87d2376e31f44ebff90fb3f1d9ba824415b5c6d6eb->leave($__internal_8beb9da61496dfb60b321e87d2376e31f44ebff90fb3f1d9ba824415b5c6d6eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a7f51b4498844d8c3baaf7af8c94c91b555401b0f956b9161ef8705197f380e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7f51b4498844d8c3baaf7af8c94c91b555401b0f956b9161ef8705197f380e->enter($__internal_3a7f51b4498844d8c3baaf7af8c94c91b555401b0f956b9161ef8705197f380e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_768492bd984eac2fa147a3ff315c77edf295f8904c47b95ba196a928c2ae9576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768492bd984eac2fa147a3ff315c77edf295f8904c47b95ba196a928c2ae9576->enter($__internal_768492bd984eac2fa147a3ff315c77edf295f8904c47b95ba196a928c2ae9576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_768492bd984eac2fa147a3ff315c77edf295f8904c47b95ba196a928c2ae9576->leave($__internal_768492bd984eac2fa147a3ff315c77edf295f8904c47b95ba196a928c2ae9576_prof);

        
        $__internal_3a7f51b4498844d8c3baaf7af8c94c91b555401b0f956b9161ef8705197f380e->leave($__internal_3a7f51b4498844d8c3baaf7af8c94c91b555401b0f956b9161ef8705197f380e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b37f5c32f640dc9ebf613c3f844671aceb904419daa3f5a3acfe2256fa05a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b37f5c32f640dc9ebf613c3f844671aceb904419daa3f5a3acfe2256fa05a21->enter($__internal_1b37f5c32f640dc9ebf613c3f844671aceb904419daa3f5a3acfe2256fa05a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3dad51149abe5867ec1e9f19f4eb37e6a11f80d1ac4f396fb1568adc422dddc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dad51149abe5867ec1e9f19f4eb37e6a11f80d1ac4f396fb1568adc422dddc7->enter($__internal_3dad51149abe5867ec1e9f19f4eb37e6a11f80d1ac4f396fb1568adc422dddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3dad51149abe5867ec1e9f19f4eb37e6a11f80d1ac4f396fb1568adc422dddc7->leave($__internal_3dad51149abe5867ec1e9f19f4eb37e6a11f80d1ac4f396fb1568adc422dddc7_prof);

        
        $__internal_1b37f5c32f640dc9ebf613c3f844671aceb904419daa3f5a3acfe2256fa05a21->leave($__internal_1b37f5c32f640dc9ebf613c3f844671aceb904419daa3f5a3acfe2256fa05a21_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e7902a6dbb1f4b92f7b932eca15300469fb89f0ab1f472d31e86495336dfe56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7902a6dbb1f4b92f7b932eca15300469fb89f0ab1f472d31e86495336dfe56->enter($__internal_7e7902a6dbb1f4b92f7b932eca15300469fb89f0ab1f472d31e86495336dfe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d03d4dbd353b1b4dfda71518a9c8ca02622eeb3ff24b03a9f5dc53ddffa90c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03d4dbd353b1b4dfda71518a9c8ca02622eeb3ff24b03a9f5dc53ddffa90c93->enter($__internal_d03d4dbd353b1b4dfda71518a9c8ca02622eeb3ff24b03a9f5dc53ddffa90c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d03d4dbd353b1b4dfda71518a9c8ca02622eeb3ff24b03a9f5dc53ddffa90c93->leave($__internal_d03d4dbd353b1b4dfda71518a9c8ca02622eeb3ff24b03a9f5dc53ddffa90c93_prof);

        
        $__internal_7e7902a6dbb1f4b92f7b932eca15300469fb89f0ab1f472d31e86495336dfe56->leave($__internal_7e7902a6dbb1f4b92f7b932eca15300469fb89f0ab1f472d31e86495336dfe56_prof);

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

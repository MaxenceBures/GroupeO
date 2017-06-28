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
        $__internal_f48b3ddc5cee6b09650c7f94c6a5af883cafbb56679cada1a477b8351c5ae130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48b3ddc5cee6b09650c7f94c6a5af883cafbb56679cada1a477b8351c5ae130->enter($__internal_f48b3ddc5cee6b09650c7f94c6a5af883cafbb56679cada1a477b8351c5ae130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_71fc063dab3bea4076294e6acef9ca3376cf9cfba8b0d0d3a4b8b37631f633e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fc063dab3bea4076294e6acef9ca3376cf9cfba8b0d0d3a4b8b37631f633e0->enter($__internal_71fc063dab3bea4076294e6acef9ca3376cf9cfba8b0d0d3a4b8b37631f633e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f48b3ddc5cee6b09650c7f94c6a5af883cafbb56679cada1a477b8351c5ae130->leave($__internal_f48b3ddc5cee6b09650c7f94c6a5af883cafbb56679cada1a477b8351c5ae130_prof);

        
        $__internal_71fc063dab3bea4076294e6acef9ca3376cf9cfba8b0d0d3a4b8b37631f633e0->leave($__internal_71fc063dab3bea4076294e6acef9ca3376cf9cfba8b0d0d3a4b8b37631f633e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e77217df49c70da196e3265038ee5d2dbd437b407c02cbed1fa6b18d6a68cbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77217df49c70da196e3265038ee5d2dbd437b407c02cbed1fa6b18d6a68cbb6->enter($__internal_e77217df49c70da196e3265038ee5d2dbd437b407c02cbed1fa6b18d6a68cbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_161cfda8be812661de9367fbdeee4bea98a78eda396541a6098c2a32989df078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161cfda8be812661de9367fbdeee4bea98a78eda396541a6098c2a32989df078->enter($__internal_161cfda8be812661de9367fbdeee4bea98a78eda396541a6098c2a32989df078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_161cfda8be812661de9367fbdeee4bea98a78eda396541a6098c2a32989df078->leave($__internal_161cfda8be812661de9367fbdeee4bea98a78eda396541a6098c2a32989df078_prof);

        
        $__internal_e77217df49c70da196e3265038ee5d2dbd437b407c02cbed1fa6b18d6a68cbb6->leave($__internal_e77217df49c70da196e3265038ee5d2dbd437b407c02cbed1fa6b18d6a68cbb6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2f0171e59d0e6cf26f9112674758c19057372be29eb4f4819656999c8419e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f0171e59d0e6cf26f9112674758c19057372be29eb4f4819656999c8419e17->enter($__internal_d2f0171e59d0e6cf26f9112674758c19057372be29eb4f4819656999c8419e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5329cb005dbb2d266fb2992d49282fb769351ad9a1c912cb9d87edad24a5b0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5329cb005dbb2d266fb2992d49282fb769351ad9a1c912cb9d87edad24a5b0e8->enter($__internal_5329cb005dbb2d266fb2992d49282fb769351ad9a1c912cb9d87edad24a5b0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5329cb005dbb2d266fb2992d49282fb769351ad9a1c912cb9d87edad24a5b0e8->leave($__internal_5329cb005dbb2d266fb2992d49282fb769351ad9a1c912cb9d87edad24a5b0e8_prof);

        
        $__internal_d2f0171e59d0e6cf26f9112674758c19057372be29eb4f4819656999c8419e17->leave($__internal_d2f0171e59d0e6cf26f9112674758c19057372be29eb4f4819656999c8419e17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44ee1648d4ff626d0619c661bce643e3bd03bc156616786278648fcf0f311047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ee1648d4ff626d0619c661bce643e3bd03bc156616786278648fcf0f311047->enter($__internal_44ee1648d4ff626d0619c661bce643e3bd03bc156616786278648fcf0f311047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4957cd17e5c56dbd49e88ab5553d518e6baf248d7b7c7a372d6520a31442a551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4957cd17e5c56dbd49e88ab5553d518e6baf248d7b7c7a372d6520a31442a551->enter($__internal_4957cd17e5c56dbd49e88ab5553d518e6baf248d7b7c7a372d6520a31442a551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4957cd17e5c56dbd49e88ab5553d518e6baf248d7b7c7a372d6520a31442a551->leave($__internal_4957cd17e5c56dbd49e88ab5553d518e6baf248d7b7c7a372d6520a31442a551_prof);

        
        $__internal_44ee1648d4ff626d0619c661bce643e3bd03bc156616786278648fcf0f311047->leave($__internal_44ee1648d4ff626d0619c661bce643e3bd03bc156616786278648fcf0f311047_prof);

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

<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_28cd0f52b3a6454dd1536ac1596d5d371093faadfb902477942690e194adebee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20177ca6a0d82112429c4fc53d4c74425eaa2de5331e41d2e5a80daa8f3cde34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20177ca6a0d82112429c4fc53d4c74425eaa2de5331e41d2e5a80daa8f3cde34->enter($__internal_20177ca6a0d82112429c4fc53d4c74425eaa2de5331e41d2e5a80daa8f3cde34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_92066fed4f1b339645b4311aed6ccdb318c0f5e1b366a3d673c88d21e77856b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92066fed4f1b339645b4311aed6ccdb318c0f5e1b366a3d673c88d21e77856b6->enter($__internal_92066fed4f1b339645b4311aed6ccdb318c0f5e1b366a3d673c88d21e77856b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20177ca6a0d82112429c4fc53d4c74425eaa2de5331e41d2e5a80daa8f3cde34->leave($__internal_20177ca6a0d82112429c4fc53d4c74425eaa2de5331e41d2e5a80daa8f3cde34_prof);

        
        $__internal_92066fed4f1b339645b4311aed6ccdb318c0f5e1b366a3d673c88d21e77856b6->leave($__internal_92066fed4f1b339645b4311aed6ccdb318c0f5e1b366a3d673c88d21e77856b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55d24e4893979489da34389f9bce7d28fbf2ed644f1501281615c22eb90688c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d24e4893979489da34389f9bce7d28fbf2ed644f1501281615c22eb90688c7->enter($__internal_55d24e4893979489da34389f9bce7d28fbf2ed644f1501281615c22eb90688c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd27bac797fa772fbe155ff2a436469de8e9c94345b388868df092f9d6442197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd27bac797fa772fbe155ff2a436469de8e9c94345b388868df092f9d6442197->enter($__internal_fd27bac797fa772fbe155ff2a436469de8e9c94345b388868df092f9d6442197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fd27bac797fa772fbe155ff2a436469de8e9c94345b388868df092f9d6442197->leave($__internal_fd27bac797fa772fbe155ff2a436469de8e9c94345b388868df092f9d6442197_prof);

        
        $__internal_55d24e4893979489da34389f9bce7d28fbf2ed644f1501281615c22eb90688c7->leave($__internal_55d24e4893979489da34389f9bce7d28fbf2ed644f1501281615c22eb90688c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\GroupeO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

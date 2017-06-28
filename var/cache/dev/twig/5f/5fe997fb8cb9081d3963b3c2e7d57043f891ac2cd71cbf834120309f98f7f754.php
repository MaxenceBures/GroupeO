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
        $__internal_c9fd785c647ac2181f248ffd8014d73b3caa704145eb7749bf98f99b54fc5ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fd785c647ac2181f248ffd8014d73b3caa704145eb7749bf98f99b54fc5ab1->enter($__internal_c9fd785c647ac2181f248ffd8014d73b3caa704145eb7749bf98f99b54fc5ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_713e67b3d04e67a20688ac08657ef55de9a67a78d92318bb96250cdb5ba7a7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713e67b3d04e67a20688ac08657ef55de9a67a78d92318bb96250cdb5ba7a7c7->enter($__internal_713e67b3d04e67a20688ac08657ef55de9a67a78d92318bb96250cdb5ba7a7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9fd785c647ac2181f248ffd8014d73b3caa704145eb7749bf98f99b54fc5ab1->leave($__internal_c9fd785c647ac2181f248ffd8014d73b3caa704145eb7749bf98f99b54fc5ab1_prof);

        
        $__internal_713e67b3d04e67a20688ac08657ef55de9a67a78d92318bb96250cdb5ba7a7c7->leave($__internal_713e67b3d04e67a20688ac08657ef55de9a67a78d92318bb96250cdb5ba7a7c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_63d971f50cd6788f6c665e18d105d1f294411cd69fb5c73facc5800b20b87478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d971f50cd6788f6c665e18d105d1f294411cd69fb5c73facc5800b20b87478->enter($__internal_63d971f50cd6788f6c665e18d105d1f294411cd69fb5c73facc5800b20b87478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5e106e8556498dc1b9d90dcbaf45af32f36cd5373f938e09059a3aba39b83822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e106e8556498dc1b9d90dcbaf45af32f36cd5373f938e09059a3aba39b83822->enter($__internal_5e106e8556498dc1b9d90dcbaf45af32f36cd5373f938e09059a3aba39b83822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5e106e8556498dc1b9d90dcbaf45af32f36cd5373f938e09059a3aba39b83822->leave($__internal_5e106e8556498dc1b9d90dcbaf45af32f36cd5373f938e09059a3aba39b83822_prof);

        
        $__internal_63d971f50cd6788f6c665e18d105d1f294411cd69fb5c73facc5800b20b87478->leave($__internal_63d971f50cd6788f6c665e18d105d1f294411cd69fb5c73facc5800b20b87478_prof);

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

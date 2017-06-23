<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bb98c9db2b29477b2bf664dcbfe613014d2a4870af1b97deb623772f23dcd42e extends Twig_Template
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
        $__internal_2bc4b272186ac722cb21f65143b67594dbbb9a493e0423f6a60f2e3fb002b50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc4b272186ac722cb21f65143b67594dbbb9a493e0423f6a60f2e3fb002b50b->enter($__internal_2bc4b272186ac722cb21f65143b67594dbbb9a493e0423f6a60f2e3fb002b50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7f1ced3d6afb62e46784b08acf53c7524e70ae1c64f76335fb6bc9fd7fe0e9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1ced3d6afb62e46784b08acf53c7524e70ae1c64f76335fb6bc9fd7fe0e9bd->enter($__internal_7f1ced3d6afb62e46784b08acf53c7524e70ae1c64f76335fb6bc9fd7fe0e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc4b272186ac722cb21f65143b67594dbbb9a493e0423f6a60f2e3fb002b50b->leave($__internal_2bc4b272186ac722cb21f65143b67594dbbb9a493e0423f6a60f2e3fb002b50b_prof);

        
        $__internal_7f1ced3d6afb62e46784b08acf53c7524e70ae1c64f76335fb6bc9fd7fe0e9bd->leave($__internal_7f1ced3d6afb62e46784b08acf53c7524e70ae1c64f76335fb6bc9fd7fe0e9bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab562023da34c1cdd0d01f86d449c359b7632495f9deb656a156724301a0fc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab562023da34c1cdd0d01f86d449c359b7632495f9deb656a156724301a0fc22->enter($__internal_ab562023da34c1cdd0d01f86d449c359b7632495f9deb656a156724301a0fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c634ec1046cc11a10e956f2a7b29fb8971b5a89e3db8779d562b278d2cfd13c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c634ec1046cc11a10e956f2a7b29fb8971b5a89e3db8779d562b278d2cfd13c6->enter($__internal_c634ec1046cc11a10e956f2a7b29fb8971b5a89e3db8779d562b278d2cfd13c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c634ec1046cc11a10e956f2a7b29fb8971b5a89e3db8779d562b278d2cfd13c6->leave($__internal_c634ec1046cc11a10e956f2a7b29fb8971b5a89e3db8779d562b278d2cfd13c6_prof);

        
        $__internal_ab562023da34c1cdd0d01f86d449c359b7632495f9deb656a156724301a0fc22->leave($__internal_ab562023da34c1cdd0d01f86d449c359b7632495f9deb656a156724301a0fc22_prof);

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

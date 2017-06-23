<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_67c36e5e6451966534a3ec47f3a04df0f7f44cf9ed158f860814a97458331493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fada55932243b97315beda0d4e7be3e7c2f4856e8b05965b567a80e20dc47451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fada55932243b97315beda0d4e7be3e7c2f4856e8b05965b567a80e20dc47451->enter($__internal_fada55932243b97315beda0d4e7be3e7c2f4856e8b05965b567a80e20dc47451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5d505d5d8e5c9bd135d0170eea0e072d5452e921b7d8c59bc96d76cadef4e231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d505d5d8e5c9bd135d0170eea0e072d5452e921b7d8c59bc96d76cadef4e231->enter($__internal_5d505d5d8e5c9bd135d0170eea0e072d5452e921b7d8c59bc96d76cadef4e231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fada55932243b97315beda0d4e7be3e7c2f4856e8b05965b567a80e20dc47451->leave($__internal_fada55932243b97315beda0d4e7be3e7c2f4856e8b05965b567a80e20dc47451_prof);

        
        $__internal_5d505d5d8e5c9bd135d0170eea0e072d5452e921b7d8c59bc96d76cadef4e231->leave($__internal_5d505d5d8e5c9bd135d0170eea0e072d5452e921b7d8c59bc96d76cadef4e231_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\GroupeO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}

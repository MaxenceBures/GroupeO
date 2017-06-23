<?php

/* auth/register.html.twig */
class __TwigTemplate_7dba9c9e79019bb39b432ad78addc0febc7b0ffd6bad67d36cd21c369ad76600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aade326fa330a15d9294f90c1b7ca8301c5b4dd821c55055a77bfed29050dd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aade326fa330a15d9294f90c1b7ca8301c5b4dd821c55055a77bfed29050dd19->enter($__internal_aade326fa330a15d9294f90c1b7ca8301c5b4dd821c55055a77bfed29050dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_eb41f75d728f1d857f0381329f06f09422f225604c4b9ed3337017420a10ae29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb41f75d728f1d857f0381329f06f09422f225604c4b9ed3337017420a10ae29->enter($__internal_eb41f75d728f1d857f0381329f06f09422f225604c4b9ed3337017420a10ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aade326fa330a15d9294f90c1b7ca8301c5b4dd821c55055a77bfed29050dd19->leave($__internal_aade326fa330a15d9294f90c1b7ca8301c5b4dd821c55055a77bfed29050dd19_prof);

        
        $__internal_eb41f75d728f1d857f0381329f06f09422f225604c4b9ed3337017420a10ae29->leave($__internal_eb41f75d728f1d857f0381329f06f09422f225604c4b9ed3337017420a10ae29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ce91f976bda9f9237e3cd67346d8d7c4a40e53bc7f52885d2d9c16dc9d885c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce91f976bda9f9237e3cd67346d8d7c4a40e53bc7f52885d2d9c16dc9d885c6->enter($__internal_9ce91f976bda9f9237e3cd67346d8d7c4a40e53bc7f52885d2d9c16dc9d885c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db7bfc507e24a7cf2a276c39f6c17b3175b69072f879f596691594e6a2a96f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7bfc507e24a7cf2a276c39f6c17b3175b69072f879f596691594e6a2a96f68->enter($__internal_db7bfc507e24a7cf2a276c39f6c17b3175b69072f879f596691594e6a2a96f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Register</div>
                    <div class=\"panel-body\">
                        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-user\"></i> Register
                                </button>
                            </div>
                        </div>
                        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_db7bfc507e24a7cf2a276c39f6c17b3175b69072f879f596691594e6a2a96f68->leave($__internal_db7bfc507e24a7cf2a276c39f6c17b3175b69072f879f596691594e6a2a96f68_prof);

        
        $__internal_9ce91f976bda9f9237e3cd67346d8d7c4a40e53bc7f52885d2d9c16dc9d885c6->leave($__internal_9ce91f976bda9f9237e3cd67346d8d7c4a40e53bc7f52885d2d9c16dc9d885c6_prof);

    }

    public function getTemplateName()
    {
        return "auth/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  90 => 33,  81 => 27,  72 => 21,  63 => 15,  57 => 12,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Register</div>
                    <div class=\"panel-body\">
                        {{ form_start(form) }}
                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                        <div class=\"form_group\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-user\"></i> Register
                                </button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "auth/register.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\auth\\register.html.twig");
    }
}

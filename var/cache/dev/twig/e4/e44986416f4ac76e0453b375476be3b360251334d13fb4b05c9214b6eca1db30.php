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
        $__internal_a2b92b8777fd65b8f8a96a999647e790092f54814e4fd9c6b0727d994c9737e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b92b8777fd65b8f8a96a999647e790092f54814e4fd9c6b0727d994c9737e2->enter($__internal_a2b92b8777fd65b8f8a96a999647e790092f54814e4fd9c6b0727d994c9737e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_f2f4128a5a0161070e0d7d05abdeb896ebfafcdbda847506f2dab367b10b9424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f4128a5a0161070e0d7d05abdeb896ebfafcdbda847506f2dab367b10b9424->enter($__internal_f2f4128a5a0161070e0d7d05abdeb896ebfafcdbda847506f2dab367b10b9424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b92b8777fd65b8f8a96a999647e790092f54814e4fd9c6b0727d994c9737e2->leave($__internal_a2b92b8777fd65b8f8a96a999647e790092f54814e4fd9c6b0727d994c9737e2_prof);

        
        $__internal_f2f4128a5a0161070e0d7d05abdeb896ebfafcdbda847506f2dab367b10b9424->leave($__internal_f2f4128a5a0161070e0d7d05abdeb896ebfafcdbda847506f2dab367b10b9424_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2437fcaba67fe8db455cd4a10d7a9ba67068c9792d43bf662ba7188e1f1d103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2437fcaba67fe8db455cd4a10d7a9ba67068c9792d43bf662ba7188e1f1d103->enter($__internal_e2437fcaba67fe8db455cd4a10d7a9ba67068c9792d43bf662ba7188e1f1d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_243f5c934560e46a360ea2d9c8825038a6f01ef06d8d4513dab455ba3f572171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243f5c934560e46a360ea2d9c8825038a6f01ef06d8d4513dab455ba3f572171->enter($__internal_243f5c934560e46a360ea2d9c8825038a6f01ef06d8d4513dab455ba3f572171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_243f5c934560e46a360ea2d9c8825038a6f01ef06d8d4513dab455ba3f572171->leave($__internal_243f5c934560e46a360ea2d9c8825038a6f01ef06d8d4513dab455ba3f572171_prof);

        
        $__internal_e2437fcaba67fe8db455cd4a10d7a9ba67068c9792d43bf662ba7188e1f1d103->leave($__internal_e2437fcaba67fe8db455cd4a10d7a9ba67068c9792d43bf662ba7188e1f1d103_prof);

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

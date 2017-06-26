<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_77ef71082074404c8f58d33bdfefdf1305b99693c3a15f92aba387fc9b2f91f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d1e3d9564153f69d5a46821f02f0e5d188b2e6f6630e7cf4b71d19ced7d9fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1e3d9564153f69d5a46821f02f0e5d188b2e6f6630e7cf4b71d19ced7d9fc6->enter($__internal_3d1e3d9564153f69d5a46821f02f0e5d188b2e6f6630e7cf4b71d19ced7d9fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4f4343d0eb7dd269befe79417253bc54a9b6195ce4a8ff79c2548ee9f3b48695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4343d0eb7dd269befe79417253bc54a9b6195ce4a8ff79c2548ee9f3b48695->enter($__internal_4f4343d0eb7dd269befe79417253bc54a9b6195ce4a8ff79c2548ee9f3b48695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1e3d9564153f69d5a46821f02f0e5d188b2e6f6630e7cf4b71d19ced7d9fc6->leave($__internal_3d1e3d9564153f69d5a46821f02f0e5d188b2e6f6630e7cf4b71d19ced7d9fc6_prof);

        
        $__internal_4f4343d0eb7dd269befe79417253bc54a9b6195ce4a8ff79c2548ee9f3b48695->leave($__internal_4f4343d0eb7dd269befe79417253bc54a9b6195ce4a8ff79c2548ee9f3b48695_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19ab868d030462f029e76cda4b85e739f75497c1768206cd51edfbab184af32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ab868d030462f029e76cda4b85e739f75497c1768206cd51edfbab184af32b->enter($__internal_19ab868d030462f029e76cda4b85e739f75497c1768206cd51edfbab184af32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1692ace8bee492efb9c9caa00e8120e2ba84c28acafe1d471bbffcee75937cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1692ace8bee492efb9c9caa00e8120e2ba84c28acafe1d471bbffcee75937cd4->enter($__internal_1692ace8bee492efb9c9caa00e8120e2ba84c28acafe1d471bbffcee75937cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1692ace8bee492efb9c9caa00e8120e2ba84c28acafe1d471bbffcee75937cd4->leave($__internal_1692ace8bee492efb9c9caa00e8120e2ba84c28acafe1d471bbffcee75937cd4_prof);

        
        $__internal_19ab868d030462f029e76cda4b85e739f75497c1768206cd51edfbab184af32b->leave($__internal_19ab868d030462f029e76cda4b85e739f75497c1768206cd51edfbab184af32b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_93896356d0e21ebd8962de10431d4ccb56843c38e838c143732cb3262031ea82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93896356d0e21ebd8962de10431d4ccb56843c38e838c143732cb3262031ea82->enter($__internal_93896356d0e21ebd8962de10431d4ccb56843c38e838c143732cb3262031ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fbff55cd7662aeaa840f7517f4525e7b0183be4f04d4720bba5b9aea1fe58fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbff55cd7662aeaa840f7517f4525e7b0183be4f04d4720bba5b9aea1fe58fa->enter($__internal_1fbff55cd7662aeaa840f7517f4525e7b0183be4f04d4720bba5b9aea1fe58fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1fbff55cd7662aeaa840f7517f4525e7b0183be4f04d4720bba5b9aea1fe58fa->leave($__internal_1fbff55cd7662aeaa840f7517f4525e7b0183be4f04d4720bba5b9aea1fe58fa_prof);

        
        $__internal_93896356d0e21ebd8962de10431d4ccb56843c38e838c143732cb3262031ea82->leave($__internal_93896356d0e21ebd8962de10431d4ccb56843c38e838c143732cb3262031ea82_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b961229f2c1cb94288e8c882877fceebf0fdb7dbb8d3452f4810634ac968198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b961229f2c1cb94288e8c882877fceebf0fdb7dbb8d3452f4810634ac968198->enter($__internal_6b961229f2c1cb94288e8c882877fceebf0fdb7dbb8d3452f4810634ac968198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d18833588c17150400612d3efc8e90084eebd2dcb20d832870ae1c3b86e88b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d18833588c17150400612d3efc8e90084eebd2dcb20d832870ae1c3b86e88b3->enter($__internal_9d18833588c17150400612d3efc8e90084eebd2dcb20d832870ae1c3b86e88b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9d18833588c17150400612d3efc8e90084eebd2dcb20d832870ae1c3b86e88b3->leave($__internal_9d18833588c17150400612d3efc8e90084eebd2dcb20d832870ae1c3b86e88b3_prof);

        
        $__internal_6b961229f2c1cb94288e8c882877fceebf0fdb7dbb8d3452f4810634ac968198->leave($__internal_6b961229f2c1cb94288e8c882877fceebf0fdb7dbb8d3452f4810634ac968198_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\GroupeO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

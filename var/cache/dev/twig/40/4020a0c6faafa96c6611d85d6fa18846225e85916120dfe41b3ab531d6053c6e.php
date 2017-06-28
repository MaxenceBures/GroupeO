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
        $__internal_449a0801dc27ba3310b209b6c0f2f1a0d13fc7f90b4d095079d43e57ae77bbae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449a0801dc27ba3310b209b6c0f2f1a0d13fc7f90b4d095079d43e57ae77bbae->enter($__internal_449a0801dc27ba3310b209b6c0f2f1a0d13fc7f90b4d095079d43e57ae77bbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9dd9d1b847cf08ee67e544ba25b02a6ce15f13c2567e530519f0db4cd1976f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd9d1b847cf08ee67e544ba25b02a6ce15f13c2567e530519f0db4cd1976f5c->enter($__internal_9dd9d1b847cf08ee67e544ba25b02a6ce15f13c2567e530519f0db4cd1976f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_449a0801dc27ba3310b209b6c0f2f1a0d13fc7f90b4d095079d43e57ae77bbae->leave($__internal_449a0801dc27ba3310b209b6c0f2f1a0d13fc7f90b4d095079d43e57ae77bbae_prof);

        
        $__internal_9dd9d1b847cf08ee67e544ba25b02a6ce15f13c2567e530519f0db4cd1976f5c->leave($__internal_9dd9d1b847cf08ee67e544ba25b02a6ce15f13c2567e530519f0db4cd1976f5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92b1b6da49bb9edf45ae8c53898a4b9592f3efe2d0f04808501afb2286a011ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b1b6da49bb9edf45ae8c53898a4b9592f3efe2d0f04808501afb2286a011ce->enter($__internal_92b1b6da49bb9edf45ae8c53898a4b9592f3efe2d0f04808501afb2286a011ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78ccee25e77b66534030fd9ccfe4e4575d785f47ab9d10f056fb972b7c8dfe85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ccee25e77b66534030fd9ccfe4e4575d785f47ab9d10f056fb972b7c8dfe85->enter($__internal_78ccee25e77b66534030fd9ccfe4e4575d785f47ab9d10f056fb972b7c8dfe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_78ccee25e77b66534030fd9ccfe4e4575d785f47ab9d10f056fb972b7c8dfe85->leave($__internal_78ccee25e77b66534030fd9ccfe4e4575d785f47ab9d10f056fb972b7c8dfe85_prof);

        
        $__internal_92b1b6da49bb9edf45ae8c53898a4b9592f3efe2d0f04808501afb2286a011ce->leave($__internal_92b1b6da49bb9edf45ae8c53898a4b9592f3efe2d0f04808501afb2286a011ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_68e37750b01e0aa810dd5ecce8060cfb8c2bade2352ddf5667f84699641889ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e37750b01e0aa810dd5ecce8060cfb8c2bade2352ddf5667f84699641889ed->enter($__internal_68e37750b01e0aa810dd5ecce8060cfb8c2bade2352ddf5667f84699641889ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95de68caa69c5384dfb076bdff892c1689a9d2e903a6f580a7f5cb7c184a1704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95de68caa69c5384dfb076bdff892c1689a9d2e903a6f580a7f5cb7c184a1704->enter($__internal_95de68caa69c5384dfb076bdff892c1689a9d2e903a6f580a7f5cb7c184a1704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95de68caa69c5384dfb076bdff892c1689a9d2e903a6f580a7f5cb7c184a1704->leave($__internal_95de68caa69c5384dfb076bdff892c1689a9d2e903a6f580a7f5cb7c184a1704_prof);

        
        $__internal_68e37750b01e0aa810dd5ecce8060cfb8c2bade2352ddf5667f84699641889ed->leave($__internal_68e37750b01e0aa810dd5ecce8060cfb8c2bade2352ddf5667f84699641889ed_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d783ac4bf7305e39d2a10da80146edf9131bdff8c6be226cb6bf3685716b4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d783ac4bf7305e39d2a10da80146edf9131bdff8c6be226cb6bf3685716b4ab->enter($__internal_7d783ac4bf7305e39d2a10da80146edf9131bdff8c6be226cb6bf3685716b4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6e8adc2f02f38d01d97fb1be6f8dad05c5e05be09a8d49fcb6c1a4549fcc6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e8adc2f02f38d01d97fb1be6f8dad05c5e05be09a8d49fcb6c1a4549fcc6e8->enter($__internal_f6e8adc2f02f38d01d97fb1be6f8dad05c5e05be09a8d49fcb6c1a4549fcc6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f6e8adc2f02f38d01d97fb1be6f8dad05c5e05be09a8d49fcb6c1a4549fcc6e8->leave($__internal_f6e8adc2f02f38d01d97fb1be6f8dad05c5e05be09a8d49fcb6c1a4549fcc6e8_prof);

        
        $__internal_7d783ac4bf7305e39d2a10da80146edf9131bdff8c6be226cb6bf3685716b4ab->leave($__internal_7d783ac4bf7305e39d2a10da80146edf9131bdff8c6be226cb6bf3685716b4ab_prof);

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

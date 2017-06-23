<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e8774ef7147983519f641103fc43dc04c861b94a414f8fcdebb742b8cbe4e4ad extends Twig_Template
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
        $__internal_0a455d0dcea9989bfe559f5e0483657a93a9b27004ee8e4e8e0e50803a237d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a455d0dcea9989bfe559f5e0483657a93a9b27004ee8e4e8e0e50803a237d25->enter($__internal_0a455d0dcea9989bfe559f5e0483657a93a9b27004ee8e4e8e0e50803a237d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ae660adfe6e0c5bed34da5435c4557ac9db43a624990c0ce5d8d75f32ddf4686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae660adfe6e0c5bed34da5435c4557ac9db43a624990c0ce5d8d75f32ddf4686->enter($__internal_ae660adfe6e0c5bed34da5435c4557ac9db43a624990c0ce5d8d75f32ddf4686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a455d0dcea9989bfe559f5e0483657a93a9b27004ee8e4e8e0e50803a237d25->leave($__internal_0a455d0dcea9989bfe559f5e0483657a93a9b27004ee8e4e8e0e50803a237d25_prof);

        
        $__internal_ae660adfe6e0c5bed34da5435c4557ac9db43a624990c0ce5d8d75f32ddf4686->leave($__internal_ae660adfe6e0c5bed34da5435c4557ac9db43a624990c0ce5d8d75f32ddf4686_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55661ee966f6ba8fbedee620b62482140206e84cc7514e2e286fe4de43c7110c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55661ee966f6ba8fbedee620b62482140206e84cc7514e2e286fe4de43c7110c->enter($__internal_55661ee966f6ba8fbedee620b62482140206e84cc7514e2e286fe4de43c7110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e2200a688e8ccac0c1648526f60e8dec059ffcadf67ae93a0ca63ced0f7a146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2200a688e8ccac0c1648526f60e8dec059ffcadf67ae93a0ca63ced0f7a146->enter($__internal_8e2200a688e8ccac0c1648526f60e8dec059ffcadf67ae93a0ca63ced0f7a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8e2200a688e8ccac0c1648526f60e8dec059ffcadf67ae93a0ca63ced0f7a146->leave($__internal_8e2200a688e8ccac0c1648526f60e8dec059ffcadf67ae93a0ca63ced0f7a146_prof);

        
        $__internal_55661ee966f6ba8fbedee620b62482140206e84cc7514e2e286fe4de43c7110c->leave($__internal_55661ee966f6ba8fbedee620b62482140206e84cc7514e2e286fe4de43c7110c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2dbdefd3921eac0ff5bb2481e9a468b9c6708ebc4eee74996516ff037e5cea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dbdefd3921eac0ff5bb2481e9a468b9c6708ebc4eee74996516ff037e5cea8->enter($__internal_e2dbdefd3921eac0ff5bb2481e9a468b9c6708ebc4eee74996516ff037e5cea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f3c08c2fec1459673782f3796aafd0df9a8021d9b4bbbcced6e23712f6e976d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3c08c2fec1459673782f3796aafd0df9a8021d9b4bbbcced6e23712f6e976d->enter($__internal_8f3c08c2fec1459673782f3796aafd0df9a8021d9b4bbbcced6e23712f6e976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f3c08c2fec1459673782f3796aafd0df9a8021d9b4bbbcced6e23712f6e976d->leave($__internal_8f3c08c2fec1459673782f3796aafd0df9a8021d9b4bbbcced6e23712f6e976d_prof);

        
        $__internal_e2dbdefd3921eac0ff5bb2481e9a468b9c6708ebc4eee74996516ff037e5cea8->leave($__internal_e2dbdefd3921eac0ff5bb2481e9a468b9c6708ebc4eee74996516ff037e5cea8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad74910bcdb58a82695f2db9edb491530c842c2a406cc2687536c59880e9c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad74910bcdb58a82695f2db9edb491530c842c2a406cc2687536c59880e9c3d->enter($__internal_5ad74910bcdb58a82695f2db9edb491530c842c2a406cc2687536c59880e9c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_270de04b62102eb628549a2577c24e5525880ddaf28524bddada8faeca81fb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270de04b62102eb628549a2577c24e5525880ddaf28524bddada8faeca81fb5b->enter($__internal_270de04b62102eb628549a2577c24e5525880ddaf28524bddada8faeca81fb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_270de04b62102eb628549a2577c24e5525880ddaf28524bddada8faeca81fb5b->leave($__internal_270de04b62102eb628549a2577c24e5525880ddaf28524bddada8faeca81fb5b_prof);

        
        $__internal_5ad74910bcdb58a82695f2db9edb491530c842c2a406cc2687536c59880e9c3d->leave($__internal_5ad74910bcdb58a82695f2db9edb491530c842c2a406cc2687536c59880e9c3d_prof);

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

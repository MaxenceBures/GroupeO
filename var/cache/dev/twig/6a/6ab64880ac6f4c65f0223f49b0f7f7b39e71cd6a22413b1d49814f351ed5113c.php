<?php

/* base.html.twig */
class __TwigTemplate_94da0c3e03a140e587aa6ec002167b86ed155f080c790e0a3c1af36bcd86ab94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f3a3d6250b383b9284175979b770b39d0790ef91e1f6612f4b199acb0a981b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3a3d6250b383b9284175979b770b39d0790ef91e1f6612f4b199acb0a981b5->enter($__internal_1f3a3d6250b383b9284175979b770b39d0790ef91e1f6612f4b199acb0a981b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_145a5e509fdb3d13db3cbb4f1823520f2830d537269aaeb31f29f64d675c4fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145a5e509fdb3d13db3cbb4f1823520f2830d537269aaeb31f29f64d675c4fef->enter($__internal_145a5e509fdb3d13db3cbb4f1823520f2830d537269aaeb31f29f64d675c4fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1f3a3d6250b383b9284175979b770b39d0790ef91e1f6612f4b199acb0a981b5->leave($__internal_1f3a3d6250b383b9284175979b770b39d0790ef91e1f6612f4b199acb0a981b5_prof);

        
        $__internal_145a5e509fdb3d13db3cbb4f1823520f2830d537269aaeb31f29f64d675c4fef->leave($__internal_145a5e509fdb3d13db3cbb4f1823520f2830d537269aaeb31f29f64d675c4fef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db436c55ba6ba4ca87609e47ff1d11318f91b08951bdb9502ae67b552d1a0ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db436c55ba6ba4ca87609e47ff1d11318f91b08951bdb9502ae67b552d1a0ac6->enter($__internal_db436c55ba6ba4ca87609e47ff1d11318f91b08951bdb9502ae67b552d1a0ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66a76c6970dc5c80b948a21760486fcfc52f0842391efda5bef09a8e8490af1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a76c6970dc5c80b948a21760486fcfc52f0842391efda5bef09a8e8490af1f->enter($__internal_66a76c6970dc5c80b948a21760486fcfc52f0842391efda5bef09a8e8490af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_66a76c6970dc5c80b948a21760486fcfc52f0842391efda5bef09a8e8490af1f->leave($__internal_66a76c6970dc5c80b948a21760486fcfc52f0842391efda5bef09a8e8490af1f_prof);

        
        $__internal_db436c55ba6ba4ca87609e47ff1d11318f91b08951bdb9502ae67b552d1a0ac6->leave($__internal_db436c55ba6ba4ca87609e47ff1d11318f91b08951bdb9502ae67b552d1a0ac6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e034dd1461d8d89a72b1be034f640dbe28e63efd3632e2fff927f0c29f389039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e034dd1461d8d89a72b1be034f640dbe28e63efd3632e2fff927f0c29f389039->enter($__internal_e034dd1461d8d89a72b1be034f640dbe28e63efd3632e2fff927f0c29f389039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d07f1d112cd0bb008f32f2e37a26c356f2d504f4d7b1fea14f07e467fe4281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d07f1d112cd0bb008f32f2e37a26c356f2d504f4d7b1fea14f07e467fe4281c->enter($__internal_4d07f1d112cd0bb008f32f2e37a26c356f2d504f4d7b1fea14f07e467fe4281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4d07f1d112cd0bb008f32f2e37a26c356f2d504f4d7b1fea14f07e467fe4281c->leave($__internal_4d07f1d112cd0bb008f32f2e37a26c356f2d504f4d7b1fea14f07e467fe4281c_prof);

        
        $__internal_e034dd1461d8d89a72b1be034f640dbe28e63efd3632e2fff927f0c29f389039->leave($__internal_e034dd1461d8d89a72b1be034f640dbe28e63efd3632e2fff927f0c29f389039_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36693e462ad998296ec1e23327f65d7af9725d46064b97add52ca3b1ff9270a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36693e462ad998296ec1e23327f65d7af9725d46064b97add52ca3b1ff9270a6->enter($__internal_36693e462ad998296ec1e23327f65d7af9725d46064b97add52ca3b1ff9270a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b3b65ae7fefbeb0fab21d443d72aa4340ed35be666c542435199365d3869625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3b65ae7fefbeb0fab21d443d72aa4340ed35be666c542435199365d3869625->enter($__internal_9b3b65ae7fefbeb0fab21d443d72aa4340ed35be666c542435199365d3869625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b3b65ae7fefbeb0fab21d443d72aa4340ed35be666c542435199365d3869625->leave($__internal_9b3b65ae7fefbeb0fab21d443d72aa4340ed35be666c542435199365d3869625_prof);

        
        $__internal_36693e462ad998296ec1e23327f65d7af9725d46064b97add52ca3b1ff9270a6->leave($__internal_36693e462ad998296ec1e23327f65d7af9725d46064b97add52ca3b1ff9270a6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_795a67bf3e71345d868bae30e4a8231c101d932c5e3c46fdc7b4738016b80823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795a67bf3e71345d868bae30e4a8231c101d932c5e3c46fdc7b4738016b80823->enter($__internal_795a67bf3e71345d868bae30e4a8231c101d932c5e3c46fdc7b4738016b80823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a65a72ab945a98d16adcfdaa62394587856df0f9b2c8abfab435de4492600d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65a72ab945a98d16adcfdaa62394587856df0f9b2c8abfab435de4492600d78->enter($__internal_a65a72ab945a98d16adcfdaa62394587856df0f9b2c8abfab435de4492600d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a65a72ab945a98d16adcfdaa62394587856df0f9b2c8abfab435de4492600d78->leave($__internal_a65a72ab945a98d16adcfdaa62394587856df0f9b2c8abfab435de4492600d78_prof);

        
        $__internal_795a67bf3e71345d868bae30e4a8231c101d932c5e3c46fdc7b4738016b80823->leave($__internal_795a67bf3e71345d868bae30e4a8231c101d932c5e3c46fdc7b4738016b80823_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\base.html.twig");
    }
}

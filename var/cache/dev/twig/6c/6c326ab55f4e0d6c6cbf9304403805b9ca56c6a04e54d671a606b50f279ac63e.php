<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cf055f5994068b8a248fc68398569f9cf16d36283ce99b9d2541f5c7cb2a3872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ad132c4a3bee4ec188937dcf9f85440c3a6ade6107d3a00b4d4f610ec098d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad132c4a3bee4ec188937dcf9f85440c3a6ade6107d3a00b4d4f610ec098d47->enter($__internal_1ad132c4a3bee4ec188937dcf9f85440c3a6ade6107d3a00b4d4f610ec098d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_af684f287f01b2bed06f728b2f3b274896bb9450b77b1447f47a77a19f336ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af684f287f01b2bed06f728b2f3b274896bb9450b77b1447f47a77a19f336ca8->enter($__internal_af684f287f01b2bed06f728b2f3b274896bb9450b77b1447f47a77a19f336ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1ad132c4a3bee4ec188937dcf9f85440c3a6ade6107d3a00b4d4f610ec098d47->leave($__internal_1ad132c4a3bee4ec188937dcf9f85440c3a6ade6107d3a00b4d4f610ec098d47_prof);

        
        $__internal_af684f287f01b2bed06f728b2f3b274896bb9450b77b1447f47a77a19f336ca8->leave($__internal_af684f287f01b2bed06f728b2f3b274896bb9450b77b1447f47a77a19f336ca8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80ad8bab89da5cc4404f2ed0aeebc09f724e3db8733a518793529bc808e701b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ad8bab89da5cc4404f2ed0aeebc09f724e3db8733a518793529bc808e701b6->enter($__internal_80ad8bab89da5cc4404f2ed0aeebc09f724e3db8733a518793529bc808e701b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23413389617c363a2e6812861b8e0cc8fb7b8cc589d1c85f3f93c3904830f508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23413389617c363a2e6812861b8e0cc8fb7b8cc589d1c85f3f93c3904830f508->enter($__internal_23413389617c363a2e6812861b8e0cc8fb7b8cc589d1c85f3f93c3904830f508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_23413389617c363a2e6812861b8e0cc8fb7b8cc589d1c85f3f93c3904830f508->leave($__internal_23413389617c363a2e6812861b8e0cc8fb7b8cc589d1c85f3f93c3904830f508_prof);

        
        $__internal_80ad8bab89da5cc4404f2ed0aeebc09f724e3db8733a518793529bc808e701b6->leave($__internal_80ad8bab89da5cc4404f2ed0aeebc09f724e3db8733a518793529bc808e701b6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ac34cf646f9dcdedecf879e2bcb408ea9830f701df2c53601323eef28596a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac34cf646f9dcdedecf879e2bcb408ea9830f701df2c53601323eef28596a48->enter($__internal_8ac34cf646f9dcdedecf879e2bcb408ea9830f701df2c53601323eef28596a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_568ea24649542742497563dab22ee0845f5ce8cad618820775d5543877cd5882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568ea24649542742497563dab22ee0845f5ce8cad618820775d5543877cd5882->enter($__internal_568ea24649542742497563dab22ee0845f5ce8cad618820775d5543877cd5882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_568ea24649542742497563dab22ee0845f5ce8cad618820775d5543877cd5882->leave($__internal_568ea24649542742497563dab22ee0845f5ce8cad618820775d5543877cd5882_prof);

        
        $__internal_8ac34cf646f9dcdedecf879e2bcb408ea9830f701df2c53601323eef28596a48->leave($__internal_8ac34cf646f9dcdedecf879e2bcb408ea9830f701df2c53601323eef28596a48_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5beacb8933ce2993cda7a449030435aa1c4ddd1454e27f4711d56c7682ed67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5beacb8933ce2993cda7a449030435aa1c4ddd1454e27f4711d56c7682ed67->enter($__internal_da5beacb8933ce2993cda7a449030435aa1c4ddd1454e27f4711d56c7682ed67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a99def7ce66d1b5c8d75d4056c72d79c4369a653e5f55331d9f7bd8fb490f3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99def7ce66d1b5c8d75d4056c72d79c4369a653e5f55331d9f7bd8fb490f3a6->enter($__internal_a99def7ce66d1b5c8d75d4056c72d79c4369a653e5f55331d9f7bd8fb490f3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a99def7ce66d1b5c8d75d4056c72d79c4369a653e5f55331d9f7bd8fb490f3a6->leave($__internal_a99def7ce66d1b5c8d75d4056c72d79c4369a653e5f55331d9f7bd8fb490f3a6_prof);

        
        $__internal_da5beacb8933ce2993cda7a449030435aa1c4ddd1454e27f4711d56c7682ed67->leave($__internal_da5beacb8933ce2993cda7a449030435aa1c4ddd1454e27f4711d56c7682ed67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\GroupeO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

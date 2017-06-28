<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8acc11fab5d88d97ef5559183c4b561dcfab21c1c04cdc46ee3a1b291dc02208 extends Twig_Template
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
        $__internal_6572b13fc378c13c78a335874611226c3f45df25107a40a7d035321ed821deb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6572b13fc378c13c78a335874611226c3f45df25107a40a7d035321ed821deb7->enter($__internal_6572b13fc378c13c78a335874611226c3f45df25107a40a7d035321ed821deb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eac6152df1775d4db9fcb24e4edf8f6f3fc6946d9b881750a4535d21afc5811b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac6152df1775d4db9fcb24e4edf8f6f3fc6946d9b881750a4535d21afc5811b->enter($__internal_eac6152df1775d4db9fcb24e4edf8f6f3fc6946d9b881750a4535d21afc5811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6572b13fc378c13c78a335874611226c3f45df25107a40a7d035321ed821deb7->leave($__internal_6572b13fc378c13c78a335874611226c3f45df25107a40a7d035321ed821deb7_prof);

        
        $__internal_eac6152df1775d4db9fcb24e4edf8f6f3fc6946d9b881750a4535d21afc5811b->leave($__internal_eac6152df1775d4db9fcb24e4edf8f6f3fc6946d9b881750a4535d21afc5811b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3c6cfc07fd9bd3ac03a7802cfb21260abfd4e0e0ca5f19e931d05e65301bc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c6cfc07fd9bd3ac03a7802cfb21260abfd4e0e0ca5f19e931d05e65301bc9d->enter($__internal_e3c6cfc07fd9bd3ac03a7802cfb21260abfd4e0e0ca5f19e931d05e65301bc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb632beb027a399cc561f615adc7a970f82a6d637a62d9434e9da6f9b7263e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb632beb027a399cc561f615adc7a970f82a6d637a62d9434e9da6f9b7263e6f->enter($__internal_eb632beb027a399cc561f615adc7a970f82a6d637a62d9434e9da6f9b7263e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eb632beb027a399cc561f615adc7a970f82a6d637a62d9434e9da6f9b7263e6f->leave($__internal_eb632beb027a399cc561f615adc7a970f82a6d637a62d9434e9da6f9b7263e6f_prof);

        
        $__internal_e3c6cfc07fd9bd3ac03a7802cfb21260abfd4e0e0ca5f19e931d05e65301bc9d->leave($__internal_e3c6cfc07fd9bd3ac03a7802cfb21260abfd4e0e0ca5f19e931d05e65301bc9d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_666f23b28fa641b795ab3c76224fa6b7f6b458c2906d5b5043094608659bf16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666f23b28fa641b795ab3c76224fa6b7f6b458c2906d5b5043094608659bf16e->enter($__internal_666f23b28fa641b795ab3c76224fa6b7f6b458c2906d5b5043094608659bf16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc6a14579c9c9b2b230fcfa497d3f85cb32b88881b0078cdca0634204b0afa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6a14579c9c9b2b230fcfa497d3f85cb32b88881b0078cdca0634204b0afa18->enter($__internal_dc6a14579c9c9b2b230fcfa497d3f85cb32b88881b0078cdca0634204b0afa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dc6a14579c9c9b2b230fcfa497d3f85cb32b88881b0078cdca0634204b0afa18->leave($__internal_dc6a14579c9c9b2b230fcfa497d3f85cb32b88881b0078cdca0634204b0afa18_prof);

        
        $__internal_666f23b28fa641b795ab3c76224fa6b7f6b458c2906d5b5043094608659bf16e->leave($__internal_666f23b28fa641b795ab3c76224fa6b7f6b458c2906d5b5043094608659bf16e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1877ce8c120b9d15ab133b7161434cdfabf4b7c5f693c4f83bca4793e41baa7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1877ce8c120b9d15ab133b7161434cdfabf4b7c5f693c4f83bca4793e41baa7d->enter($__internal_1877ce8c120b9d15ab133b7161434cdfabf4b7c5f693c4f83bca4793e41baa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c82df28b22e5bdf51f380756149a0d41ad7182f286af09d14ec7571925565513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82df28b22e5bdf51f380756149a0d41ad7182f286af09d14ec7571925565513->enter($__internal_c82df28b22e5bdf51f380756149a0d41ad7182f286af09d14ec7571925565513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c82df28b22e5bdf51f380756149a0d41ad7182f286af09d14ec7571925565513->leave($__internal_c82df28b22e5bdf51f380756149a0d41ad7182f286af09d14ec7571925565513_prof);

        
        $__internal_1877ce8c120b9d15ab133b7161434cdfabf4b7c5f693c4f83bca4793e41baa7d->leave($__internal_1877ce8c120b9d15ab133b7161434cdfabf4b7c5f693c4f83bca4793e41baa7d_prof);

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

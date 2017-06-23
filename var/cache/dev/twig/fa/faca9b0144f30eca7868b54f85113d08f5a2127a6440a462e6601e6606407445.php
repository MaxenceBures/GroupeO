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
        $__internal_e7e55789e13fb6954851ba636c6f495ba70dbdde4d5a6cf77ae49d81b1749df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e55789e13fb6954851ba636c6f495ba70dbdde4d5a6cf77ae49d81b1749df1->enter($__internal_e7e55789e13fb6954851ba636c6f495ba70dbdde4d5a6cf77ae49d81b1749df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f5fd7238cc0b2e88d959300db1e798bed2b1037479e9748146947025aa31af9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fd7238cc0b2e88d959300db1e798bed2b1037479e9748146947025aa31af9e->enter($__internal_f5fd7238cc0b2e88d959300db1e798bed2b1037479e9748146947025aa31af9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e7e55789e13fb6954851ba636c6f495ba70dbdde4d5a6cf77ae49d81b1749df1->leave($__internal_e7e55789e13fb6954851ba636c6f495ba70dbdde4d5a6cf77ae49d81b1749df1_prof);

        
        $__internal_f5fd7238cc0b2e88d959300db1e798bed2b1037479e9748146947025aa31af9e->leave($__internal_f5fd7238cc0b2e88d959300db1e798bed2b1037479e9748146947025aa31af9e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5225f1380d170d7aee0c9c99b965f3aeb83859b2d28b8a911110e8474f8f7f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5225f1380d170d7aee0c9c99b965f3aeb83859b2d28b8a911110e8474f8f7f3d->enter($__internal_5225f1380d170d7aee0c9c99b965f3aeb83859b2d28b8a911110e8474f8f7f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5e195cdc3fa3eb913cf7a8f81d727f18a6bf2394b9591c478bc10dd7150b45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e195cdc3fa3eb913cf7a8f81d727f18a6bf2394b9591c478bc10dd7150b45c->enter($__internal_c5e195cdc3fa3eb913cf7a8f81d727f18a6bf2394b9591c478bc10dd7150b45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c5e195cdc3fa3eb913cf7a8f81d727f18a6bf2394b9591c478bc10dd7150b45c->leave($__internal_c5e195cdc3fa3eb913cf7a8f81d727f18a6bf2394b9591c478bc10dd7150b45c_prof);

        
        $__internal_5225f1380d170d7aee0c9c99b965f3aeb83859b2d28b8a911110e8474f8f7f3d->leave($__internal_5225f1380d170d7aee0c9c99b965f3aeb83859b2d28b8a911110e8474f8f7f3d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_65204aa8df1eb18456fcf83cbc52e47281e0d460e831f558848843cfa907923b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65204aa8df1eb18456fcf83cbc52e47281e0d460e831f558848843cfa907923b->enter($__internal_65204aa8df1eb18456fcf83cbc52e47281e0d460e831f558848843cfa907923b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cac48af2ba65f90bc67078127c6c77cc3a3a95e720239ceb1653df9c888b5684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac48af2ba65f90bc67078127c6c77cc3a3a95e720239ceb1653df9c888b5684->enter($__internal_cac48af2ba65f90bc67078127c6c77cc3a3a95e720239ceb1653df9c888b5684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cac48af2ba65f90bc67078127c6c77cc3a3a95e720239ceb1653df9c888b5684->leave($__internal_cac48af2ba65f90bc67078127c6c77cc3a3a95e720239ceb1653df9c888b5684_prof);

        
        $__internal_65204aa8df1eb18456fcf83cbc52e47281e0d460e831f558848843cfa907923b->leave($__internal_65204aa8df1eb18456fcf83cbc52e47281e0d460e831f558848843cfa907923b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b55155e85c1a389ee59b5bdfd519ad7e1ed265d27e48740a5e7d9dea409be4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b55155e85c1a389ee59b5bdfd519ad7e1ed265d27e48740a5e7d9dea409be4f->enter($__internal_7b55155e85c1a389ee59b5bdfd519ad7e1ed265d27e48740a5e7d9dea409be4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f58be6fc26f60939f6912785bb02bca09c01288baaf11a65ed99aac253503d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58be6fc26f60939f6912785bb02bca09c01288baaf11a65ed99aac253503d65->enter($__internal_f58be6fc26f60939f6912785bb02bca09c01288baaf11a65ed99aac253503d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f58be6fc26f60939f6912785bb02bca09c01288baaf11a65ed99aac253503d65->leave($__internal_f58be6fc26f60939f6912785bb02bca09c01288baaf11a65ed99aac253503d65_prof);

        
        $__internal_7b55155e85c1a389ee59b5bdfd519ad7e1ed265d27e48740a5e7d9dea409be4f->leave($__internal_7b55155e85c1a389ee59b5bdfd519ad7e1ed265d27e48740a5e7d9dea409be4f_prof);

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

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
        $__internal_d5559074bbbe49b13b5f5594b7c713dbd752aac236d33e4a6e74e5009f425819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5559074bbbe49b13b5f5594b7c713dbd752aac236d33e4a6e74e5009f425819->enter($__internal_d5559074bbbe49b13b5f5594b7c713dbd752aac236d33e4a6e74e5009f425819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b4d8ebe10c79ea13076d686ed2db47a8dbbef7f4fe49d57acdde3164cd954e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d8ebe10c79ea13076d686ed2db47a8dbbef7f4fe49d57acdde3164cd954e78->enter($__internal_b4d8ebe10c79ea13076d686ed2db47a8dbbef7f4fe49d57acdde3164cd954e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d5559074bbbe49b13b5f5594b7c713dbd752aac236d33e4a6e74e5009f425819->leave($__internal_d5559074bbbe49b13b5f5594b7c713dbd752aac236d33e4a6e74e5009f425819_prof);

        
        $__internal_b4d8ebe10c79ea13076d686ed2db47a8dbbef7f4fe49d57acdde3164cd954e78->leave($__internal_b4d8ebe10c79ea13076d686ed2db47a8dbbef7f4fe49d57acdde3164cd954e78_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a18c914c956bb871ea8e80603534454dae13062457f96af9be8140ffeafeff97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18c914c956bb871ea8e80603534454dae13062457f96af9be8140ffeafeff97->enter($__internal_a18c914c956bb871ea8e80603534454dae13062457f96af9be8140ffeafeff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4feae258c40a1ab76122a756b696064481affd070d86fb7c16e61c9d072f163c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4feae258c40a1ab76122a756b696064481affd070d86fb7c16e61c9d072f163c->enter($__internal_4feae258c40a1ab76122a756b696064481affd070d86fb7c16e61c9d072f163c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4feae258c40a1ab76122a756b696064481affd070d86fb7c16e61c9d072f163c->leave($__internal_4feae258c40a1ab76122a756b696064481affd070d86fb7c16e61c9d072f163c_prof);

        
        $__internal_a18c914c956bb871ea8e80603534454dae13062457f96af9be8140ffeafeff97->leave($__internal_a18c914c956bb871ea8e80603534454dae13062457f96af9be8140ffeafeff97_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94cfd9662411ddc3d0d8808ed4e3aca4aa261d5bb40bd256ab233f9a760d320c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cfd9662411ddc3d0d8808ed4e3aca4aa261d5bb40bd256ab233f9a760d320c->enter($__internal_94cfd9662411ddc3d0d8808ed4e3aca4aa261d5bb40bd256ab233f9a760d320c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_751c645b73cdf7926313f1d40361502106dcc6de429ef3dc9a949bdecb292033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751c645b73cdf7926313f1d40361502106dcc6de429ef3dc9a949bdecb292033->enter($__internal_751c645b73cdf7926313f1d40361502106dcc6de429ef3dc9a949bdecb292033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_751c645b73cdf7926313f1d40361502106dcc6de429ef3dc9a949bdecb292033->leave($__internal_751c645b73cdf7926313f1d40361502106dcc6de429ef3dc9a949bdecb292033_prof);

        
        $__internal_94cfd9662411ddc3d0d8808ed4e3aca4aa261d5bb40bd256ab233f9a760d320c->leave($__internal_94cfd9662411ddc3d0d8808ed4e3aca4aa261d5bb40bd256ab233f9a760d320c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0fe145ee150f78df671ce108c34c6b15d2c2f30f1006a25e6fd5309b704e828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fe145ee150f78df671ce108c34c6b15d2c2f30f1006a25e6fd5309b704e828->enter($__internal_f0fe145ee150f78df671ce108c34c6b15d2c2f30f1006a25e6fd5309b704e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2849f02353d46f720b752523401907940899258719c396eb71635bd709ee516a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2849f02353d46f720b752523401907940899258719c396eb71635bd709ee516a->enter($__internal_2849f02353d46f720b752523401907940899258719c396eb71635bd709ee516a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2849f02353d46f720b752523401907940899258719c396eb71635bd709ee516a->leave($__internal_2849f02353d46f720b752523401907940899258719c396eb71635bd709ee516a_prof);

        
        $__internal_f0fe145ee150f78df671ce108c34c6b15d2c2f30f1006a25e6fd5309b704e828->leave($__internal_f0fe145ee150f78df671ce108c34c6b15d2c2f30f1006a25e6fd5309b704e828_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b47f481ae11f36a444f011119d0df1de1813287008cba89cc135e980955ee122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47f481ae11f36a444f011119d0df1de1813287008cba89cc135e980955ee122->enter($__internal_b47f481ae11f36a444f011119d0df1de1813287008cba89cc135e980955ee122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_49339fa0ec7080e4b06dbbbf0471ea48b07d0cfc1b3d859e1dda71da2db246d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49339fa0ec7080e4b06dbbbf0471ea48b07d0cfc1b3d859e1dda71da2db246d9->enter($__internal_49339fa0ec7080e4b06dbbbf0471ea48b07d0cfc1b3d859e1dda71da2db246d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_49339fa0ec7080e4b06dbbbf0471ea48b07d0cfc1b3d859e1dda71da2db246d9->leave($__internal_49339fa0ec7080e4b06dbbbf0471ea48b07d0cfc1b3d859e1dda71da2db246d9_prof);

        
        $__internal_b47f481ae11f36a444f011119d0df1de1813287008cba89cc135e980955ee122->leave($__internal_b47f481ae11f36a444f011119d0df1de1813287008cba89cc135e980955ee122_prof);

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

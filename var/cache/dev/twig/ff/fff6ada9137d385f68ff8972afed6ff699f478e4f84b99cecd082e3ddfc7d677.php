<?php

/* auth/login.html.twig */
class __TwigTemplate_3742eeb441ab53dea47220d1e24d3c12b2444154e4626dbfba6534fcc4e546be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a7d104311856869dd7c7a2849627f3932d7ce98ada29045716c823295caaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a7d104311856869dd7c7a2849627f3932d7ce98ada29045716c823295caaf7->enter($__internal_f6a7d104311856869dd7c7a2849627f3932d7ce98ada29045716c823295caaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_002a25d8f9953001b4b0b9926d784a526ae29165b0738e05f2c7615cd78bb104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002a25d8f9953001b4b0b9926d784a526ae29165b0738e05f2c7615cd78bb104->enter($__internal_002a25d8f9953001b4b0b9926d784a526ae29165b0738e05f2c7615cd78bb104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>Matrix Admin</title><meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/matrix-login.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div id=\"loginbox\">
    <form id=\"loginform\" class=\"form-vertical\" role=\"form\" method=\"POST\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion_login_check");
        echo "\">
        <div class=\"control-group normal_text\"> <h3><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></h3></div>";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 24
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"main_input_box\">
                    <span class=\"add-on bg_lg\"><i class=\"icon-user\"> </i></span><input type=\"text\" placeholder=\"xxxxx@eni-ecole.fr\" id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </div>
            </div>
        </div>
        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"main_input_box\">
                    <span class=\"add-on bg_ly\"><i class=\"icon-lock\"></i></span><input type=\"password\" placeholder=\"Mot de Passe\" id=\"password\" class=\"form-control\" name=\"_password\" />
                </div>
            </div>
        </div>
        <div class=\"form-actions\">
            <span class=\"pull-left\"><a href=\"#\" class=\"flip-link btn btn-info\" id=\"open_modal\">Mot de passe oublié ?</a></span>
            <span class=\"pull-right\"><button type=\"submit\" class=\"btn btn-success\">Connexion</button></span>
        </div>

    </form>
</div>

<div id=\"modal_password\" class=\"modal\">
    <div class=\"modal-content\">
        <form id=\"recoverform\" action=\"#\" class=\"form-vertical\">
            <p class=\"normal_text\">Entrez votre adresse mail afin de recevoir votre nouveau mot de passe.</p>

            <div class=\"controls\">
                <div class=\"main_input_box\">
                    <span class=\"add-on bg_lo\"><i class=\"icon-envelope\"></i></span><input type=\"text\" placeholder=\"xxxxx@eni-ecole.fr\" />
                </div>
            </div>

            <div class=\"form-actions\">
                <span class=\"pull-left\"><a href=\"#\" class=\"flip-link btn btn-success\" id=\"close_modal\">&laquo; Retour vers la connexion</a></span>
                <span class=\"pull-right\"><a class=\"btn btn-info\">Récuperer</a></span>
            </div>
        </form>
    </div>
</div>

<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.login.js"), "html", null, true);
        echo "\"></script>-->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/login.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_f6a7d104311856869dd7c7a2849627f3932d7ce98ada29045716c823295caaf7->leave($__internal_f6a7d104311856869dd7c7a2849627f3932d7ce98ada29045716c823295caaf7_prof);

        
        $__internal_002a25d8f9953001b4b0b9926d784a526ae29165b0738e05f2c7615cd78bb104->leave($__internal_002a25d8f9953001b4b0b9926d784a526ae29165b0738e05f2c7615cd78bb104_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 67,  126 => 66,  122 => 65,  81 => 27,  76 => 24,  70 => 21,  67 => 20,  63 => 19,  59 => 18,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>Matrix Admin</title><meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/bootstrap-responsive.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/matrix-login.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/font-awesome/css/font-awesome.css') }}\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div id=\"loginbox\">
    <form id=\"loginform\" class=\"form-vertical\" role=\"form\" method=\"POST\" action=\"{{ path('connexion_login_check') }}\">
        <div class=\"control-group normal_text\"> <h3><img src=\"{{ asset('template/img/logo.png') }}\" alt=\"Logo\" /></h3></div>{% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData) }}
        </div>
        {% endif %}
        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"main_input_box\">
                    <span class=\"add-on bg_lg\"><i class=\"icon-user\"> </i></span><input type=\"text\" placeholder=\"xxxxx@eni-ecole.fr\" id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"{{ last_username }}\" />
                </div>
            </div>
        </div>
        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"main_input_box\">
                    <span class=\"add-on bg_ly\"><i class=\"icon-lock\"></i></span><input type=\"password\" placeholder=\"Mot de Passe\" id=\"password\" class=\"form-control\" name=\"_password\" />
                </div>
            </div>
        </div>
        <div class=\"form-actions\">
            <span class=\"pull-left\"><a href=\"#\" class=\"flip-link btn btn-info\" id=\"open_modal\">Mot de passe oublié ?</a></span>
            <span class=\"pull-right\"><button type=\"submit\" class=\"btn btn-success\">Connexion</button></span>
        </div>

    </form>
</div>

<div id=\"modal_password\" class=\"modal\">
    <div class=\"modal-content\">
        <form id=\"recoverform\" action=\"#\" class=\"form-vertical\">
            <p class=\"normal_text\">Entrez votre adresse mail afin de recevoir votre nouveau mot de passe.</p>

            <div class=\"controls\">
                <div class=\"main_input_box\">
                    <span class=\"add-on bg_lo\"><i class=\"icon-envelope\"></i></span><input type=\"text\" placeholder=\"xxxxx@eni-ecole.fr\" />
                </div>
            </div>

            <div class=\"form-actions\">
                <span class=\"pull-left\"><a href=\"#\" class=\"flip-link btn btn-success\" id=\"close_modal\">&laquo; Retour vers la connexion</a></span>
                <span class=\"pull-right\"><a class=\"btn btn-info\">Récuperer</a></span>
            </div>
        </form>
    </div>
</div>

<script src=\"{{ asset('template/js/jquery.min.js') }}\"></script>
<!--<script src=\"{{ asset('template/js/matrix.login.js') }}\"></script>-->
<script src=\"{{ asset('Js/login.js') }}\"></script>

</body>

</html>
", "auth/login.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\auth\\login.html.twig");
    }
}

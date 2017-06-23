<?php

/* auth/login.html.twig */
class __TwigTemplate_b5d1a3bdedb6d709b9867e4e11233d260214019aac13e0bb9761c23bcd726d20 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 20
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  124 => 67,  120 => 66,  116 => 65,  75 => 27,  70 => 24,  64 => 21,  61 => 20,  57 => 19,  53 => 18,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "auth/login.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\auth\\login.html.twig");
    }
}

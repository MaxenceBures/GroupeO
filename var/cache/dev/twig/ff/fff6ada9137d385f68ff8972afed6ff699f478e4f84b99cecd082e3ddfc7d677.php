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
        $__internal_0b00c274c14742e8fdab0a37105abe2a7f189d188b9ae13470e43c77eca16bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b00c274c14742e8fdab0a37105abe2a7f189d188b9ae13470e43c77eca16bfc->enter($__internal_0b00c274c14742e8fdab0a37105abe2a7f189d188b9ae13470e43c77eca16bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_7cf97c6f3fc3b30d0cade896e6887025f8b7c3c57f0358bdc2ba01d00e3e7597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf97c6f3fc3b30d0cade896e6887025f8b7c3c57f0358bdc2ba01d00e3e7597->enter($__internal_7cf97c6f3fc3b30d0cade896e6887025f8b7c3c57f0358bdc2ba01d00e3e7597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>ENI Ecole | Connexion</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.5 -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"hold-transition login-page\">
        <div class=\"login-box\">
            <div class=\"login-logo\">
                <a href=\"#\"><b>App Calendrier</b><br>ENI Ecole</a>
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <form method=\"POST\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion_login_check");
        echo "\">
                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\" placeholder=\"xxxxx@eni-ecole.fr\" id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" >
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\" placeholder=\"xxxxx@eni-ecole.fr\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" placeholder=\"Mot de Passe\" id=\"password\" class=\"form-control\" name=\"_password\">
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a class=\"btn btn-primary btn-block btn-flat\" data-toggle=\"modal\" href=\"#modalpassword\"> Mot de passe oublié ?</a>
                        </div>
                        <div class=\"col-md-6\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Connexion</button>
                        </div><!-- /.col -->
                    </div>
                    ";
        // line 47
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 48
            echo "                        <br>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"alert alert-danger\">
                                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 57
        echo "                </form>
            </div><!-- /.login-box-body -->

            <!-- modal_password -->

            <div class=\"modal\" id=\"modalpassword\" tabindex=\"-1\" role=\"dialog\">
                <form id=\"recoverform\" action=\"#\" class=\"\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <h3>Récupération du mot de passe</h3>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <p>Entrez votre adresse mail afin de recevoir votre nouveau mot de passe.</p>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-envelope\"></i></span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"xxxxx@eni-ecole.fr\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <div class=\"modal-footer\">
                                    <span class=\"pull-left\"><a href=\"#\" class=\"flip-link btn btn-default\" data-dismiss=\"modal\">Fermer</a></span>
                                    <span class=\"pull-right\"><a class=\"btn btn-primary\">Récuperer</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal_password -->
                </form>
            </div><!-- /.login-box -->

            <!-- jQuery 2.1.4 -->
            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap 3.3.5 -->
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- iCheck -->
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_0b00c274c14742e8fdab0a37105abe2a7f189d188b9ae13470e43c77eca16bfc->leave($__internal_0b00c274c14742e8fdab0a37105abe2a7f189d188b9ae13470e43c77eca16bfc_prof);

        
        $__internal_7cf97c6f3fc3b30d0cade896e6887025f8b7c3c57f0358bdc2ba01d00e3e7597->leave($__internal_7cf97c6f3fc3b30d0cade896e6887025f8b7c3c57f0358bdc2ba01d00e3e7597_prof);

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
        return array (  154 => 102,  149 => 100,  144 => 98,  101 => 57,  93 => 52,  87 => 48,  85 => 47,  67 => 32,  62 => 30,  45 => 16,  36 => 10,  25 => 1,);
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>ENI Ecole | Connexion</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.5 -->
        <link rel=\"stylesheet\" href=\"{{ asset('template/bootstrap/css/bootstrap.min.css') }}\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{ asset('template/dist/css/AdminLTE.min.css') }}\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"hold-transition login-page\">
        <div class=\"login-box\">
            <div class=\"login-logo\">
                <a href=\"#\"><b>App Calendrier</b><br>ENI Ecole</a>
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <form method=\"POST\" action=\"{{ path('connexion_login_check') }}\">
                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\" placeholder=\"xxxxx@eni-ecole.fr\" id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"{{ last_username }}\" >
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\" placeholder=\"xxxxx@eni-ecole.fr\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" placeholder=\"Mot de Passe\" id=\"password\" class=\"form-control\" name=\"_password\">
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a class=\"btn btn-primary btn-block btn-flat\" data-toggle=\"modal\" href=\"#modalpassword\"> Mot de passe oublié ?</a>
                        </div>
                        <div class=\"col-md-6\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Connexion</button>
                        </div><!-- /.col -->
                    </div>
                    {% if error %}
                        <br>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"alert alert-danger\">
                                    {{ error.messageKey|trans(error.messageData) }}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </form>
            </div><!-- /.login-box-body -->

            <!-- modal_password -->

            <div class=\"modal\" id=\"modalpassword\" tabindex=\"-1\" role=\"dialog\">
                <form id=\"recoverform\" action=\"#\" class=\"\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <h3>Récupération du mot de passe</h3>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <p>Entrez votre adresse mail afin de recevoir votre nouveau mot de passe.</p>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-envelope\"></i></span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"xxxxx@eni-ecole.fr\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <div class=\"modal-footer\">
                                    <span class=\"pull-left\"><a href=\"#\" class=\"flip-link btn btn-default\" data-dismiss=\"modal\">Fermer</a></span>
                                    <span class=\"pull-right\"><a class=\"btn btn-primary\">Récuperer</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal_password -->
                </form>
            </div><!-- /.login-box -->

            <!-- jQuery 2.1.4 -->
            <script src=\"{{ asset('template/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
            <!-- Bootstrap 3.3.5 -->
            <script src=\"{{ asset('template/bootstrap/js/bootstrap.min.js') }}\"></script>
            <!-- iCheck -->
            <script src=\"{{ asset('template/plugins/iCheck/icheck.min.js') }}\"></script>
    </body>
</html>
", "auth/login.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\auth\\login.html.twig");
    }
}

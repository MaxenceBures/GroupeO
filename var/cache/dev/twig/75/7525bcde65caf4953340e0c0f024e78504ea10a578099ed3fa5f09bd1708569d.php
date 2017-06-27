<?php

/* layout.html.twig */
class __TwigTemplate_e03fc5a0e2a01b8bb0f83aa6d9a458d4ee8b9c09348d76c47d548825b2692e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2930079bc98b3c5e2f090399a722ac48168faf56f2e5c494ab4c20099cc8cb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2930079bc98b3c5e2f090399a722ac48168faf56f2e5c494ab4c20099cc8cb52->enter($__internal_2930079bc98b3c5e2f090399a722ac48168faf56f2e5c494ab4c20099cc8cb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_d0a265e22d07b0b8d19e062b151583ef6b0f47e44442b7ed6379e52581634ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a265e22d07b0b8d19e062b151583ef6b0f47e44442b7ed6379e52581634ea8->enter($__internal_d0a265e22d07b0b8d19e062b151583ef6b0f47e44442b7ed6379e52581634ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/ionicons-master/css/ionicons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/toastr/toastr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
</head>
<body class=\"sidebar-mini skin-blue fixed\">
    <div class=\"wrapper\">
        <div class=\"content-wrapper\">
            <!-- header -->
            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"\" class=\"logo\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>E</b>NI</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>ENI Ecole</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/user.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                    <span class=\"hidden-xs\">admin@admin</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/user.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle\" alt=\"User Image\"/>
                                        <p> 
                                            Admin
                                            <small> Groupe </small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-right\">
                                            <a href=\"logout\" class=\"btn btn-default btn-flat\">Se deconnecter</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- /.header -->
            <!-- Left side column. contains the logo and sidebar -->

            ";
        // line 72
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "frontend_homepage")) {
            // line 73
            echo "                ";
            $this->displayBlock('aside', $context, $blocks);
            // line 91
            echo "            ";
        }
        // line 92
        echo "

            <section class=\"content\">
            ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "        </section>
        <!-- /.content -->
    </div>
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0
        </div>
        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ENIEcole-250x250.jpg"), "html", null, true);
        echo "\" style=\"width: 50px;height: 50px\" />
        <strong>Copyright &copy; 2017 <a href=\"#\">Groupe O</a>.</strong> Tous droits reservés.
    </footer>
    <div class=\"control-sidebar-bg\"></div>
</div>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jQueryUI/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/slimScroll/jquery.slimscroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/daterangepicker/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/select2/i18n/fr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 123
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "</body>
</html>
";
        
        $__internal_2930079bc98b3c5e2f090399a722ac48168faf56f2e5c494ab4c20099cc8cb52->leave($__internal_2930079bc98b3c5e2f090399a722ac48168faf56f2e5c494ab4c20099cc8cb52_prof);

        
        $__internal_d0a265e22d07b0b8d19e062b151583ef6b0f47e44442b7ed6379e52581634ea8->leave($__internal_d0a265e22d07b0b8d19e062b151583ef6b0f47e44442b7ed6379e52581634ea8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d6420b03c56296764c314d9e6cc1bfff0b338040ec84e7c7868db63537d4272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6420b03c56296764c314d9e6cc1bfff0b338040ec84e7c7868db63537d4272->enter($__internal_2d6420b03c56296764c314d9e6cc1bfff0b338040ec84e7c7868db63537d4272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f55b7f29e09b94f77b6fe99a7f6483f17261f18cca8403fbe72810841e8171e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55b7f29e09b94f77b6fe99a7f6483f17261f18cca8403fbe72810841e8171e1->enter($__internal_f55b7f29e09b94f77b6fe99a7f6483f17261f18cca8403fbe72810841e8171e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f55b7f29e09b94f77b6fe99a7f6483f17261f18cca8403fbe72810841e8171e1->leave($__internal_f55b7f29e09b94f77b6fe99a7f6483f17261f18cca8403fbe72810841e8171e1_prof);

        
        $__internal_2d6420b03c56296764c314d9e6cc1bfff0b338040ec84e7c7868db63537d4272->leave($__internal_2d6420b03c56296764c314d9e6cc1bfff0b338040ec84e7c7868db63537d4272_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dcb44746a6640fbb418dc4468d839200aa852927a957b863adc243937d56c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcb44746a6640fbb418dc4468d839200aa852927a957b863adc243937d56c83->enter($__internal_7dcb44746a6640fbb418dc4468d839200aa852927a957b863adc243937d56c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2381fd72f5e7cfb52a3ff96d3f25ed4c2bc216a8e7bfae1740d1aea5f072f6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2381fd72f5e7cfb52a3ff96d3f25ed4c2bc216a8e7bfae1740d1aea5f072f6d9->enter($__internal_2381fd72f5e7cfb52a3ff96d3f25ed4c2bc216a8e7bfae1740d1aea5f072f6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2381fd72f5e7cfb52a3ff96d3f25ed4c2bc216a8e7bfae1740d1aea5f072f6d9->leave($__internal_2381fd72f5e7cfb52a3ff96d3f25ed4c2bc216a8e7bfae1740d1aea5f072f6d9_prof);

        
        $__internal_7dcb44746a6640fbb418dc4468d839200aa852927a957b863adc243937d56c83->leave($__internal_7dcb44746a6640fbb418dc4468d839200aa852927a957b863adc243937d56c83_prof);

    }

    // line 73
    public function block_aside($context, array $blocks = array())
    {
        $__internal_63e8a4c73aabe8cc56de62400951f5604df0f713defecb8cd5bc16b4d0bc5e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e8a4c73aabe8cc56de62400951f5604df0f713defecb8cd5bc16b4d0bc5e2a->enter($__internal_63e8a4c73aabe8cc56de62400951f5604df0f713defecb8cd5bc16b4d0bc5e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_a0a3d90ce5fe3cfbc1bd9c85affc7fc166c959b8642bf14aa3c5f60a7e605939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a3d90ce5fe3cfbc1bd9c85affc7fc166c959b8642bf14aa3c5f60a7e605939->enter($__internal_a0a3d90ce5fe3cfbc1bd9c85affc7fc166c959b8642bf14aa3c5f60a7e605939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 74
        echo "                    <aside class=\"main-sidebar\">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class=\"sidebar\">
                            <!-- Sidebar user panel -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class=\"sidebar-menu\">
                                <li class=\"header\"><i class=\"fa\"></i> MENU</li>
                                <li>
                                    <a href=\"../\">
                                        <i class=\"fa fa-home\"></i> <span>Accueil</span>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
                ";
        
        $__internal_a0a3d90ce5fe3cfbc1bd9c85affc7fc166c959b8642bf14aa3c5f60a7e605939->leave($__internal_a0a3d90ce5fe3cfbc1bd9c85affc7fc166c959b8642bf14aa3c5f60a7e605939_prof);

        
        $__internal_63e8a4c73aabe8cc56de62400951f5604df0f713defecb8cd5bc16b4d0bc5e2a->leave($__internal_63e8a4c73aabe8cc56de62400951f5604df0f713defecb8cd5bc16b4d0bc5e2a_prof);

    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a218621ddf8b75b0db4485c3ea4c4648d78e4d1a572594211444cbc545931e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a218621ddf8b75b0db4485c3ea4c4648d78e4d1a572594211444cbc545931e4->enter($__internal_8a218621ddf8b75b0db4485c3ea4c4648d78e4d1a572594211444cbc545931e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2200922bc77012e08cc57dd4e6a156e60c6b075b56f67e2e898c5f4864159405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2200922bc77012e08cc57dd4e6a156e60c6b075b56f67e2e898c5f4864159405->enter($__internal_2200922bc77012e08cc57dd4e6a156e60c6b075b56f67e2e898c5f4864159405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2200922bc77012e08cc57dd4e6a156e60c6b075b56f67e2e898c5f4864159405->leave($__internal_2200922bc77012e08cc57dd4e6a156e60c6b075b56f67e2e898c5f4864159405_prof);

        
        $__internal_8a218621ddf8b75b0db4485c3ea4c4648d78e4d1a572594211444cbc545931e4->leave($__internal_8a218621ddf8b75b0db4485c3ea4c4648d78e4d1a572594211444cbc545931e4_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_733d0a7511ecb996e2dd61ac4381178423c54f66248ef98c6329def038e75ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733d0a7511ecb996e2dd61ac4381178423c54f66248ef98c6329def038e75ff4->enter($__internal_733d0a7511ecb996e2dd61ac4381178423c54f66248ef98c6329def038e75ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cfbb9310355c649cc754958dc386011db3ffd2ce7a46ce79b4af129d0ce2e99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbb9310355c649cc754958dc386011db3ffd2ce7a46ce79b4af129d0ce2e99e->enter($__internal_cfbb9310355c649cc754958dc386011db3ffd2ce7a46ce79b4af129d0ce2e99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfbb9310355c649cc754958dc386011db3ffd2ce7a46ce79b4af129d0ce2e99e->leave($__internal_cfbb9310355c649cc754958dc386011db3ffd2ce7a46ce79b4af129d0ce2e99e_prof);

        
        $__internal_733d0a7511ecb996e2dd61ac4381178423c54f66248ef98c6329def038e75ff4->leave($__internal_733d0a7511ecb996e2dd61ac4381178423c54f66248ef98c6329def038e75ff4_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 123,  318 => 95,  292 => 74,  283 => 73,  266 => 16,  248 => 5,  236 => 124,  234 => 123,  230 => 122,  226 => 121,  222 => 120,  218 => 119,  214 => 118,  210 => 117,  206 => 116,  202 => 115,  198 => 114,  194 => 113,  190 => 112,  186 => 111,  182 => 110,  178 => 109,  174 => 108,  166 => 103,  157 => 96,  155 => 95,  150 => 92,  147 => 91,  144 => 73,  142 => 72,  118 => 51,  109 => 45,  79 => 17,  77 => 16,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"{{ asset('template/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/ionicons-master/css/ionicons.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/plugins/datatables/dataTables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/dist/css/AdminLTE.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/dist/css/skins/_all-skins.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/plugins/select2/select2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/plugins/toastr/toastr.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    {% block stylesheets %}{% endblock %}

</head>
<body class=\"sidebar-mini skin-blue fixed\">
    <div class=\"wrapper\">
        <div class=\"content-wrapper\">
            <!-- header -->
            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"\" class=\"logo\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>E</b>NI</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>ENI Ecole</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"{{asset ('image/user.png') }}\" class=\"user-image\" alt=\"User Image\">
                                    <span class=\"hidden-xs\">admin@admin</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"{{asset ('image/user.png') }}\" alt=\"\" class=\"img-circle\" alt=\"User Image\"/>
                                        <p> 
                                            Admin
                                            <small> Groupe </small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-right\">
                                            <a href=\"logout\" class=\"btn btn-default btn-flat\">Se deconnecter</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- /.header -->
            <!-- Left side column. contains the logo and sidebar -->

            {% if app.request.attributes.get('_route') != 'frontend_homepage' %}
                {% block aside %}
                    <aside class=\"main-sidebar\">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class=\"sidebar\">
                            <!-- Sidebar user panel -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class=\"sidebar-menu\">
                                <li class=\"header\"><i class=\"fa\"></i> MENU</li>
                                <li>
                                    <a href=\"../\">
                                        <i class=\"fa fa-home\"></i> <span>Accueil</span>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
                {% endblock %}
            {% endif %}


            <section class=\"content\">
            {% block body %}{% endblock %}
        </section>
        <!-- /.content -->
    </div>
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0
        </div>
        <img src=\"{{asset ('image/ENIEcole-250x250.jpg') }}\" style=\"width: 50px;height: 50px\" />
        <strong>Copyright &copy; 2017 <a href=\"#\">Groupe O</a>.</strong> Tous droits reservés.
    </footer>
    <div class=\"control-sidebar-bg\"></div>
</div>
<script src=\"{{ asset('template/plugins/jQuery/jQuery-2.2.0.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/jQueryUI/jquery-ui.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/fastclick/fastclick.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/slimScroll/jquery.slimscroll.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/chartjs/Chart.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/dist/js/app.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/daterangepicker/moment.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/daterangepicker/daterangepicker.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/datepicker/bootstrap-datepicker.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/datatables/jquery.dataTables.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/datatables/dataTables.bootstrap.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/select2/select2.full.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/select2/i18n/fr.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template/plugins/toastr/toastr.min.js') }}\" type=\"text/javascript\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "layout.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\layout.html.twig");
    }
}

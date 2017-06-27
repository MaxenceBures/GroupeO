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
        $__internal_e8a6429628eb246cbd70058e3ed1d60e6c60fc29db7ebf87c45f12a949f09f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a6429628eb246cbd70058e3ed1d60e6c60fc29db7ebf87c45f12a949f09f13->enter($__internal_e8a6429628eb246cbd70058e3ed1d60e6c60fc29db7ebf87c45f12a949f09f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_2b23be4b5ed14a0ee833e6a48fe723b358195a8eeea11e44df5f4b90f6aec74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b23be4b5ed14a0ee833e6a48fe723b358195a8eeea11e44df5f4b90f6aec74c->enter($__internal_2b23be4b5ed14a0ee833e6a48fe723b358195a8eeea11e44df5f4b90f6aec74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/ionicons-master/css/ionicons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/user.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                    <span class=\"hidden-xs\">admin@admin</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 49
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
        // line 69
        $this->displayBlock('aside', $context, $blocks);
        // line 87
        echo "            <section class=\"content\">
            ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "        </section>
        <!-- /.content -->
    </div>
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0
        </div>
        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ENIEcole-250x250.jpg"), "html", null, true);
        echo "\" style=\"width: 50px;height: 50px\" />
        <strong>Copyright &copy; 2017 <a href=\"#\">Groupe O</a>.</strong> Tout droits reservés.
    </footer>
    <div class=\"control-sidebar-bg\"></div>
</div>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jQueryUI/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/slimScroll/jquery.slimscroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/daterangepicker/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/select2/i18n/fr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "</body>
</html>
";
        
        $__internal_e8a6429628eb246cbd70058e3ed1d60e6c60fc29db7ebf87c45f12a949f09f13->leave($__internal_e8a6429628eb246cbd70058e3ed1d60e6c60fc29db7ebf87c45f12a949f09f13_prof);

        
        $__internal_2b23be4b5ed14a0ee833e6a48fe723b358195a8eeea11e44df5f4b90f6aec74c->leave($__internal_2b23be4b5ed14a0ee833e6a48fe723b358195a8eeea11e44df5f4b90f6aec74c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca79ef4a81253612d91e36233fc21a3600d9ce1f70a02a84cb47d1b9c7419efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca79ef4a81253612d91e36233fc21a3600d9ce1f70a02a84cb47d1b9c7419efb->enter($__internal_ca79ef4a81253612d91e36233fc21a3600d9ce1f70a02a84cb47d1b9c7419efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5780935dd46a817f351666617d8b46772f725a8d6959d89241e886305ac7988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5780935dd46a817f351666617d8b46772f725a8d6959d89241e886305ac7988->enter($__internal_c5780935dd46a817f351666617d8b46772f725a8d6959d89241e886305ac7988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c5780935dd46a817f351666617d8b46772f725a8d6959d89241e886305ac7988->leave($__internal_c5780935dd46a817f351666617d8b46772f725a8d6959d89241e886305ac7988_prof);

        
        $__internal_ca79ef4a81253612d91e36233fc21a3600d9ce1f70a02a84cb47d1b9c7419efb->leave($__internal_ca79ef4a81253612d91e36233fc21a3600d9ce1f70a02a84cb47d1b9c7419efb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d2c2c24c6bd58e176a70714229f82cc41b138c79f3a124746cd569bbfd9c630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2c2c24c6bd58e176a70714229f82cc41b138c79f3a124746cd569bbfd9c630->enter($__internal_5d2c2c24c6bd58e176a70714229f82cc41b138c79f3a124746cd569bbfd9c630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dab749231d01b5250309f18f2903fce827cc402d417a6e326c744da92309cffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab749231d01b5250309f18f2903fce827cc402d417a6e326c744da92309cffc->enter($__internal_dab749231d01b5250309f18f2903fce827cc402d417a6e326c744da92309cffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dab749231d01b5250309f18f2903fce827cc402d417a6e326c744da92309cffc->leave($__internal_dab749231d01b5250309f18f2903fce827cc402d417a6e326c744da92309cffc_prof);

        
        $__internal_5d2c2c24c6bd58e176a70714229f82cc41b138c79f3a124746cd569bbfd9c630->leave($__internal_5d2c2c24c6bd58e176a70714229f82cc41b138c79f3a124746cd569bbfd9c630_prof);

    }

    // line 69
    public function block_aside($context, array $blocks = array())
    {
        $__internal_1f27b601575c62a0b61a13f8b1933907d8dc6366868233b6b3b2586c463c2eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f27b601575c62a0b61a13f8b1933907d8dc6366868233b6b3b2586c463c2eac->enter($__internal_1f27b601575c62a0b61a13f8b1933907d8dc6366868233b6b3b2586c463c2eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_1fee14621a8c0a79f44a8a28ff782932caec232943f78fd4f2e65755e1bfac56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fee14621a8c0a79f44a8a28ff782932caec232943f78fd4f2e65755e1bfac56->enter($__internal_1fee14621a8c0a79f44a8a28ff782932caec232943f78fd4f2e65755e1bfac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 70
        echo "                <aside class=\"main-sidebar\">
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
        
        $__internal_1fee14621a8c0a79f44a8a28ff782932caec232943f78fd4f2e65755e1bfac56->leave($__internal_1fee14621a8c0a79f44a8a28ff782932caec232943f78fd4f2e65755e1bfac56_prof);

        
        $__internal_1f27b601575c62a0b61a13f8b1933907d8dc6366868233b6b3b2586c463c2eac->leave($__internal_1f27b601575c62a0b61a13f8b1933907d8dc6366868233b6b3b2586c463c2eac_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f8cf2bf700583b09e8104dccf0e47e86b22e52ddb5fa8b9e354f11a4c1b3536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8cf2bf700583b09e8104dccf0e47e86b22e52ddb5fa8b9e354f11a4c1b3536->enter($__internal_1f8cf2bf700583b09e8104dccf0e47e86b22e52ddb5fa8b9e354f11a4c1b3536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_803d5ce79d8da7ff1724bfb774d919fa3df8c4a2d72a3aa3a2f81f7008df7b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803d5ce79d8da7ff1724bfb774d919fa3df8c4a2d72a3aa3a2f81f7008df7b26->enter($__internal_803d5ce79d8da7ff1724bfb774d919fa3df8c4a2d72a3aa3a2f81f7008df7b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_803d5ce79d8da7ff1724bfb774d919fa3df8c4a2d72a3aa3a2f81f7008df7b26->leave($__internal_803d5ce79d8da7ff1724bfb774d919fa3df8c4a2d72a3aa3a2f81f7008df7b26_prof);

        
        $__internal_1f8cf2bf700583b09e8104dccf0e47e86b22e52ddb5fa8b9e354f11a4c1b3536->leave($__internal_1f8cf2bf700583b09e8104dccf0e47e86b22e52ddb5fa8b9e354f11a4c1b3536_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39424a3568e130e36bf3c931f3d0c4767bbfb33149823997bc89949ccd408b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39424a3568e130e36bf3c931f3d0c4767bbfb33149823997bc89949ccd408b6f->enter($__internal_39424a3568e130e36bf3c931f3d0c4767bbfb33149823997bc89949ccd408b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6c0e40f4259d4d08d744cad00c0619fabebc2a7ea8ba1697a71ce1d27edcc828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0e40f4259d4d08d744cad00c0619fabebc2a7ea8ba1697a71ce1d27edcc828->enter($__internal_6c0e40f4259d4d08d744cad00c0619fabebc2a7ea8ba1697a71ce1d27edcc828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c0e40f4259d4d08d744cad00c0619fabebc2a7ea8ba1697a71ce1d27edcc828->leave($__internal_6c0e40f4259d4d08d744cad00c0619fabebc2a7ea8ba1697a71ce1d27edcc828_prof);

        
        $__internal_39424a3568e130e36bf3c931f3d0c4767bbfb33149823997bc89949ccd408b6f->leave($__internal_39424a3568e130e36bf3c931f3d0c4767bbfb33149823997bc89949ccd408b6f_prof);

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
        return array (  316 => 115,  299 => 88,  273 => 70,  264 => 69,  247 => 6,  229 => 5,  217 => 116,  215 => 115,  211 => 114,  207 => 113,  203 => 112,  199 => 111,  195 => 110,  191 => 109,  187 => 108,  183 => 107,  179 => 106,  175 => 105,  171 => 104,  167 => 103,  163 => 102,  159 => 101,  151 => 96,  142 => 89,  140 => 88,  137 => 87,  135 => 69,  112 => 49,  103 => 43,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
    <link href=\"{{ asset('template/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/ionicons-master/css/ionicons.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/plugins/datatables/dataTables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/dist/css/AdminLTE.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/dist/css/skins/_all-skins.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('template/plugins/select2/select2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
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
        <strong>Copyright &copy; 2017 <a href=\"#\">Groupe O</a>.</strong> Tout droits reservés.
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
{% block javascripts %}{% endblock %}
</body>
</html>
", "layout.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\layout.html.twig");
    }
}

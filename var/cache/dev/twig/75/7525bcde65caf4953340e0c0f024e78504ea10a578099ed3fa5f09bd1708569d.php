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
        $__internal_e10442abf2d9459090cdcc6a3ac6b8bd9b06433ca16c28bf70281d731791f09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10442abf2d9459090cdcc6a3ac6b8bd9b06433ca16c28bf70281d731791f09c->enter($__internal_e10442abf2d9459090cdcc6a3ac6b8bd9b06433ca16c28bf70281d731791f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_762fd80e5de388eb6dd16fda7c4a5fb51f377cd1689031f353ce244a1b2f3ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762fd80e5de388eb6dd16fda7c4a5fb51f377cd1689031f353ce244a1b2f3ed2->enter($__internal_762fd80e5de388eb6dd16fda7c4a5fb51f377cd1689031f353ce244a1b2f3ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/user.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                    <span class=\"hidden-xs\">admin@admin</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 48
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
        // line 68
        $this->displayBlock('aside', $context, $blocks);
        // line 86
        echo "            <section class=\"content\">
            ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "        </section>
        <!-- /.content -->
    </div>
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0
        </div>
        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ENIEcole-250x250.jpg"), "html", null, true);
        echo "\" style=\"width: 50px;height: 50px\" />
        <strong>Copyright &copy; 2017 <a href=\"#\">Groupe O</a>.</strong> Tout droits reservés.
    </footer>
    <div class=\"control-sidebar-bg\"></div>
</div>
";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "<script src=\"";
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
</body>
</html>
";
        
        $__internal_e10442abf2d9459090cdcc6a3ac6b8bd9b06433ca16c28bf70281d731791f09c->leave($__internal_e10442abf2d9459090cdcc6a3ac6b8bd9b06433ca16c28bf70281d731791f09c_prof);

        
        $__internal_762fd80e5de388eb6dd16fda7c4a5fb51f377cd1689031f353ce244a1b2f3ed2->leave($__internal_762fd80e5de388eb6dd16fda7c4a5fb51f377cd1689031f353ce244a1b2f3ed2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc6f9eb0b9025d34bb53df95e4d3547b7fc134038105c39f2c50e425f6e7fcf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6f9eb0b9025d34bb53df95e4d3547b7fc134038105c39f2c50e425f6e7fcf4->enter($__internal_fc6f9eb0b9025d34bb53df95e4d3547b7fc134038105c39f2c50e425f6e7fcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c426ea1e5dbdbac83073416952d241a69b1c6ccf0f45a6c4dbc8f2ee45514617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c426ea1e5dbdbac83073416952d241a69b1c6ccf0f45a6c4dbc8f2ee45514617->enter($__internal_c426ea1e5dbdbac83073416952d241a69b1c6ccf0f45a6c4dbc8f2ee45514617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c426ea1e5dbdbac83073416952d241a69b1c6ccf0f45a6c4dbc8f2ee45514617->leave($__internal_c426ea1e5dbdbac83073416952d241a69b1c6ccf0f45a6c4dbc8f2ee45514617_prof);

        
        $__internal_fc6f9eb0b9025d34bb53df95e4d3547b7fc134038105c39f2c50e425f6e7fcf4->leave($__internal_fc6f9eb0b9025d34bb53df95e4d3547b7fc134038105c39f2c50e425f6e7fcf4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b97585c51207467a352cb5118241bfda4e7c863ad45cb4423099e00f9205ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b97585c51207467a352cb5118241bfda4e7c863ad45cb4423099e00f9205ae0->enter($__internal_0b97585c51207467a352cb5118241bfda4e7c863ad45cb4423099e00f9205ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5f550872c1ea9ade1d377f046c98ccde4cbb1d3f1a113d107015e10f737006e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f550872c1ea9ade1d377f046c98ccde4cbb1d3f1a113d107015e10f737006e->enter($__internal_f5f550872c1ea9ade1d377f046c98ccde4cbb1d3f1a113d107015e10f737006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f5f550872c1ea9ade1d377f046c98ccde4cbb1d3f1a113d107015e10f737006e->leave($__internal_f5f550872c1ea9ade1d377f046c98ccde4cbb1d3f1a113d107015e10f737006e_prof);

        
        $__internal_0b97585c51207467a352cb5118241bfda4e7c863ad45cb4423099e00f9205ae0->leave($__internal_0b97585c51207467a352cb5118241bfda4e7c863ad45cb4423099e00f9205ae0_prof);

    }

    // line 68
    public function block_aside($context, array $blocks = array())
    {
        $__internal_0dde2658b7d933a2e760f28b88cbab8cbb04a5e671105453f40ceb9688f3d0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dde2658b7d933a2e760f28b88cbab8cbb04a5e671105453f40ceb9688f3d0e4->enter($__internal_0dde2658b7d933a2e760f28b88cbab8cbb04a5e671105453f40ceb9688f3d0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_9efc63a8daf153725faaa89105610672cc3aaed9cf58c43cfe325269b04ee603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efc63a8daf153725faaa89105610672cc3aaed9cf58c43cfe325269b04ee603->enter($__internal_9efc63a8daf153725faaa89105610672cc3aaed9cf58c43cfe325269b04ee603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 69
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
        
        $__internal_9efc63a8daf153725faaa89105610672cc3aaed9cf58c43cfe325269b04ee603->leave($__internal_9efc63a8daf153725faaa89105610672cc3aaed9cf58c43cfe325269b04ee603_prof);

        
        $__internal_0dde2658b7d933a2e760f28b88cbab8cbb04a5e671105453f40ceb9688f3d0e4->leave($__internal_0dde2658b7d933a2e760f28b88cbab8cbb04a5e671105453f40ceb9688f3d0e4_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b39785b76e6d986052f4440148ddf7699a08103cce9bdcd1632d5ae4d77ecd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b39785b76e6d986052f4440148ddf7699a08103cce9bdcd1632d5ae4d77ecd2->enter($__internal_4b39785b76e6d986052f4440148ddf7699a08103cce9bdcd1632d5ae4d77ecd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb2dd4ae1113e90f8c24c596dc230f1b96fa546d469e6457d9bd7d15653fb1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2dd4ae1113e90f8c24c596dc230f1b96fa546d469e6457d9bd7d15653fb1ec->enter($__internal_bb2dd4ae1113e90f8c24c596dc230f1b96fa546d469e6457d9bd7d15653fb1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb2dd4ae1113e90f8c24c596dc230f1b96fa546d469e6457d9bd7d15653fb1ec->leave($__internal_bb2dd4ae1113e90f8c24c596dc230f1b96fa546d469e6457d9bd7d15653fb1ec_prof);

        
        $__internal_4b39785b76e6d986052f4440148ddf7699a08103cce9bdcd1632d5ae4d77ecd2->leave($__internal_4b39785b76e6d986052f4440148ddf7699a08103cce9bdcd1632d5ae4d77ecd2_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ec7f9b9d94424cb443072fb9e78dded03a69b728710e27dee850d426e75d7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec7f9b9d94424cb443072fb9e78dded03a69b728710e27dee850d426e75d7ee->enter($__internal_8ec7f9b9d94424cb443072fb9e78dded03a69b728710e27dee850d426e75d7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5096a8839b847862da8d90efbbd8e5bf63f4e28dd2e7e69862577504e6aaebb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5096a8839b847862da8d90efbbd8e5bf63f4e28dd2e7e69862577504e6aaebb4->enter($__internal_5096a8839b847862da8d90efbbd8e5bf63f4e28dd2e7e69862577504e6aaebb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5096a8839b847862da8d90efbbd8e5bf63f4e28dd2e7e69862577504e6aaebb4->leave($__internal_5096a8839b847862da8d90efbbd8e5bf63f4e28dd2e7e69862577504e6aaebb4_prof);

        
        $__internal_8ec7f9b9d94424cb443072fb9e78dded03a69b728710e27dee850d426e75d7ee->leave($__internal_8ec7f9b9d94424cb443072fb9e78dded03a69b728710e27dee850d426e75d7ee_prof);

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
        return array (  303 => 100,  286 => 87,  260 => 69,  251 => 68,  234 => 6,  216 => 5,  202 => 112,  198 => 111,  194 => 110,  190 => 109,  186 => 108,  182 => 107,  178 => 106,  174 => 105,  170 => 104,  166 => 103,  162 => 102,  157 => 101,  155 => 100,  147 => 95,  138 => 88,  136 => 87,  133 => 86,  131 => 68,  108 => 48,  99 => 42,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
{% block javascripts %}{% endblock %}
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
</body>
</html>
", "layout.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\layout.html.twig");
    }
}

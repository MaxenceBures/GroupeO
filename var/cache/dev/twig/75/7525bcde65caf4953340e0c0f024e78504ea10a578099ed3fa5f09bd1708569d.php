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
        $__internal_52880bd5f6074a0ce3884cabe737fc4e4a9dce5df6a37b2a4ebba477c9e87aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52880bd5f6074a0ce3884cabe737fc4e4a9dce5df6a37b2a4ebba477c9e87aeb->enter($__internal_52880bd5f6074a0ce3884cabe737fc4e4a9dce5df6a37b2a4ebba477c9e87aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_411dfddb9d9db4ef5a632002bcbec1feea733f4950ff8395913976786d35077d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411dfddb9d9db4ef5a632002bcbec1feea733f4950ff8395913976786d35077d->enter($__internal_411dfddb9d9db4ef5a632002bcbec1feea733f4950ff8395913976786d35077d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        <img src=\"./../../../Ressources/Images/Logo_Claas.png\" />
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
        
        $__internal_52880bd5f6074a0ce3884cabe737fc4e4a9dce5df6a37b2a4ebba477c9e87aeb->leave($__internal_52880bd5f6074a0ce3884cabe737fc4e4a9dce5df6a37b2a4ebba477c9e87aeb_prof);

        
        $__internal_411dfddb9d9db4ef5a632002bcbec1feea733f4950ff8395913976786d35077d->leave($__internal_411dfddb9d9db4ef5a632002bcbec1feea733f4950ff8395913976786d35077d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0b30ea14d32aae38aa4383a2b7aebbe2ae45b75363939d6196715a59f33bd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b30ea14d32aae38aa4383a2b7aebbe2ae45b75363939d6196715a59f33bd74->enter($__internal_e0b30ea14d32aae38aa4383a2b7aebbe2ae45b75363939d6196715a59f33bd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd60eb45d77c4dd093a6aec433a91a1198737f65b459da98b21bc5dda5d439f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd60eb45d77c4dd093a6aec433a91a1198737f65b459da98b21bc5dda5d439f9->enter($__internal_dd60eb45d77c4dd093a6aec433a91a1198737f65b459da98b21bc5dda5d439f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd60eb45d77c4dd093a6aec433a91a1198737f65b459da98b21bc5dda5d439f9->leave($__internal_dd60eb45d77c4dd093a6aec433a91a1198737f65b459da98b21bc5dda5d439f9_prof);

        
        $__internal_e0b30ea14d32aae38aa4383a2b7aebbe2ae45b75363939d6196715a59f33bd74->leave($__internal_e0b30ea14d32aae38aa4383a2b7aebbe2ae45b75363939d6196715a59f33bd74_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0813072981259294a69724a31c7899c02bbfacaeb719866949f54cd12a2db8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0813072981259294a69724a31c7899c02bbfacaeb719866949f54cd12a2db8a5->enter($__internal_0813072981259294a69724a31c7899c02bbfacaeb719866949f54cd12a2db8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8bb9360669b5a03734e4241b5c5e37817b4e86e736c36d1555128669855140f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bb9360669b5a03734e4241b5c5e37817b4e86e736c36d1555128669855140f->enter($__internal_d8bb9360669b5a03734e4241b5c5e37817b4e86e736c36d1555128669855140f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8bb9360669b5a03734e4241b5c5e37817b4e86e736c36d1555128669855140f->leave($__internal_d8bb9360669b5a03734e4241b5c5e37817b4e86e736c36d1555128669855140f_prof);

        
        $__internal_0813072981259294a69724a31c7899c02bbfacaeb719866949f54cd12a2db8a5->leave($__internal_0813072981259294a69724a31c7899c02bbfacaeb719866949f54cd12a2db8a5_prof);

    }

    // line 68
    public function block_aside($context, array $blocks = array())
    {
        $__internal_68b82dbab6f609d801033d631031c8eb9635d881cc696dd989878a791ad366b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b82dbab6f609d801033d631031c8eb9635d881cc696dd989878a791ad366b5->enter($__internal_68b82dbab6f609d801033d631031c8eb9635d881cc696dd989878a791ad366b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_956ce91225a1a010991d0f17d1d1cfa27ff5a04c14cdce5e3fd8380cf768f327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956ce91225a1a010991d0f17d1d1cfa27ff5a04c14cdce5e3fd8380cf768f327->enter($__internal_956ce91225a1a010991d0f17d1d1cfa27ff5a04c14cdce5e3fd8380cf768f327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_956ce91225a1a010991d0f17d1d1cfa27ff5a04c14cdce5e3fd8380cf768f327->leave($__internal_956ce91225a1a010991d0f17d1d1cfa27ff5a04c14cdce5e3fd8380cf768f327_prof);

        
        $__internal_68b82dbab6f609d801033d631031c8eb9635d881cc696dd989878a791ad366b5->leave($__internal_68b82dbab6f609d801033d631031c8eb9635d881cc696dd989878a791ad366b5_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab0f9764fcff49119112adfa572ce00a8223793c484d4af862397966807c13ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0f9764fcff49119112adfa572ce00a8223793c484d4af862397966807c13ef->enter($__internal_ab0f9764fcff49119112adfa572ce00a8223793c484d4af862397966807c13ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6355bf36aca02d417fe185dad42be23422efe988c6f624ea7890085db827009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6355bf36aca02d417fe185dad42be23422efe988c6f624ea7890085db827009->enter($__internal_c6355bf36aca02d417fe185dad42be23422efe988c6f624ea7890085db827009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6355bf36aca02d417fe185dad42be23422efe988c6f624ea7890085db827009->leave($__internal_c6355bf36aca02d417fe185dad42be23422efe988c6f624ea7890085db827009_prof);

        
        $__internal_ab0f9764fcff49119112adfa572ce00a8223793c484d4af862397966807c13ef->leave($__internal_ab0f9764fcff49119112adfa572ce00a8223793c484d4af862397966807c13ef_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4aa681bfb05f3c11b3d15d34bb76d547db69c74a88985a299acc3324e3314b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa681bfb05f3c11b3d15d34bb76d547db69c74a88985a299acc3324e3314b02->enter($__internal_4aa681bfb05f3c11b3d15d34bb76d547db69c74a88985a299acc3324e3314b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a119a3b8e47135f73a6d8f16e7dfd6255c80b157671f5fbbf3c8acbb3024688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a119a3b8e47135f73a6d8f16e7dfd6255c80b157671f5fbbf3c8acbb3024688->enter($__internal_2a119a3b8e47135f73a6d8f16e7dfd6255c80b157671f5fbbf3c8acbb3024688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a119a3b8e47135f73a6d8f16e7dfd6255c80b157671f5fbbf3c8acbb3024688->leave($__internal_2a119a3b8e47135f73a6d8f16e7dfd6255c80b157671f5fbbf3c8acbb3024688_prof);

        
        $__internal_4aa681bfb05f3c11b3d15d34bb76d547db69c74a88985a299acc3324e3314b02->leave($__internal_4aa681bfb05f3c11b3d15d34bb76d547db69c74a88985a299acc3324e3314b02_prof);

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
        return array (  300 => 100,  283 => 87,  257 => 69,  248 => 68,  231 => 6,  213 => 5,  199 => 112,  195 => 111,  191 => 110,  187 => 109,  183 => 108,  179 => 107,  175 => 106,  171 => 105,  167 => 104,  163 => 103,  159 => 102,  154 => 101,  152 => 100,  138 => 88,  136 => 87,  133 => 86,  131 => 68,  108 => 48,  99 => 42,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
        <img src=\"./../../../Ressources/Images/Logo_Claas.png\" />
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

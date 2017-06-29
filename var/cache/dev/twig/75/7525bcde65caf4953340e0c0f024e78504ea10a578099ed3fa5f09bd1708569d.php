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
        $__internal_f1f2a2f6f5bd1848846c6804fdd5dc5e4e537edb068aabb944375cd9444e86de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f2a2f6f5bd1848846c6804fdd5dc5e4e537edb068aabb944375cd9444e86de->enter($__internal_f1f2a2f6f5bd1848846c6804fdd5dc5e4e537edb068aabb944375cd9444e86de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_979018c7db66a44d974054afe6103f6414cd18f05c7b0233e262d147202d6cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979018c7db66a44d974054afe6103f6414cd18f05c7b0233e262d147202d6cdb->enter($__internal_979018c7db66a44d974054afe6103f6414cd18f05c7b0233e262d147202d6cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "</body>
</html>
";
        
        $__internal_f1f2a2f6f5bd1848846c6804fdd5dc5e4e537edb068aabb944375cd9444e86de->leave($__internal_f1f2a2f6f5bd1848846c6804fdd5dc5e4e537edb068aabb944375cd9444e86de_prof);

        
        $__internal_979018c7db66a44d974054afe6103f6414cd18f05c7b0233e262d147202d6cdb->leave($__internal_979018c7db66a44d974054afe6103f6414cd18f05c7b0233e262d147202d6cdb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10ba47edfa03f82b87b787dc06ee83f41d4e7c89a7a013dd355504cfb5f9a48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ba47edfa03f82b87b787dc06ee83f41d4e7c89a7a013dd355504cfb5f9a48f->enter($__internal_10ba47edfa03f82b87b787dc06ee83f41d4e7c89a7a013dd355504cfb5f9a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_351cbb4c4baa91e2f43c7b4944fbfc97c216d62724498a37e97adb3aac185ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351cbb4c4baa91e2f43c7b4944fbfc97c216d62724498a37e97adb3aac185ef3->enter($__internal_351cbb4c4baa91e2f43c7b4944fbfc97c216d62724498a37e97adb3aac185ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_351cbb4c4baa91e2f43c7b4944fbfc97c216d62724498a37e97adb3aac185ef3->leave($__internal_351cbb4c4baa91e2f43c7b4944fbfc97c216d62724498a37e97adb3aac185ef3_prof);

        
        $__internal_10ba47edfa03f82b87b787dc06ee83f41d4e7c89a7a013dd355504cfb5f9a48f->leave($__internal_10ba47edfa03f82b87b787dc06ee83f41d4e7c89a7a013dd355504cfb5f9a48f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbd941dc0164071fe0062749bd4bce0cbca8fc7620e977d063db7b15eaf0586f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd941dc0164071fe0062749bd4bce0cbca8fc7620e977d063db7b15eaf0586f->enter($__internal_bbd941dc0164071fe0062749bd4bce0cbca8fc7620e977d063db7b15eaf0586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_01c21b56ccabba763d9f9d18c5f0c2814fa3c0095325b25f6a310e30684916a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c21b56ccabba763d9f9d18c5f0c2814fa3c0095325b25f6a310e30684916a2->enter($__internal_01c21b56ccabba763d9f9d18c5f0c2814fa3c0095325b25f6a310e30684916a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01c21b56ccabba763d9f9d18c5f0c2814fa3c0095325b25f6a310e30684916a2->leave($__internal_01c21b56ccabba763d9f9d18c5f0c2814fa3c0095325b25f6a310e30684916a2_prof);

        
        $__internal_bbd941dc0164071fe0062749bd4bce0cbca8fc7620e977d063db7b15eaf0586f->leave($__internal_bbd941dc0164071fe0062749bd4bce0cbca8fc7620e977d063db7b15eaf0586f_prof);

    }

    // line 73
    public function block_aside($context, array $blocks = array())
    {
        $__internal_0afa1143cbf790b6c7850069f97448ffed074e36c132249bf960a0795912b562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afa1143cbf790b6c7850069f97448ffed074e36c132249bf960a0795912b562->enter($__internal_0afa1143cbf790b6c7850069f97448ffed074e36c132249bf960a0795912b562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_b7c24b7b99157051d347fe4a4bae8f873154f9058ca84fa11b113063366a04ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c24b7b99157051d347fe4a4bae8f873154f9058ca84fa11b113063366a04ec->enter($__internal_b7c24b7b99157051d347fe4a4bae8f873154f9058ca84fa11b113063366a04ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_b7c24b7b99157051d347fe4a4bae8f873154f9058ca84fa11b113063366a04ec->leave($__internal_b7c24b7b99157051d347fe4a4bae8f873154f9058ca84fa11b113063366a04ec_prof);

        
        $__internal_0afa1143cbf790b6c7850069f97448ffed074e36c132249bf960a0795912b562->leave($__internal_0afa1143cbf790b6c7850069f97448ffed074e36c132249bf960a0795912b562_prof);

    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bce632bebc149ad5387991c45bb5e179dc6307947a8b8c9ec433995fde4e8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bce632bebc149ad5387991c45bb5e179dc6307947a8b8c9ec433995fde4e8b9->enter($__internal_6bce632bebc149ad5387991c45bb5e179dc6307947a8b8c9ec433995fde4e8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9fa60f6c49b17ca23415566b06f37ce7f3367de53ff615602ee429ca9a96d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fa60f6c49b17ca23415566b06f37ce7f3367de53ff615602ee429ca9a96d9a->enter($__internal_e9fa60f6c49b17ca23415566b06f37ce7f3367de53ff615602ee429ca9a96d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9fa60f6c49b17ca23415566b06f37ce7f3367de53ff615602ee429ca9a96d9a->leave($__internal_e9fa60f6c49b17ca23415566b06f37ce7f3367de53ff615602ee429ca9a96d9a_prof);

        
        $__internal_6bce632bebc149ad5387991c45bb5e179dc6307947a8b8c9ec433995fde4e8b9->leave($__internal_6bce632bebc149ad5387991c45bb5e179dc6307947a8b8c9ec433995fde4e8b9_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e40ae319c7434ed4de6fbf2b21f9a5fe24184b5f79195e7c7d71ff10e5c47c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e40ae319c7434ed4de6fbf2b21f9a5fe24184b5f79195e7c7d71ff10e5c47c5->enter($__internal_6e40ae319c7434ed4de6fbf2b21f9a5fe24184b5f79195e7c7d71ff10e5c47c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f916eff6b6fe66aa77fb4a177452b8d6c41d7c2e2f9fa1571c18c82617b457e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f916eff6b6fe66aa77fb4a177452b8d6c41d7c2e2f9fa1571c18c82617b457e->enter($__internal_5f916eff6b6fe66aa77fb4a177452b8d6c41d7c2e2f9fa1571c18c82617b457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f916eff6b6fe66aa77fb4a177452b8d6c41d7c2e2f9fa1571c18c82617b457e->leave($__internal_5f916eff6b6fe66aa77fb4a177452b8d6c41d7c2e2f9fa1571c18c82617b457e_prof);

        
        $__internal_6e40ae319c7434ed4de6fbf2b21f9a5fe24184b5f79195e7c7d71ff10e5c47c5->leave($__internal_6e40ae319c7434ed4de6fbf2b21f9a5fe24184b5f79195e7c7d71ff10e5c47c5_prof);

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
        return array (  336 => 124,  319 => 95,  293 => 74,  284 => 73,  267 => 16,  249 => 5,  237 => 125,  235 => 124,  230 => 122,  226 => 121,  222 => 120,  218 => 119,  214 => 118,  210 => 117,  206 => 116,  202 => 115,  198 => 114,  194 => 113,  190 => 112,  186 => 111,  182 => 110,  178 => 109,  174 => 108,  166 => 103,  157 => 96,  155 => 95,  150 => 92,  147 => 91,  144 => 73,  142 => 72,  118 => 51,  109 => 45,  79 => 17,  77 => 16,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
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

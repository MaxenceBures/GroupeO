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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d70e5d49060845c4d7c765ca7e5cb7e531daed44f2dd6374dfc02b18ea96460c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70e5d49060845c4d7c765ca7e5cb7e531daed44f2dd6374dfc02b18ea96460c->enter($__internal_d70e5d49060845c4d7c765ca7e5cb7e531daed44f2dd6374dfc02b18ea96460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_ec44cca62e18527e8a0fe57af33fd4d8fb613356000aaaaf634bebbf81c41665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec44cca62e18527e8a0fe57af33fd4d8fb613356000aaaaf634bebbf81c41665->enter($__internal_ec44cca62e18527e8a0fe57af33fd4d8fb613356000aaaaf634bebbf81c41665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/matrix-style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/matrix-media.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
    <!--<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/jquery.gritter.css"), "html", null, true);
        echo "\" />-->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/toastr.min.css"), "html", null, true);
        echo "\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id=\"header\">
        <h1><a href=\"dashboard.html\">Matrix Admin</a></h1>
    </div>


    <div id=\"user-nav\" class=\"navbar navbar-inverse\">
        <ul class=\"nav\">

            <li class=\"\"><a title=\"\" href=\"./login.html\"><i class=\"icon icon-share-alt\"></i> <span class=\"text\">Logout</span></a></li>
        </ul>
    </div>
    <!--close-top-Header-menu-->
    <!--start-top-serch-->

    <!--close-top-serch-->
    <!--sidebar-menu-->
    <div id=\"sidebar\"><a href=\"#\" class=\"visible-phone\"><i class=\"icon icon-home\"></i> Dashboard</a>
        <ul>
            <li class=\"active\"><a href=\"index.html\"><i class=\"icon icon-home\"></i> <span>Dashboard</span></a> </li>
            <li> <a href=\"charts.html\"><i class=\"icon icon-signal\"></i> <span>Charts &amp; graphs</span></a> </li>

            <li class=\"submenu\"> <a href=\"#\"><i class=\"icon icon-file\"></i> <span>Addons</span> <span class=\"label label-important\">5</span></a>
                <ul>
                    <li><a href=\"index2.html\">Dashboard2</a></li>
                    <li><a href=\"gallery.html\">Gallery</a></li>
                    <li><a href=\"calendar.html\">Calendar</a></li>
                    <li><a href=\"invoice.html\">Invoice</a></li>
                    <li><a href=\"chat.html\">Chat option</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!--sidebar-menu-->

    <!--main-container-part-->
    <div id=\"content\">
        <!--breadcrumbs-->
        <div id=\"content-header\">
            <div id=\"breadcrumb\"> <a href=\"./../\" class=\"tip-bottom\" data-original-title=\"Go to Home\"><i class=\"icon-home\"></i> Accueil</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <!--<div class=\"container-fluid\">-->

    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
<!--</div>-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class=\"row-fluid\">
    <div id=\"footer\" class=\"span12\"> 2013 &copy; Matrix Admin. Brought to you by <a href=\"http://themedesigner.in\">Themedesigner.in</a> </div>
</div>
</body>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.ui.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.dashboard.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>-->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.interface.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.chat.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.form_validation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.wizard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.uniform.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.popover.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/matrix.tables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/toastr.min.js"), "html", null, true);
        echo "\"></script>

</html>
";
        
        $__internal_d70e5d49060845c4d7c765ca7e5cb7e531daed44f2dd6374dfc02b18ea96460c->leave($__internal_d70e5d49060845c4d7c765ca7e5cb7e531daed44f2dd6374dfc02b18ea96460c_prof);

        
        $__internal_ec44cca62e18527e8a0fe57af33fd4d8fb613356000aaaaf634bebbf81c41665->leave($__internal_ec44cca62e18527e8a0fe57af33fd4d8fb613356000aaaaf634bebbf81c41665_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f93540d6f5e33d8ba0fc8ba529d88d08ad08e4bc87c26f796fcd3e93cbc3e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f93540d6f5e33d8ba0fc8ba529d88d08ad08e4bc87c26f796fcd3e93cbc3e77->enter($__internal_5f93540d6f5e33d8ba0fc8ba529d88d08ad08e4bc87c26f796fcd3e93cbc3e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b18cacd5d30c8d295ff22865d09e126272d3d30c5bae0cad58b22e4b254587d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18cacd5d30c8d295ff22865d09e126272d3d30c5bae0cad58b22e4b254587d7->enter($__internal_b18cacd5d30c8d295ff22865d09e126272d3d30c5bae0cad58b22e4b254587d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b18cacd5d30c8d295ff22865d09e126272d3d30c5bae0cad58b22e4b254587d7->leave($__internal_b18cacd5d30c8d295ff22865d09e126272d3d30c5bae0cad58b22e4b254587d7_prof);

        
        $__internal_5f93540d6f5e33d8ba0fc8ba529d88d08ad08e4bc87c26f796fcd3e93cbc3e77->leave($__internal_5f93540d6f5e33d8ba0fc8ba529d88d08ad08e4bc87c26f796fcd3e93cbc3e77_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3f2478bd3d6b7f6bec569b56665af0c6b86adb4a524b630291e66adac21937d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f2478bd3d6b7f6bec569b56665af0c6b86adb4a524b630291e66adac21937d->enter($__internal_f3f2478bd3d6b7f6bec569b56665af0c6b86adb4a524b630291e66adac21937d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0fd842242719fb6cd03fe637e180f26b5ddda104c1aab38b8d8fcf226ffb1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fd842242719fb6cd03fe637e180f26b5ddda104c1aab38b8d8fcf226ffb1a4->enter($__internal_e0fd842242719fb6cd03fe637e180f26b5ddda104c1aab38b8d8fcf226ffb1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0fd842242719fb6cd03fe637e180f26b5ddda104c1aab38b8d8fcf226ffb1a4->leave($__internal_e0fd842242719fb6cd03fe637e180f26b5ddda104c1aab38b8d8fcf226ffb1a4_prof);

        
        $__internal_f3f2478bd3d6b7f6bec569b56665af0c6b86adb4a524b630291e66adac21937d->leave($__internal_f3f2478bd3d6b7f6bec569b56665af0c6b86adb4a524b630291e66adac21937d_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_a542c166e71a3da49d8c4ba1bce96f2fc9702ea0d5ed631a4f8d2c9e9e446751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a542c166e71a3da49d8c4ba1bce96f2fc9702ea0d5ed631a4f8d2c9e9e446751->enter($__internal_a542c166e71a3da49d8c4ba1bce96f2fc9702ea0d5ed631a4f8d2c9e9e446751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a70f9843ecc7aa95c3923c37915c010c5e28945b7c281c6514b7d9b0975d1654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70f9843ecc7aa95c3923c37915c010c5e28945b7c281c6514b7d9b0975d1654->enter($__internal_a70f9843ecc7aa95c3923c37915c010c5e28945b7c281c6514b7d9b0975d1654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a70f9843ecc7aa95c3923c37915c010c5e28945b7c281c6514b7d9b0975d1654->leave($__internal_a70f9843ecc7aa95c3923c37915c010c5e28945b7c281c6514b7d9b0975d1654_prof);

        
        $__internal_a542c166e71a3da49d8c4ba1bce96f2fc9702ea0d5ed631a4f8d2c9e9e446751->leave($__internal_a542c166e71a3da49d8c4ba1bce96f2fc9702ea0d5ed631a4f8d2c9e9e446751_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26a067a51b85ef71e78c659af6db528263e3e84caf7c69cf9e67d89e3ac25dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a067a51b85ef71e78c659af6db528263e3e84caf7c69cf9e67d89e3ac25dbb->enter($__internal_26a067a51b85ef71e78c659af6db528263e3e84caf7c69cf9e67d89e3ac25dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_928f35b5fc8d27e21b7a6fbe448c21b6cdad30e76ab460fb344b95183bfa3ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928f35b5fc8d27e21b7a6fbe448c21b6cdad30e76ab460fb344b95183bfa3ddf->enter($__internal_928f35b5fc8d27e21b7a6fbe448c21b6cdad30e76ab460fb344b95183bfa3ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_928f35b5fc8d27e21b7a6fbe448c21b6cdad30e76ab460fb344b95183bfa3ddf->leave($__internal_928f35b5fc8d27e21b7a6fbe448c21b6cdad30e76ab460fb344b95183bfa3ddf_prof);

        
        $__internal_26a067a51b85ef71e78c659af6db528263e3e84caf7c69cf9e67d89e3ac25dbb->leave($__internal_26a067a51b85ef71e78c659af6db528263e3e84caf7c69cf9e67d89e3ac25dbb_prof);

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
        return array (  287 => 65,  270 => 64,  253 => 6,  235 => 5,  221 => 98,  217 => 97,  213 => 96,  209 => 95,  205 => 94,  201 => 93,  197 => 92,  193 => 91,  189 => 90,  185 => 89,  181 => 88,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  161 => 83,  157 => 82,  153 => 81,  149 => 80,  145 => 79,  141 => 78,  127 => 66,  125 => 65,  123 => 64,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/bootstrap-responsive.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/matrix-style.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/matrix-media.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('template/font-awesome/css/font-awesome.css') }}\" />
    <!--<link rel=\"stylesheet\" href=\"{{ asset('template/css/jquery.gritter.css') }}\" />-->
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/toastr.min.css') }}\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id=\"header\">
        <h1><a href=\"dashboard.html\">Matrix Admin</a></h1>
    </div>


    <div id=\"user-nav\" class=\"navbar navbar-inverse\">
        <ul class=\"nav\">

            <li class=\"\"><a title=\"\" href=\"./login.html\"><i class=\"icon icon-share-alt\"></i> <span class=\"text\">Logout</span></a></li>
        </ul>
    </div>
    <!--close-top-Header-menu-->
    <!--start-top-serch-->

    <!--close-top-serch-->
    <!--sidebar-menu-->
    <div id=\"sidebar\"><a href=\"#\" class=\"visible-phone\"><i class=\"icon icon-home\"></i> Dashboard</a>
        <ul>
            <li class=\"active\"><a href=\"index.html\"><i class=\"icon icon-home\"></i> <span>Dashboard</span></a> </li>
            <li> <a href=\"charts.html\"><i class=\"icon icon-signal\"></i> <span>Charts &amp; graphs</span></a> </li>

            <li class=\"submenu\"> <a href=\"#\"><i class=\"icon icon-file\"></i> <span>Addons</span> <span class=\"label label-important\">5</span></a>
                <ul>
                    <li><a href=\"index2.html\">Dashboard2</a></li>
                    <li><a href=\"gallery.html\">Gallery</a></li>
                    <li><a href=\"calendar.html\">Calendar</a></li>
                    <li><a href=\"invoice.html\">Invoice</a></li>
                    <li><a href=\"chat.html\">Chat option</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!--sidebar-menu-->

    <!--main-container-part-->
    <div id=\"content\">
        <!--breadcrumbs-->
        <div id=\"content-header\">
            <div id=\"breadcrumb\"> <a href=\"./../\" class=\"tip-bottom\" data-original-title=\"Go to Home\"><i class=\"icon-home\"></i> Accueil</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <!--<div class=\"container-fluid\">-->

    {% block body %}{% endblock %}
{% block javascripts %}{% endblock %}

<!--</div>-->
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class=\"row-fluid\">
    <div id=\"footer\" class=\"span12\"> 2013 &copy; Matrix Admin. Brought to you by <a href=\"http://themedesigner.in\">Themedesigner.in</a> </div>
</div>
</body>
<script src=\"{{ asset('template/js/excanvas.min.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.ui.custom.js') }}\"></script>
<script src=\"{{ asset('template/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.flot.min.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.peity.min.js') }}\"></script>
<script src=\"{{ asset('template/js/fullcalendar.min.js') }}\"></script>
<script src=\"{{ asset('template/js/matrix.js') }}\"></script>
<script src=\"{{ asset('template/js/matrix.dashboard.js') }}\"></script>
<!--<script src=\"{{ asset('template/js/jquery.gritter.min.js') }}\"></script>-->
<script src=\"{{ asset('template/js/matrix.interface.js') }}\"></script>
<script src=\"{{ asset('template/js/matrix.chat.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.validate.js') }}\"></script>
<script src=\"{{ asset('template/js/matrix.form_validation.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.wizard.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.uniform.js') }}\"></script>
<script src=\"{{ asset('template/js/matrix.popover.js') }}\"></script>
<script src=\"{{ asset('template/js/select2.min.js') }}\"></script>
<script src=\"{{ asset('template/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('template/js/matrix.tables.js') }}\"></script>
<script src=\"{{ asset('template/js/toastr.min.js') }}\"></script>

</html>
", "layout.html.twig", "C:\\wamp\\www\\GroupeO\\app\\Resources\\views\\layout.html.twig");
    }
}

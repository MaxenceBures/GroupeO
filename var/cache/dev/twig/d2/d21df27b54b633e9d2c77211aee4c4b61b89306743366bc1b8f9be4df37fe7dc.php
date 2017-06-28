<?php

/* FrontendBundle:Utilisateur:liste.html.twig */
class __TwigTemplate_01be5e8824f8b30d3fe441f8eb61f2f4d669af2548e4b7785b4728b657fd88d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "FrontendBundle:Utilisateur:liste.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_500a9a7ebea71b3549bf81b2ef34e692a03c8b7138f2c5370087da202e1811b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500a9a7ebea71b3549bf81b2ef34e692a03c8b7138f2c5370087da202e1811b3->enter($__internal_500a9a7ebea71b3549bf81b2ef34e692a03c8b7138f2c5370087da202e1811b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $__internal_93f5563255e1e40533e939f6ef966737b93d2cf53817468ad25288c9bf2b8d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f5563255e1e40533e939f6ef966737b93d2cf53817468ad25288c9bf2b8d6d->enter($__internal_93f5563255e1e40533e939f6ef966737b93d2cf53817468ad25288c9bf2b8d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500a9a7ebea71b3549bf81b2ef34e692a03c8b7138f2c5370087da202e1811b3->leave($__internal_500a9a7ebea71b3549bf81b2ef34e692a03c8b7138f2c5370087da202e1811b3_prof);

        
        $__internal_93f5563255e1e40533e939f6ef966737b93d2cf53817468ad25288c9bf2b8d6d->leave($__internal_93f5563255e1e40533e939f6ef966737b93d2cf53817468ad25288c9bf2b8d6d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7de2597b49474d1a2f4822ff5aba88e0511c1bd3433422a4868fa79546fe9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7de2597b49474d1a2f4822ff5aba88e0511c1bd3433422a4868fa79546fe9d8->enter($__internal_b7de2597b49474d1a2f4822ff5aba88e0511c1bd3433422a4868fa79546fe9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fea290c14c85e764cd157caa61c9d40acc40dffe799172bd389ab4f35224b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fea290c14c85e764cd157caa61c9d40acc40dffe799172bd389ab4f35224b89->enter($__internal_0fea290c14c85e764cd157caa61c9d40acc40dffe799172bd389ab4f35224b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <H1>Liste Utilisateur</H1>

    <div id=\"div_liste\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Liste</h3>
                <div class=\"box-body\">
                    <table id=\"liste_utilisateur\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Nom - Prénom</th>
                            <th>Mail</th>
                            <th>Role</th>
                            <th>Edition</th>
                        </tr>
                        </thead>
                        <tbody id=\"liste_utilisateur_ligne\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 22
            echo "                            <tr id=\"liste_utilisateur_ligne_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "\">
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "role", array()), "html", null, true);
            echo "</td>
                                <td><a class=\"click\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "\">Edit</a> <a class=\"supprimer\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "\">Supprimer</a> <a class=\"mail\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "\">Mail</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id=\"div_action\" style=\"margin-top: 20px; background-color: grey;\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Recherche</h3>
                <div class=\"box-body\">
                        <form action=\"#\" method=\"get\" class=\"form-horizontal\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <input class=\"form-control\" placeholder=\"Nom Prenom\" type=\"text\" id=\"input_nom\">
                                </div>
                                <div class=\"col-xs-5\">
                                    <input class=\"form-control\" placeholder=\"mail@eni-ecole.fr\" type=\"text\" id=\"input_mail\">
                                </div>
                            </div>
                            <div class=\"row\" style=\"margin-top: 30px;\">
                                <div class=\"col-xs-5\">
                                    <select id=\"select_role\" class=\"form-control select2\" style=\"width: 300px;\">
                                        <option>Administrateur</option>
                                        <option>Lecteur</option>
                                    </select>
                                </div>
                                <div class=\"col-xs-4\">
                                    <input class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" id=\"input_password\">
                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px;\">
                                <div class=\"col-xs-1\">
                                    <button id=\"save_datas\" class=\"btn btn-success\">Sauvegarder</button>
                                </div>
                                <div class=\"col-xs-1\">
                                    <button id=\"clear_datas\" class=\"btn btn-danger\">Vider</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_0fea290c14c85e764cd157caa61c9d40acc40dffe799172bd389ab4f35224b89->leave($__internal_0fea290c14c85e764cd157caa61c9d40acc40dffe799172bd389ab4f35224b89_prof);

        
        $__internal_b7de2597b49474d1a2f4822ff5aba88e0511c1bd3433422a4868fa79546fe9d8->leave($__internal_b7de2597b49474d1a2f4822ff5aba88e0511c1bd3433422a4868fa79546fe9d8_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31ad7f67dac77c5da30b070ce1adc37668e5e422dc0f19e1593f37aa339c5d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ad7f67dac77c5da30b070ce1adc37668e5e422dc0f19e1593f37aa339c5d25->enter($__internal_31ad7f67dac77c5da30b070ce1adc37668e5e422dc0f19e1593f37aa339c5d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ed08c8bacdf041a5ec78ee7fe0546a0995c69b3ac6b3b3294592a444e54a123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed08c8bacdf041a5ec78ee7fe0546a0995c69b3ac6b3b3294592a444e54a123->enter($__internal_1ed08c8bacdf041a5ec78ee7fe0546a0995c69b3ac6b3b3294592a444e54a123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/utilisateur/liste.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1ed08c8bacdf041a5ec78ee7fe0546a0995c69b3ac6b3b3294592a444e54a123->leave($__internal_1ed08c8bacdf041a5ec78ee7fe0546a0995c69b3ac6b3b3294592a444e54a123_prof);

        
        $__internal_31ad7f67dac77c5da30b070ce1adc37668e5e422dc0f19e1593f37aa339c5d25->leave($__internal_31ad7f67dac77c5da30b070ce1adc37668e5e422dc0f19e1593f37aa339c5d25_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Utilisateur:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 79,  160 => 78,  103 => 29,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  73 => 22,  69 => 21,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    <H1>Liste Utilisateur</H1>

    <div id=\"div_liste\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Liste</h3>
                <div class=\"box-body\">
                    <table id=\"liste_utilisateur\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Nom - Prénom</th>
                            <th>Mail</th>
                            <th>Role</th>
                            <th>Edition</th>
                        </tr>
                        </thead>
                        <tbody id=\"liste_utilisateur_ligne\">
                        {% for utilisateur in utilisateurs %}
                            <tr id=\"liste_utilisateur_ligne_{{ utilisateur.id }}\">
                                <td>{{ utilisateur.name }}</td>
                                <td>{{ utilisateur.email }}</td>
                                <td>{{ utilisateur.role }}</td>
                                <td><a class=\"click\" value=\"{{ utilisateur.id }}\">Edit</a> <a class=\"supprimer\" value=\"{{ utilisateur.id }}\">Supprimer</a> <a class=\"mail\" value=\"{{ utilisateur.id }}\">Mail</a></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id=\"div_action\" style=\"margin-top: 20px; background-color: grey;\">
        <div class=\"box box-default\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Recherche</h3>
                <div class=\"box-body\">
                        <form action=\"#\" method=\"get\" class=\"form-horizontal\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <input class=\"form-control\" placeholder=\"Nom Prenom\" type=\"text\" id=\"input_nom\">
                                </div>
                                <div class=\"col-xs-5\">
                                    <input class=\"form-control\" placeholder=\"mail@eni-ecole.fr\" type=\"text\" id=\"input_mail\">
                                </div>
                            </div>
                            <div class=\"row\" style=\"margin-top: 30px;\">
                                <div class=\"col-xs-5\">
                                    <select id=\"select_role\" class=\"form-control select2\" style=\"width: 300px;\">
                                        <option>Administrateur</option>
                                        <option>Lecteur</option>
                                    </select>
                                </div>
                                <div class=\"col-xs-4\">
                                    <input class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" id=\"input_password\">
                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px;\">
                                <div class=\"col-xs-1\">
                                    <button id=\"save_datas\" class=\"btn btn-success\">Sauvegarder</button>
                                </div>
                                <div class=\"col-xs-1\">
                                    <button id=\"clear_datas\" class=\"btn btn-danger\">Vider</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('Js/utilisateur/liste.js') }}\"></script>
{% endblock %}", "FrontendBundle:Utilisateur:liste.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Utilisateur/liste.html.twig");
    }
}

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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63e5c87157dab0235492d18f8ad657799f2ba0c53b9f46af818f0388cfd3d74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e5c87157dab0235492d18f8ad657799f2ba0c53b9f46af818f0388cfd3d74d->enter($__internal_63e5c87157dab0235492d18f8ad657799f2ba0c53b9f46af818f0388cfd3d74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $__internal_6c3b04c81ea8c2e5cc2be3fd4fcf8c3eebe6a0e94589f441732f4115a82dee6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3b04c81ea8c2e5cc2be3fd4fcf8c3eebe6a0e94589f441732f4115a82dee6a->enter($__internal_6c3b04c81ea8c2e5cc2be3fd4fcf8c3eebe6a0e94589f441732f4115a82dee6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e5c87157dab0235492d18f8ad657799f2ba0c53b9f46af818f0388cfd3d74d->leave($__internal_63e5c87157dab0235492d18f8ad657799f2ba0c53b9f46af818f0388cfd3d74d_prof);

        
        $__internal_6c3b04c81ea8c2e5cc2be3fd4fcf8c3eebe6a0e94589f441732f4115a82dee6a->leave($__internal_6c3b04c81ea8c2e5cc2be3fd4fcf8c3eebe6a0e94589f441732f4115a82dee6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e596014d71ec55df34b50d9fc3e26a9aea1e014862d10666c7d686358a8aa20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e596014d71ec55df34b50d9fc3e26a9aea1e014862d10666c7d686358a8aa20a->enter($__internal_e596014d71ec55df34b50d9fc3e26a9aea1e014862d10666c7d686358a8aa20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8054f13f1bc9d48a4c47e8a8515048c9c39568c86c2400b799fe981e2da44e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8054f13f1bc9d48a4c47e8a8515048c9c39568c86c2400b799fe981e2da44e5d->enter($__internal_8054f13f1bc9d48a4c47e8a8515048c9c39568c86c2400b799fe981e2da44e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/utilisateur/liste.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8054f13f1bc9d48a4c47e8a8515048c9c39568c86c2400b799fe981e2da44e5d->leave($__internal_8054f13f1bc9d48a4c47e8a8515048c9c39568c86c2400b799fe981e2da44e5d_prof);

        
        $__internal_e596014d71ec55df34b50d9fc3e26a9aea1e014862d10666c7d686358a8aa20a->leave($__internal_e596014d71ec55df34b50d9fc3e26a9aea1e014862d10666c7d686358a8aa20a_prof);

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
        return array (  151 => 76,  102 => 29,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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

    <script src=\"{{ asset('Js/utilisateur/liste.js') }}\"></script>

{% endblock %}", "FrontendBundle:Utilisateur:liste.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Utilisateur/liste.html.twig");
    }
}

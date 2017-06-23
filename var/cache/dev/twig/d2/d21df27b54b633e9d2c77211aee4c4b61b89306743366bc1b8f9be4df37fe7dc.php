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
        $__internal_c4917f8b27fe9ff739fe936acd5b54d793922a35f6496e0bbeea787d0a34d899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4917f8b27fe9ff739fe936acd5b54d793922a35f6496e0bbeea787d0a34d899->enter($__internal_c4917f8b27fe9ff739fe936acd5b54d793922a35f6496e0bbeea787d0a34d899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $__internal_7b4e1ae761669e197ab45bd631a897bf31af8329d73bee48b0005bd59686f907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4e1ae761669e197ab45bd631a897bf31af8329d73bee48b0005bd59686f907->enter($__internal_7b4e1ae761669e197ab45bd631a897bf31af8329d73bee48b0005bd59686f907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4917f8b27fe9ff739fe936acd5b54d793922a35f6496e0bbeea787d0a34d899->leave($__internal_c4917f8b27fe9ff739fe936acd5b54d793922a35f6496e0bbeea787d0a34d899_prof);

        
        $__internal_7b4e1ae761669e197ab45bd631a897bf31af8329d73bee48b0005bd59686f907->leave($__internal_7b4e1ae761669e197ab45bd631a897bf31af8329d73bee48b0005bd59686f907_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fac222adc267eda04f712b4aab6a41a30dfcebb5aa0521dd7b727c401e87d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fac222adc267eda04f712b4aab6a41a30dfcebb5aa0521dd7b727c401e87d2c->enter($__internal_1fac222adc267eda04f712b4aab6a41a30dfcebb5aa0521dd7b727c401e87d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f10dc8f59440a810f01eb9a38df6e79561335d4403f54f7fa0d78e3f50fe746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f10dc8f59440a810f01eb9a38df6e79561335d4403f54f7fa0d78e3f50fe746->enter($__internal_6f10dc8f59440a810f01eb9a38df6e79561335d4403f54f7fa0d78e3f50fe746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <H1>Liste Utilisateur</H1>


    <!--<div style=\"height: 100px;width: 100px;\"></div>-->
    <div id=\"div_liste\">
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 20
            echo "                <tr id=\"liste_utilisateur_ligne_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "\">
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "role", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"click\" value=\"";
            // line 24
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
        // line 27
        echo "            </tbody>
        </table>
    </div>

    <div id=\"div_action\" style=\"margin-top: 100px; background-color: grey;\">

        <div class=\"widget-box\">
            <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-align-justify\"></i> </span>
                <h5>Ajouter/Modifier</h5>
            </div>
            <div class=\"widget-content nopadding\">
                <form action=\"#\" method=\"get\" class=\"form-horizontal\">
                    <table>
                        <tr>
                            <td>
                                Nom Prenom
                                <input style=\"margin-left: 10px\" class=\"span8\" placeholder=\"Nom Prenom\" type=\"text\" id=\"input_nom\">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Mail
                                <input style=\"margin-left: 10px\" class=\"span5\" placeholder=\"mail@eni-ecole.fr\" type=\"text\" id=\"input_mail\">
                            </td>
                            <td> </td>
                            <td>
                                Rôle
                                <select id=\"select_role\">
                                    <option>Administrateur</option>
                                    <option>Lecteur</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mot de passe <input class=\"span4\" placeholder=\"Mot de passe\" type=\"password\" id=\"input_password\"></td>
                        </tr>
                        <tr>
                            <td colspan=\"8\"></td>
                            <td>
                                <div class=\"form-actions\">
                                    <button id=\"save_datas\" class=\"btn btn-success\">Sauvegarder</button>
                                    <button id=\"clear_datas\" class=\"btn btn-danger\">Vider</button>
                                </div>
                            </td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Js/utilisateur/liste.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f10dc8f59440a810f01eb9a38df6e79561335d4403f54f7fa0d78e3f50fe746->leave($__internal_6f10dc8f59440a810f01eb9a38df6e79561335d4403f54f7fa0d78e3f50fe746_prof);

        
        $__internal_1fac222adc267eda04f712b4aab6a41a30dfcebb5aa0521dd7b727c401e87d2c->leave($__internal_1fac222adc267eda04f712b4aab6a41a30dfcebb5aa0521dd7b727c401e87d2c_prof);

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
        return array (  158 => 80,  154 => 79,  100 => 27,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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


    <!--<div style=\"height: 100px;width: 100px;\"></div>-->
    <div id=\"div_liste\">
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

    <div id=\"div_action\" style=\"margin-top: 100px; background-color: grey;\">

        <div class=\"widget-box\">
            <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-align-justify\"></i> </span>
                <h5>Ajouter/Modifier</h5>
            </div>
            <div class=\"widget-content nopadding\">
                <form action=\"#\" method=\"get\" class=\"form-horizontal\">
                    <table>
                        <tr>
                            <td>
                                Nom Prenom
                                <input style=\"margin-left: 10px\" class=\"span8\" placeholder=\"Nom Prenom\" type=\"text\" id=\"input_nom\">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Mail
                                <input style=\"margin-left: 10px\" class=\"span5\" placeholder=\"mail@eni-ecole.fr\" type=\"text\" id=\"input_mail\">
                            </td>
                            <td> </td>
                            <td>
                                Rôle
                                <select id=\"select_role\">
                                    <option>Administrateur</option>
                                    <option>Lecteur</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mot de passe <input class=\"span4\" placeholder=\"Mot de passe\" type=\"password\" id=\"input_password\"></td>
                        </tr>
                        <tr>
                            <td colspan=\"8\"></td>
                            <td>
                                <div class=\"form-actions\">
                                    <button id=\"save_datas\" class=\"btn btn-success\">Sauvegarder</button>
                                    <button id=\"clear_datas\" class=\"btn btn-danger\">Vider</button>
                                </div>
                            </td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('template/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('Js/utilisateur/liste.js') }}\"></script>

{% endblock %}", "FrontendBundle:Utilisateur:liste.html.twig", "C:\\wamp\\www\\GroupeO\\src\\FrontendBundle/Resources/views/Utilisateur/liste.html.twig");
    }
}

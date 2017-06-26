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
        $__internal_722abee0211a6348e069d3587dfac2d7f4bcf555777ac0cf707eb2d8d852ab05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722abee0211a6348e069d3587dfac2d7f4bcf555777ac0cf707eb2d8d852ab05->enter($__internal_722abee0211a6348e069d3587dfac2d7f4bcf555777ac0cf707eb2d8d852ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $__internal_5f80e95d8e66cc5cdde15fd93d03b63b08f31f2047d188009f2a7e0bcdda4e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f80e95d8e66cc5cdde15fd93d03b63b08f31f2047d188009f2a7e0bcdda4e35->enter($__internal_5f80e95d8e66cc5cdde15fd93d03b63b08f31f2047d188009f2a7e0bcdda4e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Utilisateur:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_722abee0211a6348e069d3587dfac2d7f4bcf555777ac0cf707eb2d8d852ab05->leave($__internal_722abee0211a6348e069d3587dfac2d7f4bcf555777ac0cf707eb2d8d852ab05_prof);

        
        $__internal_5f80e95d8e66cc5cdde15fd93d03b63b08f31f2047d188009f2a7e0bcdda4e35->leave($__internal_5f80e95d8e66cc5cdde15fd93d03b63b08f31f2047d188009f2a7e0bcdda4e35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9228f7ede5b6e2786b8d54c56d59102a3bad02d72e8e28f03b1e53c2b5572d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9228f7ede5b6e2786b8d54c56d59102a3bad02d72e8e28f03b1e53c2b5572d->enter($__internal_fe9228f7ede5b6e2786b8d54c56d59102a3bad02d72e8e28f03b1e53c2b5572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_386cf3f46a953e0b78e49518fa4399463c026114c24ec0b1e5a49c1298417ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386cf3f46a953e0b78e49518fa4399463c026114c24ec0b1e5a49c1298417ae0->enter($__internal_386cf3f46a953e0b78e49518fa4399463c026114c24ec0b1e5a49c1298417ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_386cf3f46a953e0b78e49518fa4399463c026114c24ec0b1e5a49c1298417ae0->leave($__internal_386cf3f46a953e0b78e49518fa4399463c026114c24ec0b1e5a49c1298417ae0_prof);

        
        $__internal_fe9228f7ede5b6e2786b8d54c56d59102a3bad02d72e8e28f03b1e53c2b5572d->leave($__internal_fe9228f7ede5b6e2786b8d54c56d59102a3bad02d72e8e28f03b1e53c2b5572d_prof);

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

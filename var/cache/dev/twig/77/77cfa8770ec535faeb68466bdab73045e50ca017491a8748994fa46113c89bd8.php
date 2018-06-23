<?php

/* FrontBundle:evennements:index.html.twig */
class __TwigTemplate_3ea14c023c9f4465db4872837b952bb20faaa936a9c54673f97232f68495022f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Liste des Evenements</h1>
    <div>
    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
            // line 8
            echo "
        <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_new");
            echo "\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
    ";
        }
        // line 11
        echo "    </div>
<div class=\"blog\"  style=\"margin-bottom:15px;margin-top:60px;\">
    <div  class=\"container\">

        <div  class=\"col-md-10 blog-header\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evennements"] ?? $this->getContext($context, "evennements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 17
            echo "                <div class=\"col-md-4 blog-top\" style=\"width:30%;border: solid 4px #B40486;margin-right:2px;padding:15px; border-width: medium\">
                    <div class=\"blog-in\">
                        <a href=\"#\">


                                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/annonceImage/no.png"), "html", null, true);
            echo "\" style=\"width:100%;height: 200px\">

                        </a>
                        <div align=\"center\" class=\"blog-grid\">
                            <h3 style=\"color:#B40486 \"> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "titre", array()), "html", null, true);
            echo "</h3>
                            <div class=\"date\">
                                <span class=\"date-in\"><i class=\"fa fa-calendar\"> </i>  ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evennement"], "dateDeb", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                <h4>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "lieu", array()), "html", null, true);
            echo "</h4>
                                <a href=\"#\" class=\"comments\"></a>
                                <div class=\"clearfix\"> </div>

                            </div>

                            <div class=\"more\">
                                <a class=\"btn btn-default\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_show", array("id" => $this->getAttribute($context["evennement"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\"> </i></a>
                                ";
            // line 37
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 38
                echo "
                                    <a class=\"btn btn-default\"  href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_edit", array("id" => $this->getAttribute($context["evennement"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"></i></a>

                                ";
            }
            // line 42
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        </div>
    </div>
</div>

    <div class=\"navigation text-center\">
        ";
        // line 53
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["evennements"] ?? $this->getContext($context, "evennements")));
        echo "
    </div>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 53,  132 => 47,  122 => 42,  116 => 39,  113 => 38,  111 => 37,  107 => 36,  97 => 29,  93 => 28,  88 => 26,  81 => 22,  74 => 17,  70 => 16,  63 => 11,  58 => 9,  55 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{#Salsabil' work #}
{% block body %}
    <h1>Liste des Evenements</h1>
    <div>
    {% if is_granted('ROLE_COM') %}

        <a href=\"{{ path('evennements_new') }}\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
    {% endif %}
    </div>
<div class=\"blog\"  style=\"margin-bottom:15px;margin-top:60px;\">
    <div  class=\"container\">

        <div  class=\"col-md-10 blog-header\">
            {% for evennement in evennements %}
                <div class=\"col-md-4 blog-top\" style=\"width:30%;border: solid 4px #B40486;margin-right:2px;padding:15px; border-width: medium\">
                    <div class=\"blog-in\">
                        <a href=\"#\">


                                <img src=\"{{ asset('uploads/annonceImage/no.png') }}\" style=\"width:100%;height: 200px\">

                        </a>
                        <div align=\"center\" class=\"blog-grid\">
                            <h3 style=\"color:#B40486 \"> {{ evennement.titre  }}</h3>
                            <div class=\"date\">
                                <span class=\"date-in\"><i class=\"fa fa-calendar\"> </i>  {{ evennement.dateDeb|date('Y-m-d') }}</span>
                                <h4>{{ evennement.lieu }}</h4>
                                <a href=\"#\" class=\"comments\"></a>
                                <div class=\"clearfix\"> </div>

                            </div>

                            <div class=\"more\">
                                <a class=\"btn btn-default\" href=\"{{ path('evennements_show', { 'id': evennement.id }) }}\"> <i class=\"fa fa-eye\"> </i></a>
                                {% if is_granted('ROLE_COM') %}

                                    <a class=\"btn btn-default\"  href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\"> <i class=\"fa fa-edit\"></i></a>

                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}

        </div>
    </div>
</div>

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(evennements) }}
    </div>



    {#
    <h1>Liste des Evenements</h1>
    {% if is_granted('ROLE_COM') %}


        <a href=\"{{ path('evennements_new') }}\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
    {% endif %}
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr class=\"table-secondary\">

            <th>Titre</th>
            <th>Description</th>
            <th>Date debut</th>
            <th>Date fin</th>
            <th>Lieu</th>
            <th>Prix</th>
            <th>Etat</th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for evennement in evennements %}
            <tr>
                <td>{{ evennement.titre }}</td>
                <td>{{ evennement.description }}</td>
                <td>{% if evennement.dateDeb %}{{ evennement.dateDeb|date('Y-m-d') }}{% endif %}</td>
                <td>{% if evennement.dateFin %}{{ evennement.dateFin|date('Y-m-d') }}{% endif %}</td>
                <td>{{ evennement.lieu }}</td>
                <td>{{ evennement.prix }}</td>
                <td> {% if evennement.etat == 0 %} Non Disponible
                    {% elseif evennement.etat == 1 %} Disponible
                    {% endif %}
                </td>
                <td>

                    <a class=\"btn btn-default\" href=\"{{ path('evennements_show', { 'id': evennement.id }) }}\"> <i class=\"fa fa-eye\"> </i></a>
                    {% if is_granted('ROLE_COM') %}

                        <a class=\"btn btn-default\"  href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\"> <i class=\"fa fa-edit\"></i></a>

                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(evennements) }}
    </div>
    #}
{% endblock %}
", "FrontBundle:evennements:index.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/evennements/index.html.twig");
    }
}

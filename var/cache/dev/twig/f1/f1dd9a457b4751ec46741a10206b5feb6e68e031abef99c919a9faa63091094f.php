<?php

/* FrontBundle:evennements:index.html.twig */
class __TwigTemplate_f96cc9d306bbbdfe1adda44e9f93607bf0b2e7cdc2815cdeee91843a4d633fab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des Evenements</h1>
    <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_new");
        echo "\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
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
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evennements"]) || array_key_exists("evennements", $context) ? $context["evennements"] : (function () { throw new Twig_Error_Runtime('Variable "evennements" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["evennement"], "dateDeb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "dateDeb", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["evennement"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "lieu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "prix", array()), "html", null, true);
            echo "</td>
               <td> ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["evennement"], "etat", array()) == 0)) {
                echo " Non Disponible
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 30
$context["evennement"], "etat", array()) == 1)) {
                echo " Disponible
                ";
            }
            // line 32
            echo "               </td>
                <td>

                            <a class=\"btn btn-default\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_show", array("id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\"> </i></a>

                            <a class=\"btn btn-default\"  href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-edit\"></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    ";
        // line 45
        echo "    <div class=\"navigation text-center\">
        ";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["evennements"]) || array_key_exists("evennements", $context) ? $context["evennements"] : (function () { throw new Twig_Error_Runtime('Variable "evennements" does not exist.', 46, $this->source); })()));
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
        return array (  147 => 46,  144 => 45,  140 => 42,  129 => 37,  124 => 35,  119 => 32,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  96 => 26,  90 => 25,  86 => 24,  82 => 23,  79 => 22,  75 => 21,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{#Salsabil' work #}
{% block body %}
    <h1>Liste des Evenements</h1>
    <a href=\"{{ path('evennements_new') }}\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
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

                            <a class=\"btn btn-default\"  href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\"> <i class=\"fa fa-edit\"></i></a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {# display navigation #}
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(evennements) }}
    </div>
{% endblock %}
", "FrontBundle:evennements:index.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/evennements/index.html.twig");
    }
}

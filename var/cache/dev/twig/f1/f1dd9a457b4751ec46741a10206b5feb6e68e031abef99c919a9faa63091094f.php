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
";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COM")) {
            // line 6
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
            echo "
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'widget');
            echo "
    <a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_new");
            echo "\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
    ";
            // line 9
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'form_end');
            echo "
";
        }
        // line 11
        echo "    <table class=\"table table-striped\">
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evennements"]) || array_key_exists("evennements", $context) ? $context["evennements"] : (function () { throw new Twig_Error_Runtime('Variable "evennements" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["evennement"], "dateDeb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "dateDeb", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["evennement"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "lieu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "prix", array()), "html", null, true);
            echo "</td>
               <td> ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["evennement"], "etat", array()) == 0)) {
                echo " Non Disponible
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["evennement"], "etat", array()) == 1)) {
                echo " Disponible
                ";
            }
            // line 38
            echo "               </td>
                <td>

                            <a class=\"btn btn-default\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_show", array("id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\"> </i></a>
                    ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COM")) {
                // line 43
                echo "                    ";
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), 'form_start');
                echo "
                    ";
                // line 44
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), 'widget');
                echo "
                            <a class=\"btn btn-default\"  href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"></i></a>
                        ";
                // line 46
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
                echo "
                    ";
            }
            // line 48
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
    ";
        // line 54
        echo "    <div class=\"navigation text-center\">
        ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["evennements"]) || array_key_exists("evennements", $context) ? $context["evennements"] : (function () { throw new Twig_Error_Runtime('Variable "evennements" does not exist.', 55, $this->source); })()));
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
        return array (  182 => 55,  179 => 54,  175 => 51,  167 => 48,  162 => 46,  158 => 45,  154 => 44,  149 => 43,  147 => 42,  143 => 41,  138 => 38,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  115 => 32,  109 => 31,  105 => 30,  101 => 29,  98 => 28,  94 => 27,  76 => 11,  71 => 9,  67 => 8,  63 => 7,  58 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{#Salsabil' work #}
{% block body %}
    <h1>Liste des Evenements</h1>
{% if is_granted('ROLE_COM') %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
    <a href=\"{{ path('evennements_new') }}\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
    {{ form_end(form) }}
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
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                            <a class=\"btn btn-default\"  href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\"> <i class=\"fa fa-edit\"></i></a>
                        {{ form_end(form) }}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {# display navigation pagination #}
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(evennements) }}
    </div>
{% endblock %}
", "FrontBundle:evennements:index.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/evennements/index.html.twig");
    }
}

<?php

/* FrontBundle:evennements:index.html.twig */
class __TwigTemplate_509404cf0441983a79c1c344c3d26db2b5abf03c0cdf4a231478573d825e9070 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des Evenements</h1>
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
            // line 6
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
        <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_new");
            echo "\" class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"> </i>Nouvel evennement</a>
        ";
            // line 10
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        // line 12
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evennements"] ?? $this->getContext($context, "evennements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["evennement"], "dateDeb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evennement"], "dateDeb", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["evennement"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evennement"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "lieu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "prix", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 36
            if (($this->getAttribute($context["evennement"], "etat", array()) == 0)) {
                echo " Non Disponible
                    ";
            } elseif (($this->getAttribute(            // line 37
$context["evennement"], "etat", array()) == 1)) {
                echo " Disponible
                    ";
            }
            // line 39
            echo "                </td>
                <td>

                    <a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_show", array("id" => $this->getAttribute($context["evennement"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\"> </i></a>
                    ";
            // line 43
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 44
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                echo "
                        ";
                // line 45
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
                echo "
                        <a class=\"btn btn-default\"  href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_edit", array("id" => $this->getAttribute($context["evennement"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"></i></a>
                        ";
                // line 47
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                echo "
                    ";
            }
            // line 49
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    ";
        // line 55
        echo "    <div class=\"navigation text-center\">
        ";
        // line 56
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
        return array (  179 => 56,  176 => 55,  172 => 52,  164 => 49,  159 => 47,  155 => 46,  151 => 45,  146 => 44,  144 => 43,  140 => 42,  135 => 39,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  112 => 33,  106 => 32,  102 => 31,  98 => 30,  95 => 29,  91 => 28,  73 => 12,  68 => 10,  64 => 9,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% if is_granted('ROLE_COM') %}
        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
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
", "FrontBundle:evennements:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/index.html.twig");
    }
}
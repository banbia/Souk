<?php

/* BackBundle:reclamations:index.html.twig */
class __TwigTemplate_cdef4b8f52abde8900118a4dbcfcbb0978b872dac739396f4f8b16629121db3e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:reclamations:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:reclamations:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:reclamations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1> Liste des Reclamations</h1>

    <div class=\"col-md-3 pull-right\">
        <form method=\"POST\"> <input type=\"text\" name=\"etat\"/>
            <button type=\"submit\"  class=\"btn-rechercher \" ><i class=\"fa fa-search\" ></i> </button>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
            <tr class=\"table-secondary\">
                <th>Contenu</th>
                <th>Commercial</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new Twig_Error_Runtime('Variable "reclamations" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 22
            echo "            <tr>

                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "commercial", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", array()) == 0)) {
                echo " encours
                    <td>
                    <a class=\"btn btn-success\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_accepter", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-check \" ></i></a>
                    <a class=\"btn btn-danger\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_refuser", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-times\" ></i></a>

                    </td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["reclamation"], "etat", array()) == 1)) {
                echo " acceptée
                        <td>
                            <a class=\"btn btn-danger\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_refuser", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-times\" ></i></a>

                        </td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["reclamation"], "etat", array()) ==  -1)) {
                echo "  rejetée
                    <td>
                        <a class=\"btn btn-success\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_accepter", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-check \" ></i></a>

                    </td>
                    ";
            }
            // line 45
            echo "                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:reclamations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 49,  134 => 45,  127 => 41,  122 => 39,  116 => 36,  111 => 34,  105 => 31,  101 => 30,  96 => 28,  89 => 26,  85 => 25,  81 => 24,  77 => 22,  73 => 21,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}
{% block body %}
    <h1> Liste des Reclamations</h1>

    <div class=\"col-md-3 pull-right\">
        <form method=\"POST\"> <input type=\"text\" name=\"etat\"/>
            <button type=\"submit\"  class=\"btn-rechercher \" ><i class=\"fa fa-search\" ></i> </button>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
            <tr class=\"table-secondary\">
                <th>Contenu</th>
                <th>Commercial</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>

                <td>{{ reclamation.contenu }}</td>
                <td> {{ reclamation.commercial.nom }}</td>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
                <td>
                    {% if reclamation.etat == 0 %} encours
                    <td>
                    <a class=\"btn btn-success\" href=\"{{ path('admin_reclamations_accepter', { 'id': reclamation.id } ) }}\"> <i class=\"fa fa-check \" ></i></a>
                    <a class=\"btn btn-danger\" href=\"{{ path('admin_reclamations_refuser', { 'id': reclamation.id } ) }}\"> <i class=\"fa fa-times\" ></i></a>

                    </td>
                    {% elseif reclamation.etat == 1 %} acceptée
                        <td>
                            <a class=\"btn btn-danger\" href=\"{{ path('admin_reclamations_refuser', { 'id': reclamation.id } ) }}\"> <i class=\"fa fa-times\" ></i></a>

                        </td>
                    {% elseif reclamation.etat == (-1) %}  rejetée
                    <td>
                        <a class=\"btn btn-success\" href=\"{{ path('admin_reclamations_accepter', { 'id': reclamation.id } ) }}\"> <i class=\"fa fa-check \" ></i></a>

                    </td>
                    {% endif %}
                </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "BackBundle:reclamations:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/reclamations/index.html.twig");
    }
}

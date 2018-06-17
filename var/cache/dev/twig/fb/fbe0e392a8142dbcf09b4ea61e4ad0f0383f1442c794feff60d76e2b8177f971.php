<?php

/* FrontBundle:ComAbonnement:ComAbonnement.html.twig */
class __TwigTemplate_f9ec825ce1e0682331a811f4c506384033c86beff86bd21b52f6238ff820e290 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:ComAbonnement:ComAbonnement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:ComAbonnement:ComAbonnement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:ComAbonnement:ComAbonnement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-warning\"> Mes Abonnements </h1>

  ";
        // line 9
        echo "    <button id=\"acheter\"><i class=\"fa fa-dollar btn-sm\"></i> Acheter </button>
    <div class=\"col-md-12\" id=\"abs\">
        <table class=\"table table-condensed\">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Nombre de mois </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abs"]) || array_key_exists("abs", $context) ? $context["abs"] : (function () { throw new Twig_Error_Runtime('Variable "abs" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ab"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "prix", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "nbMois", array()), "html", null, true);
            echo " </td>
                        <td><a href=\"\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-credit-card\"></i> Demander </a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
        </table>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>id</th>
            <th>Abonnement</th>
            <th>Date de l'Abonnement</th>
            <th>Etat</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histoabo"]) || array_key_exists("histoabo", $context) ? $context["histoabo"] : (function () { throw new Twig_Error_Runtime('Variable "histoabo" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hist"]) {
            // line 45
            echo "            <tr>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hist"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hist"], "abonnement", array()), "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["hist"], "dateAb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hist"], "dateAb", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["hist"], "etat", array()) == 0)) {
                echo " Valide
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
$context["hist"], "etat", array()) == 1)) {
                echo " Expiré
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["hist"], "etat", array()) ==  -1)) {
                echo " En attente de validation
                    ";
            }
            // line 53
            echo "                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_com_export");
        echo "\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-arrow-alt-circle-down\"></i> Exporter votre historiques </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 63
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#abs\").hide();
            \$(\"#acheter\").click(function(){
                \$(\"#abs\").toggle(1000);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:ComAbonnement:ComAbonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  177 => 62,  165 => 60,  160 => 57,  151 => 53,  146 => 51,  142 => 50,  138 => 49,  132 => 48,  128 => 47,  124 => 46,  121 => 45,  117 => 44,  102 => 31,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  73 => 22,  58 => 9,  54 => 6,  45 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{#{% block style %}
    <link href=\"{{ asset ('bundles/back/css/SafaBarka_css.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock style %}#}
{% block body %}
    <h1 class=\"text-warning\"> Mes Abonnements </h1>

  {#<a class=\"btn btn-success\" href=\"{{ path('abonnements_new') }}\"><i class=\"fa fa-plus\"></i> Acheter une nouvelle abonnement </a>#}
    <button id=\"acheter\"><i class=\"fa fa-dollar btn-sm\"></i> Acheter </button>
    <div class=\"col-md-12\" id=\"abs\">
        <table class=\"table table-condensed\">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Nombre de mois </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for ab in abs %}
                    <tr>
                        <td>{{ ab.designation }}</td>
                        <td>{{ ab.description }}</td>
                        <td>{{ ab.prix }}</td>
                        <td>{{ ab.nbMois }} </td>
                        <td><a href=\"\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-credit-card\"></i> Demander </a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>id</th>
            <th>Abonnement</th>
            <th>Date de l'Abonnement</th>
            <th>Etat</th>
        </tr>
        </thead>
        <tbody>
        {% for hist in histoabo %}
            <tr>
                <td>{{ hist.id }}</td>
                <td>{{ hist.abonnement.designation }}</td>
                <td>{% if hist.dateAb %}{{ hist.dateAb|date('Y-m-d') }}{% endif %}</td>
                <td>{% if hist.etat == 0 %} Valide
                    {% elseif hist.etat == 1 %} Expiré
                    {% elseif hist.etat == -1 %} En attente de validation
                    {% endif %}
                </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path ('abonnements_com_export') }}\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-arrow-alt-circle-down\"></i> Exporter votre historiques </a>
{% endblock %}
{% block js %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#abs\").hide();
            \$(\"#acheter\").click(function(){
                \$(\"#abs\").toggle(1000);
            });
        });
    </script>
{% endblock js %}
", "FrontBundle:ComAbonnement:ComAbonnement.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/ComAbonnement/ComAbonnement.html.twig");
    }
}

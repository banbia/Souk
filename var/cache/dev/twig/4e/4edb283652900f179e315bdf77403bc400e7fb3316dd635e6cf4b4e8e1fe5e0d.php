<?php

/* @Front/reclamations/index.html.twig */
class __TwigTemplate_459b7ee5bb281da90216e09797fdca62e894f73bfa70533950b9320853382ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@Front/reclamations/index.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/reclamations/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/reclamations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"row form-controlS\">
    <div class=\"Title\">
     Liste des reclamation
    </div>
    <br>
    <div class=\"col-md-3 pull-right\">
    <form method=\"POST\"> <input type=\"text\" name=\"etat\"/>
        <button type=\"submit\"  class=\"btn-rechercher \" ><i class=\"fa fa-search\" ></i> </button>
    </form>
    </div>
    <div class=\"col-md-12\">
    <a title=\"ajouter une nouvelle reclamation\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_new");
        echo "\"  class=\"btn btn-success pull-right\"> <i class=\"fa fa-plus\" > </i>  </a>
    </div>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr class=\"table-secondary\">
                <th>Description</th>
                <th>Commercial</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 35
            echo "            <tr>

                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reclamation"], "commercial", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            if (($this->getAttribute($context["reclamation"], "etat", array()) == 0)) {
                echo " Encours
                    ";
            } elseif (($this->getAttribute(            // line 41
$context["reclamation"], "etat", array()) == 1)) {
                echo " Accepter
                    ";
            } elseif (($this->getAttribute(            // line 42
$context["reclamation"], "etat", array()) ==  -1)) {
                echo "  Rejeter
                    ";
            }
            // line 44
            echo "                </td>
                <td>

                    <a  href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning outline\" >
                        <i class=\"fa fa-edit\"></i> Modifier </a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/reclamations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  145 => 47,  140 => 44,  135 => 42,  131 => 41,  127 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 35,  105 => 34,  89 => 21,  76 => 10,  67 => 9,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block style %}
    <link href=\"{{ asset('bundles/front/css/soumaya_style.css') }}\" rel='stylesheet' type='text/css' />
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>
{% endblock style %}


{% block body %}
<div class=\"row form-controlS\">
    <div class=\"Title\">
     Liste des reclamation
    </div>
    <br>
    <div class=\"col-md-3 pull-right\">
    <form method=\"POST\"> <input type=\"text\" name=\"etat\"/>
        <button type=\"submit\"  class=\"btn-rechercher \" ><i class=\"fa fa-search\" ></i> </button>
    </form>
    </div>
    <div class=\"col-md-12\">
    <a title=\"ajouter une nouvelle reclamation\" href=\"{{ path('reclamations_new') }}\"  class=\"btn btn-success pull-right\"> <i class=\"fa fa-plus\" > </i>  </a>
    </div>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr class=\"table-secondary\">
                <th>Description</th>
                <th>Commercial</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>

                <td>{{ reclamation.contenu }}</td>
                <td> {{ reclamation.commercial.nom }}</td>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
                <td>{% if reclamation.etat == 0 %} Encours
                    {% elseif reclamation.etat == 1 %} Accepter
                    {% elseif reclamation.etat == (-1) %}  Rejeter
                    {% endif %}
                </td>
                <td>

                    <a  href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\" class=\"btn btn-warning outline\" >
                        <i class=\"fa fa-edit\"></i> Modifier </a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "@Front/reclamations/index.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle\\Resources\\views\\reclamations\\index.html.twig");
    }
}

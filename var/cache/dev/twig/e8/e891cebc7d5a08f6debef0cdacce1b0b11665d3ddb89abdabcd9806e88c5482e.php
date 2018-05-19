<?php

/* BackBundle:abonnements:show.html.twig */
class __TwigTemplate_d0590940c5db534a03b1027406cad051922542df8566e38aee721b81b580cb1a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:show.html.twig"));

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
        echo "    <h1 class=\"text-warning\">Abonnement ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new Twig_Error_Runtime('Variable "abonnement" does not exist.', 4, $this->source); })()), "designation", array()), "html", null, true);
        echo " </h1>

        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
               <label>Designation : </label>
                ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new Twig_Error_Runtime('Variable "abonnement" does not exist.', 9, $this->source); })()), "designation", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Description : </label>
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new Twig_Error_Runtime('Variable "abonnement" does not exist.', 13, $this->source); })()), "description", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label>Prix : </label>
                ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new Twig_Error_Runtime('Variable "abonnement" does not exist.', 19, $this->source); })()), "prix", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Nombre de mois : </label>
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new Twig_Error_Runtime('Variable "abonnement" does not exist.', 23, $this->source); })()), "nbMois", array()), "html", null, true);
        echo "
            </div>

        </div>


    <a class =\"btn btn-default\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
    <a class =\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new Twig_Error_Runtime('Variable "abonnement" does not exist.', 30, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Modifier</a>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  94 => 29,  85 => 23,  78 => 19,  69 => 13,  62 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
    <h1 class=\"text-warning\">Abonnement {{ abonnement.designation }} </h1>

        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
               <label>Designation : </label>
                {{ abonnement.designation }}
            </div>
            <div class=\"col-md-6\">
                <label>Description : </label>
                {{ abonnement.description }}
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label>Prix : </label>
                {{ abonnement.prix }}
            </div>
            <div class=\"col-md-6\">
                <label>Nombre de mois : </label>
                {{ abonnement.nbMois }}
            </div>

        </div>


    <a class =\"btn btn-default\" href=\"{{ path('abonnements_index') }}\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
    <a class =\"btn btn-default\" href=\"{{ path('abonnements_edit', { 'id': abonnement.id }) }}\"><i class=\"fa fa-edit\"></i> Modifier</a>


{% endblock %}
", "BackBundle:abonnements:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/show.html.twig");
    }
}

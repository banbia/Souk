<?php

/* BackBundle:abonnements:new.html.twig */
class __TwigTemplate_f5b04235aa7edb07bbc9df5087dfc8619ea6053601b58444d08b4f708bbc57c6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

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
        echo "    <h1 class=\"text-warning\">Création d'un Abonnement</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
       ";
        // line 8
        echo "    <div class=\"col-md-12\">
        <div class=\"col-md-6\">
            <label> Designation :</label>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "designation", array()), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "designation", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        </div>
        <div class=\"col-md-6\">
            <label> Description :</label>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "description", array()), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        </div>
    </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label> Prix :</label>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "prix", array()), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "prix", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            </div>
            <div class=\"col-md-6\">
                <label> Nombre de mois :</label>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "nbMois", array()), 'errors');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "nbMois", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            </div>
        </div>

<div class=\"col-md-12\" style=\"margin-top: 15px\" >
    <div class=\"col-md-6\">
    <a class =\"btn btn-default\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
    <button type=\"submit\" class=\"btn btn-success \" > Créer </button>
    </div>
</div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  114 => 35,  105 => 29,  101 => 28,  94 => 24,  90 => 23,  81 => 17,  77 => 16,  70 => 12,  66 => 11,  61 => 8,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
    <h1 class=\"text-warning\">Création d'un Abonnement</h1>

    {{ form_start(form) }}
       {# {{ form_widget(form) }} #}
    <div class=\"col-md-12\">
        <div class=\"col-md-6\">
            <label> Designation :</label>
    {{ form_errors(form.designation) }}
    {{ form_widget(form.designation, {'attr': {'class': 'comment form-control'}}) }}
        </div>
        <div class=\"col-md-6\">
            <label> Description :</label>
    {{ form_errors(form.description) }}
    {{ form_widget(form.description, {'attr': {'class': 'comment form-control'}}) }}
        </div>
    </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label> Prix :</label>
    {{ form_errors(form.prix) }}
    {{ form_widget(form.prix, {'attr': {'class': 'comment form-control'}}) }}
            </div>
            <div class=\"col-md-6\">
                <label> Nombre de mois :</label>
    {{ form_errors(form.nbMois) }}
    {{ form_widget(form.nbMois, {'attr': {'class': 'comment form-control'}}) }}
            </div>
        </div>

<div class=\"col-md-12\" style=\"margin-top: 15px\" >
    <div class=\"col-md-6\">
    <a class =\"btn btn-default\" href=\"{{ path('abonnements_index') }}\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
    <button type=\"submit\" class=\"btn btn-success \" > Créer </button>
    </div>
</div>
    {{ form_end(form) }}
{% endblock %}
", "BackBundle:abonnements:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/new.html.twig");
    }
}
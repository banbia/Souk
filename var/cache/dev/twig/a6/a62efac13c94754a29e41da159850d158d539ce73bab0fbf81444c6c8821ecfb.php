<?php

/* BackBundle:abonnements:show.html.twig */
class __TwigTemplate_bc8dc2bfeb371785bdab33a00c6039267a150aba27be6aef0b4b4cfc9c4f898a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_f0899382efde6b50fc7cb1bbef87251f7e12fe084373f0a33385300a5f619502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0899382efde6b50fc7cb1bbef87251f7e12fe084373f0a33385300a5f619502->enter($__internal_f0899382efde6b50fc7cb1bbef87251f7e12fe084373f0a33385300a5f619502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:show.html.twig"));

        $__internal_add3232721d37e504825071ca6edbcb5ad5a37bc7a65db5314f7747768ad60e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add3232721d37e504825071ca6edbcb5ad5a37bc7a65db5314f7747768ad60e1->enter($__internal_add3232721d37e504825071ca6edbcb5ad5a37bc7a65db5314f7747768ad60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0899382efde6b50fc7cb1bbef87251f7e12fe084373f0a33385300a5f619502->leave($__internal_f0899382efde6b50fc7cb1bbef87251f7e12fe084373f0a33385300a5f619502_prof);

        
        $__internal_add3232721d37e504825071ca6edbcb5ad5a37bc7a65db5314f7747768ad60e1->leave($__internal_add3232721d37e504825071ca6edbcb5ad5a37bc7a65db5314f7747768ad60e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b778fd1a3b43f08030edd0b88a3c59f089b7a0e08cacbb80cd07d74be4999f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b778fd1a3b43f08030edd0b88a3c59f089b7a0e08cacbb80cd07d74be4999f5->enter($__internal_8b778fd1a3b43f08030edd0b88a3c59f089b7a0e08cacbb80cd07d74be4999f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_281f9825ae8fa732a78d944d2723de09aa7b9aaaf22c655b140766cff1c01c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281f9825ae8fa732a78d944d2723de09aa7b9aaaf22c655b140766cff1c01c07->enter($__internal_281f9825ae8fa732a78d944d2723de09aa7b9aaaf22c655b140766cff1c01c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnement</h1>

        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
               <label>Designation : </label>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : $this->getContext($context, "abonnement")), "designation", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Description : </label>
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : $this->getContext($context, "abonnement")), "description", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label>Prix : </label>
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : $this->getContext($context, "abonnement")), "prix", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Nombre de mois : </label>
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : $this->getContext($context, "abonnement")), "nbMois", array()), "html", null, true);
        echo "
            </div>

        </div>

            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <a class =\"btn btn-default\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
    <a class =\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : $this->getContext($context, "abonnement")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Edit</a>
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\"> Delete </button>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_281f9825ae8fa732a78d944d2723de09aa7b9aaaf22c655b140766cff1c01c07->leave($__internal_281f9825ae8fa732a78d944d2723de09aa7b9aaaf22c655b140766cff1c01c07_prof);

        
        $__internal_8b778fd1a3b43f08030edd0b88a3c59f089b7a0e08cacbb80cd07d74be4999f5->leave($__internal_8b778fd1a3b43f08030edd0b88a3c59f089b7a0e08cacbb80cd07d74be4999f5_prof);

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
        return array (  100 => 32,  95 => 30,  91 => 29,  87 => 28,  79 => 23,  72 => 19,  63 => 13,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
    <h1>Abonnement</h1>

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

            {{ form_start(delete_form) }}
    <a class =\"btn btn-default\" href=\"{{ path('abonnements_index') }}\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
    <a class =\"btn btn-default\" href=\"{{ path('abonnements_edit', { 'id': abonnement.id }) }}\"><i class=\"fa fa-edit\"></i> Edit</a>
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\"> Delete </button>
            {{ form_end(delete_form) }}

{% endblock %}
", "BackBundle:abonnements:show.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/show.html.twig");
    }
}

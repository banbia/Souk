<?php

/* FrontBundle:reclamations:new.html.twig */
class __TwigTemplate_7103129a59730fe5062dd3c4dd96dc195730b48904c11d56c686522341ecffa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:new.html.twig", 1);
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
        $__internal_3f6a03c9a54db65b5bdf9fb313a4f36981f5d98219d03c537d3bd1d024b08f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6a03c9a54db65b5bdf9fb313a4f36981f5d98219d03c537d3bd1d024b08f06->enter($__internal_3f6a03c9a54db65b5bdf9fb313a4f36981f5d98219d03c537d3bd1d024b08f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:new.html.twig"));

        $__internal_18fedf4357df6a8c31d8a82ac4b1c4413900e4c87cd12ad6a11920413c465432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fedf4357df6a8c31d8a82ac4b1c4413900e4c87cd12ad6a11920413c465432->enter($__internal_18fedf4357df6a8c31d8a82ac4b1c4413900e4c87cd12ad6a11920413c465432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f6a03c9a54db65b5bdf9fb313a4f36981f5d98219d03c537d3bd1d024b08f06->leave($__internal_3f6a03c9a54db65b5bdf9fb313a4f36981f5d98219d03c537d3bd1d024b08f06_prof);

        
        $__internal_18fedf4357df6a8c31d8a82ac4b1c4413900e4c87cd12ad6a11920413c465432->leave($__internal_18fedf4357df6a8c31d8a82ac4b1c4413900e4c87cd12ad6a11920413c465432_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_517e4987d7cd2e57dca5603d26a0f3a4eda59736e2aa4fe371b188d63e44356f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517e4987d7cd2e57dca5603d26a0f3a4eda59736e2aa4fe371b188d63e44356f->enter($__internal_517e4987d7cd2e57dca5603d26a0f3a4eda59736e2aa4fe371b188d63e44356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b54c8f9366b369f580eaab2d788dcd2ca403d4890764c087baf4f3c60b367b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54c8f9366b369f580eaab2d788dcd2ca403d4890764c087baf4f3c60b367b29->enter($__internal_b54c8f9366b369f580eaab2d788dcd2ca403d4890764c087baf4f3c60b367b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crèer une reclamation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"col-md-12\">

        <div class=\"form-group col-md-8\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commercial", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commercial", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group col-md-8\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

    </div>
    <button type=\"submit\" class=\"btn btn-success\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b54c8f9366b369f580eaab2d788dcd2ca403d4890764c087baf4f3c60b367b29->leave($__internal_b54c8f9366b369f580eaab2d788dcd2ca403d4890764c087baf4f3c60b367b29_prof);

        
        $__internal_517e4987d7cd2e57dca5603d26a0f3a4eda59736e2aa4fe371b188d63e44356f->leave($__internal_517e4987d7cd2e57dca5603d26a0f3a4eda59736e2aa4fe371b188d63e44356f_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  82 => 17,  78 => 16,  74 => 15,  68 => 12,  64 => 11,  60 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Crèer une reclamation</h1>

    {{ form_start(form) }}
    <div class=\"col-md-12\">

        <div class=\"form-group col-md-8\">
            {{ form_label(form.commercial) }}
            {{ form_errors(form.commercial) }}
            {{ form_widget(form.commercial, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"form-group col-md-8\">
            {{ form_label(form.contenu) }}
            {{ form_errors(form.contenu) }}
            {{ form_widget(form.contenu, {'attr': {'class': 'form-control'}}) }}
        </div>

    </div>
    <button type=\"submit\" class=\"btn btn-success\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    {{ form_end(form) }}
{% endblock %}
", "FrontBundle:reclamations:new.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/new.html.twig");
    }
}

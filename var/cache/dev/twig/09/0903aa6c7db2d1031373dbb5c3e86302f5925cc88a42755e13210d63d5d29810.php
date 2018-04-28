<?php

/* BackBundle:abonnements:new.html.twig */
class __TwigTemplate_1d05f9a326351b45da6a7d16435402ddf0b16e7217a116c0a141a38f0845109d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_9ae1ded4bb2f878d58dcdcebb7f77371bbe0effe312785d4c0d61334d37beb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae1ded4bb2f878d58dcdcebb7f77371bbe0effe312785d4c0d61334d37beb43->enter($__internal_9ae1ded4bb2f878d58dcdcebb7f77371bbe0effe312785d4c0d61334d37beb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $__internal_ea883db5cff55a0840ca151fd534dc9d4ea84e76a14fa4c5372305965cd5b6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea883db5cff55a0840ca151fd534dc9d4ea84e76a14fa4c5372305965cd5b6cf->enter($__internal_ea883db5cff55a0840ca151fd534dc9d4ea84e76a14fa4c5372305965cd5b6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae1ded4bb2f878d58dcdcebb7f77371bbe0effe312785d4c0d61334d37beb43->leave($__internal_9ae1ded4bb2f878d58dcdcebb7f77371bbe0effe312785d4c0d61334d37beb43_prof);

        
        $__internal_ea883db5cff55a0840ca151fd534dc9d4ea84e76a14fa4c5372305965cd5b6cf->leave($__internal_ea883db5cff55a0840ca151fd534dc9d4ea84e76a14fa4c5372305965cd5b6cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6639a79900c893b4c775a7354e95ca38a1f24e8a91e5245bae6c3a5bc8f299a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6639a79900c893b4c775a7354e95ca38a1f24e8a91e5245bae6c3a5bc8f299a->enter($__internal_e6639a79900c893b4c775a7354e95ca38a1f24e8a91e5245bae6c3a5bc8f299a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4426b4280851060e26beaeb22a2ee17cdfacde36738eb4b0c2506c2ba1b0514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4426b4280851060e26beaeb22a2ee17cdfacde36738eb4b0c2506c2ba1b0514->enter($__internal_a4426b4280851060e26beaeb22a2ee17cdfacde36738eb4b0c2506c2ba1b0514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnement creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
       ";
        // line 8
        echo "    <div class=\"col-md-12\">
        <div class=\"col-md-6\">
            <label> Designation :</label>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        </div>
        <div class=\"col-md-6\">
            <label> Description :</label>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        </div>
    </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label> Prix :</label>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            </div>
            <div class=\"col-md-6\">
                <label> Nombre de mois :</label>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbMois", array()), 'errors');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbMois", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            </div>
        </div>

<div class=\"col-md-12\" style=\"margin-top: 15px\">
    <div class=\"col-md-6\">
    <a class =\"btn btn-default\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
    <button type=\"submit\" class=\"btn btn-success \" > Créer </button>
    </div>
</div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a4426b4280851060e26beaeb22a2ee17cdfacde36738eb4b0c2506c2ba1b0514->leave($__internal_a4426b4280851060e26beaeb22a2ee17cdfacde36738eb4b0c2506c2ba1b0514_prof);

        
        $__internal_e6639a79900c893b4c775a7354e95ca38a1f24e8a91e5245bae6c3a5bc8f299a->leave($__internal_e6639a79900c893b4c775a7354e95ca38a1f24e8a91e5245bae6c3a5bc8f299a_prof);

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
        return array (  117 => 39,  110 => 35,  101 => 29,  97 => 28,  90 => 24,  86 => 23,  77 => 17,  73 => 16,  66 => 12,  62 => 11,  57 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Abonnement creation</h1>

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

<div class=\"col-md-12\" style=\"margin-top: 15px\">
    <div class=\"col-md-6\">
    <a class =\"btn btn-default\" href=\"{{ path('abonnements_index') }}\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
    <button type=\"submit\" class=\"btn btn-success \" > Créer </button>
    </div>
</div>
    {{ form_end(form) }}
{% endblock %}
", "BackBundle:abonnements:new.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/new.html.twig");
    }
}

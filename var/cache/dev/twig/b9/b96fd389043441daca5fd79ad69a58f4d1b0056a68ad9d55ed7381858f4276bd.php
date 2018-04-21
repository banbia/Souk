<?php

/* FrontBundle:annonces:edit_commantaireAnc.html.twig */
class __TwigTemplate_382102c14207a5243e15cca294ff98f95dded95fdba670b3a95590e9a8b00c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:edit_commantaireAnc.html.twig", 1);
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
        $__internal_863a34d760e1bff5a4d1e17a08885f7f040625f97d558b8fc48e6542e71e9e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863a34d760e1bff5a4d1e17a08885f7f040625f97d558b8fc48e6542e71e9e36->enter($__internal_863a34d760e1bff5a4d1e17a08885f7f040625f97d558b8fc48e6542e71e9e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:edit_commantaireAnc.html.twig"));

        $__internal_1acfc6f603a1d200ba5148862aad2dca6c6b413fbd5036f33a2a312e277691cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acfc6f603a1d200ba5148862aad2dca6c6b413fbd5036f33a2a312e277691cf->enter($__internal_1acfc6f603a1d200ba5148862aad2dca6c6b413fbd5036f33a2a312e277691cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:edit_commantaireAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863a34d760e1bff5a4d1e17a08885f7f040625f97d558b8fc48e6542e71e9e36->leave($__internal_863a34d760e1bff5a4d1e17a08885f7f040625f97d558b8fc48e6542e71e9e36_prof);

        
        $__internal_1acfc6f603a1d200ba5148862aad2dca6c6b413fbd5036f33a2a312e277691cf->leave($__internal_1acfc6f603a1d200ba5148862aad2dca6c6b413fbd5036f33a2a312e277691cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8acd81634eec7da7b52e6f6a39b56f0b0cab18bc9e649795dfe09c8ab7a07a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8acd81634eec7da7b52e6f6a39b56f0b0cab18bc9e649795dfe09c8ab7a07a9->enter($__internal_c8acd81634eec7da7b52e6f6a39b56f0b0cab18bc9e649795dfe09c8ab7a07a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b59f79b869b06d05fc6e609cbaa5dffe2daf71d1938b119a1e90db3590276759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59f79b869b06d05fc6e609cbaa5dffe2daf71d1938b119a1e90db3590276759->enter($__internal_b59f79b869b06d05fc6e609cbaa5dffe2daf71d1938b119a1e90db3590276759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Modifier </button>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>

    <!-- /row -->
";
        
        $__internal_b59f79b869b06d05fc6e609cbaa5dffe2daf71d1938b119a1e90db3590276759->leave($__internal_b59f79b869b06d05fc6e609cbaa5dffe2daf71d1938b119a1e90db3590276759_prof);

        
        $__internal_c8acd81634eec7da7b52e6f6a39b56f0b0cab18bc9e649795dfe09c8ab7a07a9->leave($__internal_c8acd81634eec7da7b52e6f6a39b56f0b0cab18bc9e649795dfe09c8ab7a07a9_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:edit_commantaireAnc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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


    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_start(form) }}
            {{ form_errors(form.contenu) }}
            {{ form_widget(form.contenu, {'attr': {'class': 'comment form-control'}}) }}
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Modifier </button>
            {{ form_end(form) }}
            <br>
            <br>
        </div>
    </div>

    <!-- /row -->
{% endblock %}", "FrontBundle:annonces:edit_commantaireAnc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/annonces/edit_commantaireAnc.html.twig");
    }
}

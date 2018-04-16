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
        $__internal_9c6c6f70c766afcf06b19e29385ad77a50574de14245d597937268b99354f1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6c6f70c766afcf06b19e29385ad77a50574de14245d597937268b99354f1b6->enter($__internal_9c6c6f70c766afcf06b19e29385ad77a50574de14245d597937268b99354f1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:new.html.twig"));

        $__internal_5ab40459fa3dba536ff890ab50ecb1bb320f4c49795c68c70aa7b451e935992f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab40459fa3dba536ff890ab50ecb1bb320f4c49795c68c70aa7b451e935992f->enter($__internal_5ab40459fa3dba536ff890ab50ecb1bb320f4c49795c68c70aa7b451e935992f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c6c6f70c766afcf06b19e29385ad77a50574de14245d597937268b99354f1b6->leave($__internal_9c6c6f70c766afcf06b19e29385ad77a50574de14245d597937268b99354f1b6_prof);

        
        $__internal_5ab40459fa3dba536ff890ab50ecb1bb320f4c49795c68c70aa7b451e935992f->leave($__internal_5ab40459fa3dba536ff890ab50ecb1bb320f4c49795c68c70aa7b451e935992f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2efba99d12fa8a7082ad1e89930511c44111b8f00096a00089b9777d3aaa994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2efba99d12fa8a7082ad1e89930511c44111b8f00096a00089b9777d3aaa994->enter($__internal_e2efba99d12fa8a7082ad1e89930511c44111b8f00096a00089b9777d3aaa994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d032c7f88eecb9d01bbe1e875e3149f34f9b5e1920a32b2a8e9b0ad506b3c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d032c7f88eecb9d01bbe1e875e3149f34f9b5e1920a32b2a8e9b0ad506b3c3a->enter($__internal_8d032c7f88eecb9d01bbe1e875e3149f34f9b5e1920a32b2a8e9b0ad506b3c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crèer une reclamation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"col-md-12\">

        <div class=\"form-group col-md-12\">
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
        <div class=\"form-group col-md-12\">
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
    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8d032c7f88eecb9d01bbe1e875e3149f34f9b5e1920a32b2a8e9b0ad506b3c3a->leave($__internal_8d032c7f88eecb9d01bbe1e875e3149f34f9b5e1920a32b2a8e9b0ad506b3c3a_prof);

        
        $__internal_e2efba99d12fa8a7082ad1e89930511c44111b8f00096a00089b9777d3aaa994->leave($__internal_e2efba99d12fa8a7082ad1e89930511c44111b8f00096a00089b9777d3aaa994_prof);

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

        <div class=\"form-group col-md-12\">
            {{ form_label(form.commercial) }}
            {{ form_errors(form.commercial) }}
            {{ form_widget(form.commercial, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"form-group col-md-12\">
            {{ form_label(form.contenu) }}
            {{ form_errors(form.contenu) }}
            {{ form_widget(form.contenu, {'attr': {'class': 'form-control'}}) }}
        </div>

    </div>
    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    {{ form_end(form) }}
{% endblock %}
", "FrontBundle:reclamations:new.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/new.html.twig");
    }
}

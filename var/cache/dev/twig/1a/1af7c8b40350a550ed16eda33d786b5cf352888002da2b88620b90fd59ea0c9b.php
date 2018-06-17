<?php

/* FrontBundle:evennements:edit.html.twig */
class __TwigTemplate_ccd56e7d19e0f89a74193e3dc66e6074c5002e1a67c7289b6e25ee4817fa0807 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:edit.html.twig"));

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
        echo "    <h1>Evennement edit</h1>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
       ";
        // line 7
        echo "<div class=\"col-md-12\">
    <div class=\"col-md-6\">

        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 10, $this->source); })()), "titre", array()), 'label');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 11, $this->source); })()), "titre", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 12, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->source); })()), "description", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 16, $this->source); })()), "description", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    </div>
</div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 23, $this->source); })()), "dateDeb", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 24, $this->source); })()), "dateDeb", array()), 'errors');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->source); })()), "dateDeb", array()), 'widget', array("attr" => array("class" => "form-group input-group")));
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 28, $this->source); })()), "dateFin", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 29, $this->source); })()), "dateFin", array()), 'errors');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 30, $this->source); })()), "dateFin", array()), 'widget', array("attr" => array("class" => "form-group input-group")));
        echo "
    </div>
</div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 35, $this->source); })()), "lieu", array()), 'label');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 36, $this->source); })()), "lieu", array()), 'errors');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 37, $this->source); })()), "lieu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 40, $this->source); })()), "prix", array()), 'label');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 41, $this->source); })()), "prix", array()), 'errors');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 42, $this->source); })()), "prix", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
    </div>
</div>

<div class=\"col-md-12\">
    <div class=\"col-md-6\">
        <button type=\"submit\" class=\"btn btn-success\" ><i class=\"fa fa-check\"></i>Modifier</button>
            <a class=\"btn btn-default\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_index");
        echo "\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
</div>
</div>
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 52,  161 => 49,  151 => 42,  147 => 41,  143 => 40,  137 => 37,  133 => 36,  129 => 35,  121 => 30,  117 => 29,  113 => 28,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  73 => 12,  69 => 11,  65 => 10,  60 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}
    <h1>Evennement edit</h1>
{{ form_start(edit_form) }}
       {#{{ form_widget(form) }}#}
<div class=\"col-md-12\">
    <div class=\"col-md-6\">

        {{ form_label(edit_form.titre) }}
        {{ form_errors(edit_form.titre) }}
        {{ form_widget(edit_form.titre, {'attr': {'class': 'comment form-control'}}) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_label(edit_form.description) }}
        {{ form_errors(edit_form.description) }}
        {{ form_widget(edit_form.description, {'attr': {'class': 'comment form-control'}}) }}
        {{ form_start(edit_form) }}
    </div>
</div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
        {{ form_label(edit_form.dateDeb) }}
        {{ form_errors(edit_form.dateDeb) }}
        {{ form_widget(edit_form.dateDeb, {'attr': {'class': 'form-group input-group'}}) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_label(edit_form.dateFin) }}
        {{ form_errors(edit_form.dateFin) }}
        {{ form_widget(edit_form.dateFin, {'attr': {'class': 'form-group input-group'}}) }}
    </div>
</div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
        {{ form_label(edit_form.lieu) }}
        {{ form_errors(edit_form.lieu) }}
        {{ form_widget(edit_form.lieu, {'attr': {'class': 'comment form-control'}}) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_label(edit_form.prix) }}
        {{ form_errors(edit_form.prix) }}
        {{ form_widget(edit_form.prix, {'attr': {'class': 'comment form-control'}}) }}
    </div>
</div>

<div class=\"col-md-12\">
    <div class=\"col-md-6\">
        <button type=\"submit\" class=\"btn btn-success\" ><i class=\"fa fa-check\"></i>Modifier</button>
            <a class=\"btn btn-default\" href=\"{{ path('evennements_index') }}\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
</div>
</div>
    {{ form_end(edit_form) }}
{% endblock %}
", "FrontBundle:evennements:edit.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/evennements/edit.html.twig");
    }
}

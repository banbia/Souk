<?php

/* BackBundle:abonnements:new.html.twig */
class __TwigTemplate_af1f453ca659b1a05a9803dacb22e1496ca07a0f2796535f3be7deeeaa812190 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
<<<<<<< HEAD
        echo "    <h1>Abonnement creation</h1>
=======
        echo "    <h1 class=\"text-warning\">Création d'un Abonnement</h1>
>>>>>>> 836158231e125c164df57be215e600d351e15952

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

<div class=\"col-md-12\" style=\"margin-top: 15px\" >
    <div class=\"col-md-6\">
    <a class =\"btn btn-default\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
<<<<<<< HEAD
        echo "\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
=======
        echo "\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
>>>>>>> 836158231e125c164df57be215e600d351e15952
    <button type=\"submit\" class=\"btn btn-success \" > Créer </button>
    </div>
</div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
<<<<<<< HEAD
    <h1>Abonnement creation</h1>
=======
    <h1 class=\"text-warning\">Création d'un Abonnement</h1>
>>>>>>> 836158231e125c164df57be215e600d351e15952

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
<<<<<<< HEAD
    <a class =\"btn btn-default\" href=\"{{ path('abonnements_index') }}\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
=======
    <a class =\"btn btn-default\" href=\"{{ path('abonnements_index') }}\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
>>>>>>> 836158231e125c164df57be215e600d351e15952
    <button type=\"submit\" class=\"btn btn-success \" > Créer </button>
    </div>
</div>
    {{ form_end(form) }}
{% endblock %}
<<<<<<< HEAD
", "BackBundle:abonnements:new.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/new.html.twig");
=======
", "BackBundle:abonnements:new.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/new.html.twig");
>>>>>>> 836158231e125c164df57be215e600d351e15952
    }
}

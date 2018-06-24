<?php

/* @Back/abonnements/show.html.twig */
class __TwigTemplate_d42f42462b93cbb0d7853e1fb82f2f852dba030639c30f740f8553791b537722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "@Back/abonnements/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/abonnements/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/abonnements/show.html.twig"));

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
        echo "    <h1 class=\"text-warning\">Abonnement ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "designation", array()), "html", null, true);
        echo " </h1>

        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
               <label>Designation : </label>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "designation", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Description : </label>
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "description", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label>Prix : </label>
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "prix", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Nombre de mois : </label>
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "nbMois", array()), "html", null, true);
        echo "
            </div>

        </div>


    <a class =\"btn btn-default\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
    <a class =\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Modifier</a>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Back/abonnements/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  90 => 29,  81 => 23,  74 => 19,  65 => 13,  58 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
", "@Back/abonnements/show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle\\Resources\\views\\abonnements\\show.html.twig");
    }
}

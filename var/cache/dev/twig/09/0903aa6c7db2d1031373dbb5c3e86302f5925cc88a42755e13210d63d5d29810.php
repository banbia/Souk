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
        $__internal_64d54b2df76a9f4cc9ee3b1f84cf28082ec0749b595b450f7ac66927d3bac68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d54b2df76a9f4cc9ee3b1f84cf28082ec0749b595b450f7ac66927d3bac68a->enter($__internal_64d54b2df76a9f4cc9ee3b1f84cf28082ec0749b595b450f7ac66927d3bac68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $__internal_2478220037c180bed2f8c456f9f08a271614f535936eb60a8dad4c43fd825e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2478220037c180bed2f8c456f9f08a271614f535936eb60a8dad4c43fd825e3d->enter($__internal_2478220037c180bed2f8c456f9f08a271614f535936eb60a8dad4c43fd825e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d54b2df76a9f4cc9ee3b1f84cf28082ec0749b595b450f7ac66927d3bac68a->leave($__internal_64d54b2df76a9f4cc9ee3b1f84cf28082ec0749b595b450f7ac66927d3bac68a_prof);

        
        $__internal_2478220037c180bed2f8c456f9f08a271614f535936eb60a8dad4c43fd825e3d->leave($__internal_2478220037c180bed2f8c456f9f08a271614f535936eb60a8dad4c43fd825e3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6c4f84062860e32d8581a005a2e4046f3a3269e7375d5019a557e60997e2cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c4f84062860e32d8581a005a2e4046f3a3269e7375d5019a557e60997e2cf3->enter($__internal_f6c4f84062860e32d8581a005a2e4046f3a3269e7375d5019a557e60997e2cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b857e1835dc6605323321c647066e85668d2e56351e66ba6c3c728b602160362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b857e1835dc6605323321c647066e85668d2e56351e66ba6c3c728b602160362->enter($__internal_b857e1835dc6605323321c647066e85668d2e56351e66ba6c3c728b602160362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'label');
        echo "
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
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
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
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label');
        echo "
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
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbMois", array()), 'label');
        echo "
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
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<div class=\"col-md-12\">
    <br/>
    <input type=\"submit\" class=\"btn btn-success pull-right\" value=\"Create\" />
</div>
    <ul>
        <li>
            <a  href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b857e1835dc6605323321c647066e85668d2e56351e66ba6c3c728b602160362->leave($__internal_b857e1835dc6605323321c647066e85668d2e56351e66ba6c3c728b602160362_prof);

        
        $__internal_f6c4f84062860e32d8581a005a2e4046f3a3269e7375d5019a557e60997e2cf3->leave($__internal_f6c4f84062860e32d8581a005a2e4046f3a3269e7375d5019a557e60997e2cf3_prof);

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
        return array (  130 => 40,  119 => 32,  113 => 29,  109 => 28,  105 => 27,  99 => 24,  95 => 23,  91 => 22,  83 => 17,  79 => 16,  75 => 15,  69 => 12,  65 => 11,  61 => 10,  57 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    {{ form_label(form.designation) }}
    {{ form_errors(form.designation) }}
    {{ form_widget(form.designation, {'attr': {'class': 'comment form-control'}}) }}
        </div>
        <div class=\"col-md-6\">
    {{ form_label(form.description) }}
    {{ form_errors(form.description) }}
    {{ form_widget(form.description, {'attr': {'class': 'comment form-control'}}) }}
        </div>
    </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
    {{ form_label(form.prix) }}
    {{ form_errors(form.prix) }}
    {{ form_widget(form.prix, {'attr': {'class': 'comment form-control'}}) }}
            </div>
            <div class=\"col-md-6\">
    {{ form_label(form.nbMois) }}
    {{ form_errors(form.nbMois) }}
    {{ form_widget(form.nbMois, {'attr': {'class': 'comment form-control'}}) }}
            </div>
        </div>
    {{ form_end(form) }}

<div class=\"col-md-12\">
    <br/>
    <input type=\"submit\" class=\"btn btn-success pull-right\" value=\"Create\" />
</div>
    <ul>
        <li>
            <a  href=\"{{ path('abonnements_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BackBundle:abonnements:new.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/new.html.twig");
    }
}

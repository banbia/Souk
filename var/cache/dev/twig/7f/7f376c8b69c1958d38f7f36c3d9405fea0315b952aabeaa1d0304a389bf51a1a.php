<?php

/* FrontBundle:reclamations:edit.html.twig */
class __TwigTemplate_60ad75185a228706cdae492d38d3e39649db824920e51275db0c796df8eaf92c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:edit.html.twig", 1);
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
        $__internal_8e65224d0b0b48409345cb025be29906942de002aaccd4addceb19281e46e491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e65224d0b0b48409345cb025be29906942de002aaccd4addceb19281e46e491->enter($__internal_8e65224d0b0b48409345cb025be29906942de002aaccd4addceb19281e46e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:edit.html.twig"));

        $__internal_d0d8fec352765e5fb8033f3ee9973f10ea0b4308f3d5dd9d6f0d9613fe938345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d8fec352765e5fb8033f3ee9973f10ea0b4308f3d5dd9d6f0d9613fe938345->enter($__internal_d0d8fec352765e5fb8033f3ee9973f10ea0b4308f3d5dd9d6f0d9613fe938345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e65224d0b0b48409345cb025be29906942de002aaccd4addceb19281e46e491->leave($__internal_8e65224d0b0b48409345cb025be29906942de002aaccd4addceb19281e46e491_prof);

        
        $__internal_d0d8fec352765e5fb8033f3ee9973f10ea0b4308f3d5dd9d6f0d9613fe938345->leave($__internal_d0d8fec352765e5fb8033f3ee9973f10ea0b4308f3d5dd9d6f0d9613fe938345_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53c48240497fd15c71e73ca9be914155e2be69c0cd78a3a4546e231c100506af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c48240497fd15c71e73ca9be914155e2be69c0cd78a3a4546e231c100506af->enter($__internal_53c48240497fd15c71e73ca9be914155e2be69c0cd78a3a4546e231c100506af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dc180beccd418aadaac7772acf2d39a5bb1b05cda5d77cedd1a2bc2aeb752f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc180beccd418aadaac7772acf2d39a5bb1b05cda5d77cedd1a2bc2aeb752f4->enter($__internal_2dc180beccd418aadaac7772acf2d39a5bb1b05cda5d77cedd1a2bc2aeb752f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier Votre reclamation </h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), 'form_start');
        echo "
    <div class=\"col-md-12\">

        <div class=\"form-group col-md-8\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "commercial", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "commercial", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group col-md-8\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "contenu", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "contenu", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

    </div>

            <button type=\"submit\" class=\"btn btn-success\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\" ><i class=\"fa fa-check\"></i>  Edit </button>
        <a class=\"btn btn-default\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\"  > <i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), 'form_end');
        echo "

";
        
        $__internal_2dc180beccd418aadaac7772acf2d39a5bb1b05cda5d77cedd1a2bc2aeb752f4->leave($__internal_2dc180beccd418aadaac7772acf2d39a5bb1b05cda5d77cedd1a2bc2aeb752f4_prof);

        
        $__internal_53c48240497fd15c71e73ca9be914155e2be69c0cd78a3a4546e231c100506af->leave($__internal_53c48240497fd15c71e73ca9be914155e2be69c0cd78a3a4546e231c100506af_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  94 => 23,  90 => 22,  82 => 17,  78 => 16,  74 => 15,  68 => 12,  64 => 11,  60 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Modifier Votre reclamation </h1>

    {{ form_start(edit) }}
    <div class=\"col-md-12\">

        <div class=\"form-group col-md-8\">
            {{ form_label(edit.commercial) }}
            {{ form_errors(edit.commercial) }}
            {{ form_widget(edit.commercial, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"form-group col-md-8\">
            {{ form_label(edit.contenu) }}
            {{ form_errors(edit.contenu) }}
            {{ form_widget(edit.contenu, {'attr': {'class': 'form-control'}}) }}
        </div>

    </div>

            <button type=\"submit\" class=\"btn btn-success\" href=\"{{ path('reclamations_index') }}\" ><i class=\"fa fa-check\"></i>  Edit </button>
        <a class=\"btn btn-default\" href=\"{{ path('reclamations_index') }}\"  > <i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
    {{ form_end(edit) }}

{% endblock %}
", "FrontBundle:reclamations:edit.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/edit.html.twig");
    }
}

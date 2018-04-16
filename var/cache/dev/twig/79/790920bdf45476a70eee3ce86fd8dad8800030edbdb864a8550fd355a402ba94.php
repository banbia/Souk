<?php

/* FrontBundle:commandes:new.html.twig */
class __TwigTemplate_16eecceb09d4bbdaa5082b405382551faff8170e0b33b5ff6dc9af7c7b282da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:new.html.twig", 1);
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
        $__internal_d34c99f4642397bdc7450eefe117c169f3be17b69f06fab7a1cb9528d662047f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34c99f4642397bdc7450eefe117c169f3be17b69f06fab7a1cb9528d662047f->enter($__internal_d34c99f4642397bdc7450eefe117c169f3be17b69f06fab7a1cb9528d662047f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:new.html.twig"));

        $__internal_cdba9d5f34cd16bd215ffd060cc7d7dca6a499ec49c46425b7d4966d86b7ff9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdba9d5f34cd16bd215ffd060cc7d7dca6a499ec49c46425b7d4966d86b7ff9a->enter($__internal_cdba9d5f34cd16bd215ffd060cc7d7dca6a499ec49c46425b7d4966d86b7ff9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d34c99f4642397bdc7450eefe117c169f3be17b69f06fab7a1cb9528d662047f->leave($__internal_d34c99f4642397bdc7450eefe117c169f3be17b69f06fab7a1cb9528d662047f_prof);

        
        $__internal_cdba9d5f34cd16bd215ffd060cc7d7dca6a499ec49c46425b7d4966d86b7ff9a->leave($__internal_cdba9d5f34cd16bd215ffd060cc7d7dca6a499ec49c46425b7d4966d86b7ff9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2037b5b401c2bff92a56bfd0649e97b185d88874e5691813b49a017d2757b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2037b5b401c2bff92a56bfd0649e97b185d88874e5691813b49a017d2757b1e->enter($__internal_c2037b5b401c2bff92a56bfd0649e97b185d88874e5691813b49a017d2757b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e809c8843eb5e75cf0b310878c70f93cb67e05b34251be3a7d6a723d7d61aaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e809c8843eb5e75cf0b310878c70f93cb67e05b34251be3a7d6a723d7d61aaba->enter($__internal_e809c8843eb5e75cf0b310878c70f93cb67e05b34251be3a7d6a723d7d61aaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nouvelle Commande</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"col-md-12\">
        <div class=\"form-group col-md-6\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group col-md-6\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_e809c8843eb5e75cf0b310878c70f93cb67e05b34251be3a7d6a723d7d61aaba->leave($__internal_e809c8843eb5e75cf0b310878c70f93cb67e05b34251be3a7d6a723d7d61aaba_prof);

        
        $__internal_c2037b5b401c2bff92a56bfd0649e97b185d88874e5691813b49a017d2757b1e->leave($__internal_c2037b5b401c2bff92a56bfd0649e97b185d88874e5691813b49a017d2757b1e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  81 => 16,  77 => 15,  73 => 14,  67 => 11,  63 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Nouvelle Commande</h1>

    {{ form_start(form) }}
    <div class=\"col-md-12\">
        <div class=\"form-group col-md-6\">
            {{ form_label(form.dateCom) }}
            {{ form_errors(form.dateCom) }}
            {{ form_widget(form.dateCom, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"form-group col-md-6\">
            {{ form_label(form.quantite) }}
            {{ form_errors(form.quantite) }}
            {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    {{ form_end(form) }}

{% endblock %}
", "FrontBundle:commandes:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/new.html.twig");
    }
}

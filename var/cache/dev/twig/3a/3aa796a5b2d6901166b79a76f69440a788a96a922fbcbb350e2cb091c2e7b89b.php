<?php

/* FrontBundle:reclamations:new.html.twig */
class __TwigTemplate_bbaae011773af4285b0d19d7b35bf8289fb436de6419dac255663141461751ae extends Twig_Template
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
        $__internal_a1dd6412d78d4a91b0d08829854acf97718bc603feba03b6625b9460ae2f6b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1dd6412d78d4a91b0d08829854acf97718bc603feba03b6625b9460ae2f6b5c->enter($__internal_a1dd6412d78d4a91b0d08829854acf97718bc603feba03b6625b9460ae2f6b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:new.html.twig"));

        $__internal_e867314d5fc99b032bfde0676fdbde82da1a0916a096c8b1400ca8f3250ab14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e867314d5fc99b032bfde0676fdbde82da1a0916a096c8b1400ca8f3250ab14d->enter($__internal_e867314d5fc99b032bfde0676fdbde82da1a0916a096c8b1400ca8f3250ab14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1dd6412d78d4a91b0d08829854acf97718bc603feba03b6625b9460ae2f6b5c->leave($__internal_a1dd6412d78d4a91b0d08829854acf97718bc603feba03b6625b9460ae2f6b5c_prof);

        
        $__internal_e867314d5fc99b032bfde0676fdbde82da1a0916a096c8b1400ca8f3250ab14d->leave($__internal_e867314d5fc99b032bfde0676fdbde82da1a0916a096c8b1400ca8f3250ab14d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_204a9144116ed9a380bdec8a166c38438205fa4671483d627db53606396d8376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204a9144116ed9a380bdec8a166c38438205fa4671483d627db53606396d8376->enter($__internal_204a9144116ed9a380bdec8a166c38438205fa4671483d627db53606396d8376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_363daa10b5db9975bfbb8328e1219ef0bd75ec503ed785e514fa69f14f267d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363daa10b5db9975bfbb8328e1219ef0bd75ec503ed785e514fa69f14f267d9b->enter($__internal_363daa10b5db9975bfbb8328e1219ef0bd75ec503ed785e514fa69f14f267d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crèer une reclamation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"col-md-12\">

        <div class=\"form-group col-md-12\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commercial", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commercial", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group col-md-12\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

    </div>
    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_363daa10b5db9975bfbb8328e1219ef0bd75ec503ed785e514fa69f14f267d9b->leave($__internal_363daa10b5db9975bfbb8328e1219ef0bd75ec503ed785e514fa69f14f267d9b_prof);

        
        $__internal_204a9144116ed9a380bdec8a166c38438205fa4671483d627db53606396d8376->leave($__internal_204a9144116ed9a380bdec8a166c38438205fa4671483d627db53606396d8376_prof);

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
", "FrontBundle:reclamations:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/reclamations/new.html.twig");
    }
}

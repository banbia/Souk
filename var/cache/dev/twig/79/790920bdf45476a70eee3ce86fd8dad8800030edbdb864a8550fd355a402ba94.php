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
        $__internal_009349dfaa2987864c626bb455a863ee1237e270e8693b10b5b89e996e997e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009349dfaa2987864c626bb455a863ee1237e270e8693b10b5b89e996e997e7c->enter($__internal_009349dfaa2987864c626bb455a863ee1237e270e8693b10b5b89e996e997e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:new.html.twig"));

        $__internal_855e487a3fce781f280b844a167387de5494ca12e67ce8cbf18a178f72582703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855e487a3fce781f280b844a167387de5494ca12e67ce8cbf18a178f72582703->enter($__internal_855e487a3fce781f280b844a167387de5494ca12e67ce8cbf18a178f72582703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009349dfaa2987864c626bb455a863ee1237e270e8693b10b5b89e996e997e7c->leave($__internal_009349dfaa2987864c626bb455a863ee1237e270e8693b10b5b89e996e997e7c_prof);

        
        $__internal_855e487a3fce781f280b844a167387de5494ca12e67ce8cbf18a178f72582703->leave($__internal_855e487a3fce781f280b844a167387de5494ca12e67ce8cbf18a178f72582703_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fd8cbab9d971ba5dc1efcebf4f83243fd1f1083bb7cb93995b098f75fe54596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd8cbab9d971ba5dc1efcebf4f83243fd1f1083bb7cb93995b098f75fe54596->enter($__internal_7fd8cbab9d971ba5dc1efcebf4f83243fd1f1083bb7cb93995b098f75fe54596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_060b5e0791b901321d896b7fab0d489d6cf7b195a0b9a9f49256298caf4078c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060b5e0791b901321d896b7fab0d489d6cf7b195a0b9a9f49256298caf4078c9->enter($__internal_060b5e0791b901321d896b7fab0d489d6cf7b195a0b9a9f49256298caf4078c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_060b5e0791b901321d896b7fab0d489d6cf7b195a0b9a9f49256298caf4078c9->leave($__internal_060b5e0791b901321d896b7fab0d489d6cf7b195a0b9a9f49256298caf4078c9_prof);

        
        $__internal_7fd8cbab9d971ba5dc1efcebf4f83243fd1f1083bb7cb93995b098f75fe54596->leave($__internal_7fd8cbab9d971ba5dc1efcebf4f83243fd1f1083bb7cb93995b098f75fe54596_prof);

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

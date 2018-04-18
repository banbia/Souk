<?php

/* FrontBundle:commentairesEvs:edit_commentaireEvs.html.twig */
class __TwigTemplate_bfb3b1066cc90108ceb518632827a4db8112935feb1067f948860a6dde44eb89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesEvs:edit_commentaireEvs.html.twig", 1);
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
        $__internal_aea493444ec589987ba547d367a66132443e853a1d11970f27296b706e9e78af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea493444ec589987ba547d367a66132443e853a1d11970f27296b706e9e78af->enter($__internal_aea493444ec589987ba547d367a66132443e853a1d11970f27296b706e9e78af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:edit_commentaireEvs.html.twig"));

        $__internal_419b4420bf743c0521d176b4def66b83d401050954f27ef17c5e79fea84e4fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419b4420bf743c0521d176b4def66b83d401050954f27ef17c5e79fea84e4fb1->enter($__internal_419b4420bf743c0521d176b4def66b83d401050954f27ef17c5e79fea84e4fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:edit_commentaireEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea493444ec589987ba547d367a66132443e853a1d11970f27296b706e9e78af->leave($__internal_aea493444ec589987ba547d367a66132443e853a1d11970f27296b706e9e78af_prof);

        
        $__internal_419b4420bf743c0521d176b4def66b83d401050954f27ef17c5e79fea84e4fb1->leave($__internal_419b4420bf743c0521d176b4def66b83d401050954f27ef17c5e79fea84e4fb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c28cd1062b1d0df67d21f9cdfee272a806e9c36e869b95b36a94f40a5daca37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28cd1062b1d0df67d21f9cdfee272a806e9c36e869b95b36a94f40a5daca37b->enter($__internal_c28cd1062b1d0df67d21f9cdfee272a806e9c36e869b95b36a94f40a5daca37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_113ee29fe5c2f23cb7fd52b7f373552a484eb1de7718b79535411a0cf280396e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113ee29fe5c2f23cb7fd52b7f373552a484eb1de7718b79535411a0cf280396e->enter($__internal_113ee29fe5c2f23cb7fd52b7f373552a484eb1de7718b79535411a0cf280396e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<p> bonjour </p>
";
        
        $__internal_113ee29fe5c2f23cb7fd52b7f373552a484eb1de7718b79535411a0cf280396e->leave($__internal_113ee29fe5c2f23cb7fd52b7f373552a484eb1de7718b79535411a0cf280396e_prof);

        
        $__internal_c28cd1062b1d0df67d21f9cdfee272a806e9c36e869b95b36a94f40a5daca37b->leave($__internal_c28cd1062b1d0df67d21f9cdfee272a806e9c36e869b95b36a94f40a5daca37b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesEvs:edit_commentaireEvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<p> bonjour </p>
{% endblock %}", "FrontBundle:commentairesEvs:edit_commentaireEvs.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commentairesEvs/edit_commentaireEvs.html.twig");
    }
}

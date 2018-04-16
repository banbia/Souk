<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8841db1388cb2e57d617955a179ea76105f7008f8aa28548f771615e0176ed46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5->enter($__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312->enter($__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5->leave($__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5_prof);

        
        $__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312->leave($__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312_prof);

    }

    // line 3
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb->enter($__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0->enter($__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0->leave($__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0_prof);

        
        $__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb->leave($__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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

{% block formulaire %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock formulaire %}
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}

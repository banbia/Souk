<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_cf926b1cc016d22012cd7949a3a757ded702bd9b43d3c4fc0860caed10eca414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec8f27049f68d5418514bed7ee2d974cf260eec3bff5eb3055af91cdb2a9b40b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8f27049f68d5418514bed7ee2d974cf260eec3bff5eb3055af91cdb2a9b40b->enter($__internal_ec8f27049f68d5418514bed7ee2d974cf260eec3bff5eb3055af91cdb2a9b40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_dc2444b1ebbbf75a85638136ba3aafe2e81b6d8907bee31d0bd2eee06a451694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2444b1ebbbf75a85638136ba3aafe2e81b6d8907bee31d0bd2eee06a451694->enter($__internal_dc2444b1ebbbf75a85638136ba3aafe2e81b6d8907bee31d0bd2eee06a451694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8f27049f68d5418514bed7ee2d974cf260eec3bff5eb3055af91cdb2a9b40b->leave($__internal_ec8f27049f68d5418514bed7ee2d974cf260eec3bff5eb3055af91cdb2a9b40b_prof);

        
        $__internal_dc2444b1ebbbf75a85638136ba3aafe2e81b6d8907bee31d0bd2eee06a451694->leave($__internal_dc2444b1ebbbf75a85638136ba3aafe2e81b6d8907bee31d0bd2eee06a451694_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_98362b0cf5f8163380843434d451944638948eded4e92cad12499d33e03b22ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98362b0cf5f8163380843434d451944638948eded4e92cad12499d33e03b22ad->enter($__internal_98362b0cf5f8163380843434d451944638948eded4e92cad12499d33e03b22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_48d4431715022657f982ff8f59df30819f7eee17d33365a34e228df0bbb92cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d4431715022657f982ff8f59df30819f7eee17d33365a34e228df0bbb92cc1->enter($__internal_48d4431715022657f982ff8f59df30819f7eee17d33365a34e228df0bbb92cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_48d4431715022657f982ff8f59df30819f7eee17d33365a34e228df0bbb92cc1->leave($__internal_48d4431715022657f982ff8f59df30819f7eee17d33365a34e228df0bbb92cc1_prof);

        
        $__internal_98362b0cf5f8163380843434d451944638948eded4e92cad12499d33e03b22ad->leave($__internal_98362b0cf5f8163380843434d451944638948eded4e92cad12499d33e03b22ad_prof);

    }

    // line 6
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_1be24531bb01cee8e25c56f81b69156c4f9079f5a9051ccd0e86480ed98e253b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be24531bb01cee8e25c56f81b69156c4f9079f5a9051ccd0e86480ed98e253b->enter($__internal_1be24531bb01cee8e25c56f81b69156c4f9079f5a9051ccd0e86480ed98e253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_eeac435ee86a2f9f9e218757cce49f55941d36a7fe8097391f76b697aef04645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeac435ee86a2f9f9e218757cce49f55941d36a7fe8097391f76b697aef04645->enter($__internal_eeac435ee86a2f9f9e218757cce49f55941d36a7fe8097391f76b697aef04645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 7
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 7)->display($context);
        
        $__internal_eeac435ee86a2f9f9e218757cce49f55941d36a7fe8097391f76b697aef04645->leave($__internal_eeac435ee86a2f9f9e218757cce49f55941d36a7fe8097391f76b697aef04645_prof);

        
        $__internal_1be24531bb01cee8e25c56f81b69156c4f9079f5a9051ccd0e86480ed98e253b->leave($__internal_1be24531bb01cee8e25c56f81b69156c4f9079f5a9051ccd0e86480ed98e253b_prof);

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
        return array (  73 => 7,  64 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
{% block style %}
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block formulaire %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock formulaire %}
", "@FOSUser/Profile/show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/show.html.twig");
    }
}

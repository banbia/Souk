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
        $__internal_874984d59c246f0f1ee69efbd14e10aaed71d205e20e137088de4fbbc81a7089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874984d59c246f0f1ee69efbd14e10aaed71d205e20e137088de4fbbc81a7089->enter($__internal_874984d59c246f0f1ee69efbd14e10aaed71d205e20e137088de4fbbc81a7089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_4c75dafc09292bbe645479b1778d4e4c14fbe1c385f8f6fee49cdaedf511f144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c75dafc09292bbe645479b1778d4e4c14fbe1c385f8f6fee49cdaedf511f144->enter($__internal_4c75dafc09292bbe645479b1778d4e4c14fbe1c385f8f6fee49cdaedf511f144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_874984d59c246f0f1ee69efbd14e10aaed71d205e20e137088de4fbbc81a7089->leave($__internal_874984d59c246f0f1ee69efbd14e10aaed71d205e20e137088de4fbbc81a7089_prof);

        
        $__internal_4c75dafc09292bbe645479b1778d4e4c14fbe1c385f8f6fee49cdaedf511f144->leave($__internal_4c75dafc09292bbe645479b1778d4e4c14fbe1c385f8f6fee49cdaedf511f144_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_cab9140a8bde3f1993c973569e4da6346a4e16e3d7402d8cc95e7b12df0d41e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab9140a8bde3f1993c973569e4da6346a4e16e3d7402d8cc95e7b12df0d41e4->enter($__internal_cab9140a8bde3f1993c973569e4da6346a4e16e3d7402d8cc95e7b12df0d41e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_61410790a4893133711cbb9549c87e7b63f616929c40165b7fd45fab150984a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61410790a4893133711cbb9549c87e7b63f616929c40165b7fd45fab150984a8->enter($__internal_61410790a4893133711cbb9549c87e7b63f616929c40165b7fd45fab150984a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_61410790a4893133711cbb9549c87e7b63f616929c40165b7fd45fab150984a8->leave($__internal_61410790a4893133711cbb9549c87e7b63f616929c40165b7fd45fab150984a8_prof);

        
        $__internal_cab9140a8bde3f1993c973569e4da6346a4e16e3d7402d8cc95e7b12df0d41e4->leave($__internal_cab9140a8bde3f1993c973569e4da6346a4e16e3d7402d8cc95e7b12df0d41e4_prof);

    }

    // line 6
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_42c576d3ce7953a26c65a5f2cf5ef06a24307a47d08bc6a4a54e5c894676dcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c576d3ce7953a26c65a5f2cf5ef06a24307a47d08bc6a4a54e5c894676dcae->enter($__internal_42c576d3ce7953a26c65a5f2cf5ef06a24307a47d08bc6a4a54e5c894676dcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_8afd93f63d387de3a893bb6d4a9a5681998024e9827dcadc03c3ba2b9853e0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afd93f63d387de3a893bb6d4a9a5681998024e9827dcadc03c3ba2b9853e0cd->enter($__internal_8afd93f63d387de3a893bb6d4a9a5681998024e9827dcadc03c3ba2b9853e0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 7
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 7)->display($context);
        
        $__internal_8afd93f63d387de3a893bb6d4a9a5681998024e9827dcadc03c3ba2b9853e0cd->leave($__internal_8afd93f63d387de3a893bb6d4a9a5681998024e9827dcadc03c3ba2b9853e0cd_prof);

        
        $__internal_42c576d3ce7953a26c65a5f2cf5ef06a24307a47d08bc6a4a54e5c894676dcae->leave($__internal_42c576d3ce7953a26c65a5f2cf5ef06a24307a47d08bc6a4a54e5c894676dcae_prof);

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
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}

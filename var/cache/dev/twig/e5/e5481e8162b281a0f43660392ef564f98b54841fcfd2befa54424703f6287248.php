<?php

/* FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig */
class __TwigTemplate_e6a669b63cbf1307142e5fc985d28447dd994133a7d8d9ec69316f54c311dbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig", 1);
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
        $__internal_0d9a97fc69b7979ad6dd9d9e34a1b5b1706b78b0617f4631610e74a1304f6da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9a97fc69b7979ad6dd9d9e34a1b5b1706b78b0617f4631610e74a1304f6da5->enter($__internal_0d9a97fc69b7979ad6dd9d9e34a1b5b1706b78b0617f4631610e74a1304f6da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig"));

        $__internal_8fa5d7c32b26017fcb7fd4eaff9b3495d6ec1ec9cef9aa31b45d939632bdc13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa5d7c32b26017fcb7fd4eaff9b3495d6ec1ec9cef9aa31b45d939632bdc13c->enter($__internal_8fa5d7c32b26017fcb7fd4eaff9b3495d6ec1ec9cef9aa31b45d939632bdc13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d9a97fc69b7979ad6dd9d9e34a1b5b1706b78b0617f4631610e74a1304f6da5->leave($__internal_0d9a97fc69b7979ad6dd9d9e34a1b5b1706b78b0617f4631610e74a1304f6da5_prof);

        
        $__internal_8fa5d7c32b26017fcb7fd4eaff9b3495d6ec1ec9cef9aa31b45d939632bdc13c->leave($__internal_8fa5d7c32b26017fcb7fd4eaff9b3495d6ec1ec9cef9aa31b45d939632bdc13c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a91a5e66a8e69d7ab4d492e4cc632e9e29e1896f95065ec9f21c4ae79b7609f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91a5e66a8e69d7ab4d492e4cc632e9e29e1896f95065ec9f21c4ae79b7609f5->enter($__internal_a91a5e66a8e69d7ab4d492e4cc632e9e29e1896f95065ec9f21c4ae79b7609f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48444520c0cd6a60e0b882afbb3d154b4ed3bacc310b2d1868b1e29be74c54d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48444520c0cd6a60e0b882afbb3d154b4ed3bacc310b2d1868b1e29be74c54d3->enter($__internal_48444520c0cd6a60e0b882afbb3d154b4ed3bacc310b2d1868b1e29be74c54d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<p> bonjour </p>
";
        
        $__internal_48444520c0cd6a60e0b882afbb3d154b4ed3bacc310b2d1868b1e29be74c54d3->leave($__internal_48444520c0cd6a60e0b882afbb3d154b4ed3bacc310b2d1868b1e29be74c54d3_prof);

        
        $__internal_a91a5e66a8e69d7ab4d492e4cc632e9e29e1896f95065ec9f21c4ae79b7609f5->leave($__internal_a91a5e66a8e69d7ab4d492e4cc632e9e29e1896f95065ec9f21c4ae79b7609f5_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig";
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
{% endblock %}", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commentairesAnc/edit_commantaireAnc.html.twig");
    }
}

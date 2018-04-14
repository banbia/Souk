<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4dfcc994a539f1eb00dd82bcf7738475ba0487ef31bf488d8c1a177a50b99324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eedcc58d862de066c5ad431ae239b84ee77c24c84bd90d37aa4db15adc064883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedcc58d862de066c5ad431ae239b84ee77c24c84bd90d37aa4db15adc064883->enter($__internal_eedcc58d862de066c5ad431ae239b84ee77c24c84bd90d37aa4db15adc064883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_89ac61a421512a694990b0065770165d9259950ab1d737b778c82cbaee9770da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ac61a421512a694990b0065770165d9259950ab1d737b778c82cbaee9770da->enter($__internal_89ac61a421512a694990b0065770165d9259950ab1d737b778c82cbaee9770da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eedcc58d862de066c5ad431ae239b84ee77c24c84bd90d37aa4db15adc064883->leave($__internal_eedcc58d862de066c5ad431ae239b84ee77c24c84bd90d37aa4db15adc064883_prof);

        
        $__internal_89ac61a421512a694990b0065770165d9259950ab1d737b778c82cbaee9770da->leave($__internal_89ac61a421512a694990b0065770165d9259950ab1d737b778c82cbaee9770da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2674d71d3f79a5563c85fec6dc6c606eca265d86959d7759ee12f77f1582e6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2674d71d3f79a5563c85fec6dc6c606eca265d86959d7759ee12f77f1582e6e2->enter($__internal_2674d71d3f79a5563c85fec6dc6c606eca265d86959d7759ee12f77f1582e6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e67328274b0fc6ffaa2313fa111edf7d1776a2762ee7716147e0d9e9e5e64ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67328274b0fc6ffaa2313fa111edf7d1776a2762ee7716147e0d9e9e5e64ce1->enter($__internal_e67328274b0fc6ffaa2313fa111edf7d1776a2762ee7716147e0d9e9e5e64ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e67328274b0fc6ffaa2313fa111edf7d1776a2762ee7716147e0d9e9e5e64ce1->leave($__internal_e67328274b0fc6ffaa2313fa111edf7d1776a2762ee7716147e0d9e9e5e64ce1_prof);

        
        $__internal_2674d71d3f79a5563c85fec6dc6c606eca265d86959d7759ee12f77f1582e6e2->leave($__internal_2674d71d3f79a5563c85fec6dc6c606eca265d86959d7759ee12f77f1582e6e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

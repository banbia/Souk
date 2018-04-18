<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_431ab6c8734ef892c5175ce7e9c54bb02794f5f6bbc181a9554cecdc6680f494 extends Twig_Template
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
        $__internal_4bd796b635d3fcc96710499a6c093930ffdef5389155ca6761a16eacaa75129a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd796b635d3fcc96710499a6c093930ffdef5389155ca6761a16eacaa75129a->enter($__internal_4bd796b635d3fcc96710499a6c093930ffdef5389155ca6761a16eacaa75129a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_29999659a5655f447a1dc614339c3d1ea75c6e516c449cef5e35143db6652d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29999659a5655f447a1dc614339c3d1ea75c6e516c449cef5e35143db6652d9d->enter($__internal_29999659a5655f447a1dc614339c3d1ea75c6e516c449cef5e35143db6652d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd796b635d3fcc96710499a6c093930ffdef5389155ca6761a16eacaa75129a->leave($__internal_4bd796b635d3fcc96710499a6c093930ffdef5389155ca6761a16eacaa75129a_prof);

        
        $__internal_29999659a5655f447a1dc614339c3d1ea75c6e516c449cef5e35143db6652d9d->leave($__internal_29999659a5655f447a1dc614339c3d1ea75c6e516c449cef5e35143db6652d9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cbcbe564c1a440f839038759798dc0038089c7e5b01c96385a72f6de78439ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbcbe564c1a440f839038759798dc0038089c7e5b01c96385a72f6de78439ae->enter($__internal_7cbcbe564c1a440f839038759798dc0038089c7e5b01c96385a72f6de78439ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_81427147d1cd09dfd93bd6d28df9d2eea94c33be604fa072eac3a4cf280553f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81427147d1cd09dfd93bd6d28df9d2eea94c33be604fa072eac3a4cf280553f0->enter($__internal_81427147d1cd09dfd93bd6d28df9d2eea94c33be604fa072eac3a4cf280553f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_81427147d1cd09dfd93bd6d28df9d2eea94c33be604fa072eac3a4cf280553f0->leave($__internal_81427147d1cd09dfd93bd6d28df9d2eea94c33be604fa072eac3a4cf280553f0_prof);

        
        $__internal_7cbcbe564c1a440f839038759798dc0038089c7e5b01c96385a72f6de78439ae->leave($__internal_7cbcbe564c1a440f839038759798dc0038089c7e5b01c96385a72f6de78439ae_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

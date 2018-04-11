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
        $__internal_63340b2c6cb32a18a4a9497165de669fb6fb98ebda8c805a9c1fecaf26d1ee16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63340b2c6cb32a18a4a9497165de669fb6fb98ebda8c805a9c1fecaf26d1ee16->enter($__internal_63340b2c6cb32a18a4a9497165de669fb6fb98ebda8c805a9c1fecaf26d1ee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d9465c2ac97d4668a5677104b1b460479d28572021b555452f0245a58c1db7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9465c2ac97d4668a5677104b1b460479d28572021b555452f0245a58c1db7e2->enter($__internal_d9465c2ac97d4668a5677104b1b460479d28572021b555452f0245a58c1db7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63340b2c6cb32a18a4a9497165de669fb6fb98ebda8c805a9c1fecaf26d1ee16->leave($__internal_63340b2c6cb32a18a4a9497165de669fb6fb98ebda8c805a9c1fecaf26d1ee16_prof);

        
        $__internal_d9465c2ac97d4668a5677104b1b460479d28572021b555452f0245a58c1db7e2->leave($__internal_d9465c2ac97d4668a5677104b1b460479d28572021b555452f0245a58c1db7e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_227c37cf38202c600468cf31bd2338e46b223f459c74cfd94faa2997c4ac7878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227c37cf38202c600468cf31bd2338e46b223f459c74cfd94faa2997c4ac7878->enter($__internal_227c37cf38202c600468cf31bd2338e46b223f459c74cfd94faa2997c4ac7878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0086187d52ffced08af17e5d42b62f1845183562725efa7ac680983dc7abd799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0086187d52ffced08af17e5d42b62f1845183562725efa7ac680983dc7abd799->enter($__internal_0086187d52ffced08af17e5d42b62f1845183562725efa7ac680983dc7abd799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0086187d52ffced08af17e5d42b62f1845183562725efa7ac680983dc7abd799->leave($__internal_0086187d52ffced08af17e5d42b62f1845183562725efa7ac680983dc7abd799_prof);

        
        $__internal_227c37cf38202c600468cf31bd2338e46b223f459c74cfd94faa2997c4ac7878->leave($__internal_227c37cf38202c600468cf31bd2338e46b223f459c74cfd94faa2997c4ac7878_prof);

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

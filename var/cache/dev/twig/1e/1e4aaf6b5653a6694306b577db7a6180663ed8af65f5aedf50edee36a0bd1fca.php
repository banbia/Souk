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
        $__internal_9b00e882a19a0cac4b1dbea1cf1633368a356ab036f9edf74162b04caff8ca31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b00e882a19a0cac4b1dbea1cf1633368a356ab036f9edf74162b04caff8ca31->enter($__internal_9b00e882a19a0cac4b1dbea1cf1633368a356ab036f9edf74162b04caff8ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9c3c3131542df8d09ae3a81c30969ba8f3deb3efe455643541fd30ff685ba65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3c3131542df8d09ae3a81c30969ba8f3deb3efe455643541fd30ff685ba65c->enter($__internal_9c3c3131542df8d09ae3a81c30969ba8f3deb3efe455643541fd30ff685ba65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b00e882a19a0cac4b1dbea1cf1633368a356ab036f9edf74162b04caff8ca31->leave($__internal_9b00e882a19a0cac4b1dbea1cf1633368a356ab036f9edf74162b04caff8ca31_prof);

        
        $__internal_9c3c3131542df8d09ae3a81c30969ba8f3deb3efe455643541fd30ff685ba65c->leave($__internal_9c3c3131542df8d09ae3a81c30969ba8f3deb3efe455643541fd30ff685ba65c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78d00246ad7ee98d6641a0903ac64e75f9afd794a108098a0a0f9a500b9174fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d00246ad7ee98d6641a0903ac64e75f9afd794a108098a0a0f9a500b9174fc->enter($__internal_78d00246ad7ee98d6641a0903ac64e75f9afd794a108098a0a0f9a500b9174fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7b70fd8fe8c6b6f1dde866465bfbb93cf30a59f5a366634e328795a815fc9830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b70fd8fe8c6b6f1dde866465bfbb93cf30a59f5a366634e328795a815fc9830->enter($__internal_7b70fd8fe8c6b6f1dde866465bfbb93cf30a59f5a366634e328795a815fc9830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7b70fd8fe8c6b6f1dde866465bfbb93cf30a59f5a366634e328795a815fc9830->leave($__internal_7b70fd8fe8c6b6f1dde866465bfbb93cf30a59f5a366634e328795a815fc9830_prof);

        
        $__internal_78d00246ad7ee98d6641a0903ac64e75f9afd794a108098a0a0f9a500b9174fc->leave($__internal_78d00246ad7ee98d6641a0903ac64e75f9afd794a108098a0a0f9a500b9174fc_prof);

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

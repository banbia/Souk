<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9c6537206f7398ea4ea054f75b43a06b8c719a6d9bac2033b0f775392084cb0a extends Twig_Template
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
        $__internal_d3d2bd70e8d20b74fd08f76e2acc209d33ddcb77018eb95f7b1133b8205dd9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d2bd70e8d20b74fd08f76e2acc209d33ddcb77018eb95f7b1133b8205dd9ad->enter($__internal_d3d2bd70e8d20b74fd08f76e2acc209d33ddcb77018eb95f7b1133b8205dd9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_daa5764f7da5cfb4630769503ae97a8f8d9e7a3af2b050b2aad8e6135b443b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa5764f7da5cfb4630769503ae97a8f8d9e7a3af2b050b2aad8e6135b443b81->enter($__internal_daa5764f7da5cfb4630769503ae97a8f8d9e7a3af2b050b2aad8e6135b443b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3d2bd70e8d20b74fd08f76e2acc209d33ddcb77018eb95f7b1133b8205dd9ad->leave($__internal_d3d2bd70e8d20b74fd08f76e2acc209d33ddcb77018eb95f7b1133b8205dd9ad_prof);

        
        $__internal_daa5764f7da5cfb4630769503ae97a8f8d9e7a3af2b050b2aad8e6135b443b81->leave($__internal_daa5764f7da5cfb4630769503ae97a8f8d9e7a3af2b050b2aad8e6135b443b81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c6f34a1276cb801c9e605c61a79e0b5f1ac1af5ddcafbe513eba7a495d87dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6f34a1276cb801c9e605c61a79e0b5f1ac1af5ddcafbe513eba7a495d87dc9->enter($__internal_0c6f34a1276cb801c9e605c61a79e0b5f1ac1af5ddcafbe513eba7a495d87dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d954a4ed3b1ccf587c86c1f095fb70c53d70219ca703aa9e0d8e976d1c0c4482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d954a4ed3b1ccf587c86c1f095fb70c53d70219ca703aa9e0d8e976d1c0c4482->enter($__internal_d954a4ed3b1ccf587c86c1f095fb70c53d70219ca703aa9e0d8e976d1c0c4482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d954a4ed3b1ccf587c86c1f095fb70c53d70219ca703aa9e0d8e976d1c0c4482->leave($__internal_d954a4ed3b1ccf587c86c1f095fb70c53d70219ca703aa9e0d8e976d1c0c4482_prof);

        
        $__internal_0c6f34a1276cb801c9e605c61a79e0b5f1ac1af5ddcafbe513eba7a495d87dc9->leave($__internal_0c6f34a1276cb801c9e605c61a79e0b5f1ac1af5ddcafbe513eba7a495d87dc9_prof);

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

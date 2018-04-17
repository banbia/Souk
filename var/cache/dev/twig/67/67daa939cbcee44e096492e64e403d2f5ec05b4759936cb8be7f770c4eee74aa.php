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
        $__internal_eb2af2904fbf1a0b5a8ae51940e40c848fb29f698d480f7a1264c7210f31795e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2af2904fbf1a0b5a8ae51940e40c848fb29f698d480f7a1264c7210f31795e->enter($__internal_eb2af2904fbf1a0b5a8ae51940e40c848fb29f698d480f7a1264c7210f31795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d79958bf7a2960459b137afb38108e3c98900dddb36e9b5363d0d9fcd879466e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79958bf7a2960459b137afb38108e3c98900dddb36e9b5363d0d9fcd879466e->enter($__internal_d79958bf7a2960459b137afb38108e3c98900dddb36e9b5363d0d9fcd879466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2af2904fbf1a0b5a8ae51940e40c848fb29f698d480f7a1264c7210f31795e->leave($__internal_eb2af2904fbf1a0b5a8ae51940e40c848fb29f698d480f7a1264c7210f31795e_prof);

        
        $__internal_d79958bf7a2960459b137afb38108e3c98900dddb36e9b5363d0d9fcd879466e->leave($__internal_d79958bf7a2960459b137afb38108e3c98900dddb36e9b5363d0d9fcd879466e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62c4bc97ad1ef83274026213eddd505edee11ac4b6aa0c648bdf50f20a59121d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c4bc97ad1ef83274026213eddd505edee11ac4b6aa0c648bdf50f20a59121d->enter($__internal_62c4bc97ad1ef83274026213eddd505edee11ac4b6aa0c648bdf50f20a59121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8704411b4a84f7a828163900fdba4199e12180f606ef4605f70fd688652d2f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8704411b4a84f7a828163900fdba4199e12180f606ef4605f70fd688652d2f28->enter($__internal_8704411b4a84f7a828163900fdba4199e12180f606ef4605f70fd688652d2f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8704411b4a84f7a828163900fdba4199e12180f606ef4605f70fd688652d2f28->leave($__internal_8704411b4a84f7a828163900fdba4199e12180f606ef4605f70fd688652d2f28_prof);

        
        $__internal_62c4bc97ad1ef83274026213eddd505edee11ac4b6aa0c648bdf50f20a59121d->leave($__internal_62c4bc97ad1ef83274026213eddd505edee11ac4b6aa0c648bdf50f20a59121d_prof);

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

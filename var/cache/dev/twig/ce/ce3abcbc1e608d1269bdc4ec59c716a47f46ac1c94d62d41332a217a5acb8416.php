<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6e56fe4db7f5de1e6cd33cd207a8c3864626dc40a4500fd7a0deb06d8ef1992f extends Twig_Template
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
        $__internal_aa39b02debd97265fdb40555a19f819a31a2caff2ace94c57694a7939ca414ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa39b02debd97265fdb40555a19f819a31a2caff2ace94c57694a7939ca414ed->enter($__internal_aa39b02debd97265fdb40555a19f819a31a2caff2ace94c57694a7939ca414ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1798cc5dce3f22fa5d1b08b25ab0259f509ab0e6a50f1e635a43d560692692c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1798cc5dce3f22fa5d1b08b25ab0259f509ab0e6a50f1e635a43d560692692c6->enter($__internal_1798cc5dce3f22fa5d1b08b25ab0259f509ab0e6a50f1e635a43d560692692c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa39b02debd97265fdb40555a19f819a31a2caff2ace94c57694a7939ca414ed->leave($__internal_aa39b02debd97265fdb40555a19f819a31a2caff2ace94c57694a7939ca414ed_prof);

        
        $__internal_1798cc5dce3f22fa5d1b08b25ab0259f509ab0e6a50f1e635a43d560692692c6->leave($__internal_1798cc5dce3f22fa5d1b08b25ab0259f509ab0e6a50f1e635a43d560692692c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e52ef961dde4b417e48244c47b2065ba3264c5a0235f242c43e8d57cbd830fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e52ef961dde4b417e48244c47b2065ba3264c5a0235f242c43e8d57cbd830fe->enter($__internal_1e52ef961dde4b417e48244c47b2065ba3264c5a0235f242c43e8d57cbd830fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_132576c8bac2f45e34cf6176596dd94f5499934938b20fe46bb56f6c9d54a1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132576c8bac2f45e34cf6176596dd94f5499934938b20fe46bb56f6c9d54a1b4->enter($__internal_132576c8bac2f45e34cf6176596dd94f5499934938b20fe46bb56f6c9d54a1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_132576c8bac2f45e34cf6176596dd94f5499934938b20fe46bb56f6c9d54a1b4->leave($__internal_132576c8bac2f45e34cf6176596dd94f5499934938b20fe46bb56f6c9d54a1b4_prof);

        
        $__internal_1e52ef961dde4b417e48244c47b2065ba3264c5a0235f242c43e8d57cbd830fe->leave($__internal_1e52ef961dde4b417e48244c47b2065ba3264c5a0235f242c43e8d57cbd830fe_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

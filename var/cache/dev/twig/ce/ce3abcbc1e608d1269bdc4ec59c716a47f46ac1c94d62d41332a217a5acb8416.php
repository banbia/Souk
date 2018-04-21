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
        $__internal_e56d6d2a118352bd0206498fed9a3c19be5b4304c8692ddac796d1429eb4f9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56d6d2a118352bd0206498fed9a3c19be5b4304c8692ddac796d1429eb4f9e9->enter($__internal_e56d6d2a118352bd0206498fed9a3c19be5b4304c8692ddac796d1429eb4f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d83f2215860be972b20572d6dad8865e4c9c8a05e6260d99702df303c723e918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83f2215860be972b20572d6dad8865e4c9c8a05e6260d99702df303c723e918->enter($__internal_d83f2215860be972b20572d6dad8865e4c9c8a05e6260d99702df303c723e918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56d6d2a118352bd0206498fed9a3c19be5b4304c8692ddac796d1429eb4f9e9->leave($__internal_e56d6d2a118352bd0206498fed9a3c19be5b4304c8692ddac796d1429eb4f9e9_prof);

        
        $__internal_d83f2215860be972b20572d6dad8865e4c9c8a05e6260d99702df303c723e918->leave($__internal_d83f2215860be972b20572d6dad8865e4c9c8a05e6260d99702df303c723e918_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c45f0a9a565278e36fca44a0ada0be5912b5536e962552ed2d9327a10ab3d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c45f0a9a565278e36fca44a0ada0be5912b5536e962552ed2d9327a10ab3d26->enter($__internal_8c45f0a9a565278e36fca44a0ada0be5912b5536e962552ed2d9327a10ab3d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e82ba5f1cde8771d84e841061ae326434aac7ab4e52b1836f36eda511989c8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82ba5f1cde8771d84e841061ae326434aac7ab4e52b1836f36eda511989c8ad->enter($__internal_e82ba5f1cde8771d84e841061ae326434aac7ab4e52b1836f36eda511989c8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e82ba5f1cde8771d84e841061ae326434aac7ab4e52b1836f36eda511989c8ad->leave($__internal_e82ba5f1cde8771d84e841061ae326434aac7ab4e52b1836f36eda511989c8ad_prof);

        
        $__internal_8c45f0a9a565278e36fca44a0ada0be5912b5536e962552ed2d9327a10ab3d26->leave($__internal_8c45f0a9a565278e36fca44a0ada0be5912b5536e962552ed2d9327a10ab3d26_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

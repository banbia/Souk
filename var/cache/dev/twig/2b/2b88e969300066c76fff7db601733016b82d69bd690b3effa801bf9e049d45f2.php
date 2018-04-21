<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e8fc5955e73c42b8f54943cb6f26b52176c1655bc9cd28a045d48181e60199e4 extends Twig_Template
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
        $__internal_f542910da9ddef40987dd644ca213e9faa858e902b58135373fcdca9c82a3735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f542910da9ddef40987dd644ca213e9faa858e902b58135373fcdca9c82a3735->enter($__internal_f542910da9ddef40987dd644ca213e9faa858e902b58135373fcdca9c82a3735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d1f3585a0b0a0f936133d3025f619d4b1ddd62425f406ff445eb20daacf19ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f3585a0b0a0f936133d3025f619d4b1ddd62425f406ff445eb20daacf19ea2->enter($__internal_d1f3585a0b0a0f936133d3025f619d4b1ddd62425f406ff445eb20daacf19ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f542910da9ddef40987dd644ca213e9faa858e902b58135373fcdca9c82a3735->leave($__internal_f542910da9ddef40987dd644ca213e9faa858e902b58135373fcdca9c82a3735_prof);

        
        $__internal_d1f3585a0b0a0f936133d3025f619d4b1ddd62425f406ff445eb20daacf19ea2->leave($__internal_d1f3585a0b0a0f936133d3025f619d4b1ddd62425f406ff445eb20daacf19ea2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24f11ec70db72131626c2e7853f13d824ae8f090c2bcc13c09fb0ca7d4a71182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f11ec70db72131626c2e7853f13d824ae8f090c2bcc13c09fb0ca7d4a71182->enter($__internal_24f11ec70db72131626c2e7853f13d824ae8f090c2bcc13c09fb0ca7d4a71182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d154a5102c499639122917e1d53b69b8fdc88d17567c4c603616f9f04200e6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d154a5102c499639122917e1d53b69b8fdc88d17567c4c603616f9f04200e6ae->enter($__internal_d154a5102c499639122917e1d53b69b8fdc88d17567c4c603616f9f04200e6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d154a5102c499639122917e1d53b69b8fdc88d17567c4c603616f9f04200e6ae->leave($__internal_d154a5102c499639122917e1d53b69b8fdc88d17567c4c603616f9f04200e6ae_prof);

        
        $__internal_24f11ec70db72131626c2e7853f13d824ae8f090c2bcc13c09fb0ca7d4a71182->leave($__internal_24f11ec70db72131626c2e7853f13d824ae8f090c2bcc13c09fb0ca7d4a71182_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

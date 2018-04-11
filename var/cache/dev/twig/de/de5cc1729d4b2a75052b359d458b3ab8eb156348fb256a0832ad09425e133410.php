<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_83ad133e26df865b30f5d50a40b6300a8dc231b8f8c7d13e390b930a4ab83985 extends Twig_Template
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
        $__internal_e75e2ddf2d40c198ceddcd3e5cf02b76d2f1492c7b420a75b8a5f3b2e0540adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75e2ddf2d40c198ceddcd3e5cf02b76d2f1492c7b420a75b8a5f3b2e0540adc->enter($__internal_e75e2ddf2d40c198ceddcd3e5cf02b76d2f1492c7b420a75b8a5f3b2e0540adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ee9d527b6075d9ea5d8a852edceeb8a793255aba2f6cdbfe4171b04ce42a5cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9d527b6075d9ea5d8a852edceeb8a793255aba2f6cdbfe4171b04ce42a5cf4->enter($__internal_ee9d527b6075d9ea5d8a852edceeb8a793255aba2f6cdbfe4171b04ce42a5cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e75e2ddf2d40c198ceddcd3e5cf02b76d2f1492c7b420a75b8a5f3b2e0540adc->leave($__internal_e75e2ddf2d40c198ceddcd3e5cf02b76d2f1492c7b420a75b8a5f3b2e0540adc_prof);

        
        $__internal_ee9d527b6075d9ea5d8a852edceeb8a793255aba2f6cdbfe4171b04ce42a5cf4->leave($__internal_ee9d527b6075d9ea5d8a852edceeb8a793255aba2f6cdbfe4171b04ce42a5cf4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b42276a8c56d8525bb76abe072928575988b6925e45e281aa7a8240d97f4aea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42276a8c56d8525bb76abe072928575988b6925e45e281aa7a8240d97f4aea9->enter($__internal_b42276a8c56d8525bb76abe072928575988b6925e45e281aa7a8240d97f4aea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe6b174fbcf8367c78e3703b55a158df6a2158a20bfa9dbcaa2b3b6afa795a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6b174fbcf8367c78e3703b55a158df6a2158a20bfa9dbcaa2b3b6afa795a6d->enter($__internal_fe6b174fbcf8367c78e3703b55a158df6a2158a20bfa9dbcaa2b3b6afa795a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fe6b174fbcf8367c78e3703b55a158df6a2158a20bfa9dbcaa2b3b6afa795a6d->leave($__internal_fe6b174fbcf8367c78e3703b55a158df6a2158a20bfa9dbcaa2b3b6afa795a6d_prof);

        
        $__internal_b42276a8c56d8525bb76abe072928575988b6925e45e281aa7a8240d97f4aea9->leave($__internal_b42276a8c56d8525bb76abe072928575988b6925e45e281aa7a8240d97f4aea9_prof);

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

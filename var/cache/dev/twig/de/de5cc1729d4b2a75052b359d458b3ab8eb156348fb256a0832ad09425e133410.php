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
        $__internal_f0d1bf2ef0bfda6cd98e176a34ac0c31bf01f167f618afa1731ad97ced17cef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d1bf2ef0bfda6cd98e176a34ac0c31bf01f167f618afa1731ad97ced17cef8->enter($__internal_f0d1bf2ef0bfda6cd98e176a34ac0c31bf01f167f618afa1731ad97ced17cef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_93aff6f017aa5e31bcf6ed66a0931935238c294e6b0ef9c182fc2368ec80dfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93aff6f017aa5e31bcf6ed66a0931935238c294e6b0ef9c182fc2368ec80dfaf->enter($__internal_93aff6f017aa5e31bcf6ed66a0931935238c294e6b0ef9c182fc2368ec80dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d1bf2ef0bfda6cd98e176a34ac0c31bf01f167f618afa1731ad97ced17cef8->leave($__internal_f0d1bf2ef0bfda6cd98e176a34ac0c31bf01f167f618afa1731ad97ced17cef8_prof);

        
        $__internal_93aff6f017aa5e31bcf6ed66a0931935238c294e6b0ef9c182fc2368ec80dfaf->leave($__internal_93aff6f017aa5e31bcf6ed66a0931935238c294e6b0ef9c182fc2368ec80dfaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cd9a88e37745d188d097ffdfb4ed9ade365be5bb31df61991d738ef02b267b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd9a88e37745d188d097ffdfb4ed9ade365be5bb31df61991d738ef02b267b3->enter($__internal_6cd9a88e37745d188d097ffdfb4ed9ade365be5bb31df61991d738ef02b267b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d9fe8b938d7d476484f2acfbc39401a3b26b3a28b53dc2e79215cccbab39541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9fe8b938d7d476484f2acfbc39401a3b26b3a28b53dc2e79215cccbab39541->enter($__internal_8d9fe8b938d7d476484f2acfbc39401a3b26b3a28b53dc2e79215cccbab39541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8d9fe8b938d7d476484f2acfbc39401a3b26b3a28b53dc2e79215cccbab39541->leave($__internal_8d9fe8b938d7d476484f2acfbc39401a3b26b3a28b53dc2e79215cccbab39541_prof);

        
        $__internal_6cd9a88e37745d188d097ffdfb4ed9ade365be5bb31df61991d738ef02b267b3->leave($__internal_6cd9a88e37745d188d097ffdfb4ed9ade365be5bb31df61991d738ef02b267b3_prof);

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

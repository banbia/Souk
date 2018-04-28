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
        $__internal_248b1c4db280839ceb40290ed0ea62aeeefe8185717e1d1ab342b84c473fda41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248b1c4db280839ceb40290ed0ea62aeeefe8185717e1d1ab342b84c473fda41->enter($__internal_248b1c4db280839ceb40290ed0ea62aeeefe8185717e1d1ab342b84c473fda41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_51b3fe9b2ef0fca13b4395cf1a1b45443c5562b5c57d3733459e21f4a678afe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b3fe9b2ef0fca13b4395cf1a1b45443c5562b5c57d3733459e21f4a678afe8->enter($__internal_51b3fe9b2ef0fca13b4395cf1a1b45443c5562b5c57d3733459e21f4a678afe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248b1c4db280839ceb40290ed0ea62aeeefe8185717e1d1ab342b84c473fda41->leave($__internal_248b1c4db280839ceb40290ed0ea62aeeefe8185717e1d1ab342b84c473fda41_prof);

        
        $__internal_51b3fe9b2ef0fca13b4395cf1a1b45443c5562b5c57d3733459e21f4a678afe8->leave($__internal_51b3fe9b2ef0fca13b4395cf1a1b45443c5562b5c57d3733459e21f4a678afe8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f517a0b659dfa9ac24663f5880a732e53be9fd14a57f1f7be3bdae7f28098d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f517a0b659dfa9ac24663f5880a732e53be9fd14a57f1f7be3bdae7f28098d2->enter($__internal_6f517a0b659dfa9ac24663f5880a732e53be9fd14a57f1f7be3bdae7f28098d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4e0a742eb6498e96b0996abdc090bb8e5af00a47a29b444ee5ab82b9c3fe2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e0a742eb6498e96b0996abdc090bb8e5af00a47a29b444ee5ab82b9c3fe2ba->enter($__internal_e4e0a742eb6498e96b0996abdc090bb8e5af00a47a29b444ee5ab82b9c3fe2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e4e0a742eb6498e96b0996abdc090bb8e5af00a47a29b444ee5ab82b9c3fe2ba->leave($__internal_e4e0a742eb6498e96b0996abdc090bb8e5af00a47a29b444ee5ab82b9c3fe2ba_prof);

        
        $__internal_6f517a0b659dfa9ac24663f5880a732e53be9fd14a57f1f7be3bdae7f28098d2->leave($__internal_6f517a0b659dfa9ac24663f5880a732e53be9fd14a57f1f7be3bdae7f28098d2_prof);

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

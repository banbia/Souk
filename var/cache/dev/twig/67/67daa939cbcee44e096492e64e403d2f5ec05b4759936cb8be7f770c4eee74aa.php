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
        $__internal_fc7a218355728376c1c53f819e4e04e548fab19a31dd0bffcebd537a6d8d9640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7a218355728376c1c53f819e4e04e548fab19a31dd0bffcebd537a6d8d9640->enter($__internal_fc7a218355728376c1c53f819e4e04e548fab19a31dd0bffcebd537a6d8d9640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2de68a23d4fceff4d0b312ec1f39b4792be502c1ed6d63bc44ed8604b42f4d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de68a23d4fceff4d0b312ec1f39b4792be502c1ed6d63bc44ed8604b42f4d9a->enter($__internal_2de68a23d4fceff4d0b312ec1f39b4792be502c1ed6d63bc44ed8604b42f4d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc7a218355728376c1c53f819e4e04e548fab19a31dd0bffcebd537a6d8d9640->leave($__internal_fc7a218355728376c1c53f819e4e04e548fab19a31dd0bffcebd537a6d8d9640_prof);

        
        $__internal_2de68a23d4fceff4d0b312ec1f39b4792be502c1ed6d63bc44ed8604b42f4d9a->leave($__internal_2de68a23d4fceff4d0b312ec1f39b4792be502c1ed6d63bc44ed8604b42f4d9a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_067854c7a92b3d4b35ebcbb1845fd9d9ab136b1a7812b5fec0bf055aa8bdb59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067854c7a92b3d4b35ebcbb1845fd9d9ab136b1a7812b5fec0bf055aa8bdb59c->enter($__internal_067854c7a92b3d4b35ebcbb1845fd9d9ab136b1a7812b5fec0bf055aa8bdb59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_99b7168edb9944cd0a8797bce44425d63cee4d376c353be68c553fd9ec2e36b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b7168edb9944cd0a8797bce44425d63cee4d376c353be68c553fd9ec2e36b9->enter($__internal_99b7168edb9944cd0a8797bce44425d63cee4d376c353be68c553fd9ec2e36b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_99b7168edb9944cd0a8797bce44425d63cee4d376c353be68c553fd9ec2e36b9->leave($__internal_99b7168edb9944cd0a8797bce44425d63cee4d376c353be68c553fd9ec2e36b9_prof);

        
        $__internal_067854c7a92b3d4b35ebcbb1845fd9d9ab136b1a7812b5fec0bf055aa8bdb59c->leave($__internal_067854c7a92b3d4b35ebcbb1845fd9d9ab136b1a7812b5fec0bf055aa8bdb59c_prof);

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

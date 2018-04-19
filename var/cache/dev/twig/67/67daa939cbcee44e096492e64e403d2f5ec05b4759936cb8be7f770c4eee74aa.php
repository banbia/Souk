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
        $__internal_7802808eaeafd72e319ed2286ad64f794099745ce632fe4990fa52408d1ecfc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7802808eaeafd72e319ed2286ad64f794099745ce632fe4990fa52408d1ecfc0->enter($__internal_7802808eaeafd72e319ed2286ad64f794099745ce632fe4990fa52408d1ecfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f200f45cd7017c47dc955916988e009a1c51deab5d283c3675f4ba14872ebf29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f200f45cd7017c47dc955916988e009a1c51deab5d283c3675f4ba14872ebf29->enter($__internal_f200f45cd7017c47dc955916988e009a1c51deab5d283c3675f4ba14872ebf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7802808eaeafd72e319ed2286ad64f794099745ce632fe4990fa52408d1ecfc0->leave($__internal_7802808eaeafd72e319ed2286ad64f794099745ce632fe4990fa52408d1ecfc0_prof);

        
        $__internal_f200f45cd7017c47dc955916988e009a1c51deab5d283c3675f4ba14872ebf29->leave($__internal_f200f45cd7017c47dc955916988e009a1c51deab5d283c3675f4ba14872ebf29_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0753db47fe0d6a1e67252b0b9facfa1bacc1cca354bb3e246856933954b68c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0753db47fe0d6a1e67252b0b9facfa1bacc1cca354bb3e246856933954b68c80->enter($__internal_0753db47fe0d6a1e67252b0b9facfa1bacc1cca354bb3e246856933954b68c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24c708f60ea0a55b5351ad55de32d326a3b2a5ae792335aaf7e88fecce52abab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c708f60ea0a55b5351ad55de32d326a3b2a5ae792335aaf7e88fecce52abab->enter($__internal_24c708f60ea0a55b5351ad55de32d326a3b2a5ae792335aaf7e88fecce52abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_24c708f60ea0a55b5351ad55de32d326a3b2a5ae792335aaf7e88fecce52abab->leave($__internal_24c708f60ea0a55b5351ad55de32d326a3b2a5ae792335aaf7e88fecce52abab_prof);

        
        $__internal_0753db47fe0d6a1e67252b0b9facfa1bacc1cca354bb3e246856933954b68c80->leave($__internal_0753db47fe0d6a1e67252b0b9facfa1bacc1cca354bb3e246856933954b68c80_prof);

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

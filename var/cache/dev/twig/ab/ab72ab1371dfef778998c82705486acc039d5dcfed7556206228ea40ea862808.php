<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_088e351a932e9de509fa57ebca654f4b79eb7941dc805fdaac11fa534e77304b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e10d825a16381bdcc4bfb74c58a3e2b212082e8073e889ada691202d838e201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e10d825a16381bdcc4bfb74c58a3e2b212082e8073e889ada691202d838e201->enter($__internal_5e10d825a16381bdcc4bfb74c58a3e2b212082e8073e889ada691202d838e201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7777626d1b1809a2b6e3f5a50b585724842339b62127e9e9897e4a69df80f0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7777626d1b1809a2b6e3f5a50b585724842339b62127e9e9897e4a69df80f0a0->enter($__internal_7777626d1b1809a2b6e3f5a50b585724842339b62127e9e9897e4a69df80f0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e10d825a16381bdcc4bfb74c58a3e2b212082e8073e889ada691202d838e201->leave($__internal_5e10d825a16381bdcc4bfb74c58a3e2b212082e8073e889ada691202d838e201_prof);

        
        $__internal_7777626d1b1809a2b6e3f5a50b585724842339b62127e9e9897e4a69df80f0a0->leave($__internal_7777626d1b1809a2b6e3f5a50b585724842339b62127e9e9897e4a69df80f0a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bfea697342e291bc706be968efbacf9726e949f17d59e2e7f0c2ff40c6b31805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfea697342e291bc706be968efbacf9726e949f17d59e2e7f0c2ff40c6b31805->enter($__internal_bfea697342e291bc706be968efbacf9726e949f17d59e2e7f0c2ff40c6b31805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9a3d215d941235f91cac106cb28c142084e9386b67a8a083fd8dd93117f4a0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3d215d941235f91cac106cb28c142084e9386b67a8a083fd8dd93117f4a0eb->enter($__internal_9a3d215d941235f91cac106cb28c142084e9386b67a8a083fd8dd93117f4a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a3d215d941235f91cac106cb28c142084e9386b67a8a083fd8dd93117f4a0eb->leave($__internal_9a3d215d941235f91cac106cb28c142084e9386b67a8a083fd8dd93117f4a0eb_prof);

        
        $__internal_bfea697342e291bc706be968efbacf9726e949f17d59e2e7f0c2ff40c6b31805->leave($__internal_bfea697342e291bc706be968efbacf9726e949f17d59e2e7f0c2ff40c6b31805_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a326fbb62bb9a9d44314298490ada27bc9b48786f662b83716f952db55708704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a326fbb62bb9a9d44314298490ada27bc9b48786f662b83716f952db55708704->enter($__internal_a326fbb62bb9a9d44314298490ada27bc9b48786f662b83716f952db55708704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7cd25d8ae4a5bb49c1d6d52f3c93902b510e482daaff03cc67de3ccde44ab72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cd25d8ae4a5bb49c1d6d52f3c93902b510e482daaff03cc67de3ccde44ab72->enter($__internal_e7cd25d8ae4a5bb49c1d6d52f3c93902b510e482daaff03cc67de3ccde44ab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7cd25d8ae4a5bb49c1d6d52f3c93902b510e482daaff03cc67de3ccde44ab72->leave($__internal_e7cd25d8ae4a5bb49c1d6d52f3c93902b510e482daaff03cc67de3ccde44ab72_prof);

        
        $__internal_a326fbb62bb9a9d44314298490ada27bc9b48786f662b83716f952db55708704->leave($__internal_a326fbb62bb9a9d44314298490ada27bc9b48786f662b83716f952db55708704_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_483c1a6180a4fed2b0461204c9a37a0cbfe03e46cc091dd1df34f2149c8c14d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483c1a6180a4fed2b0461204c9a37a0cbfe03e46cc091dd1df34f2149c8c14d3->enter($__internal_483c1a6180a4fed2b0461204c9a37a0cbfe03e46cc091dd1df34f2149c8c14d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9d0a008da8b4a90c9a899329ed9da46ec36f2909a98d5185c8f8d0ea9391c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d0a008da8b4a90c9a899329ed9da46ec36f2909a98d5185c8f8d0ea9391c27->enter($__internal_d9d0a008da8b4a90c9a899329ed9da46ec36f2909a98d5185c8f8d0ea9391c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d9d0a008da8b4a90c9a899329ed9da46ec36f2909a98d5185c8f8d0ea9391c27->leave($__internal_d9d0a008da8b4a90c9a899329ed9da46ec36f2909a98d5185c8f8d0ea9391c27_prof);

        
        $__internal_483c1a6180a4fed2b0461204c9a37a0cbfe03e46cc091dd1df34f2149c8c14d3->leave($__internal_483c1a6180a4fed2b0461204c9a37a0cbfe03e46cc091dd1df34f2149c8c14d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

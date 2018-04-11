<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_447065f7f07af19f1cee25a0d876976bba6bfb58d9ef0f48503827aa6bea603b extends Twig_Template
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
        $__internal_57124b2dfc9b8d84e522094d67a15481628291602f1a494fb71d1079572b8a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57124b2dfc9b8d84e522094d67a15481628291602f1a494fb71d1079572b8a65->enter($__internal_57124b2dfc9b8d84e522094d67a15481628291602f1a494fb71d1079572b8a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4d5a9d5e6d9b4764d6406eed852e0c29764a9b61f5984fc30fd8937dc6c3faa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5a9d5e6d9b4764d6406eed852e0c29764a9b61f5984fc30fd8937dc6c3faa7->enter($__internal_4d5a9d5e6d9b4764d6406eed852e0c29764a9b61f5984fc30fd8937dc6c3faa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57124b2dfc9b8d84e522094d67a15481628291602f1a494fb71d1079572b8a65->leave($__internal_57124b2dfc9b8d84e522094d67a15481628291602f1a494fb71d1079572b8a65_prof);

        
        $__internal_4d5a9d5e6d9b4764d6406eed852e0c29764a9b61f5984fc30fd8937dc6c3faa7->leave($__internal_4d5a9d5e6d9b4764d6406eed852e0c29764a9b61f5984fc30fd8937dc6c3faa7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b93c2f12b126e528b0a84e7c849fb00c3532a020939f28a66211a24bce145eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93c2f12b126e528b0a84e7c849fb00c3532a020939f28a66211a24bce145eae->enter($__internal_b93c2f12b126e528b0a84e7c849fb00c3532a020939f28a66211a24bce145eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff93aaae4da6d6b8425aae3da9c92b09944459dbc9d776f7bb1209b982869200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff93aaae4da6d6b8425aae3da9c92b09944459dbc9d776f7bb1209b982869200->enter($__internal_ff93aaae4da6d6b8425aae3da9c92b09944459dbc9d776f7bb1209b982869200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff93aaae4da6d6b8425aae3da9c92b09944459dbc9d776f7bb1209b982869200->leave($__internal_ff93aaae4da6d6b8425aae3da9c92b09944459dbc9d776f7bb1209b982869200_prof);

        
        $__internal_b93c2f12b126e528b0a84e7c849fb00c3532a020939f28a66211a24bce145eae->leave($__internal_b93c2f12b126e528b0a84e7c849fb00c3532a020939f28a66211a24bce145eae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0c4e2c6f1e99231d8b67a3e5d30efa8d8214731c4b393803816a147779a68af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c4e2c6f1e99231d8b67a3e5d30efa8d8214731c4b393803816a147779a68af->enter($__internal_a0c4e2c6f1e99231d8b67a3e5d30efa8d8214731c4b393803816a147779a68af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5344f36e756efaf628afa5b38d9fb13321941ecd6c79d9d2dfee284d550ec8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5344f36e756efaf628afa5b38d9fb13321941ecd6c79d9d2dfee284d550ec8c0->enter($__internal_5344f36e756efaf628afa5b38d9fb13321941ecd6c79d9d2dfee284d550ec8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5344f36e756efaf628afa5b38d9fb13321941ecd6c79d9d2dfee284d550ec8c0->leave($__internal_5344f36e756efaf628afa5b38d9fb13321941ecd6c79d9d2dfee284d550ec8c0_prof);

        
        $__internal_a0c4e2c6f1e99231d8b67a3e5d30efa8d8214731c4b393803816a147779a68af->leave($__internal_a0c4e2c6f1e99231d8b67a3e5d30efa8d8214731c4b393803816a147779a68af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a3165444862a8c95f10a8c449a648d6e3cf2858c7d8e73ac4752a2abef1125e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3165444862a8c95f10a8c449a648d6e3cf2858c7d8e73ac4752a2abef1125e->enter($__internal_9a3165444862a8c95f10a8c449a648d6e3cf2858c7d8e73ac4752a2abef1125e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_036355228901e3cb711263f647276b3ac75042af3a4b2858fe856b52765f17fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036355228901e3cb711263f647276b3ac75042af3a4b2858fe856b52765f17fd->enter($__internal_036355228901e3cb711263f647276b3ac75042af3a4b2858fe856b52765f17fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_036355228901e3cb711263f647276b3ac75042af3a4b2858fe856b52765f17fd->leave($__internal_036355228901e3cb711263f647276b3ac75042af3a4b2858fe856b52765f17fd_prof);

        
        $__internal_9a3165444862a8c95f10a8c449a648d6e3cf2858c7d8e73ac4752a2abef1125e->leave($__internal_9a3165444862a8c95f10a8c449a648d6e3cf2858c7d8e73ac4752a2abef1125e_prof);

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

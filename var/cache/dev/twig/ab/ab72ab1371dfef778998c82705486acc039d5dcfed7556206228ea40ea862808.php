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
        $__internal_b525e64f23a50855e414aaee4dded528b639e7ebd6ab397ab84cb3e3b7312e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b525e64f23a50855e414aaee4dded528b639e7ebd6ab397ab84cb3e3b7312e59->enter($__internal_b525e64f23a50855e414aaee4dded528b639e7ebd6ab397ab84cb3e3b7312e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c958ad342a7efeb0f22ba8b20d98e4a3c02fb93621d1b5b3f02fc65f77ec0022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c958ad342a7efeb0f22ba8b20d98e4a3c02fb93621d1b5b3f02fc65f77ec0022->enter($__internal_c958ad342a7efeb0f22ba8b20d98e4a3c02fb93621d1b5b3f02fc65f77ec0022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b525e64f23a50855e414aaee4dded528b639e7ebd6ab397ab84cb3e3b7312e59->leave($__internal_b525e64f23a50855e414aaee4dded528b639e7ebd6ab397ab84cb3e3b7312e59_prof);

        
        $__internal_c958ad342a7efeb0f22ba8b20d98e4a3c02fb93621d1b5b3f02fc65f77ec0022->leave($__internal_c958ad342a7efeb0f22ba8b20d98e4a3c02fb93621d1b5b3f02fc65f77ec0022_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82d82cc30b91c3a07a0b492f715d51a4ab8a89fe8109f899e9e07ee85294143d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d82cc30b91c3a07a0b492f715d51a4ab8a89fe8109f899e9e07ee85294143d->enter($__internal_82d82cc30b91c3a07a0b492f715d51a4ab8a89fe8109f899e9e07ee85294143d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_75e98cd1cab05566dee1f914483d96e12ee39c7eaf1ebe7abe2f906a3f8a7c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e98cd1cab05566dee1f914483d96e12ee39c7eaf1ebe7abe2f906a3f8a7c36->enter($__internal_75e98cd1cab05566dee1f914483d96e12ee39c7eaf1ebe7abe2f906a3f8a7c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75e98cd1cab05566dee1f914483d96e12ee39c7eaf1ebe7abe2f906a3f8a7c36->leave($__internal_75e98cd1cab05566dee1f914483d96e12ee39c7eaf1ebe7abe2f906a3f8a7c36_prof);

        
        $__internal_82d82cc30b91c3a07a0b492f715d51a4ab8a89fe8109f899e9e07ee85294143d->leave($__internal_82d82cc30b91c3a07a0b492f715d51a4ab8a89fe8109f899e9e07ee85294143d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c00030f4f1a872fbfe7df4732d83ae99ae2eb89a835e533de1eca6881c6e7cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00030f4f1a872fbfe7df4732d83ae99ae2eb89a835e533de1eca6881c6e7cf6->enter($__internal_c00030f4f1a872fbfe7df4732d83ae99ae2eb89a835e533de1eca6881c6e7cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_53aad088708e2928c6939544d8004d4926bf1fc5c05cc943fab20c26f01f2298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53aad088708e2928c6939544d8004d4926bf1fc5c05cc943fab20c26f01f2298->enter($__internal_53aad088708e2928c6939544d8004d4926bf1fc5c05cc943fab20c26f01f2298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53aad088708e2928c6939544d8004d4926bf1fc5c05cc943fab20c26f01f2298->leave($__internal_53aad088708e2928c6939544d8004d4926bf1fc5c05cc943fab20c26f01f2298_prof);

        
        $__internal_c00030f4f1a872fbfe7df4732d83ae99ae2eb89a835e533de1eca6881c6e7cf6->leave($__internal_c00030f4f1a872fbfe7df4732d83ae99ae2eb89a835e533de1eca6881c6e7cf6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2c51b83c7144ccc8e47154d5dc34832bb8fe9397dc7078f82f9280018b0e16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c51b83c7144ccc8e47154d5dc34832bb8fe9397dc7078f82f9280018b0e16b->enter($__internal_c2c51b83c7144ccc8e47154d5dc34832bb8fe9397dc7078f82f9280018b0e16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4b02afc11aaf48fbcfc80f83672ffec81090320713cc80720ae1d59a67f4f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b02afc11aaf48fbcfc80f83672ffec81090320713cc80720ae1d59a67f4f3f->enter($__internal_e4b02afc11aaf48fbcfc80f83672ffec81090320713cc80720ae1d59a67f4f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4b02afc11aaf48fbcfc80f83672ffec81090320713cc80720ae1d59a67f4f3f->leave($__internal_e4b02afc11aaf48fbcfc80f83672ffec81090320713cc80720ae1d59a67f4f3f_prof);

        
        $__internal_c2c51b83c7144ccc8e47154d5dc34832bb8fe9397dc7078f82f9280018b0e16b->leave($__internal_c2c51b83c7144ccc8e47154d5dc34832bb8fe9397dc7078f82f9280018b0e16b_prof);

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

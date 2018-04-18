<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_447065f7f07af19f1cee25a0d876976bba6bfb58d9ef0f48503827aa6bea603b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e7a6870d343d2a9f64267fd678433f874c1b027594c8edce1228278a5d81f4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a6870d343d2a9f64267fd678433f874c1b027594c8edce1228278a5d81f4e2->enter($__internal_e7a6870d343d2a9f64267fd678433f874c1b027594c8edce1228278a5d81f4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_38331ed089c32a56a7a1d529740c8461a207fa97a6246d07179f3a994497ed71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38331ed089c32a56a7a1d529740c8461a207fa97a6246d07179f3a994497ed71->enter($__internal_38331ed089c32a56a7a1d529740c8461a207fa97a6246d07179f3a994497ed71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7a6870d343d2a9f64267fd678433f874c1b027594c8edce1228278a5d81f4e2->leave($__internal_e7a6870d343d2a9f64267fd678433f874c1b027594c8edce1228278a5d81f4e2_prof);

        
        $__internal_38331ed089c32a56a7a1d529740c8461a207fa97a6246d07179f3a994497ed71->leave($__internal_38331ed089c32a56a7a1d529740c8461a207fa97a6246d07179f3a994497ed71_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b66a2c1e9791de66934a6007187d886b1703f3818109b7f2a9ec47384b40cd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66a2c1e9791de66934a6007187d886b1703f3818109b7f2a9ec47384b40cd00->enter($__internal_b66a2c1e9791de66934a6007187d886b1703f3818109b7f2a9ec47384b40cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f159b251e407106f0fabe209257508a68aa01dcd4e4c19cc0f66a92edbf92c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f159b251e407106f0fabe209257508a68aa01dcd4e4c19cc0f66a92edbf92c3b->enter($__internal_f159b251e407106f0fabe209257508a68aa01dcd4e4c19cc0f66a92edbf92c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f159b251e407106f0fabe209257508a68aa01dcd4e4c19cc0f66a92edbf92c3b->leave($__internal_f159b251e407106f0fabe209257508a68aa01dcd4e4c19cc0f66a92edbf92c3b_prof);

        
        $__internal_b66a2c1e9791de66934a6007187d886b1703f3818109b7f2a9ec47384b40cd00->leave($__internal_b66a2c1e9791de66934a6007187d886b1703f3818109b7f2a9ec47384b40cd00_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6f4ffef69f00ab6bc6aafa09c74f91c238bb37708198abd043795952e29ba2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f4ffef69f00ab6bc6aafa09c74f91c238bb37708198abd043795952e29ba2a->enter($__internal_c6f4ffef69f00ab6bc6aafa09c74f91c238bb37708198abd043795952e29ba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f42bf7cba2dc377f652068dc88231a839c00df6d021e138a1e4c1ad1ae30bbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42bf7cba2dc377f652068dc88231a839c00df6d021e138a1e4c1ad1ae30bbd9->enter($__internal_f42bf7cba2dc377f652068dc88231a839c00df6d021e138a1e4c1ad1ae30bbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f42bf7cba2dc377f652068dc88231a839c00df6d021e138a1e4c1ad1ae30bbd9->leave($__internal_f42bf7cba2dc377f652068dc88231a839c00df6d021e138a1e4c1ad1ae30bbd9_prof);

        
        $__internal_c6f4ffef69f00ab6bc6aafa09c74f91c238bb37708198abd043795952e29ba2a->leave($__internal_c6f4ffef69f00ab6bc6aafa09c74f91c238bb37708198abd043795952e29ba2a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bd37f5afc1e9a6a37aef943e29c1c3b1990e73ec0dd0b7ca78a0a9101ced6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd37f5afc1e9a6a37aef943e29c1c3b1990e73ec0dd0b7ca78a0a9101ced6ff->enter($__internal_7bd37f5afc1e9a6a37aef943e29c1c3b1990e73ec0dd0b7ca78a0a9101ced6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f444d667d0d97e8ae84325e534ee83e41fe8f74789f8f39e8bfec815b431cea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f444d667d0d97e8ae84325e534ee83e41fe8f74789f8f39e8bfec815b431cea0->enter($__internal_f444d667d0d97e8ae84325e534ee83e41fe8f74789f8f39e8bfec815b431cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f444d667d0d97e8ae84325e534ee83e41fe8f74789f8f39e8bfec815b431cea0->leave($__internal_f444d667d0d97e8ae84325e534ee83e41fe8f74789f8f39e8bfec815b431cea0_prof);

        
        $__internal_7bd37f5afc1e9a6a37aef943e29c1c3b1990e73ec0dd0b7ca78a0a9101ced6ff->leave($__internal_7bd37f5afc1e9a6a37aef943e29c1c3b1990e73ec0dd0b7ca78a0a9101ced6ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

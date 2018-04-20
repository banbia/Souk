<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_94365efcb6bde1d2a1968e2b89170180ce005c1efdb3182ccd4d5bca44c01019 extends Twig_Template
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
        $__internal_6d1aebe4ded96e9def509a09acee35a58d015dd485a24536d9efeb9698b192d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1aebe4ded96e9def509a09acee35a58d015dd485a24536d9efeb9698b192d3->enter($__internal_6d1aebe4ded96e9def509a09acee35a58d015dd485a24536d9efeb9698b192d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_05716a815512ef88d615cd8cbe60d3fd052c72e83a0650ddac88b41cbbd92a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05716a815512ef88d615cd8cbe60d3fd052c72e83a0650ddac88b41cbbd92a65->enter($__internal_05716a815512ef88d615cd8cbe60d3fd052c72e83a0650ddac88b41cbbd92a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1aebe4ded96e9def509a09acee35a58d015dd485a24536d9efeb9698b192d3->leave($__internal_6d1aebe4ded96e9def509a09acee35a58d015dd485a24536d9efeb9698b192d3_prof);

        
        $__internal_05716a815512ef88d615cd8cbe60d3fd052c72e83a0650ddac88b41cbbd92a65->leave($__internal_05716a815512ef88d615cd8cbe60d3fd052c72e83a0650ddac88b41cbbd92a65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d63b76ccaaf0964f628f644baef40b5f5b07c1e94bb32bb401649fe659ad260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d63b76ccaaf0964f628f644baef40b5f5b07c1e94bb32bb401649fe659ad260->enter($__internal_3d63b76ccaaf0964f628f644baef40b5f5b07c1e94bb32bb401649fe659ad260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_377a71c4bbddc5f67809bfbc8e4fd0b42fe5d54cb6560f1517d9aa39fcc451de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377a71c4bbddc5f67809bfbc8e4fd0b42fe5d54cb6560f1517d9aa39fcc451de->enter($__internal_377a71c4bbddc5f67809bfbc8e4fd0b42fe5d54cb6560f1517d9aa39fcc451de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_377a71c4bbddc5f67809bfbc8e4fd0b42fe5d54cb6560f1517d9aa39fcc451de->leave($__internal_377a71c4bbddc5f67809bfbc8e4fd0b42fe5d54cb6560f1517d9aa39fcc451de_prof);

        
        $__internal_3d63b76ccaaf0964f628f644baef40b5f5b07c1e94bb32bb401649fe659ad260->leave($__internal_3d63b76ccaaf0964f628f644baef40b5f5b07c1e94bb32bb401649fe659ad260_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_390750c05d08bb5fc4546108468949ebeda25851af544b31cad225ede91bcd56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390750c05d08bb5fc4546108468949ebeda25851af544b31cad225ede91bcd56->enter($__internal_390750c05d08bb5fc4546108468949ebeda25851af544b31cad225ede91bcd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3879a495f6794ff2b346d60826d2d94907d55b3134f0c6e31b1abf6e242d9cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3879a495f6794ff2b346d60826d2d94907d55b3134f0c6e31b1abf6e242d9cda->enter($__internal_3879a495f6794ff2b346d60826d2d94907d55b3134f0c6e31b1abf6e242d9cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3879a495f6794ff2b346d60826d2d94907d55b3134f0c6e31b1abf6e242d9cda->leave($__internal_3879a495f6794ff2b346d60826d2d94907d55b3134f0c6e31b1abf6e242d9cda_prof);

        
        $__internal_390750c05d08bb5fc4546108468949ebeda25851af544b31cad225ede91bcd56->leave($__internal_390750c05d08bb5fc4546108468949ebeda25851af544b31cad225ede91bcd56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6a001a781bd246a6efac94e90397e18b9d9e9cba39b163dd46504cb1107c68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a001a781bd246a6efac94e90397e18b9d9e9cba39b163dd46504cb1107c68c->enter($__internal_d6a001a781bd246a6efac94e90397e18b9d9e9cba39b163dd46504cb1107c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b23a7318ec49db69cee70eff058032dd2b0ff302a05d40fde66d9b97d4426dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b23a7318ec49db69cee70eff058032dd2b0ff302a05d40fde66d9b97d4426dd->enter($__internal_1b23a7318ec49db69cee70eff058032dd2b0ff302a05d40fde66d9b97d4426dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b23a7318ec49db69cee70eff058032dd2b0ff302a05d40fde66d9b97d4426dd->leave($__internal_1b23a7318ec49db69cee70eff058032dd2b0ff302a05d40fde66d9b97d4426dd_prof);

        
        $__internal_d6a001a781bd246a6efac94e90397e18b9d9e9cba39b163dd46504cb1107c68c->leave($__internal_d6a001a781bd246a6efac94e90397e18b9d9e9cba39b163dd46504cb1107c68c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

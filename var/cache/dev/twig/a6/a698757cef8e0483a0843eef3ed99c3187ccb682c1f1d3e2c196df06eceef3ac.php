<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df19f214328ab617b06338a52fed6250742a1196ff8903f45e46bee8a0adab9f extends Twig_Template
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
        $__internal_d41f9ce213053bed9afec408dc08e6042401a153f96108c6385d0fbe6ad83ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41f9ce213053bed9afec408dc08e6042401a153f96108c6385d0fbe6ad83ced->enter($__internal_d41f9ce213053bed9afec408dc08e6042401a153f96108c6385d0fbe6ad83ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a91005f36ac2220ae8e5f5afa375df9b19843ebbe0ab198f83d047f7a00d7636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91005f36ac2220ae8e5f5afa375df9b19843ebbe0ab198f83d047f7a00d7636->enter($__internal_a91005f36ac2220ae8e5f5afa375df9b19843ebbe0ab198f83d047f7a00d7636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41f9ce213053bed9afec408dc08e6042401a153f96108c6385d0fbe6ad83ced->leave($__internal_d41f9ce213053bed9afec408dc08e6042401a153f96108c6385d0fbe6ad83ced_prof);

        
        $__internal_a91005f36ac2220ae8e5f5afa375df9b19843ebbe0ab198f83d047f7a00d7636->leave($__internal_a91005f36ac2220ae8e5f5afa375df9b19843ebbe0ab198f83d047f7a00d7636_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_885d3028709ac30509721fef50297847cb1d73e5be6b4a50b0e8ba21e8431724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885d3028709ac30509721fef50297847cb1d73e5be6b4a50b0e8ba21e8431724->enter($__internal_885d3028709ac30509721fef50297847cb1d73e5be6b4a50b0e8ba21e8431724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffea123c84502574cb48d24e4fb6eb19c3e7f4d7da393b26a61f466eefb35054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffea123c84502574cb48d24e4fb6eb19c3e7f4d7da393b26a61f466eefb35054->enter($__internal_ffea123c84502574cb48d24e4fb6eb19c3e7f4d7da393b26a61f466eefb35054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffea123c84502574cb48d24e4fb6eb19c3e7f4d7da393b26a61f466eefb35054->leave($__internal_ffea123c84502574cb48d24e4fb6eb19c3e7f4d7da393b26a61f466eefb35054_prof);

        
        $__internal_885d3028709ac30509721fef50297847cb1d73e5be6b4a50b0e8ba21e8431724->leave($__internal_885d3028709ac30509721fef50297847cb1d73e5be6b4a50b0e8ba21e8431724_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e629016a1ec29d451efa2cc4a5b2232eba203fae99a1034c9fdbb7048fae7321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e629016a1ec29d451efa2cc4a5b2232eba203fae99a1034c9fdbb7048fae7321->enter($__internal_e629016a1ec29d451efa2cc4a5b2232eba203fae99a1034c9fdbb7048fae7321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_641059f6e45082f6667024b69b5dfd7daa975d5fedfff571744dcfb730f4edcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641059f6e45082f6667024b69b5dfd7daa975d5fedfff571744dcfb730f4edcf->enter($__internal_641059f6e45082f6667024b69b5dfd7daa975d5fedfff571744dcfb730f4edcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_641059f6e45082f6667024b69b5dfd7daa975d5fedfff571744dcfb730f4edcf->leave($__internal_641059f6e45082f6667024b69b5dfd7daa975d5fedfff571744dcfb730f4edcf_prof);

        
        $__internal_e629016a1ec29d451efa2cc4a5b2232eba203fae99a1034c9fdbb7048fae7321->leave($__internal_e629016a1ec29d451efa2cc4a5b2232eba203fae99a1034c9fdbb7048fae7321_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73f7fb6847ff0cea9987aecb439d2ec4df4309c5342bdc1bcacaa36eb1e0d4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f7fb6847ff0cea9987aecb439d2ec4df4309c5342bdc1bcacaa36eb1e0d4b2->enter($__internal_73f7fb6847ff0cea9987aecb439d2ec4df4309c5342bdc1bcacaa36eb1e0d4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fbf9515f02ad9331f2a77f891687a3f2616f1afa45fc1897040fe44fbcc1c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbf9515f02ad9331f2a77f891687a3f2616f1afa45fc1897040fe44fbcc1c4b->enter($__internal_7fbf9515f02ad9331f2a77f891687a3f2616f1afa45fc1897040fe44fbcc1c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fbf9515f02ad9331f2a77f891687a3f2616f1afa45fc1897040fe44fbcc1c4b->leave($__internal_7fbf9515f02ad9331f2a77f891687a3f2616f1afa45fc1897040fe44fbcc1c4b_prof);

        
        $__internal_73f7fb6847ff0cea9987aecb439d2ec4df4309c5342bdc1bcacaa36eb1e0d4b2->leave($__internal_73f7fb6847ff0cea9987aecb439d2ec4df4309c5342bdc1bcacaa36eb1e0d4b2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

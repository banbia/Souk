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
        $__internal_84f5021743dcc451cb5a6b0281b13edcf2205af0d4111c827c44cdf11e433399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f5021743dcc451cb5a6b0281b13edcf2205af0d4111c827c44cdf11e433399->enter($__internal_84f5021743dcc451cb5a6b0281b13edcf2205af0d4111c827c44cdf11e433399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2f93938cfa6cb9e4a62fa502556d367fdf42e9261e68e0317bcbf4b9ce2cdb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f93938cfa6cb9e4a62fa502556d367fdf42e9261e68e0317bcbf4b9ce2cdb6d->enter($__internal_2f93938cfa6cb9e4a62fa502556d367fdf42e9261e68e0317bcbf4b9ce2cdb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f5021743dcc451cb5a6b0281b13edcf2205af0d4111c827c44cdf11e433399->leave($__internal_84f5021743dcc451cb5a6b0281b13edcf2205af0d4111c827c44cdf11e433399_prof);

        
        $__internal_2f93938cfa6cb9e4a62fa502556d367fdf42e9261e68e0317bcbf4b9ce2cdb6d->leave($__internal_2f93938cfa6cb9e4a62fa502556d367fdf42e9261e68e0317bcbf4b9ce2cdb6d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d48ba2b9589154faec10ced56bc4fe58c257b0a076de08057bb7e7ec92969d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d48ba2b9589154faec10ced56bc4fe58c257b0a076de08057bb7e7ec92969d5->enter($__internal_8d48ba2b9589154faec10ced56bc4fe58c257b0a076de08057bb7e7ec92969d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e564c6468eb76495cb24ad66537735e5926d7549269ac21ebe4b482aef01edc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e564c6468eb76495cb24ad66537735e5926d7549269ac21ebe4b482aef01edc8->enter($__internal_e564c6468eb76495cb24ad66537735e5926d7549269ac21ebe4b482aef01edc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e564c6468eb76495cb24ad66537735e5926d7549269ac21ebe4b482aef01edc8->leave($__internal_e564c6468eb76495cb24ad66537735e5926d7549269ac21ebe4b482aef01edc8_prof);

        
        $__internal_8d48ba2b9589154faec10ced56bc4fe58c257b0a076de08057bb7e7ec92969d5->leave($__internal_8d48ba2b9589154faec10ced56bc4fe58c257b0a076de08057bb7e7ec92969d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94063ccc2ac9ff4144741c51f83a77934b6226bd77e7637d62f5ddd99102d806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94063ccc2ac9ff4144741c51f83a77934b6226bd77e7637d62f5ddd99102d806->enter($__internal_94063ccc2ac9ff4144741c51f83a77934b6226bd77e7637d62f5ddd99102d806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6a3985f335289ca789f138518f82ddd3159e4063a3f5771634f53327f49c81ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3985f335289ca789f138518f82ddd3159e4063a3f5771634f53327f49c81ea->enter($__internal_6a3985f335289ca789f138518f82ddd3159e4063a3f5771634f53327f49c81ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a3985f335289ca789f138518f82ddd3159e4063a3f5771634f53327f49c81ea->leave($__internal_6a3985f335289ca789f138518f82ddd3159e4063a3f5771634f53327f49c81ea_prof);

        
        $__internal_94063ccc2ac9ff4144741c51f83a77934b6226bd77e7637d62f5ddd99102d806->leave($__internal_94063ccc2ac9ff4144741c51f83a77934b6226bd77e7637d62f5ddd99102d806_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20c28d73fad6a15e58ec63f788bc2f955b4535ab5ee3f89781549341fa336550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c28d73fad6a15e58ec63f788bc2f955b4535ab5ee3f89781549341fa336550->enter($__internal_20c28d73fad6a15e58ec63f788bc2f955b4535ab5ee3f89781549341fa336550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e5082be57a1c21014406f387a29c275bd4b9fc727bfc3fcd0fc17650bdd5075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5082be57a1c21014406f387a29c275bd4b9fc727bfc3fcd0fc17650bdd5075->enter($__internal_5e5082be57a1c21014406f387a29c275bd4b9fc727bfc3fcd0fc17650bdd5075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e5082be57a1c21014406f387a29c275bd4b9fc727bfc3fcd0fc17650bdd5075->leave($__internal_5e5082be57a1c21014406f387a29c275bd4b9fc727bfc3fcd0fc17650bdd5075_prof);

        
        $__internal_20c28d73fad6a15e58ec63f788bc2f955b4535ab5ee3f89781549341fa336550->leave($__internal_20c28d73fad6a15e58ec63f788bc2f955b4535ab5ee3f89781549341fa336550_prof);

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

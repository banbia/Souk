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
        $__internal_3379ec8b274a204c9a748391ce5dde22cb9766a9f0e2d3f8b7d8dfb857a1e38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3379ec8b274a204c9a748391ce5dde22cb9766a9f0e2d3f8b7d8dfb857a1e38e->enter($__internal_3379ec8b274a204c9a748391ce5dde22cb9766a9f0e2d3f8b7d8dfb857a1e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fa8200a84d4b49c213dd7ab5a575bd8d574dcb39581bcf714e96b949b6e178db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8200a84d4b49c213dd7ab5a575bd8d574dcb39581bcf714e96b949b6e178db->enter($__internal_fa8200a84d4b49c213dd7ab5a575bd8d574dcb39581bcf714e96b949b6e178db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3379ec8b274a204c9a748391ce5dde22cb9766a9f0e2d3f8b7d8dfb857a1e38e->leave($__internal_3379ec8b274a204c9a748391ce5dde22cb9766a9f0e2d3f8b7d8dfb857a1e38e_prof);

        
        $__internal_fa8200a84d4b49c213dd7ab5a575bd8d574dcb39581bcf714e96b949b6e178db->leave($__internal_fa8200a84d4b49c213dd7ab5a575bd8d574dcb39581bcf714e96b949b6e178db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bfab4fbcd4a4ce9b704f1be02046d6b70cfd563508d26bd6e68b47f88f74afe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfab4fbcd4a4ce9b704f1be02046d6b70cfd563508d26bd6e68b47f88f74afe7->enter($__internal_bfab4fbcd4a4ce9b704f1be02046d6b70cfd563508d26bd6e68b47f88f74afe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f4d897606e3d2f0ff643c75327e20bc9791bed99942254cc0154b0a08a584e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d897606e3d2f0ff643c75327e20bc9791bed99942254cc0154b0a08a584e78->enter($__internal_f4d897606e3d2f0ff643c75327e20bc9791bed99942254cc0154b0a08a584e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f4d897606e3d2f0ff643c75327e20bc9791bed99942254cc0154b0a08a584e78->leave($__internal_f4d897606e3d2f0ff643c75327e20bc9791bed99942254cc0154b0a08a584e78_prof);

        
        $__internal_bfab4fbcd4a4ce9b704f1be02046d6b70cfd563508d26bd6e68b47f88f74afe7->leave($__internal_bfab4fbcd4a4ce9b704f1be02046d6b70cfd563508d26bd6e68b47f88f74afe7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e275a311ea80d9c4e74468e4540419629c53549563e39cea958f577b865c0b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e275a311ea80d9c4e74468e4540419629c53549563e39cea958f577b865c0b56->enter($__internal_e275a311ea80d9c4e74468e4540419629c53549563e39cea958f577b865c0b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b3937821fe0bdf184933def202b6e6786e77a07eb2dce6fb3f1d90723176296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3937821fe0bdf184933def202b6e6786e77a07eb2dce6fb3f1d90723176296->enter($__internal_0b3937821fe0bdf184933def202b6e6786e77a07eb2dce6fb3f1d90723176296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b3937821fe0bdf184933def202b6e6786e77a07eb2dce6fb3f1d90723176296->leave($__internal_0b3937821fe0bdf184933def202b6e6786e77a07eb2dce6fb3f1d90723176296_prof);

        
        $__internal_e275a311ea80d9c4e74468e4540419629c53549563e39cea958f577b865c0b56->leave($__internal_e275a311ea80d9c4e74468e4540419629c53549563e39cea958f577b865c0b56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5522107c518468de75875d1b021f5a83ee85835c2555d4e35a5a55d797119ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5522107c518468de75875d1b021f5a83ee85835c2555d4e35a5a55d797119ae->enter($__internal_e5522107c518468de75875d1b021f5a83ee85835c2555d4e35a5a55d797119ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_669bdcb80477063fb44226b2e7741eb3bf42d172a0438eefadc79761478b255f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669bdcb80477063fb44226b2e7741eb3bf42d172a0438eefadc79761478b255f->enter($__internal_669bdcb80477063fb44226b2e7741eb3bf42d172a0438eefadc79761478b255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_669bdcb80477063fb44226b2e7741eb3bf42d172a0438eefadc79761478b255f->leave($__internal_669bdcb80477063fb44226b2e7741eb3bf42d172a0438eefadc79761478b255f_prof);

        
        $__internal_e5522107c518468de75875d1b021f5a83ee85835c2555d4e35a5a55d797119ae->leave($__internal_e5522107c518468de75875d1b021f5a83ee85835c2555d4e35a5a55d797119ae_prof);

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

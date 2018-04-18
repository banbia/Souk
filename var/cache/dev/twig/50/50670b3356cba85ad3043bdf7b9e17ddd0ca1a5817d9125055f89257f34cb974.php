<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8ed138f04364231a127b13ced2d69ad9237abe80bc05aab95b0b24d49287a4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13d530d42d3779832d1953157225facaafd768c6772155acd860156dbe37e8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d530d42d3779832d1953157225facaafd768c6772155acd860156dbe37e8e5->enter($__internal_13d530d42d3779832d1953157225facaafd768c6772155acd860156dbe37e8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7b138cfaf7e4c6f7b205f539c0dd6da350997c895a47f87474e114034858bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b138cfaf7e4c6f7b205f539c0dd6da350997c895a47f87474e114034858bb87->enter($__internal_7b138cfaf7e4c6f7b205f539c0dd6da350997c895a47f87474e114034858bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d530d42d3779832d1953157225facaafd768c6772155acd860156dbe37e8e5->leave($__internal_13d530d42d3779832d1953157225facaafd768c6772155acd860156dbe37e8e5_prof);

        
        $__internal_7b138cfaf7e4c6f7b205f539c0dd6da350997c895a47f87474e114034858bb87->leave($__internal_7b138cfaf7e4c6f7b205f539c0dd6da350997c895a47f87474e114034858bb87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94bb3d36372fd03d7ddf84b61b21537b8f2936905840897590828e8ad42598cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bb3d36372fd03d7ddf84b61b21537b8f2936905840897590828e8ad42598cb->enter($__internal_94bb3d36372fd03d7ddf84b61b21537b8f2936905840897590828e8ad42598cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75baaba0d04000488ccf3347470aec61dc8993168f15f9492d5a30f6bf23aca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75baaba0d04000488ccf3347470aec61dc8993168f15f9492d5a30f6bf23aca6->enter($__internal_75baaba0d04000488ccf3347470aec61dc8993168f15f9492d5a30f6bf23aca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75baaba0d04000488ccf3347470aec61dc8993168f15f9492d5a30f6bf23aca6->leave($__internal_75baaba0d04000488ccf3347470aec61dc8993168f15f9492d5a30f6bf23aca6_prof);

        
        $__internal_94bb3d36372fd03d7ddf84b61b21537b8f2936905840897590828e8ad42598cb->leave($__internal_94bb3d36372fd03d7ddf84b61b21537b8f2936905840897590828e8ad42598cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e447630e7d2f5bfb7a85d394bcfd768deabed7eebda9a15e4e291c6c8fb707b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e447630e7d2f5bfb7a85d394bcfd768deabed7eebda9a15e4e291c6c8fb707b->enter($__internal_5e447630e7d2f5bfb7a85d394bcfd768deabed7eebda9a15e4e291c6c8fb707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e049ac95fbe3c2adae0850ef3827fcfca3dac0b306a03ac23c679c31b4c3dc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e049ac95fbe3c2adae0850ef3827fcfca3dac0b306a03ac23c679c31b4c3dc08->enter($__internal_e049ac95fbe3c2adae0850ef3827fcfca3dac0b306a03ac23c679c31b4c3dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e049ac95fbe3c2adae0850ef3827fcfca3dac0b306a03ac23c679c31b4c3dc08->leave($__internal_e049ac95fbe3c2adae0850ef3827fcfca3dac0b306a03ac23c679c31b4c3dc08_prof);

        
        $__internal_5e447630e7d2f5bfb7a85d394bcfd768deabed7eebda9a15e4e291c6c8fb707b->leave($__internal_5e447630e7d2f5bfb7a85d394bcfd768deabed7eebda9a15e4e291c6c8fb707b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

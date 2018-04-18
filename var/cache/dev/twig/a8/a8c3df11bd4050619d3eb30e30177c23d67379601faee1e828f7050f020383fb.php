<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_66e362a02951633e100e6010a5d2a47ce037bb4c08b55a530d6f488966c836dd extends Twig_Template
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
        $__internal_45a66980b9eb2a446ab2983ae6f0c981116ebe008239cc535bd31566ea8f5783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a66980b9eb2a446ab2983ae6f0c981116ebe008239cc535bd31566ea8f5783->enter($__internal_45a66980b9eb2a446ab2983ae6f0c981116ebe008239cc535bd31566ea8f5783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8d169413d874819b4fe512df580593e8507f80457a256b91dd87288f7b48b1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d169413d874819b4fe512df580593e8507f80457a256b91dd87288f7b48b1a9->enter($__internal_8d169413d874819b4fe512df580593e8507f80457a256b91dd87288f7b48b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a66980b9eb2a446ab2983ae6f0c981116ebe008239cc535bd31566ea8f5783->leave($__internal_45a66980b9eb2a446ab2983ae6f0c981116ebe008239cc535bd31566ea8f5783_prof);

        
        $__internal_8d169413d874819b4fe512df580593e8507f80457a256b91dd87288f7b48b1a9->leave($__internal_8d169413d874819b4fe512df580593e8507f80457a256b91dd87288f7b48b1a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf06703d1c71e168c670ddca259eb03f24a704d922f3c4ae4c5599fd40fe3ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf06703d1c71e168c670ddca259eb03f24a704d922f3c4ae4c5599fd40fe3ac8->enter($__internal_cf06703d1c71e168c670ddca259eb03f24a704d922f3c4ae4c5599fd40fe3ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_206ebd5bf7efa21c5ab13884614b242808f1fafeb8522f7f7b7004933ceec36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206ebd5bf7efa21c5ab13884614b242808f1fafeb8522f7f7b7004933ceec36d->enter($__internal_206ebd5bf7efa21c5ab13884614b242808f1fafeb8522f7f7b7004933ceec36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_206ebd5bf7efa21c5ab13884614b242808f1fafeb8522f7f7b7004933ceec36d->leave($__internal_206ebd5bf7efa21c5ab13884614b242808f1fafeb8522f7f7b7004933ceec36d_prof);

        
        $__internal_cf06703d1c71e168c670ddca259eb03f24a704d922f3c4ae4c5599fd40fe3ac8->leave($__internal_cf06703d1c71e168c670ddca259eb03f24a704d922f3c4ae4c5599fd40fe3ac8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_809b2f30f1dba06b0f7643b3958bc3e27ba6790b22b73d9a0e3054945c45b796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809b2f30f1dba06b0f7643b3958bc3e27ba6790b22b73d9a0e3054945c45b796->enter($__internal_809b2f30f1dba06b0f7643b3958bc3e27ba6790b22b73d9a0e3054945c45b796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6a05b148ba5a0a73a6993b0c5d36ab4590f46e9c4b78e4a8da9fa06c6f6d44aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a05b148ba5a0a73a6993b0c5d36ab4590f46e9c4b78e4a8da9fa06c6f6d44aa->enter($__internal_6a05b148ba5a0a73a6993b0c5d36ab4590f46e9c4b78e4a8da9fa06c6f6d44aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a05b148ba5a0a73a6993b0c5d36ab4590f46e9c4b78e4a8da9fa06c6f6d44aa->leave($__internal_6a05b148ba5a0a73a6993b0c5d36ab4590f46e9c4b78e4a8da9fa06c6f6d44aa_prof);

        
        $__internal_809b2f30f1dba06b0f7643b3958bc3e27ba6790b22b73d9a0e3054945c45b796->leave($__internal_809b2f30f1dba06b0f7643b3958bc3e27ba6790b22b73d9a0e3054945c45b796_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8bbd2ebf2fabb3da8baa33f367d92743d5344db61c37dc7fbc29f64b07db98b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbd2ebf2fabb3da8baa33f367d92743d5344db61c37dc7fbc29f64b07db98b2->enter($__internal_8bbd2ebf2fabb3da8baa33f367d92743d5344db61c37dc7fbc29f64b07db98b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2519413780a4ea1da5e2f6c4ea8cc5751c8a088d75899e89b2fe2ba289cc4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2519413780a4ea1da5e2f6c4ea8cc5751c8a088d75899e89b2fe2ba289cc4a5->enter($__internal_a2519413780a4ea1da5e2f6c4ea8cc5751c8a088d75899e89b2fe2ba289cc4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2519413780a4ea1da5e2f6c4ea8cc5751c8a088d75899e89b2fe2ba289cc4a5->leave($__internal_a2519413780a4ea1da5e2f6c4ea8cc5751c8a088d75899e89b2fe2ba289cc4a5_prof);

        
        $__internal_8bbd2ebf2fabb3da8baa33f367d92743d5344db61c37dc7fbc29f64b07db98b2->leave($__internal_8bbd2ebf2fabb3da8baa33f367d92743d5344db61c37dc7fbc29f64b07db98b2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

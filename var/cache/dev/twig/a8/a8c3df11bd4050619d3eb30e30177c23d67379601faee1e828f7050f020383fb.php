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
        $__internal_f9ed0429dfe27ea2a6994cb7eff7a28e80f68c3b823e90a1ea114c4809ecee92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ed0429dfe27ea2a6994cb7eff7a28e80f68c3b823e90a1ea114c4809ecee92->enter($__internal_f9ed0429dfe27ea2a6994cb7eff7a28e80f68c3b823e90a1ea114c4809ecee92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_366e46ae1600536d9bec8ab7bd349c91c98afb519fb09a12504c6d44c54c3e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366e46ae1600536d9bec8ab7bd349c91c98afb519fb09a12504c6d44c54c3e2b->enter($__internal_366e46ae1600536d9bec8ab7bd349c91c98afb519fb09a12504c6d44c54c3e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ed0429dfe27ea2a6994cb7eff7a28e80f68c3b823e90a1ea114c4809ecee92->leave($__internal_f9ed0429dfe27ea2a6994cb7eff7a28e80f68c3b823e90a1ea114c4809ecee92_prof);

        
        $__internal_366e46ae1600536d9bec8ab7bd349c91c98afb519fb09a12504c6d44c54c3e2b->leave($__internal_366e46ae1600536d9bec8ab7bd349c91c98afb519fb09a12504c6d44c54c3e2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6fa9c88c76071f25d9b8969c475d4c5a3627c6a2fd719eb82557c12930963770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa9c88c76071f25d9b8969c475d4c5a3627c6a2fd719eb82557c12930963770->enter($__internal_6fa9c88c76071f25d9b8969c475d4c5a3627c6a2fd719eb82557c12930963770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c693d2283400104098fc6b45f5819d3a03630eb9e2bcf726d467352b466bf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c693d2283400104098fc6b45f5819d3a03630eb9e2bcf726d467352b466bf3d->enter($__internal_2c693d2283400104098fc6b45f5819d3a03630eb9e2bcf726d467352b466bf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c693d2283400104098fc6b45f5819d3a03630eb9e2bcf726d467352b466bf3d->leave($__internal_2c693d2283400104098fc6b45f5819d3a03630eb9e2bcf726d467352b466bf3d_prof);

        
        $__internal_6fa9c88c76071f25d9b8969c475d4c5a3627c6a2fd719eb82557c12930963770->leave($__internal_6fa9c88c76071f25d9b8969c475d4c5a3627c6a2fd719eb82557c12930963770_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8706f32eb1f290d35af326e18ad17bfb73d6a3b116b7a15ec06026aefaa46c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8706f32eb1f290d35af326e18ad17bfb73d6a3b116b7a15ec06026aefaa46c20->enter($__internal_8706f32eb1f290d35af326e18ad17bfb73d6a3b116b7a15ec06026aefaa46c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a4710e87f6585ad110eabbcaca59554d4534ed59a41dd8b7e4201dc08f3852f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4710e87f6585ad110eabbcaca59554d4534ed59a41dd8b7e4201dc08f3852f->enter($__internal_5a4710e87f6585ad110eabbcaca59554d4534ed59a41dd8b7e4201dc08f3852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a4710e87f6585ad110eabbcaca59554d4534ed59a41dd8b7e4201dc08f3852f->leave($__internal_5a4710e87f6585ad110eabbcaca59554d4534ed59a41dd8b7e4201dc08f3852f_prof);

        
        $__internal_8706f32eb1f290d35af326e18ad17bfb73d6a3b116b7a15ec06026aefaa46c20->leave($__internal_8706f32eb1f290d35af326e18ad17bfb73d6a3b116b7a15ec06026aefaa46c20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05d2640e5d9eda4d6e9605bcdd13b55b51fd8be5fc03d1cb9471be26276f1127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d2640e5d9eda4d6e9605bcdd13b55b51fd8be5fc03d1cb9471be26276f1127->enter($__internal_05d2640e5d9eda4d6e9605bcdd13b55b51fd8be5fc03d1cb9471be26276f1127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_67c1e0332cb0c1a1c9b2596463f0331684e0b4e6492388410f5bd46102f58fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c1e0332cb0c1a1c9b2596463f0331684e0b4e6492388410f5bd46102f58fa6->enter($__internal_67c1e0332cb0c1a1c9b2596463f0331684e0b4e6492388410f5bd46102f58fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67c1e0332cb0c1a1c9b2596463f0331684e0b4e6492388410f5bd46102f58fa6->leave($__internal_67c1e0332cb0c1a1c9b2596463f0331684e0b4e6492388410f5bd46102f58fa6_prof);

        
        $__internal_05d2640e5d9eda4d6e9605bcdd13b55b51fd8be5fc03d1cb9471be26276f1127->leave($__internal_05d2640e5d9eda4d6e9605bcdd13b55b51fd8be5fc03d1cb9471be26276f1127_prof);

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

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
        $__internal_c4ca90715cf118e4321a608e4f68a2e516612dd0b2946ca1984a30214f587b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ca90715cf118e4321a608e4f68a2e516612dd0b2946ca1984a30214f587b8e->enter($__internal_c4ca90715cf118e4321a608e4f68a2e516612dd0b2946ca1984a30214f587b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_863fd8aca19826870c5d20ddfb5d5516b2cb86c06af66a7414c923dc09ea7576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863fd8aca19826870c5d20ddfb5d5516b2cb86c06af66a7414c923dc09ea7576->enter($__internal_863fd8aca19826870c5d20ddfb5d5516b2cb86c06af66a7414c923dc09ea7576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ca90715cf118e4321a608e4f68a2e516612dd0b2946ca1984a30214f587b8e->leave($__internal_c4ca90715cf118e4321a608e4f68a2e516612dd0b2946ca1984a30214f587b8e_prof);

        
        $__internal_863fd8aca19826870c5d20ddfb5d5516b2cb86c06af66a7414c923dc09ea7576->leave($__internal_863fd8aca19826870c5d20ddfb5d5516b2cb86c06af66a7414c923dc09ea7576_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9857b6872ef35f69f7df8d927234aa3cb127ba70ff067cec0b6fccc06542a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9857b6872ef35f69f7df8d927234aa3cb127ba70ff067cec0b6fccc06542a20->enter($__internal_d9857b6872ef35f69f7df8d927234aa3cb127ba70ff067cec0b6fccc06542a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d017da474fba47809fd729e8b95235a5e83cbb1ea05d6acb05b46609f4a54606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d017da474fba47809fd729e8b95235a5e83cbb1ea05d6acb05b46609f4a54606->enter($__internal_d017da474fba47809fd729e8b95235a5e83cbb1ea05d6acb05b46609f4a54606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d017da474fba47809fd729e8b95235a5e83cbb1ea05d6acb05b46609f4a54606->leave($__internal_d017da474fba47809fd729e8b95235a5e83cbb1ea05d6acb05b46609f4a54606_prof);

        
        $__internal_d9857b6872ef35f69f7df8d927234aa3cb127ba70ff067cec0b6fccc06542a20->leave($__internal_d9857b6872ef35f69f7df8d927234aa3cb127ba70ff067cec0b6fccc06542a20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f90a4df9e6681dfe38035a0817702757fb9d6db5b3100689afb3e0463b0423d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f90a4df9e6681dfe38035a0817702757fb9d6db5b3100689afb3e0463b0423d7->enter($__internal_f90a4df9e6681dfe38035a0817702757fb9d6db5b3100689afb3e0463b0423d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_457ababa7e6c4e4b0807dc1bca97c0ff741f2e212bacc08abd41f173f57b6baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457ababa7e6c4e4b0807dc1bca97c0ff741f2e212bacc08abd41f173f57b6baa->enter($__internal_457ababa7e6c4e4b0807dc1bca97c0ff741f2e212bacc08abd41f173f57b6baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_457ababa7e6c4e4b0807dc1bca97c0ff741f2e212bacc08abd41f173f57b6baa->leave($__internal_457ababa7e6c4e4b0807dc1bca97c0ff741f2e212bacc08abd41f173f57b6baa_prof);

        
        $__internal_f90a4df9e6681dfe38035a0817702757fb9d6db5b3100689afb3e0463b0423d7->leave($__internal_f90a4df9e6681dfe38035a0817702757fb9d6db5b3100689afb3e0463b0423d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb70e6fe933dbc202a70c227b3f30fd7d5f6107d547f60a1bb4bb1811529c588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb70e6fe933dbc202a70c227b3f30fd7d5f6107d547f60a1bb4bb1811529c588->enter($__internal_fb70e6fe933dbc202a70c227b3f30fd7d5f6107d547f60a1bb4bb1811529c588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_167aa0929f88b9529c4847c75cd1ae247e0f73d564908da3b2779b7c4e49a1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167aa0929f88b9529c4847c75cd1ae247e0f73d564908da3b2779b7c4e49a1ad->enter($__internal_167aa0929f88b9529c4847c75cd1ae247e0f73d564908da3b2779b7c4e49a1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_167aa0929f88b9529c4847c75cd1ae247e0f73d564908da3b2779b7c4e49a1ad->leave($__internal_167aa0929f88b9529c4847c75cd1ae247e0f73d564908da3b2779b7c4e49a1ad_prof);

        
        $__internal_fb70e6fe933dbc202a70c227b3f30fd7d5f6107d547f60a1bb4bb1811529c588->leave($__internal_fb70e6fe933dbc202a70c227b3f30fd7d5f6107d547f60a1bb4bb1811529c588_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

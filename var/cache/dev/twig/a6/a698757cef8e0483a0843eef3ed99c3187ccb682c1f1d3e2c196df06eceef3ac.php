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
        $__internal_7f7df9a66f0ec168135dccf01245192c2f7eee5c50cac85bba9034836409a1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7df9a66f0ec168135dccf01245192c2f7eee5c50cac85bba9034836409a1f4->enter($__internal_7f7df9a66f0ec168135dccf01245192c2f7eee5c50cac85bba9034836409a1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a1ed0be1b337c93293f9221bcae3d9c92008cbb1656ced08545f9692c8d4c850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ed0be1b337c93293f9221bcae3d9c92008cbb1656ced08545f9692c8d4c850->enter($__internal_a1ed0be1b337c93293f9221bcae3d9c92008cbb1656ced08545f9692c8d4c850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f7df9a66f0ec168135dccf01245192c2f7eee5c50cac85bba9034836409a1f4->leave($__internal_7f7df9a66f0ec168135dccf01245192c2f7eee5c50cac85bba9034836409a1f4_prof);

        
        $__internal_a1ed0be1b337c93293f9221bcae3d9c92008cbb1656ced08545f9692c8d4c850->leave($__internal_a1ed0be1b337c93293f9221bcae3d9c92008cbb1656ced08545f9692c8d4c850_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d88303e6a2c99c71cffb0d7446cc8d35c3c2ba0a7f3c7acfb023e9788a5473c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88303e6a2c99c71cffb0d7446cc8d35c3c2ba0a7f3c7acfb023e9788a5473c1->enter($__internal_d88303e6a2c99c71cffb0d7446cc8d35c3c2ba0a7f3c7acfb023e9788a5473c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dd6e79a84e0dbc95d03cf2a336aa0663be650fcc7daabdf35ad9d9f76d3fd0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6e79a84e0dbc95d03cf2a336aa0663be650fcc7daabdf35ad9d9f76d3fd0c4->enter($__internal_dd6e79a84e0dbc95d03cf2a336aa0663be650fcc7daabdf35ad9d9f76d3fd0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd6e79a84e0dbc95d03cf2a336aa0663be650fcc7daabdf35ad9d9f76d3fd0c4->leave($__internal_dd6e79a84e0dbc95d03cf2a336aa0663be650fcc7daabdf35ad9d9f76d3fd0c4_prof);

        
        $__internal_d88303e6a2c99c71cffb0d7446cc8d35c3c2ba0a7f3c7acfb023e9788a5473c1->leave($__internal_d88303e6a2c99c71cffb0d7446cc8d35c3c2ba0a7f3c7acfb023e9788a5473c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3ba2c29157fe81e77d7eef5b3646eb7073c42f4e892423a34334ccd835ff2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ba2c29157fe81e77d7eef5b3646eb7073c42f4e892423a34334ccd835ff2be->enter($__internal_d3ba2c29157fe81e77d7eef5b3646eb7073c42f4e892423a34334ccd835ff2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a520fbd7bec75b73b51b59309b6376a29f2c92e1dda70ef9c47661f0023f3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a520fbd7bec75b73b51b59309b6376a29f2c92e1dda70ef9c47661f0023f3b4->enter($__internal_4a520fbd7bec75b73b51b59309b6376a29f2c92e1dda70ef9c47661f0023f3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a520fbd7bec75b73b51b59309b6376a29f2c92e1dda70ef9c47661f0023f3b4->leave($__internal_4a520fbd7bec75b73b51b59309b6376a29f2c92e1dda70ef9c47661f0023f3b4_prof);

        
        $__internal_d3ba2c29157fe81e77d7eef5b3646eb7073c42f4e892423a34334ccd835ff2be->leave($__internal_d3ba2c29157fe81e77d7eef5b3646eb7073c42f4e892423a34334ccd835ff2be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f19ab94e2faa0a24fc66828a076aca50faf8800cc4bbe3021b6651eb3d3d286d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19ab94e2faa0a24fc66828a076aca50faf8800cc4bbe3021b6651eb3d3d286d->enter($__internal_f19ab94e2faa0a24fc66828a076aca50faf8800cc4bbe3021b6651eb3d3d286d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d526b722bd2823b7963134e60ab8c4d72e0f9d63c36b012bc9fdc46d655e81da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d526b722bd2823b7963134e60ab8c4d72e0f9d63c36b012bc9fdc46d655e81da->enter($__internal_d526b722bd2823b7963134e60ab8c4d72e0f9d63c36b012bc9fdc46d655e81da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d526b722bd2823b7963134e60ab8c4d72e0f9d63c36b012bc9fdc46d655e81da->leave($__internal_d526b722bd2823b7963134e60ab8c4d72e0f9d63c36b012bc9fdc46d655e81da_prof);

        
        $__internal_f19ab94e2faa0a24fc66828a076aca50faf8800cc4bbe3021b6651eb3d3d286d->leave($__internal_f19ab94e2faa0a24fc66828a076aca50faf8800cc4bbe3021b6651eb3d3d286d_prof);

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

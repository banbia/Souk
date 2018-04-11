<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08907de82a6f094dd0bd0695c39e414172e29c852536879e097372e869a73689 extends Twig_Template
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
        $__internal_316770f832ced888661ac736c18c2e2c0f310438c4daa3c45f5d80d7443148b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316770f832ced888661ac736c18c2e2c0f310438c4daa3c45f5d80d7443148b1->enter($__internal_316770f832ced888661ac736c18c2e2c0f310438c4daa3c45f5d80d7443148b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7d60c20928dce9895456dcea174a394c3d357efbbed9b80f64fb86af93782ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d60c20928dce9895456dcea174a394c3d357efbbed9b80f64fb86af93782ee2->enter($__internal_7d60c20928dce9895456dcea174a394c3d357efbbed9b80f64fb86af93782ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316770f832ced888661ac736c18c2e2c0f310438c4daa3c45f5d80d7443148b1->leave($__internal_316770f832ced888661ac736c18c2e2c0f310438c4daa3c45f5d80d7443148b1_prof);

        
        $__internal_7d60c20928dce9895456dcea174a394c3d357efbbed9b80f64fb86af93782ee2->leave($__internal_7d60c20928dce9895456dcea174a394c3d357efbbed9b80f64fb86af93782ee2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b7b463bbbdcee6085bb48040d68e0ea0752e5de58bd4d108b20e6df35add14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7b463bbbdcee6085bb48040d68e0ea0752e5de58bd4d108b20e6df35add14b->enter($__internal_8b7b463bbbdcee6085bb48040d68e0ea0752e5de58bd4d108b20e6df35add14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_94b8a7a4b0139318004f4a4c4f104bc80011e103bbd8fa322f143979ffff3095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b8a7a4b0139318004f4a4c4f104bc80011e103bbd8fa322f143979ffff3095->enter($__internal_94b8a7a4b0139318004f4a4c4f104bc80011e103bbd8fa322f143979ffff3095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94b8a7a4b0139318004f4a4c4f104bc80011e103bbd8fa322f143979ffff3095->leave($__internal_94b8a7a4b0139318004f4a4c4f104bc80011e103bbd8fa322f143979ffff3095_prof);

        
        $__internal_8b7b463bbbdcee6085bb48040d68e0ea0752e5de58bd4d108b20e6df35add14b->leave($__internal_8b7b463bbbdcee6085bb48040d68e0ea0752e5de58bd4d108b20e6df35add14b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c79fdefc5db0e7becc7cfb81d2a212331877bf56dcf6b951710af1719520158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c79fdefc5db0e7becc7cfb81d2a212331877bf56dcf6b951710af1719520158->enter($__internal_3c79fdefc5db0e7becc7cfb81d2a212331877bf56dcf6b951710af1719520158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd16f6ce90ced33ec4ca5504e40d2b4c5393f1617db36be414a590674025b839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd16f6ce90ced33ec4ca5504e40d2b4c5393f1617db36be414a590674025b839->enter($__internal_bd16f6ce90ced33ec4ca5504e40d2b4c5393f1617db36be414a590674025b839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd16f6ce90ced33ec4ca5504e40d2b4c5393f1617db36be414a590674025b839->leave($__internal_bd16f6ce90ced33ec4ca5504e40d2b4c5393f1617db36be414a590674025b839_prof);

        
        $__internal_3c79fdefc5db0e7becc7cfb81d2a212331877bf56dcf6b951710af1719520158->leave($__internal_3c79fdefc5db0e7becc7cfb81d2a212331877bf56dcf6b951710af1719520158_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37f3ff3c07514a02dd4666fa887d262b34aa29b430c03864d7a8312b0d8cffe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f3ff3c07514a02dd4666fa887d262b34aa29b430c03864d7a8312b0d8cffe6->enter($__internal_37f3ff3c07514a02dd4666fa887d262b34aa29b430c03864d7a8312b0d8cffe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12c1d898ceb396bc9f4475c6d8390f380402534d4376f692583ab6aacf11d836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c1d898ceb396bc9f4475c6d8390f380402534d4376f692583ab6aacf11d836->enter($__internal_12c1d898ceb396bc9f4475c6d8390f380402534d4376f692583ab6aacf11d836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12c1d898ceb396bc9f4475c6d8390f380402534d4376f692583ab6aacf11d836->leave($__internal_12c1d898ceb396bc9f4475c6d8390f380402534d4376f692583ab6aacf11d836_prof);

        
        $__internal_37f3ff3c07514a02dd4666fa887d262b34aa29b430c03864d7a8312b0d8cffe6->leave($__internal_37f3ff3c07514a02dd4666fa887d262b34aa29b430c03864d7a8312b0d8cffe6_prof);

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

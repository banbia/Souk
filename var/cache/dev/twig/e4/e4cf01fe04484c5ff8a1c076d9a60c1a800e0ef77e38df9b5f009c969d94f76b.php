<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bb19141d6893b2b87359619cf6bbd241c5537276cbb8bf8fcbf7e0a2cc41f0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_50b1699f79edc9808ecbd8e26a6a8f807ceb646cdc1818b5d61ca42e3dad7576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b1699f79edc9808ecbd8e26a6a8f807ceb646cdc1818b5d61ca42e3dad7576->enter($__internal_50b1699f79edc9808ecbd8e26a6a8f807ceb646cdc1818b5d61ca42e3dad7576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_66d87ad459a1e667e442ec498e31843594d614288bbfe977f8769a1068822bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d87ad459a1e667e442ec498e31843594d614288bbfe977f8769a1068822bda->enter($__internal_66d87ad459a1e667e442ec498e31843594d614288bbfe977f8769a1068822bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b1699f79edc9808ecbd8e26a6a8f807ceb646cdc1818b5d61ca42e3dad7576->leave($__internal_50b1699f79edc9808ecbd8e26a6a8f807ceb646cdc1818b5d61ca42e3dad7576_prof);

        
        $__internal_66d87ad459a1e667e442ec498e31843594d614288bbfe977f8769a1068822bda->leave($__internal_66d87ad459a1e667e442ec498e31843594d614288bbfe977f8769a1068822bda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_811acb71f7d49a42e7cb0e073c1cd2097b949fc712e3ac5d740b50e06cf047f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811acb71f7d49a42e7cb0e073c1cd2097b949fc712e3ac5d740b50e06cf047f2->enter($__internal_811acb71f7d49a42e7cb0e073c1cd2097b949fc712e3ac5d740b50e06cf047f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f8ad8db58b54e7dbd92bb076c81a53e421f5c6ff702d84fe86ac7d9ebf5a0aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ad8db58b54e7dbd92bb076c81a53e421f5c6ff702d84fe86ac7d9ebf5a0aa0->enter($__internal_f8ad8db58b54e7dbd92bb076c81a53e421f5c6ff702d84fe86ac7d9ebf5a0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f8ad8db58b54e7dbd92bb076c81a53e421f5c6ff702d84fe86ac7d9ebf5a0aa0->leave($__internal_f8ad8db58b54e7dbd92bb076c81a53e421f5c6ff702d84fe86ac7d9ebf5a0aa0_prof);

        
        $__internal_811acb71f7d49a42e7cb0e073c1cd2097b949fc712e3ac5d740b50e06cf047f2->leave($__internal_811acb71f7d49a42e7cb0e073c1cd2097b949fc712e3ac5d740b50e06cf047f2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a225978b73ce33e0fe7fcdeff260fd274f9612c8ee9b8b4fe3eebd7d7bf59ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a225978b73ce33e0fe7fcdeff260fd274f9612c8ee9b8b4fe3eebd7d7bf59ef3->enter($__internal_a225978b73ce33e0fe7fcdeff260fd274f9612c8ee9b8b4fe3eebd7d7bf59ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a9e0726a5341d5f06fcf36abbb4864f910496f34f007c330b6ff08221be0987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9e0726a5341d5f06fcf36abbb4864f910496f34f007c330b6ff08221be0987->enter($__internal_5a9e0726a5341d5f06fcf36abbb4864f910496f34f007c330b6ff08221be0987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5a9e0726a5341d5f06fcf36abbb4864f910496f34f007c330b6ff08221be0987->leave($__internal_5a9e0726a5341d5f06fcf36abbb4864f910496f34f007c330b6ff08221be0987_prof);

        
        $__internal_a225978b73ce33e0fe7fcdeff260fd274f9612c8ee9b8b4fe3eebd7d7bf59ef3->leave($__internal_a225978b73ce33e0fe7fcdeff260fd274f9612c8ee9b8b4fe3eebd7d7bf59ef3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75b82d6675e6d2bcd6834f966752c48c1d675d2071be9078dfb1a43702584c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b82d6675e6d2bcd6834f966752c48c1d675d2071be9078dfb1a43702584c7d->enter($__internal_75b82d6675e6d2bcd6834f966752c48c1d675d2071be9078dfb1a43702584c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70646f0c8c7c308bbfc7f59871df890eb2637b7b57fa7a6be10f798e54ee1d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70646f0c8c7c308bbfc7f59871df890eb2637b7b57fa7a6be10f798e54ee1d42->enter($__internal_70646f0c8c7c308bbfc7f59871df890eb2637b7b57fa7a6be10f798e54ee1d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_70646f0c8c7c308bbfc7f59871df890eb2637b7b57fa7a6be10f798e54ee1d42->leave($__internal_70646f0c8c7c308bbfc7f59871df890eb2637b7b57fa7a6be10f798e54ee1d42_prof);

        
        $__internal_75b82d6675e6d2bcd6834f966752c48c1d675d2071be9078dfb1a43702584c7d->leave($__internal_75b82d6675e6d2bcd6834f966752c48c1d675d2071be9078dfb1a43702584c7d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_29837f51391bbcd67657f7e576d9a42e0b8264525aa9dfbf964a12f2ed74fe69 extends Twig_Template
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
        $__internal_5b01022859e45c743752c32f61997b4e283018f9577bdaf73bc6c3cbe4cebcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b01022859e45c743752c32f61997b4e283018f9577bdaf73bc6c3cbe4cebcf5->enter($__internal_5b01022859e45c743752c32f61997b4e283018f9577bdaf73bc6c3cbe4cebcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d89066e8862368d738da6d02fc98df8eb33fce108ae905a64e997e5a577416b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89066e8862368d738da6d02fc98df8eb33fce108ae905a64e997e5a577416b1->enter($__internal_d89066e8862368d738da6d02fc98df8eb33fce108ae905a64e997e5a577416b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b01022859e45c743752c32f61997b4e283018f9577bdaf73bc6c3cbe4cebcf5->leave($__internal_5b01022859e45c743752c32f61997b4e283018f9577bdaf73bc6c3cbe4cebcf5_prof);

        
        $__internal_d89066e8862368d738da6d02fc98df8eb33fce108ae905a64e997e5a577416b1->leave($__internal_d89066e8862368d738da6d02fc98df8eb33fce108ae905a64e997e5a577416b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52da1dbbd3346ea006b69d8585e4fce6b8bba0faa0e35ae3a924c6f1a381af9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52da1dbbd3346ea006b69d8585e4fce6b8bba0faa0e35ae3a924c6f1a381af9a->enter($__internal_52da1dbbd3346ea006b69d8585e4fce6b8bba0faa0e35ae3a924c6f1a381af9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bff3de16e2db85ebbd19dcfe91993c25d88eae8bec0f52748638fd23cc982ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff3de16e2db85ebbd19dcfe91993c25d88eae8bec0f52748638fd23cc982ba0->enter($__internal_bff3de16e2db85ebbd19dcfe91993c25d88eae8bec0f52748638fd23cc982ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bff3de16e2db85ebbd19dcfe91993c25d88eae8bec0f52748638fd23cc982ba0->leave($__internal_bff3de16e2db85ebbd19dcfe91993c25d88eae8bec0f52748638fd23cc982ba0_prof);

        
        $__internal_52da1dbbd3346ea006b69d8585e4fce6b8bba0faa0e35ae3a924c6f1a381af9a->leave($__internal_52da1dbbd3346ea006b69d8585e4fce6b8bba0faa0e35ae3a924c6f1a381af9a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3598f7fc5d44e9b21acb643471bd6521197c1d1a1c09ae33f3b2022b8ea44691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3598f7fc5d44e9b21acb643471bd6521197c1d1a1c09ae33f3b2022b8ea44691->enter($__internal_3598f7fc5d44e9b21acb643471bd6521197c1d1a1c09ae33f3b2022b8ea44691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_db6e0d61e4b80232dcb5b8aa740e8ea446debe497bdb812f047a639d0615117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6e0d61e4b80232dcb5b8aa740e8ea446debe497bdb812f047a639d0615117d->enter($__internal_db6e0d61e4b80232dcb5b8aa740e8ea446debe497bdb812f047a639d0615117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_db6e0d61e4b80232dcb5b8aa740e8ea446debe497bdb812f047a639d0615117d->leave($__internal_db6e0d61e4b80232dcb5b8aa740e8ea446debe497bdb812f047a639d0615117d_prof);

        
        $__internal_3598f7fc5d44e9b21acb643471bd6521197c1d1a1c09ae33f3b2022b8ea44691->leave($__internal_3598f7fc5d44e9b21acb643471bd6521197c1d1a1c09ae33f3b2022b8ea44691_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7242161452e569d26528a346b0cc4ad8872dea8293845326dba8869e8e6199f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7242161452e569d26528a346b0cc4ad8872dea8293845326dba8869e8e6199f->enter($__internal_c7242161452e569d26528a346b0cc4ad8872dea8293845326dba8869e8e6199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a03e6e76c74621bf98585b5f015813f984e443f475fcee1355e67acb0418de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a03e6e76c74621bf98585b5f015813f984e443f475fcee1355e67acb0418de6->enter($__internal_2a03e6e76c74621bf98585b5f015813f984e443f475fcee1355e67acb0418de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2a03e6e76c74621bf98585b5f015813f984e443f475fcee1355e67acb0418de6->leave($__internal_2a03e6e76c74621bf98585b5f015813f984e443f475fcee1355e67acb0418de6_prof);

        
        $__internal_c7242161452e569d26528a346b0cc4ad8872dea8293845326dba8869e8e6199f->leave($__internal_c7242161452e569d26528a346b0cc4ad8872dea8293845326dba8869e8e6199f_prof);

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

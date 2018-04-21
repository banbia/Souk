<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9f35fb3c9e4797108cfa42a808ef3756756bac1a6b265f4687d25521eabcdc51 extends Twig_Template
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
        $__internal_8fa886ddeae9bde8902b0fc9c538e1039860723372d69999d2726d5bc5b1ac25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa886ddeae9bde8902b0fc9c538e1039860723372d69999d2726d5bc5b1ac25->enter($__internal_8fa886ddeae9bde8902b0fc9c538e1039860723372d69999d2726d5bc5b1ac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2e6bd183200d44ad8c6aa192a7189d07666ff45b42d9fa8ead7e67c356c444ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6bd183200d44ad8c6aa192a7189d07666ff45b42d9fa8ead7e67c356c444ea->enter($__internal_2e6bd183200d44ad8c6aa192a7189d07666ff45b42d9fa8ead7e67c356c444ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa886ddeae9bde8902b0fc9c538e1039860723372d69999d2726d5bc5b1ac25->leave($__internal_8fa886ddeae9bde8902b0fc9c538e1039860723372d69999d2726d5bc5b1ac25_prof);

        
        $__internal_2e6bd183200d44ad8c6aa192a7189d07666ff45b42d9fa8ead7e67c356c444ea->leave($__internal_2e6bd183200d44ad8c6aa192a7189d07666ff45b42d9fa8ead7e67c356c444ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a174d77b02dd28caa725fae67c93c18d65db56c82d99584d8ea6fa5255935b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a174d77b02dd28caa725fae67c93c18d65db56c82d99584d8ea6fa5255935b60->enter($__internal_a174d77b02dd28caa725fae67c93c18d65db56c82d99584d8ea6fa5255935b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ad05e9f71ce5aa1439c6528d112049d44727d078cada34859eedaf0ea6d6260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad05e9f71ce5aa1439c6528d112049d44727d078cada34859eedaf0ea6d6260->enter($__internal_0ad05e9f71ce5aa1439c6528d112049d44727d078cada34859eedaf0ea6d6260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0ad05e9f71ce5aa1439c6528d112049d44727d078cada34859eedaf0ea6d6260->leave($__internal_0ad05e9f71ce5aa1439c6528d112049d44727d078cada34859eedaf0ea6d6260_prof);

        
        $__internal_a174d77b02dd28caa725fae67c93c18d65db56c82d99584d8ea6fa5255935b60->leave($__internal_a174d77b02dd28caa725fae67c93c18d65db56c82d99584d8ea6fa5255935b60_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e99469b5b4dce8f3d8e38ce83ea217b0f089f4d6c25847bc836cfb3878037fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99469b5b4dce8f3d8e38ce83ea217b0f089f4d6c25847bc836cfb3878037fa7->enter($__internal_e99469b5b4dce8f3d8e38ce83ea217b0f089f4d6c25847bc836cfb3878037fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec6948c9454d0391ba9a2ca0721dd117d50216c7c5e6aee001597a9c586fd739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6948c9454d0391ba9a2ca0721dd117d50216c7c5e6aee001597a9c586fd739->enter($__internal_ec6948c9454d0391ba9a2ca0721dd117d50216c7c5e6aee001597a9c586fd739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec6948c9454d0391ba9a2ca0721dd117d50216c7c5e6aee001597a9c586fd739->leave($__internal_ec6948c9454d0391ba9a2ca0721dd117d50216c7c5e6aee001597a9c586fd739_prof);

        
        $__internal_e99469b5b4dce8f3d8e38ce83ea217b0f089f4d6c25847bc836cfb3878037fa7->leave($__internal_e99469b5b4dce8f3d8e38ce83ea217b0f089f4d6c25847bc836cfb3878037fa7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52e0c4cdf524e57032d36251f2060c0456ab16273207f6c3f1dfa7fa5f98c662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e0c4cdf524e57032d36251f2060c0456ab16273207f6c3f1dfa7fa5f98c662->enter($__internal_52e0c4cdf524e57032d36251f2060c0456ab16273207f6c3f1dfa7fa5f98c662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_859af1000aedba449b025f74a94d4c29fb63507b5dfff702e55144c1c4ca5867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859af1000aedba449b025f74a94d4c29fb63507b5dfff702e55144c1c4ca5867->enter($__internal_859af1000aedba449b025f74a94d4c29fb63507b5dfff702e55144c1c4ca5867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_859af1000aedba449b025f74a94d4c29fb63507b5dfff702e55144c1c4ca5867->leave($__internal_859af1000aedba449b025f74a94d4c29fb63507b5dfff702e55144c1c4ca5867_prof);

        
        $__internal_52e0c4cdf524e57032d36251f2060c0456ab16273207f6c3f1dfa7fa5f98c662->leave($__internal_52e0c4cdf524e57032d36251f2060c0456ab16273207f6c3f1dfa7fa5f98c662_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

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
        $__internal_38ffe6fb9361ed74c087c7f4aacdbb05e1ee228dc48ca1ab943b0fd900a5e024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ffe6fb9361ed74c087c7f4aacdbb05e1ee228dc48ca1ab943b0fd900a5e024->enter($__internal_38ffe6fb9361ed74c087c7f4aacdbb05e1ee228dc48ca1ab943b0fd900a5e024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_94edd882a74dc555d3e8c5cf9452bbfe3e537d53b619f50eb3b9afb2d775a19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94edd882a74dc555d3e8c5cf9452bbfe3e537d53b619f50eb3b9afb2d775a19d->enter($__internal_94edd882a74dc555d3e8c5cf9452bbfe3e537d53b619f50eb3b9afb2d775a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ffe6fb9361ed74c087c7f4aacdbb05e1ee228dc48ca1ab943b0fd900a5e024->leave($__internal_38ffe6fb9361ed74c087c7f4aacdbb05e1ee228dc48ca1ab943b0fd900a5e024_prof);

        
        $__internal_94edd882a74dc555d3e8c5cf9452bbfe3e537d53b619f50eb3b9afb2d775a19d->leave($__internal_94edd882a74dc555d3e8c5cf9452bbfe3e537d53b619f50eb3b9afb2d775a19d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db779308db6a1ef2df14d603b259908c24bc9d91bf6d77b81380859986dee5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db779308db6a1ef2df14d603b259908c24bc9d91bf6d77b81380859986dee5e2->enter($__internal_db779308db6a1ef2df14d603b259908c24bc9d91bf6d77b81380859986dee5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abfdaa13515391f3c6f4ae512d71541dd9fdd85e03528ff92b4b967e2ab419fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfdaa13515391f3c6f4ae512d71541dd9fdd85e03528ff92b4b967e2ab419fc->enter($__internal_abfdaa13515391f3c6f4ae512d71541dd9fdd85e03528ff92b4b967e2ab419fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_abfdaa13515391f3c6f4ae512d71541dd9fdd85e03528ff92b4b967e2ab419fc->leave($__internal_abfdaa13515391f3c6f4ae512d71541dd9fdd85e03528ff92b4b967e2ab419fc_prof);

        
        $__internal_db779308db6a1ef2df14d603b259908c24bc9d91bf6d77b81380859986dee5e2->leave($__internal_db779308db6a1ef2df14d603b259908c24bc9d91bf6d77b81380859986dee5e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02cbb55f3b4fd035160179bad81f072d43ffd733622daaf98ad6a25c5c812019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cbb55f3b4fd035160179bad81f072d43ffd733622daaf98ad6a25c5c812019->enter($__internal_02cbb55f3b4fd035160179bad81f072d43ffd733622daaf98ad6a25c5c812019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5c87e426020014e51bd5f8df38d6000477421b7644a1e46077caf4ab9bdd640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c87e426020014e51bd5f8df38d6000477421b7644a1e46077caf4ab9bdd640->enter($__internal_d5c87e426020014e51bd5f8df38d6000477421b7644a1e46077caf4ab9bdd640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d5c87e426020014e51bd5f8df38d6000477421b7644a1e46077caf4ab9bdd640->leave($__internal_d5c87e426020014e51bd5f8df38d6000477421b7644a1e46077caf4ab9bdd640_prof);

        
        $__internal_02cbb55f3b4fd035160179bad81f072d43ffd733622daaf98ad6a25c5c812019->leave($__internal_02cbb55f3b4fd035160179bad81f072d43ffd733622daaf98ad6a25c5c812019_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b264b4b0a10a33c8bce2805b46c9aadda630a5ab175dbfe005862e99890c7a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b264b4b0a10a33c8bce2805b46c9aadda630a5ab175dbfe005862e99890c7a37->enter($__internal_b264b4b0a10a33c8bce2805b46c9aadda630a5ab175dbfe005862e99890c7a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_820d98d5abecf1a9cb7d681265cbaa8d83ec77d44d9b0abebd939326ac1ee8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820d98d5abecf1a9cb7d681265cbaa8d83ec77d44d9b0abebd939326ac1ee8ca->enter($__internal_820d98d5abecf1a9cb7d681265cbaa8d83ec77d44d9b0abebd939326ac1ee8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_820d98d5abecf1a9cb7d681265cbaa8d83ec77d44d9b0abebd939326ac1ee8ca->leave($__internal_820d98d5abecf1a9cb7d681265cbaa8d83ec77d44d9b0abebd939326ac1ee8ca_prof);

        
        $__internal_b264b4b0a10a33c8bce2805b46c9aadda630a5ab175dbfe005862e99890c7a37->leave($__internal_b264b4b0a10a33c8bce2805b46c9aadda630a5ab175dbfe005862e99890c7a37_prof);

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

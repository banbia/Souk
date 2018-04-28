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
        $__internal_4069ad942e7c7e596491acc313d589f5c9de05767d55021574148e479f91cce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4069ad942e7c7e596491acc313d589f5c9de05767d55021574148e479f91cce8->enter($__internal_4069ad942e7c7e596491acc313d589f5c9de05767d55021574148e479f91cce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1c8514cb31bf9e84ae2a6a778b9a6e150e6b3b8d8499bf57a1cc83aabcb8ef48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8514cb31bf9e84ae2a6a778b9a6e150e6b3b8d8499bf57a1cc83aabcb8ef48->enter($__internal_1c8514cb31bf9e84ae2a6a778b9a6e150e6b3b8d8499bf57a1cc83aabcb8ef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4069ad942e7c7e596491acc313d589f5c9de05767d55021574148e479f91cce8->leave($__internal_4069ad942e7c7e596491acc313d589f5c9de05767d55021574148e479f91cce8_prof);

        
        $__internal_1c8514cb31bf9e84ae2a6a778b9a6e150e6b3b8d8499bf57a1cc83aabcb8ef48->leave($__internal_1c8514cb31bf9e84ae2a6a778b9a6e150e6b3b8d8499bf57a1cc83aabcb8ef48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36fed8f53231f94123f911973e113e711da65e31ade26ced1c785c8a3882f1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fed8f53231f94123f911973e113e711da65e31ade26ced1c785c8a3882f1d5->enter($__internal_36fed8f53231f94123f911973e113e711da65e31ade26ced1c785c8a3882f1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffc1cd102451adf186c84dfecd72fc961b0e538ba146520838b85742668ce525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc1cd102451adf186c84dfecd72fc961b0e538ba146520838b85742668ce525->enter($__internal_ffc1cd102451adf186c84dfecd72fc961b0e538ba146520838b85742668ce525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ffc1cd102451adf186c84dfecd72fc961b0e538ba146520838b85742668ce525->leave($__internal_ffc1cd102451adf186c84dfecd72fc961b0e538ba146520838b85742668ce525_prof);

        
        $__internal_36fed8f53231f94123f911973e113e711da65e31ade26ced1c785c8a3882f1d5->leave($__internal_36fed8f53231f94123f911973e113e711da65e31ade26ced1c785c8a3882f1d5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e985e39a7657b169544a43d7b5799ce2b1eaa09beefd253ae50518f72a36e95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e985e39a7657b169544a43d7b5799ce2b1eaa09beefd253ae50518f72a36e95b->enter($__internal_e985e39a7657b169544a43d7b5799ce2b1eaa09beefd253ae50518f72a36e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd713de76f079e0fac8553fcd317c35af025d105e371346439d8346bd3cf9be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd713de76f079e0fac8553fcd317c35af025d105e371346439d8346bd3cf9be6->enter($__internal_cd713de76f079e0fac8553fcd317c35af025d105e371346439d8346bd3cf9be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cd713de76f079e0fac8553fcd317c35af025d105e371346439d8346bd3cf9be6->leave($__internal_cd713de76f079e0fac8553fcd317c35af025d105e371346439d8346bd3cf9be6_prof);

        
        $__internal_e985e39a7657b169544a43d7b5799ce2b1eaa09beefd253ae50518f72a36e95b->leave($__internal_e985e39a7657b169544a43d7b5799ce2b1eaa09beefd253ae50518f72a36e95b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ad662f6ace5b8981b23f35ea454a6de6e87bc82e22ea6dad3e552c7328256c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad662f6ace5b8981b23f35ea454a6de6e87bc82e22ea6dad3e552c7328256c7->enter($__internal_1ad662f6ace5b8981b23f35ea454a6de6e87bc82e22ea6dad3e552c7328256c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45f0a47da40cbd3fc4465c4fca66d047b5e23dcecb0c461e8275eedea1febfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f0a47da40cbd3fc4465c4fca66d047b5e23dcecb0c461e8275eedea1febfef->enter($__internal_45f0a47da40cbd3fc4465c4fca66d047b5e23dcecb0c461e8275eedea1febfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_45f0a47da40cbd3fc4465c4fca66d047b5e23dcecb0c461e8275eedea1febfef->leave($__internal_45f0a47da40cbd3fc4465c4fca66d047b5e23dcecb0c461e8275eedea1febfef_prof);

        
        $__internal_1ad662f6ace5b8981b23f35ea454a6de6e87bc82e22ea6dad3e552c7328256c7->leave($__internal_1ad662f6ace5b8981b23f35ea454a6de6e87bc82e22ea6dad3e552c7328256c7_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

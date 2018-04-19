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
        $__internal_64f49b90e4b360854311f96d9f0e16571bf90309b201ac7246ce7c1ee95a289a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f49b90e4b360854311f96d9f0e16571bf90309b201ac7246ce7c1ee95a289a->enter($__internal_64f49b90e4b360854311f96d9f0e16571bf90309b201ac7246ce7c1ee95a289a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c7bcb34da64b59f29d063904ba7495b786ae2d125a786ae1e5bab227658816b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bcb34da64b59f29d063904ba7495b786ae2d125a786ae1e5bab227658816b8->enter($__internal_c7bcb34da64b59f29d063904ba7495b786ae2d125a786ae1e5bab227658816b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f49b90e4b360854311f96d9f0e16571bf90309b201ac7246ce7c1ee95a289a->leave($__internal_64f49b90e4b360854311f96d9f0e16571bf90309b201ac7246ce7c1ee95a289a_prof);

        
        $__internal_c7bcb34da64b59f29d063904ba7495b786ae2d125a786ae1e5bab227658816b8->leave($__internal_c7bcb34da64b59f29d063904ba7495b786ae2d125a786ae1e5bab227658816b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d514ffa6e565da59b251d0eddb2efdd152a7b356792ab9b2e682e0bf85f58378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d514ffa6e565da59b251d0eddb2efdd152a7b356792ab9b2e682e0bf85f58378->enter($__internal_d514ffa6e565da59b251d0eddb2efdd152a7b356792ab9b2e682e0bf85f58378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f67e2f7c16ba0297e7b441cd449df84b29f6a2d68c7c46d992745e3f8d36039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f67e2f7c16ba0297e7b441cd449df84b29f6a2d68c7c46d992745e3f8d36039->enter($__internal_4f67e2f7c16ba0297e7b441cd449df84b29f6a2d68c7c46d992745e3f8d36039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4f67e2f7c16ba0297e7b441cd449df84b29f6a2d68c7c46d992745e3f8d36039->leave($__internal_4f67e2f7c16ba0297e7b441cd449df84b29f6a2d68c7c46d992745e3f8d36039_prof);

        
        $__internal_d514ffa6e565da59b251d0eddb2efdd152a7b356792ab9b2e682e0bf85f58378->leave($__internal_d514ffa6e565da59b251d0eddb2efdd152a7b356792ab9b2e682e0bf85f58378_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e21e81e673af355d6b3497a8c1aa2fc877d1984f3a6d65a9a0fc5c26349d581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e21e81e673af355d6b3497a8c1aa2fc877d1984f3a6d65a9a0fc5c26349d581->enter($__internal_7e21e81e673af355d6b3497a8c1aa2fc877d1984f3a6d65a9a0fc5c26349d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cadecf13e111d4b4e6b5a61c95f08f1c2b55f3f0c5b96783e66d0754c80e7c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadecf13e111d4b4e6b5a61c95f08f1c2b55f3f0c5b96783e66d0754c80e7c18->enter($__internal_cadecf13e111d4b4e6b5a61c95f08f1c2b55f3f0c5b96783e66d0754c80e7c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cadecf13e111d4b4e6b5a61c95f08f1c2b55f3f0c5b96783e66d0754c80e7c18->leave($__internal_cadecf13e111d4b4e6b5a61c95f08f1c2b55f3f0c5b96783e66d0754c80e7c18_prof);

        
        $__internal_7e21e81e673af355d6b3497a8c1aa2fc877d1984f3a6d65a9a0fc5c26349d581->leave($__internal_7e21e81e673af355d6b3497a8c1aa2fc877d1984f3a6d65a9a0fc5c26349d581_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f899c246040fe8b4115bedfeb82458ab147a3aceaced980b64ddddebb398e64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f899c246040fe8b4115bedfeb82458ab147a3aceaced980b64ddddebb398e64c->enter($__internal_f899c246040fe8b4115bedfeb82458ab147a3aceaced980b64ddddebb398e64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_21e5d479825744b30374468eec918705cd392ac56aa3486aa95e329610642420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e5d479825744b30374468eec918705cd392ac56aa3486aa95e329610642420->enter($__internal_21e5d479825744b30374468eec918705cd392ac56aa3486aa95e329610642420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_21e5d479825744b30374468eec918705cd392ac56aa3486aa95e329610642420->leave($__internal_21e5d479825744b30374468eec918705cd392ac56aa3486aa95e329610642420_prof);

        
        $__internal_f899c246040fe8b4115bedfeb82458ab147a3aceaced980b64ddddebb398e64c->leave($__internal_f899c246040fe8b4115bedfeb82458ab147a3aceaced980b64ddddebb398e64c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

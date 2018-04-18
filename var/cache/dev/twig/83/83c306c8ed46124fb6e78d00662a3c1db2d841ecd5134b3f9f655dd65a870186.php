<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b1ff39184af6ef745af85ab848efdb8428a0063d154fa4f53ec210df6aed4f78 extends Twig_Template
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
        $__internal_afa45bf8649470bdc20a0aaa037fdfe8f3bd79c5514468f29daa3d3451bc2b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa45bf8649470bdc20a0aaa037fdfe8f3bd79c5514468f29daa3d3451bc2b9b->enter($__internal_afa45bf8649470bdc20a0aaa037fdfe8f3bd79c5514468f29daa3d3451bc2b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b838625004cf7e2d1d1ac2812dfd616cb9f11d39e088497e35d804e20479a7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b838625004cf7e2d1d1ac2812dfd616cb9f11d39e088497e35d804e20479a7fa->enter($__internal_b838625004cf7e2d1d1ac2812dfd616cb9f11d39e088497e35d804e20479a7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa45bf8649470bdc20a0aaa037fdfe8f3bd79c5514468f29daa3d3451bc2b9b->leave($__internal_afa45bf8649470bdc20a0aaa037fdfe8f3bd79c5514468f29daa3d3451bc2b9b_prof);

        
        $__internal_b838625004cf7e2d1d1ac2812dfd616cb9f11d39e088497e35d804e20479a7fa->leave($__internal_b838625004cf7e2d1d1ac2812dfd616cb9f11d39e088497e35d804e20479a7fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4422f75ecd895b8e265fa253f1d11918f006c1af1856451b6d18c45aeb3250ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4422f75ecd895b8e265fa253f1d11918f006c1af1856451b6d18c45aeb3250ac->enter($__internal_4422f75ecd895b8e265fa253f1d11918f006c1af1856451b6d18c45aeb3250ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3fec2043d253ba4ec378701871447a23e108ce209c843ab626af0459b5893614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fec2043d253ba4ec378701871447a23e108ce209c843ab626af0459b5893614->enter($__internal_3fec2043d253ba4ec378701871447a23e108ce209c843ab626af0459b5893614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3fec2043d253ba4ec378701871447a23e108ce209c843ab626af0459b5893614->leave($__internal_3fec2043d253ba4ec378701871447a23e108ce209c843ab626af0459b5893614_prof);

        
        $__internal_4422f75ecd895b8e265fa253f1d11918f006c1af1856451b6d18c45aeb3250ac->leave($__internal_4422f75ecd895b8e265fa253f1d11918f006c1af1856451b6d18c45aeb3250ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22d05bf0ceac6b0fbb351d4a102d20fccc2069d03c2685a5a58df72fa2029ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d05bf0ceac6b0fbb351d4a102d20fccc2069d03c2685a5a58df72fa2029ad4->enter($__internal_22d05bf0ceac6b0fbb351d4a102d20fccc2069d03c2685a5a58df72fa2029ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0ce87380d81b6810e6dbe4b69bf2a8456f09fc576e0c956a9e41b33e15e2e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ce87380d81b6810e6dbe4b69bf2a8456f09fc576e0c956a9e41b33e15e2e5b->enter($__internal_f0ce87380d81b6810e6dbe4b69bf2a8456f09fc576e0c956a9e41b33e15e2e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f0ce87380d81b6810e6dbe4b69bf2a8456f09fc576e0c956a9e41b33e15e2e5b->leave($__internal_f0ce87380d81b6810e6dbe4b69bf2a8456f09fc576e0c956a9e41b33e15e2e5b_prof);

        
        $__internal_22d05bf0ceac6b0fbb351d4a102d20fccc2069d03c2685a5a58df72fa2029ad4->leave($__internal_22d05bf0ceac6b0fbb351d4a102d20fccc2069d03c2685a5a58df72fa2029ad4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddcfa718ab366a313d2859173780cf268d918d572b044c30bd78e819c5db06c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddcfa718ab366a313d2859173780cf268d918d572b044c30bd78e819c5db06c9->enter($__internal_ddcfa718ab366a313d2859173780cf268d918d572b044c30bd78e819c5db06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf8a606db99da30bcd6a08e5dca798e2644ce2fd1ac10341ac26bc17fc71c23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8a606db99da30bcd6a08e5dca798e2644ce2fd1ac10341ac26bc17fc71c23d->enter($__internal_cf8a606db99da30bcd6a08e5dca798e2644ce2fd1ac10341ac26bc17fc71c23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cf8a606db99da30bcd6a08e5dca798e2644ce2fd1ac10341ac26bc17fc71c23d->leave($__internal_cf8a606db99da30bcd6a08e5dca798e2644ce2fd1ac10341ac26bc17fc71c23d_prof);

        
        $__internal_ddcfa718ab366a313d2859173780cf268d918d572b044c30bd78e819c5db06c9->leave($__internal_ddcfa718ab366a313d2859173780cf268d918d572b044c30bd78e819c5db06c9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

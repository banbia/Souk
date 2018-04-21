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
        $__internal_5e23cfdbf8ad871663fe1c33b87fba70f7d4a3cc3173a33209d565b7d6967843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e23cfdbf8ad871663fe1c33b87fba70f7d4a3cc3173a33209d565b7d6967843->enter($__internal_5e23cfdbf8ad871663fe1c33b87fba70f7d4a3cc3173a33209d565b7d6967843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_954c7048434b53e9ccd26154c499aa3fccb422caf794aeb74d21621ba32d01ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954c7048434b53e9ccd26154c499aa3fccb422caf794aeb74d21621ba32d01ab->enter($__internal_954c7048434b53e9ccd26154c499aa3fccb422caf794aeb74d21621ba32d01ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e23cfdbf8ad871663fe1c33b87fba70f7d4a3cc3173a33209d565b7d6967843->leave($__internal_5e23cfdbf8ad871663fe1c33b87fba70f7d4a3cc3173a33209d565b7d6967843_prof);

        
        $__internal_954c7048434b53e9ccd26154c499aa3fccb422caf794aeb74d21621ba32d01ab->leave($__internal_954c7048434b53e9ccd26154c499aa3fccb422caf794aeb74d21621ba32d01ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_213f73ebd03b544b1e512e7d378ec40ba1b444f8f4b055bd711ceb88f39602d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213f73ebd03b544b1e512e7d378ec40ba1b444f8f4b055bd711ceb88f39602d4->enter($__internal_213f73ebd03b544b1e512e7d378ec40ba1b444f8f4b055bd711ceb88f39602d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1409f28a756b483695e486f755751274e876b27d4d9892b2ed1ff634df7653c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1409f28a756b483695e486f755751274e876b27d4d9892b2ed1ff634df7653c->enter($__internal_f1409f28a756b483695e486f755751274e876b27d4d9892b2ed1ff634df7653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f1409f28a756b483695e486f755751274e876b27d4d9892b2ed1ff634df7653c->leave($__internal_f1409f28a756b483695e486f755751274e876b27d4d9892b2ed1ff634df7653c_prof);

        
        $__internal_213f73ebd03b544b1e512e7d378ec40ba1b444f8f4b055bd711ceb88f39602d4->leave($__internal_213f73ebd03b544b1e512e7d378ec40ba1b444f8f4b055bd711ceb88f39602d4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9536dba22d74bed28ae82dbd35f9cdec97b4472fb6897db51ce263dc0dfb4a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9536dba22d74bed28ae82dbd35f9cdec97b4472fb6897db51ce263dc0dfb4a93->enter($__internal_9536dba22d74bed28ae82dbd35f9cdec97b4472fb6897db51ce263dc0dfb4a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c561045c428bb3bf1b73875d4ebc7f8b1f2a4c2cc64153a97d4616a57e757ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c561045c428bb3bf1b73875d4ebc7f8b1f2a4c2cc64153a97d4616a57e757ad0->enter($__internal_c561045c428bb3bf1b73875d4ebc7f8b1f2a4c2cc64153a97d4616a57e757ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c561045c428bb3bf1b73875d4ebc7f8b1f2a4c2cc64153a97d4616a57e757ad0->leave($__internal_c561045c428bb3bf1b73875d4ebc7f8b1f2a4c2cc64153a97d4616a57e757ad0_prof);

        
        $__internal_9536dba22d74bed28ae82dbd35f9cdec97b4472fb6897db51ce263dc0dfb4a93->leave($__internal_9536dba22d74bed28ae82dbd35f9cdec97b4472fb6897db51ce263dc0dfb4a93_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f6456f3dc280b6c9288a66a3da105486d88de78f20f9f259cdf35ac7f7cd92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6456f3dc280b6c9288a66a3da105486d88de78f20f9f259cdf35ac7f7cd92e->enter($__internal_2f6456f3dc280b6c9288a66a3da105486d88de78f20f9f259cdf35ac7f7cd92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_078e5dd89d800d75b457b458881694a2c0d9797bbed2bb0e3685030073e107f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078e5dd89d800d75b457b458881694a2c0d9797bbed2bb0e3685030073e107f9->enter($__internal_078e5dd89d800d75b457b458881694a2c0d9797bbed2bb0e3685030073e107f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_078e5dd89d800d75b457b458881694a2c0d9797bbed2bb0e3685030073e107f9->leave($__internal_078e5dd89d800d75b457b458881694a2c0d9797bbed2bb0e3685030073e107f9_prof);

        
        $__internal_2f6456f3dc280b6c9288a66a3da105486d88de78f20f9f259cdf35ac7f7cd92e->leave($__internal_2f6456f3dc280b6c9288a66a3da105486d88de78f20f9f259cdf35ac7f7cd92e_prof);

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

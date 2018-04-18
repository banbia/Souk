<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d2c50b3b356853961eeb2ed1fe11fcd22b005fc87d5d26f08284bc146213d8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_330f5391fead443ff0b93868baf5323e322b210a28916ef635969acb412116f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330f5391fead443ff0b93868baf5323e322b210a28916ef635969acb412116f8->enter($__internal_330f5391fead443ff0b93868baf5323e322b210a28916ef635969acb412116f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_558c465672e52e630b6cdd43303ac2f50a28d18c0bca57d20d64446c250fa82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558c465672e52e630b6cdd43303ac2f50a28d18c0bca57d20d64446c250fa82c->enter($__internal_558c465672e52e630b6cdd43303ac2f50a28d18c0bca57d20d64446c250fa82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330f5391fead443ff0b93868baf5323e322b210a28916ef635969acb412116f8->leave($__internal_330f5391fead443ff0b93868baf5323e322b210a28916ef635969acb412116f8_prof);

        
        $__internal_558c465672e52e630b6cdd43303ac2f50a28d18c0bca57d20d64446c250fa82c->leave($__internal_558c465672e52e630b6cdd43303ac2f50a28d18c0bca57d20d64446c250fa82c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88b410d112fd58aeda9edeb0e9a1abebbcffd221b2449076aff2e10daaa636ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b410d112fd58aeda9edeb0e9a1abebbcffd221b2449076aff2e10daaa636ce->enter($__internal_88b410d112fd58aeda9edeb0e9a1abebbcffd221b2449076aff2e10daaa636ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_39383c0811c59c549830a7e087982cf455e256fec24323796c01c5146659cdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39383c0811c59c549830a7e087982cf455e256fec24323796c01c5146659cdaf->enter($__internal_39383c0811c59c549830a7e087982cf455e256fec24323796c01c5146659cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_39383c0811c59c549830a7e087982cf455e256fec24323796c01c5146659cdaf->leave($__internal_39383c0811c59c549830a7e087982cf455e256fec24323796c01c5146659cdaf_prof);

        
        $__internal_88b410d112fd58aeda9edeb0e9a1abebbcffd221b2449076aff2e10daaa636ce->leave($__internal_88b410d112fd58aeda9edeb0e9a1abebbcffd221b2449076aff2e10daaa636ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c86eab810a196fad124c3515ee85988e53b779470f715c8852a647a49c885a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86eab810a196fad124c3515ee85988e53b779470f715c8852a647a49c885a40->enter($__internal_c86eab810a196fad124c3515ee85988e53b779470f715c8852a647a49c885a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_edd3d9b736c1938e9869ec8ee5a7df7c4094122d060841f1a7fb79faf08dd124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd3d9b736c1938e9869ec8ee5a7df7c4094122d060841f1a7fb79faf08dd124->enter($__internal_edd3d9b736c1938e9869ec8ee5a7df7c4094122d060841f1a7fb79faf08dd124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_edd3d9b736c1938e9869ec8ee5a7df7c4094122d060841f1a7fb79faf08dd124->leave($__internal_edd3d9b736c1938e9869ec8ee5a7df7c4094122d060841f1a7fb79faf08dd124_prof);

        
        $__internal_c86eab810a196fad124c3515ee85988e53b779470f715c8852a647a49c885a40->leave($__internal_c86eab810a196fad124c3515ee85988e53b779470f715c8852a647a49c885a40_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8f923c594d9b3b82623f1e161f374dc385bdb63abd75fd7d64b8779c6c6490a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f923c594d9b3b82623f1e161f374dc385bdb63abd75fd7d64b8779c6c6490a->enter($__internal_d8f923c594d9b3b82623f1e161f374dc385bdb63abd75fd7d64b8779c6c6490a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0f46793a506d0ef3105850fe7df31af3248154892b2d09b4e0eb0d35b35edc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f46793a506d0ef3105850fe7df31af3248154892b2d09b4e0eb0d35b35edc0->enter($__internal_d0f46793a506d0ef3105850fe7df31af3248154892b2d09b4e0eb0d35b35edc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d0f46793a506d0ef3105850fe7df31af3248154892b2d09b4e0eb0d35b35edc0->leave($__internal_d0f46793a506d0ef3105850fe7df31af3248154892b2d09b4e0eb0d35b35edc0_prof);

        
        $__internal_d8f923c594d9b3b82623f1e161f374dc385bdb63abd75fd7d64b8779c6c6490a->leave($__internal_d8f923c594d9b3b82623f1e161f374dc385bdb63abd75fd7d64b8779c6c6490a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

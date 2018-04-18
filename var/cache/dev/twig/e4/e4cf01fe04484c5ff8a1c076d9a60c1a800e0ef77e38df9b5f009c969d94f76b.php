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
        $__internal_a3c61c58d9070f350a905c9f4b70ac20d80d4775b6e130566339d3023125d048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c61c58d9070f350a905c9f4b70ac20d80d4775b6e130566339d3023125d048->enter($__internal_a3c61c58d9070f350a905c9f4b70ac20d80d4775b6e130566339d3023125d048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_139f22fa783dadb59c098d05ffc14098260cc4f092b9e463f6ae0f3d7e800e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139f22fa783dadb59c098d05ffc14098260cc4f092b9e463f6ae0f3d7e800e71->enter($__internal_139f22fa783dadb59c098d05ffc14098260cc4f092b9e463f6ae0f3d7e800e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c61c58d9070f350a905c9f4b70ac20d80d4775b6e130566339d3023125d048->leave($__internal_a3c61c58d9070f350a905c9f4b70ac20d80d4775b6e130566339d3023125d048_prof);

        
        $__internal_139f22fa783dadb59c098d05ffc14098260cc4f092b9e463f6ae0f3d7e800e71->leave($__internal_139f22fa783dadb59c098d05ffc14098260cc4f092b9e463f6ae0f3d7e800e71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a7838d2940fcd3e5a035707c4760a62ef737f3aa1dd3a98e5c5ea881178b972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7838d2940fcd3e5a035707c4760a62ef737f3aa1dd3a98e5c5ea881178b972->enter($__internal_1a7838d2940fcd3e5a035707c4760a62ef737f3aa1dd3a98e5c5ea881178b972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bbf2d2d1b4e1551dac35ca0d923bf5d6ff5a5de109157739415c28f9698f3e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf2d2d1b4e1551dac35ca0d923bf5d6ff5a5de109157739415c28f9698f3e1d->enter($__internal_bbf2d2d1b4e1551dac35ca0d923bf5d6ff5a5de109157739415c28f9698f3e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bbf2d2d1b4e1551dac35ca0d923bf5d6ff5a5de109157739415c28f9698f3e1d->leave($__internal_bbf2d2d1b4e1551dac35ca0d923bf5d6ff5a5de109157739415c28f9698f3e1d_prof);

        
        $__internal_1a7838d2940fcd3e5a035707c4760a62ef737f3aa1dd3a98e5c5ea881178b972->leave($__internal_1a7838d2940fcd3e5a035707c4760a62ef737f3aa1dd3a98e5c5ea881178b972_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac84b9a8f28c6dbf73c01c8709fcc6e6d47336f50b32e543cece67c1a510a847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac84b9a8f28c6dbf73c01c8709fcc6e6d47336f50b32e543cece67c1a510a847->enter($__internal_ac84b9a8f28c6dbf73c01c8709fcc6e6d47336f50b32e543cece67c1a510a847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24a76b1457c2c13e0731a2748787513509cf827ef184175ec4d4c1d221e60d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a76b1457c2c13e0731a2748787513509cf827ef184175ec4d4c1d221e60d30->enter($__internal_24a76b1457c2c13e0731a2748787513509cf827ef184175ec4d4c1d221e60d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24a76b1457c2c13e0731a2748787513509cf827ef184175ec4d4c1d221e60d30->leave($__internal_24a76b1457c2c13e0731a2748787513509cf827ef184175ec4d4c1d221e60d30_prof);

        
        $__internal_ac84b9a8f28c6dbf73c01c8709fcc6e6d47336f50b32e543cece67c1a510a847->leave($__internal_ac84b9a8f28c6dbf73c01c8709fcc6e6d47336f50b32e543cece67c1a510a847_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00074dca2621d0e8499390f677c48dba102d44fea88777532ad4db61b0b124d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00074dca2621d0e8499390f677c48dba102d44fea88777532ad4db61b0b124d2->enter($__internal_00074dca2621d0e8499390f677c48dba102d44fea88777532ad4db61b0b124d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e1507cd7db97090f08740cb6e6231d171d2d10e5a1d3907cc63d13fe9c62066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1507cd7db97090f08740cb6e6231d171d2d10e5a1d3907cc63d13fe9c62066->enter($__internal_4e1507cd7db97090f08740cb6e6231d171d2d10e5a1d3907cc63d13fe9c62066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4e1507cd7db97090f08740cb6e6231d171d2d10e5a1d3907cc63d13fe9c62066->leave($__internal_4e1507cd7db97090f08740cb6e6231d171d2d10e5a1d3907cc63d13fe9c62066_prof);

        
        $__internal_00074dca2621d0e8499390f677c48dba102d44fea88777532ad4db61b0b124d2->leave($__internal_00074dca2621d0e8499390f677c48dba102d44fea88777532ad4db61b0b124d2_prof);

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

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
        $__internal_9ec57905ccc33547c2fed07fa557a2ee35a7f7f669040c3398445662ebf7f81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec57905ccc33547c2fed07fa557a2ee35a7f7f669040c3398445662ebf7f81f->enter($__internal_9ec57905ccc33547c2fed07fa557a2ee35a7f7f669040c3398445662ebf7f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_85109e07d8c6d520d949ecf6be2bd19c1cd985cf5be79618f6c7c67b15e40ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85109e07d8c6d520d949ecf6be2bd19c1cd985cf5be79618f6c7c67b15e40ff1->enter($__internal_85109e07d8c6d520d949ecf6be2bd19c1cd985cf5be79618f6c7c67b15e40ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ec57905ccc33547c2fed07fa557a2ee35a7f7f669040c3398445662ebf7f81f->leave($__internal_9ec57905ccc33547c2fed07fa557a2ee35a7f7f669040c3398445662ebf7f81f_prof);

        
        $__internal_85109e07d8c6d520d949ecf6be2bd19c1cd985cf5be79618f6c7c67b15e40ff1->leave($__internal_85109e07d8c6d520d949ecf6be2bd19c1cd985cf5be79618f6c7c67b15e40ff1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b2fca9e6c0d565527206adf1c7bbe4254bf0c6c6633602eb55066b64489c6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2fca9e6c0d565527206adf1c7bbe4254bf0c6c6633602eb55066b64489c6ca->enter($__internal_7b2fca9e6c0d565527206adf1c7bbe4254bf0c6c6633602eb55066b64489c6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7fff293ada3c84016680f2338272bc2c25ca1cbe694f9fe2b51362df4041f2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fff293ada3c84016680f2338272bc2c25ca1cbe694f9fe2b51362df4041f2b3->enter($__internal_7fff293ada3c84016680f2338272bc2c25ca1cbe694f9fe2b51362df4041f2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7fff293ada3c84016680f2338272bc2c25ca1cbe694f9fe2b51362df4041f2b3->leave($__internal_7fff293ada3c84016680f2338272bc2c25ca1cbe694f9fe2b51362df4041f2b3_prof);

        
        $__internal_7b2fca9e6c0d565527206adf1c7bbe4254bf0c6c6633602eb55066b64489c6ca->leave($__internal_7b2fca9e6c0d565527206adf1c7bbe4254bf0c6c6633602eb55066b64489c6ca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbf99f3063f6812f28d79f0fb478d4725ba5b5f9bdf044fd5340e4a47c194847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf99f3063f6812f28d79f0fb478d4725ba5b5f9bdf044fd5340e4a47c194847->enter($__internal_dbf99f3063f6812f28d79f0fb478d4725ba5b5f9bdf044fd5340e4a47c194847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e2d64b861683bfef630459b863613f98c020739fff28dd1b6bc31a72dc418c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d64b861683bfef630459b863613f98c020739fff28dd1b6bc31a72dc418c95->enter($__internal_e2d64b861683bfef630459b863613f98c020739fff28dd1b6bc31a72dc418c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e2d64b861683bfef630459b863613f98c020739fff28dd1b6bc31a72dc418c95->leave($__internal_e2d64b861683bfef630459b863613f98c020739fff28dd1b6bc31a72dc418c95_prof);

        
        $__internal_dbf99f3063f6812f28d79f0fb478d4725ba5b5f9bdf044fd5340e4a47c194847->leave($__internal_dbf99f3063f6812f28d79f0fb478d4725ba5b5f9bdf044fd5340e4a47c194847_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_428e88b5ea2820c50fe013313fe07e20442b9df7b46d4364ffeb6e933eb21511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428e88b5ea2820c50fe013313fe07e20442b9df7b46d4364ffeb6e933eb21511->enter($__internal_428e88b5ea2820c50fe013313fe07e20442b9df7b46d4364ffeb6e933eb21511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07b2c71cf17c62cb8866d4b31f9ee8b88b5d7d0454fca791e9cca4b665934280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b2c71cf17c62cb8866d4b31f9ee8b88b5d7d0454fca791e9cca4b665934280->enter($__internal_07b2c71cf17c62cb8866d4b31f9ee8b88b5d7d0454fca791e9cca4b665934280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_07b2c71cf17c62cb8866d4b31f9ee8b88b5d7d0454fca791e9cca4b665934280->leave($__internal_07b2c71cf17c62cb8866d4b31f9ee8b88b5d7d0454fca791e9cca4b665934280_prof);

        
        $__internal_428e88b5ea2820c50fe013313fe07e20442b9df7b46d4364ffeb6e933eb21511->leave($__internal_428e88b5ea2820c50fe013313fe07e20442b9df7b46d4364ffeb6e933eb21511_prof);

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

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
        $__internal_4d59d6cfbe531f5322d5a9456fa46485220ad16559b297ea479c3608d017b87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d59d6cfbe531f5322d5a9456fa46485220ad16559b297ea479c3608d017b87d->enter($__internal_4d59d6cfbe531f5322d5a9456fa46485220ad16559b297ea479c3608d017b87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6f92eae1cfcceb9e2530d075f130222efb98fa23bd8b489dd300d1b5f5c32d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f92eae1cfcceb9e2530d075f130222efb98fa23bd8b489dd300d1b5f5c32d7b->enter($__internal_6f92eae1cfcceb9e2530d075f130222efb98fa23bd8b489dd300d1b5f5c32d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d59d6cfbe531f5322d5a9456fa46485220ad16559b297ea479c3608d017b87d->leave($__internal_4d59d6cfbe531f5322d5a9456fa46485220ad16559b297ea479c3608d017b87d_prof);

        
        $__internal_6f92eae1cfcceb9e2530d075f130222efb98fa23bd8b489dd300d1b5f5c32d7b->leave($__internal_6f92eae1cfcceb9e2530d075f130222efb98fa23bd8b489dd300d1b5f5c32d7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0c1a221754509931b2646e97645f591c8d8214769665fd934f3bbdd880c1c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c1a221754509931b2646e97645f591c8d8214769665fd934f3bbdd880c1c41->enter($__internal_a0c1a221754509931b2646e97645f591c8d8214769665fd934f3bbdd880c1c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b237787c7752915f891f4a28ef40ff2a62f5dd167356834061ac5a37fe057d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b237787c7752915f891f4a28ef40ff2a62f5dd167356834061ac5a37fe057d71->enter($__internal_b237787c7752915f891f4a28ef40ff2a62f5dd167356834061ac5a37fe057d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b237787c7752915f891f4a28ef40ff2a62f5dd167356834061ac5a37fe057d71->leave($__internal_b237787c7752915f891f4a28ef40ff2a62f5dd167356834061ac5a37fe057d71_prof);

        
        $__internal_a0c1a221754509931b2646e97645f591c8d8214769665fd934f3bbdd880c1c41->leave($__internal_a0c1a221754509931b2646e97645f591c8d8214769665fd934f3bbdd880c1c41_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be0945325d89b269d6c3df600b15da515a0dba106f15ed8d7a45ed324c230454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0945325d89b269d6c3df600b15da515a0dba106f15ed8d7a45ed324c230454->enter($__internal_be0945325d89b269d6c3df600b15da515a0dba106f15ed8d7a45ed324c230454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03ac3a0db00a23991f921bdf144f6429b4deb56f6d840d5963cba053967e9b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ac3a0db00a23991f921bdf144f6429b4deb56f6d840d5963cba053967e9b5d->enter($__internal_03ac3a0db00a23991f921bdf144f6429b4deb56f6d840d5963cba053967e9b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_03ac3a0db00a23991f921bdf144f6429b4deb56f6d840d5963cba053967e9b5d->leave($__internal_03ac3a0db00a23991f921bdf144f6429b4deb56f6d840d5963cba053967e9b5d_prof);

        
        $__internal_be0945325d89b269d6c3df600b15da515a0dba106f15ed8d7a45ed324c230454->leave($__internal_be0945325d89b269d6c3df600b15da515a0dba106f15ed8d7a45ed324c230454_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63fb2da3fd511a0f00e7510599d6aa4cda84bdaae4902ab9fdb159d220e3646d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fb2da3fd511a0f00e7510599d6aa4cda84bdaae4902ab9fdb159d220e3646d->enter($__internal_63fb2da3fd511a0f00e7510599d6aa4cda84bdaae4902ab9fdb159d220e3646d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d61da40db8b876c1c00bc827706ae55de46e4ad9d8582e0891fdbb1815b4bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d61da40db8b876c1c00bc827706ae55de46e4ad9d8582e0891fdbb1815b4bfe->enter($__internal_1d61da40db8b876c1c00bc827706ae55de46e4ad9d8582e0891fdbb1815b4bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1d61da40db8b876c1c00bc827706ae55de46e4ad9d8582e0891fdbb1815b4bfe->leave($__internal_1d61da40db8b876c1c00bc827706ae55de46e4ad9d8582e0891fdbb1815b4bfe_prof);

        
        $__internal_63fb2da3fd511a0f00e7510599d6aa4cda84bdaae4902ab9fdb159d220e3646d->leave($__internal_63fb2da3fd511a0f00e7510599d6aa4cda84bdaae4902ab9fdb159d220e3646d_prof);

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

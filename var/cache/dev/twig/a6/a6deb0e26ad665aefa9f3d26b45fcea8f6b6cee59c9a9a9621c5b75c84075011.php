<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ecdbac7d977bcaad8b01522eee9fd018caec35d5947c244bf801802f4c7f1934 extends Twig_Template
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
        $__internal_7f14949c49a5d2626822758d79e31937bf3ede14b5ab8cf0f9c3a4faafbd9d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f14949c49a5d2626822758d79e31937bf3ede14b5ab8cf0f9c3a4faafbd9d63->enter($__internal_7f14949c49a5d2626822758d79e31937bf3ede14b5ab8cf0f9c3a4faafbd9d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5df2cedab9e70c05afa0978b30755aea7c150cf83c15850a0820e15b721b53a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df2cedab9e70c05afa0978b30755aea7c150cf83c15850a0820e15b721b53a5->enter($__internal_5df2cedab9e70c05afa0978b30755aea7c150cf83c15850a0820e15b721b53a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f14949c49a5d2626822758d79e31937bf3ede14b5ab8cf0f9c3a4faafbd9d63->leave($__internal_7f14949c49a5d2626822758d79e31937bf3ede14b5ab8cf0f9c3a4faafbd9d63_prof);

        
        $__internal_5df2cedab9e70c05afa0978b30755aea7c150cf83c15850a0820e15b721b53a5->leave($__internal_5df2cedab9e70c05afa0978b30755aea7c150cf83c15850a0820e15b721b53a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_283e7d0b087deee8928bdf70724cfda1050e5451e826de3de203d174d5301121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283e7d0b087deee8928bdf70724cfda1050e5451e826de3de203d174d5301121->enter($__internal_283e7d0b087deee8928bdf70724cfda1050e5451e826de3de203d174d5301121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a616d08002c9f520642c2115ff40567361166126b788b041c3eb56d877866b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a616d08002c9f520642c2115ff40567361166126b788b041c3eb56d877866b93->enter($__internal_a616d08002c9f520642c2115ff40567361166126b788b041c3eb56d877866b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a616d08002c9f520642c2115ff40567361166126b788b041c3eb56d877866b93->leave($__internal_a616d08002c9f520642c2115ff40567361166126b788b041c3eb56d877866b93_prof);

        
        $__internal_283e7d0b087deee8928bdf70724cfda1050e5451e826de3de203d174d5301121->leave($__internal_283e7d0b087deee8928bdf70724cfda1050e5451e826de3de203d174d5301121_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a46ae6baba5ee8b80205d1d1a98db65444e131e3bcdc2afe0e46250ce0b95b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46ae6baba5ee8b80205d1d1a98db65444e131e3bcdc2afe0e46250ce0b95b8f->enter($__internal_a46ae6baba5ee8b80205d1d1a98db65444e131e3bcdc2afe0e46250ce0b95b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ae859d84a8bf99a9a6225ba4c056c15c3f62291a75d70e93903cb70bd5a4dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae859d84a8bf99a9a6225ba4c056c15c3f62291a75d70e93903cb70bd5a4dc4->enter($__internal_0ae859d84a8bf99a9a6225ba4c056c15c3f62291a75d70e93903cb70bd5a4dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0ae859d84a8bf99a9a6225ba4c056c15c3f62291a75d70e93903cb70bd5a4dc4->leave($__internal_0ae859d84a8bf99a9a6225ba4c056c15c3f62291a75d70e93903cb70bd5a4dc4_prof);

        
        $__internal_a46ae6baba5ee8b80205d1d1a98db65444e131e3bcdc2afe0e46250ce0b95b8f->leave($__internal_a46ae6baba5ee8b80205d1d1a98db65444e131e3bcdc2afe0e46250ce0b95b8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3843c3ddbc65e5d30905cab2a55baebddf5fe7547c879ff71c68e526071d9849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3843c3ddbc65e5d30905cab2a55baebddf5fe7547c879ff71c68e526071d9849->enter($__internal_3843c3ddbc65e5d30905cab2a55baebddf5fe7547c879ff71c68e526071d9849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f66db8935b5b15228d9e3b28302beba94cad1d57a98118cb173027dacd33b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f66db8935b5b15228d9e3b28302beba94cad1d57a98118cb173027dacd33b68->enter($__internal_2f66db8935b5b15228d9e3b28302beba94cad1d57a98118cb173027dacd33b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2f66db8935b5b15228d9e3b28302beba94cad1d57a98118cb173027dacd33b68->leave($__internal_2f66db8935b5b15228d9e3b28302beba94cad1d57a98118cb173027dacd33b68_prof);

        
        $__internal_3843c3ddbc65e5d30905cab2a55baebddf5fe7547c879ff71c68e526071d9849->leave($__internal_3843c3ddbc65e5d30905cab2a55baebddf5fe7547c879ff71c68e526071d9849_prof);

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

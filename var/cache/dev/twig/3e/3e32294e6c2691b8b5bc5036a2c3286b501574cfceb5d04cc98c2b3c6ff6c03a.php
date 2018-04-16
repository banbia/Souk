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
        $__internal_42c3f3a8d027d0bb80b19ae203cd58a02bf9055474e96742183a5617abaa5c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c3f3a8d027d0bb80b19ae203cd58a02bf9055474e96742183a5617abaa5c0f->enter($__internal_42c3f3a8d027d0bb80b19ae203cd58a02bf9055474e96742183a5617abaa5c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_907fe889978807ad0b34940aaf9c5c39965067cdfe20f9c9250da57ae0e667d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907fe889978807ad0b34940aaf9c5c39965067cdfe20f9c9250da57ae0e667d6->enter($__internal_907fe889978807ad0b34940aaf9c5c39965067cdfe20f9c9250da57ae0e667d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c3f3a8d027d0bb80b19ae203cd58a02bf9055474e96742183a5617abaa5c0f->leave($__internal_42c3f3a8d027d0bb80b19ae203cd58a02bf9055474e96742183a5617abaa5c0f_prof);

        
        $__internal_907fe889978807ad0b34940aaf9c5c39965067cdfe20f9c9250da57ae0e667d6->leave($__internal_907fe889978807ad0b34940aaf9c5c39965067cdfe20f9c9250da57ae0e667d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d223436e36f57ad7b691226e45bfa63d296554e93be2b6d4015f633b37f9d052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d223436e36f57ad7b691226e45bfa63d296554e93be2b6d4015f633b37f9d052->enter($__internal_d223436e36f57ad7b691226e45bfa63d296554e93be2b6d4015f633b37f9d052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37c3cd2f5b73a09d610c201c029d4be193235fc3de9ba53bbfc5e9f3951814c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c3cd2f5b73a09d610c201c029d4be193235fc3de9ba53bbfc5e9f3951814c5->enter($__internal_37c3cd2f5b73a09d610c201c029d4be193235fc3de9ba53bbfc5e9f3951814c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37c3cd2f5b73a09d610c201c029d4be193235fc3de9ba53bbfc5e9f3951814c5->leave($__internal_37c3cd2f5b73a09d610c201c029d4be193235fc3de9ba53bbfc5e9f3951814c5_prof);

        
        $__internal_d223436e36f57ad7b691226e45bfa63d296554e93be2b6d4015f633b37f9d052->leave($__internal_d223436e36f57ad7b691226e45bfa63d296554e93be2b6d4015f633b37f9d052_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6e4c8e50f15098a62a28f55294e006a2187084da3a77d5668a69f9d1ef3749d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e4c8e50f15098a62a28f55294e006a2187084da3a77d5668a69f9d1ef3749d->enter($__internal_b6e4c8e50f15098a62a28f55294e006a2187084da3a77d5668a69f9d1ef3749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f58abd88f03183792849e53cbe07566d4f7de6f28acc92585430c953af5f91a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58abd88f03183792849e53cbe07566d4f7de6f28acc92585430c953af5f91a3->enter($__internal_f58abd88f03183792849e53cbe07566d4f7de6f28acc92585430c953af5f91a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f58abd88f03183792849e53cbe07566d4f7de6f28acc92585430c953af5f91a3->leave($__internal_f58abd88f03183792849e53cbe07566d4f7de6f28acc92585430c953af5f91a3_prof);

        
        $__internal_b6e4c8e50f15098a62a28f55294e006a2187084da3a77d5668a69f9d1ef3749d->leave($__internal_b6e4c8e50f15098a62a28f55294e006a2187084da3a77d5668a69f9d1ef3749d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f2cb35fe3adb431b5b663ea2d8e2e63bdb4e2030f49bec113af43248431c365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2cb35fe3adb431b5b663ea2d8e2e63bdb4e2030f49bec113af43248431c365->enter($__internal_4f2cb35fe3adb431b5b663ea2d8e2e63bdb4e2030f49bec113af43248431c365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6ab9cfcc9ef1abb575c6576c2d860dc29a3752b4e07470e5cf815eff22e6b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ab9cfcc9ef1abb575c6576c2d860dc29a3752b4e07470e5cf815eff22e6b04->enter($__internal_d6ab9cfcc9ef1abb575c6576c2d860dc29a3752b4e07470e5cf815eff22e6b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d6ab9cfcc9ef1abb575c6576c2d860dc29a3752b4e07470e5cf815eff22e6b04->leave($__internal_d6ab9cfcc9ef1abb575c6576c2d860dc29a3752b4e07470e5cf815eff22e6b04_prof);

        
        $__internal_4f2cb35fe3adb431b5b663ea2d8e2e63bdb4e2030f49bec113af43248431c365->leave($__internal_4f2cb35fe3adb431b5b663ea2d8e2e63bdb4e2030f49bec113af43248431c365_prof);

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

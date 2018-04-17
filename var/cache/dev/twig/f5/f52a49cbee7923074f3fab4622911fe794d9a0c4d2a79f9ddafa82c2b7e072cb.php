<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d2c50b3b356853961eeb2ed1fe11fcd22b005fc87d5d26f08284bc146213d8aa extends Twig_Template
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
        $__internal_46b84c42c0348863e2163f260602ce31efed711083b4dbb2dd7a6021855590af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b84c42c0348863e2163f260602ce31efed711083b4dbb2dd7a6021855590af->enter($__internal_46b84c42c0348863e2163f260602ce31efed711083b4dbb2dd7a6021855590af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a1591d2f5abc5a63f74d66662d62cd8a5436cd9d4778f5942bf2d9314eb0bbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1591d2f5abc5a63f74d66662d62cd8a5436cd9d4778f5942bf2d9314eb0bbaa->enter($__internal_a1591d2f5abc5a63f74d66662d62cd8a5436cd9d4778f5942bf2d9314eb0bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b84c42c0348863e2163f260602ce31efed711083b4dbb2dd7a6021855590af->leave($__internal_46b84c42c0348863e2163f260602ce31efed711083b4dbb2dd7a6021855590af_prof);

        
        $__internal_a1591d2f5abc5a63f74d66662d62cd8a5436cd9d4778f5942bf2d9314eb0bbaa->leave($__internal_a1591d2f5abc5a63f74d66662d62cd8a5436cd9d4778f5942bf2d9314eb0bbaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6088394a23e4d551c180e17734a572b221f9f3d88f27547fb9cc5b92060c9b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6088394a23e4d551c180e17734a572b221f9f3d88f27547fb9cc5b92060c9b86->enter($__internal_6088394a23e4d551c180e17734a572b221f9f3d88f27547fb9cc5b92060c9b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3adbdf1c027d5fe8c5eb219b991c7a0b1d3769bb56f36da3a55f8f34102f6f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adbdf1c027d5fe8c5eb219b991c7a0b1d3769bb56f36da3a55f8f34102f6f32->enter($__internal_3adbdf1c027d5fe8c5eb219b991c7a0b1d3769bb56f36da3a55f8f34102f6f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3adbdf1c027d5fe8c5eb219b991c7a0b1d3769bb56f36da3a55f8f34102f6f32->leave($__internal_3adbdf1c027d5fe8c5eb219b991c7a0b1d3769bb56f36da3a55f8f34102f6f32_prof);

        
        $__internal_6088394a23e4d551c180e17734a572b221f9f3d88f27547fb9cc5b92060c9b86->leave($__internal_6088394a23e4d551c180e17734a572b221f9f3d88f27547fb9cc5b92060c9b86_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd953733ab5a2120a21de133894b70495d710981c50d0f2d3ce6c84a78007be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd953733ab5a2120a21de133894b70495d710981c50d0f2d3ce6c84a78007be7->enter($__internal_fd953733ab5a2120a21de133894b70495d710981c50d0f2d3ce6c84a78007be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4997f3aa70eac9a0998a96f2437eadc23e8a3c5194289ef9eb8296efbadd3434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4997f3aa70eac9a0998a96f2437eadc23e8a3c5194289ef9eb8296efbadd3434->enter($__internal_4997f3aa70eac9a0998a96f2437eadc23e8a3c5194289ef9eb8296efbadd3434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4997f3aa70eac9a0998a96f2437eadc23e8a3c5194289ef9eb8296efbadd3434->leave($__internal_4997f3aa70eac9a0998a96f2437eadc23e8a3c5194289ef9eb8296efbadd3434_prof);

        
        $__internal_fd953733ab5a2120a21de133894b70495d710981c50d0f2d3ce6c84a78007be7->leave($__internal_fd953733ab5a2120a21de133894b70495d710981c50d0f2d3ce6c84a78007be7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_221a27a04cd7dc829513bd3e9971b04bc105f450deb5bff92413ff0dcba7ee9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221a27a04cd7dc829513bd3e9971b04bc105f450deb5bff92413ff0dcba7ee9f->enter($__internal_221a27a04cd7dc829513bd3e9971b04bc105f450deb5bff92413ff0dcba7ee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7642ab7de89db75f85d15877cf7c55758f2c5259f9b3ddb2776e0ceb511d0f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7642ab7de89db75f85d15877cf7c55758f2c5259f9b3ddb2776e0ceb511d0f13->enter($__internal_7642ab7de89db75f85d15877cf7c55758f2c5259f9b3ddb2776e0ceb511d0f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7642ab7de89db75f85d15877cf7c55758f2c5259f9b3ddb2776e0ceb511d0f13->leave($__internal_7642ab7de89db75f85d15877cf7c55758f2c5259f9b3ddb2776e0ceb511d0f13_prof);

        
        $__internal_221a27a04cd7dc829513bd3e9971b04bc105f450deb5bff92413ff0dcba7ee9f->leave($__internal_221a27a04cd7dc829513bd3e9971b04bc105f450deb5bff92413ff0dcba7ee9f_prof);

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

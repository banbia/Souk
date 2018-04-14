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
        $__internal_3bb462165f6dcd41da338d0f27026185f6d0c4df980c1ee0d959c44dabe788b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb462165f6dcd41da338d0f27026185f6d0c4df980c1ee0d959c44dabe788b8->enter($__internal_3bb462165f6dcd41da338d0f27026185f6d0c4df980c1ee0d959c44dabe788b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a5cecbecbf7277792a244e8b670317cbc5cf73b34eae434092bc66d4fc10b964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cecbecbf7277792a244e8b670317cbc5cf73b34eae434092bc66d4fc10b964->enter($__internal_a5cecbecbf7277792a244e8b670317cbc5cf73b34eae434092bc66d4fc10b964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb462165f6dcd41da338d0f27026185f6d0c4df980c1ee0d959c44dabe788b8->leave($__internal_3bb462165f6dcd41da338d0f27026185f6d0c4df980c1ee0d959c44dabe788b8_prof);

        
        $__internal_a5cecbecbf7277792a244e8b670317cbc5cf73b34eae434092bc66d4fc10b964->leave($__internal_a5cecbecbf7277792a244e8b670317cbc5cf73b34eae434092bc66d4fc10b964_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f69f4b54587c8d409f14ea3d78a734aae59a62204b6c2f659c5dba3304fcc633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69f4b54587c8d409f14ea3d78a734aae59a62204b6c2f659c5dba3304fcc633->enter($__internal_f69f4b54587c8d409f14ea3d78a734aae59a62204b6c2f659c5dba3304fcc633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fcae99af675a101867702beec17764cefb744b00a1a24261ee7745566669416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcae99af675a101867702beec17764cefb744b00a1a24261ee7745566669416->enter($__internal_4fcae99af675a101867702beec17764cefb744b00a1a24261ee7745566669416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4fcae99af675a101867702beec17764cefb744b00a1a24261ee7745566669416->leave($__internal_4fcae99af675a101867702beec17764cefb744b00a1a24261ee7745566669416_prof);

        
        $__internal_f69f4b54587c8d409f14ea3d78a734aae59a62204b6c2f659c5dba3304fcc633->leave($__internal_f69f4b54587c8d409f14ea3d78a734aae59a62204b6c2f659c5dba3304fcc633_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8c7fff1c4a1139908b4cfd1e5d25cb93807b3beb3126097ce2835777d604ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c7fff1c4a1139908b4cfd1e5d25cb93807b3beb3126097ce2835777d604ac1->enter($__internal_a8c7fff1c4a1139908b4cfd1e5d25cb93807b3beb3126097ce2835777d604ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eca482c22aaf486863caa10a4d13380ad71d9089a77d9d4e15133028710d830e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca482c22aaf486863caa10a4d13380ad71d9089a77d9d4e15133028710d830e->enter($__internal_eca482c22aaf486863caa10a4d13380ad71d9089a77d9d4e15133028710d830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_eca482c22aaf486863caa10a4d13380ad71d9089a77d9d4e15133028710d830e->leave($__internal_eca482c22aaf486863caa10a4d13380ad71d9089a77d9d4e15133028710d830e_prof);

        
        $__internal_a8c7fff1c4a1139908b4cfd1e5d25cb93807b3beb3126097ce2835777d604ac1->leave($__internal_a8c7fff1c4a1139908b4cfd1e5d25cb93807b3beb3126097ce2835777d604ac1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4956de24e9073b3a40b64ba93116d308345df6cbb5d9b2e593c6c6f3662707e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4956de24e9073b3a40b64ba93116d308345df6cbb5d9b2e593c6c6f3662707e8->enter($__internal_4956de24e9073b3a40b64ba93116d308345df6cbb5d9b2e593c6c6f3662707e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0502db5b15512caa9ce4ba16c72d2464c190d03a298b03c7ed540cbb4a616c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0502db5b15512caa9ce4ba16c72d2464c190d03a298b03c7ed540cbb4a616c1a->enter($__internal_0502db5b15512caa9ce4ba16c72d2464c190d03a298b03c7ed540cbb4a616c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0502db5b15512caa9ce4ba16c72d2464c190d03a298b03c7ed540cbb4a616c1a->leave($__internal_0502db5b15512caa9ce4ba16c72d2464c190d03a298b03c7ed540cbb4a616c1a_prof);

        
        $__internal_4956de24e9073b3a40b64ba93116d308345df6cbb5d9b2e593c6c6f3662707e8->leave($__internal_4956de24e9073b3a40b64ba93116d308345df6cbb5d9b2e593c6c6f3662707e8_prof);

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

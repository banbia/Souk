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
        $__internal_a7c9e9b97e4243e9a342c10d7fc96d88ea9985113fe62ec7d02b25f9affa3ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c9e9b97e4243e9a342c10d7fc96d88ea9985113fe62ec7d02b25f9affa3ca9->enter($__internal_a7c9e9b97e4243e9a342c10d7fc96d88ea9985113fe62ec7d02b25f9affa3ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_825792db49cab02e1a3372408c1e50492b2ad14daec4f88d1d07d89088aa2fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825792db49cab02e1a3372408c1e50492b2ad14daec4f88d1d07d89088aa2fa2->enter($__internal_825792db49cab02e1a3372408c1e50492b2ad14daec4f88d1d07d89088aa2fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c9e9b97e4243e9a342c10d7fc96d88ea9985113fe62ec7d02b25f9affa3ca9->leave($__internal_a7c9e9b97e4243e9a342c10d7fc96d88ea9985113fe62ec7d02b25f9affa3ca9_prof);

        
        $__internal_825792db49cab02e1a3372408c1e50492b2ad14daec4f88d1d07d89088aa2fa2->leave($__internal_825792db49cab02e1a3372408c1e50492b2ad14daec4f88d1d07d89088aa2fa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56cf995d939fd4423191281036daf01d30aa66fb3eae12a0fab0b113274cff5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cf995d939fd4423191281036daf01d30aa66fb3eae12a0fab0b113274cff5e->enter($__internal_56cf995d939fd4423191281036daf01d30aa66fb3eae12a0fab0b113274cff5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56ffb72cc3d6b41966406a3e35ef22dfc4689bd88245fefb77da4f81fda74d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ffb72cc3d6b41966406a3e35ef22dfc4689bd88245fefb77da4f81fda74d93->enter($__internal_56ffb72cc3d6b41966406a3e35ef22dfc4689bd88245fefb77da4f81fda74d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_56ffb72cc3d6b41966406a3e35ef22dfc4689bd88245fefb77da4f81fda74d93->leave($__internal_56ffb72cc3d6b41966406a3e35ef22dfc4689bd88245fefb77da4f81fda74d93_prof);

        
        $__internal_56cf995d939fd4423191281036daf01d30aa66fb3eae12a0fab0b113274cff5e->leave($__internal_56cf995d939fd4423191281036daf01d30aa66fb3eae12a0fab0b113274cff5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a951b1b5536f69ff9bba6dc1eb36fd265cc06f69b0e158d8f1faf99a8cf22a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a951b1b5536f69ff9bba6dc1eb36fd265cc06f69b0e158d8f1faf99a8cf22a17->enter($__internal_a951b1b5536f69ff9bba6dc1eb36fd265cc06f69b0e158d8f1faf99a8cf22a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d83f331f6de0c3ca515d18e9ae88b9ecaeb91f3a2a5708ac7e45b8aac3b6dc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83f331f6de0c3ca515d18e9ae88b9ecaeb91f3a2a5708ac7e45b8aac3b6dc1d->enter($__internal_d83f331f6de0c3ca515d18e9ae88b9ecaeb91f3a2a5708ac7e45b8aac3b6dc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d83f331f6de0c3ca515d18e9ae88b9ecaeb91f3a2a5708ac7e45b8aac3b6dc1d->leave($__internal_d83f331f6de0c3ca515d18e9ae88b9ecaeb91f3a2a5708ac7e45b8aac3b6dc1d_prof);

        
        $__internal_a951b1b5536f69ff9bba6dc1eb36fd265cc06f69b0e158d8f1faf99a8cf22a17->leave($__internal_a951b1b5536f69ff9bba6dc1eb36fd265cc06f69b0e158d8f1faf99a8cf22a17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce71594a2c04f6a41a3958d4bf3560e6836f927885a2ae82140bb2d9767fe1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce71594a2c04f6a41a3958d4bf3560e6836f927885a2ae82140bb2d9767fe1d1->enter($__internal_ce71594a2c04f6a41a3958d4bf3560e6836f927885a2ae82140bb2d9767fe1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8673cb6a1280e03aa076be0626925a27df76e84c618778feebea904ac9614a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8673cb6a1280e03aa076be0626925a27df76e84c618778feebea904ac9614a61->enter($__internal_8673cb6a1280e03aa076be0626925a27df76e84c618778feebea904ac9614a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8673cb6a1280e03aa076be0626925a27df76e84c618778feebea904ac9614a61->leave($__internal_8673cb6a1280e03aa076be0626925a27df76e84c618778feebea904ac9614a61_prof);

        
        $__internal_ce71594a2c04f6a41a3958d4bf3560e6836f927885a2ae82140bb2d9767fe1d1->leave($__internal_ce71594a2c04f6a41a3958d4bf3560e6836f927885a2ae82140bb2d9767fe1d1_prof);

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

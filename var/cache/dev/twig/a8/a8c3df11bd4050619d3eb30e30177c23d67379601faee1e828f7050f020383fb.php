<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_66e362a02951633e100e6010a5d2a47ce037bb4c08b55a530d6f488966c836dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d17b13ccbc07a267d179ca538dde5463540eb6eea6ef327b5f44944b70766b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17b13ccbc07a267d179ca538dde5463540eb6eea6ef327b5f44944b70766b94->enter($__internal_d17b13ccbc07a267d179ca538dde5463540eb6eea6ef327b5f44944b70766b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_59efb5d0a1cc8d64404a59ead8d34276d2dd932d13b2a7d8e41ccd8be05f54a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59efb5d0a1cc8d64404a59ead8d34276d2dd932d13b2a7d8e41ccd8be05f54a6->enter($__internal_59efb5d0a1cc8d64404a59ead8d34276d2dd932d13b2a7d8e41ccd8be05f54a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17b13ccbc07a267d179ca538dde5463540eb6eea6ef327b5f44944b70766b94->leave($__internal_d17b13ccbc07a267d179ca538dde5463540eb6eea6ef327b5f44944b70766b94_prof);

        
        $__internal_59efb5d0a1cc8d64404a59ead8d34276d2dd932d13b2a7d8e41ccd8be05f54a6->leave($__internal_59efb5d0a1cc8d64404a59ead8d34276d2dd932d13b2a7d8e41ccd8be05f54a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de3cdea17b1d7456fef8ac6b35397bdaa4ba53626961cb722918a09deb8df529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3cdea17b1d7456fef8ac6b35397bdaa4ba53626961cb722918a09deb8df529->enter($__internal_de3cdea17b1d7456fef8ac6b35397bdaa4ba53626961cb722918a09deb8df529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1fba9e01ffad381f8b034671df5fea55c4ac1ca8e39f7f7af02378b335a7ac04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fba9e01ffad381f8b034671df5fea55c4ac1ca8e39f7f7af02378b335a7ac04->enter($__internal_1fba9e01ffad381f8b034671df5fea55c4ac1ca8e39f7f7af02378b335a7ac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1fba9e01ffad381f8b034671df5fea55c4ac1ca8e39f7f7af02378b335a7ac04->leave($__internal_1fba9e01ffad381f8b034671df5fea55c4ac1ca8e39f7f7af02378b335a7ac04_prof);

        
        $__internal_de3cdea17b1d7456fef8ac6b35397bdaa4ba53626961cb722918a09deb8df529->leave($__internal_de3cdea17b1d7456fef8ac6b35397bdaa4ba53626961cb722918a09deb8df529_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bb84c95494cc6baef4df910aab56a609fa0b1d5c194e2ad370764dd62106770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb84c95494cc6baef4df910aab56a609fa0b1d5c194e2ad370764dd62106770->enter($__internal_3bb84c95494cc6baef4df910aab56a609fa0b1d5c194e2ad370764dd62106770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae0a57432983b51318ecd1405d4dbf6a5bd3b090313d4c9803aa1d347bdbbfc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0a57432983b51318ecd1405d4dbf6a5bd3b090313d4c9803aa1d347bdbbfc2->enter($__internal_ae0a57432983b51318ecd1405d4dbf6a5bd3b090313d4c9803aa1d347bdbbfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ae0a57432983b51318ecd1405d4dbf6a5bd3b090313d4c9803aa1d347bdbbfc2->leave($__internal_ae0a57432983b51318ecd1405d4dbf6a5bd3b090313d4c9803aa1d347bdbbfc2_prof);

        
        $__internal_3bb84c95494cc6baef4df910aab56a609fa0b1d5c194e2ad370764dd62106770->leave($__internal_3bb84c95494cc6baef4df910aab56a609fa0b1d5c194e2ad370764dd62106770_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d29ff73076ab0b91d23b70870d532eb749c79f5becbcf3472d0b952f2f2bed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d29ff73076ab0b91d23b70870d532eb749c79f5becbcf3472d0b952f2f2bed6->enter($__internal_8d29ff73076ab0b91d23b70870d532eb749c79f5becbcf3472d0b952f2f2bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63e2fb1fb24e8c5913e8dac9102715af1c5e4306b405b00367a9502b22181a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e2fb1fb24e8c5913e8dac9102715af1c5e4306b405b00367a9502b22181a00->enter($__internal_63e2fb1fb24e8c5913e8dac9102715af1c5e4306b405b00367a9502b22181a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63e2fb1fb24e8c5913e8dac9102715af1c5e4306b405b00367a9502b22181a00->leave($__internal_63e2fb1fb24e8c5913e8dac9102715af1c5e4306b405b00367a9502b22181a00_prof);

        
        $__internal_8d29ff73076ab0b91d23b70870d532eb749c79f5becbcf3472d0b952f2f2bed6->leave($__internal_8d29ff73076ab0b91d23b70870d532eb749c79f5becbcf3472d0b952f2f2bed6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_447065f7f07af19f1cee25a0d876976bba6bfb58d9ef0f48503827aa6bea603b extends Twig_Template
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
        $__internal_8df16bff45893e178b3f9212135df38b086a624be395e33be11b1e70f654086e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df16bff45893e178b3f9212135df38b086a624be395e33be11b1e70f654086e->enter($__internal_8df16bff45893e178b3f9212135df38b086a624be395e33be11b1e70f654086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_51266849e37e67954261437b3cb7e32ad710396e73807ce48c903d65bb54d3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51266849e37e67954261437b3cb7e32ad710396e73807ce48c903d65bb54d3f6->enter($__internal_51266849e37e67954261437b3cb7e32ad710396e73807ce48c903d65bb54d3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df16bff45893e178b3f9212135df38b086a624be395e33be11b1e70f654086e->leave($__internal_8df16bff45893e178b3f9212135df38b086a624be395e33be11b1e70f654086e_prof);

        
        $__internal_51266849e37e67954261437b3cb7e32ad710396e73807ce48c903d65bb54d3f6->leave($__internal_51266849e37e67954261437b3cb7e32ad710396e73807ce48c903d65bb54d3f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb6656de2a9158eda3867d8a7a80a37276cffa368f6bde743d4b041ec03b14ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6656de2a9158eda3867d8a7a80a37276cffa368f6bde743d4b041ec03b14ad->enter($__internal_bb6656de2a9158eda3867d8a7a80a37276cffa368f6bde743d4b041ec03b14ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6ab4197f329024329fcfb34ea9c5c5c68f0f4f068880f7398ab481c41b4c2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ab4197f329024329fcfb34ea9c5c5c68f0f4f068880f7398ab481c41b4c2d3->enter($__internal_b6ab4197f329024329fcfb34ea9c5c5c68f0f4f068880f7398ab481c41b4c2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6ab4197f329024329fcfb34ea9c5c5c68f0f4f068880f7398ab481c41b4c2d3->leave($__internal_b6ab4197f329024329fcfb34ea9c5c5c68f0f4f068880f7398ab481c41b4c2d3_prof);

        
        $__internal_bb6656de2a9158eda3867d8a7a80a37276cffa368f6bde743d4b041ec03b14ad->leave($__internal_bb6656de2a9158eda3867d8a7a80a37276cffa368f6bde743d4b041ec03b14ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63c02d5f062db316851871ac01f78f2cdc7daac3364b8a13f63712f42799bf2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c02d5f062db316851871ac01f78f2cdc7daac3364b8a13f63712f42799bf2c->enter($__internal_63c02d5f062db316851871ac01f78f2cdc7daac3364b8a13f63712f42799bf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e957e7f12eef78b2490a9e437342576b3fe21389da03bbd2ec7264ad763d3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e957e7f12eef78b2490a9e437342576b3fe21389da03bbd2ec7264ad763d3eb->enter($__internal_0e957e7f12eef78b2490a9e437342576b3fe21389da03bbd2ec7264ad763d3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e957e7f12eef78b2490a9e437342576b3fe21389da03bbd2ec7264ad763d3eb->leave($__internal_0e957e7f12eef78b2490a9e437342576b3fe21389da03bbd2ec7264ad763d3eb_prof);

        
        $__internal_63c02d5f062db316851871ac01f78f2cdc7daac3364b8a13f63712f42799bf2c->leave($__internal_63c02d5f062db316851871ac01f78f2cdc7daac3364b8a13f63712f42799bf2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa533b59240b616544525cf7a9b6ab0b062be544ad3f649633450a94db405622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa533b59240b616544525cf7a9b6ab0b062be544ad3f649633450a94db405622->enter($__internal_fa533b59240b616544525cf7a9b6ab0b062be544ad3f649633450a94db405622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7405031bebd5213a1239c87404b912efc1ec03b676e58de73a20d214c10facbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7405031bebd5213a1239c87404b912efc1ec03b676e58de73a20d214c10facbc->enter($__internal_7405031bebd5213a1239c87404b912efc1ec03b676e58de73a20d214c10facbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7405031bebd5213a1239c87404b912efc1ec03b676e58de73a20d214c10facbc->leave($__internal_7405031bebd5213a1239c87404b912efc1ec03b676e58de73a20d214c10facbc_prof);

        
        $__internal_fa533b59240b616544525cf7a9b6ab0b062be544ad3f649633450a94db405622->leave($__internal_fa533b59240b616544525cf7a9b6ab0b062be544ad3f649633450a94db405622_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

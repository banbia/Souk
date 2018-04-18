<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df19f214328ab617b06338a52fed6250742a1196ff8903f45e46bee8a0adab9f extends Twig_Template
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
        $__internal_129b193eecfccd45ec0e2eba98fd8922ec09581beaf481d07b3547cbbb22dc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129b193eecfccd45ec0e2eba98fd8922ec09581beaf481d07b3547cbbb22dc70->enter($__internal_129b193eecfccd45ec0e2eba98fd8922ec09581beaf481d07b3547cbbb22dc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ab5fa991d56d53c3d6804d40da3e78ba172b45eddbbbb28e1c688628c5d752e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab5fa991d56d53c3d6804d40da3e78ba172b45eddbbbb28e1c688628c5d752e->enter($__internal_3ab5fa991d56d53c3d6804d40da3e78ba172b45eddbbbb28e1c688628c5d752e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129b193eecfccd45ec0e2eba98fd8922ec09581beaf481d07b3547cbbb22dc70->leave($__internal_129b193eecfccd45ec0e2eba98fd8922ec09581beaf481d07b3547cbbb22dc70_prof);

        
        $__internal_3ab5fa991d56d53c3d6804d40da3e78ba172b45eddbbbb28e1c688628c5d752e->leave($__internal_3ab5fa991d56d53c3d6804d40da3e78ba172b45eddbbbb28e1c688628c5d752e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2d758e16a12bbd2b73e32391bbe145667efe26807a7f263d2db2fe371ddab87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d758e16a12bbd2b73e32391bbe145667efe26807a7f263d2db2fe371ddab87->enter($__internal_d2d758e16a12bbd2b73e32391bbe145667efe26807a7f263d2db2fe371ddab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_884e6244486580d6ff000e3abf859e66da5787221be74cd187d5a56072e9eb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884e6244486580d6ff000e3abf859e66da5787221be74cd187d5a56072e9eb4b->enter($__internal_884e6244486580d6ff000e3abf859e66da5787221be74cd187d5a56072e9eb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_884e6244486580d6ff000e3abf859e66da5787221be74cd187d5a56072e9eb4b->leave($__internal_884e6244486580d6ff000e3abf859e66da5787221be74cd187d5a56072e9eb4b_prof);

        
        $__internal_d2d758e16a12bbd2b73e32391bbe145667efe26807a7f263d2db2fe371ddab87->leave($__internal_d2d758e16a12bbd2b73e32391bbe145667efe26807a7f263d2db2fe371ddab87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7faf2ea23b8ef2f6a084e8d9e9794c988f463fd8110df09ec4581b4cb1aced0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7faf2ea23b8ef2f6a084e8d9e9794c988f463fd8110df09ec4581b4cb1aced0->enter($__internal_f7faf2ea23b8ef2f6a084e8d9e9794c988f463fd8110df09ec4581b4cb1aced0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f81c15acbfdd0b39500379cd8cb4c5ac431484dfaf1a891ba683a9148d9f1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f81c15acbfdd0b39500379cd8cb4c5ac431484dfaf1a891ba683a9148d9f1b7->enter($__internal_9f81c15acbfdd0b39500379cd8cb4c5ac431484dfaf1a891ba683a9148d9f1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f81c15acbfdd0b39500379cd8cb4c5ac431484dfaf1a891ba683a9148d9f1b7->leave($__internal_9f81c15acbfdd0b39500379cd8cb4c5ac431484dfaf1a891ba683a9148d9f1b7_prof);

        
        $__internal_f7faf2ea23b8ef2f6a084e8d9e9794c988f463fd8110df09ec4581b4cb1aced0->leave($__internal_f7faf2ea23b8ef2f6a084e8d9e9794c988f463fd8110df09ec4581b4cb1aced0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e796e6579b83924c01df322982689b7806743c4315f63d13e8fb6ba94ea18c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e796e6579b83924c01df322982689b7806743c4315f63d13e8fb6ba94ea18c18->enter($__internal_e796e6579b83924c01df322982689b7806743c4315f63d13e8fb6ba94ea18c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36a712cfa951085d6db54538fca455a8652452b9c093ff362f8a98aa14d6c9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a712cfa951085d6db54538fca455a8652452b9c093ff362f8a98aa14d6c9da->enter($__internal_36a712cfa951085d6db54538fca455a8652452b9c093ff362f8a98aa14d6c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36a712cfa951085d6db54538fca455a8652452b9c093ff362f8a98aa14d6c9da->leave($__internal_36a712cfa951085d6db54538fca455a8652452b9c093ff362f8a98aa14d6c9da_prof);

        
        $__internal_e796e6579b83924c01df322982689b7806743c4315f63d13e8fb6ba94ea18c18->leave($__internal_e796e6579b83924c01df322982689b7806743c4315f63d13e8fb6ba94ea18c18_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

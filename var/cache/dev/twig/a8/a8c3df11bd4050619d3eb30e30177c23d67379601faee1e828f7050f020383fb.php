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
        $__internal_83819630f96b5cf870474b6f7547cb133d2d747d07b6f9e0099502be2aeecfc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83819630f96b5cf870474b6f7547cb133d2d747d07b6f9e0099502be2aeecfc7->enter($__internal_83819630f96b5cf870474b6f7547cb133d2d747d07b6f9e0099502be2aeecfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_12ebe59098f33d0d9df404a91374b29d245f185810eeb3b21efbac9acbab9e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ebe59098f33d0d9df404a91374b29d245f185810eeb3b21efbac9acbab9e48->enter($__internal_12ebe59098f33d0d9df404a91374b29d245f185810eeb3b21efbac9acbab9e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83819630f96b5cf870474b6f7547cb133d2d747d07b6f9e0099502be2aeecfc7->leave($__internal_83819630f96b5cf870474b6f7547cb133d2d747d07b6f9e0099502be2aeecfc7_prof);

        
        $__internal_12ebe59098f33d0d9df404a91374b29d245f185810eeb3b21efbac9acbab9e48->leave($__internal_12ebe59098f33d0d9df404a91374b29d245f185810eeb3b21efbac9acbab9e48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a70e7a9ec519d455a9d6d62bbb606c4927797e982fa799dcf89467f85168e25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70e7a9ec519d455a9d6d62bbb606c4927797e982fa799dcf89467f85168e25c->enter($__internal_a70e7a9ec519d455a9d6d62bbb606c4927797e982fa799dcf89467f85168e25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6edc02a47fecb7a140434141e7bec4929fe7f8ac532bbfb109d277dd44032cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6edc02a47fecb7a140434141e7bec4929fe7f8ac532bbfb109d277dd44032cf->enter($__internal_c6edc02a47fecb7a140434141e7bec4929fe7f8ac532bbfb109d277dd44032cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6edc02a47fecb7a140434141e7bec4929fe7f8ac532bbfb109d277dd44032cf->leave($__internal_c6edc02a47fecb7a140434141e7bec4929fe7f8ac532bbfb109d277dd44032cf_prof);

        
        $__internal_a70e7a9ec519d455a9d6d62bbb606c4927797e982fa799dcf89467f85168e25c->leave($__internal_a70e7a9ec519d455a9d6d62bbb606c4927797e982fa799dcf89467f85168e25c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61930808e8c7a8bd837bc57f168721200910a2f976647b617523af951007dfe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61930808e8c7a8bd837bc57f168721200910a2f976647b617523af951007dfe9->enter($__internal_61930808e8c7a8bd837bc57f168721200910a2f976647b617523af951007dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26fd81dec99fb437b64e060fcc96c45933ef740411deb19f2bc53959bbcbcc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fd81dec99fb437b64e060fcc96c45933ef740411deb19f2bc53959bbcbcc91->enter($__internal_26fd81dec99fb437b64e060fcc96c45933ef740411deb19f2bc53959bbcbcc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_26fd81dec99fb437b64e060fcc96c45933ef740411deb19f2bc53959bbcbcc91->leave($__internal_26fd81dec99fb437b64e060fcc96c45933ef740411deb19f2bc53959bbcbcc91_prof);

        
        $__internal_61930808e8c7a8bd837bc57f168721200910a2f976647b617523af951007dfe9->leave($__internal_61930808e8c7a8bd837bc57f168721200910a2f976647b617523af951007dfe9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f3b2d942ca43d55d75906c2745a7b1ca99614e3ca55d7396d5056ab2d61b282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3b2d942ca43d55d75906c2745a7b1ca99614e3ca55d7396d5056ab2d61b282->enter($__internal_3f3b2d942ca43d55d75906c2745a7b1ca99614e3ca55d7396d5056ab2d61b282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c4504d992d699576d07ef8e22ed6d93e71f83fba52cf07f4f708f37364a8cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4504d992d699576d07ef8e22ed6d93e71f83fba52cf07f4f708f37364a8cb9->enter($__internal_0c4504d992d699576d07ef8e22ed6d93e71f83fba52cf07f4f708f37364a8cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c4504d992d699576d07ef8e22ed6d93e71f83fba52cf07f4f708f37364a8cb9->leave($__internal_0c4504d992d699576d07ef8e22ed6d93e71f83fba52cf07f4f708f37364a8cb9_prof);

        
        $__internal_3f3b2d942ca43d55d75906c2745a7b1ca99614e3ca55d7396d5056ab2d61b282->leave($__internal_3f3b2d942ca43d55d75906c2745a7b1ca99614e3ca55d7396d5056ab2d61b282_prof);

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

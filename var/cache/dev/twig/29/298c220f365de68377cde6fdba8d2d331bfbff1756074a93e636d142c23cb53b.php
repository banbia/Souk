<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08907de82a6f094dd0bd0695c39e414172e29c852536879e097372e869a73689 extends Twig_Template
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
        $__internal_ee387ef60cb3d635307631dd71c2de0d5de737120b29a333f098da140a2af398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee387ef60cb3d635307631dd71c2de0d5de737120b29a333f098da140a2af398->enter($__internal_ee387ef60cb3d635307631dd71c2de0d5de737120b29a333f098da140a2af398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_25aa63858c99a04b478bb2a38271b935762eecbc689e6554bbff7229d8986454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25aa63858c99a04b478bb2a38271b935762eecbc689e6554bbff7229d8986454->enter($__internal_25aa63858c99a04b478bb2a38271b935762eecbc689e6554bbff7229d8986454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee387ef60cb3d635307631dd71c2de0d5de737120b29a333f098da140a2af398->leave($__internal_ee387ef60cb3d635307631dd71c2de0d5de737120b29a333f098da140a2af398_prof);

        
        $__internal_25aa63858c99a04b478bb2a38271b935762eecbc689e6554bbff7229d8986454->leave($__internal_25aa63858c99a04b478bb2a38271b935762eecbc689e6554bbff7229d8986454_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ed8c56ca746e9c43c3d0fe6d74cb48925cd62c318114b0761a14896f8accda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed8c56ca746e9c43c3d0fe6d74cb48925cd62c318114b0761a14896f8accda4->enter($__internal_3ed8c56ca746e9c43c3d0fe6d74cb48925cd62c318114b0761a14896f8accda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59cdd3f271327a15bc5588bb30bcbf88871f0f7beb15d080a87fe1dba7b66185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cdd3f271327a15bc5588bb30bcbf88871f0f7beb15d080a87fe1dba7b66185->enter($__internal_59cdd3f271327a15bc5588bb30bcbf88871f0f7beb15d080a87fe1dba7b66185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59cdd3f271327a15bc5588bb30bcbf88871f0f7beb15d080a87fe1dba7b66185->leave($__internal_59cdd3f271327a15bc5588bb30bcbf88871f0f7beb15d080a87fe1dba7b66185_prof);

        
        $__internal_3ed8c56ca746e9c43c3d0fe6d74cb48925cd62c318114b0761a14896f8accda4->leave($__internal_3ed8c56ca746e9c43c3d0fe6d74cb48925cd62c318114b0761a14896f8accda4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d335b8b69f02cd76a2032740e0bd72692fc067fbce07724e74653f6e6fca27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d335b8b69f02cd76a2032740e0bd72692fc067fbce07724e74653f6e6fca27f->enter($__internal_9d335b8b69f02cd76a2032740e0bd72692fc067fbce07724e74653f6e6fca27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_62c14b8b70da543c83feb41257810c12fb4b44dd25bdac16f830d717cb90cec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c14b8b70da543c83feb41257810c12fb4b44dd25bdac16f830d717cb90cec8->enter($__internal_62c14b8b70da543c83feb41257810c12fb4b44dd25bdac16f830d717cb90cec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62c14b8b70da543c83feb41257810c12fb4b44dd25bdac16f830d717cb90cec8->leave($__internal_62c14b8b70da543c83feb41257810c12fb4b44dd25bdac16f830d717cb90cec8_prof);

        
        $__internal_9d335b8b69f02cd76a2032740e0bd72692fc067fbce07724e74653f6e6fca27f->leave($__internal_9d335b8b69f02cd76a2032740e0bd72692fc067fbce07724e74653f6e6fca27f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e457cb78cdef7f0c79057e994eb83089c78b9f670cd0d5440b4544fee71c812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e457cb78cdef7f0c79057e994eb83089c78b9f670cd0d5440b4544fee71c812->enter($__internal_2e457cb78cdef7f0c79057e994eb83089c78b9f670cd0d5440b4544fee71c812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_131e85c00d6b9ad05a544c08f01b88701c2f8567053115423be70149a9068ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131e85c00d6b9ad05a544c08f01b88701c2f8567053115423be70149a9068ae2->enter($__internal_131e85c00d6b9ad05a544c08f01b88701c2f8567053115423be70149a9068ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_131e85c00d6b9ad05a544c08f01b88701c2f8567053115423be70149a9068ae2->leave($__internal_131e85c00d6b9ad05a544c08f01b88701c2f8567053115423be70149a9068ae2_prof);

        
        $__internal_2e457cb78cdef7f0c79057e994eb83089c78b9f670cd0d5440b4544fee71c812->leave($__internal_2e457cb78cdef7f0c79057e994eb83089c78b9f670cd0d5440b4544fee71c812_prof);

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

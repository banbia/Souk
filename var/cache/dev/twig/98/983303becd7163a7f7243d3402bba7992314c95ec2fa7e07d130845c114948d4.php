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
        $__internal_b6dd4995df1e9cf4f27978d4a8b50ba35d154bf0b0ce2e7e0e8d0839df9a65f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6dd4995df1e9cf4f27978d4a8b50ba35d154bf0b0ce2e7e0e8d0839df9a65f3->enter($__internal_b6dd4995df1e9cf4f27978d4a8b50ba35d154bf0b0ce2e7e0e8d0839df9a65f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b8cd53e285ed5512f77f6db4c83462f572769384b215c34488a2a503123a9cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cd53e285ed5512f77f6db4c83462f572769384b215c34488a2a503123a9cbe->enter($__internal_b8cd53e285ed5512f77f6db4c83462f572769384b215c34488a2a503123a9cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6dd4995df1e9cf4f27978d4a8b50ba35d154bf0b0ce2e7e0e8d0839df9a65f3->leave($__internal_b6dd4995df1e9cf4f27978d4a8b50ba35d154bf0b0ce2e7e0e8d0839df9a65f3_prof);

        
        $__internal_b8cd53e285ed5512f77f6db4c83462f572769384b215c34488a2a503123a9cbe->leave($__internal_b8cd53e285ed5512f77f6db4c83462f572769384b215c34488a2a503123a9cbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53e2b13dc888622b2198571b8c3b496f7df5da7798c127f30c98d74e84e70e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e2b13dc888622b2198571b8c3b496f7df5da7798c127f30c98d74e84e70e5c->enter($__internal_53e2b13dc888622b2198571b8c3b496f7df5da7798c127f30c98d74e84e70e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0f2aa4b026cbfabc9696ead3dd5bdb01006d5d65356503c180c25b6ed1497d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2aa4b026cbfabc9696ead3dd5bdb01006d5d65356503c180c25b6ed1497d7e->enter($__internal_0f2aa4b026cbfabc9696ead3dd5bdb01006d5d65356503c180c25b6ed1497d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f2aa4b026cbfabc9696ead3dd5bdb01006d5d65356503c180c25b6ed1497d7e->leave($__internal_0f2aa4b026cbfabc9696ead3dd5bdb01006d5d65356503c180c25b6ed1497d7e_prof);

        
        $__internal_53e2b13dc888622b2198571b8c3b496f7df5da7798c127f30c98d74e84e70e5c->leave($__internal_53e2b13dc888622b2198571b8c3b496f7df5da7798c127f30c98d74e84e70e5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6bf704eff10966b361992e4161e1bd7262a9347993b0fea0ca7ed8ad7b9d681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6bf704eff10966b361992e4161e1bd7262a9347993b0fea0ca7ed8ad7b9d681->enter($__internal_d6bf704eff10966b361992e4161e1bd7262a9347993b0fea0ca7ed8ad7b9d681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a8ad7149b779339e19bd66589af4654790887b4c717197e2e968d3c1fbddbacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ad7149b779339e19bd66589af4654790887b4c717197e2e968d3c1fbddbacb->enter($__internal_a8ad7149b779339e19bd66589af4654790887b4c717197e2e968d3c1fbddbacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a8ad7149b779339e19bd66589af4654790887b4c717197e2e968d3c1fbddbacb->leave($__internal_a8ad7149b779339e19bd66589af4654790887b4c717197e2e968d3c1fbddbacb_prof);

        
        $__internal_d6bf704eff10966b361992e4161e1bd7262a9347993b0fea0ca7ed8ad7b9d681->leave($__internal_d6bf704eff10966b361992e4161e1bd7262a9347993b0fea0ca7ed8ad7b9d681_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ce570bce841a6566cb2d76ce774e8cd69034d382ea21e69939754dfb3a5a3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce570bce841a6566cb2d76ce774e8cd69034d382ea21e69939754dfb3a5a3fb->enter($__internal_2ce570bce841a6566cb2d76ce774e8cd69034d382ea21e69939754dfb3a5a3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f162a132ad54a0d76d617bf1aa09083a687ea43efc584a60ecf247456922b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f162a132ad54a0d76d617bf1aa09083a687ea43efc584a60ecf247456922b62->enter($__internal_9f162a132ad54a0d76d617bf1aa09083a687ea43efc584a60ecf247456922b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f162a132ad54a0d76d617bf1aa09083a687ea43efc584a60ecf247456922b62->leave($__internal_9f162a132ad54a0d76d617bf1aa09083a687ea43efc584a60ecf247456922b62_prof);

        
        $__internal_2ce570bce841a6566cb2d76ce774e8cd69034d382ea21e69939754dfb3a5a3fb->leave($__internal_2ce570bce841a6566cb2d76ce774e8cd69034d382ea21e69939754dfb3a5a3fb_prof);

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

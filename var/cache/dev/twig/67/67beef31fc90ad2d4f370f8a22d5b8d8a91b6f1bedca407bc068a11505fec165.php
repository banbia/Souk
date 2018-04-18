<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_49b9c2c9a3fe23fc15f81769ed81cf4622586ce29a06bb30761ff3ec69399938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b09b7c6e50e302e04b016cbc64a2746f20d9afdd29c6fcfa9ea5aff6bc93e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b09b7c6e50e302e04b016cbc64a2746f20d9afdd29c6fcfa9ea5aff6bc93e0a->enter($__internal_9b09b7c6e50e302e04b016cbc64a2746f20d9afdd29c6fcfa9ea5aff6bc93e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2b785a9ff4534be29d6ab7d7eb9f6531fdd901b1ad39d7b9a82d1719befc4fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b785a9ff4534be29d6ab7d7eb9f6531fdd901b1ad39d7b9a82d1719befc4fda->enter($__internal_2b785a9ff4534be29d6ab7d7eb9f6531fdd901b1ad39d7b9a82d1719befc4fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b09b7c6e50e302e04b016cbc64a2746f20d9afdd29c6fcfa9ea5aff6bc93e0a->leave($__internal_9b09b7c6e50e302e04b016cbc64a2746f20d9afdd29c6fcfa9ea5aff6bc93e0a_prof);

        
        $__internal_2b785a9ff4534be29d6ab7d7eb9f6531fdd901b1ad39d7b9a82d1719befc4fda->leave($__internal_2b785a9ff4534be29d6ab7d7eb9f6531fdd901b1ad39d7b9a82d1719befc4fda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82e6c28a8ed20ab71cd8c542e66e88495ad803cf3732b6bef4040fd1a77b5ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e6c28a8ed20ab71cd8c542e66e88495ad803cf3732b6bef4040fd1a77b5ee5->enter($__internal_82e6c28a8ed20ab71cd8c542e66e88495ad803cf3732b6bef4040fd1a77b5ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29aeca33e7df849b3c7ce600dafdadb974271123f9a8b6fe176c437e132bce57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29aeca33e7df849b3c7ce600dafdadb974271123f9a8b6fe176c437e132bce57->enter($__internal_29aeca33e7df849b3c7ce600dafdadb974271123f9a8b6fe176c437e132bce57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_29aeca33e7df849b3c7ce600dafdadb974271123f9a8b6fe176c437e132bce57->leave($__internal_29aeca33e7df849b3c7ce600dafdadb974271123f9a8b6fe176c437e132bce57_prof);

        
        $__internal_82e6c28a8ed20ab71cd8c542e66e88495ad803cf3732b6bef4040fd1a77b5ee5->leave($__internal_82e6c28a8ed20ab71cd8c542e66e88495ad803cf3732b6bef4040fd1a77b5ee5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e06f615f09d3c02691e7192f990da5d4201f32164cbd04450421dd22948a6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e06f615f09d3c02691e7192f990da5d4201f32164cbd04450421dd22948a6c9->enter($__internal_1e06f615f09d3c02691e7192f990da5d4201f32164cbd04450421dd22948a6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d08cd36cfc3a451c5ffb1fbd081991831708a6bbfdc698b374efdf02e834a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d08cd36cfc3a451c5ffb1fbd081991831708a6bbfdc698b374efdf02e834a4f->enter($__internal_5d08cd36cfc3a451c5ffb1fbd081991831708a6bbfdc698b374efdf02e834a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5d08cd36cfc3a451c5ffb1fbd081991831708a6bbfdc698b374efdf02e834a4f->leave($__internal_5d08cd36cfc3a451c5ffb1fbd081991831708a6bbfdc698b374efdf02e834a4f_prof);

        
        $__internal_1e06f615f09d3c02691e7192f990da5d4201f32164cbd04450421dd22948a6c9->leave($__internal_1e06f615f09d3c02691e7192f990da5d4201f32164cbd04450421dd22948a6c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

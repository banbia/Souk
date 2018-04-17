<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a6dc613d2807fadcd435e0d748fb28d5c74fd35062bd4d651b77bad7ee15670f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_977e465ca346823f35d34e14eceab8a518a72e403b72a8d68e05cae1b1330651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977e465ca346823f35d34e14eceab8a518a72e403b72a8d68e05cae1b1330651->enter($__internal_977e465ca346823f35d34e14eceab8a518a72e403b72a8d68e05cae1b1330651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7913173e5dc627d86ce22029bee239da3250d710ce3ef7c65b2a155dcc91084a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7913173e5dc627d86ce22029bee239da3250d710ce3ef7c65b2a155dcc91084a->enter($__internal_7913173e5dc627d86ce22029bee239da3250d710ce3ef7c65b2a155dcc91084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977e465ca346823f35d34e14eceab8a518a72e403b72a8d68e05cae1b1330651->leave($__internal_977e465ca346823f35d34e14eceab8a518a72e403b72a8d68e05cae1b1330651_prof);

        
        $__internal_7913173e5dc627d86ce22029bee239da3250d710ce3ef7c65b2a155dcc91084a->leave($__internal_7913173e5dc627d86ce22029bee239da3250d710ce3ef7c65b2a155dcc91084a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3017fc1427593fc6d49cb00f78231987ab980f6b8776a332af895f6d7e5c6ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3017fc1427593fc6d49cb00f78231987ab980f6b8776a332af895f6d7e5c6ceb->enter($__internal_3017fc1427593fc6d49cb00f78231987ab980f6b8776a332af895f6d7e5c6ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d259f119b4390ad7dfa8eb8292df9b1afd859e2017168a80caebfc749ae1491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d259f119b4390ad7dfa8eb8292df9b1afd859e2017168a80caebfc749ae1491->enter($__internal_6d259f119b4390ad7dfa8eb8292df9b1afd859e2017168a80caebfc749ae1491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6d259f119b4390ad7dfa8eb8292df9b1afd859e2017168a80caebfc749ae1491->leave($__internal_6d259f119b4390ad7dfa8eb8292df9b1afd859e2017168a80caebfc749ae1491_prof);

        
        $__internal_3017fc1427593fc6d49cb00f78231987ab980f6b8776a332af895f6d7e5c6ceb->leave($__internal_3017fc1427593fc6d49cb00f78231987ab980f6b8776a332af895f6d7e5c6ceb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_58aae45db5078d50219ec03b48bbfb11031cf562c5907140573cf8eacdb72dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58aae45db5078d50219ec03b48bbfb11031cf562c5907140573cf8eacdb72dbe->enter($__internal_58aae45db5078d50219ec03b48bbfb11031cf562c5907140573cf8eacdb72dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ab3d7d4895b5757b1f32f0303ef87ec7992f2a91bc9050c740f0b090073e916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab3d7d4895b5757b1f32f0303ef87ec7992f2a91bc9050c740f0b090073e916->enter($__internal_1ab3d7d4895b5757b1f32f0303ef87ec7992f2a91bc9050c740f0b090073e916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1ab3d7d4895b5757b1f32f0303ef87ec7992f2a91bc9050c740f0b090073e916->leave($__internal_1ab3d7d4895b5757b1f32f0303ef87ec7992f2a91bc9050c740f0b090073e916_prof);

        
        $__internal_58aae45db5078d50219ec03b48bbfb11031cf562c5907140573cf8eacdb72dbe->leave($__internal_58aae45db5078d50219ec03b48bbfb11031cf562c5907140573cf8eacdb72dbe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

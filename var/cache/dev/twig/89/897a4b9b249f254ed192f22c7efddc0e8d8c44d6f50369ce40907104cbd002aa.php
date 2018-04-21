<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6edf08a88c62f6ccc9493b5571e56836e8351a59cbbfc8819608065613aa2ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aefd6cb83246275b451a535ce09dd14b1e5ee72ded620976af88c4654a214ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefd6cb83246275b451a535ce09dd14b1e5ee72ded620976af88c4654a214ca3->enter($__internal_aefd6cb83246275b451a535ce09dd14b1e5ee72ded620976af88c4654a214ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c844204fbd4823a7e5bbb5fc922f6680f1a0fdf445a9bc2a28462a262b516c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c844204fbd4823a7e5bbb5fc922f6680f1a0fdf445a9bc2a28462a262b516c70->enter($__internal_c844204fbd4823a7e5bbb5fc922f6680f1a0fdf445a9bc2a28462a262b516c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aefd6cb83246275b451a535ce09dd14b1e5ee72ded620976af88c4654a214ca3->leave($__internal_aefd6cb83246275b451a535ce09dd14b1e5ee72ded620976af88c4654a214ca3_prof);

        
        $__internal_c844204fbd4823a7e5bbb5fc922f6680f1a0fdf445a9bc2a28462a262b516c70->leave($__internal_c844204fbd4823a7e5bbb5fc922f6680f1a0fdf445a9bc2a28462a262b516c70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_365d7200803c4e457b332fbdc6976ca1c68dd5203f93e629b35cef71e9e334d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365d7200803c4e457b332fbdc6976ca1c68dd5203f93e629b35cef71e9e334d6->enter($__internal_365d7200803c4e457b332fbdc6976ca1c68dd5203f93e629b35cef71e9e334d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2105e7a108795c85feb5b14231b373a553f65f972a00a362769c179c5b43551b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2105e7a108795c85feb5b14231b373a553f65f972a00a362769c179c5b43551b->enter($__internal_2105e7a108795c85feb5b14231b373a553f65f972a00a362769c179c5b43551b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2105e7a108795c85feb5b14231b373a553f65f972a00a362769c179c5b43551b->leave($__internal_2105e7a108795c85feb5b14231b373a553f65f972a00a362769c179c5b43551b_prof);

        
        $__internal_365d7200803c4e457b332fbdc6976ca1c68dd5203f93e629b35cef71e9e334d6->leave($__internal_365d7200803c4e457b332fbdc6976ca1c68dd5203f93e629b35cef71e9e334d6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b720aeed7c4508e92c28edb6b4221291095e77730ed637163d8021a9f6a929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b720aeed7c4508e92c28edb6b4221291095e77730ed637163d8021a9f6a929->enter($__internal_36b720aeed7c4508e92c28edb6b4221291095e77730ed637163d8021a9f6a929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51892bf7c8b4fb6c048e5bbd15ca2b8f1bea005d43a0e450372dd845e19e8ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51892bf7c8b4fb6c048e5bbd15ca2b8f1bea005d43a0e450372dd845e19e8ada->enter($__internal_51892bf7c8b4fb6c048e5bbd15ca2b8f1bea005d43a0e450372dd845e19e8ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_51892bf7c8b4fb6c048e5bbd15ca2b8f1bea005d43a0e450372dd845e19e8ada->leave($__internal_51892bf7c8b4fb6c048e5bbd15ca2b8f1bea005d43a0e450372dd845e19e8ada_prof);

        
        $__internal_36b720aeed7c4508e92c28edb6b4221291095e77730ed637163d8021a9f6a929->leave($__internal_36b720aeed7c4508e92c28edb6b4221291095e77730ed637163d8021a9f6a929_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd2d9fb85828eacbe747e4b6e091868ea8cb246631d7814aa9702b50a91e8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd2d9fb85828eacbe747e4b6e091868ea8cb246631d7814aa9702b50a91e8f7->enter($__internal_0fd2d9fb85828eacbe747e4b6e091868ea8cb246631d7814aa9702b50a91e8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5f09854844ac7b8d2936f0aaf7e0eda6e31a285ee0ecb533518e4e7d3bb0542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f09854844ac7b8d2936f0aaf7e0eda6e31a285ee0ecb533518e4e7d3bb0542->enter($__internal_e5f09854844ac7b8d2936f0aaf7e0eda6e31a285ee0ecb533518e4e7d3bb0542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e5f09854844ac7b8d2936f0aaf7e0eda6e31a285ee0ecb533518e4e7d3bb0542->leave($__internal_e5f09854844ac7b8d2936f0aaf7e0eda6e31a285ee0ecb533518e4e7d3bb0542_prof);

        
        $__internal_0fd2d9fb85828eacbe747e4b6e091868ea8cb246631d7814aa9702b50a91e8f7->leave($__internal_0fd2d9fb85828eacbe747e4b6e091868ea8cb246631d7814aa9702b50a91e8f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

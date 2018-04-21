<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86d45f851bf47e4a3cff84bce48e07882be708165cada18b6dbbabc1a6db13ce extends Twig_Template
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
        $__internal_f6e677fb434aba76629144c64e41a786af2a63edbead98efb77741b20d67e619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e677fb434aba76629144c64e41a786af2a63edbead98efb77741b20d67e619->enter($__internal_f6e677fb434aba76629144c64e41a786af2a63edbead98efb77741b20d67e619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_88a43495f38ae79ceb79991c23823bd2cfac44ed07ea92deab405cbb1d2c64ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a43495f38ae79ceb79991c23823bd2cfac44ed07ea92deab405cbb1d2c64ca->enter($__internal_88a43495f38ae79ceb79991c23823bd2cfac44ed07ea92deab405cbb1d2c64ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e677fb434aba76629144c64e41a786af2a63edbead98efb77741b20d67e619->leave($__internal_f6e677fb434aba76629144c64e41a786af2a63edbead98efb77741b20d67e619_prof);

        
        $__internal_88a43495f38ae79ceb79991c23823bd2cfac44ed07ea92deab405cbb1d2c64ca->leave($__internal_88a43495f38ae79ceb79991c23823bd2cfac44ed07ea92deab405cbb1d2c64ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9c1bc4feb085e4787104d6479dcec5157533dd0685845023b60065b283c8299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c1bc4feb085e4787104d6479dcec5157533dd0685845023b60065b283c8299->enter($__internal_e9c1bc4feb085e4787104d6479dcec5157533dd0685845023b60065b283c8299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_decca70ac8a762ea9749b0b50a144ae2a52ecf49d0df1259199b08c9aedcaec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decca70ac8a762ea9749b0b50a144ae2a52ecf49d0df1259199b08c9aedcaec8->enter($__internal_decca70ac8a762ea9749b0b50a144ae2a52ecf49d0df1259199b08c9aedcaec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_decca70ac8a762ea9749b0b50a144ae2a52ecf49d0df1259199b08c9aedcaec8->leave($__internal_decca70ac8a762ea9749b0b50a144ae2a52ecf49d0df1259199b08c9aedcaec8_prof);

        
        $__internal_e9c1bc4feb085e4787104d6479dcec5157533dd0685845023b60065b283c8299->leave($__internal_e9c1bc4feb085e4787104d6479dcec5157533dd0685845023b60065b283c8299_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_75e089c7c6a0e640bc4a4140de174af09614c755138c72b66828da48939bded7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e089c7c6a0e640bc4a4140de174af09614c755138c72b66828da48939bded7->enter($__internal_75e089c7c6a0e640bc4a4140de174af09614c755138c72b66828da48939bded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7644a57c48669eb05e76f57af2272fbf4a9d654eca6865f86ff01b8aa52ce2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7644a57c48669eb05e76f57af2272fbf4a9d654eca6865f86ff01b8aa52ce2ac->enter($__internal_7644a57c48669eb05e76f57af2272fbf4a9d654eca6865f86ff01b8aa52ce2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7644a57c48669eb05e76f57af2272fbf4a9d654eca6865f86ff01b8aa52ce2ac->leave($__internal_7644a57c48669eb05e76f57af2272fbf4a9d654eca6865f86ff01b8aa52ce2ac_prof);

        
        $__internal_75e089c7c6a0e640bc4a4140de174af09614c755138c72b66828da48939bded7->leave($__internal_75e089c7c6a0e640bc4a4140de174af09614c755138c72b66828da48939bded7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb59d046569cc7539040c6b7551eba855c226bc3460bbdfe1ed563ed7d860562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb59d046569cc7539040c6b7551eba855c226bc3460bbdfe1ed563ed7d860562->enter($__internal_eb59d046569cc7539040c6b7551eba855c226bc3460bbdfe1ed563ed7d860562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_324dc0715a71c0b629503817286f01f6c89cd76ead79771c848deea78fd76e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324dc0715a71c0b629503817286f01f6c89cd76ead79771c848deea78fd76e6b->enter($__internal_324dc0715a71c0b629503817286f01f6c89cd76ead79771c848deea78fd76e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_324dc0715a71c0b629503817286f01f6c89cd76ead79771c848deea78fd76e6b->leave($__internal_324dc0715a71c0b629503817286f01f6c89cd76ead79771c848deea78fd76e6b_prof);

        
        $__internal_eb59d046569cc7539040c6b7551eba855c226bc3460bbdfe1ed563ed7d860562->leave($__internal_eb59d046569cc7539040c6b7551eba855c226bc3460bbdfe1ed563ed7d860562_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

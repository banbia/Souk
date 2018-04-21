<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e3d009b692429d218f9b0f92f0a9655dd8587690b9191fa12e53ad1fe1dd76b extends Twig_Template
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
        $__internal_b3d3e1289cd039265568bc604b37d18e4c7fed0374e4fb0e7129fcff225adad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d3e1289cd039265568bc604b37d18e4c7fed0374e4fb0e7129fcff225adad7->enter($__internal_b3d3e1289cd039265568bc604b37d18e4c7fed0374e4fb0e7129fcff225adad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d49df38c97043828f5daf91bf8457600b99474c3b5ae668db5296e381ac64c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49df38c97043828f5daf91bf8457600b99474c3b5ae668db5296e381ac64c0a->enter($__internal_d49df38c97043828f5daf91bf8457600b99474c3b5ae668db5296e381ac64c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d3e1289cd039265568bc604b37d18e4c7fed0374e4fb0e7129fcff225adad7->leave($__internal_b3d3e1289cd039265568bc604b37d18e4c7fed0374e4fb0e7129fcff225adad7_prof);

        
        $__internal_d49df38c97043828f5daf91bf8457600b99474c3b5ae668db5296e381ac64c0a->leave($__internal_d49df38c97043828f5daf91bf8457600b99474c3b5ae668db5296e381ac64c0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97a55d8204887c00023460a0688d556dfd4935f05d6460ecf06827dd8de42cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a55d8204887c00023460a0688d556dfd4935f05d6460ecf06827dd8de42cf9->enter($__internal_97a55d8204887c00023460a0688d556dfd4935f05d6460ecf06827dd8de42cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c604134e43731778fb1bb78e9e20a79ab29357ac4f12aaa22d0f4b80f073632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c604134e43731778fb1bb78e9e20a79ab29357ac4f12aaa22d0f4b80f073632->enter($__internal_3c604134e43731778fb1bb78e9e20a79ab29357ac4f12aaa22d0f4b80f073632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3c604134e43731778fb1bb78e9e20a79ab29357ac4f12aaa22d0f4b80f073632->leave($__internal_3c604134e43731778fb1bb78e9e20a79ab29357ac4f12aaa22d0f4b80f073632_prof);

        
        $__internal_97a55d8204887c00023460a0688d556dfd4935f05d6460ecf06827dd8de42cf9->leave($__internal_97a55d8204887c00023460a0688d556dfd4935f05d6460ecf06827dd8de42cf9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c4f2224f41d023eb7f183de1c9a835b70fefef363d26ff710e24aa55d9af861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4f2224f41d023eb7f183de1c9a835b70fefef363d26ff710e24aa55d9af861->enter($__internal_2c4f2224f41d023eb7f183de1c9a835b70fefef363d26ff710e24aa55d9af861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa36419d21cb17229b26de713038efc4ca491db7ce0c06a770d34a41811360bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa36419d21cb17229b26de713038efc4ca491db7ce0c06a770d34a41811360bf->enter($__internal_fa36419d21cb17229b26de713038efc4ca491db7ce0c06a770d34a41811360bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa36419d21cb17229b26de713038efc4ca491db7ce0c06a770d34a41811360bf->leave($__internal_fa36419d21cb17229b26de713038efc4ca491db7ce0c06a770d34a41811360bf_prof);

        
        $__internal_2c4f2224f41d023eb7f183de1c9a835b70fefef363d26ff710e24aa55d9af861->leave($__internal_2c4f2224f41d023eb7f183de1c9a835b70fefef363d26ff710e24aa55d9af861_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b645b9651a708a61af003f3aba8c2cf9263c849caf164300efe3f77aeab4e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b645b9651a708a61af003f3aba8c2cf9263c849caf164300efe3f77aeab4e88->enter($__internal_0b645b9651a708a61af003f3aba8c2cf9263c849caf164300efe3f77aeab4e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f64870eeb1c7398e5d2c6533597a78d559d8c546f244abe985da0edf9fa9d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f64870eeb1c7398e5d2c6533597a78d559d8c546f244abe985da0edf9fa9d93->enter($__internal_8f64870eeb1c7398e5d2c6533597a78d559d8c546f244abe985da0edf9fa9d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8f64870eeb1c7398e5d2c6533597a78d559d8c546f244abe985da0edf9fa9d93->leave($__internal_8f64870eeb1c7398e5d2c6533597a78d559d8c546f244abe985da0edf9fa9d93_prof);

        
        $__internal_0b645b9651a708a61af003f3aba8c2cf9263c849caf164300efe3f77aeab4e88->leave($__internal_0b645b9651a708a61af003f3aba8c2cf9263c849caf164300efe3f77aeab4e88_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

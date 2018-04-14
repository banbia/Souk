<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0fd44b22921c0a575cd41c70539e10812d973fb7fbdc7f30235dbe5299ff4a26 extends Twig_Template
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
        $__internal_744b5cb699332f740b90119649049c49119f8ab6f30f9ad0350bc445c5e58279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744b5cb699332f740b90119649049c49119f8ab6f30f9ad0350bc445c5e58279->enter($__internal_744b5cb699332f740b90119649049c49119f8ab6f30f9ad0350bc445c5e58279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_79d01bab97130af18a6d9bbe47eff4520fa59d63610fbcb26fc4df06d9768fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d01bab97130af18a6d9bbe47eff4520fa59d63610fbcb26fc4df06d9768fb7->enter($__internal_79d01bab97130af18a6d9bbe47eff4520fa59d63610fbcb26fc4df06d9768fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_744b5cb699332f740b90119649049c49119f8ab6f30f9ad0350bc445c5e58279->leave($__internal_744b5cb699332f740b90119649049c49119f8ab6f30f9ad0350bc445c5e58279_prof);

        
        $__internal_79d01bab97130af18a6d9bbe47eff4520fa59d63610fbcb26fc4df06d9768fb7->leave($__internal_79d01bab97130af18a6d9bbe47eff4520fa59d63610fbcb26fc4df06d9768fb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b70a1439e2de4d441165958b2c81e64b2e39ae9ab5e10be1b81c839a3c27f089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70a1439e2de4d441165958b2c81e64b2e39ae9ab5e10be1b81c839a3c27f089->enter($__internal_b70a1439e2de4d441165958b2c81e64b2e39ae9ab5e10be1b81c839a3c27f089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a24c3f426cdba4ddcbb899fe3f8cc8062ce45bb8c561606da1e2ef1999e50c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24c3f426cdba4ddcbb899fe3f8cc8062ce45bb8c561606da1e2ef1999e50c29->enter($__internal_a24c3f426cdba4ddcbb899fe3f8cc8062ce45bb8c561606da1e2ef1999e50c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a24c3f426cdba4ddcbb899fe3f8cc8062ce45bb8c561606da1e2ef1999e50c29->leave($__internal_a24c3f426cdba4ddcbb899fe3f8cc8062ce45bb8c561606da1e2ef1999e50c29_prof);

        
        $__internal_b70a1439e2de4d441165958b2c81e64b2e39ae9ab5e10be1b81c839a3c27f089->leave($__internal_b70a1439e2de4d441165958b2c81e64b2e39ae9ab5e10be1b81c839a3c27f089_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3eb67fff5e43bd88372fd16e6d78b58d7e7ef00b8fd514dafbed88e4def6924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3eb67fff5e43bd88372fd16e6d78b58d7e7ef00b8fd514dafbed88e4def6924->enter($__internal_e3eb67fff5e43bd88372fd16e6d78b58d7e7ef00b8fd514dafbed88e4def6924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e199f755b20d992bd1d4a96ddd80973fc3b4bb40492600c27f4127a9a9547de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e199f755b20d992bd1d4a96ddd80973fc3b4bb40492600c27f4127a9a9547de->enter($__internal_1e199f755b20d992bd1d4a96ddd80973fc3b4bb40492600c27f4127a9a9547de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e199f755b20d992bd1d4a96ddd80973fc3b4bb40492600c27f4127a9a9547de->leave($__internal_1e199f755b20d992bd1d4a96ddd80973fc3b4bb40492600c27f4127a9a9547de_prof);

        
        $__internal_e3eb67fff5e43bd88372fd16e6d78b58d7e7ef00b8fd514dafbed88e4def6924->leave($__internal_e3eb67fff5e43bd88372fd16e6d78b58d7e7ef00b8fd514dafbed88e4def6924_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5d527e2e415182b24a020ff37a10c7763efb1a6c47a557633aed3208008b405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d527e2e415182b24a020ff37a10c7763efb1a6c47a557633aed3208008b405->enter($__internal_c5d527e2e415182b24a020ff37a10c7763efb1a6c47a557633aed3208008b405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27b334adb2f3cbfdd34c29ac4c2610910d5883334adf19b1dc56050e39e516c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b334adb2f3cbfdd34c29ac4c2610910d5883334adf19b1dc56050e39e516c8->enter($__internal_27b334adb2f3cbfdd34c29ac4c2610910d5883334adf19b1dc56050e39e516c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_27b334adb2f3cbfdd34c29ac4c2610910d5883334adf19b1dc56050e39e516c8->leave($__internal_27b334adb2f3cbfdd34c29ac4c2610910d5883334adf19b1dc56050e39e516c8_prof);

        
        $__internal_c5d527e2e415182b24a020ff37a10c7763efb1a6c47a557633aed3208008b405->leave($__internal_c5d527e2e415182b24a020ff37a10c7763efb1a6c47a557633aed3208008b405_prof);

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

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
        $__internal_3a0ad25f9d7646ccbdd93eeafa3788433bf5c142676803bfef2171554b002958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0ad25f9d7646ccbdd93eeafa3788433bf5c142676803bfef2171554b002958->enter($__internal_3a0ad25f9d7646ccbdd93eeafa3788433bf5c142676803bfef2171554b002958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_49a08ae90857b2ad40d7e092ecee19297852e90fd0ad088435777f3a57a9b160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a08ae90857b2ad40d7e092ecee19297852e90fd0ad088435777f3a57a9b160->enter($__internal_49a08ae90857b2ad40d7e092ecee19297852e90fd0ad088435777f3a57a9b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a0ad25f9d7646ccbdd93eeafa3788433bf5c142676803bfef2171554b002958->leave($__internal_3a0ad25f9d7646ccbdd93eeafa3788433bf5c142676803bfef2171554b002958_prof);

        
        $__internal_49a08ae90857b2ad40d7e092ecee19297852e90fd0ad088435777f3a57a9b160->leave($__internal_49a08ae90857b2ad40d7e092ecee19297852e90fd0ad088435777f3a57a9b160_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_657ca7f980fb211a20e4b7c7b2c0c17c481d9aabfc3be7c6179761f0ed418bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657ca7f980fb211a20e4b7c7b2c0c17c481d9aabfc3be7c6179761f0ed418bd4->enter($__internal_657ca7f980fb211a20e4b7c7b2c0c17c481d9aabfc3be7c6179761f0ed418bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c14e5151ffe1138d96719f47d43e324c1ba67575ed33267838dca1e18dfcaf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14e5151ffe1138d96719f47d43e324c1ba67575ed33267838dca1e18dfcaf5e->enter($__internal_c14e5151ffe1138d96719f47d43e324c1ba67575ed33267838dca1e18dfcaf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c14e5151ffe1138d96719f47d43e324c1ba67575ed33267838dca1e18dfcaf5e->leave($__internal_c14e5151ffe1138d96719f47d43e324c1ba67575ed33267838dca1e18dfcaf5e_prof);

        
        $__internal_657ca7f980fb211a20e4b7c7b2c0c17c481d9aabfc3be7c6179761f0ed418bd4->leave($__internal_657ca7f980fb211a20e4b7c7b2c0c17c481d9aabfc3be7c6179761f0ed418bd4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f8f62900975f8e9823554b6694e9f3120fe50cfe167174bfccac62a7b21532e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8f62900975f8e9823554b6694e9f3120fe50cfe167174bfccac62a7b21532e->enter($__internal_5f8f62900975f8e9823554b6694e9f3120fe50cfe167174bfccac62a7b21532e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42a98a26f43855c9c375d778debeafc431a2efb983495cfd63b79a47b55bbcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a98a26f43855c9c375d778debeafc431a2efb983495cfd63b79a47b55bbcc5->enter($__internal_42a98a26f43855c9c375d778debeafc431a2efb983495cfd63b79a47b55bbcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_42a98a26f43855c9c375d778debeafc431a2efb983495cfd63b79a47b55bbcc5->leave($__internal_42a98a26f43855c9c375d778debeafc431a2efb983495cfd63b79a47b55bbcc5_prof);

        
        $__internal_5f8f62900975f8e9823554b6694e9f3120fe50cfe167174bfccac62a7b21532e->leave($__internal_5f8f62900975f8e9823554b6694e9f3120fe50cfe167174bfccac62a7b21532e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3427231163833a39cd7ffa5d305f739220f18af7ca74082c7f451950615d5e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3427231163833a39cd7ffa5d305f739220f18af7ca74082c7f451950615d5e87->enter($__internal_3427231163833a39cd7ffa5d305f739220f18af7ca74082c7f451950615d5e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e5093b7bb7a0662a0eed3c70a6e0eae4dd73b54a2e748c228611c363dd475ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5093b7bb7a0662a0eed3c70a6e0eae4dd73b54a2e748c228611c363dd475ae->enter($__internal_3e5093b7bb7a0662a0eed3c70a6e0eae4dd73b54a2e748c228611c363dd475ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3e5093b7bb7a0662a0eed3c70a6e0eae4dd73b54a2e748c228611c363dd475ae->leave($__internal_3e5093b7bb7a0662a0eed3c70a6e0eae4dd73b54a2e748c228611c363dd475ae_prof);

        
        $__internal_3427231163833a39cd7ffa5d305f739220f18af7ca74082c7f451950615d5e87->leave($__internal_3427231163833a39cd7ffa5d305f739220f18af7ca74082c7f451950615d5e87_prof);

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

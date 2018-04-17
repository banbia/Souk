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
        $__internal_7abba0cd7531a2e332366772099a3d770772e35cf6e8b5efac03f0a17fb08b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abba0cd7531a2e332366772099a3d770772e35cf6e8b5efac03f0a17fb08b23->enter($__internal_7abba0cd7531a2e332366772099a3d770772e35cf6e8b5efac03f0a17fb08b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4b0e4b6c464db65305ababf338e153e02d728c2f8996d6ce102cc17780bbc71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0e4b6c464db65305ababf338e153e02d728c2f8996d6ce102cc17780bbc71b->enter($__internal_4b0e4b6c464db65305ababf338e153e02d728c2f8996d6ce102cc17780bbc71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7abba0cd7531a2e332366772099a3d770772e35cf6e8b5efac03f0a17fb08b23->leave($__internal_7abba0cd7531a2e332366772099a3d770772e35cf6e8b5efac03f0a17fb08b23_prof);

        
        $__internal_4b0e4b6c464db65305ababf338e153e02d728c2f8996d6ce102cc17780bbc71b->leave($__internal_4b0e4b6c464db65305ababf338e153e02d728c2f8996d6ce102cc17780bbc71b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b8989258d72c020a5901ee2001fbe473f87ec87123b71b706736b67d348d12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8989258d72c020a5901ee2001fbe473f87ec87123b71b706736b67d348d12b->enter($__internal_8b8989258d72c020a5901ee2001fbe473f87ec87123b71b706736b67d348d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a42f975b748c26304ddc98ab8e4282d9d15b3be4b2e8f4af8fc29b51801ae8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42f975b748c26304ddc98ab8e4282d9d15b3be4b2e8f4af8fc29b51801ae8f2->enter($__internal_a42f975b748c26304ddc98ab8e4282d9d15b3be4b2e8f4af8fc29b51801ae8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a42f975b748c26304ddc98ab8e4282d9d15b3be4b2e8f4af8fc29b51801ae8f2->leave($__internal_a42f975b748c26304ddc98ab8e4282d9d15b3be4b2e8f4af8fc29b51801ae8f2_prof);

        
        $__internal_8b8989258d72c020a5901ee2001fbe473f87ec87123b71b706736b67d348d12b->leave($__internal_8b8989258d72c020a5901ee2001fbe473f87ec87123b71b706736b67d348d12b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bc69c38b2f2a813757130acc5389b3bd64f257ce78b4f64037b7ae33498c2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc69c38b2f2a813757130acc5389b3bd64f257ce78b4f64037b7ae33498c2e3->enter($__internal_5bc69c38b2f2a813757130acc5389b3bd64f257ce78b4f64037b7ae33498c2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbdb108786e978a4224dc438c37865a60dfa5c407266f94031cd617969e1be30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdb108786e978a4224dc438c37865a60dfa5c407266f94031cd617969e1be30->enter($__internal_fbdb108786e978a4224dc438c37865a60dfa5c407266f94031cd617969e1be30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fbdb108786e978a4224dc438c37865a60dfa5c407266f94031cd617969e1be30->leave($__internal_fbdb108786e978a4224dc438c37865a60dfa5c407266f94031cd617969e1be30_prof);

        
        $__internal_5bc69c38b2f2a813757130acc5389b3bd64f257ce78b4f64037b7ae33498c2e3->leave($__internal_5bc69c38b2f2a813757130acc5389b3bd64f257ce78b4f64037b7ae33498c2e3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_678e9d1546e277872251932a90a255d81c7b5f2f2754ad2380da5353c1fdd9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678e9d1546e277872251932a90a255d81c7b5f2f2754ad2380da5353c1fdd9ca->enter($__internal_678e9d1546e277872251932a90a255d81c7b5f2f2754ad2380da5353c1fdd9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_811bf65557cbc47dea6dfa86ec2dc3d80dbfaa454624a9b8624626cf81a23f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811bf65557cbc47dea6dfa86ec2dc3d80dbfaa454624a9b8624626cf81a23f36->enter($__internal_811bf65557cbc47dea6dfa86ec2dc3d80dbfaa454624a9b8624626cf81a23f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_811bf65557cbc47dea6dfa86ec2dc3d80dbfaa454624a9b8624626cf81a23f36->leave($__internal_811bf65557cbc47dea6dfa86ec2dc3d80dbfaa454624a9b8624626cf81a23f36_prof);

        
        $__internal_678e9d1546e277872251932a90a255d81c7b5f2f2754ad2380da5353c1fdd9ca->leave($__internal_678e9d1546e277872251932a90a255d81c7b5f2f2754ad2380da5353c1fdd9ca_prof);

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

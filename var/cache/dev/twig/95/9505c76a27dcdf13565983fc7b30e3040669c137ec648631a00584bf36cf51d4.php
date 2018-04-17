<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6c4aa4e34d8bff29b2051cccc8321076fac68610557f10cd64006c977502c820 extends Twig_Template
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
        $__internal_5752cc302d9be81668fc9287d0727e2bc4d638d5c18a768e99f7c333e57c1a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5752cc302d9be81668fc9287d0727e2bc4d638d5c18a768e99f7c333e57c1a63->enter($__internal_5752cc302d9be81668fc9287d0727e2bc4d638d5c18a768e99f7c333e57c1a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_803b7f78dcdf1c87a7b3051893deb615618f4e10b3cf9d8e50b7ff197a4debdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803b7f78dcdf1c87a7b3051893deb615618f4e10b3cf9d8e50b7ff197a4debdd->enter($__internal_803b7f78dcdf1c87a7b3051893deb615618f4e10b3cf9d8e50b7ff197a4debdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5752cc302d9be81668fc9287d0727e2bc4d638d5c18a768e99f7c333e57c1a63->leave($__internal_5752cc302d9be81668fc9287d0727e2bc4d638d5c18a768e99f7c333e57c1a63_prof);

        
        $__internal_803b7f78dcdf1c87a7b3051893deb615618f4e10b3cf9d8e50b7ff197a4debdd->leave($__internal_803b7f78dcdf1c87a7b3051893deb615618f4e10b3cf9d8e50b7ff197a4debdd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_595cdf2da0bc1d663357bb0c83fb0d33f144e07e4fb9719ae51d5b131e7830bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595cdf2da0bc1d663357bb0c83fb0d33f144e07e4fb9719ae51d5b131e7830bd->enter($__internal_595cdf2da0bc1d663357bb0c83fb0d33f144e07e4fb9719ae51d5b131e7830bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67ac7087e52c5d5553f2a04e1a080a6847597130f969d809f068ec6de4c6c4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ac7087e52c5d5553f2a04e1a080a6847597130f969d809f068ec6de4c6c4d6->enter($__internal_67ac7087e52c5d5553f2a04e1a080a6847597130f969d809f068ec6de4c6c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_67ac7087e52c5d5553f2a04e1a080a6847597130f969d809f068ec6de4c6c4d6->leave($__internal_67ac7087e52c5d5553f2a04e1a080a6847597130f969d809f068ec6de4c6c4d6_prof);

        
        $__internal_595cdf2da0bc1d663357bb0c83fb0d33f144e07e4fb9719ae51d5b131e7830bd->leave($__internal_595cdf2da0bc1d663357bb0c83fb0d33f144e07e4fb9719ae51d5b131e7830bd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_81984bc1d0bacb4a8e4a9f56838ed2bd076e6bdfe127cc2d1636f1d99da268b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81984bc1d0bacb4a8e4a9f56838ed2bd076e6bdfe127cc2d1636f1d99da268b0->enter($__internal_81984bc1d0bacb4a8e4a9f56838ed2bd076e6bdfe127cc2d1636f1d99da268b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_682d6793e9100c10d8433b7842172c970acfd1eb3a955ed7df887bd9ba3fb177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682d6793e9100c10d8433b7842172c970acfd1eb3a955ed7df887bd9ba3fb177->enter($__internal_682d6793e9100c10d8433b7842172c970acfd1eb3a955ed7df887bd9ba3fb177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_682d6793e9100c10d8433b7842172c970acfd1eb3a955ed7df887bd9ba3fb177->leave($__internal_682d6793e9100c10d8433b7842172c970acfd1eb3a955ed7df887bd9ba3fb177_prof);

        
        $__internal_81984bc1d0bacb4a8e4a9f56838ed2bd076e6bdfe127cc2d1636f1d99da268b0->leave($__internal_81984bc1d0bacb4a8e4a9f56838ed2bd076e6bdfe127cc2d1636f1d99da268b0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_89cc68d14b410f5a9d62572c57c2c0007cdf38572d04069496c4a8a0f3f9b070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89cc68d14b410f5a9d62572c57c2c0007cdf38572d04069496c4a8a0f3f9b070->enter($__internal_89cc68d14b410f5a9d62572c57c2c0007cdf38572d04069496c4a8a0f3f9b070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_783c261ca6c771da1d5a7b240b075e343d4d2a50bcae50df0a774064b8543fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783c261ca6c771da1d5a7b240b075e343d4d2a50bcae50df0a774064b8543fff->enter($__internal_783c261ca6c771da1d5a7b240b075e343d4d2a50bcae50df0a774064b8543fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_783c261ca6c771da1d5a7b240b075e343d4d2a50bcae50df0a774064b8543fff->leave($__internal_783c261ca6c771da1d5a7b240b075e343d4d2a50bcae50df0a774064b8543fff_prof);

        
        $__internal_89cc68d14b410f5a9d62572c57c2c0007cdf38572d04069496c4a8a0f3f9b070->leave($__internal_89cc68d14b410f5a9d62572c57c2c0007cdf38572d04069496c4a8a0f3f9b070_prof);

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

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fbfa4a0248ddc4b873ac5d0f382762171eb07ac1f90c657d0ce3adbba6853a68 extends Twig_Template
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
        $__internal_f6cd1c67ed272a355646ccb958c4ff754f86f89bf754e52da2b9ade0681385f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cd1c67ed272a355646ccb958c4ff754f86f89bf754e52da2b9ade0681385f0->enter($__internal_f6cd1c67ed272a355646ccb958c4ff754f86f89bf754e52da2b9ade0681385f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4d6f6e69581ce5b8969340db80b64f428a158c5e3f067c81ff030b057e9b48a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6f6e69581ce5b8969340db80b64f428a158c5e3f067c81ff030b057e9b48a3->enter($__internal_4d6f6e69581ce5b8969340db80b64f428a158c5e3f067c81ff030b057e9b48a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6cd1c67ed272a355646ccb958c4ff754f86f89bf754e52da2b9ade0681385f0->leave($__internal_f6cd1c67ed272a355646ccb958c4ff754f86f89bf754e52da2b9ade0681385f0_prof);

        
        $__internal_4d6f6e69581ce5b8969340db80b64f428a158c5e3f067c81ff030b057e9b48a3->leave($__internal_4d6f6e69581ce5b8969340db80b64f428a158c5e3f067c81ff030b057e9b48a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2da631b8b2d5aaf46d80b48c9d1799b8fd1dffb88f537ddf0d4d9e32b9a5aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2da631b8b2d5aaf46d80b48c9d1799b8fd1dffb88f537ddf0d4d9e32b9a5aa5->enter($__internal_e2da631b8b2d5aaf46d80b48c9d1799b8fd1dffb88f537ddf0d4d9e32b9a5aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e770d0bc5bdbc86c8ed63af2b2e9fc1aefb4506deb3da1e4526aeaf484513f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e770d0bc5bdbc86c8ed63af2b2e9fc1aefb4506deb3da1e4526aeaf484513f58->enter($__internal_e770d0bc5bdbc86c8ed63af2b2e9fc1aefb4506deb3da1e4526aeaf484513f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e770d0bc5bdbc86c8ed63af2b2e9fc1aefb4506deb3da1e4526aeaf484513f58->leave($__internal_e770d0bc5bdbc86c8ed63af2b2e9fc1aefb4506deb3da1e4526aeaf484513f58_prof);

        
        $__internal_e2da631b8b2d5aaf46d80b48c9d1799b8fd1dffb88f537ddf0d4d9e32b9a5aa5->leave($__internal_e2da631b8b2d5aaf46d80b48c9d1799b8fd1dffb88f537ddf0d4d9e32b9a5aa5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_04baee1a0403632cd7b75db665f0434f68ce58790177ef3f9eb08901c960d041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04baee1a0403632cd7b75db665f0434f68ce58790177ef3f9eb08901c960d041->enter($__internal_04baee1a0403632cd7b75db665f0434f68ce58790177ef3f9eb08901c960d041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a86bb6a3d0550cc61e5b1f351dfeb6045add84c49bcf50d444fffbf4aa2d5810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86bb6a3d0550cc61e5b1f351dfeb6045add84c49bcf50d444fffbf4aa2d5810->enter($__internal_a86bb6a3d0550cc61e5b1f351dfeb6045add84c49bcf50d444fffbf4aa2d5810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a86bb6a3d0550cc61e5b1f351dfeb6045add84c49bcf50d444fffbf4aa2d5810->leave($__internal_a86bb6a3d0550cc61e5b1f351dfeb6045add84c49bcf50d444fffbf4aa2d5810_prof);

        
        $__internal_04baee1a0403632cd7b75db665f0434f68ce58790177ef3f9eb08901c960d041->leave($__internal_04baee1a0403632cd7b75db665f0434f68ce58790177ef3f9eb08901c960d041_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba66a8ce16edae8b18304fa5e8d14f09269aa46c3e84c291909055c7f41b37c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba66a8ce16edae8b18304fa5e8d14f09269aa46c3e84c291909055c7f41b37c1->enter($__internal_ba66a8ce16edae8b18304fa5e8d14f09269aa46c3e84c291909055c7f41b37c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_275445ca994931eb1c90a7dceea92ac6b0059c89bc520d69704cdff3368acc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275445ca994931eb1c90a7dceea92ac6b0059c89bc520d69704cdff3368acc2f->enter($__internal_275445ca994931eb1c90a7dceea92ac6b0059c89bc520d69704cdff3368acc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_275445ca994931eb1c90a7dceea92ac6b0059c89bc520d69704cdff3368acc2f->leave($__internal_275445ca994931eb1c90a7dceea92ac6b0059c89bc520d69704cdff3368acc2f_prof);

        
        $__internal_ba66a8ce16edae8b18304fa5e8d14f09269aa46c3e84c291909055c7f41b37c1->leave($__internal_ba66a8ce16edae8b18304fa5e8d14f09269aa46c3e84c291909055c7f41b37c1_prof);

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

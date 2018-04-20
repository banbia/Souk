<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c4abdce0e5b06a53a10e2e6649055498bc79f7a76626362a5390d8537c621932 extends Twig_Template
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
        $__internal_dbeaf4abccb13a3f9eb5b6ddaabce704814b83a6fb8bde0c433c511f7ba36c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbeaf4abccb13a3f9eb5b6ddaabce704814b83a6fb8bde0c433c511f7ba36c97->enter($__internal_dbeaf4abccb13a3f9eb5b6ddaabce704814b83a6fb8bde0c433c511f7ba36c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3726cf887fac215316458ef17e43dab290f48c035a81b79bdd251ac8db895b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3726cf887fac215316458ef17e43dab290f48c035a81b79bdd251ac8db895b1b->enter($__internal_3726cf887fac215316458ef17e43dab290f48c035a81b79bdd251ac8db895b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbeaf4abccb13a3f9eb5b6ddaabce704814b83a6fb8bde0c433c511f7ba36c97->leave($__internal_dbeaf4abccb13a3f9eb5b6ddaabce704814b83a6fb8bde0c433c511f7ba36c97_prof);

        
        $__internal_3726cf887fac215316458ef17e43dab290f48c035a81b79bdd251ac8db895b1b->leave($__internal_3726cf887fac215316458ef17e43dab290f48c035a81b79bdd251ac8db895b1b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_490f8862839fc30511b325a588ad865926de7c386282035606888f48da64e583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490f8862839fc30511b325a588ad865926de7c386282035606888f48da64e583->enter($__internal_490f8862839fc30511b325a588ad865926de7c386282035606888f48da64e583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db852791a2df1ff29f2ec006f3e097285d7dd4ff34342bcaac8271bbe4b8343b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db852791a2df1ff29f2ec006f3e097285d7dd4ff34342bcaac8271bbe4b8343b->enter($__internal_db852791a2df1ff29f2ec006f3e097285d7dd4ff34342bcaac8271bbe4b8343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_db852791a2df1ff29f2ec006f3e097285d7dd4ff34342bcaac8271bbe4b8343b->leave($__internal_db852791a2df1ff29f2ec006f3e097285d7dd4ff34342bcaac8271bbe4b8343b_prof);

        
        $__internal_490f8862839fc30511b325a588ad865926de7c386282035606888f48da64e583->leave($__internal_490f8862839fc30511b325a588ad865926de7c386282035606888f48da64e583_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_132c1a02e95014148f9ae4fae02d47f3f8bd71adc7a080f7a90bfec579e8209d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132c1a02e95014148f9ae4fae02d47f3f8bd71adc7a080f7a90bfec579e8209d->enter($__internal_132c1a02e95014148f9ae4fae02d47f3f8bd71adc7a080f7a90bfec579e8209d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5d46b2f38f5cea6da98d4d905ca5c253d2d91680d3546b846ac32c5912a377c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d46b2f38f5cea6da98d4d905ca5c253d2d91680d3546b846ac32c5912a377c->enter($__internal_c5d46b2f38f5cea6da98d4d905ca5c253d2d91680d3546b846ac32c5912a377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5d46b2f38f5cea6da98d4d905ca5c253d2d91680d3546b846ac32c5912a377c->leave($__internal_c5d46b2f38f5cea6da98d4d905ca5c253d2d91680d3546b846ac32c5912a377c_prof);

        
        $__internal_132c1a02e95014148f9ae4fae02d47f3f8bd71adc7a080f7a90bfec579e8209d->leave($__internal_132c1a02e95014148f9ae4fae02d47f3f8bd71adc7a080f7a90bfec579e8209d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e7fc9b2ef9caa34ae2028d0e8003caf48c0f90fc2677b21b64183aa95116ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e7fc9b2ef9caa34ae2028d0e8003caf48c0f90fc2677b21b64183aa95116ad->enter($__internal_f9e7fc9b2ef9caa34ae2028d0e8003caf48c0f90fc2677b21b64183aa95116ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee6a1c844852254ec8d451b9ae3b069e7c982dae59647217bbf6e6d5990f8553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6a1c844852254ec8d451b9ae3b069e7c982dae59647217bbf6e6d5990f8553->enter($__internal_ee6a1c844852254ec8d451b9ae3b069e7c982dae59647217bbf6e6d5990f8553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ee6a1c844852254ec8d451b9ae3b069e7c982dae59647217bbf6e6d5990f8553->leave($__internal_ee6a1c844852254ec8d451b9ae3b069e7c982dae59647217bbf6e6d5990f8553_prof);

        
        $__internal_f9e7fc9b2ef9caa34ae2028d0e8003caf48c0f90fc2677b21b64183aa95116ad->leave($__internal_f9e7fc9b2ef9caa34ae2028d0e8003caf48c0f90fc2677b21b64183aa95116ad_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

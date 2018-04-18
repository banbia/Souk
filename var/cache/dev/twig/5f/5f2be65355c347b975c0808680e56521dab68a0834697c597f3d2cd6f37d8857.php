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
        $__internal_455f3d6548703e126ff70b5aea80deb08d5f65408522ef2bd5f8c42c55076355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455f3d6548703e126ff70b5aea80deb08d5f65408522ef2bd5f8c42c55076355->enter($__internal_455f3d6548703e126ff70b5aea80deb08d5f65408522ef2bd5f8c42c55076355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_79b302d7397912fc7a2a356f62c120bd4784bf66accc2841db23c1b590fce155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b302d7397912fc7a2a356f62c120bd4784bf66accc2841db23c1b590fce155->enter($__internal_79b302d7397912fc7a2a356f62c120bd4784bf66accc2841db23c1b590fce155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455f3d6548703e126ff70b5aea80deb08d5f65408522ef2bd5f8c42c55076355->leave($__internal_455f3d6548703e126ff70b5aea80deb08d5f65408522ef2bd5f8c42c55076355_prof);

        
        $__internal_79b302d7397912fc7a2a356f62c120bd4784bf66accc2841db23c1b590fce155->leave($__internal_79b302d7397912fc7a2a356f62c120bd4784bf66accc2841db23c1b590fce155_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d4430faff1f1aa749b63588d0b67caa5b29d328bfbf33944cdddc313dad0acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4430faff1f1aa749b63588d0b67caa5b29d328bfbf33944cdddc313dad0acf->enter($__internal_5d4430faff1f1aa749b63588d0b67caa5b29d328bfbf33944cdddc313dad0acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e284b3ed3f489a89526492609bf4039b04d11d76e427e22878814c5c2bdcf897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e284b3ed3f489a89526492609bf4039b04d11d76e427e22878814c5c2bdcf897->enter($__internal_e284b3ed3f489a89526492609bf4039b04d11d76e427e22878814c5c2bdcf897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e284b3ed3f489a89526492609bf4039b04d11d76e427e22878814c5c2bdcf897->leave($__internal_e284b3ed3f489a89526492609bf4039b04d11d76e427e22878814c5c2bdcf897_prof);

        
        $__internal_5d4430faff1f1aa749b63588d0b67caa5b29d328bfbf33944cdddc313dad0acf->leave($__internal_5d4430faff1f1aa749b63588d0b67caa5b29d328bfbf33944cdddc313dad0acf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_85f2121b78e8351d9ed815e4986b7d4c56809de0bff2c35d8ff58e1ba8eb5122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f2121b78e8351d9ed815e4986b7d4c56809de0bff2c35d8ff58e1ba8eb5122->enter($__internal_85f2121b78e8351d9ed815e4986b7d4c56809de0bff2c35d8ff58e1ba8eb5122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d35ca3ed26121c3d4967331ac84ff4dc615b29f30f7a53c62c3e1c7cd6bd8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d35ca3ed26121c3d4967331ac84ff4dc615b29f30f7a53c62c3e1c7cd6bd8d9->enter($__internal_6d35ca3ed26121c3d4967331ac84ff4dc615b29f30f7a53c62c3e1c7cd6bd8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d35ca3ed26121c3d4967331ac84ff4dc615b29f30f7a53c62c3e1c7cd6bd8d9->leave($__internal_6d35ca3ed26121c3d4967331ac84ff4dc615b29f30f7a53c62c3e1c7cd6bd8d9_prof);

        
        $__internal_85f2121b78e8351d9ed815e4986b7d4c56809de0bff2c35d8ff58e1ba8eb5122->leave($__internal_85f2121b78e8351d9ed815e4986b7d4c56809de0bff2c35d8ff58e1ba8eb5122_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_affcc7d07b7cb362d397e862e4e5dcf66737378eb48bb62125ca1078bbc1a706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affcc7d07b7cb362d397e862e4e5dcf66737378eb48bb62125ca1078bbc1a706->enter($__internal_affcc7d07b7cb362d397e862e4e5dcf66737378eb48bb62125ca1078bbc1a706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_768fcfa4b95271d2c4fe2bde8db82aa6af82deb3d05893f62afb31dbbba8b39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768fcfa4b95271d2c4fe2bde8db82aa6af82deb3d05893f62afb31dbbba8b39c->enter($__internal_768fcfa4b95271d2c4fe2bde8db82aa6af82deb3d05893f62afb31dbbba8b39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_768fcfa4b95271d2c4fe2bde8db82aa6af82deb3d05893f62afb31dbbba8b39c->leave($__internal_768fcfa4b95271d2c4fe2bde8db82aa6af82deb3d05893f62afb31dbbba8b39c_prof);

        
        $__internal_affcc7d07b7cb362d397e862e4e5dcf66737378eb48bb62125ca1078bbc1a706->leave($__internal_affcc7d07b7cb362d397e862e4e5dcf66737378eb48bb62125ca1078bbc1a706_prof);

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

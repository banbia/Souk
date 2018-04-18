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
        $__internal_77d7b53755f49978a54ec642f0e2809617c93f0a45db571e447facbb218d6e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d7b53755f49978a54ec642f0e2809617c93f0a45db571e447facbb218d6e64->enter($__internal_77d7b53755f49978a54ec642f0e2809617c93f0a45db571e447facbb218d6e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1d6628fdee06fa68248717d7ca2114770247114e403c3ab92b2093021ef4d477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6628fdee06fa68248717d7ca2114770247114e403c3ab92b2093021ef4d477->enter($__internal_1d6628fdee06fa68248717d7ca2114770247114e403c3ab92b2093021ef4d477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d7b53755f49978a54ec642f0e2809617c93f0a45db571e447facbb218d6e64->leave($__internal_77d7b53755f49978a54ec642f0e2809617c93f0a45db571e447facbb218d6e64_prof);

        
        $__internal_1d6628fdee06fa68248717d7ca2114770247114e403c3ab92b2093021ef4d477->leave($__internal_1d6628fdee06fa68248717d7ca2114770247114e403c3ab92b2093021ef4d477_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4eefd9db44d6b1d5d4bda61bdaee4563c1a97ea861c88a019fd0dcbe51a1cd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eefd9db44d6b1d5d4bda61bdaee4563c1a97ea861c88a019fd0dcbe51a1cd81->enter($__internal_4eefd9db44d6b1d5d4bda61bdaee4563c1a97ea861c88a019fd0dcbe51a1cd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b06de680b5ff3f00059792c0dbfdb25058ee62824c75871615786bbf23dd9355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06de680b5ff3f00059792c0dbfdb25058ee62824c75871615786bbf23dd9355->enter($__internal_b06de680b5ff3f00059792c0dbfdb25058ee62824c75871615786bbf23dd9355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b06de680b5ff3f00059792c0dbfdb25058ee62824c75871615786bbf23dd9355->leave($__internal_b06de680b5ff3f00059792c0dbfdb25058ee62824c75871615786bbf23dd9355_prof);

        
        $__internal_4eefd9db44d6b1d5d4bda61bdaee4563c1a97ea861c88a019fd0dcbe51a1cd81->leave($__internal_4eefd9db44d6b1d5d4bda61bdaee4563c1a97ea861c88a019fd0dcbe51a1cd81_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a50e72d649d93533a9de6a5170bb18556ad00b9ec01e8e24ab308ff64e89b51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50e72d649d93533a9de6a5170bb18556ad00b9ec01e8e24ab308ff64e89b51f->enter($__internal_a50e72d649d93533a9de6a5170bb18556ad00b9ec01e8e24ab308ff64e89b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d31dfdacc50b14b1e551cacf1cebe58173238d4ba481305bf3a6f1f7088c7815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31dfdacc50b14b1e551cacf1cebe58173238d4ba481305bf3a6f1f7088c7815->enter($__internal_d31dfdacc50b14b1e551cacf1cebe58173238d4ba481305bf3a6f1f7088c7815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d31dfdacc50b14b1e551cacf1cebe58173238d4ba481305bf3a6f1f7088c7815->leave($__internal_d31dfdacc50b14b1e551cacf1cebe58173238d4ba481305bf3a6f1f7088c7815_prof);

        
        $__internal_a50e72d649d93533a9de6a5170bb18556ad00b9ec01e8e24ab308ff64e89b51f->leave($__internal_a50e72d649d93533a9de6a5170bb18556ad00b9ec01e8e24ab308ff64e89b51f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_90ba5f2ae64c3d205ac2328d85f9bbd521d4b92470d18ac55213025a2f77d15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ba5f2ae64c3d205ac2328d85f9bbd521d4b92470d18ac55213025a2f77d15e->enter($__internal_90ba5f2ae64c3d205ac2328d85f9bbd521d4b92470d18ac55213025a2f77d15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93313f4d6fedf1f9fdbb227892a1b325a3e55b5f288d277c7814056c7a3fb5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93313f4d6fedf1f9fdbb227892a1b325a3e55b5f288d277c7814056c7a3fb5af->enter($__internal_93313f4d6fedf1f9fdbb227892a1b325a3e55b5f288d277c7814056c7a3fb5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_93313f4d6fedf1f9fdbb227892a1b325a3e55b5f288d277c7814056c7a3fb5af->leave($__internal_93313f4d6fedf1f9fdbb227892a1b325a3e55b5f288d277c7814056c7a3fb5af_prof);

        
        $__internal_90ba5f2ae64c3d205ac2328d85f9bbd521d4b92470d18ac55213025a2f77d15e->leave($__internal_90ba5f2ae64c3d205ac2328d85f9bbd521d4b92470d18ac55213025a2f77d15e_prof);

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
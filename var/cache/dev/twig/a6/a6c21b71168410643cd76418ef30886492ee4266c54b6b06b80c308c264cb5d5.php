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
        $__internal_bc6e5498638ee295519742bf91ebfb4933b4dd9d9ea100fb41dffeff7f1b5d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6e5498638ee295519742bf91ebfb4933b4dd9d9ea100fb41dffeff7f1b5d53->enter($__internal_bc6e5498638ee295519742bf91ebfb4933b4dd9d9ea100fb41dffeff7f1b5d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bf80410d19a1b0406dc0bf50cfc9845bd9ea11bce2435e02364f5fd741118341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf80410d19a1b0406dc0bf50cfc9845bd9ea11bce2435e02364f5fd741118341->enter($__internal_bf80410d19a1b0406dc0bf50cfc9845bd9ea11bce2435e02364f5fd741118341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6e5498638ee295519742bf91ebfb4933b4dd9d9ea100fb41dffeff7f1b5d53->leave($__internal_bc6e5498638ee295519742bf91ebfb4933b4dd9d9ea100fb41dffeff7f1b5d53_prof);

        
        $__internal_bf80410d19a1b0406dc0bf50cfc9845bd9ea11bce2435e02364f5fd741118341->leave($__internal_bf80410d19a1b0406dc0bf50cfc9845bd9ea11bce2435e02364f5fd741118341_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b87605cfb254a31eee61f859749112acf839227b290a8deff1f99febb26b61d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87605cfb254a31eee61f859749112acf839227b290a8deff1f99febb26b61d3->enter($__internal_b87605cfb254a31eee61f859749112acf839227b290a8deff1f99febb26b61d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86cfef57f63951aac8db39acdbd3da483da87cdb9861885f84db0461902f790b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cfef57f63951aac8db39acdbd3da483da87cdb9861885f84db0461902f790b->enter($__internal_86cfef57f63951aac8db39acdbd3da483da87cdb9861885f84db0461902f790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_86cfef57f63951aac8db39acdbd3da483da87cdb9861885f84db0461902f790b->leave($__internal_86cfef57f63951aac8db39acdbd3da483da87cdb9861885f84db0461902f790b_prof);

        
        $__internal_b87605cfb254a31eee61f859749112acf839227b290a8deff1f99febb26b61d3->leave($__internal_b87605cfb254a31eee61f859749112acf839227b290a8deff1f99febb26b61d3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c5b6ee452407e089784d093805f1a226c5482d0e847e5c23b66bd77db7931fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5b6ee452407e089784d093805f1a226c5482d0e847e5c23b66bd77db7931fb->enter($__internal_9c5b6ee452407e089784d093805f1a226c5482d0e847e5c23b66bd77db7931fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_685d8c2739528bb0383c18d04b584902ac5bb6766b9d664c5f30c497a4a10953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685d8c2739528bb0383c18d04b584902ac5bb6766b9d664c5f30c497a4a10953->enter($__internal_685d8c2739528bb0383c18d04b584902ac5bb6766b9d664c5f30c497a4a10953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_685d8c2739528bb0383c18d04b584902ac5bb6766b9d664c5f30c497a4a10953->leave($__internal_685d8c2739528bb0383c18d04b584902ac5bb6766b9d664c5f30c497a4a10953_prof);

        
        $__internal_9c5b6ee452407e089784d093805f1a226c5482d0e847e5c23b66bd77db7931fb->leave($__internal_9c5b6ee452407e089784d093805f1a226c5482d0e847e5c23b66bd77db7931fb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9746c2693126d82353e0baef0fb311f7bf5939f90d7fada4b9204febfa02fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9746c2693126d82353e0baef0fb311f7bf5939f90d7fada4b9204febfa02fc5->enter($__internal_d9746c2693126d82353e0baef0fb311f7bf5939f90d7fada4b9204febfa02fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88568e8ae01cc52276a5b0fc80be62117e7c3f5c86fab7c31757911f84e243c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88568e8ae01cc52276a5b0fc80be62117e7c3f5c86fab7c31757911f84e243c2->enter($__internal_88568e8ae01cc52276a5b0fc80be62117e7c3f5c86fab7c31757911f84e243c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_88568e8ae01cc52276a5b0fc80be62117e7c3f5c86fab7c31757911f84e243c2->leave($__internal_88568e8ae01cc52276a5b0fc80be62117e7c3f5c86fab7c31757911f84e243c2_prof);

        
        $__internal_d9746c2693126d82353e0baef0fb311f7bf5939f90d7fada4b9204febfa02fc5->leave($__internal_d9746c2693126d82353e0baef0fb311f7bf5939f90d7fada4b9204febfa02fc5_prof);

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

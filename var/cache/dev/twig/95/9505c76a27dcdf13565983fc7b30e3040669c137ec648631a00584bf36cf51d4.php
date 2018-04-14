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
        $__internal_f8a1e3e18e0552605046071b03a7d84cbb7c67afecc0d7c3ed953c51287b4cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a1e3e18e0552605046071b03a7d84cbb7c67afecc0d7c3ed953c51287b4cf6->enter($__internal_f8a1e3e18e0552605046071b03a7d84cbb7c67afecc0d7c3ed953c51287b4cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_814f928ba59b7dac2ae374033799fa6696bf99253e7f4a9bcfda27eeab2677d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814f928ba59b7dac2ae374033799fa6696bf99253e7f4a9bcfda27eeab2677d1->enter($__internal_814f928ba59b7dac2ae374033799fa6696bf99253e7f4a9bcfda27eeab2677d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a1e3e18e0552605046071b03a7d84cbb7c67afecc0d7c3ed953c51287b4cf6->leave($__internal_f8a1e3e18e0552605046071b03a7d84cbb7c67afecc0d7c3ed953c51287b4cf6_prof);

        
        $__internal_814f928ba59b7dac2ae374033799fa6696bf99253e7f4a9bcfda27eeab2677d1->leave($__internal_814f928ba59b7dac2ae374033799fa6696bf99253e7f4a9bcfda27eeab2677d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bad143c2a96f5b18b3bcdea06f268c205c5fe7340199d7bb9cfa4328d392a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bad143c2a96f5b18b3bcdea06f268c205c5fe7340199d7bb9cfa4328d392a78->enter($__internal_8bad143c2a96f5b18b3bcdea06f268c205c5fe7340199d7bb9cfa4328d392a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4bb4a9096c4dbbad8e17643759a141c31b9491bc8fc0385f73093aadfe46a4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb4a9096c4dbbad8e17643759a141c31b9491bc8fc0385f73093aadfe46a4a9->enter($__internal_4bb4a9096c4dbbad8e17643759a141c31b9491bc8fc0385f73093aadfe46a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4bb4a9096c4dbbad8e17643759a141c31b9491bc8fc0385f73093aadfe46a4a9->leave($__internal_4bb4a9096c4dbbad8e17643759a141c31b9491bc8fc0385f73093aadfe46a4a9_prof);

        
        $__internal_8bad143c2a96f5b18b3bcdea06f268c205c5fe7340199d7bb9cfa4328d392a78->leave($__internal_8bad143c2a96f5b18b3bcdea06f268c205c5fe7340199d7bb9cfa4328d392a78_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6bbe0fb674ae5f2746a6940275f695ef31a2ce6f4407ecb14fa9af5b741ff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bbe0fb674ae5f2746a6940275f695ef31a2ce6f4407ecb14fa9af5b741ff07->enter($__internal_e6bbe0fb674ae5f2746a6940275f695ef31a2ce6f4407ecb14fa9af5b741ff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d80fef8ffcd0790185dc5e90c36a59b4efd9f739a680e0230f1e94051613a6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80fef8ffcd0790185dc5e90c36a59b4efd9f739a680e0230f1e94051613a6c3->enter($__internal_d80fef8ffcd0790185dc5e90c36a59b4efd9f739a680e0230f1e94051613a6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d80fef8ffcd0790185dc5e90c36a59b4efd9f739a680e0230f1e94051613a6c3->leave($__internal_d80fef8ffcd0790185dc5e90c36a59b4efd9f739a680e0230f1e94051613a6c3_prof);

        
        $__internal_e6bbe0fb674ae5f2746a6940275f695ef31a2ce6f4407ecb14fa9af5b741ff07->leave($__internal_e6bbe0fb674ae5f2746a6940275f695ef31a2ce6f4407ecb14fa9af5b741ff07_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa3ff7777fa63cf55b96ba3532d4c0ade6f39d8607a96ca535c4752b53796336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3ff7777fa63cf55b96ba3532d4c0ade6f39d8607a96ca535c4752b53796336->enter($__internal_aa3ff7777fa63cf55b96ba3532d4c0ade6f39d8607a96ca535c4752b53796336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef53e98aadd798279fb225b028cf11b29a89e083dfca53f97dde33bf940510e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef53e98aadd798279fb225b028cf11b29a89e083dfca53f97dde33bf940510e7->enter($__internal_ef53e98aadd798279fb225b028cf11b29a89e083dfca53f97dde33bf940510e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ef53e98aadd798279fb225b028cf11b29a89e083dfca53f97dde33bf940510e7->leave($__internal_ef53e98aadd798279fb225b028cf11b29a89e083dfca53f97dde33bf940510e7_prof);

        
        $__internal_aa3ff7777fa63cf55b96ba3532d4c0ade6f39d8607a96ca535c4752b53796336->leave($__internal_aa3ff7777fa63cf55b96ba3532d4c0ade6f39d8607a96ca535c4752b53796336_prof);

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

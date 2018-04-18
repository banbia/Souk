<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a7f7c16e6f05b977f0db82be9c73d78578135e1950cfdc30f573a8acef134093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d455578e9e77909050294a1f19b26d47edce7be1077877d910cdb9ea0c12068a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d455578e9e77909050294a1f19b26d47edce7be1077877d910cdb9ea0c12068a->enter($__internal_d455578e9e77909050294a1f19b26d47edce7be1077877d910cdb9ea0c12068a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e6bfec1b1d4c691dd480ca2a40d2cd08464a3c6eea07596819cc2548399f52b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bfec1b1d4c691dd480ca2a40d2cd08464a3c6eea07596819cc2548399f52b7->enter($__internal_e6bfec1b1d4c691dd480ca2a40d2cd08464a3c6eea07596819cc2548399f52b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d455578e9e77909050294a1f19b26d47edce7be1077877d910cdb9ea0c12068a->leave($__internal_d455578e9e77909050294a1f19b26d47edce7be1077877d910cdb9ea0c12068a_prof);

        
        $__internal_e6bfec1b1d4c691dd480ca2a40d2cd08464a3c6eea07596819cc2548399f52b7->leave($__internal_e6bfec1b1d4c691dd480ca2a40d2cd08464a3c6eea07596819cc2548399f52b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_debb698a85b83f4b2718e6b83d6df49b1a5bac74a905378e4acb90cfe4633f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_debb698a85b83f4b2718e6b83d6df49b1a5bac74a905378e4acb90cfe4633f98->enter($__internal_debb698a85b83f4b2718e6b83d6df49b1a5bac74a905378e4acb90cfe4633f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_522f9006a99ac760f49759090644a321f03b901e3b4b0a6479289c99193078d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522f9006a99ac760f49759090644a321f03b901e3b4b0a6479289c99193078d0->enter($__internal_522f9006a99ac760f49759090644a321f03b901e3b4b0a6479289c99193078d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_522f9006a99ac760f49759090644a321f03b901e3b4b0a6479289c99193078d0->leave($__internal_522f9006a99ac760f49759090644a321f03b901e3b4b0a6479289c99193078d0_prof);

        
        $__internal_debb698a85b83f4b2718e6b83d6df49b1a5bac74a905378e4acb90cfe4633f98->leave($__internal_debb698a85b83f4b2718e6b83d6df49b1a5bac74a905378e4acb90cfe4633f98_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f0823891733025696094371452dc90090dc6da5e927a7eed032ceae300ad205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0823891733025696094371452dc90090dc6da5e927a7eed032ceae300ad205->enter($__internal_8f0823891733025696094371452dc90090dc6da5e927a7eed032ceae300ad205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb4660d24ff5798e8935b42981270fb6550239f05916e8e5e27c077b9e6a0bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4660d24ff5798e8935b42981270fb6550239f05916e8e5e27c077b9e6a0bbb->enter($__internal_bb4660d24ff5798e8935b42981270fb6550239f05916e8e5e27c077b9e6a0bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bb4660d24ff5798e8935b42981270fb6550239f05916e8e5e27c077b9e6a0bbb->leave($__internal_bb4660d24ff5798e8935b42981270fb6550239f05916e8e5e27c077b9e6a0bbb_prof);

        
        $__internal_8f0823891733025696094371452dc90090dc6da5e927a7eed032ceae300ad205->leave($__internal_8f0823891733025696094371452dc90090dc6da5e927a7eed032ceae300ad205_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dee80416f3908ddf8cb64af0e7f9080937802894314688359db4ef42000fa30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee80416f3908ddf8cb64af0e7f9080937802894314688359db4ef42000fa30d->enter($__internal_dee80416f3908ddf8cb64af0e7f9080937802894314688359db4ef42000fa30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe2228b301c80839a92fdb1dfabee92fae09fc98db7eb30b8d2afb1541ed37c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2228b301c80839a92fdb1dfabee92fae09fc98db7eb30b8d2afb1541ed37c8->enter($__internal_fe2228b301c80839a92fdb1dfabee92fae09fc98db7eb30b8d2afb1541ed37c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe2228b301c80839a92fdb1dfabee92fae09fc98db7eb30b8d2afb1541ed37c8->leave($__internal_fe2228b301c80839a92fdb1dfabee92fae09fc98db7eb30b8d2afb1541ed37c8_prof);

        
        $__internal_dee80416f3908ddf8cb64af0e7f9080937802894314688359db4ef42000fa30d->leave($__internal_dee80416f3908ddf8cb64af0e7f9080937802894314688359db4ef42000fa30d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

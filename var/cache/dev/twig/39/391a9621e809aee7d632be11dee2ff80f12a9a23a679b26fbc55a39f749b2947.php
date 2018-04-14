<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bbc5bb4e996e66192582f2f3da59e2c0b9be6c22ca0b73bd7fb8e3f2a6007110 extends Twig_Template
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
        $__internal_9cc3549ec7e4c1c7908011a62ff04951516a83e68354c8b101036a6294b2125c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc3549ec7e4c1c7908011a62ff04951516a83e68354c8b101036a6294b2125c->enter($__internal_9cc3549ec7e4c1c7908011a62ff04951516a83e68354c8b101036a6294b2125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bf83cc735d5ce9db6737b61ac515b336d7e6d22ff23ac905713ce60bfd9516bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf83cc735d5ce9db6737b61ac515b336d7e6d22ff23ac905713ce60bfd9516bf->enter($__internal_bf83cc735d5ce9db6737b61ac515b336d7e6d22ff23ac905713ce60bfd9516bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9cc3549ec7e4c1c7908011a62ff04951516a83e68354c8b101036a6294b2125c->leave($__internal_9cc3549ec7e4c1c7908011a62ff04951516a83e68354c8b101036a6294b2125c_prof);

        
        $__internal_bf83cc735d5ce9db6737b61ac515b336d7e6d22ff23ac905713ce60bfd9516bf->leave($__internal_bf83cc735d5ce9db6737b61ac515b336d7e6d22ff23ac905713ce60bfd9516bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e611823e5a3b071005f3e42afafca7dc40a348cf4fda8978438bb15fd328b589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e611823e5a3b071005f3e42afafca7dc40a348cf4fda8978438bb15fd328b589->enter($__internal_e611823e5a3b071005f3e42afafca7dc40a348cf4fda8978438bb15fd328b589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d02ed62289a90d907c6d3bd8de4ebfda3e8f940aa2e7d979814820d3d40bc6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02ed62289a90d907c6d3bd8de4ebfda3e8f940aa2e7d979814820d3d40bc6eb->enter($__internal_d02ed62289a90d907c6d3bd8de4ebfda3e8f940aa2e7d979814820d3d40bc6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d02ed62289a90d907c6d3bd8de4ebfda3e8f940aa2e7d979814820d3d40bc6eb->leave($__internal_d02ed62289a90d907c6d3bd8de4ebfda3e8f940aa2e7d979814820d3d40bc6eb_prof);

        
        $__internal_e611823e5a3b071005f3e42afafca7dc40a348cf4fda8978438bb15fd328b589->leave($__internal_e611823e5a3b071005f3e42afafca7dc40a348cf4fda8978438bb15fd328b589_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a50bf501b20a429cdcb678839eb5cd607c575fcf6b54ecfe440cb7936c8b02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a50bf501b20a429cdcb678839eb5cd607c575fcf6b54ecfe440cb7936c8b02b->enter($__internal_1a50bf501b20a429cdcb678839eb5cd607c575fcf6b54ecfe440cb7936c8b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b150b5196a437e86e2b7757b903bfa7cedefaceef7f5e9ef609bf169028a22ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b150b5196a437e86e2b7757b903bfa7cedefaceef7f5e9ef609bf169028a22ad->enter($__internal_b150b5196a437e86e2b7757b903bfa7cedefaceef7f5e9ef609bf169028a22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b150b5196a437e86e2b7757b903bfa7cedefaceef7f5e9ef609bf169028a22ad->leave($__internal_b150b5196a437e86e2b7757b903bfa7cedefaceef7f5e9ef609bf169028a22ad_prof);

        
        $__internal_1a50bf501b20a429cdcb678839eb5cd607c575fcf6b54ecfe440cb7936c8b02b->leave($__internal_1a50bf501b20a429cdcb678839eb5cd607c575fcf6b54ecfe440cb7936c8b02b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0acb464c335965010bfee94cdc8823d6bc026640a94e4b6c51a65761d8123b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acb464c335965010bfee94cdc8823d6bc026640a94e4b6c51a65761d8123b36->enter($__internal_0acb464c335965010bfee94cdc8823d6bc026640a94e4b6c51a65761d8123b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a45f95da36ea063058a992b4f2f93a2c0d8cfecdfc0fd90cc39e91e504b518a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45f95da36ea063058a992b4f2f93a2c0d8cfecdfc0fd90cc39e91e504b518a6->enter($__internal_a45f95da36ea063058a992b4f2f93a2c0d8cfecdfc0fd90cc39e91e504b518a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a45f95da36ea063058a992b4f2f93a2c0d8cfecdfc0fd90cc39e91e504b518a6->leave($__internal_a45f95da36ea063058a992b4f2f93a2c0d8cfecdfc0fd90cc39e91e504b518a6_prof);

        
        $__internal_0acb464c335965010bfee94cdc8823d6bc026640a94e4b6c51a65761d8123b36->leave($__internal_0acb464c335965010bfee94cdc8823d6bc026640a94e4b6c51a65761d8123b36_prof);

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

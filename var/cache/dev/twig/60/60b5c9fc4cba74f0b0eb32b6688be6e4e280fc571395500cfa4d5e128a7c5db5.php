<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_456b2cca48e932cc5ec70b790d264e15e0ee4c06c52928dd8e7b62e0dbbfef5e extends Twig_Template
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
        $__internal_939bacd4a597eb118500e5adfb550fffa4147bced1596cf7a6ce475272fcbfa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939bacd4a597eb118500e5adfb550fffa4147bced1596cf7a6ce475272fcbfa6->enter($__internal_939bacd4a597eb118500e5adfb550fffa4147bced1596cf7a6ce475272fcbfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_356e024b4a00dcd2aaf4f6802e108b42c787f1b4574315a0bfd123b7e87800bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356e024b4a00dcd2aaf4f6802e108b42c787f1b4574315a0bfd123b7e87800bd->enter($__internal_356e024b4a00dcd2aaf4f6802e108b42c787f1b4574315a0bfd123b7e87800bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_939bacd4a597eb118500e5adfb550fffa4147bced1596cf7a6ce475272fcbfa6->leave($__internal_939bacd4a597eb118500e5adfb550fffa4147bced1596cf7a6ce475272fcbfa6_prof);

        
        $__internal_356e024b4a00dcd2aaf4f6802e108b42c787f1b4574315a0bfd123b7e87800bd->leave($__internal_356e024b4a00dcd2aaf4f6802e108b42c787f1b4574315a0bfd123b7e87800bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1955f74a77d72378295344e2959b906bb909d7d63b1525cfa6daa99bc6d9cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1955f74a77d72378295344e2959b906bb909d7d63b1525cfa6daa99bc6d9cd4e->enter($__internal_1955f74a77d72378295344e2959b906bb909d7d63b1525cfa6daa99bc6d9cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c53e3ca953b68b014fb263aa440797e2f14fb56a2e2c9391e6e73a33ef74f095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53e3ca953b68b014fb263aa440797e2f14fb56a2e2c9391e6e73a33ef74f095->enter($__internal_c53e3ca953b68b014fb263aa440797e2f14fb56a2e2c9391e6e73a33ef74f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c53e3ca953b68b014fb263aa440797e2f14fb56a2e2c9391e6e73a33ef74f095->leave($__internal_c53e3ca953b68b014fb263aa440797e2f14fb56a2e2c9391e6e73a33ef74f095_prof);

        
        $__internal_1955f74a77d72378295344e2959b906bb909d7d63b1525cfa6daa99bc6d9cd4e->leave($__internal_1955f74a77d72378295344e2959b906bb909d7d63b1525cfa6daa99bc6d9cd4e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1ed9df25a18c403c47d7b347beea5ac25dbe29de2f01d313b88a58d84bc44be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ed9df25a18c403c47d7b347beea5ac25dbe29de2f01d313b88a58d84bc44be->enter($__internal_a1ed9df25a18c403c47d7b347beea5ac25dbe29de2f01d313b88a58d84bc44be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4278e8e7a1af98dfeb065e32b4e58d3bf24d6df0ac4c57413dde00e2c3ce6f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4278e8e7a1af98dfeb065e32b4e58d3bf24d6df0ac4c57413dde00e2c3ce6f0b->enter($__internal_4278e8e7a1af98dfeb065e32b4e58d3bf24d6df0ac4c57413dde00e2c3ce6f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4278e8e7a1af98dfeb065e32b4e58d3bf24d6df0ac4c57413dde00e2c3ce6f0b->leave($__internal_4278e8e7a1af98dfeb065e32b4e58d3bf24d6df0ac4c57413dde00e2c3ce6f0b_prof);

        
        $__internal_a1ed9df25a18c403c47d7b347beea5ac25dbe29de2f01d313b88a58d84bc44be->leave($__internal_a1ed9df25a18c403c47d7b347beea5ac25dbe29de2f01d313b88a58d84bc44be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_110adc07dd5d82273d8703c988c50c9c7c4d9771d9c6b350f45f6bb16438e8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110adc07dd5d82273d8703c988c50c9c7c4d9771d9c6b350f45f6bb16438e8bd->enter($__internal_110adc07dd5d82273d8703c988c50c9c7c4d9771d9c6b350f45f6bb16438e8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5037a89aa4a1c61dd907027e51f9d2893d0dedf1632d5a2df8fa2b6d9be93d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5037a89aa4a1c61dd907027e51f9d2893d0dedf1632d5a2df8fa2b6d9be93d24->enter($__internal_5037a89aa4a1c61dd907027e51f9d2893d0dedf1632d5a2df8fa2b6d9be93d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5037a89aa4a1c61dd907027e51f9d2893d0dedf1632d5a2df8fa2b6d9be93d24->leave($__internal_5037a89aa4a1c61dd907027e51f9d2893d0dedf1632d5a2df8fa2b6d9be93d24_prof);

        
        $__internal_110adc07dd5d82273d8703c988c50c9c7c4d9771d9c6b350f45f6bb16438e8bd->leave($__internal_110adc07dd5d82273d8703c988c50c9c7c4d9771d9c6b350f45f6bb16438e8bd_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

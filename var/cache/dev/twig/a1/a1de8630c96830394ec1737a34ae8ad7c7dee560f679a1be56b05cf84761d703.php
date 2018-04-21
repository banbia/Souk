<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_025f66891b599421d45222dab81ae884424d548870de52e74488c9d9172503ad extends Twig_Template
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
        $__internal_f3c5ec46888c9aaeadf20a16b8493df97e241d772c09d209ac6be2efafc2f564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c5ec46888c9aaeadf20a16b8493df97e241d772c09d209ac6be2efafc2f564->enter($__internal_f3c5ec46888c9aaeadf20a16b8493df97e241d772c09d209ac6be2efafc2f564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fe57dc163761dfd2f15dc8c98215776d629da29bcebff36e2b1dd9219dbed60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe57dc163761dfd2f15dc8c98215776d629da29bcebff36e2b1dd9219dbed60c->enter($__internal_fe57dc163761dfd2f15dc8c98215776d629da29bcebff36e2b1dd9219dbed60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f3c5ec46888c9aaeadf20a16b8493df97e241d772c09d209ac6be2efafc2f564->leave($__internal_f3c5ec46888c9aaeadf20a16b8493df97e241d772c09d209ac6be2efafc2f564_prof);

        
        $__internal_fe57dc163761dfd2f15dc8c98215776d629da29bcebff36e2b1dd9219dbed60c->leave($__internal_fe57dc163761dfd2f15dc8c98215776d629da29bcebff36e2b1dd9219dbed60c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e457554390cee1aa97d3657065b22acd3a5c101ec2e4564c823514dc79de549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e457554390cee1aa97d3657065b22acd3a5c101ec2e4564c823514dc79de549->enter($__internal_6e457554390cee1aa97d3657065b22acd3a5c101ec2e4564c823514dc79de549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f662fa5b5897a3881adcd78a3efc62a5cf3755be383a31e89c9e1c0186b6fa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f662fa5b5897a3881adcd78a3efc62a5cf3755be383a31e89c9e1c0186b6fa3e->enter($__internal_f662fa5b5897a3881adcd78a3efc62a5cf3755be383a31e89c9e1c0186b6fa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f662fa5b5897a3881adcd78a3efc62a5cf3755be383a31e89c9e1c0186b6fa3e->leave($__internal_f662fa5b5897a3881adcd78a3efc62a5cf3755be383a31e89c9e1c0186b6fa3e_prof);

        
        $__internal_6e457554390cee1aa97d3657065b22acd3a5c101ec2e4564c823514dc79de549->leave($__internal_6e457554390cee1aa97d3657065b22acd3a5c101ec2e4564c823514dc79de549_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e095c78bf1c7312198813dc1f48a0c8355d8f314e2783ae02b964e7d630ee70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e095c78bf1c7312198813dc1f48a0c8355d8f314e2783ae02b964e7d630ee70->enter($__internal_7e095c78bf1c7312198813dc1f48a0c8355d8f314e2783ae02b964e7d630ee70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_521500511da5061c9f5b0ce49375880dc4f1266e37dc7496e4348cddc28a0987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521500511da5061c9f5b0ce49375880dc4f1266e37dc7496e4348cddc28a0987->enter($__internal_521500511da5061c9f5b0ce49375880dc4f1266e37dc7496e4348cddc28a0987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_521500511da5061c9f5b0ce49375880dc4f1266e37dc7496e4348cddc28a0987->leave($__internal_521500511da5061c9f5b0ce49375880dc4f1266e37dc7496e4348cddc28a0987_prof);

        
        $__internal_7e095c78bf1c7312198813dc1f48a0c8355d8f314e2783ae02b964e7d630ee70->leave($__internal_7e095c78bf1c7312198813dc1f48a0c8355d8f314e2783ae02b964e7d630ee70_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f10570fe84f19a2e140d9a5f79a94f513185c93c8701061b133f5efd891f9589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10570fe84f19a2e140d9a5f79a94f513185c93c8701061b133f5efd891f9589->enter($__internal_f10570fe84f19a2e140d9a5f79a94f513185c93c8701061b133f5efd891f9589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83ee98ba2b987c8478b37218f08f378794e88a3f9fb2889d463740aa7083dd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ee98ba2b987c8478b37218f08f378794e88a3f9fb2889d463740aa7083dd85->enter($__internal_83ee98ba2b987c8478b37218f08f378794e88a3f9fb2889d463740aa7083dd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83ee98ba2b987c8478b37218f08f378794e88a3f9fb2889d463740aa7083dd85->leave($__internal_83ee98ba2b987c8478b37218f08f378794e88a3f9fb2889d463740aa7083dd85_prof);

        
        $__internal_f10570fe84f19a2e140d9a5f79a94f513185c93c8701061b133f5efd891f9589->leave($__internal_f10570fe84f19a2e140d9a5f79a94f513185c93c8701061b133f5efd891f9589_prof);

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
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

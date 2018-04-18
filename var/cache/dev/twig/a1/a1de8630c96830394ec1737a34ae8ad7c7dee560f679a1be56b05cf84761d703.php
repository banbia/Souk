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
        $__internal_8f9a27a4d80ef85e4a80a648d1e282c0da2ad0271db3bc440855439d99ba8a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9a27a4d80ef85e4a80a648d1e282c0da2ad0271db3bc440855439d99ba8a9c->enter($__internal_8f9a27a4d80ef85e4a80a648d1e282c0da2ad0271db3bc440855439d99ba8a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_78d1a1e9ff826638056683ea0607999522cd71ad9d880e6d084143cf9838dc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d1a1e9ff826638056683ea0607999522cd71ad9d880e6d084143cf9838dc23->enter($__internal_78d1a1e9ff826638056683ea0607999522cd71ad9d880e6d084143cf9838dc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8f9a27a4d80ef85e4a80a648d1e282c0da2ad0271db3bc440855439d99ba8a9c->leave($__internal_8f9a27a4d80ef85e4a80a648d1e282c0da2ad0271db3bc440855439d99ba8a9c_prof);

        
        $__internal_78d1a1e9ff826638056683ea0607999522cd71ad9d880e6d084143cf9838dc23->leave($__internal_78d1a1e9ff826638056683ea0607999522cd71ad9d880e6d084143cf9838dc23_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee2f122b857b6d13c26d2fed334db94ba3a80516763c1c315953f3179f937a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2f122b857b6d13c26d2fed334db94ba3a80516763c1c315953f3179f937a02->enter($__internal_ee2f122b857b6d13c26d2fed334db94ba3a80516763c1c315953f3179f937a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f362e40a30f825821f790aaa8b3d87ed35d028d8746d4542dc917d87e36b73fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f362e40a30f825821f790aaa8b3d87ed35d028d8746d4542dc917d87e36b73fd->enter($__internal_f362e40a30f825821f790aaa8b3d87ed35d028d8746d4542dc917d87e36b73fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f362e40a30f825821f790aaa8b3d87ed35d028d8746d4542dc917d87e36b73fd->leave($__internal_f362e40a30f825821f790aaa8b3d87ed35d028d8746d4542dc917d87e36b73fd_prof);

        
        $__internal_ee2f122b857b6d13c26d2fed334db94ba3a80516763c1c315953f3179f937a02->leave($__internal_ee2f122b857b6d13c26d2fed334db94ba3a80516763c1c315953f3179f937a02_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_94ed1af3d7cc4cece159579a89f805b9cc184c89579146e7ba44c92bf9623601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ed1af3d7cc4cece159579a89f805b9cc184c89579146e7ba44c92bf9623601->enter($__internal_94ed1af3d7cc4cece159579a89f805b9cc184c89579146e7ba44c92bf9623601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1afe97fa751c33213b9e4e891dc988270c26760991a3cbfb24bedb589405956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1afe97fa751c33213b9e4e891dc988270c26760991a3cbfb24bedb589405956->enter($__internal_e1afe97fa751c33213b9e4e891dc988270c26760991a3cbfb24bedb589405956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e1afe97fa751c33213b9e4e891dc988270c26760991a3cbfb24bedb589405956->leave($__internal_e1afe97fa751c33213b9e4e891dc988270c26760991a3cbfb24bedb589405956_prof);

        
        $__internal_94ed1af3d7cc4cece159579a89f805b9cc184c89579146e7ba44c92bf9623601->leave($__internal_94ed1af3d7cc4cece159579a89f805b9cc184c89579146e7ba44c92bf9623601_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a8c8231c28775daaf78f5669861d1f2facd7387a97b8f820cd6582e10410432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8c8231c28775daaf78f5669861d1f2facd7387a97b8f820cd6582e10410432->enter($__internal_4a8c8231c28775daaf78f5669861d1f2facd7387a97b8f820cd6582e10410432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_364cd2d5c2a567fa554a7427e26e7a710c9fce1ac71247d76478088dfa2449a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364cd2d5c2a567fa554a7427e26e7a710c9fce1ac71247d76478088dfa2449a1->enter($__internal_364cd2d5c2a567fa554a7427e26e7a710c9fce1ac71247d76478088dfa2449a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_364cd2d5c2a567fa554a7427e26e7a710c9fce1ac71247d76478088dfa2449a1->leave($__internal_364cd2d5c2a567fa554a7427e26e7a710c9fce1ac71247d76478088dfa2449a1_prof);

        
        $__internal_4a8c8231c28775daaf78f5669861d1f2facd7387a97b8f820cd6582e10410432->leave($__internal_4a8c8231c28775daaf78f5669861d1f2facd7387a97b8f820cd6582e10410432_prof);

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

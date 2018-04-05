<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_38f100b897a1e20fdd7dcdb0358cd80e5bb99d5fbc955394c5ebf46d5d26a87e extends Twig_Template
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
        $__internal_2a2ae97ceaace3aa242335593cf9e6a20165b42382e0592110dc7d2ef1b30fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2ae97ceaace3aa242335593cf9e6a20165b42382e0592110dc7d2ef1b30fbd->enter($__internal_2a2ae97ceaace3aa242335593cf9e6a20165b42382e0592110dc7d2ef1b30fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9807152bfbcc435b45ab55b470ba82ea207a9a694cc14238419f134e581f050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9807152bfbcc435b45ab55b470ba82ea207a9a694cc14238419f134e581f050d->enter($__internal_9807152bfbcc435b45ab55b470ba82ea207a9a694cc14238419f134e581f050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2a2ae97ceaace3aa242335593cf9e6a20165b42382e0592110dc7d2ef1b30fbd->leave($__internal_2a2ae97ceaace3aa242335593cf9e6a20165b42382e0592110dc7d2ef1b30fbd_prof);

        
        $__internal_9807152bfbcc435b45ab55b470ba82ea207a9a694cc14238419f134e581f050d->leave($__internal_9807152bfbcc435b45ab55b470ba82ea207a9a694cc14238419f134e581f050d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43c44d8204ffa05d512da7afca482a7b7b5d5e228e0a4c6eb9519443f98739d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c44d8204ffa05d512da7afca482a7b7b5d5e228e0a4c6eb9519443f98739d2->enter($__internal_43c44d8204ffa05d512da7afca482a7b7b5d5e228e0a4c6eb9519443f98739d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93966ed2382da617a8cd59c71fe4ec47d7be7f36113ed3148d9b4e55a44dafa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93966ed2382da617a8cd59c71fe4ec47d7be7f36113ed3148d9b4e55a44dafa9->enter($__internal_93966ed2382da617a8cd59c71fe4ec47d7be7f36113ed3148d9b4e55a44dafa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_93966ed2382da617a8cd59c71fe4ec47d7be7f36113ed3148d9b4e55a44dafa9->leave($__internal_93966ed2382da617a8cd59c71fe4ec47d7be7f36113ed3148d9b4e55a44dafa9_prof);

        
        $__internal_43c44d8204ffa05d512da7afca482a7b7b5d5e228e0a4c6eb9519443f98739d2->leave($__internal_43c44d8204ffa05d512da7afca482a7b7b5d5e228e0a4c6eb9519443f98739d2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a47cfd79aa738ee137f57500e9cb81b5ad08c9fcfd75064c6f179811077e5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a47cfd79aa738ee137f57500e9cb81b5ad08c9fcfd75064c6f179811077e5af->enter($__internal_8a47cfd79aa738ee137f57500e9cb81b5ad08c9fcfd75064c6f179811077e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5240b11aaa804519252c0ec52cbc6fd7ea5b2e5bbd811ceb003a9c411899c369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5240b11aaa804519252c0ec52cbc6fd7ea5b2e5bbd811ceb003a9c411899c369->enter($__internal_5240b11aaa804519252c0ec52cbc6fd7ea5b2e5bbd811ceb003a9c411899c369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5240b11aaa804519252c0ec52cbc6fd7ea5b2e5bbd811ceb003a9c411899c369->leave($__internal_5240b11aaa804519252c0ec52cbc6fd7ea5b2e5bbd811ceb003a9c411899c369_prof);

        
        $__internal_8a47cfd79aa738ee137f57500e9cb81b5ad08c9fcfd75064c6f179811077e5af->leave($__internal_8a47cfd79aa738ee137f57500e9cb81b5ad08c9fcfd75064c6f179811077e5af_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a83272f76762096271981cf037ebdca24d6fce0d932725d94d2d64ffe40f7528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83272f76762096271981cf037ebdca24d6fce0d932725d94d2d64ffe40f7528->enter($__internal_a83272f76762096271981cf037ebdca24d6fce0d932725d94d2d64ffe40f7528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b34840ea80cce8e92d6d82706a638c3f2720be64da0152f03408ef47b8028d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b34840ea80cce8e92d6d82706a638c3f2720be64da0152f03408ef47b8028d0->enter($__internal_0b34840ea80cce8e92d6d82706a638c3f2720be64da0152f03408ef47b8028d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b34840ea80cce8e92d6d82706a638c3f2720be64da0152f03408ef47b8028d0->leave($__internal_0b34840ea80cce8e92d6d82706a638c3f2720be64da0152f03408ef47b8028d0_prof);

        
        $__internal_a83272f76762096271981cf037ebdca24d6fce0d932725d94d2d64ffe40f7528->leave($__internal_a83272f76762096271981cf037ebdca24d6fce0d932725d94d2d64ffe40f7528_prof);

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

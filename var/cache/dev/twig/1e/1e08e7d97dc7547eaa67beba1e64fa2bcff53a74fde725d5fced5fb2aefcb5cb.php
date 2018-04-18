<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_dabd4f54700857771f5b195b8793e3b025bafd5a4b62698fd8882431a8a2f0fe extends Twig_Template
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
        $__internal_402b854ffcaf026f3ec17176f3548c9ae2c9353839d1a27c735592ee28ab1c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402b854ffcaf026f3ec17176f3548c9ae2c9353839d1a27c735592ee28ab1c6d->enter($__internal_402b854ffcaf026f3ec17176f3548c9ae2c9353839d1a27c735592ee28ab1c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cca0fbce151d407b9014f3c348e91fa180e04cd5326741626941048001d9a58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca0fbce151d407b9014f3c348e91fa180e04cd5326741626941048001d9a58f->enter($__internal_cca0fbce151d407b9014f3c348e91fa180e04cd5326741626941048001d9a58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_402b854ffcaf026f3ec17176f3548c9ae2c9353839d1a27c735592ee28ab1c6d->leave($__internal_402b854ffcaf026f3ec17176f3548c9ae2c9353839d1a27c735592ee28ab1c6d_prof);

        
        $__internal_cca0fbce151d407b9014f3c348e91fa180e04cd5326741626941048001d9a58f->leave($__internal_cca0fbce151d407b9014f3c348e91fa180e04cd5326741626941048001d9a58f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_789e0f800ee9cc0a37a9cf35390ae3c8cd9bdc6c3b96d6761799d1079dee14d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789e0f800ee9cc0a37a9cf35390ae3c8cd9bdc6c3b96d6761799d1079dee14d3->enter($__internal_789e0f800ee9cc0a37a9cf35390ae3c8cd9bdc6c3b96d6761799d1079dee14d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cf09ba32a5e8d09e83179b9a20ab73bc5d7376844b56380d38e431d02855ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf09ba32a5e8d09e83179b9a20ab73bc5d7376844b56380d38e431d02855ca9->enter($__internal_4cf09ba32a5e8d09e83179b9a20ab73bc5d7376844b56380d38e431d02855ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4cf09ba32a5e8d09e83179b9a20ab73bc5d7376844b56380d38e431d02855ca9->leave($__internal_4cf09ba32a5e8d09e83179b9a20ab73bc5d7376844b56380d38e431d02855ca9_prof);

        
        $__internal_789e0f800ee9cc0a37a9cf35390ae3c8cd9bdc6c3b96d6761799d1079dee14d3->leave($__internal_789e0f800ee9cc0a37a9cf35390ae3c8cd9bdc6c3b96d6761799d1079dee14d3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_70fec499602e71c4c78a18c19d26bf18a10df3e3f4b7dcc8d0c3db902e5f74bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fec499602e71c4c78a18c19d26bf18a10df3e3f4b7dcc8d0c3db902e5f74bd->enter($__internal_70fec499602e71c4c78a18c19d26bf18a10df3e3f4b7dcc8d0c3db902e5f74bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9f63e012186f572710823b0283188803f71f1b64a1df53e203d55e452b3acc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f63e012186f572710823b0283188803f71f1b64a1df53e203d55e452b3acc7->enter($__internal_b9f63e012186f572710823b0283188803f71f1b64a1df53e203d55e452b3acc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b9f63e012186f572710823b0283188803f71f1b64a1df53e203d55e452b3acc7->leave($__internal_b9f63e012186f572710823b0283188803f71f1b64a1df53e203d55e452b3acc7_prof);

        
        $__internal_70fec499602e71c4c78a18c19d26bf18a10df3e3f4b7dcc8d0c3db902e5f74bd->leave($__internal_70fec499602e71c4c78a18c19d26bf18a10df3e3f4b7dcc8d0c3db902e5f74bd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c84eb45091a23791f8772b867c50ff8feae4d575e23498fd6e4d387e62ee711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c84eb45091a23791f8772b867c50ff8feae4d575e23498fd6e4d387e62ee711->enter($__internal_8c84eb45091a23791f8772b867c50ff8feae4d575e23498fd6e4d387e62ee711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b94884139cfeddb3eba952d66376d100afad82f12c29219632f896e2d0e80fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94884139cfeddb3eba952d66376d100afad82f12c29219632f896e2d0e80fea->enter($__internal_b94884139cfeddb3eba952d66376d100afad82f12c29219632f896e2d0e80fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b94884139cfeddb3eba952d66376d100afad82f12c29219632f896e2d0e80fea->leave($__internal_b94884139cfeddb3eba952d66376d100afad82f12c29219632f896e2d0e80fea_prof);

        
        $__internal_8c84eb45091a23791f8772b867c50ff8feae4d575e23498fd6e4d387e62ee711->leave($__internal_8c84eb45091a23791f8772b867c50ff8feae4d575e23498fd6e4d387e62ee711_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

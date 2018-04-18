<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5ce10fffc36cf3b1e282e0e1c3af88e1f130fd8af3dcc920f35ad86bacc2d01b extends Twig_Template
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
        $__internal_870a55713e92b292aa75559782201354c3b37bf8fd218694b1612387f87b5602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870a55713e92b292aa75559782201354c3b37bf8fd218694b1612387f87b5602->enter($__internal_870a55713e92b292aa75559782201354c3b37bf8fd218694b1612387f87b5602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_485e2de890ec874aac76efc0845a834777a865c3f542b0f06830980d3b16136e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485e2de890ec874aac76efc0845a834777a865c3f542b0f06830980d3b16136e->enter($__internal_485e2de890ec874aac76efc0845a834777a865c3f542b0f06830980d3b16136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_870a55713e92b292aa75559782201354c3b37bf8fd218694b1612387f87b5602->leave($__internal_870a55713e92b292aa75559782201354c3b37bf8fd218694b1612387f87b5602_prof);

        
        $__internal_485e2de890ec874aac76efc0845a834777a865c3f542b0f06830980d3b16136e->leave($__internal_485e2de890ec874aac76efc0845a834777a865c3f542b0f06830980d3b16136e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a18ba61d9ee02e05f99424e6c60e1e66f666c70045aa09a383b1bde4dcbd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a18ba61d9ee02e05f99424e6c60e1e66f666c70045aa09a383b1bde4dcbd70->enter($__internal_e8a18ba61d9ee02e05f99424e6c60e1e66f666c70045aa09a383b1bde4dcbd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdd858d59d2e50f83101c117df13ffdbb36b85994a3bba7e58f7153c5ca961b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd858d59d2e50f83101c117df13ffdbb36b85994a3bba7e58f7153c5ca961b5->enter($__internal_bdd858d59d2e50f83101c117df13ffdbb36b85994a3bba7e58f7153c5ca961b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bdd858d59d2e50f83101c117df13ffdbb36b85994a3bba7e58f7153c5ca961b5->leave($__internal_bdd858d59d2e50f83101c117df13ffdbb36b85994a3bba7e58f7153c5ca961b5_prof);

        
        $__internal_e8a18ba61d9ee02e05f99424e6c60e1e66f666c70045aa09a383b1bde4dcbd70->leave($__internal_e8a18ba61d9ee02e05f99424e6c60e1e66f666c70045aa09a383b1bde4dcbd70_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2648d2d73855cd16c09a162efdf731c2816a56cea2e7253605d93b822f185375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2648d2d73855cd16c09a162efdf731c2816a56cea2e7253605d93b822f185375->enter($__internal_2648d2d73855cd16c09a162efdf731c2816a56cea2e7253605d93b822f185375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_227ff9242c95facbf5755b3c3f65fe9aa6e08d545654525163dd24d8ff9293e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227ff9242c95facbf5755b3c3f65fe9aa6e08d545654525163dd24d8ff9293e4->enter($__internal_227ff9242c95facbf5755b3c3f65fe9aa6e08d545654525163dd24d8ff9293e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_227ff9242c95facbf5755b3c3f65fe9aa6e08d545654525163dd24d8ff9293e4->leave($__internal_227ff9242c95facbf5755b3c3f65fe9aa6e08d545654525163dd24d8ff9293e4_prof);

        
        $__internal_2648d2d73855cd16c09a162efdf731c2816a56cea2e7253605d93b822f185375->leave($__internal_2648d2d73855cd16c09a162efdf731c2816a56cea2e7253605d93b822f185375_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_59b0e13fa942e9134149d6f0b747b1af981ea626d6debf787429102b023e65de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b0e13fa942e9134149d6f0b747b1af981ea626d6debf787429102b023e65de->enter($__internal_59b0e13fa942e9134149d6f0b747b1af981ea626d6debf787429102b023e65de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac5923860beb52bfae77cef26be01556c72ce607f3ae5512c0fde434322e82bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5923860beb52bfae77cef26be01556c72ce607f3ae5512c0fde434322e82bd->enter($__internal_ac5923860beb52bfae77cef26be01556c72ce607f3ae5512c0fde434322e82bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac5923860beb52bfae77cef26be01556c72ce607f3ae5512c0fde434322e82bd->leave($__internal_ac5923860beb52bfae77cef26be01556c72ce607f3ae5512c0fde434322e82bd_prof);

        
        $__internal_59b0e13fa942e9134149d6f0b747b1af981ea626d6debf787429102b023e65de->leave($__internal_59b0e13fa942e9134149d6f0b747b1af981ea626d6debf787429102b023e65de_prof);

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

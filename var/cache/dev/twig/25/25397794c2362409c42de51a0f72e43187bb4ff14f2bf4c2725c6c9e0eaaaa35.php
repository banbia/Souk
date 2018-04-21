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
        $__internal_01ab2aa598c32bc3f68452607b185f1368dd6946a5b6d4283de422cc588292f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ab2aa598c32bc3f68452607b185f1368dd6946a5b6d4283de422cc588292f9->enter($__internal_01ab2aa598c32bc3f68452607b185f1368dd6946a5b6d4283de422cc588292f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_42b6ce01f0a5d7cae255475dafeb4888ed850c452bd4067083a59632bce178ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b6ce01f0a5d7cae255475dafeb4888ed850c452bd4067083a59632bce178ac->enter($__internal_42b6ce01f0a5d7cae255475dafeb4888ed850c452bd4067083a59632bce178ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_01ab2aa598c32bc3f68452607b185f1368dd6946a5b6d4283de422cc588292f9->leave($__internal_01ab2aa598c32bc3f68452607b185f1368dd6946a5b6d4283de422cc588292f9_prof);

        
        $__internal_42b6ce01f0a5d7cae255475dafeb4888ed850c452bd4067083a59632bce178ac->leave($__internal_42b6ce01f0a5d7cae255475dafeb4888ed850c452bd4067083a59632bce178ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8e001fff1c35841b1abd6a9c466631090f7a4352c9b5cd8ed711cf481a064c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e001fff1c35841b1abd6a9c466631090f7a4352c9b5cd8ed711cf481a064c3->enter($__internal_c8e001fff1c35841b1abd6a9c466631090f7a4352c9b5cd8ed711cf481a064c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d6d0aa322b33b3e79751e02716412111373c37be1aec6b5a0a0ec51c643a7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6d0aa322b33b3e79751e02716412111373c37be1aec6b5a0a0ec51c643a7fa->enter($__internal_3d6d0aa322b33b3e79751e02716412111373c37be1aec6b5a0a0ec51c643a7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d6d0aa322b33b3e79751e02716412111373c37be1aec6b5a0a0ec51c643a7fa->leave($__internal_3d6d0aa322b33b3e79751e02716412111373c37be1aec6b5a0a0ec51c643a7fa_prof);

        
        $__internal_c8e001fff1c35841b1abd6a9c466631090f7a4352c9b5cd8ed711cf481a064c3->leave($__internal_c8e001fff1c35841b1abd6a9c466631090f7a4352c9b5cd8ed711cf481a064c3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_51db28681c9ac1f4093f36c1e209703129267e334755a5a9720054b08c5abc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51db28681c9ac1f4093f36c1e209703129267e334755a5a9720054b08c5abc4e->enter($__internal_51db28681c9ac1f4093f36c1e209703129267e334755a5a9720054b08c5abc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c418ecebffad5c1184cae9408aeb5b772041acb06d97a3a7ce9d10897f439b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c418ecebffad5c1184cae9408aeb5b772041acb06d97a3a7ce9d10897f439b8d->enter($__internal_c418ecebffad5c1184cae9408aeb5b772041acb06d97a3a7ce9d10897f439b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c418ecebffad5c1184cae9408aeb5b772041acb06d97a3a7ce9d10897f439b8d->leave($__internal_c418ecebffad5c1184cae9408aeb5b772041acb06d97a3a7ce9d10897f439b8d_prof);

        
        $__internal_51db28681c9ac1f4093f36c1e209703129267e334755a5a9720054b08c5abc4e->leave($__internal_51db28681c9ac1f4093f36c1e209703129267e334755a5a9720054b08c5abc4e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b31078df17d645f1f2ac042d4ceb94c8ef87f1ae27a7cfedd401c7073f3e57ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31078df17d645f1f2ac042d4ceb94c8ef87f1ae27a7cfedd401c7073f3e57ee->enter($__internal_b31078df17d645f1f2ac042d4ceb94c8ef87f1ae27a7cfedd401c7073f3e57ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b45c2feec2471db742f17cba67918f25a9c8164cd232822fa67edbd3efc198c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b45c2feec2471db742f17cba67918f25a9c8164cd232822fa67edbd3efc198c->enter($__internal_5b45c2feec2471db742f17cba67918f25a9c8164cd232822fa67edbd3efc198c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b45c2feec2471db742f17cba67918f25a9c8164cd232822fa67edbd3efc198c->leave($__internal_5b45c2feec2471db742f17cba67918f25a9c8164cd232822fa67edbd3efc198c_prof);

        
        $__internal_b31078df17d645f1f2ac042d4ceb94c8ef87f1ae27a7cfedd401c7073f3e57ee->leave($__internal_b31078df17d645f1f2ac042d4ceb94c8ef87f1ae27a7cfedd401c7073f3e57ee_prof);

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

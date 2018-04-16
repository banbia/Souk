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
        $__internal_3fd05e887f70cd8cb0b487dd3e4bf53f0fee98f664dac0038ee785921419575f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd05e887f70cd8cb0b487dd3e4bf53f0fee98f664dac0038ee785921419575f->enter($__internal_3fd05e887f70cd8cb0b487dd3e4bf53f0fee98f664dac0038ee785921419575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d6f70ddfdd74c550ea0c7e2f0bde6b5dfba23da9f6eb8cbfe8c3120b4838d944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f70ddfdd74c550ea0c7e2f0bde6b5dfba23da9f6eb8cbfe8c3120b4838d944->enter($__internal_d6f70ddfdd74c550ea0c7e2f0bde6b5dfba23da9f6eb8cbfe8c3120b4838d944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3fd05e887f70cd8cb0b487dd3e4bf53f0fee98f664dac0038ee785921419575f->leave($__internal_3fd05e887f70cd8cb0b487dd3e4bf53f0fee98f664dac0038ee785921419575f_prof);

        
        $__internal_d6f70ddfdd74c550ea0c7e2f0bde6b5dfba23da9f6eb8cbfe8c3120b4838d944->leave($__internal_d6f70ddfdd74c550ea0c7e2f0bde6b5dfba23da9f6eb8cbfe8c3120b4838d944_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3dbc5fe3133be1e0178a98f71e4af6950f13532036822b85a7467564cb160cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3dbc5fe3133be1e0178a98f71e4af6950f13532036822b85a7467564cb160cd->enter($__internal_e3dbc5fe3133be1e0178a98f71e4af6950f13532036822b85a7467564cb160cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5ff710728ce311170fda064c2d896331c4d4c8813cbe4d0289948efbeaf0572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ff710728ce311170fda064c2d896331c4d4c8813cbe4d0289948efbeaf0572->enter($__internal_b5ff710728ce311170fda064c2d896331c4d4c8813cbe4d0289948efbeaf0572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b5ff710728ce311170fda064c2d896331c4d4c8813cbe4d0289948efbeaf0572->leave($__internal_b5ff710728ce311170fda064c2d896331c4d4c8813cbe4d0289948efbeaf0572_prof);

        
        $__internal_e3dbc5fe3133be1e0178a98f71e4af6950f13532036822b85a7467564cb160cd->leave($__internal_e3dbc5fe3133be1e0178a98f71e4af6950f13532036822b85a7467564cb160cd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2adb73f993eb6ea0ce82fcdbe2bd854064e7bb36e3377c42737dd652116afe10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adb73f993eb6ea0ce82fcdbe2bd854064e7bb36e3377c42737dd652116afe10->enter($__internal_2adb73f993eb6ea0ce82fcdbe2bd854064e7bb36e3377c42737dd652116afe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e4b25648482d1f41fb473bb11202a7cf29683dba90666d9a82c442598ea611c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4b25648482d1f41fb473bb11202a7cf29683dba90666d9a82c442598ea611c->enter($__internal_0e4b25648482d1f41fb473bb11202a7cf29683dba90666d9a82c442598ea611c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0e4b25648482d1f41fb473bb11202a7cf29683dba90666d9a82c442598ea611c->leave($__internal_0e4b25648482d1f41fb473bb11202a7cf29683dba90666d9a82c442598ea611c_prof);

        
        $__internal_2adb73f993eb6ea0ce82fcdbe2bd854064e7bb36e3377c42737dd652116afe10->leave($__internal_2adb73f993eb6ea0ce82fcdbe2bd854064e7bb36e3377c42737dd652116afe10_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca4fdb69d3958fec9448c86bbee7af4e0350db7ab09ede57e48ebf72a473bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca4fdb69d3958fec9448c86bbee7af4e0350db7ab09ede57e48ebf72a473bc7->enter($__internal_1ca4fdb69d3958fec9448c86bbee7af4e0350db7ab09ede57e48ebf72a473bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44b734770618d78f3ff1b401b0c228da2ce97fba63ecc71de1df6229469490a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b734770618d78f3ff1b401b0c228da2ce97fba63ecc71de1df6229469490a1->enter($__internal_44b734770618d78f3ff1b401b0c228da2ce97fba63ecc71de1df6229469490a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44b734770618d78f3ff1b401b0c228da2ce97fba63ecc71de1df6229469490a1->leave($__internal_44b734770618d78f3ff1b401b0c228da2ce97fba63ecc71de1df6229469490a1_prof);

        
        $__internal_1ca4fdb69d3958fec9448c86bbee7af4e0350db7ab09ede57e48ebf72a473bc7->leave($__internal_1ca4fdb69d3958fec9448c86bbee7af4e0350db7ab09ede57e48ebf72a473bc7_prof);

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

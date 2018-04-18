<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_b3538b575daa7f79e1f286a73eb80481719336da3bb7fd98bb606907b4558e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3538b575daa7f79e1f286a73eb80481719336da3bb7fd98bb606907b4558e43->enter($__internal_b3538b575daa7f79e1f286a73eb80481719336da3bb7fd98bb606907b4558e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_4800088045cc7e28d6a2834d4030b868b28c5a80eaea0ec15cfb49fd6bf1d4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4800088045cc7e28d6a2834d4030b868b28c5a80eaea0ec15cfb49fd6bf1d4cf->enter($__internal_4800088045cc7e28d6a2834d4030b868b28c5a80eaea0ec15cfb49fd6bf1d4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b3538b575daa7f79e1f286a73eb80481719336da3bb7fd98bb606907b4558e43->leave($__internal_b3538b575daa7f79e1f286a73eb80481719336da3bb7fd98bb606907b4558e43_prof);

        
        $__internal_4800088045cc7e28d6a2834d4030b868b28c5a80eaea0ec15cfb49fd6bf1d4cf->leave($__internal_4800088045cc7e28d6a2834d4030b868b28c5a80eaea0ec15cfb49fd6bf1d4cf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70511236db4cc1150e630f54db89c53bbe0d1755757856c532a44927a3cfe61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70511236db4cc1150e630f54db89c53bbe0d1755757856c532a44927a3cfe61e->enter($__internal_70511236db4cc1150e630f54db89c53bbe0d1755757856c532a44927a3cfe61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5917bf590e523e50b0b08565230763682f4d0816ba7b193d1b41c4683cba1d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5917bf590e523e50b0b08565230763682f4d0816ba7b193d1b41c4683cba1d14->enter($__internal_5917bf590e523e50b0b08565230763682f4d0816ba7b193d1b41c4683cba1d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5917bf590e523e50b0b08565230763682f4d0816ba7b193d1b41c4683cba1d14->leave($__internal_5917bf590e523e50b0b08565230763682f4d0816ba7b193d1b41c4683cba1d14_prof);

        
        $__internal_70511236db4cc1150e630f54db89c53bbe0d1755757856c532a44927a3cfe61e->leave($__internal_70511236db4cc1150e630f54db89c53bbe0d1755757856c532a44927a3cfe61e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f4af8fbeb188721be68b09bb77798e83abcab5263245a09f559dcb632257dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4af8fbeb188721be68b09bb77798e83abcab5263245a09f559dcb632257dd7->enter($__internal_3f4af8fbeb188721be68b09bb77798e83abcab5263245a09f559dcb632257dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ead7b5595487ddfe57d74f6b4adc702b043fb36c74909c8144ca9cd68e92f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ead7b5595487ddfe57d74f6b4adc702b043fb36c74909c8144ca9cd68e92f76->enter($__internal_8ead7b5595487ddfe57d74f6b4adc702b043fb36c74909c8144ca9cd68e92f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8ead7b5595487ddfe57d74f6b4adc702b043fb36c74909c8144ca9cd68e92f76->leave($__internal_8ead7b5595487ddfe57d74f6b4adc702b043fb36c74909c8144ca9cd68e92f76_prof);

        
        $__internal_3f4af8fbeb188721be68b09bb77798e83abcab5263245a09f559dcb632257dd7->leave($__internal_3f4af8fbeb188721be68b09bb77798e83abcab5263245a09f559dcb632257dd7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b6361faa9daeb3ab5385ab7acf655008a32c54640565d72159adf8ffd7754da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6361faa9daeb3ab5385ab7acf655008a32c54640565d72159adf8ffd7754da->enter($__internal_5b6361faa9daeb3ab5385ab7acf655008a32c54640565d72159adf8ffd7754da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c9cae896681d7b39fd15d8bda7a4825145a5ce66156a52453f14ceb238cfc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9cae896681d7b39fd15d8bda7a4825145a5ce66156a52453f14ceb238cfc28->enter($__internal_1c9cae896681d7b39fd15d8bda7a4825145a5ce66156a52453f14ceb238cfc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c9cae896681d7b39fd15d8bda7a4825145a5ce66156a52453f14ceb238cfc28->leave($__internal_1c9cae896681d7b39fd15d8bda7a4825145a5ce66156a52453f14ceb238cfc28_prof);

        
        $__internal_5b6361faa9daeb3ab5385ab7acf655008a32c54640565d72159adf8ffd7754da->leave($__internal_5b6361faa9daeb3ab5385ab7acf655008a32c54640565d72159adf8ffd7754da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

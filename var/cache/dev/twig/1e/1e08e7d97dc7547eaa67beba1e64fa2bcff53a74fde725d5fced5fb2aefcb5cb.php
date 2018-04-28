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
        $__internal_f49875cec790369d05fe92ac18ba9659acdc9019f80b7fd21d0b75a5f82c46f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49875cec790369d05fe92ac18ba9659acdc9019f80b7fd21d0b75a5f82c46f7->enter($__internal_f49875cec790369d05fe92ac18ba9659acdc9019f80b7fd21d0b75a5f82c46f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cf0eee9e863b8ad29993a3766ae442495e5b19167b81a4e647f5a15a9ca02756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0eee9e863b8ad29993a3766ae442495e5b19167b81a4e647f5a15a9ca02756->enter($__internal_cf0eee9e863b8ad29993a3766ae442495e5b19167b81a4e647f5a15a9ca02756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f49875cec790369d05fe92ac18ba9659acdc9019f80b7fd21d0b75a5f82c46f7->leave($__internal_f49875cec790369d05fe92ac18ba9659acdc9019f80b7fd21d0b75a5f82c46f7_prof);

        
        $__internal_cf0eee9e863b8ad29993a3766ae442495e5b19167b81a4e647f5a15a9ca02756->leave($__internal_cf0eee9e863b8ad29993a3766ae442495e5b19167b81a4e647f5a15a9ca02756_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_98b9e879c6338ea7b9d3d873bc518258518b61c1b3fe1be2abe48aa9d0bc2f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b9e879c6338ea7b9d3d873bc518258518b61c1b3fe1be2abe48aa9d0bc2f57->enter($__internal_98b9e879c6338ea7b9d3d873bc518258518b61c1b3fe1be2abe48aa9d0bc2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cda56b942c0ae2867c59fb858571e560ebee69cb6892340d4963efb58495b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cda56b942c0ae2867c59fb858571e560ebee69cb6892340d4963efb58495b4a->enter($__internal_4cda56b942c0ae2867c59fb858571e560ebee69cb6892340d4963efb58495b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4cda56b942c0ae2867c59fb858571e560ebee69cb6892340d4963efb58495b4a->leave($__internal_4cda56b942c0ae2867c59fb858571e560ebee69cb6892340d4963efb58495b4a_prof);

        
        $__internal_98b9e879c6338ea7b9d3d873bc518258518b61c1b3fe1be2abe48aa9d0bc2f57->leave($__internal_98b9e879c6338ea7b9d3d873bc518258518b61c1b3fe1be2abe48aa9d0bc2f57_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6380e46fe2d3b77666fe758bc47fd24863c39af9adfa1239ece3edb3090dab8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6380e46fe2d3b77666fe758bc47fd24863c39af9adfa1239ece3edb3090dab8d->enter($__internal_6380e46fe2d3b77666fe758bc47fd24863c39af9adfa1239ece3edb3090dab8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92b92de2cdbbeb9ce4c565a77d53f2255e938ae04b33737ba735333dd66bc73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b92de2cdbbeb9ce4c565a77d53f2255e938ae04b33737ba735333dd66bc73a->enter($__internal_92b92de2cdbbeb9ce4c565a77d53f2255e938ae04b33737ba735333dd66bc73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_92b92de2cdbbeb9ce4c565a77d53f2255e938ae04b33737ba735333dd66bc73a->leave($__internal_92b92de2cdbbeb9ce4c565a77d53f2255e938ae04b33737ba735333dd66bc73a_prof);

        
        $__internal_6380e46fe2d3b77666fe758bc47fd24863c39af9adfa1239ece3edb3090dab8d->leave($__internal_6380e46fe2d3b77666fe758bc47fd24863c39af9adfa1239ece3edb3090dab8d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb361c0e75d1ab605e22eaa9aa47e008df9dc1af91c92207fe58f350ae698a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb361c0e75d1ab605e22eaa9aa47e008df9dc1af91c92207fe58f350ae698a7d->enter($__internal_eb361c0e75d1ab605e22eaa9aa47e008df9dc1af91c92207fe58f350ae698a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c08a2adacff1256a87f21160c298eeeab0f02f4747e1b78352d07e29a621ceda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08a2adacff1256a87f21160c298eeeab0f02f4747e1b78352d07e29a621ceda->enter($__internal_c08a2adacff1256a87f21160c298eeeab0f02f4747e1b78352d07e29a621ceda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c08a2adacff1256a87f21160c298eeeab0f02f4747e1b78352d07e29a621ceda->leave($__internal_c08a2adacff1256a87f21160c298eeeab0f02f4747e1b78352d07e29a621ceda_prof);

        
        $__internal_eb361c0e75d1ab605e22eaa9aa47e008df9dc1af91c92207fe58f350ae698a7d->leave($__internal_eb361c0e75d1ab605e22eaa9aa47e008df9dc1af91c92207fe58f350ae698a7d_prof);

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

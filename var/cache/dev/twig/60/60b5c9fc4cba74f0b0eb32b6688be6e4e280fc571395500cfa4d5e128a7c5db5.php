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
        $__internal_74d64a7f30be72dc8bd1164cdd6b1f565dff38fbe764cdda68f64a8ecb523b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d64a7f30be72dc8bd1164cdd6b1f565dff38fbe764cdda68f64a8ecb523b05->enter($__internal_74d64a7f30be72dc8bd1164cdd6b1f565dff38fbe764cdda68f64a8ecb523b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4d9cd00036dcbc9c4b69ca9cba3e0c89fdee436434e7c4e706bb058fa76ae82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9cd00036dcbc9c4b69ca9cba3e0c89fdee436434e7c4e706bb058fa76ae82d->enter($__internal_4d9cd00036dcbc9c4b69ca9cba3e0c89fdee436434e7c4e706bb058fa76ae82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_74d64a7f30be72dc8bd1164cdd6b1f565dff38fbe764cdda68f64a8ecb523b05->leave($__internal_74d64a7f30be72dc8bd1164cdd6b1f565dff38fbe764cdda68f64a8ecb523b05_prof);

        
        $__internal_4d9cd00036dcbc9c4b69ca9cba3e0c89fdee436434e7c4e706bb058fa76ae82d->leave($__internal_4d9cd00036dcbc9c4b69ca9cba3e0c89fdee436434e7c4e706bb058fa76ae82d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0790dc18ce01c76513cd74312b29ec45d821ae78ccd02b1eec3181b93b48a606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0790dc18ce01c76513cd74312b29ec45d821ae78ccd02b1eec3181b93b48a606->enter($__internal_0790dc18ce01c76513cd74312b29ec45d821ae78ccd02b1eec3181b93b48a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7176f9011d55df1c94c0336dabd11b27223c61f13a03dcdb62566eb50d540e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7176f9011d55df1c94c0336dabd11b27223c61f13a03dcdb62566eb50d540e7e->enter($__internal_7176f9011d55df1c94c0336dabd11b27223c61f13a03dcdb62566eb50d540e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7176f9011d55df1c94c0336dabd11b27223c61f13a03dcdb62566eb50d540e7e->leave($__internal_7176f9011d55df1c94c0336dabd11b27223c61f13a03dcdb62566eb50d540e7e_prof);

        
        $__internal_0790dc18ce01c76513cd74312b29ec45d821ae78ccd02b1eec3181b93b48a606->leave($__internal_0790dc18ce01c76513cd74312b29ec45d821ae78ccd02b1eec3181b93b48a606_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_eaa12ddbaca4e98d6b8894c2aa37613d7e6d37fe94d3e4af684a70e19af3fd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa12ddbaca4e98d6b8894c2aa37613d7e6d37fe94d3e4af684a70e19af3fd6a->enter($__internal_eaa12ddbaca4e98d6b8894c2aa37613d7e6d37fe94d3e4af684a70e19af3fd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a47942b8bebf3d76195b899dfa4a98ab2746c52516498e9507fc83c8cbe1f19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47942b8bebf3d76195b899dfa4a98ab2746c52516498e9507fc83c8cbe1f19a->enter($__internal_a47942b8bebf3d76195b899dfa4a98ab2746c52516498e9507fc83c8cbe1f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a47942b8bebf3d76195b899dfa4a98ab2746c52516498e9507fc83c8cbe1f19a->leave($__internal_a47942b8bebf3d76195b899dfa4a98ab2746c52516498e9507fc83c8cbe1f19a_prof);

        
        $__internal_eaa12ddbaca4e98d6b8894c2aa37613d7e6d37fe94d3e4af684a70e19af3fd6a->leave($__internal_eaa12ddbaca4e98d6b8894c2aa37613d7e6d37fe94d3e4af684a70e19af3fd6a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_88b2cccb87a985ed5293385bb6bbfd3373b7db0c42456909567e5a98c4922e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b2cccb87a985ed5293385bb6bbfd3373b7db0c42456909567e5a98c4922e0b->enter($__internal_88b2cccb87a985ed5293385bb6bbfd3373b7db0c42456909567e5a98c4922e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20e9d124ee7eb2a3834c95a88db6becf5c2df8aca0a4e8b60f8331f9c01eb516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e9d124ee7eb2a3834c95a88db6becf5c2df8aca0a4e8b60f8331f9c01eb516->enter($__internal_20e9d124ee7eb2a3834c95a88db6becf5c2df8aca0a4e8b60f8331f9c01eb516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20e9d124ee7eb2a3834c95a88db6becf5c2df8aca0a4e8b60f8331f9c01eb516->leave($__internal_20e9d124ee7eb2a3834c95a88db6becf5c2df8aca0a4e8b60f8331f9c01eb516_prof);

        
        $__internal_88b2cccb87a985ed5293385bb6bbfd3373b7db0c42456909567e5a98c4922e0b->leave($__internal_88b2cccb87a985ed5293385bb6bbfd3373b7db0c42456909567e5a98c4922e0b_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

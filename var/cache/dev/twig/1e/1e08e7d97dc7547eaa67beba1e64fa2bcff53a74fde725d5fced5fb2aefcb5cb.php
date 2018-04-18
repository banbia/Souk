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
        $__internal_f0f15f7cf011693e5d2ec29d946b5ec7a1384e58adc3c2d275c8871e12e5a213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f15f7cf011693e5d2ec29d946b5ec7a1384e58adc3c2d275c8871e12e5a213->enter($__internal_f0f15f7cf011693e5d2ec29d946b5ec7a1384e58adc3c2d275c8871e12e5a213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4f5901874e3d9d605b467b6997149500989704cf49a3e03c70c0a766ce3e58a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5901874e3d9d605b467b6997149500989704cf49a3e03c70c0a766ce3e58a6->enter($__internal_4f5901874e3d9d605b467b6997149500989704cf49a3e03c70c0a766ce3e58a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f0f15f7cf011693e5d2ec29d946b5ec7a1384e58adc3c2d275c8871e12e5a213->leave($__internal_f0f15f7cf011693e5d2ec29d946b5ec7a1384e58adc3c2d275c8871e12e5a213_prof);

        
        $__internal_4f5901874e3d9d605b467b6997149500989704cf49a3e03c70c0a766ce3e58a6->leave($__internal_4f5901874e3d9d605b467b6997149500989704cf49a3e03c70c0a766ce3e58a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e06ebaa788c59d526854c80a748a77fb7dc22fa66a68f82889d57ce7ede5d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e06ebaa788c59d526854c80a748a77fb7dc22fa66a68f82889d57ce7ede5d96->enter($__internal_9e06ebaa788c59d526854c80a748a77fb7dc22fa66a68f82889d57ce7ede5d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c82b7450dda888426064420f69dccb75deaff786f45ca723e468f9bd0487842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c82b7450dda888426064420f69dccb75deaff786f45ca723e468f9bd0487842->enter($__internal_6c82b7450dda888426064420f69dccb75deaff786f45ca723e468f9bd0487842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6c82b7450dda888426064420f69dccb75deaff786f45ca723e468f9bd0487842->leave($__internal_6c82b7450dda888426064420f69dccb75deaff786f45ca723e468f9bd0487842_prof);

        
        $__internal_9e06ebaa788c59d526854c80a748a77fb7dc22fa66a68f82889d57ce7ede5d96->leave($__internal_9e06ebaa788c59d526854c80a748a77fb7dc22fa66a68f82889d57ce7ede5d96_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8ada4ec847a1bca1db1420d547a99c04d57b0414e129a044b03dd42127e9d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ada4ec847a1bca1db1420d547a99c04d57b0414e129a044b03dd42127e9d99->enter($__internal_f8ada4ec847a1bca1db1420d547a99c04d57b0414e129a044b03dd42127e9d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_119336ee046faff58be73d5606f3159390b0d7ffc3131f14fa3cf2ed046d7954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119336ee046faff58be73d5606f3159390b0d7ffc3131f14fa3cf2ed046d7954->enter($__internal_119336ee046faff58be73d5606f3159390b0d7ffc3131f14fa3cf2ed046d7954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_119336ee046faff58be73d5606f3159390b0d7ffc3131f14fa3cf2ed046d7954->leave($__internal_119336ee046faff58be73d5606f3159390b0d7ffc3131f14fa3cf2ed046d7954_prof);

        
        $__internal_f8ada4ec847a1bca1db1420d547a99c04d57b0414e129a044b03dd42127e9d99->leave($__internal_f8ada4ec847a1bca1db1420d547a99c04d57b0414e129a044b03dd42127e9d99_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aece3f5426cfcf4c80f4a29ef4780887a539f0d27c6d4191c26bb555122e3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aece3f5426cfcf4c80f4a29ef4780887a539f0d27c6d4191c26bb555122e3f9->enter($__internal_9aece3f5426cfcf4c80f4a29ef4780887a539f0d27c6d4191c26bb555122e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dfcd88f8783338c0438c6b9c1a8c2fd54d8c524f1e88c6ce0d3e8576b23dd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfcd88f8783338c0438c6b9c1a8c2fd54d8c524f1e88c6ce0d3e8576b23dd30->enter($__internal_8dfcd88f8783338c0438c6b9c1a8c2fd54d8c524f1e88c6ce0d3e8576b23dd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8dfcd88f8783338c0438c6b9c1a8c2fd54d8c524f1e88c6ce0d3e8576b23dd30->leave($__internal_8dfcd88f8783338c0438c6b9c1a8c2fd54d8c524f1e88c6ce0d3e8576b23dd30_prof);

        
        $__internal_9aece3f5426cfcf4c80f4a29ef4780887a539f0d27c6d4191c26bb555122e3f9->leave($__internal_9aece3f5426cfcf4c80f4a29ef4780887a539f0d27c6d4191c26bb555122e3f9_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

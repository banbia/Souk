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
        $__internal_f2bc955585d1d9db8b0dcabc1419805d230fda2bfde639571442b6f084d9c31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bc955585d1d9db8b0dcabc1419805d230fda2bfde639571442b6f084d9c31b->enter($__internal_f2bc955585d1d9db8b0dcabc1419805d230fda2bfde639571442b6f084d9c31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a6a1c16c66a28f1802e5a7ca077695e0e138ea815780672bce2210d76d2b751d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a1c16c66a28f1802e5a7ca077695e0e138ea815780672bce2210d76d2b751d->enter($__internal_a6a1c16c66a28f1802e5a7ca077695e0e138ea815780672bce2210d76d2b751d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f2bc955585d1d9db8b0dcabc1419805d230fda2bfde639571442b6f084d9c31b->leave($__internal_f2bc955585d1d9db8b0dcabc1419805d230fda2bfde639571442b6f084d9c31b_prof);

        
        $__internal_a6a1c16c66a28f1802e5a7ca077695e0e138ea815780672bce2210d76d2b751d->leave($__internal_a6a1c16c66a28f1802e5a7ca077695e0e138ea815780672bce2210d76d2b751d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ff7d276f2621be69c8e52544ee00043488426d5cf705bdc6b2f1a4fd4c3cc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff7d276f2621be69c8e52544ee00043488426d5cf705bdc6b2f1a4fd4c3cc75->enter($__internal_8ff7d276f2621be69c8e52544ee00043488426d5cf705bdc6b2f1a4fd4c3cc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2584215a0ab5d39c5510798a59ee9eba0820da1d441b7fe79e9fc6d95d5304fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2584215a0ab5d39c5510798a59ee9eba0820da1d441b7fe79e9fc6d95d5304fa->enter($__internal_2584215a0ab5d39c5510798a59ee9eba0820da1d441b7fe79e9fc6d95d5304fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2584215a0ab5d39c5510798a59ee9eba0820da1d441b7fe79e9fc6d95d5304fa->leave($__internal_2584215a0ab5d39c5510798a59ee9eba0820da1d441b7fe79e9fc6d95d5304fa_prof);

        
        $__internal_8ff7d276f2621be69c8e52544ee00043488426d5cf705bdc6b2f1a4fd4c3cc75->leave($__internal_8ff7d276f2621be69c8e52544ee00043488426d5cf705bdc6b2f1a4fd4c3cc75_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2898e451a95e7a8b96a98c19f164ad7850caae84bbc74ce2ebc308c865d454b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2898e451a95e7a8b96a98c19f164ad7850caae84bbc74ce2ebc308c865d454b0->enter($__internal_2898e451a95e7a8b96a98c19f164ad7850caae84bbc74ce2ebc308c865d454b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61af2871009c40cd92ced4f7901391ae11f72f146aa25e0787cac42e810b30df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61af2871009c40cd92ced4f7901391ae11f72f146aa25e0787cac42e810b30df->enter($__internal_61af2871009c40cd92ced4f7901391ae11f72f146aa25e0787cac42e810b30df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_61af2871009c40cd92ced4f7901391ae11f72f146aa25e0787cac42e810b30df->leave($__internal_61af2871009c40cd92ced4f7901391ae11f72f146aa25e0787cac42e810b30df_prof);

        
        $__internal_2898e451a95e7a8b96a98c19f164ad7850caae84bbc74ce2ebc308c865d454b0->leave($__internal_2898e451a95e7a8b96a98c19f164ad7850caae84bbc74ce2ebc308c865d454b0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed24c9b7de3d9fbe694844b751a5bb12241cde57fdd54cd1e0d9d043a535d5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed24c9b7de3d9fbe694844b751a5bb12241cde57fdd54cd1e0d9d043a535d5bc->enter($__internal_ed24c9b7de3d9fbe694844b751a5bb12241cde57fdd54cd1e0d9d043a535d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a09cef65d48c4f6e4d0916b0cc396653318012551ebdbb133c2891a7cdf6f1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09cef65d48c4f6e4d0916b0cc396653318012551ebdbb133c2891a7cdf6f1dd->enter($__internal_a09cef65d48c4f6e4d0916b0cc396653318012551ebdbb133c2891a7cdf6f1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a09cef65d48c4f6e4d0916b0cc396653318012551ebdbb133c2891a7cdf6f1dd->leave($__internal_a09cef65d48c4f6e4d0916b0cc396653318012551ebdbb133c2891a7cdf6f1dd_prof);

        
        $__internal_ed24c9b7de3d9fbe694844b751a5bb12241cde57fdd54cd1e0d9d043a535d5bc->leave($__internal_ed24c9b7de3d9fbe694844b751a5bb12241cde57fdd54cd1e0d9d043a535d5bc_prof);

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

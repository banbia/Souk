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
        $__internal_374782d3ef23563215b0c4f4a79e76dc447a3dffd7005f3dabc666eef8eac0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374782d3ef23563215b0c4f4a79e76dc447a3dffd7005f3dabc666eef8eac0d9->enter($__internal_374782d3ef23563215b0c4f4a79e76dc447a3dffd7005f3dabc666eef8eac0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ee49797fdc14e667e60a706077d35561e89dcc3c9d65f855f95ce8536b3ce293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee49797fdc14e667e60a706077d35561e89dcc3c9d65f855f95ce8536b3ce293->enter($__internal_ee49797fdc14e667e60a706077d35561e89dcc3c9d65f855f95ce8536b3ce293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_374782d3ef23563215b0c4f4a79e76dc447a3dffd7005f3dabc666eef8eac0d9->leave($__internal_374782d3ef23563215b0c4f4a79e76dc447a3dffd7005f3dabc666eef8eac0d9_prof);

        
        $__internal_ee49797fdc14e667e60a706077d35561e89dcc3c9d65f855f95ce8536b3ce293->leave($__internal_ee49797fdc14e667e60a706077d35561e89dcc3c9d65f855f95ce8536b3ce293_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbed1de88a593353a3c40e09be34b05a4baae445d7a1477c0cda319760d48ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbed1de88a593353a3c40e09be34b05a4baae445d7a1477c0cda319760d48ca9->enter($__internal_fbed1de88a593353a3c40e09be34b05a4baae445d7a1477c0cda319760d48ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_938f50f7ebdf6d8c86b697869af5568468fe344c97879df4063f9a31d781d2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938f50f7ebdf6d8c86b697869af5568468fe344c97879df4063f9a31d781d2df->enter($__internal_938f50f7ebdf6d8c86b697869af5568468fe344c97879df4063f9a31d781d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_938f50f7ebdf6d8c86b697869af5568468fe344c97879df4063f9a31d781d2df->leave($__internal_938f50f7ebdf6d8c86b697869af5568468fe344c97879df4063f9a31d781d2df_prof);

        
        $__internal_fbed1de88a593353a3c40e09be34b05a4baae445d7a1477c0cda319760d48ca9->leave($__internal_fbed1de88a593353a3c40e09be34b05a4baae445d7a1477c0cda319760d48ca9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef03661c2c1630db8f76bc223856ad2f0f0a79c82a645080ee7707a653dd9311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef03661c2c1630db8f76bc223856ad2f0f0a79c82a645080ee7707a653dd9311->enter($__internal_ef03661c2c1630db8f76bc223856ad2f0f0a79c82a645080ee7707a653dd9311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5699e51b772e732b8190cd1196baea750e42b5a05ec2d3d7d8681bff3c9283d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5699e51b772e732b8190cd1196baea750e42b5a05ec2d3d7d8681bff3c9283d->enter($__internal_f5699e51b772e732b8190cd1196baea750e42b5a05ec2d3d7d8681bff3c9283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f5699e51b772e732b8190cd1196baea750e42b5a05ec2d3d7d8681bff3c9283d->leave($__internal_f5699e51b772e732b8190cd1196baea750e42b5a05ec2d3d7d8681bff3c9283d_prof);

        
        $__internal_ef03661c2c1630db8f76bc223856ad2f0f0a79c82a645080ee7707a653dd9311->leave($__internal_ef03661c2c1630db8f76bc223856ad2f0f0a79c82a645080ee7707a653dd9311_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd8b4df04f557df2f548fa989b9398dd6c8a509c47ea05a1bde60232fc23168f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8b4df04f557df2f548fa989b9398dd6c8a509c47ea05a1bde60232fc23168f->enter($__internal_cd8b4df04f557df2f548fa989b9398dd6c8a509c47ea05a1bde60232fc23168f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bfed13a9c0756eddf439c9df260e9167aa4eecd43b4b1ea3188d9d38bd577b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfed13a9c0756eddf439c9df260e9167aa4eecd43b4b1ea3188d9d38bd577b7->enter($__internal_4bfed13a9c0756eddf439c9df260e9167aa4eecd43b4b1ea3188d9d38bd577b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4bfed13a9c0756eddf439c9df260e9167aa4eecd43b4b1ea3188d9d38bd577b7->leave($__internal_4bfed13a9c0756eddf439c9df260e9167aa4eecd43b4b1ea3188d9d38bd577b7_prof);

        
        $__internal_cd8b4df04f557df2f548fa989b9398dd6c8a509c47ea05a1bde60232fc23168f->leave($__internal_cd8b4df04f557df2f548fa989b9398dd6c8a509c47ea05a1bde60232fc23168f_prof);

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

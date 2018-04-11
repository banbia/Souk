<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bbc5bb4e996e66192582f2f3da59e2c0b9be6c22ca0b73bd7fb8e3f2a6007110 extends Twig_Template
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
        $__internal_fed3da3581a5aaf40e83dab225fdbec337f3ee7f5821060c78155733eb87dfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed3da3581a5aaf40e83dab225fdbec337f3ee7f5821060c78155733eb87dfe1->enter($__internal_fed3da3581a5aaf40e83dab225fdbec337f3ee7f5821060c78155733eb87dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_72ced4c5f429394797a3c367e20a24c5e01323d9aa1a0d9f27a7a3edcd9a8b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ced4c5f429394797a3c367e20a24c5e01323d9aa1a0d9f27a7a3edcd9a8b73->enter($__internal_72ced4c5f429394797a3c367e20a24c5e01323d9aa1a0d9f27a7a3edcd9a8b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fed3da3581a5aaf40e83dab225fdbec337f3ee7f5821060c78155733eb87dfe1->leave($__internal_fed3da3581a5aaf40e83dab225fdbec337f3ee7f5821060c78155733eb87dfe1_prof);

        
        $__internal_72ced4c5f429394797a3c367e20a24c5e01323d9aa1a0d9f27a7a3edcd9a8b73->leave($__internal_72ced4c5f429394797a3c367e20a24c5e01323d9aa1a0d9f27a7a3edcd9a8b73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78db3c4e82ea9714fbffd253373e2b9a3fe29ff152a9427fe9a1264e91806502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78db3c4e82ea9714fbffd253373e2b9a3fe29ff152a9427fe9a1264e91806502->enter($__internal_78db3c4e82ea9714fbffd253373e2b9a3fe29ff152a9427fe9a1264e91806502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_701566d588939e735410ae17dcb0a350e78bcb56062f1e0e8d1627c077eccf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701566d588939e735410ae17dcb0a350e78bcb56062f1e0e8d1627c077eccf14->enter($__internal_701566d588939e735410ae17dcb0a350e78bcb56062f1e0e8d1627c077eccf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_701566d588939e735410ae17dcb0a350e78bcb56062f1e0e8d1627c077eccf14->leave($__internal_701566d588939e735410ae17dcb0a350e78bcb56062f1e0e8d1627c077eccf14_prof);

        
        $__internal_78db3c4e82ea9714fbffd253373e2b9a3fe29ff152a9427fe9a1264e91806502->leave($__internal_78db3c4e82ea9714fbffd253373e2b9a3fe29ff152a9427fe9a1264e91806502_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c15bac46ad4d47c6cd1fa7cf3eb9749c05b2dc6e10ba9db10dd0ab4853c0afcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15bac46ad4d47c6cd1fa7cf3eb9749c05b2dc6e10ba9db10dd0ab4853c0afcc->enter($__internal_c15bac46ad4d47c6cd1fa7cf3eb9749c05b2dc6e10ba9db10dd0ab4853c0afcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1224c3e2cbbae87fa310a6f9297398b14d9eb82507ff37624572780a6e943fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1224c3e2cbbae87fa310a6f9297398b14d9eb82507ff37624572780a6e943fa7->enter($__internal_1224c3e2cbbae87fa310a6f9297398b14d9eb82507ff37624572780a6e943fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1224c3e2cbbae87fa310a6f9297398b14d9eb82507ff37624572780a6e943fa7->leave($__internal_1224c3e2cbbae87fa310a6f9297398b14d9eb82507ff37624572780a6e943fa7_prof);

        
        $__internal_c15bac46ad4d47c6cd1fa7cf3eb9749c05b2dc6e10ba9db10dd0ab4853c0afcc->leave($__internal_c15bac46ad4d47c6cd1fa7cf3eb9749c05b2dc6e10ba9db10dd0ab4853c0afcc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_adb3109b2796e87e95d56faf237511e66035c91d0ef4a64d64ee04d4a9414c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb3109b2796e87e95d56faf237511e66035c91d0ef4a64d64ee04d4a9414c31->enter($__internal_adb3109b2796e87e95d56faf237511e66035c91d0ef4a64d64ee04d4a9414c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88d5ee42548d256926c7fbf0c1f1d8c02f1d6f5e8a2c03df1cc8a5ec77e59456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d5ee42548d256926c7fbf0c1f1d8c02f1d6f5e8a2c03df1cc8a5ec77e59456->enter($__internal_88d5ee42548d256926c7fbf0c1f1d8c02f1d6f5e8a2c03df1cc8a5ec77e59456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88d5ee42548d256926c7fbf0c1f1d8c02f1d6f5e8a2c03df1cc8a5ec77e59456->leave($__internal_88d5ee42548d256926c7fbf0c1f1d8c02f1d6f5e8a2c03df1cc8a5ec77e59456_prof);

        
        $__internal_adb3109b2796e87e95d56faf237511e66035c91d0ef4a64d64ee04d4a9414c31->leave($__internal_adb3109b2796e87e95d56faf237511e66035c91d0ef4a64d64ee04d4a9414c31_prof);

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

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
        $__internal_9581f20a4368aa910d6caf73ea28ba0c1e8c42623258cb675db79e7a1d704e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9581f20a4368aa910d6caf73ea28ba0c1e8c42623258cb675db79e7a1d704e6a->enter($__internal_9581f20a4368aa910d6caf73ea28ba0c1e8c42623258cb675db79e7a1d704e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_391ecd694f57d4d187b56b902eb74eaa11772dd44cc7698084c7d651cc781ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391ecd694f57d4d187b56b902eb74eaa11772dd44cc7698084c7d651cc781ccb->enter($__internal_391ecd694f57d4d187b56b902eb74eaa11772dd44cc7698084c7d651cc781ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9581f20a4368aa910d6caf73ea28ba0c1e8c42623258cb675db79e7a1d704e6a->leave($__internal_9581f20a4368aa910d6caf73ea28ba0c1e8c42623258cb675db79e7a1d704e6a_prof);

        
        $__internal_391ecd694f57d4d187b56b902eb74eaa11772dd44cc7698084c7d651cc781ccb->leave($__internal_391ecd694f57d4d187b56b902eb74eaa11772dd44cc7698084c7d651cc781ccb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba9e88f10560f7ff47c88dabf0593eec541f0342108a7ce2b0de434e48810210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9e88f10560f7ff47c88dabf0593eec541f0342108a7ce2b0de434e48810210->enter($__internal_ba9e88f10560f7ff47c88dabf0593eec541f0342108a7ce2b0de434e48810210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3026290e11255e9339f950efd6da2ae1679a73d0ed7e24d93a839c2141dfc2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3026290e11255e9339f950efd6da2ae1679a73d0ed7e24d93a839c2141dfc2b7->enter($__internal_3026290e11255e9339f950efd6da2ae1679a73d0ed7e24d93a839c2141dfc2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3026290e11255e9339f950efd6da2ae1679a73d0ed7e24d93a839c2141dfc2b7->leave($__internal_3026290e11255e9339f950efd6da2ae1679a73d0ed7e24d93a839c2141dfc2b7_prof);

        
        $__internal_ba9e88f10560f7ff47c88dabf0593eec541f0342108a7ce2b0de434e48810210->leave($__internal_ba9e88f10560f7ff47c88dabf0593eec541f0342108a7ce2b0de434e48810210_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_87a0410e4b9f193eeb513458330d34f207497f59e122d119fe607391125c0542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a0410e4b9f193eeb513458330d34f207497f59e122d119fe607391125c0542->enter($__internal_87a0410e4b9f193eeb513458330d34f207497f59e122d119fe607391125c0542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_279e637130da16ae9a17448e197609bc481e6fdc19c2522cac302d8d7223636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279e637130da16ae9a17448e197609bc481e6fdc19c2522cac302d8d7223636f->enter($__internal_279e637130da16ae9a17448e197609bc481e6fdc19c2522cac302d8d7223636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_279e637130da16ae9a17448e197609bc481e6fdc19c2522cac302d8d7223636f->leave($__internal_279e637130da16ae9a17448e197609bc481e6fdc19c2522cac302d8d7223636f_prof);

        
        $__internal_87a0410e4b9f193eeb513458330d34f207497f59e122d119fe607391125c0542->leave($__internal_87a0410e4b9f193eeb513458330d34f207497f59e122d119fe607391125c0542_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3691805b45b83366c8ebed7f5efa0aaad5f80598e189d57c4c6b494ff79c45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3691805b45b83366c8ebed7f5efa0aaad5f80598e189d57c4c6b494ff79c45f->enter($__internal_e3691805b45b83366c8ebed7f5efa0aaad5f80598e189d57c4c6b494ff79c45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d437b711d1888b8dcb69de97a178d461c70642016baf7f54adb4f38dd12ea67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d437b711d1888b8dcb69de97a178d461c70642016baf7f54adb4f38dd12ea67->enter($__internal_3d437b711d1888b8dcb69de97a178d461c70642016baf7f54adb4f38dd12ea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d437b711d1888b8dcb69de97a178d461c70642016baf7f54adb4f38dd12ea67->leave($__internal_3d437b711d1888b8dcb69de97a178d461c70642016baf7f54adb4f38dd12ea67_prof);

        
        $__internal_e3691805b45b83366c8ebed7f5efa0aaad5f80598e189d57c4c6b494ff79c45f->leave($__internal_e3691805b45b83366c8ebed7f5efa0aaad5f80598e189d57c4c6b494ff79c45f_prof);

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

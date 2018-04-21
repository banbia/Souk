<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d82386d991c57dcccad6912e5c4eaf5b47eeaae9ad9bc5c802521de75a8f527b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c37ea56ce9e28f758667c50424de92aa8de84f9a76b5d2087ca9cc72d9c7cd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37ea56ce9e28f758667c50424de92aa8de84f9a76b5d2087ca9cc72d9c7cd5f->enter($__internal_c37ea56ce9e28f758667c50424de92aa8de84f9a76b5d2087ca9cc72d9c7cd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_0e8debc66bd0df684662906e85d4772014a349a1c6577cfa272b5eeb80a59b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8debc66bd0df684662906e85d4772014a349a1c6577cfa272b5eeb80a59b10->enter($__internal_0e8debc66bd0df684662906e85d4772014a349a1c6577cfa272b5eeb80a59b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37ea56ce9e28f758667c50424de92aa8de84f9a76b5d2087ca9cc72d9c7cd5f->leave($__internal_c37ea56ce9e28f758667c50424de92aa8de84f9a76b5d2087ca9cc72d9c7cd5f_prof);

        
        $__internal_0e8debc66bd0df684662906e85d4772014a349a1c6577cfa272b5eeb80a59b10->leave($__internal_0e8debc66bd0df684662906e85d4772014a349a1c6577cfa272b5eeb80a59b10_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_062d8e7b7c2f928555af69ee6a5ad45eaea4165f3facf8b9633ca19e4aaccdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062d8e7b7c2f928555af69ee6a5ad45eaea4165f3facf8b9633ca19e4aaccdec->enter($__internal_062d8e7b7c2f928555af69ee6a5ad45eaea4165f3facf8b9633ca19e4aaccdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_5aeaccac7dc9389875d002b61f611d3fff53a364cd653ca89ae4f3ac1b8992c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeaccac7dc9389875d002b61f611d3fff53a364cd653ca89ae4f3ac1b8992c1->enter($__internal_5aeaccac7dc9389875d002b61f611d3fff53a364cd653ca89ae4f3ac1b8992c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_5aeaccac7dc9389875d002b61f611d3fff53a364cd653ca89ae4f3ac1b8992c1->leave($__internal_5aeaccac7dc9389875d002b61f611d3fff53a364cd653ca89ae4f3ac1b8992c1_prof);

        
        $__internal_062d8e7b7c2f928555af69ee6a5ad45eaea4165f3facf8b9633ca19e4aaccdec->leave($__internal_062d8e7b7c2f928555af69ee6a5ad45eaea4165f3facf8b9633ca19e4aaccdec_prof);

    }

    // line 7
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_94dd73b8af32137914ff9fe28230978faba036a6e3afff5362a10ae02a4e9a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dd73b8af32137914ff9fe28230978faba036a6e3afff5362a10ae02a4e9a68->enter($__internal_94dd73b8af32137914ff9fe28230978faba036a6e3afff5362a10ae02a4e9a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_c6196a7aaa2d8c87a21497b8ebeff52fd79d6c8cd359db9fcc4ee1f60786b86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6196a7aaa2d8c87a21497b8ebeff52fd79d6c8cd359db9fcc4ee1f60786b86d->enter($__internal_c6196a7aaa2d8c87a21497b8ebeff52fd79d6c8cd359db9fcc4ee1f60786b86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 8
        echo "
    ";
        // line 9
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "    <div class=\"col-md-3\"></div>
    <div class=\"col-md-6 login-right\">
        <h3>Connexion Membres</h3>
        <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 16
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 17
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "            <div>
                <span for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\">
            </div>
            <div>
                <span for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
            </div>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </br>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div>


";
        
        $__internal_c6196a7aaa2d8c87a21497b8ebeff52fd79d6c8cd359db9fcc4ee1f60786b86d->leave($__internal_c6196a7aaa2d8c87a21497b8ebeff52fd79d6c8cd359db9fcc4ee1f60786b86d_prof);

        
        $__internal_94dd73b8af32137914ff9fe28230978faba036a6e3afff5362a10ae02a4e9a68->leave($__internal_94dd73b8af32137914ff9fe28230978faba036a6e3afff5362a10ae02a4e9a68_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 30,  121 => 28,  114 => 24,  108 => 21,  104 => 20,  101 => 19,  95 => 17,  93 => 16,  89 => 15,  84 => 12,  78 => 10,  76 => 9,  73 => 8,  64 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}
{% block style %}
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block formulaire %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"col-md-3\"></div>
    <div class=\"col-md-6 login-right\">
        <h3>Connexion Membres</h3>
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div>
                <span for=\"username\">{{ 'security.login.username'|trans }}<label>*</label></span>
                <input class=\"login_input\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\">
            </div>
            <div>
                <span for=\"password\">{{ 'security.login.password'|trans }}<label>*</label></span>
                <input class=\"login_input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
            </div>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </br>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
        </form>
    </div>


{% endblock formulaire %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Security/login.html.twig");
    }
}

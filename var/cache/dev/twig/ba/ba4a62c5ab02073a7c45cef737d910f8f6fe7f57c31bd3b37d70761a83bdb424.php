<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_246bf19dbf9acc4b300357d20bad63ea432d98b9a8915f93603439eb5aab7cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5daa820d9313e3f92c6118fff5c5e7d36820afc6885f325020bd46fee2c7613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5daa820d9313e3f92c6118fff5c5e7d36820afc6885f325020bd46fee2c7613->enter($__internal_c5daa820d9313e3f92c6118fff5c5e7d36820afc6885f325020bd46fee2c7613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_7e980824f5066d1167959ff6b330a52266a10133eb3214127985703ca314fada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e980824f5066d1167959ff6b330a52266a10133eb3214127985703ca314fada->enter($__internal_7e980824f5066d1167959ff6b330a52266a10133eb3214127985703ca314fada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5daa820d9313e3f92c6118fff5c5e7d36820afc6885f325020bd46fee2c7613->leave($__internal_c5daa820d9313e3f92c6118fff5c5e7d36820afc6885f325020bd46fee2c7613_prof);

        
        $__internal_7e980824f5066d1167959ff6b330a52266a10133eb3214127985703ca314fada->leave($__internal_7e980824f5066d1167959ff6b330a52266a10133eb3214127985703ca314fada_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_4e96b4e4038fea57e949df9a3948cfd7fb8a3f28be2da02c983787ee96d54926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e96b4e4038fea57e949df9a3948cfd7fb8a3f28be2da02c983787ee96d54926->enter($__internal_4e96b4e4038fea57e949df9a3948cfd7fb8a3f28be2da02c983787ee96d54926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_4214e9ea3b9a509def2f8970e966d8c3836da166a2aa97ca16aae694335be136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4214e9ea3b9a509def2f8970e966d8c3836da166a2aa97ca16aae694335be136->enter($__internal_4214e9ea3b9a509def2f8970e966d8c3836da166a2aa97ca16aae694335be136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 5
        echo "
    ";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"col-md-3\"></div>
    <div class=\"col-md-6 login-right\">
        <h3>Connexion Membres</h3>
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 13
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 14
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 16
        echo "            <div>
                <span for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\">
            </div>
            <div>
                <span for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
            </div>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </br>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div>


";
        
        $__internal_4214e9ea3b9a509def2f8970e966d8c3836da166a2aa97ca16aae694335be136->leave($__internal_4214e9ea3b9a509def2f8970e966d8c3836da166a2aa97ca16aae694335be136_prof);

        
        $__internal_4e96b4e4038fea57e949df9a3948cfd7fb8a3f28be2da02c983787ee96d54926->leave($__internal_4e96b4e4038fea57e949df9a3948cfd7fb8a3f28be2da02c983787ee96d54926_prof);

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
        return array (  102 => 27,  97 => 25,  90 => 21,  84 => 18,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  60 => 9,  54 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
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

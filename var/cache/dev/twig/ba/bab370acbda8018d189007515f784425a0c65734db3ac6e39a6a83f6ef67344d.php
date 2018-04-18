<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_34e48fc57a2bed812acd0287f41b358bb0e7ddfc84821f34e62901aafbad9ce3 extends Twig_Template
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
        $__internal_fd5cc92ffb9835412c5b7bfcb5811fff131b05134a77f6b8bb59e4038e5e991b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5cc92ffb9835412c5b7bfcb5811fff131b05134a77f6b8bb59e4038e5e991b->enter($__internal_fd5cc92ffb9835412c5b7bfcb5811fff131b05134a77f6b8bb59e4038e5e991b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_35b54424966b7cbe0843ee8d8facd9ba82906b50285f11a69e2a91b6869481bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b54424966b7cbe0843ee8d8facd9ba82906b50285f11a69e2a91b6869481bb->enter($__internal_35b54424966b7cbe0843ee8d8facd9ba82906b50285f11a69e2a91b6869481bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd5cc92ffb9835412c5b7bfcb5811fff131b05134a77f6b8bb59e4038e5e991b->leave($__internal_fd5cc92ffb9835412c5b7bfcb5811fff131b05134a77f6b8bb59e4038e5e991b_prof);

        
        $__internal_35b54424966b7cbe0843ee8d8facd9ba82906b50285f11a69e2a91b6869481bb->leave($__internal_35b54424966b7cbe0843ee8d8facd9ba82906b50285f11a69e2a91b6869481bb_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_f641593d8c3c9e6f2b8727fd88c9803614cc6358e30316c2003d517a996d2c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f641593d8c3c9e6f2b8727fd88c9803614cc6358e30316c2003d517a996d2c60->enter($__internal_f641593d8c3c9e6f2b8727fd88c9803614cc6358e30316c2003d517a996d2c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_4f58e227974b3056bbbd1be18c21049bc7b714c430fdd49473e7e072f96e4559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f58e227974b3056bbbd1be18c21049bc7b714c430fdd49473e7e072f96e4559->enter($__internal_4f58e227974b3056bbbd1be18c21049bc7b714c430fdd49473e7e072f96e4559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 14
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_4f58e227974b3056bbbd1be18c21049bc7b714c430fdd49473e7e072f96e4559->leave($__internal_4f58e227974b3056bbbd1be18c21049bc7b714c430fdd49473e7e072f96e4559_prof);

        
        $__internal_f641593d8c3c9e6f2b8727fd88c9803614cc6358e30316c2003d517a996d2c60->leave($__internal_f641593d8c3c9e6f2b8727fd88c9803614cc6358e30316c2003d517a996d2c60_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}

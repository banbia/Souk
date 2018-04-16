<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fcb55e699072013c562485c9d3168399892f6402116de5583f2d25f38ab5593c extends Twig_Template
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
        $__internal_a86565ab759493c812333202a3bdb8f64527a176ac2c82bf63816334369e2fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86565ab759493c812333202a3bdb8f64527a176ac2c82bf63816334369e2fbd->enter($__internal_a86565ab759493c812333202a3bdb8f64527a176ac2c82bf63816334369e2fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2aa5c8732dbc73b3a5181c231fb11f1ef30e52e3f560f1f716a849c67fb6024a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa5c8732dbc73b3a5181c231fb11f1ef30e52e3f560f1f716a849c67fb6024a->enter($__internal_2aa5c8732dbc73b3a5181c231fb11f1ef30e52e3f560f1f716a849c67fb6024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a86565ab759493c812333202a3bdb8f64527a176ac2c82bf63816334369e2fbd->leave($__internal_a86565ab759493c812333202a3bdb8f64527a176ac2c82bf63816334369e2fbd_prof);

        
        $__internal_2aa5c8732dbc73b3a5181c231fb11f1ef30e52e3f560f1f716a849c67fb6024a->leave($__internal_2aa5c8732dbc73b3a5181c231fb11f1ef30e52e3f560f1f716a849c67fb6024a_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_f7237d553abe0b997dc87d08547d0a55c895a06d4e10c3d90ef9ebc0a5c64d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7237d553abe0b997dc87d08547d0a55c895a06d4e10c3d90ef9ebc0a5c64d32->enter($__internal_f7237d553abe0b997dc87d08547d0a55c895a06d4e10c3d90ef9ebc0a5c64d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_2579a2b83aa3b9a9e5fd8d23ae88fd0d9b8820d75fb4fef2523acb95d97e8493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2579a2b83aa3b9a9e5fd8d23ae88fd0d9b8820d75fb4fef2523acb95d97e8493->enter($__internal_2579a2b83aa3b9a9e5fd8d23ae88fd0d9b8820d75fb4fef2523acb95d97e8493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_2579a2b83aa3b9a9e5fd8d23ae88fd0d9b8820d75fb4fef2523acb95d97e8493->leave($__internal_2579a2b83aa3b9a9e5fd8d23ae88fd0d9b8820d75fb4fef2523acb95d97e8493_prof);

        
        $__internal_f7237d553abe0b997dc87d08547d0a55c895a06d4e10c3d90ef9ebc0a5c64d32->leave($__internal_f7237d553abe0b997dc87d08547d0a55c895a06d4e10c3d90ef9ebc0a5c64d32_prof);

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

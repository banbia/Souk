<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fb9a9402210d760fed2bad261a78399473d81a820d4db699b35d269ffad382c0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
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
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 14
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  84 => 27,  79 => 25,  72 => 21,  66 => 18,  62 => 17,  59 => 16,  53 => 14,  51 => 13,  47 => 12,  42 => 9,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_893d89f01c74e9594dd918fb35dd2529bf911c96bb70036df31b33363667973c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdbe7b2e2c7da156c57548469d97be206871d1d2f2e38ae93fab1c7b6456b971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbe7b2e2c7da156c57548469d97be206871d1d2f2e38ae93fab1c7b6456b971->enter($__internal_bdbe7b2e2c7da156c57548469d97be206871d1d2f2e38ae93fab1c7b6456b971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_29484c84ae591f4628d2b542628bd069c395a276ba717aac76c17f29dbe256dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29484c84ae591f4628d2b542628bd069c395a276ba717aac76c17f29dbe256dc->enter($__internal_29484c84ae591f4628d2b542628bd069c395a276ba717aac76c17f29dbe256dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdbe7b2e2c7da156c57548469d97be206871d1d2f2e38ae93fab1c7b6456b971->leave($__internal_bdbe7b2e2c7da156c57548469d97be206871d1d2f2e38ae93fab1c7b6456b971_prof);

        
        $__internal_29484c84ae591f4628d2b542628bd069c395a276ba717aac76c17f29dbe256dc->leave($__internal_29484c84ae591f4628d2b542628bd069c395a276ba717aac76c17f29dbe256dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c30cb03dd007a00ab9d4cda702061241e2b55886ab08e6cc74a928216b6b4489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30cb03dd007a00ab9d4cda702061241e2b55886ab08e6cc74a928216b6b4489->enter($__internal_c30cb03dd007a00ab9d4cda702061241e2b55886ab08e6cc74a928216b6b4489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15cddba1f14802b1811bd23fbb0016d11c8a037fc8f45e44a1a04354934b7f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cddba1f14802b1811bd23fbb0016d11c8a037fc8f45e44a1a04354934b7f13->enter($__internal_15cddba1f14802b1811bd23fbb0016d11c8a037fc8f45e44a1a04354934b7f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_15cddba1f14802b1811bd23fbb0016d11c8a037fc8f45e44a1a04354934b7f13->leave($__internal_15cddba1f14802b1811bd23fbb0016d11c8a037fc8f45e44a1a04354934b7f13_prof);

        
        $__internal_c30cb03dd007a00ab9d4cda702061241e2b55886ab08e6cc74a928216b6b4489->leave($__internal_c30cb03dd007a00ab9d4cda702061241e2b55886ab08e6cc74a928216b6b4489_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}

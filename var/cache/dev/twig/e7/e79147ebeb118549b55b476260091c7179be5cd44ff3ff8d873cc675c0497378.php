<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6c144b1bdb2e4ee01c07f333c1481ab68f13a89e50d555791f8e6aaaefeb0568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_086f2dbd81cc8550a8b70457516d22d9fbe0944e895b605b469ce1e95c432429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086f2dbd81cc8550a8b70457516d22d9fbe0944e895b605b469ce1e95c432429->enter($__internal_086f2dbd81cc8550a8b70457516d22d9fbe0944e895b605b469ce1e95c432429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_998026d85a71fa07a3bc2d2243dcddcf42bf4b1e92f309e1b1a4ffb38c8062eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998026d85a71fa07a3bc2d2243dcddcf42bf4b1e92f309e1b1a4ffb38c8062eb->enter($__internal_998026d85a71fa07a3bc2d2243dcddcf42bf4b1e92f309e1b1a4ffb38c8062eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_086f2dbd81cc8550a8b70457516d22d9fbe0944e895b605b469ce1e95c432429->leave($__internal_086f2dbd81cc8550a8b70457516d22d9fbe0944e895b605b469ce1e95c432429_prof);

        
        $__internal_998026d85a71fa07a3bc2d2243dcddcf42bf4b1e92f309e1b1a4ffb38c8062eb->leave($__internal_998026d85a71fa07a3bc2d2243dcddcf42bf4b1e92f309e1b1a4ffb38c8062eb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7f205f585f4e16e74c38ffd3429eb91e44d1958d8196ee8c9dda6be5df7bd25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f205f585f4e16e74c38ffd3429eb91e44d1958d8196ee8c9dda6be5df7bd25a->enter($__internal_7f205f585f4e16e74c38ffd3429eb91e44d1958d8196ee8c9dda6be5df7bd25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_db9175a27d4d22f9ca20e4866a15d4772e116b8939c8436a4e0e45a58f6041a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9175a27d4d22f9ca20e4866a15d4772e116b8939c8436a4e0e45a58f6041a0->enter($__internal_db9175a27d4d22f9ca20e4866a15d4772e116b8939c8436a4e0e45a58f6041a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_db9175a27d4d22f9ca20e4866a15d4772e116b8939c8436a4e0e45a58f6041a0->leave($__internal_db9175a27d4d22f9ca20e4866a15d4772e116b8939c8436a4e0e45a58f6041a0_prof);

        
        $__internal_7f205f585f4e16e74c38ffd3429eb91e44d1958d8196ee8c9dda6be5df7bd25a->leave($__internal_7f205f585f4e16e74c38ffd3429eb91e44d1958d8196ee8c9dda6be5df7bd25a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d17f49ea02deed9fa2ec91cd09cb59c9d248ef87b8d5efd3017cce44a9e31de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17f49ea02deed9fa2ec91cd09cb59c9d248ef87b8d5efd3017cce44a9e31de8->enter($__internal_d17f49ea02deed9fa2ec91cd09cb59c9d248ef87b8d5efd3017cce44a9e31de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3b441cd4f1dca1bb46cd0b8f13c65b214fe32734210bf5ccbd6bcc2ef5c4205e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b441cd4f1dca1bb46cd0b8f13c65b214fe32734210bf5ccbd6bcc2ef5c4205e->enter($__internal_3b441cd4f1dca1bb46cd0b8f13c65b214fe32734210bf5ccbd6bcc2ef5c4205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3b441cd4f1dca1bb46cd0b8f13c65b214fe32734210bf5ccbd6bcc2ef5c4205e->leave($__internal_3b441cd4f1dca1bb46cd0b8f13c65b214fe32734210bf5ccbd6bcc2ef5c4205e_prof);

        
        $__internal_d17f49ea02deed9fa2ec91cd09cb59c9d248ef87b8d5efd3017cce44a9e31de8->leave($__internal_d17f49ea02deed9fa2ec91cd09cb59c9d248ef87b8d5efd3017cce44a9e31de8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8e5c8e71fab53a1f898b56207a28f6a5a52afa2fb8f3764f9c5b6168ffbdc3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5c8e71fab53a1f898b56207a28f6a5a52afa2fb8f3764f9c5b6168ffbdc3fc->enter($__internal_8e5c8e71fab53a1f898b56207a28f6a5a52afa2fb8f3764f9c5b6168ffbdc3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_46e6c246699c17f28d88cec7b3f9de4f7e98716427d76a70eb1f50f78bfb13fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e6c246699c17f28d88cec7b3f9de4f7e98716427d76a70eb1f50f78bfb13fd->enter($__internal_46e6c246699c17f28d88cec7b3f9de4f7e98716427d76a70eb1f50f78bfb13fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_46e6c246699c17f28d88cec7b3f9de4f7e98716427d76a70eb1f50f78bfb13fd->leave($__internal_46e6c246699c17f28d88cec7b3f9de4f7e98716427d76a70eb1f50f78bfb13fd_prof);

        
        $__internal_8e5c8e71fab53a1f898b56207a28f6a5a52afa2fb8f3764f9c5b6168ffbdc3fc->leave($__internal_8e5c8e71fab53a1f898b56207a28f6a5a52afa2fb8f3764f9c5b6168ffbdc3fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}

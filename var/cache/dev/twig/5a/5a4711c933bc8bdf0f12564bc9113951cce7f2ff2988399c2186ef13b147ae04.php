<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c49a6cdace9591901d40c0f6301310599b9beb7b98acc5ea5888c5e18211a79b extends Twig_Template
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
        $__internal_a124ca0c076cf2219f9e79601675add5f10d039113a4545cf13be03775ff2d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a124ca0c076cf2219f9e79601675add5f10d039113a4545cf13be03775ff2d6f->enter($__internal_a124ca0c076cf2219f9e79601675add5f10d039113a4545cf13be03775ff2d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_1942b35869d44b529adf8b66717e0b47bce7ede64c83e9f5a5d8a08189de28de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1942b35869d44b529adf8b66717e0b47bce7ede64c83e9f5a5d8a08189de28de->enter($__internal_1942b35869d44b529adf8b66717e0b47bce7ede64c83e9f5a5d8a08189de28de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a124ca0c076cf2219f9e79601675add5f10d039113a4545cf13be03775ff2d6f->leave($__internal_a124ca0c076cf2219f9e79601675add5f10d039113a4545cf13be03775ff2d6f_prof);

        
        $__internal_1942b35869d44b529adf8b66717e0b47bce7ede64c83e9f5a5d8a08189de28de->leave($__internal_1942b35869d44b529adf8b66717e0b47bce7ede64c83e9f5a5d8a08189de28de_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2baa3d8633810ac3bc315cbfbd9fe0d5a6b156af24f15e69bb0e6954de3f389e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baa3d8633810ac3bc315cbfbd9fe0d5a6b156af24f15e69bb0e6954de3f389e->enter($__internal_2baa3d8633810ac3bc315cbfbd9fe0d5a6b156af24f15e69bb0e6954de3f389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_67be98eaaafdc39f75a73590f3928f1651a33e69cf89b0656fd9d67714d2ed0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67be98eaaafdc39f75a73590f3928f1651a33e69cf89b0656fd9d67714d2ed0c->enter($__internal_67be98eaaafdc39f75a73590f3928f1651a33e69cf89b0656fd9d67714d2ed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_67be98eaaafdc39f75a73590f3928f1651a33e69cf89b0656fd9d67714d2ed0c->leave($__internal_67be98eaaafdc39f75a73590f3928f1651a33e69cf89b0656fd9d67714d2ed0c_prof);

        
        $__internal_2baa3d8633810ac3bc315cbfbd9fe0d5a6b156af24f15e69bb0e6954de3f389e->leave($__internal_2baa3d8633810ac3bc315cbfbd9fe0d5a6b156af24f15e69bb0e6954de3f389e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_703d6fb322c2e592d60c03f8826871cebd7685553a3d90e2529752dcd5708078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703d6fb322c2e592d60c03f8826871cebd7685553a3d90e2529752dcd5708078->enter($__internal_703d6fb322c2e592d60c03f8826871cebd7685553a3d90e2529752dcd5708078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8ec20b5975c31f0207331f1e4c7b96b135b17cd3a507c0b180fa0ded42e534f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec20b5975c31f0207331f1e4c7b96b135b17cd3a507c0b180fa0ded42e534f3->enter($__internal_8ec20b5975c31f0207331f1e4c7b96b135b17cd3a507c0b180fa0ded42e534f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8ec20b5975c31f0207331f1e4c7b96b135b17cd3a507c0b180fa0ded42e534f3->leave($__internal_8ec20b5975c31f0207331f1e4c7b96b135b17cd3a507c0b180fa0ded42e534f3_prof);

        
        $__internal_703d6fb322c2e592d60c03f8826871cebd7685553a3d90e2529752dcd5708078->leave($__internal_703d6fb322c2e592d60c03f8826871cebd7685553a3d90e2529752dcd5708078_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a57a9daef36ed3d5ca529158894b32fbae9a2134211d938088376922f747c3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57a9daef36ed3d5ca529158894b32fbae9a2134211d938088376922f747c3df->enter($__internal_a57a9daef36ed3d5ca529158894b32fbae9a2134211d938088376922f747c3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_14f2f340cddc05712167a55c0c9fad1fde3f805cd43a8812a7a2326615c527d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f2f340cddc05712167a55c0c9fad1fde3f805cd43a8812a7a2326615c527d5->enter($__internal_14f2f340cddc05712167a55c0c9fad1fde3f805cd43a8812a7a2326615c527d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_14f2f340cddc05712167a55c0c9fad1fde3f805cd43a8812a7a2326615c527d5->leave($__internal_14f2f340cddc05712167a55c0c9fad1fde3f805cd43a8812a7a2326615c527d5_prof);

        
        $__internal_a57a9daef36ed3d5ca529158894b32fbae9a2134211d938088376922f747c3df->leave($__internal_a57a9daef36ed3d5ca529158894b32fbae9a2134211d938088376922f747c3df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}

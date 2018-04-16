<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_75933de2854d25a4aaf76e2d41f38e7f0d4f942ec7dd42ef370ad4e593f3b9ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_078f05ec097dc9424ed7618477a824747ae7c2050dbe90bc4c36d4c4233bb706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078f05ec097dc9424ed7618477a824747ae7c2050dbe90bc4c36d4c4233bb706->enter($__internal_078f05ec097dc9424ed7618477a824747ae7c2050dbe90bc4c36d4c4233bb706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_f3eb3d9ae1cee1110ebbd0a84c6f8034f4e54cc6fea93d0fc51bc0a89c939a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eb3d9ae1cee1110ebbd0a84c6f8034f4e54cc6fea93d0fc51bc0a89c939a1d->enter($__internal_f3eb3d9ae1cee1110ebbd0a84c6f8034f4e54cc6fea93d0fc51bc0a89c939a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078f05ec097dc9424ed7618477a824747ae7c2050dbe90bc4c36d4c4233bb706->leave($__internal_078f05ec097dc9424ed7618477a824747ae7c2050dbe90bc4c36d4c4233bb706_prof);

        
        $__internal_f3eb3d9ae1cee1110ebbd0a84c6f8034f4e54cc6fea93d0fc51bc0a89c939a1d->leave($__internal_f3eb3d9ae1cee1110ebbd0a84c6f8034f4e54cc6fea93d0fc51bc0a89c939a1d_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_73958b44ca7bb54c1405547ad892c4a40ea07ec2d4e35588a798a34cf7445fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73958b44ca7bb54c1405547ad892c4a40ea07ec2d4e35588a798a34cf7445fb6->enter($__internal_73958b44ca7bb54c1405547ad892c4a40ea07ec2d4e35588a798a34cf7445fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_7995364d488fef456a462ef30ee984679d7a65c52601d8e88a8fd958864fe676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7995364d488fef456a462ef30ee984679d7a65c52601d8e88a8fd958864fe676->enter($__internal_7995364d488fef456a462ef30ee984679d7a65c52601d8e88a8fd958864fe676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7995364d488fef456a462ef30ee984679d7a65c52601d8e88a8fd958864fe676->leave($__internal_7995364d488fef456a462ef30ee984679d7a65c52601d8e88a8fd958864fe676_prof);

        
        $__internal_73958b44ca7bb54c1405547ad892c4a40ea07ec2d4e35588a798a34cf7445fb6->leave($__internal_73958b44ca7bb54c1405547ad892c4a40ea07ec2d4e35588a798a34cf7445fb6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% block formulaire %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock formulaire %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}

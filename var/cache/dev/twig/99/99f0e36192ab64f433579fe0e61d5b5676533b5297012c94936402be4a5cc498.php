<?php

/* FrontBundle:Message:search.html.twig */
class __TwigTemplate_104a7619227a3f585bb4e68e0e52dc66037d3214c4ad052108b6c9463aa090e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FrontBundle:Message:search.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f9319af93d9016c6de08346df66462a5f21fc29d0b0255bcbd082c1ca2c44cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9319af93d9016c6de08346df66462a5f21fc29d0b0255bcbd082c1ca2c44cc->enter($__internal_9f9319af93d9016c6de08346df66462a5f21fc29d0b0255bcbd082c1ca2c44cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:search.html.twig"));

        $__internal_39d6dd1e036183d271bdc371d1a4e8e2c792bd2614d895e80bdebd5b97a31693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d6dd1e036183d271bdc371d1a4e8e2c792bd2614d895e80bdebd5b97a31693->enter($__internal_39d6dd1e036183d271bdc371d1a4e8e2c792bd2614d895e80bdebd5b97a31693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9319af93d9016c6de08346df66462a5f21fc29d0b0255bcbd082c1ca2c44cc->leave($__internal_9f9319af93d9016c6de08346df66462a5f21fc29d0b0255bcbd082c1ca2c44cc_prof);

        
        $__internal_39d6dd1e036183d271bdc371d1a4e8e2c792bd2614d895e80bdebd5b97a31693->leave($__internal_39d6dd1e036183d271bdc371d1a4e8e2c792bd2614d895e80bdebd5b97a31693_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_0a5c9cbdbc948502d17a142333142d678a6cc84671c9ead4e37fa1786fdde2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5c9cbdbc948502d17a142333142d678a6cc84671c9ead4e37fa1786fdde2fb->enter($__internal_0a5c9cbdbc948502d17a142333142d678a6cc84671c9ead4e37fa1786fdde2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_c25e410a7cccce864cc57e1c8c767c3410adea656546e3016771c228e8a72ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25e410a7cccce864cc57e1c8c767c3410adea656546e3016771c228e8a72ef4->enter($__internal_c25e410a7cccce864cc57e1c8c767c3410adea656546e3016771c228e8a72ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("search", array(), "FOSMessageBundle");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, ($context["threads"] ?? $this->getContext($context, "threads"))), array("%num%" => twig_length_filter($this->env, ($context["threads"] ?? $this->getContext($context, "threads")))), "FOSMessageBundle");
        // line 9
        echo "</p>

";
        // line 11
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FrontBundle:Message:search.html.twig", 11)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 12
        echo "
";
        
        $__internal_c25e410a7cccce864cc57e1c8c767c3410adea656546e3016771c228e8a72ef4->leave($__internal_c25e410a7cccce864cc57e1c8c767c3410adea656546e3016771c228e8a72ef4_prof);

        
        $__internal_0a5c9cbdbc948502d17a142333142d678a6cc84671c9ead4e37fa1786fdde2fb->leave($__internal_0a5c9cbdbc948502d17a142333142d678a6cc84671c9ead4e37fa1786fdde2fb_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  63 => 11,  59 => 9,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}search{% endtrans %}</h2>

<p>{% transchoice threads|length with {'%num%': threads|length } from 'FOSMessageBundle' %}
    threads_found
{% endtranschoice %}</p>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FrontBundle:Message:search.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/search.html.twig");
    }
}

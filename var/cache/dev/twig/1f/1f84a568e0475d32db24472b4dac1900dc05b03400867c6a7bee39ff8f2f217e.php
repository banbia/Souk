<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7bf24578cb58efaa4e6abb3df450fe8cdd4902438194fd5f23fcab5ad8a57cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_75fe8962408bc5c731d85f7332d268616486634dea260cd42a6528946227e708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fe8962408bc5c731d85f7332d268616486634dea260cd42a6528946227e708->enter($__internal_75fe8962408bc5c731d85f7332d268616486634dea260cd42a6528946227e708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_503647bd87c65fd6fae64200a0a996687823e5da9bc89dcd34b43c14a4356897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503647bd87c65fd6fae64200a0a996687823e5da9bc89dcd34b43c14a4356897->enter($__internal_503647bd87c65fd6fae64200a0a996687823e5da9bc89dcd34b43c14a4356897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fe8962408bc5c731d85f7332d268616486634dea260cd42a6528946227e708->leave($__internal_75fe8962408bc5c731d85f7332d268616486634dea260cd42a6528946227e708_prof);

        
        $__internal_503647bd87c65fd6fae64200a0a996687823e5da9bc89dcd34b43c14a4356897->leave($__internal_503647bd87c65fd6fae64200a0a996687823e5da9bc89dcd34b43c14a4356897_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_081a0f5daa1bcbd80785f5880c624289c5d246f81188d64b7ba04516c9d16a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081a0f5daa1bcbd80785f5880c624289c5d246f81188d64b7ba04516c9d16a2b->enter($__internal_081a0f5daa1bcbd80785f5880c624289c5d246f81188d64b7ba04516c9d16a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_55c793dcada674387ecd89d4de0eb2c5c61cbc46ff8cbdac0704887ecde21966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c793dcada674387ecd89d4de0eb2c5c61cbc46ff8cbdac0704887ecde21966->enter($__internal_55c793dcada674387ecd89d4de0eb2c5c61cbc46ff8cbdac0704887ecde21966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_55c793dcada674387ecd89d4de0eb2c5c61cbc46ff8cbdac0704887ecde21966->leave($__internal_55c793dcada674387ecd89d4de0eb2c5c61cbc46ff8cbdac0704887ecde21966_prof);

        
        $__internal_081a0f5daa1bcbd80785f5880c624289c5d246f81188d64b7ba04516c9d16a2b->leave($__internal_081a0f5daa1bcbd80785f5880c624289c5d246f81188d64b7ba04516c9d16a2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}

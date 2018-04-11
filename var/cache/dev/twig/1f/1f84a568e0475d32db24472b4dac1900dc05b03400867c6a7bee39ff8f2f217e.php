<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7bf24578cb58efaa4e6abb3df450fe8cdd4902438194fd5f23fcab5ad8a57cdd extends Twig_Template
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
        $__internal_6562692de429e58f153ef9e377e2a2540c7d09157e4d5e8a8348d6d571b337ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6562692de429e58f153ef9e377e2a2540c7d09157e4d5e8a8348d6d571b337ae->enter($__internal_6562692de429e58f153ef9e377e2a2540c7d09157e4d5e8a8348d6d571b337ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_ece4b691e15e9b8561381b6d419119ab9bc9d5ab88cfe85f003c67d6276dccb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece4b691e15e9b8561381b6d419119ab9bc9d5ab88cfe85f003c67d6276dccb7->enter($__internal_ece4b691e15e9b8561381b6d419119ab9bc9d5ab88cfe85f003c67d6276dccb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6562692de429e58f153ef9e377e2a2540c7d09157e4d5e8a8348d6d571b337ae->leave($__internal_6562692de429e58f153ef9e377e2a2540c7d09157e4d5e8a8348d6d571b337ae_prof);

        
        $__internal_ece4b691e15e9b8561381b6d419119ab9bc9d5ab88cfe85f003c67d6276dccb7->leave($__internal_ece4b691e15e9b8561381b6d419119ab9bc9d5ab88cfe85f003c67d6276dccb7_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_b1222b4962e5f79346464be813b5b43d516edc3fd1f28bd2d692c07815d8e420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1222b4962e5f79346464be813b5b43d516edc3fd1f28bd2d692c07815d8e420->enter($__internal_b1222b4962e5f79346464be813b5b43d516edc3fd1f28bd2d692c07815d8e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_24e05874151d00e9cd7388b43f78bc0cd3138019a445ae0b854f7e5ca43e412d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e05874151d00e9cd7388b43f78bc0cd3138019a445ae0b854f7e5ca43e412d->enter($__internal_24e05874151d00e9cd7388b43f78bc0cd3138019a445ae0b854f7e5ca43e412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_24e05874151d00e9cd7388b43f78bc0cd3138019a445ae0b854f7e5ca43e412d->leave($__internal_24e05874151d00e9cd7388b43f78bc0cd3138019a445ae0b854f7e5ca43e412d_prof);

        
        $__internal_b1222b4962e5f79346464be813b5b43d516edc3fd1f28bd2d692c07815d8e420->leave($__internal_b1222b4962e5f79346464be813b5b43d516edc3fd1f28bd2d692c07815d8e420_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}

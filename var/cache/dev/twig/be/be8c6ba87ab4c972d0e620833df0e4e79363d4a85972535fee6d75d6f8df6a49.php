<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_c714f0b23aabc8cac13b41a985aac26691f3389bb7c7c24021c6c3d1f1244af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56e6644cf392d941c825bbc8d9669212984dacfae27fa0d7085c13b6bab0165e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e6644cf392d941c825bbc8d9669212984dacfae27fa0d7085c13b6bab0165e->enter($__internal_56e6644cf392d941c825bbc8d9669212984dacfae27fa0d7085c13b6bab0165e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_cc092c65c30e613574e084e3f539175a27e32fb5887fdbf65c4ca55413a30bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc092c65c30e613574e084e3f539175a27e32fb5887fdbf65c4ca55413a30bd2->enter($__internal_cc092c65c30e613574e084e3f539175a27e32fb5887fdbf65c4ca55413a30bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e6644cf392d941c825bbc8d9669212984dacfae27fa0d7085c13b6bab0165e->leave($__internal_56e6644cf392d941c825bbc8d9669212984dacfae27fa0d7085c13b6bab0165e_prof);

        
        $__internal_cc092c65c30e613574e084e3f539175a27e32fb5887fdbf65c4ca55413a30bd2->leave($__internal_cc092c65c30e613574e084e3f539175a27e32fb5887fdbf65c4ca55413a30bd2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce6a50966471113cf292733e26c3f603320c9c0e1f549996b8dbed8a1f5f8814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6a50966471113cf292733e26c3f603320c9c0e1f549996b8dbed8a1f5f8814->enter($__internal_ce6a50966471113cf292733e26c3f603320c9c0e1f549996b8dbed8a1f5f8814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef89d811ae1ff53b63ce76d519594bf37ee0d5dbb7bcb795904acd409431ddcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef89d811ae1ff53b63ce76d519594bf37ee0d5dbb7bcb795904acd409431ddcb->enter($__internal_ef89d811ae1ff53b63ce76d519594bf37ee0d5dbb7bcb795904acd409431ddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ef89d811ae1ff53b63ce76d519594bf37ee0d5dbb7bcb795904acd409431ddcb->leave($__internal_ef89d811ae1ff53b63ce76d519594bf37ee0d5dbb7bcb795904acd409431ddcb_prof);

        
        $__internal_ce6a50966471113cf292733e26c3f603320c9c0e1f549996b8dbed8a1f5f8814->leave($__internal_ce6a50966471113cf292733e26c3f603320c9c0e1f549996b8dbed8a1f5f8814_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}

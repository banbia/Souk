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
        $__internal_7a52813e4c19ca1787ae0cfe36231a278c4ee8ec9e2f6848cc89d4880fef86c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a52813e4c19ca1787ae0cfe36231a278c4ee8ec9e2f6848cc89d4880fef86c2->enter($__internal_7a52813e4c19ca1787ae0cfe36231a278c4ee8ec9e2f6848cc89d4880fef86c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_19f7255876193878ca609ba6868e4a677f42d09c178ba93f6e175c6790daf3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f7255876193878ca609ba6868e4a677f42d09c178ba93f6e175c6790daf3fd->enter($__internal_19f7255876193878ca609ba6868e4a677f42d09c178ba93f6e175c6790daf3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a52813e4c19ca1787ae0cfe36231a278c4ee8ec9e2f6848cc89d4880fef86c2->leave($__internal_7a52813e4c19ca1787ae0cfe36231a278c4ee8ec9e2f6848cc89d4880fef86c2_prof);

        
        $__internal_19f7255876193878ca609ba6868e4a677f42d09c178ba93f6e175c6790daf3fd->leave($__internal_19f7255876193878ca609ba6868e4a677f42d09c178ba93f6e175c6790daf3fd_prof);

    }

    // line 5
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_f2228935c05e3fe2c4163c568971dbb8afe6cc0a3a8cef5edb1c226c3c622f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2228935c05e3fe2c4163c568971dbb8afe6cc0a3a8cef5edb1c226c3c622f9b->enter($__internal_f2228935c05e3fe2c4163c568971dbb8afe6cc0a3a8cef5edb1c226c3c622f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_c6520ffa64f2c38628ae6c72f379d8aa10c1877e879659d98691e0db453f32b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6520ffa64f2c38628ae6c72f379d8aa10c1877e879659d98691e0db453f32b1->enter($__internal_c6520ffa64f2c38628ae6c72f379d8aa10c1877e879659d98691e0db453f32b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_c6520ffa64f2c38628ae6c72f379d8aa10c1877e879659d98691e0db453f32b1->leave($__internal_c6520ffa64f2c38628ae6c72f379d8aa10c1877e879659d98691e0db453f32b1_prof);

        
        $__internal_f2228935c05e3fe2c4163c568971dbb8afe6cc0a3a8cef5edb1c226c3c622f9b->leave($__internal_f2228935c05e3fe2c4163c568971dbb8afe6cc0a3a8cef5edb1c226c3c622f9b_prof);

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

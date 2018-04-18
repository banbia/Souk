<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_cd5430b281917fc3e099f509f375b66c48d7b9b7c7c5f5679a9b44a12f2bfc06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dce049165fb327d25c67a07bb8cdbe8daf25c8328e327e1f213af2dfd993a619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce049165fb327d25c67a07bb8cdbe8daf25c8328e327e1f213af2dfd993a619->enter($__internal_dce049165fb327d25c67a07bb8cdbe8daf25c8328e327e1f213af2dfd993a619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_935915188f214af1564a3d6855eb645139ee40438846cf49e8e137151fcedde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935915188f214af1564a3d6855eb645139ee40438846cf49e8e137151fcedde9->enter($__internal_935915188f214af1564a3d6855eb645139ee40438846cf49e8e137151fcedde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce049165fb327d25c67a07bb8cdbe8daf25c8328e327e1f213af2dfd993a619->leave($__internal_dce049165fb327d25c67a07bb8cdbe8daf25c8328e327e1f213af2dfd993a619_prof);

        
        $__internal_935915188f214af1564a3d6855eb645139ee40438846cf49e8e137151fcedde9->leave($__internal_935915188f214af1564a3d6855eb645139ee40438846cf49e8e137151fcedde9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_99c480dbf44375fb7e6e85583dc5812a376ad7b77d82b3d59c401c61a57ebd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c480dbf44375fb7e6e85583dc5812a376ad7b77d82b3d59c401c61a57ebd5b->enter($__internal_99c480dbf44375fb7e6e85583dc5812a376ad7b77d82b3d59c401c61a57ebd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bd2ac936ec1c86cd669304ef6caa88ba55af70ad01e36a449a967e7570832947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2ac936ec1c86cd669304ef6caa88ba55af70ad01e36a449a967e7570832947->enter($__internal_bd2ac936ec1c86cd669304ef6caa88ba55af70ad01e36a449a967e7570832947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bd2ac936ec1c86cd669304ef6caa88ba55af70ad01e36a449a967e7570832947->leave($__internal_bd2ac936ec1c86cd669304ef6caa88ba55af70ad01e36a449a967e7570832947_prof);

        
        $__internal_99c480dbf44375fb7e6e85583dc5812a376ad7b77d82b3d59c401c61a57ebd5b->leave($__internal_99c480dbf44375fb7e6e85583dc5812a376ad7b77d82b3d59c401c61a57ebd5b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_177291c31ed621027b6cbd93d5c2510a97b90869a286ffcc29f3a2fa013fb59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177291c31ed621027b6cbd93d5c2510a97b90869a286ffcc29f3a2fa013fb59f->enter($__internal_177291c31ed621027b6cbd93d5c2510a97b90869a286ffcc29f3a2fa013fb59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a73ba36b9f671ce144daebcd7da51b96bb61238c5bdcebafa9b128783606a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a73ba36b9f671ce144daebcd7da51b96bb61238c5bdcebafa9b128783606a96->enter($__internal_8a73ba36b9f671ce144daebcd7da51b96bb61238c5bdcebafa9b128783606a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8a73ba36b9f671ce144daebcd7da51b96bb61238c5bdcebafa9b128783606a96->leave($__internal_8a73ba36b9f671ce144daebcd7da51b96bb61238c5bdcebafa9b128783606a96_prof);

        
        $__internal_177291c31ed621027b6cbd93d5c2510a97b90869a286ffcc29f3a2fa013fb59f->leave($__internal_177291c31ed621027b6cbd93d5c2510a97b90869a286ffcc29f3a2fa013fb59f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

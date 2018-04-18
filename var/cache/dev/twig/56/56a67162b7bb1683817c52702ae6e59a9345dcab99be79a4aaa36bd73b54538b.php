<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_cf926b1cc016d22012cd7949a3a757ded702bd9b43d3c4fc0860caed10eca414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2da48956a67461ac412a50246d39ff85da1b2d64441c1e1dc3cbebdc4f91445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2da48956a67461ac412a50246d39ff85da1b2d64441c1e1dc3cbebdc4f91445->enter($__internal_d2da48956a67461ac412a50246d39ff85da1b2d64441c1e1dc3cbebdc4f91445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_e95c3a2fefea2d5272a815d4d9f82e543dd37068a8a98b69712c8fa2e4650790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95c3a2fefea2d5272a815d4d9f82e543dd37068a8a98b69712c8fa2e4650790->enter($__internal_e95c3a2fefea2d5272a815d4d9f82e543dd37068a8a98b69712c8fa2e4650790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2da48956a67461ac412a50246d39ff85da1b2d64441c1e1dc3cbebdc4f91445->leave($__internal_d2da48956a67461ac412a50246d39ff85da1b2d64441c1e1dc3cbebdc4f91445_prof);

        
        $__internal_e95c3a2fefea2d5272a815d4d9f82e543dd37068a8a98b69712c8fa2e4650790->leave($__internal_e95c3a2fefea2d5272a815d4d9f82e543dd37068a8a98b69712c8fa2e4650790_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_5109fff714c79a6f426cd12baee631a5ddc7c553d621a046ca8cab8a70e78573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5109fff714c79a6f426cd12baee631a5ddc7c553d621a046ca8cab8a70e78573->enter($__internal_5109fff714c79a6f426cd12baee631a5ddc7c553d621a046ca8cab8a70e78573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_7cffdc811278998b89520ffa7cbe6179f8a966fbf1343bd36d85be4fb6180cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cffdc811278998b89520ffa7cbe6179f8a966fbf1343bd36d85be4fb6180cbe->enter($__internal_7cffdc811278998b89520ffa7cbe6179f8a966fbf1343bd36d85be4fb6180cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_7cffdc811278998b89520ffa7cbe6179f8a966fbf1343bd36d85be4fb6180cbe->leave($__internal_7cffdc811278998b89520ffa7cbe6179f8a966fbf1343bd36d85be4fb6180cbe_prof);

        
        $__internal_5109fff714c79a6f426cd12baee631a5ddc7c553d621a046ca8cab8a70e78573->leave($__internal_5109fff714c79a6f426cd12baee631a5ddc7c553d621a046ca8cab8a70e78573_prof);

    }

    // line 6
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_e3bd8ea93a823be59c9930da60cb562ebeccd73bcf3764dd5aea0e7de19e6d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bd8ea93a823be59c9930da60cb562ebeccd73bcf3764dd5aea0e7de19e6d33->enter($__internal_e3bd8ea93a823be59c9930da60cb562ebeccd73bcf3764dd5aea0e7de19e6d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_f4650ee82f46a4f128d971438aafd0e062c72291e1ca17b4b101e97d9b217b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4650ee82f46a4f128d971438aafd0e062c72291e1ca17b4b101e97d9b217b10->enter($__internal_f4650ee82f46a4f128d971438aafd0e062c72291e1ca17b4b101e97d9b217b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 7
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
        
        $__internal_f4650ee82f46a4f128d971438aafd0e062c72291e1ca17b4b101e97d9b217b10->leave($__internal_f4650ee82f46a4f128d971438aafd0e062c72291e1ca17b4b101e97d9b217b10_prof);

        
        $__internal_e3bd8ea93a823be59c9930da60cb562ebeccd73bcf3764dd5aea0e7de19e6d33->leave($__internal_e3bd8ea93a823be59c9930da60cb562ebeccd73bcf3764dd5aea0e7de19e6d33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  64 => 6,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{% block style %}
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block formulaire %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock formulaire %}
", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/show.html.twig");
    }
}

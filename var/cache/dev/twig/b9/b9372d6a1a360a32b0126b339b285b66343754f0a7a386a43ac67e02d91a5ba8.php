<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8ae848a9320815ffe3ccb58370164159857aa85045e55955d69841f223aa8ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_98bba372023aa309202dc2b39a677e24c1dc1c14c8634580d5bb6d4e42bee286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bba372023aa309202dc2b39a677e24c1dc1c14c8634580d5bb6d4e42bee286->enter($__internal_98bba372023aa309202dc2b39a677e24c1dc1c14c8634580d5bb6d4e42bee286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_a4f646958379e1653ec73c04f02875d5532e3e4f2b245c9e473324aca511b9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f646958379e1653ec73c04f02875d5532e3e4f2b245c9e473324aca511b9fb->enter($__internal_a4f646958379e1653ec73c04f02875d5532e3e4f2b245c9e473324aca511b9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98bba372023aa309202dc2b39a677e24c1dc1c14c8634580d5bb6d4e42bee286->leave($__internal_98bba372023aa309202dc2b39a677e24c1dc1c14c8634580d5bb6d4e42bee286_prof);

        
        $__internal_a4f646958379e1653ec73c04f02875d5532e3e4f2b245c9e473324aca511b9fb->leave($__internal_a4f646958379e1653ec73c04f02875d5532e3e4f2b245c9e473324aca511b9fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e6f8c0401f1988760ae2a4b330e4e85d2cb1c5f2191ddd7188d515f731cda81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6f8c0401f1988760ae2a4b330e4e85d2cb1c5f2191ddd7188d515f731cda81->enter($__internal_3e6f8c0401f1988760ae2a4b330e4e85d2cb1c5f2191ddd7188d515f731cda81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f87674ec9840d08e3f072f509f761412b8a8d3db3b8ce9ae3c06149f44549ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87674ec9840d08e3f072f509f761412b8a8d3db3b8ce9ae3c06149f44549ea9->enter($__internal_f87674ec9840d08e3f072f509f761412b8a8d3db3b8ce9ae3c06149f44549ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f87674ec9840d08e3f072f509f761412b8a8d3db3b8ce9ae3c06149f44549ea9->leave($__internal_f87674ec9840d08e3f072f509f761412b8a8d3db3b8ce9ae3c06149f44549ea9_prof);

        
        $__internal_3e6f8c0401f1988760ae2a4b330e4e85d2cb1c5f2191ddd7188d515f731cda81->leave($__internal_3e6f8c0401f1988760ae2a4b330e4e85d2cb1c5f2191ddd7188d515f731cda81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/show.html.twig");
    }
}

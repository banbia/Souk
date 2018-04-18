<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_487871b7216709dd9bcebce22fb17172a480aad8e4d9a7bb6383354a40fdebc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f24fd8f0e27c982f99f3dc52b1c2b856b23840a085e0a7f6735ae6cfafd1b8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24fd8f0e27c982f99f3dc52b1c2b856b23840a085e0a7f6735ae6cfafd1b8c8->enter($__internal_f24fd8f0e27c982f99f3dc52b1c2b856b23840a085e0a7f6735ae6cfafd1b8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b93970cf250f4e10c6431a213d6a6bb3158145c130729cc99143ba2cc6fec8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93970cf250f4e10c6431a213d6a6bb3158145c130729cc99143ba2cc6fec8fb->enter($__internal_b93970cf250f4e10c6431a213d6a6bb3158145c130729cc99143ba2cc6fec8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f24fd8f0e27c982f99f3dc52b1c2b856b23840a085e0a7f6735ae6cfafd1b8c8->leave($__internal_f24fd8f0e27c982f99f3dc52b1c2b856b23840a085e0a7f6735ae6cfafd1b8c8_prof);

        
        $__internal_b93970cf250f4e10c6431a213d6a6bb3158145c130729cc99143ba2cc6fec8fb->leave($__internal_b93970cf250f4e10c6431a213d6a6bb3158145c130729cc99143ba2cc6fec8fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0a777071bb1802ae515efb4432df6d6f16c135ade7d41182201243ffb681936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a777071bb1802ae515efb4432df6d6f16c135ade7d41182201243ffb681936->enter($__internal_e0a777071bb1802ae515efb4432df6d6f16c135ade7d41182201243ffb681936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d20a3e703db1909825ffd315a9e9b4afaaaa9f9b40d1e289da8c3c5c1b36541a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20a3e703db1909825ffd315a9e9b4afaaaa9f9b40d1e289da8c3c5c1b36541a->enter($__internal_d20a3e703db1909825ffd315a9e9b4afaaaa9f9b40d1e289da8c3c5c1b36541a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d20a3e703db1909825ffd315a9e9b4afaaaa9f9b40d1e289da8c3c5c1b36541a->leave($__internal_d20a3e703db1909825ffd315a9e9b4afaaaa9f9b40d1e289da8c3c5c1b36541a_prof);

        
        $__internal_e0a777071bb1802ae515efb4432df6d6f16c135ade7d41182201243ffb681936->leave($__internal_e0a777071bb1802ae515efb4432df6d6f16c135ade7d41182201243ffb681936_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7638b3b0e3d6a87b8a46174f8190c4c623d3fc99fe5244bb61cb0bb426805718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_68b45e88da71b80fb85f5f2612c5c955235ce2a0d11ebff6fd34c034395a3f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b45e88da71b80fb85f5f2612c5c955235ce2a0d11ebff6fd34c034395a3f64->enter($__internal_68b45e88da71b80fb85f5f2612c5c955235ce2a0d11ebff6fd34c034395a3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_2a43bb285d99080a2ec5cb12387f943e4378eee42bfed52aacaa782e721f88f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a43bb285d99080a2ec5cb12387f943e4378eee42bfed52aacaa782e721f88f4->enter($__internal_2a43bb285d99080a2ec5cb12387f943e4378eee42bfed52aacaa782e721f88f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b45e88da71b80fb85f5f2612c5c955235ce2a0d11ebff6fd34c034395a3f64->leave($__internal_68b45e88da71b80fb85f5f2612c5c955235ce2a0d11ebff6fd34c034395a3f64_prof);

        
        $__internal_2a43bb285d99080a2ec5cb12387f943e4378eee42bfed52aacaa782e721f88f4->leave($__internal_2a43bb285d99080a2ec5cb12387f943e4378eee42bfed52aacaa782e721f88f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c03b106030a3389fda9adbb707d8cfaac0c472671f75c39c10c367c51a9e1423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03b106030a3389fda9adbb707d8cfaac0c472671f75c39c10c367c51a9e1423->enter($__internal_c03b106030a3389fda9adbb707d8cfaac0c472671f75c39c10c367c51a9e1423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9fcae9f24b8431d6c41de5542e5cfe703e0f4c00ec72ec6c6205fc4584c8ddc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcae9f24b8431d6c41de5542e5cfe703e0f4c00ec72ec6c6205fc4584c8ddc5->enter($__internal_9fcae9f24b8431d6c41de5542e5cfe703e0f4c00ec72ec6c6205fc4584c8ddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9fcae9f24b8431d6c41de5542e5cfe703e0f4c00ec72ec6c6205fc4584c8ddc5->leave($__internal_9fcae9f24b8431d6c41de5542e5cfe703e0f4c00ec72ec6c6205fc4584c8ddc5_prof);

        
        $__internal_c03b106030a3389fda9adbb707d8cfaac0c472671f75c39c10c367c51a9e1423->leave($__internal_c03b106030a3389fda9adbb707d8cfaac0c472671f75c39c10c367c51a9e1423_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}

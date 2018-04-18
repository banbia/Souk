<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b00928b8d2ba4cbb237bf55ca5e6aebfe474ecc951bbb3c298cd299b23467faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_dfca3d3020fe23b15e12691fb240680cdc0c1b15f5dc6e56c541bb06805abbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfca3d3020fe23b15e12691fb240680cdc0c1b15f5dc6e56c541bb06805abbcc->enter($__internal_dfca3d3020fe23b15e12691fb240680cdc0c1b15f5dc6e56c541bb06805abbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_ebc9fa9c4a90e2f8a00b45cd1d8d7f1dbf1a5ff38867f1e70ed35ba734e620e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc9fa9c4a90e2f8a00b45cd1d8d7f1dbf1a5ff38867f1e70ed35ba734e620e3->enter($__internal_ebc9fa9c4a90e2f8a00b45cd1d8d7f1dbf1a5ff38867f1e70ed35ba734e620e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfca3d3020fe23b15e12691fb240680cdc0c1b15f5dc6e56c541bb06805abbcc->leave($__internal_dfca3d3020fe23b15e12691fb240680cdc0c1b15f5dc6e56c541bb06805abbcc_prof);

        
        $__internal_ebc9fa9c4a90e2f8a00b45cd1d8d7f1dbf1a5ff38867f1e70ed35ba734e620e3->leave($__internal_ebc9fa9c4a90e2f8a00b45cd1d8d7f1dbf1a5ff38867f1e70ed35ba734e620e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_254998678a986ca1bf2fb0d0faa33ee9f3bc3a133519856539adc6916ab30621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254998678a986ca1bf2fb0d0faa33ee9f3bc3a133519856539adc6916ab30621->enter($__internal_254998678a986ca1bf2fb0d0faa33ee9f3bc3a133519856539adc6916ab30621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f7e24628e6d6f26b3994bb502453c9da17f35f1284f7d5e4c6cad08662db180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7e24628e6d6f26b3994bb502453c9da17f35f1284f7d5e4c6cad08662db180->enter($__internal_6f7e24628e6d6f26b3994bb502453c9da17f35f1284f7d5e4c6cad08662db180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6f7e24628e6d6f26b3994bb502453c9da17f35f1284f7d5e4c6cad08662db180->leave($__internal_6f7e24628e6d6f26b3994bb502453c9da17f35f1284f7d5e4c6cad08662db180_prof);

        
        $__internal_254998678a986ca1bf2fb0d0faa33ee9f3bc3a133519856539adc6916ab30621->leave($__internal_254998678a986ca1bf2fb0d0faa33ee9f3bc3a133519856539adc6916ab30621_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/edit.html.twig");
    }
}

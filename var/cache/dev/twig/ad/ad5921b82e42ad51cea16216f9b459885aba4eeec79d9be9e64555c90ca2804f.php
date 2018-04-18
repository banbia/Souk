<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_07c5201d8aabee5c3cbaeb3d7a23e0b73cc9aea6a2706bdaa06d06ecad3c8ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_db95c67269f81426672b66702f1eb8fd9f8af832d0defd76fad493e7dcd2125a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db95c67269f81426672b66702f1eb8fd9f8af832d0defd76fad493e7dcd2125a->enter($__internal_db95c67269f81426672b66702f1eb8fd9f8af832d0defd76fad493e7dcd2125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_d01bbd69a754b032edebae901e3d0223fa0631cf0b637f29c7f0e78f0ad78878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01bbd69a754b032edebae901e3d0223fa0631cf0b637f29c7f0e78f0ad78878->enter($__internal_d01bbd69a754b032edebae901e3d0223fa0631cf0b637f29c7f0e78f0ad78878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db95c67269f81426672b66702f1eb8fd9f8af832d0defd76fad493e7dcd2125a->leave($__internal_db95c67269f81426672b66702f1eb8fd9f8af832d0defd76fad493e7dcd2125a_prof);

        
        $__internal_d01bbd69a754b032edebae901e3d0223fa0631cf0b637f29c7f0e78f0ad78878->leave($__internal_d01bbd69a754b032edebae901e3d0223fa0631cf0b637f29c7f0e78f0ad78878_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95d9e6cc486f0e2bad77794d9a52df49c36e1e7c3c67af9e8f923cb09e54eb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d9e6cc486f0e2bad77794d9a52df49c36e1e7c3c67af9e8f923cb09e54eb00->enter($__internal_95d9e6cc486f0e2bad77794d9a52df49c36e1e7c3c67af9e8f923cb09e54eb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb02da1531b30ca70645b5201898b5e10b0e8bd40d736623490294f23040d583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb02da1531b30ca70645b5201898b5e10b0e8bd40d736623490294f23040d583->enter($__internal_bb02da1531b30ca70645b5201898b5e10b0e8bd40d736623490294f23040d583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bb02da1531b30ca70645b5201898b5e10b0e8bd40d736623490294f23040d583->leave($__internal_bb02da1531b30ca70645b5201898b5e10b0e8bd40d736623490294f23040d583_prof);

        
        $__internal_95d9e6cc486f0e2bad77794d9a52df49c36e1e7c3c67af9e8f923cb09e54eb00->leave($__internal_95d9e6cc486f0e2bad77794d9a52df49c36e1e7c3c67af9e8f923cb09e54eb00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/new.html.twig");
    }
}

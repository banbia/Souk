<?php

/* FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig */
class __TwigTemplate_38bfa238e9c3dcb0d808d9c12847ea1beafaa8273b31d746e9d78dbc109d5da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d17925c2fe157e683aa4bd37781d5117822d09e4c3205b00bb91fa4e976674d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d17925c2fe157e683aa4bd37781d5117822d09e4c3205b00bb91fa4e976674d->enter($__internal_6d17925c2fe157e683aa4bd37781d5117822d09e4c3205b00bb91fa4e976674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig"));

        $__internal_30242a47a7e0a7cc9f1e4777d2c303248d776d055e22395999ee07e9ce5f2789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30242a47a7e0a7cc9f1e4777d2c303248d776d055e22395999ee07e9ce5f2789->enter($__internal_30242a47a7e0a7cc9f1e4777d2c303248d776d055e22395999ee07e9ce5f2789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d17925c2fe157e683aa4bd37781d5117822d09e4c3205b00bb91fa4e976674d->leave($__internal_6d17925c2fe157e683aa4bd37781d5117822d09e4c3205b00bb91fa4e976674d_prof);

        
        $__internal_30242a47a7e0a7cc9f1e4777d2c303248d776d055e22395999ee07e9ce5f2789->leave($__internal_30242a47a7e0a7cc9f1e4777d2c303248d776d055e22395999ee07e9ce5f2789_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e72fac4a37d17f73ed8815714569652248025fceaef2b152a185f0558b5885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e72fac4a37d17f73ed8815714569652248025fceaef2b152a185f0558b5885->enter($__internal_f5e72fac4a37d17f73ed8815714569652248025fceaef2b152a185f0558b5885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25d290277281b8659c7a195386175e299119e1e5b3fb57b51ce3a03c069127b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d290277281b8659c7a195386175e299119e1e5b3fb57b51ce3a03c069127b8->enter($__internal_25d290277281b8659c7a195386175e299119e1e5b3fb57b51ce3a03c069127b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<p> bonjour </p>
";
        
        $__internal_25d290277281b8659c7a195386175e299119e1e5b3fb57b51ce3a03c069127b8->leave($__internal_25d290277281b8659c7a195386175e299119e1e5b3fb57b51ce3a03c069127b8_prof);

        
        $__internal_f5e72fac4a37d17f73ed8815714569652248025fceaef2b152a185f0558b5885->leave($__internal_f5e72fac4a37d17f73ed8815714569652248025fceaef2b152a185f0558b5885_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig";
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
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}
<p> bonjour </p>
{% endblock %}", "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commentairesEvs/delete_commentaireEvs.html.twig");
    }
}

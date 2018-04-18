<?php

/* FrontBundle:commentairesAnc:delete_commentaireAnc.html.twig */
class __TwigTemplate_66572ab6417dc33b25eebb29ff8ae3938bbc69d9b8eb20dc4245e367defbd9ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesAnc:delete_commentaireAnc.html.twig", 1);
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
        $__internal_e5f4eb3632f297c147b1707b28db9389a0a0d55811b8e36b528d79db9bbcd5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f4eb3632f297c147b1707b28db9389a0a0d55811b8e36b528d79db9bbcd5bf->enter($__internal_e5f4eb3632f297c147b1707b28db9389a0a0d55811b8e36b528d79db9bbcd5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:delete_commentaireAnc.html.twig"));

        $__internal_c388756b4f329e1824cc2926745861924e7b0447df42b7936af244ac8078a213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c388756b4f329e1824cc2926745861924e7b0447df42b7936af244ac8078a213->enter($__internal_c388756b4f329e1824cc2926745861924e7b0447df42b7936af244ac8078a213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:delete_commentaireAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f4eb3632f297c147b1707b28db9389a0a0d55811b8e36b528d79db9bbcd5bf->leave($__internal_e5f4eb3632f297c147b1707b28db9389a0a0d55811b8e36b528d79db9bbcd5bf_prof);

        
        $__internal_c388756b4f329e1824cc2926745861924e7b0447df42b7936af244ac8078a213->leave($__internal_c388756b4f329e1824cc2926745861924e7b0447df42b7936af244ac8078a213_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e1ff4e4fa8e8c9770afe052954e74f6b251d9f56de8e6265e934d45d1e0b8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1ff4e4fa8e8c9770afe052954e74f6b251d9f56de8e6265e934d45d1e0b8de->enter($__internal_6e1ff4e4fa8e8c9770afe052954e74f6b251d9f56de8e6265e934d45d1e0b8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6f02cfe3729d23c4ac259d49a930fcd77296ca0e6f2e610d8b5f11e8620532a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f02cfe3729d23c4ac259d49a930fcd77296ca0e6f2e610d8b5f11e8620532a->enter($__internal_e6f02cfe3729d23c4ac259d49a930fcd77296ca0e6f2e610d8b5f11e8620532a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<p> bonjour </p>
";
        
        $__internal_e6f02cfe3729d23c4ac259d49a930fcd77296ca0e6f2e610d8b5f11e8620532a->leave($__internal_e6f02cfe3729d23c4ac259d49a930fcd77296ca0e6f2e610d8b5f11e8620532a_prof);

        
        $__internal_6e1ff4e4fa8e8c9770afe052954e74f6b251d9f56de8e6265e934d45d1e0b8de->leave($__internal_6e1ff4e4fa8e8c9770afe052954e74f6b251d9f56de8e6265e934d45d1e0b8de_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesAnc:delete_commentaireAnc.html.twig";
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
{% endblock %}
", "FrontBundle:commentairesAnc:delete_commentaireAnc.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commentairesAnc/delete_commentaireAnc.html.twig");
    }
}

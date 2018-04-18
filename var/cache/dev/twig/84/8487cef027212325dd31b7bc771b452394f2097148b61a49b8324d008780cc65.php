<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c4798913001d6bb9d1ee2b66ddc3f976fa55834db70bb9653be0727e78590e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4caf5378faa2d43706c84051dba40c08bb455b4adf0b518f2ecdd03ed2ce09d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4caf5378faa2d43706c84051dba40c08bb455b4adf0b518f2ecdd03ed2ce09d4->enter($__internal_4caf5378faa2d43706c84051dba40c08bb455b4adf0b518f2ecdd03ed2ce09d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8465ea3678238094b976ffb40a445385e0ea540e6bf25c2d30ffaa3fdd9935e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8465ea3678238094b976ffb40a445385e0ea540e6bf25c2d30ffaa3fdd9935e3->enter($__internal_8465ea3678238094b976ffb40a445385e0ea540e6bf25c2d30ffaa3fdd9935e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4caf5378faa2d43706c84051dba40c08bb455b4adf0b518f2ecdd03ed2ce09d4->leave($__internal_4caf5378faa2d43706c84051dba40c08bb455b4adf0b518f2ecdd03ed2ce09d4_prof);

        
        $__internal_8465ea3678238094b976ffb40a445385e0ea540e6bf25c2d30ffaa3fdd9935e3->leave($__internal_8465ea3678238094b976ffb40a445385e0ea540e6bf25c2d30ffaa3fdd9935e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b98aaff1b4b7459c3d92cc2e38c1ff5efe21b09839f179300ec6041f85d86d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98aaff1b4b7459c3d92cc2e38c1ff5efe21b09839f179300ec6041f85d86d3d->enter($__internal_b98aaff1b4b7459c3d92cc2e38c1ff5efe21b09839f179300ec6041f85d86d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d9049746dc1e60bea722d3a40363ef10eb00ff630fb770f42c6c652c886fca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9049746dc1e60bea722d3a40363ef10eb00ff630fb770f42c6c652c886fca6->enter($__internal_1d9049746dc1e60bea722d3a40363ef10eb00ff630fb770f42c6c652c886fca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1d9049746dc1e60bea722d3a40363ef10eb00ff630fb770f42c6c652c886fca6->leave($__internal_1d9049746dc1e60bea722d3a40363ef10eb00ff630fb770f42c6c652c886fca6_prof);

        
        $__internal_b98aaff1b4b7459c3d92cc2e38c1ff5efe21b09839f179300ec6041f85d86d3d->leave($__internal_b98aaff1b4b7459c3d92cc2e38c1ff5efe21b09839f179300ec6041f85d86d3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}

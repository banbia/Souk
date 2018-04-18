<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_11c65e737a0fa2eb62c6f23c1123241b4878a16337103ae2f523b08f20305037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e07bc643ea36b73b42625f6cf0f1892f6e8c9e7b42ea7534395bbd0beb507e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07bc643ea36b73b42625f6cf0f1892f6e8c9e7b42ea7534395bbd0beb507e5f->enter($__internal_e07bc643ea36b73b42625f6cf0f1892f6e8c9e7b42ea7534395bbd0beb507e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_ee6dea9a2f7b236702827c49107d03809752958214f575ca882e961fb1930b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6dea9a2f7b236702827c49107d03809752958214f575ca882e961fb1930b95->enter($__internal_ee6dea9a2f7b236702827c49107d03809752958214f575ca882e961fb1930b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07bc643ea36b73b42625f6cf0f1892f6e8c9e7b42ea7534395bbd0beb507e5f->leave($__internal_e07bc643ea36b73b42625f6cf0f1892f6e8c9e7b42ea7534395bbd0beb507e5f_prof);

        
        $__internal_ee6dea9a2f7b236702827c49107d03809752958214f575ca882e961fb1930b95->leave($__internal_ee6dea9a2f7b236702827c49107d03809752958214f575ca882e961fb1930b95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f194ddbea2b30125001c5eac50d2c93a4a7837ac8cbf72cffe1f45b40c475630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f194ddbea2b30125001c5eac50d2c93a4a7837ac8cbf72cffe1f45b40c475630->enter($__internal_f194ddbea2b30125001c5eac50d2c93a4a7837ac8cbf72cffe1f45b40c475630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c1cd8dd4fbfa294ecff16a44531a087326464995f146cdde9d27cebcad389ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1cd8dd4fbfa294ecff16a44531a087326464995f146cdde9d27cebcad389ee->enter($__internal_4c1cd8dd4fbfa294ecff16a44531a087326464995f146cdde9d27cebcad389ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4c1cd8dd4fbfa294ecff16a44531a087326464995f146cdde9d27cebcad389ee->leave($__internal_4c1cd8dd4fbfa294ecff16a44531a087326464995f146cdde9d27cebcad389ee_prof);

        
        $__internal_f194ddbea2b30125001c5eac50d2c93a4a7837ac8cbf72cffe1f45b40c475630->leave($__internal_f194ddbea2b30125001c5eac50d2c93a4a7837ac8cbf72cffe1f45b40c475630_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}

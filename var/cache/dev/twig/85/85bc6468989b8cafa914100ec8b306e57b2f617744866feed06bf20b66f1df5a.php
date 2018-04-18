<?php

/* FrontBundle:commentairesEvs:new_commentaireEvs.html.twig */
class __TwigTemplate_0bd34fec670089b83445c186680eaa1523aa8078e179230cd99a5dc33f026486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesEvs:new_commentaireEvs.html.twig", 1);
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
        $__internal_ac998d3f98cf8d1fb3429d685678238004751ae17b808ec303e359a3994064b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac998d3f98cf8d1fb3429d685678238004751ae17b808ec303e359a3994064b3->enter($__internal_ac998d3f98cf8d1fb3429d685678238004751ae17b808ec303e359a3994064b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:new_commentaireEvs.html.twig"));

        $__internal_16c4a8ddf71fb86cce3f3c7e640ef7602e0cdf8b6c734a60e5dd59a8f39dcfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c4a8ddf71fb86cce3f3c7e640ef7602e0cdf8b6c734a60e5dd59a8f39dcfc3->enter($__internal_16c4a8ddf71fb86cce3f3c7e640ef7602e0cdf8b6c734a60e5dd59a8f39dcfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:new_commentaireEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac998d3f98cf8d1fb3429d685678238004751ae17b808ec303e359a3994064b3->leave($__internal_ac998d3f98cf8d1fb3429d685678238004751ae17b808ec303e359a3994064b3_prof);

        
        $__internal_16c4a8ddf71fb86cce3f3c7e640ef7602e0cdf8b6c734a60e5dd59a8f39dcfc3->leave($__internal_16c4a8ddf71fb86cce3f3c7e640ef7602e0cdf8b6c734a60e5dd59a8f39dcfc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85896de10482cc68a7eead01308466e1580448274d3dbd6de2e1898c1d58f4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85896de10482cc68a7eead01308466e1580448274d3dbd6de2e1898c1d58f4d7->enter($__internal_85896de10482cc68a7eead01308466e1580448274d3dbd6de2e1898c1d58f4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06070d8912cc002d93f694964a5cd6f61683da80669a6babadc473fc5d44e933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06070d8912cc002d93f694964a5cd6f61683da80669a6babadc473fc5d44e933->enter($__internal_06070d8912cc002d93f694964a5cd6f61683da80669a6babadc473fc5d44e933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<p> bonjour </p>
";
        
        $__internal_06070d8912cc002d93f694964a5cd6f61683da80669a6babadc473fc5d44e933->leave($__internal_06070d8912cc002d93f694964a5cd6f61683da80669a6babadc473fc5d44e933_prof);

        
        $__internal_85896de10482cc68a7eead01308466e1580448274d3dbd6de2e1898c1d58f4d7->leave($__internal_85896de10482cc68a7eead01308466e1580448274d3dbd6de2e1898c1d58f4d7_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesEvs:new_commentaireEvs.html.twig";
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
{% endblock %}", "FrontBundle:commentairesEvs:new_commentaireEvs.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commentairesEvs/new_commentaireEvs.html.twig");
    }
}

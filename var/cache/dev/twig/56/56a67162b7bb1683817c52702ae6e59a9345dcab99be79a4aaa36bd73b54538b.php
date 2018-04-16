<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_cf926b1cc016d22012cd7949a3a757ded702bd9b43d3c4fc0860caed10eca414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c4ab2ddf698c69740f49d9aacecb92aa7e742af3ba3681925926f818a46d7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4ab2ddf698c69740f49d9aacecb92aa7e742af3ba3681925926f818a46d7a7->enter($__internal_8c4ab2ddf698c69740f49d9aacecb92aa7e742af3ba3681925926f818a46d7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_60d237435d1dc71f9f9cd31ea701ebf80519dc2ece2e0993bc5aad3a5bc33d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d237435d1dc71f9f9cd31ea701ebf80519dc2ece2e0993bc5aad3a5bc33d67->enter($__internal_60d237435d1dc71f9f9cd31ea701ebf80519dc2ece2e0993bc5aad3a5bc33d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4ab2ddf698c69740f49d9aacecb92aa7e742af3ba3681925926f818a46d7a7->leave($__internal_8c4ab2ddf698c69740f49d9aacecb92aa7e742af3ba3681925926f818a46d7a7_prof);

        
        $__internal_60d237435d1dc71f9f9cd31ea701ebf80519dc2ece2e0993bc5aad3a5bc33d67->leave($__internal_60d237435d1dc71f9f9cd31ea701ebf80519dc2ece2e0993bc5aad3a5bc33d67_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_02422fafb82577abe4b9d545325cfff8cfceb57a2faff045fbcf6b62dfcaee81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02422fafb82577abe4b9d545325cfff8cfceb57a2faff045fbcf6b62dfcaee81->enter($__internal_02422fafb82577abe4b9d545325cfff8cfceb57a2faff045fbcf6b62dfcaee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_33690a66ba7992ea85f8edcae5cd904140bc395d456f4a05b0790f05e2d77688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33690a66ba7992ea85f8edcae5cd904140bc395d456f4a05b0790f05e2d77688->enter($__internal_33690a66ba7992ea85f8edcae5cd904140bc395d456f4a05b0790f05e2d77688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_33690a66ba7992ea85f8edcae5cd904140bc395d456f4a05b0790f05e2d77688->leave($__internal_33690a66ba7992ea85f8edcae5cd904140bc395d456f4a05b0790f05e2d77688_prof);

        
        $__internal_02422fafb82577abe4b9d545325cfff8cfceb57a2faff045fbcf6b62dfcaee81->leave($__internal_02422fafb82577abe4b9d545325cfff8cfceb57a2faff045fbcf6b62dfcaee81_prof);

    }

    // line 6
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_b7c1a87ad2d20d4bc22ff512db2f2caa5bbd5df31c2b2a1be36d28e8f7a09322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c1a87ad2d20d4bc22ff512db2f2caa5bbd5df31c2b2a1be36d28e8f7a09322->enter($__internal_b7c1a87ad2d20d4bc22ff512db2f2caa5bbd5df31c2b2a1be36d28e8f7a09322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_829ffed31317d8112f18bbc0e0ba25e861edf3ca8dbbbe3e2e0ecbbd8908e088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829ffed31317d8112f18bbc0e0ba25e861edf3ca8dbbbe3e2e0ecbbd8908e088->enter($__internal_829ffed31317d8112f18bbc0e0ba25e861edf3ca8dbbbe3e2e0ecbbd8908e088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 7
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 7)->display($context);
        
        $__internal_829ffed31317d8112f18bbc0e0ba25e861edf3ca8dbbbe3e2e0ecbbd8908e088->leave($__internal_829ffed31317d8112f18bbc0e0ba25e861edf3ca8dbbbe3e2e0ecbbd8908e088_prof);

        
        $__internal_b7c1a87ad2d20d4bc22ff512db2f2caa5bbd5df31c2b2a1be36d28e8f7a09322->leave($__internal_b7c1a87ad2d20d4bc22ff512db2f2caa5bbd5df31c2b2a1be36d28e8f7a09322_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  64 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
{% block style %}
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block formulaire %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock formulaire %}
", "@FOSUser/Profile/show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/show.html.twig");
    }
}

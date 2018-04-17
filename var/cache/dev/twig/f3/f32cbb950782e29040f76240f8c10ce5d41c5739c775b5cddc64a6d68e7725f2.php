<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8841db1388cb2e57d617955a179ea76105f7008f8aa28548f771615e0176ed46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
<<<<<<< HEAD
            'style' => array($this, 'block_style'),
=======
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_a480301e82523ab099e2cf05c9c691c00f4f13ce946176b35358ba872f74eed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a480301e82523ab099e2cf05c9c691c00f4f13ce946176b35358ba872f74eed0->enter($__internal_a480301e82523ab099e2cf05c9c691c00f4f13ce946176b35358ba872f74eed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_f89542e35620dd2071d50225932f0bc34b80bda1da824663b178f138129059a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89542e35620dd2071d50225932f0bc34b80bda1da824663b178f138129059a2->enter($__internal_f89542e35620dd2071d50225932f0bc34b80bda1da824663b178f138129059a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a480301e82523ab099e2cf05c9c691c00f4f13ce946176b35358ba872f74eed0->leave($__internal_a480301e82523ab099e2cf05c9c691c00f4f13ce946176b35358ba872f74eed0_prof);

        
        $__internal_f89542e35620dd2071d50225932f0bc34b80bda1da824663b178f138129059a2->leave($__internal_f89542e35620dd2071d50225932f0bc34b80bda1da824663b178f138129059a2_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_662fd2e5953423c36d1c36aa75c2e4fc35969f69ae691fe1e1e4d71cdfb1dc08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662fd2e5953423c36d1c36aa75c2e4fc35969f69ae691fe1e1e4d71cdfb1dc08->enter($__internal_662fd2e5953423c36d1c36aa75c2e4fc35969f69ae691fe1e1e4d71cdfb1dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_b0e9011d27d8858dd9d2ccfffbd4bfda3fb445cfa3122bd1608475ac4219f90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e9011d27d8858dd9d2ccfffbd4bfda3fb445cfa3122bd1608475ac4219f90e->enter($__internal_b0e9011d27d8858dd9d2ccfffbd4bfda3fb445cfa3122bd1608475ac4219f90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_b0e9011d27d8858dd9d2ccfffbd4bfda3fb445cfa3122bd1608475ac4219f90e->leave($__internal_b0e9011d27d8858dd9d2ccfffbd4bfda3fb445cfa3122bd1608475ac4219f90e_prof);

        
        $__internal_662fd2e5953423c36d1c36aa75c2e4fc35969f69ae691fe1e1e4d71cdfb1dc08->leave($__internal_662fd2e5953423c36d1c36aa75c2e4fc35969f69ae691fe1e1e4d71cdfb1dc08_prof);

    }

    // line 6
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_dc8ffd43396d380338028988cc6f5e479eb5e2c54aef7e2738cda4ca42843063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8ffd43396d380338028988cc6f5e479eb5e2c54aef7e2738cda4ca42843063->enter($__internal_dc8ffd43396d380338028988cc6f5e479eb5e2c54aef7e2738cda4ca42843063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_17b814f1bc287cb4e1be964f53bd2d4680a9fc26f05bdaf49b5c79e7d9dd4443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b814f1bc287cb4e1be964f53bd2d4680a9fc26f05bdaf49b5c79e7d9dd4443->enter($__internal_17b814f1bc287cb4e1be964f53bd2d4680a9fc26f05bdaf49b5c79e7d9dd4443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 7
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 7)->display($context);
        
        $__internal_17b814f1bc287cb4e1be964f53bd2d4680a9fc26f05bdaf49b5c79e7d9dd4443->leave($__internal_17b814f1bc287cb4e1be964f53bd2d4680a9fc26f05bdaf49b5c79e7d9dd4443_prof);

        
        $__internal_dc8ffd43396d380338028988cc6f5e479eb5e2c54aef7e2738cda4ca42843063->leave($__internal_dc8ffd43396d380338028988cc6f5e479eb5e2c54aef7e2738cda4ca42843063_prof);
=======
        $__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5->enter($__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312->enter($__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5->leave($__internal_552d0b366b3f48fa69af403abf3fe7a03d704163f4bb9fa9b9465b590c884cf5_prof);

        
        $__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312->leave($__internal_7441e2ecd4a5d7aa72f47de0594286adc5683d9c11d285e8092af0f01213f312_prof);

    }

    // line 3
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb->enter($__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0->enter($__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0->leave($__internal_501721e6ee7fb9bd0bd3f38ad2b66dfa2c1799c63db60d2b8c4863741e111ee0_prof);

        
        $__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb->leave($__internal_aa571740b61ac0a9bf2a65c8f14625582fa3c36d8596e3b556afa22d343ba5fb_prof);
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e

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
<<<<<<< HEAD
        return array (  73 => 7,  64 => 6,  50 => 3,  41 => 2,  11 => 1,);
=======
        return array (  49 => 4,  40 => 3,  11 => 1,);
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e
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
<<<<<<< HEAD
{% block style %}
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block formulaire %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock formulaire %}
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
=======

{% block formulaire %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock formulaire %}
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e
    }
}

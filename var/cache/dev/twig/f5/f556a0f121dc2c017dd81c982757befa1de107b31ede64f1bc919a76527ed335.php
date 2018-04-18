<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_960e996c3fd8b4f19327b723ae25fa9a8e7afb89c06fd3ddd2c902547cb4878e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d286cee95451def096d68b279a6126404e9804c73128a79eb813217f3c7a2354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d286cee95451def096d68b279a6126404e9804c73128a79eb813217f3c7a2354->enter($__internal_d286cee95451def096d68b279a6126404e9804c73128a79eb813217f3c7a2354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_685fca26c40424f612e4252d970ce59f9f50037ae948662250287240e0437322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685fca26c40424f612e4252d970ce59f9f50037ae948662250287240e0437322->enter($__internal_685fca26c40424f612e4252d970ce59f9f50037ae948662250287240e0437322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d286cee95451def096d68b279a6126404e9804c73128a79eb813217f3c7a2354->leave($__internal_d286cee95451def096d68b279a6126404e9804c73128a79eb813217f3c7a2354_prof);

        
        $__internal_685fca26c40424f612e4252d970ce59f9f50037ae948662250287240e0437322->leave($__internal_685fca26c40424f612e4252d970ce59f9f50037ae948662250287240e0437322_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9015185fdd876adb876c5091c73575d63a5bdd75ff967fc780d34b2a0e187ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9015185fdd876adb876c5091c73575d63a5bdd75ff967fc780d34b2a0e187ea2->enter($__internal_9015185fdd876adb876c5091c73575d63a5bdd75ff967fc780d34b2a0e187ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6da7151fca62ed439be59383fcbec0d59920193bb4e175af1a57e5288b0ffee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6da7151fca62ed439be59383fcbec0d59920193bb4e175af1a57e5288b0ffee->enter($__internal_e6da7151fca62ed439be59383fcbec0d59920193bb4e175af1a57e5288b0ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e6da7151fca62ed439be59383fcbec0d59920193bb4e175af1a57e5288b0ffee->leave($__internal_e6da7151fca62ed439be59383fcbec0d59920193bb4e175af1a57e5288b0ffee_prof);

        
        $__internal_9015185fdd876adb876c5091c73575d63a5bdd75ff967fc780d34b2a0e187ea2->leave($__internal_9015185fdd876adb876c5091c73575d63a5bdd75ff967fc780d34b2a0e187ea2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

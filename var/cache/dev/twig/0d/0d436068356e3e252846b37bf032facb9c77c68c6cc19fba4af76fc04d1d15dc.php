<?php

/* FrontBundle:signalsEvs:signalEvs.html.twig */
class __TwigTemplate_2ebc035d6f63970264e57da0a22e78e58ea81c17804abf7e31e7ca5d4f5079cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:signalsEvs:signalEvs.html.twig", 1);
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
        $__internal_2ed2dd2247ff350e754e683ca429e333ec81f2f67fd8a0f6d4818cbc7b1cf998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed2dd2247ff350e754e683ca429e333ec81f2f67fd8a0f6d4818cbc7b1cf998->enter($__internal_2ed2dd2247ff350e754e683ca429e333ec81f2f67fd8a0f6d4818cbc7b1cf998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:signalsEvs:signalEvs.html.twig"));

        $__internal_f166e2f223672280cf426ed5766fdfe320763ac8c3a8291e14751defebc4a015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f166e2f223672280cf426ed5766fdfe320763ac8c3a8291e14751defebc4a015->enter($__internal_f166e2f223672280cf426ed5766fdfe320763ac8c3a8291e14751defebc4a015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:signalsEvs:signalEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed2dd2247ff350e754e683ca429e333ec81f2f67fd8a0f6d4818cbc7b1cf998->leave($__internal_2ed2dd2247ff350e754e683ca429e333ec81f2f67fd8a0f6d4818cbc7b1cf998_prof);

        
        $__internal_f166e2f223672280cf426ed5766fdfe320763ac8c3a8291e14751defebc4a015->leave($__internal_f166e2f223672280cf426ed5766fdfe320763ac8c3a8291e14751defebc4a015_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91f07a9bd250c25527e86a9db900c9e6d3a5dbb8a0bb7d671df98a1b956790a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91f07a9bd250c25527e86a9db900c9e6d3a5dbb8a0bb7d671df98a1b956790a->enter($__internal_c91f07a9bd250c25527e86a9db900c9e6d3a5dbb8a0bb7d671df98a1b956790a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8e5ff51c29f92e5456d643fd4c1101c2f709b5271b388db74ff9a8b421f02cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e5ff51c29f92e5456d643fd4c1101c2f709b5271b388db74ff9a8b421f02cf->enter($__internal_d8e5ff51c29f92e5456d643fd4c1101c2f709b5271b388db74ff9a8b421f02cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"fa fa-flag-o\"></i> Signaler </button>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>

    <!-- /row -->
";
        
        $__internal_d8e5ff51c29f92e5456d643fd4c1101c2f709b5271b388db74ff9a8b421f02cf->leave($__internal_d8e5ff51c29f92e5456d643fd4c1101c2f709b5271b388db74ff9a8b421f02cf_prof);

        
        $__internal_c91f07a9bd250c25527e86a9db900c9e6d3a5dbb8a0bb7d671df98a1b956790a->leave($__internal_c91f07a9bd250c25527e86a9db900c9e6d3a5dbb8a0bb7d671df98a1b956790a_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:signalsEvs:signalEvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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


    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_start(form) }}
            {{ form_errors(form.contenu) }}
            {{ form_widget(form.contenu, {'attr': {'class': 'comment form-control'}}) }}
            <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"fa fa-flag-o\"></i> Signaler </button>
            {{ form_end(form) }}
            <br>
            <br>
        </div>
    </div>

    <!-- /row -->
{% endblock %}", "FrontBundle:signalsEvs:signalEvs.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/signalsEvs/signalEvs.html.twig");
    }
}

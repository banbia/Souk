<?php

/* FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig */
class __TwigTemplate_d371a790bc4682450c78edb6f6871c2724ee69a4468f3d78798a21cfcce8ea54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig", 1);
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
        $__internal_1518d852797b0c867195a063073ddb83331e8827f6395092b33add98579f0f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1518d852797b0c867195a063073ddb83331e8827f6395092b33add98579f0f4d->enter($__internal_1518d852797b0c867195a063073ddb83331e8827f6395092b33add98579f0f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig"));

        $__internal_35b0892ef68cb157b5170024a7cb3c98ee763f6906ccfa3e8174046132c14f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b0892ef68cb157b5170024a7cb3c98ee763f6906ccfa3e8174046132c14f34->enter($__internal_35b0892ef68cb157b5170024a7cb3c98ee763f6906ccfa3e8174046132c14f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1518d852797b0c867195a063073ddb83331e8827f6395092b33add98579f0f4d->leave($__internal_1518d852797b0c867195a063073ddb83331e8827f6395092b33add98579f0f4d_prof);

        
        $__internal_35b0892ef68cb157b5170024a7cb3c98ee763f6906ccfa3e8174046132c14f34->leave($__internal_35b0892ef68cb157b5170024a7cb3c98ee763f6906ccfa3e8174046132c14f34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8441bf7946aac86c15df636497cc71328cfed2dbe057c69065b503db5a2937ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8441bf7946aac86c15df636497cc71328cfed2dbe057c69065b503db5a2937ec->enter($__internal_8441bf7946aac86c15df636497cc71328cfed2dbe057c69065b503db5a2937ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb788b4760fa56b49c1e51fb8330d631d9e6561d7d11f9e4d73dcee9b4a6dc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb788b4760fa56b49c1e51fb8330d631d9e6561d7d11f9e4d73dcee9b4a6dc33->enter($__internal_cb788b4760fa56b49c1e51fb8330d631d9e6561d7d11f9e4d73dcee9b4a6dc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Modifier </button>
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
        
        $__internal_cb788b4760fa56b49c1e51fb8330d631d9e6561d7d11f9e4d73dcee9b4a6dc33->leave($__internal_cb788b4760fa56b49c1e51fb8330d631d9e6561d7d11f9e4d73dcee9b4a6dc33_prof);

        
        $__internal_8441bf7946aac86c15df636497cc71328cfed2dbe057c69065b503db5a2937ec->leave($__internal_8441bf7946aac86c15df636497cc71328cfed2dbe057c69065b503db5a2937ec_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig";
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
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Modifier </button>
            {{ form_end(form) }}
            <br>
            <br>
        </div>
    </div>

    <!-- /row -->
{% endblock %}", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/commentairesAnc/edit_commantaireAnc.html.twig");
    }
}

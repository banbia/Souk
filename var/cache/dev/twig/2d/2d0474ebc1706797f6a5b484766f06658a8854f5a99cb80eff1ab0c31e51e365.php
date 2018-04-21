<?php

/* FrontBundle:signalsAnc:signal_Anc.html.twig */
class __TwigTemplate_15cde45e69e72fc5f0db0af3b13ad46e4c747c7bc350c34cc7f266f54580b4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:signalsAnc:signal_Anc.html.twig", 1);
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
        $__internal_f3cd9b9dcae769eb24c473951a2257003d2767cf2700ba9e6bdc3ca5d38d0af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cd9b9dcae769eb24c473951a2257003d2767cf2700ba9e6bdc3ca5d38d0af3->enter($__internal_f3cd9b9dcae769eb24c473951a2257003d2767cf2700ba9e6bdc3ca5d38d0af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:signalsAnc:signal_Anc.html.twig"));

        $__internal_7ac47a19ea36149b518dd50cd196f70d90bbba6a95a945fb2a9a1e6a2c42e942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac47a19ea36149b518dd50cd196f70d90bbba6a95a945fb2a9a1e6a2c42e942->enter($__internal_7ac47a19ea36149b518dd50cd196f70d90bbba6a95a945fb2a9a1e6a2c42e942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:signalsAnc:signal_Anc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3cd9b9dcae769eb24c473951a2257003d2767cf2700ba9e6bdc3ca5d38d0af3->leave($__internal_f3cd9b9dcae769eb24c473951a2257003d2767cf2700ba9e6bdc3ca5d38d0af3_prof);

        
        $__internal_7ac47a19ea36149b518dd50cd196f70d90bbba6a95a945fb2a9a1e6a2c42e942->leave($__internal_7ac47a19ea36149b518dd50cd196f70d90bbba6a95a945fb2a9a1e6a2c42e942_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_323f50f7dfe24752bcdd9b9f9f5abb61189ea6957a5b742696d7f2a6563831f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323f50f7dfe24752bcdd9b9f9f5abb61189ea6957a5b742696d7f2a6563831f4->enter($__internal_323f50f7dfe24752bcdd9b9f9f5abb61189ea6957a5b742696d7f2a6563831f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20a12b3d2b3d424071d40b875f83ceaacee5156bc3d5a7db628ff8fceb99ace7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a12b3d2b3d424071d40b875f83ceaacee5156bc3d5a7db628ff8fceb99ace7->enter($__internal_20a12b3d2b3d424071d40b875f83ceaacee5156bc3d5a7db628ff8fceb99ace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20a12b3d2b3d424071d40b875f83ceaacee5156bc3d5a7db628ff8fceb99ace7->leave($__internal_20a12b3d2b3d424071d40b875f83ceaacee5156bc3d5a7db628ff8fceb99ace7_prof);

        
        $__internal_323f50f7dfe24752bcdd9b9f9f5abb61189ea6957a5b742696d7f2a6563831f4->leave($__internal_323f50f7dfe24752bcdd9b9f9f5abb61189ea6957a5b742696d7f2a6563831f4_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:signalsAnc:signal_Anc.html.twig";
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
{% endblock %}", "FrontBundle:signalsAnc:signal_Anc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/signalsAnc/signal_Anc.html.twig");
    }
}

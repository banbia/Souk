<?php

/* FrontBundle:annonces:edit_commantaireAnc.html.twig */
class __TwigTemplate_382102c14207a5243e15cca294ff98f95dded95fdba670b3a95590e9a8b00c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:edit_commantaireAnc.html.twig", 1);
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
        $__internal_7f1f352fc0ea31b84bb2632170e5e8d334c61d8b15b8443a49118b11c7bad332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1f352fc0ea31b84bb2632170e5e8d334c61d8b15b8443a49118b11c7bad332->enter($__internal_7f1f352fc0ea31b84bb2632170e5e8d334c61d8b15b8443a49118b11c7bad332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:edit_commantaireAnc.html.twig"));

        $__internal_f6ba87fe317c9a3df69cf16944020f4205f4bf07b42f5735739915eac934253a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ba87fe317c9a3df69cf16944020f4205f4bf07b42f5735739915eac934253a->enter($__internal_f6ba87fe317c9a3df69cf16944020f4205f4bf07b42f5735739915eac934253a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:edit_commantaireAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f1f352fc0ea31b84bb2632170e5e8d334c61d8b15b8443a49118b11c7bad332->leave($__internal_7f1f352fc0ea31b84bb2632170e5e8d334c61d8b15b8443a49118b11c7bad332_prof);

        
        $__internal_f6ba87fe317c9a3df69cf16944020f4205f4bf07b42f5735739915eac934253a->leave($__internal_f6ba87fe317c9a3df69cf16944020f4205f4bf07b42f5735739915eac934253a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0a4e022795e7aea613beafd2bcd414b3d0b8c5af3fb3dee73bf004a8c583b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a4e022795e7aea613beafd2bcd414b3d0b8c5af3fb3dee73bf004a8c583b37->enter($__internal_b0a4e022795e7aea613beafd2bcd414b3d0b8c5af3fb3dee73bf004a8c583b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1efc0b6043043711379d80bd94780b0e5c3f71204ccc5c32d40a95774d767cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efc0b6043043711379d80bd94780b0e5c3f71204ccc5c32d40a95774d767cb8->enter($__internal_1efc0b6043043711379d80bd94780b0e5c3f71204ccc5c32d40a95774d767cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1efc0b6043043711379d80bd94780b0e5c3f71204ccc5c32d40a95774d767cb8->leave($__internal_1efc0b6043043711379d80bd94780b0e5c3f71204ccc5c32d40a95774d767cb8_prof);

        
        $__internal_b0a4e022795e7aea613beafd2bcd414b3d0b8c5af3fb3dee73bf004a8c583b37->leave($__internal_b0a4e022795e7aea613beafd2bcd414b3d0b8c5af3fb3dee73bf004a8c583b37_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:edit_commantaireAnc.html.twig";
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
{% endblock %}", "FrontBundle:annonces:edit_commantaireAnc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/annonces/edit_commantaireAnc.html.twig");
    }
}

<?php

/* FrontBundle:evennements:new.html.twig */
class __TwigTemplate_2be334a32acbfe467ff8d3003ee429d9ce5cc95598ab7c4d84b8a46c25230467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:new.html.twig", 1);
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
        $__internal_ec2e785fce4e316b16fd706a22f7d053e9b7da112c49c83a4a95472486ef05e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2e785fce4e316b16fd706a22f7d053e9b7da112c49c83a4a95472486ef05e1->enter($__internal_ec2e785fce4e316b16fd706a22f7d053e9b7da112c49c83a4a95472486ef05e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new.html.twig"));

        $__internal_0195bb400c3b2712c62beb8175238f22c217e0c1b5ec982960f8b5260dadd8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0195bb400c3b2712c62beb8175238f22c217e0c1b5ec982960f8b5260dadd8ef->enter($__internal_0195bb400c3b2712c62beb8175238f22c217e0c1b5ec982960f8b5260dadd8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec2e785fce4e316b16fd706a22f7d053e9b7da112c49c83a4a95472486ef05e1->leave($__internal_ec2e785fce4e316b16fd706a22f7d053e9b7da112c49c83a4a95472486ef05e1_prof);

        
        $__internal_0195bb400c3b2712c62beb8175238f22c217e0c1b5ec982960f8b5260dadd8ef->leave($__internal_0195bb400c3b2712c62beb8175238f22c217e0c1b5ec982960f8b5260dadd8ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_feceb8fb432f34a03ecd4ae12fdc591cb9589acc0933edde302fb612439286f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feceb8fb432f34a03ecd4ae12fdc591cb9589acc0933edde302fb612439286f6->enter($__internal_feceb8fb432f34a03ecd4ae12fdc591cb9589acc0933edde302fb612439286f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d5c258fcd1f3bdab645c24709ae7e9e40c407d5c14a559666bd3cd418a036bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5c258fcd1f3bdab645c24709ae7e9e40c407d5c14a559666bd3cd418a036bd->enter($__internal_8d5c258fcd1f3bdab645c24709ae7e9e40c407d5c14a559666bd3cd418a036bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Evennement creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
       ";
        // line 8
        echo "    <div class=\"col-md-12\">
        <div class=\"col-md-6\">

    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        </div>
            <div class=\"col-md-6\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        </div>
    </div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeb", array()), 'label');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeb", array()), 'errors');
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeb", array()), 'widget', array("attr" => array("class" => "form-group input-group")));
        echo "
    </div>
    <div class=\"col-md-6\">
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'label');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'errors');
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array("class" => "form-group input-group")));
        echo "
    </div>
</div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'label');
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'errors');
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
    </div>
    <div class=\"col-md-6\">
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label');
        echo "
    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
    </div>
</div>
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8d5c258fcd1f3bdab645c24709ae7e9e40c407d5c14a559666bd3cd418a036bd->leave($__internal_8d5c258fcd1f3bdab645c24709ae7e9e40c407d5c14a559666bd3cd418a036bd_prof);

        
        $__internal_feceb8fb432f34a03ecd4ae12fdc591cb9589acc0933edde302fb612439286f6->leave($__internal_feceb8fb432f34a03ecd4ae12fdc591cb9589acc0933edde302fb612439286f6_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 51,  155 => 47,  148 => 43,  144 => 42,  140 => 41,  134 => 38,  130 => 37,  126 => 36,  118 => 31,  114 => 30,  110 => 29,  104 => 26,  100 => 25,  96 => 24,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  70 => 13,  66 => 12,  62 => 11,  57 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Evennement creation</h1>

    {{ form_start(form) }}
       {#{{ form_widget(form) }}#}
    <div class=\"col-md-12\">
        <div class=\"col-md-6\">

    {{ form_label(form.titre) }}
    {{ form_errors(form.titre) }}
    {{ form_widget(form.titre, {'attr': {'class': 'comment form-control'}}) }}
        </div>
            <div class=\"col-md-6\">
    {{ form_label(form.description) }}
    {{ form_errors(form.description) }}
    {{ form_widget(form.description, {'attr': {'class': 'comment form-control'}}) }}
    {{ form_start(form) }}
        </div>
    </div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
    {{ form_label(form.dateDeb) }}
    {{ form_errors(form.dateDeb) }}
    {{ form_widget(form.dateDeb, {'attr': {'class': 'form-group input-group'}}) }}
    </div>
    <div class=\"col-md-6\">
    {{ form_label(form.dateFin) }}
    {{ form_errors(form.dateFin) }}
    {{ form_widget(form.dateFin, {'attr': {'class': 'form-group input-group'}}) }}
    </div>
</div>
<div class=\"col-md-12\">
    <div class=\"col-md-6\">
    {{ form_label(form.lieu) }}
    {{ form_errors(form.lieu) }}
    {{ form_widget(form.lieu, {'attr': {'class': 'comment form-control'}}) }}
    </div>
    <div class=\"col-md-6\">
    {{ form_label(form.prix) }}
    {{ form_errors(form.prix) }}
    {{ form_widget(form.prix, {'attr': {'class': 'comment form-control'}}) }}
    </div>
</div>
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('evennements_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "FrontBundle:evennements:new.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/evennements/new.html.twig");
    }
}

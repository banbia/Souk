<?php

/* FrontBundle:evennements:new.html.twig */
class __TwigTemplate_e709efbeae01c7208527380943d2b088d74f203354b870f9a2a4699d581649e4 extends Twig_Template
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
        $__internal_60e0da7e473292b76383aad894a1e1c98995debb17c838dfa9991f445d88f203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e0da7e473292b76383aad894a1e1c98995debb17c838dfa9991f445d88f203->enter($__internal_60e0da7e473292b76383aad894a1e1c98995debb17c838dfa9991f445d88f203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new.html.twig"));

        $__internal_3db0687d0d8ce4d12898f76dc66a791a1a51cba0e89a8b7463a91b3985d3c42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db0687d0d8ce4d12898f76dc66a791a1a51cba0e89a8b7463a91b3985d3c42e->enter($__internal_3db0687d0d8ce4d12898f76dc66a791a1a51cba0e89a8b7463a91b3985d3c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e0da7e473292b76383aad894a1e1c98995debb17c838dfa9991f445d88f203->leave($__internal_60e0da7e473292b76383aad894a1e1c98995debb17c838dfa9991f445d88f203_prof);

        
        $__internal_3db0687d0d8ce4d12898f76dc66a791a1a51cba0e89a8b7463a91b3985d3c42e->leave($__internal_3db0687d0d8ce4d12898f76dc66a791a1a51cba0e89a8b7463a91b3985d3c42e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c217810a959f4436eb8bf851d2ecb7c870b8113bdf99259fd2e3052858e77f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c217810a959f4436eb8bf851d2ecb7c870b8113bdf99259fd2e3052858e77f5e->enter($__internal_c217810a959f4436eb8bf851d2ecb7c870b8113bdf99259fd2e3052858e77f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68a8232231f9ef74603976ad57c131e530c27b6e951c2b1b0cbcebfc9c31c285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a8232231f9ef74603976ad57c131e530c27b6e951c2b1b0cbcebfc9c31c285->enter($__internal_68a8232231f9ef74603976ad57c131e530c27b6e951c2b1b0cbcebfc9c31c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Evennement creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_68a8232231f9ef74603976ad57c131e530c27b6e951c2b1b0cbcebfc9c31c285->leave($__internal_68a8232231f9ef74603976ad57c131e530c27b6e951c2b1b0cbcebfc9c31c285_prof);

        
        $__internal_c217810a959f4436eb8bf851d2ecb7c870b8113bdf99259fd2e3052858e77f5e->leave($__internal_c217810a959f4436eb8bf851d2ecb7c870b8113bdf99259fd2e3052858e77f5e_prof);

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
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('evennements_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "FrontBundle:evennements:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/new.html.twig");
    }
}

<?php

/* BackBundle:abonnements:edit.html.twig */
class __TwigTemplate_60cd068fa907406a1d61d96bf78c1c8cbba4d323b873eefda0fe208195a923ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_050ca3b0ed0281ec9984b72255684d6529f8ffc1b7ec10c1db8165ef8523d3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050ca3b0ed0281ec9984b72255684d6529f8ffc1b7ec10c1db8165ef8523d3f8->enter($__internal_050ca3b0ed0281ec9984b72255684d6529f8ffc1b7ec10c1db8165ef8523d3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:edit.html.twig"));

        $__internal_069ff582b9fc52a1827a8ecc13701bd1863f5780de8531145a9e894d31de027b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069ff582b9fc52a1827a8ecc13701bd1863f5780de8531145a9e894d31de027b->enter($__internal_069ff582b9fc52a1827a8ecc13701bd1863f5780de8531145a9e894d31de027b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_050ca3b0ed0281ec9984b72255684d6529f8ffc1b7ec10c1db8165ef8523d3f8->leave($__internal_050ca3b0ed0281ec9984b72255684d6529f8ffc1b7ec10c1db8165ef8523d3f8_prof);

        
        $__internal_069ff582b9fc52a1827a8ecc13701bd1863f5780de8531145a9e894d31de027b->leave($__internal_069ff582b9fc52a1827a8ecc13701bd1863f5780de8531145a9e894d31de027b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea780945d57b74112871b367bd9302bebdf7486c56f57997f4277db3e9c67268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea780945d57b74112871b367bd9302bebdf7486c56f57997f4277db3e9c67268->enter($__internal_ea780945d57b74112871b367bd9302bebdf7486c56f57997f4277db3e9c67268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83575c280305cac916d09ffc0aac7f410cd06945c9ab52d23ef690e63b73548b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83575c280305cac916d09ffc0aac7f410cd06945c9ab52d23ef690e63b73548b->enter($__internal_83575c280305cac916d09ffc0aac7f410cd06945c9ab52d23ef690e63b73548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnement edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_83575c280305cac916d09ffc0aac7f410cd06945c9ab52d23ef690e63b73548b->leave($__internal_83575c280305cac916d09ffc0aac7f410cd06945c9ab52d23ef690e63b73548b_prof);

        
        $__internal_ea780945d57b74112871b367bd9302bebdf7486c56f57997f4277db3e9c67268->leave($__internal_ea780945d57b74112871b367bd9302bebdf7486c56f57997f4277db3e9c67268_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
    <h1>Abonnement edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('abonnements_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackBundle:abonnements:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/edit.html.twig");
    }
}

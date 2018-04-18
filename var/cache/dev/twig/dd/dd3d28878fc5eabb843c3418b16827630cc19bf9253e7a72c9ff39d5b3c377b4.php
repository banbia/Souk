<?php

/* BackBundle:commercial/annonces:edit.html.twig */
class __TwigTemplate_10a73356213460da757faf1bb13ebbc9c572fa221ee78ce384d3e26064d03be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:commercial/annonces:edit.html.twig", 1);
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
        $__internal_4831cb48c8b6a65e0ff7b10e6debef4eb88f901b900572f28ff7a24cd9e6739f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4831cb48c8b6a65e0ff7b10e6debef4eb88f901b900572f28ff7a24cd9e6739f->enter($__internal_4831cb48c8b6a65e0ff7b10e6debef4eb88f901b900572f28ff7a24cd9e6739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:edit.html.twig"));

        $__internal_57ed05c69b885d1ddbe328ff5e3327f0e620e996c131d3e73791c60f698cd17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ed05c69b885d1ddbe328ff5e3327f0e620e996c131d3e73791c60f698cd17c->enter($__internal_57ed05c69b885d1ddbe328ff5e3327f0e620e996c131d3e73791c60f698cd17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4831cb48c8b6a65e0ff7b10e6debef4eb88f901b900572f28ff7a24cd9e6739f->leave($__internal_4831cb48c8b6a65e0ff7b10e6debef4eb88f901b900572f28ff7a24cd9e6739f_prof);

        
        $__internal_57ed05c69b885d1ddbe328ff5e3327f0e620e996c131d3e73791c60f698cd17c->leave($__internal_57ed05c69b885d1ddbe328ff5e3327f0e620e996c131d3e73791c60f698cd17c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b2081b40bfcda4e09e4232de5f109a91e59bc80b92719bbe7101b168d89585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b2081b40bfcda4e09e4232de5f109a91e59bc80b92719bbe7101b168d89585->enter($__internal_f6b2081b40bfcda4e09e4232de5f109a91e59bc80b92719bbe7101b168d89585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3d5c8cb393d68745bda62f23fffe34c2a0cdef8925e54180c58adb1be967a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d5c8cb393d68745bda62f23fffe34c2a0cdef8925e54180c58adb1be967a44->enter($__internal_a3d5c8cb393d68745bda62f23fffe34c2a0cdef8925e54180c58adb1be967a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
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
        
        $__internal_a3d5c8cb393d68745bda62f23fffe34c2a0cdef8925e54180c58adb1be967a44->leave($__internal_a3d5c8cb393d68745bda62f23fffe34c2a0cdef8925e54180c58adb1be967a44_prof);

        
        $__internal_f6b2081b40bfcda4e09e4232de5f109a91e59bc80b92719bbe7101b168d89585->leave($__internal_f6b2081b40bfcda4e09e4232de5f109a91e59bc80b92719bbe7101b168d89585_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:commercial/annonces:edit.html.twig";
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
    <h1>Annonce edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackBundle:commercial/annonces:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/commercial/annonces/edit.html.twig");
    }
}

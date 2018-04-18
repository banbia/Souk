<?php

/* BackBundle:commercial/annonces:new.html.twig */
class __TwigTemplate_937397c2af052166478c0922a6f56bd7d599ca50e1ba993efde4719fd1762d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:commercial/annonces:new.html.twig", 1);
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
        $__internal_432d3bd5bd9eea01b2963b8f1c991dfe746998b8602cd610857d5cb3b728e503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432d3bd5bd9eea01b2963b8f1c991dfe746998b8602cd610857d5cb3b728e503->enter($__internal_432d3bd5bd9eea01b2963b8f1c991dfe746998b8602cd610857d5cb3b728e503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:new.html.twig"));

        $__internal_cd1902d331cc2cc4c49a274d1905b7b70eb066479faf20559311de3db3987dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1902d331cc2cc4c49a274d1905b7b70eb066479faf20559311de3db3987dc8->enter($__internal_cd1902d331cc2cc4c49a274d1905b7b70eb066479faf20559311de3db3987dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_432d3bd5bd9eea01b2963b8f1c991dfe746998b8602cd610857d5cb3b728e503->leave($__internal_432d3bd5bd9eea01b2963b8f1c991dfe746998b8602cd610857d5cb3b728e503_prof);

        
        $__internal_cd1902d331cc2cc4c49a274d1905b7b70eb066479faf20559311de3db3987dc8->leave($__internal_cd1902d331cc2cc4c49a274d1905b7b70eb066479faf20559311de3db3987dc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83cad4031a3fdd778e530577514482e813b12e39242bc2deed3d971236c2b2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cad4031a3fdd778e530577514482e813b12e39242bc2deed3d971236c2b2cf->enter($__internal_83cad4031a3fdd778e530577514482e813b12e39242bc2deed3d971236c2b2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4db74e70b18d9a2a9a45bb7298fd2c490065980ea043cad30e9de3e5e71acc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db74e70b18d9a2a9a45bb7298fd2c490065980ea043cad30e9de3e5e71acc68->enter($__internal_4db74e70b18d9a2a9a45bb7298fd2c490065980ea043cad30e9de3e5e71acc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4db74e70b18d9a2a9a45bb7298fd2c490065980ea043cad30e9de3e5e71acc68->leave($__internal_4db74e70b18d9a2a9a45bb7298fd2c490065980ea043cad30e9de3e5e71acc68_prof);

        
        $__internal_83cad4031a3fdd778e530577514482e813b12e39242bc2deed3d971236c2b2cf->leave($__internal_83cad4031a3fdd778e530577514482e813b12e39242bc2deed3d971236c2b2cf_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:commercial/annonces:new.html.twig";
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
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
    <h1>Annonce creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BackBundle:commercial/annonces:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/commercial/annonces/new.html.twig");
    }
}

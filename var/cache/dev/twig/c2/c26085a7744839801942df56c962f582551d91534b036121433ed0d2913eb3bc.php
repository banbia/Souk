<?php

/* BackBundle:categories:index.html.twig */
class __TwigTemplate_5d3a1e0e3acc7273bc9c7072dba081fc1c88ed889c989af7483aeb642f922f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:categories:index.html.twig", 1);
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
        $__internal_f51277aa5768e1b5bc897dac56e1dd4b583121d3aef9a817f78f569672003042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51277aa5768e1b5bc897dac56e1dd4b583121d3aef9a817f78f569672003042->enter($__internal_f51277aa5768e1b5bc897dac56e1dd4b583121d3aef9a817f78f569672003042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:categories:index.html.twig"));

        $__internal_1ffe9ce09c0d8e5cb75cf6dd42d7d9be798a4060752692306943df14854e3e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffe9ce09c0d8e5cb75cf6dd42d7d9be798a4060752692306943df14854e3e3e->enter($__internal_1ffe9ce09c0d8e5cb75cf6dd42d7d9be798a4060752692306943df14854e3e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:categories:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51277aa5768e1b5bc897dac56e1dd4b583121d3aef9a817f78f569672003042->leave($__internal_f51277aa5768e1b5bc897dac56e1dd4b583121d3aef9a817f78f569672003042_prof);

        
        $__internal_1ffe9ce09c0d8e5cb75cf6dd42d7d9be798a4060752692306943df14854e3e3e->leave($__internal_1ffe9ce09c0d8e5cb75cf6dd42d7d9be798a4060752692306943df14854e3e3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a820c4601f96fa271b8f27b25f0551882aae218ae44f9b566f278abfe5ad47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a820c4601f96fa271b8f27b25f0551882aae218ae44f9b566f278abfe5ad47d->enter($__internal_4a820c4601f96fa271b8f27b25f0551882aae218ae44f9b566f278abfe5ad47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8533fd1da57f5b0d1418eee2ebbad0f862698261069a727bd8848ecc1fb3197c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8533fd1da57f5b0d1418eee2ebbad0f862698261069a727bd8848ecc1fb3197c->enter($__internal_8533fd1da57f5b0d1418eee2ebbad0f862698261069a727bd8848ecc1fb3197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h3>Categories list</h3>

    <div class=\"col-md-12\">
        <div class=\"form-group col-md-2\" style=\"float: right\">
            <a    href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter </a>
        </div>

    </div>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "designation", array()), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary\"><i class=\"fa fa-pencil\" ></i></a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\" ></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>


";
        
        $__internal_8533fd1da57f5b0d1418eee2ebbad0f862698261069a727bd8848ecc1fb3197c->leave($__internal_8533fd1da57f5b0d1418eee2ebbad0f862698261069a727bd8848ecc1fb3197c_prof);

        
        $__internal_4a820c4601f96fa271b8f27b25f0551882aae218ae44f9b566f278abfe5ad47d->leave($__internal_4a820c4601f96fa271b8f27b25f0551882aae218ae44f9b566f278abfe5ad47d_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:categories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  92 => 28,  88 => 27,  82 => 24,  78 => 23,  75 => 22,  71 => 21,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3>Categories list</h3>

    <div class=\"col-md-12\">
        <div class=\"form-group col-md-2\" style=\"float: right\">
            <a    href=\"{{ path('categories_new') }}\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter </a>
        </div>

    </div>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.designation }}</td>
                <td>

                    <a href=\"{{ path('categories_edit', { 'id': category.id }) }}\"class=\"btn btn-primary\"><i class=\"fa fa-pencil\" ></i></a>
                    <a href=\"{{ path('categories_delete', { 'id': category.id }) }}\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\" ></i></a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "BackBundle:categories:index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/categories/index.html.twig");
    }
}

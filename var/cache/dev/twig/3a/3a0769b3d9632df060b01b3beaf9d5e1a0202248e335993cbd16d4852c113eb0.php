<?php

/* BackBundle:categories:new.html.twig */
class __TwigTemplate_af3a266c711bd863bf816a8c35d8c5f3193d8a3e2ea503c2b60df09c345c407f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:categories:new.html.twig", 1);
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
        $__internal_32b092a7e611d868ded9abcb20b884b9aaaa14b890e88f20fe2c4696eb366da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b092a7e611d868ded9abcb20b884b9aaaa14b890e88f20fe2c4696eb366da4->enter($__internal_32b092a7e611d868ded9abcb20b884b9aaaa14b890e88f20fe2c4696eb366da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:categories:new.html.twig"));

        $__internal_f95a4a0556c85f65a09777a29cfc022521bc91d035baf0d1f7a4fe090463867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95a4a0556c85f65a09777a29cfc022521bc91d035baf0d1f7a4fe090463867a->enter($__internal_f95a4a0556c85f65a09777a29cfc022521bc91d035baf0d1f7a4fe090463867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:categories:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b092a7e611d868ded9abcb20b884b9aaaa14b890e88f20fe2c4696eb366da4->leave($__internal_32b092a7e611d868ded9abcb20b884b9aaaa14b890e88f20fe2c4696eb366da4_prof);

        
        $__internal_f95a4a0556c85f65a09777a29cfc022521bc91d035baf0d1f7a4fe090463867a->leave($__internal_f95a4a0556c85f65a09777a29cfc022521bc91d035baf0d1f7a4fe090463867a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7229c2175826d4d06e9e0c3dd345a3ea684cebba2f052fcdc073b12b5f04f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7229c2175826d4d06e9e0c3dd345a3ea684cebba2f052fcdc073b12b5f04f69->enter($__internal_c7229c2175826d4d06e9e0c3dd345a3ea684cebba2f052fcdc073b12b5f04f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30d26eef073ab716cb9d463150da94ae8945ea0895a0fde297b09811d61f3eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d26eef073ab716cb9d463150da94ae8945ea0895a0fde297b09811d61f3eec->enter($__internal_30d26eef073ab716cb9d463150da94ae8945ea0895a0fde297b09811d61f3eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3>Ajouter Categorie</h3>
<div class=\"col-md-12\">

</div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"col-md-12\">
            <div class=\"form-group col-md-3\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'errors');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

    </div>
<div class=\"col-md-12\">
    <div class=\"form-group col-md-3\">
        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter </button>
    </div>
</div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_30d26eef073ab716cb9d463150da94ae8945ea0895a0fde297b09811d61f3eec->leave($__internal_30d26eef073ab716cb9d463150da94ae8945ea0895a0fde297b09811d61f3eec_prof);

        
        $__internal_c7229c2175826d4d06e9e0c3dd345a3ea684cebba2f052fcdc073b12b5f04f69->leave($__internal_c7229c2175826d4d06e9e0c3dd345a3ea684cebba2f052fcdc073b12b5f04f69_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:categories:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  69 => 13,  65 => 12,  61 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
<h3>Ajouter Categorie</h3>
<div class=\"col-md-12\">

</div>
{{ form_start(form) }}
    <div class=\"col-md-12\">
            <div class=\"form-group col-md-3\">
                {{ form_label(form.designation) }}
                {{ form_errors(form.designation) }}
                {{ form_widget(form.designation, {'attr': {'class': 'form-control'}}) }}
            </div>

    </div>
<div class=\"col-md-12\">
    <div class=\"form-group col-md-3\">
        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter </button>
    </div>
</div>
{{ form_end(form) }}

{% endblock %}
", "BackBundle:categories:new.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/categories/new.html.twig");
    }
}

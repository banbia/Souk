<?php

/* FrontBundle:commandes:edit.html.twig */
class __TwigTemplate_2bdfaf027842bf61f0e33702bfc2061bf88fc1d93ddfdbcba67e7b930ca4f313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:edit.html.twig", 1);
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
        $__internal_84eeb191cd2c5e5ee099c7de1256009e2fdb82a58bb4cc9140944d59de6e4aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84eeb191cd2c5e5ee099c7de1256009e2fdb82a58bb4cc9140944d59de6e4aad->enter($__internal_84eeb191cd2c5e5ee099c7de1256009e2fdb82a58bb4cc9140944d59de6e4aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:edit.html.twig"));

        $__internal_9c6f3cdc330507b414e91eeb7f9c36875f76638d7ef83ae34ba1507292331a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6f3cdc330507b414e91eeb7f9c36875f76638d7ef83ae34ba1507292331a53->enter($__internal_9c6f3cdc330507b414e91eeb7f9c36875f76638d7ef83ae34ba1507292331a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84eeb191cd2c5e5ee099c7de1256009e2fdb82a58bb4cc9140944d59de6e4aad->leave($__internal_84eeb191cd2c5e5ee099c7de1256009e2fdb82a58bb4cc9140944d59de6e4aad_prof);

        
        $__internal_9c6f3cdc330507b414e91eeb7f9c36875f76638d7ef83ae34ba1507292331a53->leave($__internal_9c6f3cdc330507b414e91eeb7f9c36875f76638d7ef83ae34ba1507292331a53_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12e37b6eadec55149dded72d962aa672f8af1533b6136b84cb09151f895e2bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e37b6eadec55149dded72d962aa672f8af1533b6136b84cb09151f895e2bca->enter($__internal_12e37b6eadec55149dded72d962aa672f8af1533b6136b84cb09151f895e2bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10eb8f401b74b78893aa7c428cf010ae104715e3c3630c6c73499ed84f52b397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eb8f401b74b78893aa7c428cf010ae104715e3c3630c6c73499ed84f52b397->enter($__internal_10eb8f401b74b78893aa7c428cf010ae104715e3c3630c6c73499ed84f52b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commande edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_index");
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
        
        $__internal_10eb8f401b74b78893aa7c428cf010ae104715e3c3630c6c73499ed84f52b397->leave($__internal_10eb8f401b74b78893aa7c428cf010ae104715e3c3630c6c73499ed84f52b397_prof);

        
        $__internal_12e37b6eadec55149dded72d962aa672f8af1533b6136b84cb09151f895e2bca->leave($__internal_12e37b6eadec55149dded72d962aa672f8af1533b6136b84cb09151f895e2bca_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:edit.html.twig";
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
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}
    <h1>Commande edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('commandes_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "FrontBundle:commandes:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/edit.html.twig");
    }
}

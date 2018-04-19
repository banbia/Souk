<?php

/* FrontBundle:reclamations:show.html.twig */
class __TwigTemplate_7c72d7ff9d89417e3d93cda27ddb92888b2cf09b9721f6cb9d95ab3ff97416dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:show.html.twig", 1);
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
        $__internal_ab4d6968e09f865e372ce03d9f1ce83ffdcebb4d3c831b009dabc866b9494fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4d6968e09f865e372ce03d9f1ce83ffdcebb4d3c831b009dabc866b9494fc6->enter($__internal_ab4d6968e09f865e372ce03d9f1ce83ffdcebb4d3c831b009dabc866b9494fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $__internal_2b89434a0ac795c0c16042aa57fbd79201181c319c3a8971e0248eb52b36c184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b89434a0ac795c0c16042aa57fbd79201181c319c3a8971e0248eb52b36c184->enter($__internal_2b89434a0ac795c0c16042aa57fbd79201181c319c3a8971e0248eb52b36c184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab4d6968e09f865e372ce03d9f1ce83ffdcebb4d3c831b009dabc866b9494fc6->leave($__internal_ab4d6968e09f865e372ce03d9f1ce83ffdcebb4d3c831b009dabc866b9494fc6_prof);

        
        $__internal_2b89434a0ac795c0c16042aa57fbd79201181c319c3a8971e0248eb52b36c184->leave($__internal_2b89434a0ac795c0c16042aa57fbd79201181c319c3a8971e0248eb52b36c184_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27676581995128cc5b37a13ee25439b2dd82154a479c1efe96b8b64dbf79ecec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27676581995128cc5b37a13ee25439b2dd82154a479c1efe96b8b64dbf79ecec->enter($__internal_27676581995128cc5b37a13ee25439b2dd82154a479c1efe96b8b64dbf79ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e0203a0fe4bb245eb2a162758040bd2a08f929a94c6441eb9f59cae805b9000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0203a0fe4bb245eb2a162758040bd2a08f929a94c6441eb9f59cae805b9000->enter($__internal_7e0203a0fe4bb245eb2a162758040bd2a08f929a94c6441eb9f59cae805b9000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reclamation</h1>

    <table class=\"w3-table-all w3-hoverable\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Daterec</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "dateRec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "dateRec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7e0203a0fe4bb245eb2a162758040bd2a08f929a94c6441eb9f59cae805b9000->leave($__internal_7e0203a0fe4bb245eb2a162758040bd2a08f929a94c6441eb9f59cae805b9000_prof);

        
        $__internal_27676581995128cc5b37a13ee25439b2dd82154a479c1efe96b8b64dbf79ecec->leave($__internal_27676581995128cc5b37a13ee25439b2dd82154a479c1efe96b8b64dbf79ecec_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reclamation</h1>

    <table class=\"w3-table-all w3-hoverable\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reclamation.id }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ reclamation.contenu }}</td>
            </tr>
            <tr>
                <th>Daterec</th>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ reclamation.etat }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reclamations_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "FrontBundle:reclamations:show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/show.html.twig");
    }
}

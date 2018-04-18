<?php

/* FrontBundle:evennements:show.html.twig */
class __TwigTemplate_22f562dfa113229df340f5a4d3362536ba85e927053d9b99b91f240e8ecc05cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:show.html.twig", 1);
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
        $__internal_2df33ede5d1858b77f3eb050ea42780fd24d7bc26f8e48577243ae42b7f8403e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df33ede5d1858b77f3eb050ea42780fd24d7bc26f8e48577243ae42b7f8403e->enter($__internal_2df33ede5d1858b77f3eb050ea42780fd24d7bc26f8e48577243ae42b7f8403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:show.html.twig"));

        $__internal_da3eb76cf9b13acd5c22567288d66aa0a0b83b8602f99e590803bcf7f634e929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3eb76cf9b13acd5c22567288d66aa0a0b83b8602f99e590803bcf7f634e929->enter($__internal_da3eb76cf9b13acd5c22567288d66aa0a0b83b8602f99e590803bcf7f634e929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2df33ede5d1858b77f3eb050ea42780fd24d7bc26f8e48577243ae42b7f8403e->leave($__internal_2df33ede5d1858b77f3eb050ea42780fd24d7bc26f8e48577243ae42b7f8403e_prof);

        
        $__internal_da3eb76cf9b13acd5c22567288d66aa0a0b83b8602f99e590803bcf7f634e929->leave($__internal_da3eb76cf9b13acd5c22567288d66aa0a0b83b8602f99e590803bcf7f634e929_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_772c7a0478cb6f1073eedb14d8f70ab816c72cec0db4099a73a617dbb0a9316e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772c7a0478cb6f1073eedb14d8f70ab816c72cec0db4099a73a617dbb0a9316e->enter($__internal_772c7a0478cb6f1073eedb14d8f70ab816c72cec0db4099a73a617dbb0a9316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_848e4005873a07a71b9248e0f55e9a23584973d65efbcf4566eb588fa3beecad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848e4005873a07a71b9248e0f55e9a23584973d65efbcf4566eb588fa3beecad->enter($__internal_848e4005873a07a71b9248e0f55e9a23584973d65efbcf4566eb588fa3beecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Evennement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedeb</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "dateDeb", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "dateDeb", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_edit", array("id" => $this->getAttribute(($context["evennement"] ?? $this->getContext($context, "evennement")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_848e4005873a07a71b9248e0f55e9a23584973d65efbcf4566eb588fa3beecad->leave($__internal_848e4005873a07a71b9248e0f55e9a23584973d65efbcf4566eb588fa3beecad_prof);

        
        $__internal_772c7a0478cb6f1073eedb14d8f70ab816c72cec0db4099a73a617dbb0a9316e->leave($__internal_772c7a0478cb6f1073eedb14d8f70ab816c72cec0db4099a73a617dbb0a9316e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  132 => 51,  126 => 48,  120 => 45,  110 => 38,  103 => 34,  96 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Evennement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ evennement.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ evennement.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evennement.description }}</td>
            </tr>
            <tr>
                <th>Datedeb</th>
                <td>{% if evennement.dateDeb %}{{ evennement.dateDeb|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>{% if evennement.dateFin %}{{ evennement.dateFin|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ evennement.lieu }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ evennement.prix }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ evennement.etat }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('evennements_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "FrontBundle:evennements:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/show.html.twig");
    }
}

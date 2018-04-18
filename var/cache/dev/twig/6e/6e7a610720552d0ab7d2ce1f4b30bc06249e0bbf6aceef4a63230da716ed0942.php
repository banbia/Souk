<?php

/* FrontBundle:reclamations:show.html.twig */
class __TwigTemplate_1305508b7234c4f9a449be89530088ac13fbaaf6721b59dad6466a5ec7c48c21 extends Twig_Template
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
        $__internal_a83e82de01d3969765736e62902aff087a3e51d28d72e006a0e34ba8db6f3347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83e82de01d3969765736e62902aff087a3e51d28d72e006a0e34ba8db6f3347->enter($__internal_a83e82de01d3969765736e62902aff087a3e51d28d72e006a0e34ba8db6f3347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $__internal_4a713d12b6676516d4cd33e45450ce13a0e42b82f567f75ad36de115f0e303cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a713d12b6676516d4cd33e45450ce13a0e42b82f567f75ad36de115f0e303cf->enter($__internal_4a713d12b6676516d4cd33e45450ce13a0e42b82f567f75ad36de115f0e303cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a83e82de01d3969765736e62902aff087a3e51d28d72e006a0e34ba8db6f3347->leave($__internal_a83e82de01d3969765736e62902aff087a3e51d28d72e006a0e34ba8db6f3347_prof);

        
        $__internal_4a713d12b6676516d4cd33e45450ce13a0e42b82f567f75ad36de115f0e303cf->leave($__internal_4a713d12b6676516d4cd33e45450ce13a0e42b82f567f75ad36de115f0e303cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bddb6f530b68cdb77c95e8f855d910d9363517050d00e3fb9dc861b327d45e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bddb6f530b68cdb77c95e8f855d910d9363517050d00e3fb9dc861b327d45e4->enter($__internal_6bddb6f530b68cdb77c95e8f855d910d9363517050d00e3fb9dc861b327d45e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7300082db2b08c341672c0808b3992fc0e710e5b9daaae45bdaf0f8890eba082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7300082db2b08c341672c0808b3992fc0e710e5b9daaae45bdaf0f8890eba082->enter($__internal_7300082db2b08c341672c0808b3992fc0e710e5b9daaae45bdaf0f8890eba082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reclamation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Daterec</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "dateRec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "dateRec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "etat", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute(($context["reclamation"] ?? $this->getContext($context, "reclamation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7300082db2b08c341672c0808b3992fc0e710e5b9daaae45bdaf0f8890eba082->leave($__internal_7300082db2b08c341672c0808b3992fc0e710e5b9daaae45bdaf0f8890eba082_prof);

        
        $__internal_6bddb6f530b68cdb77c95e8f855d910d9363517050d00e3fb9dc861b327d45e4->leave($__internal_6bddb6f530b68cdb77c95e8f855d910d9363517050d00e3fb9dc861b327d45e4_prof);

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

    <table>
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
", "FrontBundle:reclamations:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/reclamations/show.html.twig");
    }
}

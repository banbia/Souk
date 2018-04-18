<?php

/* BackBundle:commercial/annonces:show.html.twig */
class __TwigTemplate_4739455e0c4fa89665743d5937fc3cba52d723596b6d7ad717b37432749fa27e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:commercial/annonces:show.html.twig", 1);
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
        $__internal_7342795150d9e3961a0d23691a041f50e629dc105c459a98358f52ff0c78ea41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7342795150d9e3961a0d23691a041f50e629dc105c459a98358f52ff0c78ea41->enter($__internal_7342795150d9e3961a0d23691a041f50e629dc105c459a98358f52ff0c78ea41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:show.html.twig"));

        $__internal_57ae5f6bd37fa7b89b8dda83529a252159301a23baaa4f4c3a1213ee8c6893e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ae5f6bd37fa7b89b8dda83529a252159301a23baaa4f4c3a1213ee8c6893e0->enter($__internal_57ae5f6bd37fa7b89b8dda83529a252159301a23baaa4f4c3a1213ee8c6893e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7342795150d9e3961a0d23691a041f50e629dc105c459a98358f52ff0c78ea41->leave($__internal_7342795150d9e3961a0d23691a041f50e629dc105c459a98358f52ff0c78ea41_prof);

        
        $__internal_57ae5f6bd37fa7b89b8dda83529a252159301a23baaa4f4c3a1213ee8c6893e0->leave($__internal_57ae5f6bd37fa7b89b8dda83529a252159301a23baaa4f4c3a1213ee8c6893e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae3b073234b095b5b035d08aa6248ba27cc53537e1d6e30fcf4df3bf8550fca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3b073234b095b5b035d08aa6248ba27cc53537e1d6e30fcf4df3bf8550fca6->enter($__internal_ae3b073234b095b5b035d08aa6248ba27cc53537e1d6e30fcf4df3bf8550fca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e905a96f788c33814a62b791e17d3641acdde88c5fd35957d0407f012b1dd91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e905a96f788c33814a62b791e17d3641acdde88c5fd35957d0407f012b1dd91b->enter($__internal_e905a96f788c33814a62b791e17d3641acdde88c5fd35957d0407f012b1dd91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "disponible", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "dateCreation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e905a96f788c33814a62b791e17d3641acdde88c5fd35957d0407f012b1dd91b->leave($__internal_e905a96f788c33814a62b791e17d3641acdde88c5fd35957d0407f012b1dd91b_prof);

        
        $__internal_ae3b073234b095b5b035d08aa6248ba27cc53537e1d6e30fcf4df3bf8550fca6->leave($__internal_ae3b073234b095b5b035d08aa6248ba27cc53537e1d6e30fcf4df3bf8550fca6_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:commercial/annonces:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 45,  120 => 43,  114 => 40,  108 => 37,  96 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Annonce</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ annonce.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ annonce.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ annonce.description }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ annonce.prix }}</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>{% if annonce.disponible %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>{% if annonce.dateCreation %}{{ annonce.dateCreation|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('annonces_edit', { 'id': annonce.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackBundle:commercial/annonces:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/commercial/annonces/show.html.twig");
    }
}

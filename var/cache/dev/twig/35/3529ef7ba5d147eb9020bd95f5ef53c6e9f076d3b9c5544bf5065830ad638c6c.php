<?php

/* BackBundle:abonnements:index.html.twig */
class __TwigTemplate_9c82e4627cb449440dfb0a325f6247fd7bfba03ed98615f326b2aa4c26ee1037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:index.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/css/SafaBarka_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-warning\">Liste Des Abonnements</h1>

            <a class=\"btn btn-success\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_new");
        echo "\"><i class=\"fa fa-plus\"></i> Nouvel abonnement</a>
            <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_demandes");
        echo "\"><i class=\"fa fa-list\"></i> Demandes</a>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Nombre de mois </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) ? $context["abonnements"] : $this->getContext($context, "abonnements")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "nbMois", array()), "html", null, true);
            echo "</td>
                <td>

                    <a class =\"btn btn-default\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_show", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file-text-o\"></i> Afficher</a>
                    <a class =\"btn btn-default\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    <a class =\"btn btn-default\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_delete", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\"></i> Supprimer</a>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 35,  129 => 32,  125 => 31,  121 => 30,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  100 => 23,  96 => 22,  80 => 9,  76 => 8,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% block style %}
<link href=\"{{ asset ('bundles/back/css/SafaBarka_css.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock style %}
{% block body %}
    <h1 class=\"text-warning\">Liste Des Abonnements</h1>

            <a class=\"btn btn-success\" href=\"{{ path('abonnements_new') }}\"><i class=\"fa fa-plus\"></i> Nouvel abonnement</a>
            <a class=\"btn btn-primary\" href=\"{{ path('abonnements_demandes') }}\"><i class=\"fa fa-list\"></i> Demandes</a>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Nombre de mois </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for abonnement in abonnements %}
            <tr>
                <td>{{ abonnement.designation }}</td>
                <td>{{ abonnement.description }}</td>
                <td>{{ abonnement.prix }}</td>
                <td>{{ abonnement.nbMois }}</td>
                <td>

                    <a class =\"btn btn-default\" href=\"{{ path('abonnements_show', { 'id': abonnement.id }) }}\"><i class=\"fa fa-file-text-o\"></i> Afficher</a>
                    <a class =\"btn btn-default\" href=\"{{ path('abonnements_edit', { 'id': abonnement.id }) }}\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    <a class =\"btn btn-default\" href=\"{{ path('abonnements_delete', { 'id': abonnement.id }) }}\"><i class=\"fa fa-trash-o\"></i> Supprimer</a>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "BackBundle:abonnements:index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/index.html.twig");
    }
}

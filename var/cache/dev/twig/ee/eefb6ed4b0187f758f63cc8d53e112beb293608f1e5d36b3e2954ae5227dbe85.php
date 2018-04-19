<?php

/* FrontBundle:reclamations:index.html.twig */
class __TwigTemplate_6b6bbc34a2799d69681e5436cbd4a4202cd7c9d8b2acd95e9b51ecab2384232f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:index.html.twig", 1);
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
        $__internal_dc619fb03cc28a52b3d0c8ebbb6719a5e32ab319665fc8fc0e67c5bc0667bd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc619fb03cc28a52b3d0c8ebbb6719a5e32ab319665fc8fc0e67c5bc0667bd2d->enter($__internal_dc619fb03cc28a52b3d0c8ebbb6719a5e32ab319665fc8fc0e67c5bc0667bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:index.html.twig"));

        $__internal_71453dc0d99bd86852cebd3a2f3b825bf43ecba7412340ec084543be64a262d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71453dc0d99bd86852cebd3a2f3b825bf43ecba7412340ec084543be64a262d7->enter($__internal_71453dc0d99bd86852cebd3a2f3b825bf43ecba7412340ec084543be64a262d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc619fb03cc28a52b3d0c8ebbb6719a5e32ab319665fc8fc0e67c5bc0667bd2d->leave($__internal_dc619fb03cc28a52b3d0c8ebbb6719a5e32ab319665fc8fc0e67c5bc0667bd2d_prof);

        
        $__internal_71453dc0d99bd86852cebd3a2f3b825bf43ecba7412340ec084543be64a262d7->leave($__internal_71453dc0d99bd86852cebd3a2f3b825bf43ecba7412340ec084543be64a262d7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d83aed4b6e5e8504e766aefa29d368d88419c0166ebc8e31097da8d479911386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83aed4b6e5e8504e766aefa29d368d88419c0166ebc8e31097da8d479911386->enter($__internal_d83aed4b6e5e8504e766aefa29d368d88419c0166ebc8e31097da8d479911386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ef342ca0efc647cb96501d98d68a853a8426710bb5745e15ac0c3d8bfd77b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef342ca0efc647cb96501d98d68a853a8426710bb5745e15ac0c3d8bfd77b96->enter($__internal_2ef342ca0efc647cb96501d98d68a853a8426710bb5745e15ac0c3d8bfd77b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Liste de votre reclamations</h1>

    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr class=\"table-secondary\">
                <th>Contenu</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 16
            echo "            <tr>

                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if (($this->getAttribute($context["reclamation"], "etat", array()) == 0)) {
                echo " encours
                    ";
            } elseif (($this->getAttribute(            // line 21
$context["reclamation"], "etat", array()) == 1)) {
                echo " accepter
                    ";
            } elseif (($this->getAttribute(            // line 22
$context["reclamation"], "etat", array()) == 2)) {
                echo "  rejeter
                    ";
            }
            // line 24
            echo "                </td>
                <td>

                    <a class=\"btn btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> modifier </a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_new");
        echo "\"><button type=\"submit\" class=\"btn btn-success\">  Create a new reclamation  </button></a>
";
        
        $__internal_2ef342ca0efc647cb96501d98d68a853a8426710bb5745e15ac0c3d8bfd77b96->leave($__internal_2ef342ca0efc647cb96501d98d68a853a8426710bb5745e15ac0c3d8bfd77b96_prof);

        
        $__internal_d83aed4b6e5e8504e766aefa29d368d88419c0166ebc8e31097da8d479911386->leave($__internal_d83aed4b6e5e8504e766aefa29d368d88419c0166ebc8e31097da8d479911386_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  99 => 27,  94 => 24,  89 => 22,  85 => 21,  81 => 20,  75 => 19,  71 => 18,  67 => 16,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>Liste de votre reclamations</h1>

    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr class=\"table-secondary\">
                <th>Contenu</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>

                <td>{{ reclamation.contenu }}</td>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
                <td>{% if reclamation.etat == 0 %} encours
                    {% elseif reclamation.etat == 1 %} accepter
                    {% elseif reclamation.etat == 2 %}  rejeter
                    {% endif %}
                </td>
                <td>

                    <a class=\"btn btn-default\" href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\"><i class=\"fa fa-edit\"></i> modifier </a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href=\"{{ path('reclamations_new') }}\"><button type=\"submit\" class=\"btn btn-success\">  Create a new reclamation  </button></a>
{% endblock %}
", "FrontBundle:reclamations:index.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/index.html.twig");
    }
}

<?php

/* BackBundle:reclamations:index.html.twig */
class __TwigTemplate_6369439b3a6e078addaef93ffba0fa67cc9235309b0e34bd122d59656a3d4b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:reclamations:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:reclamations:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:reclamations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1> Liste Reclamations</h1>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
            <tr class=\"table-secondary\">
                <th>Contenu</th>
                <th>Commercial</th>
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
                <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reclamation"], "commercial", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 22
            if (($this->getAttribute($context["reclamation"], "etat", array()) == 0)) {
                echo " encours
                    ";
            } elseif (($this->getAttribute(            // line 23
$context["reclamation"], "etat", array()) == 1)) {
                echo " acceptée
                    ";
            } elseif (($this->getAttribute(            // line 24
$context["reclamation"], "etat", array()) ==  -1)) {
                echo "  rejetée
                    ";
            }
            // line 26
            echo "                </td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reclamations_accepter", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-check \" ></i></a>
                    <a class=\"btn btn-danger\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reclamations_refuser", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-times\" ></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:reclamations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  107 => 29,  103 => 28,  99 => 26,  94 => 24,  90 => 23,  86 => 22,  79 => 20,  75 => 19,  71 => 18,  67 => 16,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1> Liste Reclamations</h1>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
            <tr class=\"table-secondary\">
                <th>Contenu</th>
                <th>Commercial</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>

                <td>{{ reclamation.contenu }}</td>
                <td> {{ reclamation.commercial.nom }}</td>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
                <td>
                    {% if reclamation.etat == 0 %} encours
                    {% elseif reclamation.etat == 1 %} acceptée
                    {% elseif reclamation.etat == (-1) %}  rejetée
                    {% endif %}
                </td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('admin_reclamations_accepter', { 'id': reclamation.id } ) }}\"> <i class=\"fa fa-check \" ></i></a>
                    <a class=\"btn btn-danger\" href=\"{{ path('admin_reclamations_refuser', { 'id': reclamation.id } ) }}\"> <i class=\"fa fa-times\" ></i></a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "BackBundle:reclamations:index.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/reclamations/index.html.twig");
    }
}

<?php

/* BackBundle:reclamations:index.html.twig */
class __TwigTemplate_37f8dbce4eb8fa919cca419d6917c7076f02a64ceebf06c7d24c56f68bdde064 extends Twig_Template
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
        $__internal_cfda5296b50a75f0c70ab336441cf4440b2aa17dd3c7b08d07f0729a437bae8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfda5296b50a75f0c70ab336441cf4440b2aa17dd3c7b08d07f0729a437bae8a->enter($__internal_cfda5296b50a75f0c70ab336441cf4440b2aa17dd3c7b08d07f0729a437bae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:reclamations:index.html.twig"));

        $__internal_6f5c34abb347cdf463b8ecda24bc9ea8e6be39d793de8a6ce4271bc2298163da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5c34abb347cdf463b8ecda24bc9ea8e6be39d793de8a6ce4271bc2298163da->enter($__internal_6f5c34abb347cdf463b8ecda24bc9ea8e6be39d793de8a6ce4271bc2298163da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:reclamations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfda5296b50a75f0c70ab336441cf4440b2aa17dd3c7b08d07f0729a437bae8a->leave($__internal_cfda5296b50a75f0c70ab336441cf4440b2aa17dd3c7b08d07f0729a437bae8a_prof);

        
        $__internal_6f5c34abb347cdf463b8ecda24bc9ea8e6be39d793de8a6ce4271bc2298163da->leave($__internal_6f5c34abb347cdf463b8ecda24bc9ea8e6be39d793de8a6ce4271bc2298163da_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_00196300c82bf4bd3a987ef9bc8d8176e365ee953837023f847ef1674b776672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00196300c82bf4bd3a987ef9bc8d8176e365ee953837023f847ef1674b776672->enter($__internal_00196300c82bf4bd3a987ef9bc8d8176e365ee953837023f847ef1674b776672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_918f73494f1fa3feca2842e607c9b4487ebad03ad998df63fd11185bb75fd0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918f73494f1fa3feca2842e607c9b4487ebad03ad998df63fd11185bb75fd0e2->enter($__internal_918f73494f1fa3feca2842e607c9b4487ebad03ad998df63fd11185bb75fd0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Reclamations list</h1>
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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 15
            echo "            <tr>

                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            if (($this->getAttribute($context["reclamation"], "etat", array()) == 0)) {
                echo " encours
                    ";
            } elseif (($this->getAttribute(            // line 20
$context["reclamation"], "etat", array()) == 1)) {
                echo " accepter
                    ";
            } elseif (($this->getAttribute(            // line 21
$context["reclamation"], "etat", array()) == 2)) {
                echo "  rejeter
                    ";
            }
            // line 23
            echo "                </td>
                <td>

                            <a class=\"btn btn-default\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i>  Marquer comme lue</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_918f73494f1fa3feca2842e607c9b4487ebad03ad998df63fd11185bb75fd0e2->leave($__internal_918f73494f1fa3feca2842e607c9b4487ebad03ad998df63fd11185bb75fd0e2_prof);

        
        $__internal_00196300c82bf4bd3a987ef9bc8d8176e365ee953837023f847ef1674b776672->leave($__internal_00196300c82bf4bd3a987ef9bc8d8176e365ee953837023f847ef1674b776672_prof);

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
        return array (  109 => 31,  98 => 26,  93 => 23,  88 => 21,  84 => 20,  80 => 19,  74 => 18,  70 => 17,  66 => 15,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>Reclamations list</h1>
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

                            <a class=\"btn btn-default\" href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\"><i class=\"fa fa-edit\"></i>  Marquer comme lue</a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "BackBundle:reclamations:index.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/reclamations/index.html.twig");
    }
}

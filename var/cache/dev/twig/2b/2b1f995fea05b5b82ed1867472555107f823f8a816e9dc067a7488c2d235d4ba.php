<?php

/* FrontBundle:evennements:index.html.twig */
class __TwigTemplate_b79f641ea630c463ba6c1b1bda29fcd09be8c214cfc2660f9777080151659f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:index.html.twig", 1);
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
        $__internal_41efe84bfc54c2b99b633b0f6c7ecf63acb2fc832cc62e0146ea6f9ba4c7c8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41efe84bfc54c2b99b633b0f6c7ecf63acb2fc832cc62e0146ea6f9ba4c7c8b4->enter($__internal_41efe84bfc54c2b99b633b0f6c7ecf63acb2fc832cc62e0146ea6f9ba4c7c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $__internal_76fde7512a9d32f0192f4aba2b3033d997f6324ef94cb652b79d57e2d8c8872d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fde7512a9d32f0192f4aba2b3033d997f6324ef94cb652b79d57e2d8c8872d->enter($__internal_76fde7512a9d32f0192f4aba2b3033d997f6324ef94cb652b79d57e2d8c8872d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41efe84bfc54c2b99b633b0f6c7ecf63acb2fc832cc62e0146ea6f9ba4c7c8b4->leave($__internal_41efe84bfc54c2b99b633b0f6c7ecf63acb2fc832cc62e0146ea6f9ba4c7c8b4_prof);

        
        $__internal_76fde7512a9d32f0192f4aba2b3033d997f6324ef94cb652b79d57e2d8c8872d->leave($__internal_76fde7512a9d32f0192f4aba2b3033d997f6324ef94cb652b79d57e2d8c8872d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26f121658b9e0fff80727a73cb4c593c51f68b3e0d0490fed9c41a04a436c9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f121658b9e0fff80727a73cb4c593c51f68b3e0d0490fed9c41a04a436c9c8->enter($__internal_26f121658b9e0fff80727a73cb4c593c51f68b3e0d0490fed9c41a04a436c9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d500e7c117ea5b50bfbda21949e3b0a4cff04054c92bfb374c38457675663cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d500e7c117ea5b50bfbda21949e3b0a4cff04054c92bfb374c38457675663cb2->enter($__internal_d500e7c117ea5b50bfbda21949e3b0a4cff04054c92bfb374c38457675663cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Evennements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Datedeb</th>
                <th>Datefin</th>
                <th>Lieu</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evennements"]) ? $context["evennements"] : $this->getContext($context, "evennements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_show", array("id" => $this->getAttribute($context["evennement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["evennement"], "dateDeb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evennement"], "dateDeb", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["evennement"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evennement"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "lieu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["evennement"], "etat", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_show", array("id" => $this->getAttribute($context["evennement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_edit", array("id" => $this->getAttribute($context["evennement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_new");
        echo "\">Create a new evennement</a>
        </li>
    </ul>
";
        
        $__internal_d500e7c117ea5b50bfbda21949e3b0a4cff04054c92bfb374c38457675663cb2->leave($__internal_d500e7c117ea5b50bfbda21949e3b0a4cff04054c92bfb374c38457675663cb2_prof);

        
        $__internal_26f121658b9e0fff80727a73cb4c593c51f68b3e0d0490fed9c41a04a436c9c8->leave($__internal_26f121658b9e0fff80727a73cb4c593c51f68b3e0d0490fed9c41a04a436c9c8_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 48,  134 => 43,  122 => 37,  116 => 34,  109 => 30,  105 => 29,  101 => 28,  95 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Evennements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Datedeb</th>
                <th>Datefin</th>
                <th>Lieu</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for evennement in evennements %}
            <tr>
                <td><a href=\"{{ path('evennements_show', { 'id': evennement.id }) }}\">{{ evennement.id }}</a></td>
                <td>{{ evennement.titre }}</td>
                <td>{{ evennement.description }}</td>
                <td>{% if evennement.dateDeb %}{{ evennement.dateDeb|date('Y-m-d') }}{% endif %}</td>
                <td>{% if evennement.dateFin %}{{ evennement.dateFin|date('Y-m-d') }}{% endif %}</td>
                <td>{{ evennement.lieu }}</td>
                <td>{{ evennement.prix }}</td>
                <td>{{ evennement.etat }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('evennements_show', { 'id': evennement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('evennements_new') }}\">Create a new evennement</a>
        </li>
    </ul>
{% endblock %}
", "FrontBundle:evennements:index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/evennements/index.html.twig");
    }
}

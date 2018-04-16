<?php

/* FrontBundle:annonces:index.html.twig */
class __TwigTemplate_fa2a8300440d14bc4d46fe4b07aa7bd206adc90cff4b6118b94772837231328a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:index.html.twig", 1);
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
        $__internal_19c02a670346f806df87994ac31a923f0e6781c4eb0315ff101a7aa5dc1dd954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c02a670346f806df87994ac31a923f0e6781c4eb0315ff101a7aa5dc1dd954->enter($__internal_19c02a670346f806df87994ac31a923f0e6781c4eb0315ff101a7aa5dc1dd954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $__internal_96ea20cc42296d1268cd9c90e8aa80ee4cc0685038ae0fbf0c9cee51c61addfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ea20cc42296d1268cd9c90e8aa80ee4cc0685038ae0fbf0c9cee51c61addfa->enter($__internal_96ea20cc42296d1268cd9c90e8aa80ee4cc0685038ae0fbf0c9cee51c61addfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c02a670346f806df87994ac31a923f0e6781c4eb0315ff101a7aa5dc1dd954->leave($__internal_19c02a670346f806df87994ac31a923f0e6781c4eb0315ff101a7aa5dc1dd954_prof);

        
        $__internal_96ea20cc42296d1268cd9c90e8aa80ee4cc0685038ae0fbf0c9cee51c61addfa->leave($__internal_96ea20cc42296d1268cd9c90e8aa80ee4cc0685038ae0fbf0c9cee51c61addfa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db1d9085b975d7027b9b3386a6935923221bdaa5dc17826d5e9b948af677777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1d9085b975d7027b9b3386a6935923221bdaa5dc17826d5e9b948af677777f->enter($__internal_db1d9085b975d7027b9b3386a6935923221bdaa5dc17826d5e9b948af677777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4058ca110368bbd87bf14bc74a7fcade67aa38e5de9f30a2840655144bb57287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4058ca110368bbd87bf14bc74a7fcade67aa38e5de9f30a2840655144bb57287->enter($__internal_4058ca110368bbd87bf14bc74a7fcade67aa38e5de9f30a2840655144bb57287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonces list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Datecreation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["annonce"], "disponible", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["annonce"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>


";
        
        $__internal_4058ca110368bbd87bf14bc74a7fcade67aa38e5de9f30a2840655144bb57287->leave($__internal_4058ca110368bbd87bf14bc74a7fcade67aa38e5de9f30a2840655144bb57287_prof);

        
        $__internal_db1d9085b975d7027b9b3386a6935923221bdaa5dc17826d5e9b948af677777f->leave($__internal_db1d9085b975d7027b9b3386a6935923221bdaa5dc17826d5e9b948af677777f_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  108 => 30,  99 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Annonces list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Datecreation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for annonce in annonces %}
            <tr>
                <td><a href=\"{{ path('client_annonces_show', { 'id': annonce.id }) }}\">{{ annonce.id }}</a></td>
                <td>{{ annonce.titre }}</td>
                <td>{{ annonce.description }}</td>
                <td>{{ annonce.prix }}</td>
                <td>{% if annonce.disponible %}Yes{% else %}No{% endif %}</td>
                <td>{% if annonce.dateCreation %}{{ annonce.dateCreation|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('client_annonces_show', { 'id': annonce.id }) }}\">show</a>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "FrontBundle:annonces:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/index.html.twig");
    }
}

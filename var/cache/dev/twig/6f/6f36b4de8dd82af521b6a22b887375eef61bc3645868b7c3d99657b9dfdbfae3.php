<?php

/* BackBundle:commercial/annonces:index.html.twig */
class __TwigTemplate_b5b27dad86c9591fb6e53ed939a26c04d8e0f9e68bd0ad72fa68132f61632a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:commercial/annonces:index.html.twig", 1);
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
        $__internal_3dc7a05e4dc8e954daa863d0b4cc56395ad1a9b27ca6c7fbf4a1b662da03a869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc7a05e4dc8e954daa863d0b4cc56395ad1a9b27ca6c7fbf4a1b662da03a869->enter($__internal_3dc7a05e4dc8e954daa863d0b4cc56395ad1a9b27ca6c7fbf4a1b662da03a869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:index.html.twig"));

        $__internal_65f63783c6e533690537bae9d4915c19e0639ef1d519b42dc13a6be4fa6d5616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f63783c6e533690537bae9d4915c19e0639ef1d519b42dc13a6be4fa6d5616->enter($__internal_65f63783c6e533690537bae9d4915c19e0639ef1d519b42dc13a6be4fa6d5616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:commercial/annonces:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc7a05e4dc8e954daa863d0b4cc56395ad1a9b27ca6c7fbf4a1b662da03a869->leave($__internal_3dc7a05e4dc8e954daa863d0b4cc56395ad1a9b27ca6c7fbf4a1b662da03a869_prof);

        
        $__internal_65f63783c6e533690537bae9d4915c19e0639ef1d519b42dc13a6be4fa6d5616->leave($__internal_65f63783c6e533690537bae9d4915c19e0639ef1d519b42dc13a6be4fa6d5616_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e943d1a8ec0e91d8b7f2ca91ded55d7236f5d1eda5d4b501818736faf99d973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e943d1a8ec0e91d8b7f2ca91ded55d7236f5d1eda5d4b501818736faf99d973->enter($__internal_6e943d1a8ec0e91d8b7f2ca91ded55d7236f5d1eda5d4b501818736faf99d973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d61badefc03e0ba3886ab9d1ccaa5a318925d6dced15ed22723097e17512b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d61badefc03e0ba3886ab9d1ccaa5a318925d6dced15ed22723097e17512b1c->enter($__internal_0d61badefc03e0ba3886ab9d1ccaa5a318925d6dced15ed22723097e17512b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_new");
        echo "\">Create a new annonce</a>
        </li>
    </ul>
";
        
        $__internal_0d61badefc03e0ba3886ab9d1ccaa5a318925d6dced15ed22723097e17512b1c->leave($__internal_0d61badefc03e0ba3886ab9d1ccaa5a318925d6dced15ed22723097e17512b1c_prof);

        
        $__internal_6e943d1a8ec0e91d8b7f2ca91ded55d7236f5d1eda5d4b501818736faf99d973->leave($__internal_6e943d1a8ec0e91d8b7f2ca91ded55d7236f5d1eda5d4b501818736faf99d973_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:commercial/annonces:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  126 => 39,  114 => 33,  108 => 30,  99 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
                <td><a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\">{{ annonce.id }}</a></td>
                <td>{{ annonce.titre }}</td>
                <td>{{ annonce.description }}</td>
                <td>{{ annonce.prix }}</td>
                <td>{% if annonce.disponible %}Yes{% else %}No{% endif %}</td>
                <td>{% if annonce.dateCreation %}{{ annonce.dateCreation|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('annonces_edit', { 'id': annonce.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('annonces_new') }}\">Create a new annonce</a>
        </li>
    </ul>
{% endblock %}
", "BackBundle:commercial/annonces:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/commercial/annonces/index.html.twig");
    }
}

<?php

/* FrontBundle:evennements:index.html.twig */
class __TwigTemplate_861ccef509a0e674038f07284d7d7c4543b9e1272cd96537a74ff20f96a65d35 extends Twig_Template
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
        $__internal_9f90fe7d2fcbff3590a681b7ace91d9dc97094a3844320b447283a9ae6934873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f90fe7d2fcbff3590a681b7ace91d9dc97094a3844320b447283a9ae6934873->enter($__internal_9f90fe7d2fcbff3590a681b7ace91d9dc97094a3844320b447283a9ae6934873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $__internal_1ba7b06af7892a6a19c48dcdaaef741f5d117730e7ccb8fb5f217ef8c29ea282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba7b06af7892a6a19c48dcdaaef741f5d117730e7ccb8fb5f217ef8c29ea282->enter($__internal_1ba7b06af7892a6a19c48dcdaaef741f5d117730e7ccb8fb5f217ef8c29ea282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f90fe7d2fcbff3590a681b7ace91d9dc97094a3844320b447283a9ae6934873->leave($__internal_9f90fe7d2fcbff3590a681b7ace91d9dc97094a3844320b447283a9ae6934873_prof);

        
        $__internal_1ba7b06af7892a6a19c48dcdaaef741f5d117730e7ccb8fb5f217ef8c29ea282->leave($__internal_1ba7b06af7892a6a19c48dcdaaef741f5d117730e7ccb8fb5f217ef8c29ea282_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4b704f110389a7f4928623e9c754d45d1a820a54d083f7014976cec0825fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4b704f110389a7f4928623e9c754d45d1a820a54d083f7014976cec0825fad->enter($__internal_0a4b704f110389a7f4928623e9c754d45d1a820a54d083f7014976cec0825fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59f8d6edbc9e55381d561354666a2db482886dcfb0795dc13157d4bd739695c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f8d6edbc9e55381d561354666a2db482886dcfb0795dc13157d4bd739695c2->enter($__internal_59f8d6edbc9e55381d561354666a2db482886dcfb0795dc13157d4bd739695c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["evennements"] ?? $this->getContext($context, "evennements")));
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
        
        $__internal_59f8d6edbc9e55381d561354666a2db482886dcfb0795dc13157d4bd739695c2->leave($__internal_59f8d6edbc9e55381d561354666a2db482886dcfb0795dc13157d4bd739695c2_prof);

        
        $__internal_0a4b704f110389a7f4928623e9c754d45d1a820a54d083f7014976cec0825fad->leave($__internal_0a4b704f110389a7f4928623e9c754d45d1a820a54d083f7014976cec0825fad_prof);

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
", "FrontBundle:evennements:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/index.html.twig");
    }
}

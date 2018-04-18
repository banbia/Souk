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
        $__internal_3a96ac21bf13a8402afd678cd27d7512fd50d6c62d5c5620bdb548e98811bc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a96ac21bf13a8402afd678cd27d7512fd50d6c62d5c5620bdb548e98811bc06->enter($__internal_3a96ac21bf13a8402afd678cd27d7512fd50d6c62d5c5620bdb548e98811bc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $__internal_13cd989f7cce90daf70f5ce360377db2356a00d766703ed2d4adf8cad8518000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cd989f7cce90daf70f5ce360377db2356a00d766703ed2d4adf8cad8518000->enter($__internal_13cd989f7cce90daf70f5ce360377db2356a00d766703ed2d4adf8cad8518000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a96ac21bf13a8402afd678cd27d7512fd50d6c62d5c5620bdb548e98811bc06->leave($__internal_3a96ac21bf13a8402afd678cd27d7512fd50d6c62d5c5620bdb548e98811bc06_prof);

        
        $__internal_13cd989f7cce90daf70f5ce360377db2356a00d766703ed2d4adf8cad8518000->leave($__internal_13cd989f7cce90daf70f5ce360377db2356a00d766703ed2d4adf8cad8518000_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42860e7e10a21f86f48b05d164c0051fef63fcb2ad9cf5d48aaeddbe43e3d55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42860e7e10a21f86f48b05d164c0051fef63fcb2ad9cf5d48aaeddbe43e3d55a->enter($__internal_42860e7e10a21f86f48b05d164c0051fef63fcb2ad9cf5d48aaeddbe43e3d55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b1a98b7134e3c4163941895e99c9748cae56af20745c57d6ec093ae6821cc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1a98b7134e3c4163941895e99c9748cae56af20745c57d6ec093ae6821cc3f->enter($__internal_1b1a98b7134e3c4163941895e99c9748cae56af20745c57d6ec093ae6821cc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1b1a98b7134e3c4163941895e99c9748cae56af20745c57d6ec093ae6821cc3f->leave($__internal_1b1a98b7134e3c4163941895e99c9748cae56af20745c57d6ec093ae6821cc3f_prof);

        
        $__internal_42860e7e10a21f86f48b05d164c0051fef63fcb2ad9cf5d48aaeddbe43e3d55a->leave($__internal_42860e7e10a21f86f48b05d164c0051fef63fcb2ad9cf5d48aaeddbe43e3d55a_prof);

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

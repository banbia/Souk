<?php

/* FrontBundle:annonces:index.html.twig */
class __TwigTemplate_191e72186668accdef1192e1f661f448f077c5f3bc10710c7b8e5c9f482cd45e extends Twig_Template
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
        $__internal_9e14cc4e77778e4326fa5620e692e5beda6a2b7c6a96b4ecafe6f7b555049c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e14cc4e77778e4326fa5620e692e5beda6a2b7c6a96b4ecafe6f7b555049c94->enter($__internal_9e14cc4e77778e4326fa5620e692e5beda6a2b7c6a96b4ecafe6f7b555049c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $__internal_8705b05c5ae4eeef834bfeebc846f4fbaf873ecd34d5f005f0c66fbdd9567ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8705b05c5ae4eeef834bfeebc846f4fbaf873ecd34d5f005f0c66fbdd9567ecc->enter($__internal_8705b05c5ae4eeef834bfeebc846f4fbaf873ecd34d5f005f0c66fbdd9567ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e14cc4e77778e4326fa5620e692e5beda6a2b7c6a96b4ecafe6f7b555049c94->leave($__internal_9e14cc4e77778e4326fa5620e692e5beda6a2b7c6a96b4ecafe6f7b555049c94_prof);

        
        $__internal_8705b05c5ae4eeef834bfeebc846f4fbaf873ecd34d5f005f0c66fbdd9567ecc->leave($__internal_8705b05c5ae4eeef834bfeebc846f4fbaf873ecd34d5f005f0c66fbdd9567ecc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6d68c1abb61a2a0f490087be5725f9efadfabeba97e3a09e8d80efa9965ea61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d68c1abb61a2a0f490087be5725f9efadfabeba97e3a09e8d80efa9965ea61->enter($__internal_b6d68c1abb61a2a0f490087be5725f9efadfabeba97e3a09e8d80efa9965ea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfa0c61d10d5988321dc33d185a751cfc6e8f726f745043a950aaef8c1d84243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa0c61d10d5988321dc33d185a751cfc6e8f726f745043a950aaef8c1d84243->enter($__internal_dfa0c61d10d5988321dc33d185a751cfc6e8f726f745043a950aaef8c1d84243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
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
        
        $__internal_dfa0c61d10d5988321dc33d185a751cfc6e8f726f745043a950aaef8c1d84243->leave($__internal_dfa0c61d10d5988321dc33d185a751cfc6e8f726f745043a950aaef8c1d84243_prof);

        
        $__internal_b6d68c1abb61a2a0f490087be5725f9efadfabeba97e3a09e8d80efa9965ea61->leave($__internal_b6d68c1abb61a2a0f490087be5725f9efadfabeba97e3a09e8d80efa9965ea61_prof);

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
", "FrontBundle:annonces:index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/annonces/index.html.twig");
    }
}

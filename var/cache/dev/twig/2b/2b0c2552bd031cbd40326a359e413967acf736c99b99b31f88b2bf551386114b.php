<?php

/* FrontBundle:reclamations:index.html.twig */
class __TwigTemplate_297aa8565f8a21e214b9deac64cd42c51aea2b57f1485898e151d0790d7fb124 extends Twig_Template
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
        $__internal_edfab0273c0d4332f1d65c0f0be0fb597c91eae7ff0213b818b9cb7a8f09416e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfab0273c0d4332f1d65c0f0be0fb597c91eae7ff0213b818b9cb7a8f09416e->enter($__internal_edfab0273c0d4332f1d65c0f0be0fb597c91eae7ff0213b818b9cb7a8f09416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:index.html.twig"));

        $__internal_288fa7705be480c79ebb95e52fa101dd1133b1e2611413bf483333020b7e01cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288fa7705be480c79ebb95e52fa101dd1133b1e2611413bf483333020b7e01cb->enter($__internal_288fa7705be480c79ebb95e52fa101dd1133b1e2611413bf483333020b7e01cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfab0273c0d4332f1d65c0f0be0fb597c91eae7ff0213b818b9cb7a8f09416e->leave($__internal_edfab0273c0d4332f1d65c0f0be0fb597c91eae7ff0213b818b9cb7a8f09416e_prof);

        
        $__internal_288fa7705be480c79ebb95e52fa101dd1133b1e2611413bf483333020b7e01cb->leave($__internal_288fa7705be480c79ebb95e52fa101dd1133b1e2611413bf483333020b7e01cb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fef42318bbfc90bd11faaa86b4350890833a46176254847a04bb8db80b080c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef42318bbfc90bd11faaa86b4350890833a46176254847a04bb8db80b080c63->enter($__internal_fef42318bbfc90bd11faaa86b4350890833a46176254847a04bb8db80b080c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_043dd69d088cbbf4fdca2bc98df7c501e1fe5f60b9b8da5cb64fbc8c67bd0369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043dd69d088cbbf4fdca2bc98df7c501e1fe5f60b9b8da5cb64fbc8c67bd0369->enter($__internal_043dd69d088cbbf4fdca2bc98df7c501e1fe5f60b9b8da5cb64fbc8c67bd0369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Reclamations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Contenu</th>
                <th>Daterec</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_show", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "etat", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_show", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
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

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_new");
        echo "\">Create a new reclamation</a>
        </li>
    </ul>
";
        
        $__internal_043dd69d088cbbf4fdca2bc98df7c501e1fe5f60b9b8da5cb64fbc8c67bd0369->leave($__internal_043dd69d088cbbf4fdca2bc98df7c501e1fe5f60b9b8da5cb64fbc8c67bd0369_prof);

        
        $__internal_fef42318bbfc90bd11faaa86b4350890833a46176254847a04bb8db80b080c63->leave($__internal_fef42318bbfc90bd11faaa86b4350890833a46176254847a04bb8db80b080c63_prof);

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
        return array (  119 => 39,  112 => 34,  100 => 28,  94 => 25,  87 => 21,  81 => 20,  77 => 19,  71 => 18,  68 => 17,  64 => 16,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>Reclamations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Contenu</th>
                <th>Daterec</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
                <td><a href=\"{{ path('reclamations_show', { 'id': reclamation.id }) }}\">{{ reclamation.id }}</a></td>
                <td>{{ reclamation.contenu }}</td>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
                <td>{{ reclamation.etat }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('reclamations_show', { 'id': reclamation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reclamations_new') }}\">Create a new reclamation</a>
        </li>
    </ul>
{% endblock %}
", "FrontBundle:reclamations:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/reclamations/index.html.twig");
    }
}

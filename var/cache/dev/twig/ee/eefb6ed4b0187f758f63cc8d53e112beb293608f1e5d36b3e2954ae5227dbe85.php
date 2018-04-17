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
        $__internal_b96b994e67e39fe28aa4de66e9dfdac8007d4072c46594bc36afa5cc3d05a483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96b994e67e39fe28aa4de66e9dfdac8007d4072c46594bc36afa5cc3d05a483->enter($__internal_b96b994e67e39fe28aa4de66e9dfdac8007d4072c46594bc36afa5cc3d05a483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:index.html.twig"));

        $__internal_a0ead61ec50119182b2aee22748a5004ca10654cbc45a25b508f3ec167bf5372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ead61ec50119182b2aee22748a5004ca10654cbc45a25b508f3ec167bf5372->enter($__internal_a0ead61ec50119182b2aee22748a5004ca10654cbc45a25b508f3ec167bf5372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96b994e67e39fe28aa4de66e9dfdac8007d4072c46594bc36afa5cc3d05a483->leave($__internal_b96b994e67e39fe28aa4de66e9dfdac8007d4072c46594bc36afa5cc3d05a483_prof);

        
        $__internal_a0ead61ec50119182b2aee22748a5004ca10654cbc45a25b508f3ec167bf5372->leave($__internal_a0ead61ec50119182b2aee22748a5004ca10654cbc45a25b508f3ec167bf5372_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc83791750b9452352a2b1b9d6bb768726c5568e8a96ce9ae50809bed7c686f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc83791750b9452352a2b1b9d6bb768726c5568e8a96ce9ae50809bed7c686f->enter($__internal_cfc83791750b9452352a2b1b9d6bb768726c5568e8a96ce9ae50809bed7c686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48499e2cc825e3bfbdbb5e7391946380cd3b555a403b6eb034e77022b2ac03d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48499e2cc825e3bfbdbb5e7391946380cd3b555a403b6eb034e77022b2ac03d8->enter($__internal_48499e2cc825e3bfbdbb5e7391946380cd3b555a403b6eb034e77022b2ac03d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
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
        
        $__internal_48499e2cc825e3bfbdbb5e7391946380cd3b555a403b6eb034e77022b2ac03d8->leave($__internal_48499e2cc825e3bfbdbb5e7391946380cd3b555a403b6eb034e77022b2ac03d8_prof);

        
        $__internal_cfc83791750b9452352a2b1b9d6bb768726c5568e8a96ce9ae50809bed7c686f->leave($__internal_cfc83791750b9452352a2b1b9d6bb768726c5568e8a96ce9ae50809bed7c686f_prof);

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
", "FrontBundle:reclamations:index.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/index.html.twig");
    }
}

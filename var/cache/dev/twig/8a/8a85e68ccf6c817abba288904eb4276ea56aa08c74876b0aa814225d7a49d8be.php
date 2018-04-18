<?php

/* BackBundle:abonnements:index.html.twig */
class __TwigTemplate_cc7106d66a2d6a8194b7c51499a6a49b8571dba6efefc2580461800a4ed54fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:index.html.twig", 1);
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
        $__internal_7508d654f8b66567ba2adf65e736caef319eb66d539aabcc3324c546b092b5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7508d654f8b66567ba2adf65e736caef319eb66d539aabcc3324c546b092b5a5->enter($__internal_7508d654f8b66567ba2adf65e736caef319eb66d539aabcc3324c546b092b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $__internal_b82e1a4aa2a34e85c765591abc9b545ec355d107385e557ae4ebdd54e904965b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82e1a4aa2a34e85c765591abc9b545ec355d107385e557ae4ebdd54e904965b->enter($__internal_b82e1a4aa2a34e85c765591abc9b545ec355d107385e557ae4ebdd54e904965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7508d654f8b66567ba2adf65e736caef319eb66d539aabcc3324c546b092b5a5->leave($__internal_7508d654f8b66567ba2adf65e736caef319eb66d539aabcc3324c546b092b5a5_prof);

        
        $__internal_b82e1a4aa2a34e85c765591abc9b545ec355d107385e557ae4ebdd54e904965b->leave($__internal_b82e1a4aa2a34e85c765591abc9b545ec355d107385e557ae4ebdd54e904965b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f52bd95975b2d58a3682a0e2561863646af948e7530d071d881ac663263b8984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52bd95975b2d58a3682a0e2561863646af948e7530d071d881ac663263b8984->enter($__internal_f52bd95975b2d58a3682a0e2561863646af948e7530d071d881ac663263b8984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4870e6aad6a6c9c18bf1e6506a687585861f323a5294959e7f7c13b4474d6251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4870e6aad6a6c9c18bf1e6506a687585861f323a5294959e7f7c13b4474d6251->enter($__internal_4870e6aad6a6c9c18bf1e6506a687585861f323a5294959e7f7c13b4474d6251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnements list</h1>

            <a class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_new");
        echo "\"><i class=\"fa fa-plus\"></i> Nouvel abonnement</a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Nbmois</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) ? $context["abonnements"] : $this->getContext($context, "abonnements")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "nbMois", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_show", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>


";
        
        $__internal_4870e6aad6a6c9c18bf1e6506a687585861f323a5294959e7f7c13b4474d6251->leave($__internal_4870e6aad6a6c9c18bf1e6506a687585861f323a5294959e7f7c13b4474d6251_prof);

        
        $__internal_f52bd95975b2d58a3682a0e2561863646af948e7530d071d881ac663263b8984->leave($__internal_f52bd95975b2d58a3682a0e2561863646af948e7530d071d881ac663263b8984_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  101 => 31,  95 => 28,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  69 => 19,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Abonnements list</h1>

            <a class=\"btn btn-success\" href=\"{{ path('abonnements_new') }}\"><i class=\"fa fa-plus\"></i> Nouvel abonnement</a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Nbmois</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for abonnement in abonnements %}
            <tr>
                <td>{{ abonnement.designation }}</td>
                <td>{{ abonnement.description }}</td>
                <td>{{ abonnement.prix }}</td>
                <td>{{ abonnement.nbMois }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('abonnements_show', { 'id': abonnement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('abonnements_edit', { 'id': abonnement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "BackBundle:abonnements:index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/index.html.twig");
    }
}

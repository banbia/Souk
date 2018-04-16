<?php

/* BackBundle:abonnements:index.html.twig */
class __TwigTemplate_0a91a6ffd8c5c8de8da1adb0b3ec35abef7ef2d17275941e1deb9bca3e8a155b extends Twig_Template
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
        $__internal_7cc8bd45e2db12eb6af8fc80ab16256068a78547c37ee11aed128ca49b6a97a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc8bd45e2db12eb6af8fc80ab16256068a78547c37ee11aed128ca49b6a97a1->enter($__internal_7cc8bd45e2db12eb6af8fc80ab16256068a78547c37ee11aed128ca49b6a97a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $__internal_cd836653a7a0460dccec2f6e162d65c0e8b1b0371b5b5f592c8e692dcffa7d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd836653a7a0460dccec2f6e162d65c0e8b1b0371b5b5f592c8e692dcffa7d9f->enter($__internal_cd836653a7a0460dccec2f6e162d65c0e8b1b0371b5b5f592c8e692dcffa7d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc8bd45e2db12eb6af8fc80ab16256068a78547c37ee11aed128ca49b6a97a1->leave($__internal_7cc8bd45e2db12eb6af8fc80ab16256068a78547c37ee11aed128ca49b6a97a1_prof);

        
        $__internal_cd836653a7a0460dccec2f6e162d65c0e8b1b0371b5b5f592c8e692dcffa7d9f->leave($__internal_cd836653a7a0460dccec2f6e162d65c0e8b1b0371b5b5f592c8e692dcffa7d9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b271de8f0e2060182a0d2a694a39ac425cfeb5bccb1832595db07375377ec5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b271de8f0e2060182a0d2a694a39ac425cfeb5bccb1832595db07375377ec5fa->enter($__internal_b271de8f0e2060182a0d2a694a39ac425cfeb5bccb1832595db07375377ec5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd68e2f5744a05238412600d9f8154ed89cfab98b2c2f5366b0ae8da701d41a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd68e2f5744a05238412600d9f8154ed89cfab98b2c2f5366b0ae8da701d41a9->enter($__internal_dd68e2f5744a05238412600d9f8154ed89cfab98b2c2f5366b0ae8da701d41a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd68e2f5744a05238412600d9f8154ed89cfab98b2c2f5366b0ae8da701d41a9->leave($__internal_dd68e2f5744a05238412600d9f8154ed89cfab98b2c2f5366b0ae8da701d41a9_prof);

        
        $__internal_b271de8f0e2060182a0d2a694a39ac425cfeb5bccb1832595db07375377ec5fa->leave($__internal_b271de8f0e2060182a0d2a694a39ac425cfeb5bccb1832595db07375377ec5fa_prof);

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

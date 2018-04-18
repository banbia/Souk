<?php

/* BackBundle:abonnements:index.html.twig */
class __TwigTemplate_fccdda3bb8f1c9d31e359e5bce66b6994af197cd6dcf60e179e90c391dce48e0 extends Twig_Template
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
        $__internal_070165fb686054ff395ee16978d88600409b33d51b53ed2646e206bdeac9826b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070165fb686054ff395ee16978d88600409b33d51b53ed2646e206bdeac9826b->enter($__internal_070165fb686054ff395ee16978d88600409b33d51b53ed2646e206bdeac9826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $__internal_46ae54187aa1ba9ce5f2abd4600107952520057516ec71de2c0c36aa72db0600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ae54187aa1ba9ce5f2abd4600107952520057516ec71de2c0c36aa72db0600->enter($__internal_46ae54187aa1ba9ce5f2abd4600107952520057516ec71de2c0c36aa72db0600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070165fb686054ff395ee16978d88600409b33d51b53ed2646e206bdeac9826b->leave($__internal_070165fb686054ff395ee16978d88600409b33d51b53ed2646e206bdeac9826b_prof);

        
        $__internal_46ae54187aa1ba9ce5f2abd4600107952520057516ec71de2c0c36aa72db0600->leave($__internal_46ae54187aa1ba9ce5f2abd4600107952520057516ec71de2c0c36aa72db0600_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4893cf97c4d03ff0873d19930ba8ffc673fbe346965c6be7af68298684ae2e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4893cf97c4d03ff0873d19930ba8ffc673fbe346965c6be7af68298684ae2e26->enter($__internal_4893cf97c4d03ff0873d19930ba8ffc673fbe346965c6be7af68298684ae2e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_981dc4ed5a7816b4305ca56e80945016db3e26d98c7b44bca5d34eeec0b31343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981dc4ed5a7816b4305ca56e80945016db3e26d98c7b44bca5d34eeec0b31343->enter($__internal_981dc4ed5a7816b4305ca56e80945016db3e26d98c7b44bca5d34eeec0b31343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["abonnements"] ?? $this->getContext($context, "abonnements")));
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
        
        $__internal_981dc4ed5a7816b4305ca56e80945016db3e26d98c7b44bca5d34eeec0b31343->leave($__internal_981dc4ed5a7816b4305ca56e80945016db3e26d98c7b44bca5d34eeec0b31343_prof);

        
        $__internal_4893cf97c4d03ff0873d19930ba8ffc673fbe346965c6be7af68298684ae2e26->leave($__internal_4893cf97c4d03ff0873d19930ba8ffc673fbe346965c6be7af68298684ae2e26_prof);

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
", "BackBundle:abonnements:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/index.html.twig");
    }
}

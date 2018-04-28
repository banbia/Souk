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
        $__internal_2fed7e0deaef601c7a0d3c2ce56cdf0c9504c4ec6dda9efd1e36df260633d6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fed7e0deaef601c7a0d3c2ce56cdf0c9504c4ec6dda9efd1e36df260633d6d3->enter($__internal_2fed7e0deaef601c7a0d3c2ce56cdf0c9504c4ec6dda9efd1e36df260633d6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $__internal_d348cd6d8cd16ab2f267958f21f4b3dd23b1daebcb45f641b1f10258e3708b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d348cd6d8cd16ab2f267958f21f4b3dd23b1daebcb45f641b1f10258e3708b22->enter($__internal_d348cd6d8cd16ab2f267958f21f4b3dd23b1daebcb45f641b1f10258e3708b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fed7e0deaef601c7a0d3c2ce56cdf0c9504c4ec6dda9efd1e36df260633d6d3->leave($__internal_2fed7e0deaef601c7a0d3c2ce56cdf0c9504c4ec6dda9efd1e36df260633d6d3_prof);

        
        $__internal_d348cd6d8cd16ab2f267958f21f4b3dd23b1daebcb45f641b1f10258e3708b22->leave($__internal_d348cd6d8cd16ab2f267958f21f4b3dd23b1daebcb45f641b1f10258e3708b22_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb3e767510a33888ebd0e2ceca4bf9eadff4eaadbffe78df754ff1748f752b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb3e767510a33888ebd0e2ceca4bf9eadff4eaadbffe78df754ff1748f752b4->enter($__internal_6cb3e767510a33888ebd0e2ceca4bf9eadff4eaadbffe78df754ff1748f752b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4ec7080a3824d66e73e039d67bbfc0fdc4c66f6c897985ba59ecb389b406793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ec7080a3824d66e73e039d67bbfc0fdc4c66f6c897985ba59ecb389b406793->enter($__internal_d4ec7080a3824d66e73e039d67bbfc0fdc4c66f6c897985ba59ecb389b406793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Nombre de mois </th>
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

                    <a class =\"btn btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_show", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file-text-o\"></i> Show</a>
                    <a class =\"btn btn-default\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> Edit</a>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>


";
        
        $__internal_d4ec7080a3824d66e73e039d67bbfc0fdc4c66f6c897985ba59ecb389b406793->leave($__internal_d4ec7080a3824d66e73e039d67bbfc0fdc4c66f6c897985ba59ecb389b406793_prof);

        
        $__internal_6cb3e767510a33888ebd0e2ceca4bf9eadff4eaadbffe78df754ff1748f752b4->leave($__internal_6cb3e767510a33888ebd0e2ceca4bf9eadff4eaadbffe78df754ff1748f752b4_prof);

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
        return array (  108 => 32,  98 => 28,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  69 => 19,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Nombre de mois </th>
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

                    <a class =\"btn btn-default\" href=\"{{ path('abonnements_show', { 'id': abonnement.id }) }}\"><i class=\"fa fa-file-text-o\"></i> Show</a>
                    <a class =\"btn btn-default\" href=\"{{ path('abonnements_edit', { 'id': abonnement.id }) }}\"><i class=\"fa fa-edit\"></i> Edit</a>

            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "BackBundle:abonnements:index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/index.html.twig");
    }
}

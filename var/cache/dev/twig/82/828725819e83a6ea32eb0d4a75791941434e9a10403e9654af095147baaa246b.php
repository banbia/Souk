<?php

/* FrontBundle:commandes:show.html.twig */
class __TwigTemplate_ca8aa2f3216d6a525904f71941ead8a803b87d50d5545ffecf3e01748a6fecf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:show.html.twig", 1);
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
        $__internal_0d923d72b8305caaa59334f0efd26e7f4019f8c124c02a1baa1466a1183315f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d923d72b8305caaa59334f0efd26e7f4019f8c124c02a1baa1466a1183315f4->enter($__internal_0d923d72b8305caaa59334f0efd26e7f4019f8c124c02a1baa1466a1183315f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:show.html.twig"));

        $__internal_ed369bd414dd39eb57321ffd707f54a3c8a1b5d35c1cfea0f06da64b687d9670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed369bd414dd39eb57321ffd707f54a3c8a1b5d35c1cfea0f06da64b687d9670->enter($__internal_ed369bd414dd39eb57321ffd707f54a3c8a1b5d35c1cfea0f06da64b687d9670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d923d72b8305caaa59334f0efd26e7f4019f8c124c02a1baa1466a1183315f4->leave($__internal_0d923d72b8305caaa59334f0efd26e7f4019f8c124c02a1baa1466a1183315f4_prof);

        
        $__internal_ed369bd414dd39eb57321ffd707f54a3c8a1b5d35c1cfea0f06da64b687d9670->leave($__internal_ed369bd414dd39eb57321ffd707f54a3c8a1b5d35c1cfea0f06da64b687d9670_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aec46bd63b8670dcf67efd161ebddae84db8bee5799c885677aa45c72cda053a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec46bd63b8670dcf67efd161ebddae84db8bee5799c885677aa45c72cda053a->enter($__internal_aec46bd63b8670dcf67efd161ebddae84db8bee5799c885677aa45c72cda053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04df88360240e1581d2573edd43c0fbbd59f0d8dca7faf86213f95225b75eebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04df88360240e1581d2573edd43c0fbbd59f0d8dca7faf86213f95225b75eebe->enter($__internal_04df88360240e1581d2573edd43c0fbbd59f0d8dca7faf86213f95225b75eebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commande</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecom</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateCom", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateCom", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "quantite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_04df88360240e1581d2573edd43c0fbbd59f0d8dca7faf86213f95225b75eebe->leave($__internal_04df88360240e1581d2573edd43c0fbbd59f0d8dca7faf86213f95225b75eebe_prof);

        
        $__internal_aec46bd63b8670dcf67efd161ebddae84db8bee5799c885677aa45c72cda053a->leave($__internal_aec46bd63b8670dcf67efd161ebddae84db8bee5799c885677aa45c72cda053a_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Commande</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ commande.id }}</td>
            </tr>
            <tr>
                <th>Datecom</th>
                <td>{% if commande.dateCom %}{{ commande.dateCom|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>{{ commande.quantite }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ commande.etat }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('commandes_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('commandes_edit', { 'id': commande.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "FrontBundle:commandes:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/show.html.twig");
    }
}

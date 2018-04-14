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
        $__internal_a1cd4d9e15c1cd9f6e009914183d21ebc50c601059aa27061cf2a18542af1ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cd4d9e15c1cd9f6e009914183d21ebc50c601059aa27061cf2a18542af1ade->enter($__internal_a1cd4d9e15c1cd9f6e009914183d21ebc50c601059aa27061cf2a18542af1ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:show.html.twig"));

        $__internal_dcee54f3867a75b5c175d6a6eb4c669ff871db6b8413fb8a53fb773be6a4f219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcee54f3867a75b5c175d6a6eb4c669ff871db6b8413fb8a53fb773be6a4f219->enter($__internal_dcee54f3867a75b5c175d6a6eb4c669ff871db6b8413fb8a53fb773be6a4f219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1cd4d9e15c1cd9f6e009914183d21ebc50c601059aa27061cf2a18542af1ade->leave($__internal_a1cd4d9e15c1cd9f6e009914183d21ebc50c601059aa27061cf2a18542af1ade_prof);

        
        $__internal_dcee54f3867a75b5c175d6a6eb4c669ff871db6b8413fb8a53fb773be6a4f219->leave($__internal_dcee54f3867a75b5c175d6a6eb4c669ff871db6b8413fb8a53fb773be6a4f219_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4547e10b5886816536f06924b18ad0bee42bff829310b821087566a99cecb76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4547e10b5886816536f06924b18ad0bee42bff829310b821087566a99cecb76b->enter($__internal_4547e10b5886816536f06924b18ad0bee42bff829310b821087566a99cecb76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_277e3f45bec7270f26ea0a86684f3f47a78a95a94ac5877a497c3440420af3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277e3f45bec7270f26ea0a86684f3f47a78a95a94ac5877a497c3440420af3e0->enter($__internal_277e3f45bec7270f26ea0a86684f3f47a78a95a94ac5877a497c3440420af3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_277e3f45bec7270f26ea0a86684f3f47a78a95a94ac5877a497c3440420af3e0->leave($__internal_277e3f45bec7270f26ea0a86684f3f47a78a95a94ac5877a497c3440420af3e0_prof);

        
        $__internal_4547e10b5886816536f06924b18ad0bee42bff829310b821087566a99cecb76b->leave($__internal_4547e10b5886816536f06924b18ad0bee42bff829310b821087566a99cecb76b_prof);

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

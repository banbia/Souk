<?php

/* BackBundle:abonnements:demandes.html.twig */
class __TwigTemplate_f07bfaea6c708150006d8a657f43938b0ab704e63a09453f381af47482a80650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:demandes.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Liste des demandes d'abonnements</h1>

    <a class=\"btn btn-warning pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Liste abonnements</a>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Abonnement</th>
            <th>Nombre de mois</th>
            <th>Commercial</th>
            <th>Date</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["d"], "abonnement", array()), "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["d"], "abonnement", array()), "nbMois", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["d"], "commercial", array()), "titreCommercial", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "dateAb", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_valider", array("id" => $this->getAttribute($context["d"], "id", array()), "nb" => $this->getAttribute($this->getAttribute($context["d"], "abonnement", array()), "nbMois", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-check\">   </i>Valider</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:demandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  76 => 27,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  56 => 21,  52 => 20,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:abonnements:demandes.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/demandes.html.twig");
    }
}

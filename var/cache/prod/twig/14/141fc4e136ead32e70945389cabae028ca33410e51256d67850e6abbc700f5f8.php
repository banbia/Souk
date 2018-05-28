<?php

/* BackBundle:abonnements:demandes.html.twig */
class __TwigTemplate_d873e6424321891a27437e6fa874f5496d695dd2a8a82dea92bcbe01bf58e087 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_index");
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
        $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "abonnement", array()), "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "abonnement", array()), "nbMois", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "commercial", array()), "titreCommercial", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "dateAb", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_valider", array("id" => twig_get_attribute($this->env, $this->source, $context["d"], "id", array()), "nb" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "abonnement", array()), "nbMois", array()))), "html", null, true);
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
        return array (  90 => 31,  80 => 27,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  60 => 21,  56 => 20,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:abonnements:demandes.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/demandes.html.twig");
    }
}

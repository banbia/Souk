<?php

/* BackBundle:Signals:show.html.twig */
class __TwigTemplate_2464a6486f1d0ae530b7b712e7b8b063a7ef5accd5fd478c229d0c4c8da07966 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:Signals:show.html.twig", 1);
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
        echo "    <h2>La liste des signaux</h2>
    <br/>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ev", array("evennement" => twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger pull-right\"> <i class=\"fa fa-trash-o\"></i>  Supprimer</a>
    <br/>
    <br/>

    <table  class=\"col-md-9 table table-condensed\"  >
        <tr>
            <td><b>Client</b></td>
            <td><b>Contenu</b> </td>
            <td><b>Date du signale</b></td>
        </tr>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateSg", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "BackBundle:Signals:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  68 => 21,  64 => 20,  60 => 19,  57 => 18,  53 => 17,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:Signals:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/Signals/show.html.twig");
    }
}

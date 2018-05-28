<?php

/* BackBundle:Signals:consulter.html.twig */
class __TwigTemplate_964ff7c84baa2fb20c7287b0a7c23326e4feff87d801eda4e80ecde1d61c8cb5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:Signals:consulter.html.twig", 1);
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
        echo "<h2> La liste des signaux de l'annonce</h2>
<br/>
   <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_anc", array("annonce" => twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", array()))), "html", null, true);
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
            echo "    <tr>

        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</td>
        <td> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "contenu", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateSg", array()), "D-M-Y"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "BackBundle:Signals:consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  69 => 22,  65 => 21,  61 => 20,  57 => 18,  53 => 17,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:Signals:consulter.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/Signals/consulter.html.twig");
    }
}

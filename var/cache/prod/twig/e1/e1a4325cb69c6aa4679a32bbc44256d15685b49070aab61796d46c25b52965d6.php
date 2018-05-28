<?php

/* BackBundle:signalsAnc:listeSignalsAnc.html.twig */
class __TwigTemplate_5128c42c6cd164508d2e4d2e8db3826f71c8dc30ef12a77ec484e5aed2a8405b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:signalsAnc:listeSignalsAnc.html.twig", 1);
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
        echo "
    ";
        // line 38
        echo "
    <h2> La liste des signaux</h2>
    <br/>

    <table  class=\"col-md-9 table table-condensed\"  >
        <tr>

            <td><b>Client</b></td>
            <td><b>Contenu</b> </td>
            <td><b>Date du signale</b></td>
            <td><b>Action</b></td>
        </tr>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 51
            echo "
        <tr>

            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "contenu", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateSg", array()), "D-M-Y"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "BackBundle:signalsAnc:listeSignalsAnc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 59,  69 => 56,  65 => 55,  61 => 54,  56 => 51,  52 => 50,  38 => 38,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:signalsAnc:listeSignalsAnc.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/signalsAnc/listeSignalsAnc.html.twig");
    }
}

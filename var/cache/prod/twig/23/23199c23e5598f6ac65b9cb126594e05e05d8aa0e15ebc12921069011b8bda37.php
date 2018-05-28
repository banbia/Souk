<?php

/* BackBundle:signalsEvs:listeSignalsEvs.html.twig */
class __TwigTemplate_27a943aa8d4ee38fb3099a9f5c1ef969630f82d1c4a5ea6da371460822ec88c6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:signalsEvs:listeSignalsEvs.html.twig", 1);
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
    <h2>La liste des signaux</h2>
    <br/>
    <table  class=\"col-md-9 table table-condensed\">
        <tr>

            <td><b>Client</b></td>
            <td><b>Contenu</b> </td>
            <td><b>Date du signale</b></td>
            <td><b>Action</b></td>
        </tr>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 17
            echo "
        <tr>
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateSg", array()), "D-M-Y"), "html", null, true);
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
        return "BackBundle:signalsEvs:listeSignalsEvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  65 => 21,  61 => 20,  57 => 19,  53 => 17,  49 => 16,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:signalsEvs:listeSignalsEvs.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/signalsEvs/listeSignalsEvs.html.twig");
    }
}

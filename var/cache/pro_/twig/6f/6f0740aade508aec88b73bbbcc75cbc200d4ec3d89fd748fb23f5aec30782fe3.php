<?php

/* @Back/signalsEvs/listeSignalsEvs.html.twig */
class __TwigTemplate_dc1b5936ed6a159f3474b15a495da2c55d484617b0b70d65eae69b3708233791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "@Back/signalsEvs/listeSignalsEvs.html.twig", 1);
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
        echo "   ";
        // line 37
        echo "    <h2>La liste des signaux</h2>
    <br/>
    <table  class=\"col-md-9 table table-condensed\"  >
        <tr>

            <td><b>Client</b></td>
            <td><b>Contenu</b> </td>
            <td><b>Date du signale</b></td>
            <td><b>Action</b></td>
        </tr>

    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 49
            echo "
        <tr>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "contenu", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateSg", array()), "D-M-Y"), "html", null, true);
            echo "</td>
            <td></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </table>

";
    }

    public function getTemplateName()
    {
        return "@Back/signalsEvs/listeSignalsEvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 57,  62 => 53,  58 => 52,  54 => 51,  50 => 49,  46 => 48,  33 => 37,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Back/signalsEvs/listeSignalsEvs.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle\\Resources\\views\\signalsEvs\\listeSignalsEvs.html.twig");
    }
}

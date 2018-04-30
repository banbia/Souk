<?php

/* BackBundle:reclamations:index.html.twig */
class __TwigTemplate_5b83113cfaaf7d698223016759423126459dccd400e499839d5c52163dedd5e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:reclamations:index.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <h1> Liste Reclamations</h1>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
            <tr class=\"table-secondary\">
                <th>Contenu</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 15
            echo "            <tr>

                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            if (($this->getAttribute($context["reclamation"], "etat", array()) == 0)) {
                echo " encours
                    ";
            } elseif (($this->getAttribute(            // line 20
$context["reclamation"], "etat", array()) == 1)) {
                echo " accepter
                    ";
            } elseif (($this->getAttribute(            // line 21
$context["reclamation"], "etat", array()) == 2)) {
                echo "  rejeter
                    ";
            }
            // line 23
            echo "                </td>
                <td>

                            <a class=\"btn btn-default\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i>  Marquer comme lue</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "BackBundle:reclamations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  80 => 26,  75 => 23,  70 => 21,  66 => 20,  62 => 19,  56 => 18,  52 => 17,  48 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:reclamations:index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/reclamations/index.html.twig");
    }
}

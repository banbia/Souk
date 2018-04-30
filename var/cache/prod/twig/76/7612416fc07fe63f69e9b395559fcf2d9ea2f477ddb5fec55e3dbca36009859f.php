<?php

/* BackBundle:reclamations:index.html.twig */
class __TwigTemplate_3e45ed921cb30b8e4827473afd12718be58c0a776295772465670b9c8c4dc097 extends Twig_Template
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
                <th>Commercial</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 16
            echo "            <tr>

                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reclamation"], "commercial", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 22
            if (($this->getAttribute($context["reclamation"], "etat", array()) == 0)) {
                echo " encours
                    ";
            } elseif (($this->getAttribute(            // line 23
$context["reclamation"], "etat", array()) == 1)) {
                echo " acceptée
                    ";
            } elseif (($this->getAttribute(            // line 24
$context["reclamation"], "etat", array()) ==  -1)) {
                echo "  rejetée
                    ";
            }
            // line 26
            echo "                </td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reclamations_accepter", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-check \" ></i></a>
                    <a class=\"btn btn-danger\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reclamations_refuser", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-times\" ></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return array (  100 => 34,  89 => 29,  85 => 28,  81 => 26,  76 => 24,  72 => 23,  68 => 22,  61 => 20,  57 => 19,  53 => 18,  49 => 16,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:reclamations:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/reclamations/index.html.twig");
    }
}

<?php

/* BackBundle:reclamations:index.html.twig */
class __TwigTemplate_ef5f1c607baeab9bcbabf8c7f7cd3edcb82cb646cb9742b6812ac6d15596ffda extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        echo "    <h1> Liste des Reclamations</h1>

    <div class=\"col-md-3 pull-right\">
        <form method=\"POST\"> <input type=\"text\" name=\"etat\"/>
            <button type=\"submit\"  class=\"btn-rechercher \" ><i class=\"fa fa-search\" ></i> </button>
        </form>
    </div>
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 22
            echo "            <tr>

                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "commercial", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", array()) == 0)) {
                echo " encours
                    <td>
                    <a class=\"btn btn-success\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_accepter", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-check \" ></i></a>
                    <a class=\"btn btn-danger\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_refuser", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-times\" ></i></a>

                    </td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["reclamation"], "etat", array()) == 1)) {
                echo " acceptée
                        <td>
                            <a class=\"btn btn-danger\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_refuser", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-times\" ></i></a>

                        </td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["reclamation"], "etat", array()) ==  -1)) {
                echo "  rejetée
                    <td>
                        <a class=\"btn btn-success\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_accepter", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-check \" ></i></a>

                    </td>
                    ";
            }
            // line 45
            echo "                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return array (  125 => 49,  116 => 45,  109 => 41,  104 => 39,  98 => 36,  93 => 34,  87 => 31,  83 => 30,  78 => 28,  71 => 26,  67 => 25,  63 => 24,  59 => 22,  55 => 21,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:reclamations:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/reclamations/index.html.twig");
    }
}

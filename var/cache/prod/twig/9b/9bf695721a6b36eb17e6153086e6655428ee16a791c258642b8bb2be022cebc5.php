<?php

/* FrontBundle:reclamations:index.html.twig */
class __TwigTemplate_6c8d9a16fc9a1fd1dce1b29a59d3f4cde0459a37c3e967de1ba275d939c0b12a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:index.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"row form-controlS\">
    <div class=\"Title\">
     Liste des reclamation
    </div>
    <br>
    <div class=\"col-md-3 pull-right\">
    <form method=\"POST\"> <input type=\"text\" name=\"etat\"/>
        <button type=\"submit\"  class=\"btn-rechercher \" ><i class=\"fa fa-search\" ></i> </button>
    </form>
    </div>
    <div class=\"col-md-12\">
    <a title=\"ajouter une nouvelle reclamation\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations_new");
        echo "\"  class=\"btn btn-success pull-right\"> <i class=\"fa fa-plus\" > </i>  </a>
    </div>
    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr class=\"table-secondary\">
                <th>Description</th>
                <th>Commercial</th>
                <th>Date de reclamation</th>
                <th>Etat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 35
            echo "            <tr>

                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "contenu", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "commercial", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateRec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", array()) == 0)) {
                echo " Encours
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["reclamation"], "etat", array()) == 1)) {
                echo " Accepter
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 42
$context["reclamation"], "etat", array()) ==  -1)) {
                echo "  Rejeter
                    ";
            }
            // line 44
            echo "                </td>
                <td>

                    <a  href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning outline\" >
                        <i class=\"fa fa-edit\"></i> Modifier </a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  119 => 47,  114 => 44,  109 => 42,  105 => 41,  101 => 40,  95 => 39,  91 => 38,  87 => 37,  83 => 35,  79 => 34,  63 => 21,  50 => 10,  47 => 9,  41 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:reclamations:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/reclamations/index.html.twig");
    }
}

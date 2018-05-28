<?php

/* FrontBundle:ComAbonnement:ComAbonnement.html.twig */
class __TwigTemplate_a2033ee3e8be08c342f76d1731cdb4d3a4d67848bb3c70812389f4abd196e069 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:ComAbonnement:ComAbonnement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"text-warning\"> Mes Abonnements </h1>

  ";
        // line 9
        echo "    <button id=\"acheter\"><i class=\"fa fa-dollar btn-sm\"></i> Acheter </button>
    <div class=\"col-md-12\" id=\"abs\">
        <table class=\"table table-condensed\">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Nombre de mois </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ab"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "prix", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ab"], "nbMois", array()), "html", null, true);
            echo " </td>
                        <td><a href=\"\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-credit-card\"></i> Demander </a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
        </table>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>id</th>
            <th>Abonnement</th>
            <th>Date de l'Abonnement</th>
            <th>Etat</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["histoabo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hist"]) {
            // line 45
            echo "            <tr>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hist"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hist"], "abonnement", array()), "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["hist"], "dateAb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hist"], "dateAb", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["hist"], "etat", array()) == 0)) {
                echo " Valide
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
$context["hist"], "etat", array()) == 1)) {
                echo " Expiré
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["hist"], "etat", array()) ==  -1)) {
                echo " En attente de validation
                    ";
            }
            // line 53
            echo "                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_com_export");
        echo "\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-arrow-alt-circle-down\"></i> Exporter votre historiques </a>
";
    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        // line 63
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#abs\").hide();
            \$(\"#acheter\").click(function(){
                \$(\"#abs\").toggle(1000);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:ComAbonnement:ComAbonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 63,  153 => 62,  147 => 60,  142 => 57,  133 => 53,  128 => 51,  124 => 50,  120 => 49,  114 => 48,  110 => 47,  106 => 46,  103 => 45,  99 => 44,  84 => 31,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  59 => 23,  55 => 22,  40 => 9,  36 => 6,  33 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:ComAbonnement:ComAbonnement.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/ComAbonnement/ComAbonnement.html.twig");
    }
}

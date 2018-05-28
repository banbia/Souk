<?php

/* FrontBundle:reclamations:show.html.twig */
class __TwigTemplate_3513cff54c188427d660b499f17ed60859aa9ba9d801f348b21e241ff3a8b946 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:show.html.twig", 1);
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

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "   <div class=\"row form-controlS\">

   <div class=\"col-md-12\" style=\"text-align:center \"  >
    <h1>Fiche reclamation  </h1>
       <p class=\"pShow\" >Bonjour , merci de nous contacter et votre reclamation sera traiter dans les plus brief délais  .</p>
   </div>
      <div class=\"col-md-6\">

          <img src='";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/imgreclamation1.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/>

      </div>


     <div class=\"col-md-6\" >
        <table class=\"table table-striped\">
        <tbody class=\"thead-light\">
            <tr table-secondary>
                <th>Contenu de reclamation </th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reclamation"] ?? null), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commercial</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reclamation"] ?? null), "commercial", array()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de reclamation </th>
                <td>";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["reclamation"] ?? null), "dateRec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reclamation"] ?? null), "dateRec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["reclamation"] ?? null), "etat", array()) == 0)) {
            echo " encours
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 37
($context["reclamation"] ?? null), "etat", array()) == 1)) {
            echo " accepter
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 38
($context["reclamation"] ?? null), "etat", array()) == 2)) {
            echo "  rejeter
                    ";
        }
        // line 40
        echo "                </td>
            </tr>
        </tbody>
    </table>

            <a class=\"btn btn-default\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations_index");
        echo "\">  <i class=\"fa fa-arrow-left\"></i> Retourner à la liste </a>

            <a class=\"btn btn-warning outline\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["reclamation"] ?? null), "id", array()))), "html", null, true);
        echo "\"> <i class=\"fa fa-edit\"></i> Modifier </a>
    </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  112 => 45,  105 => 40,  100 => 38,  96 => 37,  92 => 36,  83 => 32,  76 => 28,  69 => 24,  56 => 14,  46 => 6,  43 => 5,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:reclamations:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/reclamations/show.html.twig");
    }
}

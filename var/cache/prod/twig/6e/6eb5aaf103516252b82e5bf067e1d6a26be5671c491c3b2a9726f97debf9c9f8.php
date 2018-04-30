<?php

/* FrontBundle:reclamations:show.html.twig */
class __TwigTemplate_898e829d9d3183b1e0250a35a958de7c071b9c28f27dc54cbbb5f13e18a9f13f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/imgreclamation1.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/>

      </div>


     <div class=\"col-md-6\" >
        <table class=\"table table-striped\">
        <tbody class=\"thead-light\">
            <tr table-secondary>
                <th>Contenu de reclamation </th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reclamation"] ?? null), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commercial</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reclamation"] ?? null), "commercial", array()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de reclamation </th>
                <td>";
        // line 32
        if ($this->getAttribute(($context["reclamation"] ?? null), "dateRec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reclamation"] ?? null), "dateRec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 36
        if (($this->getAttribute(($context["reclamation"] ?? null), "etat", array()) == 0)) {
            echo " encours
                    ";
        } elseif (($this->getAttribute(        // line 37
($context["reclamation"] ?? null), "etat", array()) == 1)) {
            echo " accepter
                    ";
        } elseif (($this->getAttribute(        // line 38
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\">  <i class=\"fa fa-arrow-left\"></i> Back to the list </a>

            <a class=\"btn btn-default\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute(($context["reclamation"] ?? null), "id", array()))), "html", null, true);
        echo "\"> <i class=\"fa fa-edit\"></i> Edit</a>
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
        return array (  113 => 47,  108 => 45,  101 => 40,  96 => 38,  92 => 37,  88 => 36,  79 => 32,  72 => 28,  65 => 24,  52 => 14,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:reclamations:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/reclamations/show.html.twig");
    }
}

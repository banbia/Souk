<?php

/* FrontBundle:commandes:pdf_commande.html.twig */
class __TwigTemplate_8c49f7adde7d522d3f03e7443cf10a535b9b853a3d124dd1d2ff8ec2e2d6a565 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('style', $context, $blocks);
        // line 7
        echo "<div class=\"head-pdf\">
    <div class=\"row form-controlS\">
        <div class=\"logo\">
            <img width=\"200\" height=\"100\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["pathToWeb"] ?? null), "html", null, true);
        echo "/bundles/front/images/logo.png\"/>

        </div>
        <div class=\"col-md-12\" style=\"text-align:center \"  >

            <h1>Votre Commande</h1>
            <p>looooooooooooooool</p>
        </div>



        <div class=\"col-md-12\" >
    <table class=\"table table-striped\">
        <tbody class=\"thead-light\">
        <tr>
        <tr>
            <th>Datecom</th>
            <td>";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "dateCom", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "dateCom", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Quantite</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "quantite", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titre Annonce</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "annonce", array()), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Categorie Annonce</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "etat", array()) == 0)) {
            echo " En attente ";
        } else {
            echo " Confirmée";
        }
        echo "</td>
        </tr>
        </tbody>
    </table>
    </div>
    </div>

</div>";
    }

    // line 1
    public function block_style($context, array $blocks = array())
    {
        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<style>

</style>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:pdf_commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 2,  97 => 1,  81 => 43,  74 => 39,  67 => 35,  60 => 31,  51 => 27,  31 => 10,  26 => 7,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:commandes:pdf_commande.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/pdf_commande.html.twig");
    }
}

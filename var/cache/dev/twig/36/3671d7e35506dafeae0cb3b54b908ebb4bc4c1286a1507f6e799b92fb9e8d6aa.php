<?php

/* FrontBundle:commandes:pdf_commande.html.twig */
class __TwigTemplate_2f54a2056fc7d6be7312254dd20e2f7b937b2a187265a85edf3ac984b8c1b43d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:pdf_commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:pdf_commande.html.twig"));

        // line 1
        $this->displayBlock('style', $context, $blocks);
        // line 7
        echo "<div class=\"head-pdf\">
    <div class=\"row form-controlS\">
        <div class=\"logo\">
            <img width=\"200\" height=\"100\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["pathToWeb"]) || array_key_exists("pathToWeb", $context) ? $context["pathToWeb"] : (function () { throw new Twig_Error_Runtime('Variable "pathToWeb" does not exist.', 10, $this->source); })()), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 27, $this->source); })()), "dateCom", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 27, $this->source); })()), "dateCom", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Quantite</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 31, $this->source); })()), "quantite", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titre Annonce</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 35, $this->source); })()), "annonce", array()), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Categorie Annonce</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 39, $this->source); })()), "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 43, $this->source); })()), "etat", array()) == 0)) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<style>

</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  118 => 2,  109 => 1,  87 => 43,  80 => 39,  73 => 35,  66 => 31,  57 => 27,  37 => 10,  32 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block style %}
    <link href=\"{{ asset('bundles/front/css/soumaya_style.css') }}\" rel='stylesheet' type='text/css' />
<style>

</style>
{% endblock style %}
<div class=\"head-pdf\">
    <div class=\"row form-controlS\">
        <div class=\"logo\">
            <img width=\"200\" height=\"100\" src=\"{{ pathToWeb }}/bundles/front/images/logo.png\"/>

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
            <td>{% if commande.dateCom %}{{ commande.dateCom|date('Y-m-d') }}{% endif %}</td>
        </tr>
        <tr>
            <th>Quantite</th>
            <td>{{ commande.quantite }}</td>
        </tr>
        <tr>
            <th>Titre Annonce</th>
            <td>{{ commande.annonce.titre }}</td>
        </tr>
        <tr>
            <th>Categorie Annonce</th>
            <td>{{ commande.annonce.categorie.designation }}</td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>{% if commande.etat == 0 %} En attente {%  else %} Confirmée{% endif %}</td>
        </tr>
        </tbody>
    </table>
    </div>
    </div>

</div>", "FrontBundle:commandes:pdf_commande.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/pdf_commande.html.twig");
    }
}

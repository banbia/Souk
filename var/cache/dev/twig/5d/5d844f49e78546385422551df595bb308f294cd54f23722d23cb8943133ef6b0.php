<?php

/* @Front/commandes/pdf_commande.html.twig */
class __TwigTemplate_74c13e34a1925c491e3275c67b0b9319811c8dbeb0b29001cc47fa1097f0a5e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/commandes/pdf_commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/commandes/pdf_commande.html.twig"));

        // line 1
        echo "<!doctype html>
<html>

<head>
    <style>
        table, td, th {
            border: 1px solid #d0e9c6;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: auto;
        }

        th, td {
            padding: 15px;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>

<title>Commande</title>
<meta charset=\"utf-8\"/>
</head>

<body>

<div class=\"head-pdf\">
    <div class=\"row form-controlS\">
        <div class=\"logo\">
            <img width=\"200\" height=\"100\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["pathToLogo"] ?? $this->getContext($context, "pathToLogo"))), "html", null, true);
        echo "\"/>
        </div>

        <div class=\"col-md-12\" style=\"text-align:center \" >
            <h1>Le reçu de la commande </h1>
            <h3>Merci de choisir notre site pour passer votre commande </h3>
        </div>

    <div class=\"col-md-12\" >
        <table>

        <tbody>
        <tr>
        <th >Datecom</th>
        <td>";
        // line 46
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateCom", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateCom", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
        </tr>
    <tr>
        <th>Quantite</th>
        <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "quantite", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Titre Annonce</th>
        <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "annonce", array()), "titre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Categorie Annonce</th>
        <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Etat</th>
        <td>";
        // line 62
        if (($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "etat", array()) == 0)) {
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
</div>

</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Front/commandes/pdf_commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 62,  98 => 58,  91 => 54,  84 => 50,  75 => 46,  58 => 32,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>

<head>
    <style>
        table, td, th {
            border: 1px solid #d0e9c6;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: auto;
        }

        th, td {
            padding: 15px;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>

<title>Commande</title>
<meta charset=\"utf-8\"/>
</head>

<body>

<div class=\"head-pdf\">
    <div class=\"row form-controlS\">
        <div class=\"logo\">
            <img width=\"200\" height=\"100\" src=\"{{ asset(pathToLogo) }}\"/>
        </div>

        <div class=\"col-md-12\" style=\"text-align:center \" >
            <h1>Le reçu de la commande </h1>
            <h3>Merci de choisir notre site pour passer votre commande </h3>
        </div>

    <div class=\"col-md-12\" >
        <table>

        <tbody>
        <tr>
        <th >Datecom</th>
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
</div>

</body>
</html>


", "@Front/commandes/pdf_commande.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle\\Resources\\views\\commandes\\pdf_commande.html.twig");
    }
}

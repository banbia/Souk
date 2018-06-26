<?php

/* FrontBundle:commandes:pdf_commande.html.twig */
class __TwigTemplate_fe13532e0607de7acb75894d3711f1d5f96bed553a705b5850b13ffb690b2687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:pdf_commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:pdf_commande.html.twig"));

        // line 1
        $this->displayBlock('style', $context, $blocks);
        // line 7
        echo "<div class=\"head-pdf\">
    <div class=\"row form-controlS\">
        <div class=\"logo\">
            <img width=\"200\" height=\"100\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["pathToWeb"] ?? $this->getContext($context, "pathToWeb")), "html", null, true);
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
        if ($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateCom", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateCom", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Quantite</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "quantite", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titre Annonce</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "annonce", array()), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Categorie Annonce</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>";
        // line 43
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

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
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
        return array (  114 => 2,  105 => 1,  83 => 43,  76 => 39,  69 => 35,  62 => 31,  53 => 27,  33 => 10,  28 => 7,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

<?php

/* FrontBundle:commandes:pdf_commande.html.twig */
class __TwigTemplate_46c941a5d0c0ae1c51375204397ed2112e5aa87dbe91123ab09712ef21bbdc92 extends Twig_Template
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
        // line 4
        echo "
<div class=\"row form-controlS\">

    <div class=\"col-md-12\" style=\"text-align:center \"  >

        <h1>Commande</h1>
        <p>looooooooooooooool</p>
    </div>

    <div class=\"logo\">
        <a href=\"#\"><img width=\"200\" height=\"90\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/logo.png"), "html", null, true);
        echo "\"/></a></a>
    </div>

    <div class=\"col-md-12\" >
<table class=\"table table-striped\">
    <tbody class=\"thead-light\">
    <tr>
    <tr>
        <th>Datecom</th>
        <td>";
        // line 23
        if ($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCom", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCom", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
    </tr>
    <tr>
        <th>Quantite</th>
        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "quantite", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Titre Annonce</th>
        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "annonce", array()), "titre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Categorie Annonce</th>
        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Etat</th>
        <td>";
        // line 39
        if (($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "etat", array()) == 0)) {
            echo " En attente ";
        } else {
            echo " Confirmée";
        }
        echo "</td>
    </tr>
    </tbody>
</table>
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
        return array (  111 => 2,  102 => 1,  82 => 39,  75 => 35,  68 => 31,  61 => 27,  52 => 23,  40 => 14,  28 => 4,  26 => 1,);
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
{% endblock style %}

<div class=\"row form-controlS\">

    <div class=\"col-md-12\" style=\"text-align:center \"  >

        <h1>Commande</h1>
        <p>looooooooooooooool</p>
    </div>

    <div class=\"logo\">
        <a href=\"#\"><img width=\"200\" height=\"90\" src=\"{{ asset('bundles/front/images/logo.png') }}\"/></a></a>
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
</div>", "FrontBundle:commandes:pdf_commande.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle\\Resources\\views\\commandes\\pdf_commande.html.twig");
    }
}

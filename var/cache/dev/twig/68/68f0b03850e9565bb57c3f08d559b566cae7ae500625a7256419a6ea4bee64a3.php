<?php

/* FrontBundle:reclamations:show.html.twig */
class __TwigTemplate_6818e69263e5c17537455ea04b474ce912ad7d95b14c3c6afa329c81f648fda4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 24, $this->source); })()), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commercial</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 28, $this->source); })()), "commercial", array()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de reclamation </th>
                <td>";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 32, $this->source); })()), "dateRec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 32, $this->source); })()), "dateRec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 36, $this->source); })()), "etat", array()) == 0)) {
            echo " encours
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 37, $this->source); })()), "etat", array()) == 1)) {
            echo " accepter
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 38, $this->source); })()), "etat", array()) == 2)) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamations_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new Twig_Error_Runtime('Variable "reclamation" does not exist.', 47, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"> <i class=\"fa fa-edit\"></i> Modifier </a>
    </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  147 => 47,  142 => 45,  135 => 40,  130 => 38,  126 => 37,  122 => 36,  113 => 32,  106 => 28,  99 => 24,  86 => 14,  76 => 6,  67 => 5,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{% block style %}
    <link href=\"{{ asset('bundles/front/css/soumaya_style.css') }}\" rel='stylesheet' type='text/css' />
{% endblock style %}
{% block body %}
   <div class=\"row form-controlS\">

   <div class=\"col-md-12\" style=\"text-align:center \"  >
    <h1>Fiche reclamation  </h1>
       <p class=\"pShow\" >Bonjour , merci de nous contacter et votre reclamation sera traiter dans les plus brief délais  .</p>
   </div>
      <div class=\"col-md-6\">

          <img src='{{ asset('bundles/front/images/imgreclamation1.png') }}' class=\"img-responsive\" alt=\"\"/>

      </div>


     <div class=\"col-md-6\" >
        <table class=\"table table-striped\">
        <tbody class=\"thead-light\">
            <tr table-secondary>
                <th>Contenu de reclamation </th>
                <td>{{ reclamation.contenu }}</td>
            </tr>
            <tr>
                <th>Commercial</th>
                <td>{{ reclamation.commercial.nom }}</td>
            </tr>
            <tr>
                <th>Date de reclamation </th>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{% if reclamation.etat == 0 %} encours
                    {% elseif reclamation.etat == 1 %} accepter
                    {% elseif reclamation.etat == 2 %}  rejeter
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

            <a class=\"btn btn-default\" href=\"{{ path('reclamations_index') }}\">  <i class=\"fa fa-arrow-left\"></i> Retourner à la liste </a>

            <a class=\"btn btn-warning outline\" href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\"> <i class=\"fa fa-edit\"></i> Modifier </a>
    </div>
    </div>
</div>
{% endblock %}
", "FrontBundle:reclamations:show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/show.html.twig");
    }
}

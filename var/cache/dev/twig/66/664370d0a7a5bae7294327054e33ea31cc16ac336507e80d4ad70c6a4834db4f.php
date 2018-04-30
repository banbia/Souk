<?php

/* FrontBundle:reclamations:show.html.twig */
class __TwigTemplate_cd2a338e9a99065d2f14df98b7a019eccd61a48527fe43f4c38d8a1737d87b06 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/soumaya_style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commercial</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "commercial", array()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de reclamation </th>
                <td>";
        // line 32
        if ($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "dateRec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "dateRec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 36
        if (($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "etat", array()) == 0)) {
            echo " encours
                    ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "etat", array()) == 1)) {
            echo " accepter
                    ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "etat", array()) == 2)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()))), "html", null, true);
        echo "\"> <i class=\"fa fa-edit\"></i> Edit</a>
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
        return array (  143 => 47,  138 => 45,  131 => 40,  126 => 38,  122 => 37,  118 => 36,  109 => 32,  102 => 28,  95 => 24,  82 => 14,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

            <a class=\"btn btn-default\" href=\"{{ path('reclamations_index') }}\">  <i class=\"fa fa-arrow-left\"></i> Back to the list </a>

            <a class=\"btn btn-default\" href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\"> <i class=\"fa fa-edit\"></i> Edit</a>
    </div>
    </div>
</div>
{% endblock %}
", "FrontBundle:reclamations:show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/show.html.twig");
    }
}

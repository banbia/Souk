<?php

/* FrontBundle:annonces:indexCommercial.html.twig */
class __TwigTemplate_5dd758a592075afff0ab87ce7e8efed350799c02c1e734b6abdf6d29aeac3bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:indexCommercial.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:indexCommercial.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:indexCommercial.html.twig"));

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
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

   ";
        // line 11
        echo "
<ol class=\"breadcrumb\">
    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_annonces_index");
        echo "\">Annonce</a></li>

    <li>Liste des annonces</li>


</ol>
<div class=\"wizard-container\">

    <div class=\"card wizard-card\" data-color=\"orange\" id=\"wizardProfile\">

       ";
        // line 23
        if ((isset($context["abonnement"]) ? $context["abonnement"] : $this->getContext($context, "abonnement"))) {
            // line 24
            echo "        <a class=\"btn btn-success pull-right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_new");
            echo "\">Nouvelle Annonce</a>
        <br>



                    <!-- /.box-header -->

                        <table id=\"example2\" class=\"table table table-striped\">
                            <thead>
                            <tr>
                                <th>Idarticle</th>
                                <th>Titre</th>

                                <th>Prix</th>
                                <th>Date</th>
                                <th>Disponibilite</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 45
                echo "                                <tr>
                                    <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
                echo "</a></td>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
                echo "</td>

                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
                echo " <span>Dinars</span></td>
                                    <td>";
                // line 50
                if ($this->getAttribute($context["annonce"], "dateCreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                                   <td> ";
                // line 51
                if ($this->getAttribute($context["annonce"], "disponible", array())) {
                    echo "En stock";
                } else {
                    echo "Repture  de stock";
                }
                echo "</td>
                                    <td>

                                        <a class=\"btn btn-xs btn-info\"   href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-info\"></i></a>

                                        <a class=\"btn btn-xs btn-success\"  href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
                                        <a class=\"btn btn-xs btn-danger\"  href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_delete", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a>

                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
                            </tbody>
                        </table>
       ";
        } else {
            // line 65
            echo "<Panel class=\"panel-warning\"><i class=\"fa fa-warning\"></i> <spam>vous devez activer votre abonnement </spam></Panel>  ";
        }
        // line 66
        echo "</div></div>
    </div></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:indexCommercial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 66,  186 => 65,  180 => 62,  169 => 57,  165 => 56,  160 => 54,  150 => 51,  144 => 50,  140 => 49,  135 => 47,  129 => 46,  126 => 45,  122 => 44,  98 => 24,  96 => 23,  83 => 13,  79 => 11,  75 => 8,  66 => 7,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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

    <link href=\"{{ asset('bundles/front/css/style_haifa_daoud.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block body %}


   {# dev-haifa#}

<ol class=\"breadcrumb\">
    <li><a href=\"{{ path('client_annonces_index') }}\">Annonce</a></li>

    <li>Liste des annonces</li>


</ol>
<div class=\"wizard-container\">

    <div class=\"card wizard-card\" data-color=\"orange\" id=\"wizardProfile\">

       {% if abonnement %}
        <a class=\"btn btn-success pull-right\" href=\"{{ path('annonces_new') }}\">Nouvelle Annonce</a>
        <br>



                    <!-- /.box-header -->

                        <table id=\"example2\" class=\"table table table-striped\">
                            <thead>
                            <tr>
                                <th>Idarticle</th>
                                <th>Titre</th>

                                <th>Prix</th>
                                <th>Date</th>
                                <th>Disponibilite</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for annonce in annonces %}
                                <tr>
                                    <td><a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\">{{ annonce.id }}</a></td>
                                    <td>{{ annonce.titre }}</td>

                                    <td>{{ annonce.prix }} <span>Dinars</span></td>
                                    <td>{% if annonce.dateCreation %}{{ annonce.dateCreation|date('Y-m-d') }}{% endif %}</td>
                                   <td> {% if annonce.disponible %}En stock{% else %}Repture  de stock{% endif %}</td>
                                    <td>

                                        <a class=\"btn btn-xs btn-info\"   href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\"><i class=\"fa fa-info\"></i></a>

                                        <a class=\"btn btn-xs btn-success\"  href=\"{{ path('annonces_edit', { 'id': annonce.id }) }}\"><i class=\"fa fa-pencil\"></i></a>
                                        <a class=\"btn btn-xs btn-danger\"  href=\"{{ path('annonces_delete', { 'id': annonce.id }) }}\"><i class=\"fa fa-trash\"></i></a>

                                    </td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
       {% else %}<Panel class=\"panel-warning\"><i class=\"fa fa-warning\"></i> <spam>vous devez activer votre abonnement </spam></Panel>  {% endif %}
</div></div>
    </div></div>
    {# salsabil api display navigation
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(annonces) }}
    </div>#}
{% endblock %}
", "FrontBundle:annonces:indexCommercial.html.twig", "C:\\Users\\HAYFA\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/annonces/indexCommercial.html.twig");
    }
}

<?php

/* FrontBundle:annonces:indexCommercial.html.twig */
class __TwigTemplate_d642a9969a11dcc0f653f4539c33cae3743bc29665d18becff154f6ff2678ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:indexCommercial.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
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
        // line 24
        if (($context["abonnement"] ?? $this->getContext($context, "abonnement"))) {
            // line 25
            echo "        <a class=\"btn btn-success pull-right\"  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_new");
            echo "\">Nouvelle Annonce</a>
       ";
        } else {
            // line 27
            echo "           <div class=\"tooltipm\">           <a class=\"btn btn-success pull-right\"     disabled>Nouvelle Annonce</a>
               <span class=\"tooltiptext\">Vouz devez activer votre abonnement</span>
           </div>

       ";
        }
        // line 32
        echo "        <br>



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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 52
            echo "                                <tr>
                                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</td>

                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo " <span>Dinars</span></td>
                                    <td>";
            // line 57
            if ($this->getAttribute($context["annonce"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                   <td> ";
            // line 58
            if ($this->getAttribute($context["annonce"], "disponible", array())) {
                echo "En stock";
            } else {
                echo "Repture  de stock";
            }
            echo "</td>
                                    <td>

                                        <a class=\"btn btn-xs btn-info\"   href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-info\"></i></a>

                                        <a class=\"btn btn-xs btn-success\"  href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                        <a class=\"btn btn-xs btn-danger\"  href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_delete", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>

                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                            </tbody>
                        </table>

</div></div>
    </div></div>
    ";
        // line 79
        $this->displayBlock('js', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 80
        echo "    <script>    document.getElementById(\"button\").disabled = false;</script>

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
        return array (  218 => 80,  200 => 79,  192 => 69,  181 => 64,  177 => 63,  172 => 61,  162 => 58,  156 => 57,  152 => 56,  147 => 54,  141 => 53,  138 => 52,  134 => 51,  113 => 32,  106 => 27,  100 => 25,  98 => 24,  84 => 13,  80 => 11,  76 => 8,  67 => 7,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
        <a class=\"btn btn-success pull-right\"  href=\"{{ path('annonces_new') }}\">Nouvelle Annonce</a>
       {% else %}
           <div class=\"tooltipm\">           <a class=\"btn btn-success pull-right\"     disabled>Nouvelle Annonce</a>
               <span class=\"tooltiptext\">Vouz devez activer votre abonnement</span>
           </div>

       {% endif %}
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

</div></div>
    </div></div>
    {# salsabil api display navigation
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(annonces) }}
    </div>#}
{% block js %}
    <script>    document.getElementById(\"button\").disabled = false;</script>

{% endblock js %}
{% endblock %}
", "FrontBundle:annonces:indexCommercial.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/annonces/indexCommercial.html.twig");
    }
}

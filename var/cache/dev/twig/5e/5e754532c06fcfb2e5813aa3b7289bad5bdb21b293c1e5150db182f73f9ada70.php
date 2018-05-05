<?php

/* FrontBundle:evennements:show.html.twig */
class __TwigTemplate_3dd10c0925c48e37f3a5ae6fcb8342c42ccb3b75dfabc0f35f143af853c75831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundle/front/css/style_Salsabil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
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
        echo "    <h1> Evenement </h1>
<div class=\"row form-groupEvent\">
   <div class=\"col-md-12\">
    <table  class=\"table table-striped\">
        <tbody class=\"thead-light\">

            <tr >
                <th>Titre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date debut</th>
                <td>";
        // line 24
        if ($this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "dateDeb", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "dateDeb", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Date fin</th>
                <td>";
        // line 28
        if ($this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "prix", array()), "html", null, true);
        echo " DT </td>
            </tr>
            ";
        // line 42
        echo "        </tbody>
    </table>
   </div>

    ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
            // line 47
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
    ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        // line 52
        echo "

    <a class=\"btn btn-success\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_index");
        echo "\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>

    ";
        // line 56
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
            // line 57
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "commercial", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 58
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_parts", array("id" => $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-list\"></i> Consulter liste des partciapants </a>
        ";
            }
            // line 60
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
    <a class=\"btn btn-warning\"  href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_edit", array("id" => $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-edit\"> Edit </i></a>
    <a class=\"btn btn-danger\"  href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_delete", array("id" => $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-close\"></i> Delete</a>

    ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        // line 67
        echo "
</div>

    <!--- safa Boufares's work start-->
        <!-- /row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                    <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signalsEvsN_new", array("evennement" => $this->getAttribute((isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                    <br/>
                </div>
            </div>
            <div class=\"col-md-6\">
                <!-- test si l'utilisateur est connecté -->
                ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), 'form_start');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "contenu", array()), 'errors');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "

                ";
        // line 85
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 87
                echo "                        <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>

                    ";
            }
            // line 90
            echo "                ";
        } else {
            // line 91
            echo "                    <button type=\"button\" class=\"btn sign pull-right\" data-toggle=\"modal\" data-target=\"#noComment\">

                        <i class=\"fa fa-commenting-o\"></i> Commenter
                    </button>
                ";
        }
        // line 96
        echo "               ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), 'form_end');
        echo "
                <br>
                <br>
        </div>
        </div>
        <div class=\"row\">
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comsEvs"]) ? $context["comsEvs"] : $this->getContext($context, "comsEvs")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 103
            echo "

                <div class=\"col-md-12\">

                    <div class=\"one-comment\">
                        <div class=\"col-sm-1\">
                            <div class=\"thumbnail\">
                                <img class=\"img-responsive user-photo\" src=\"https://ssl.gstatic.com/accounts/ui/avatar_2x.png\">
                            </div>
                            <!-- /thumbnail -->
                        </div>
                        <!-- /col-sm-1 -->

                        <div class=\"col-sm-5\">
                            <div class=\"panel panel-default\">

                                <div class=\"panel-heading\">
                                    <strong>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                    ";
            // line 121
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 122
                echo "                                        ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                    // line 123
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_delete", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                            <a href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_Edit", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-edit\"></i></a>
                                        ";
                }
                // line 126
                echo "                                    ";
            }
            // line 127
            echo "                                </div>
                                <div class=\"panel-body\">
                                    ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "contenu", array()), "html", null, true);
            echo "
                                </div>
                                <!-- /panel-body -->
                            </div>
                            <!-- /panel panel-default -->
                        </div>
                        <!-- /col-sm-5 -->
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        </div>

    <!-- /row -->
    <!-- Modal no comment -->
    <div id=\"noComment\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Commentaires </h4>
                </div>

                <div class=\"modal-body\">

                    <div class=\"col-md-12\">
                        <p>Vous devez se connecter afin de pouvoir ajouter un  <b>commentaire</b>.</p>
                    </div>

                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>
    <!--- safa Boufares 's work end-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 171
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 171,  362 => 170,  322 => 139,  306 => 129,  302 => 127,  299 => 126,  294 => 124,  289 => 123,  286 => 122,  284 => 121,  278 => 120,  259 => 103,  255 => 102,  245 => 96,  238 => 91,  235 => 90,  230 => 87,  227 => 86,  225 => 85,  220 => 83,  216 => 82,  212 => 81,  203 => 75,  193 => 67,  188 => 65,  183 => 63,  179 => 62,  175 => 61,  170 => 60,  164 => 58,  161 => 57,  159 => 56,  154 => 54,  150 => 52,  145 => 50,  140 => 48,  135 => 47,  133 => 46,  127 => 42,  122 => 36,  115 => 32,  106 => 28,  97 => 24,  90 => 20,  83 => 16,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
<link href=\"{{ asset('bundle/front/css/style_Salsabil.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock style %}

{% block body %}
    <h1> Evenement </h1>
<div class=\"row form-groupEvent\">
   <div class=\"col-md-12\">
    <table  class=\"table table-striped\">
        <tbody class=\"thead-light\">

            <tr >
                <th>Titre</th>
                <td>{{ evennement.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evennement.description }}</td>
            </tr>
            <tr>
                <th>Date debut</th>
                <td>{% if evennement.dateDeb %}{{ evennement.dateDeb|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Date fin</th>
                <td>{% if evennement.dateFin %}{{ evennement.dateFin|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ evennement.lieu }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ evennement.prix}} DT </td>
            </tr>
            {#<tr>
                <th>Etat</th>
                <td>{{ evennement.etat }}</td>
            </tr>#}
        </tbody>
    </table>
   </div>

    {% if is_granted('ROLE_CLIENT') %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
    {{ form_end(form) }}
    {% endif %}


    <a class=\"btn btn-success\" href=\"{{ path('evennements_index') }}\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>

    {% if is_granted('ROLE_COM') %}
        {% if evennement.commercial.id == app.user.id %}
            <a href=\"{{ path('evennements_parts',{'id':evennement.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-list\"></i> Consulter liste des partciapants </a>
        {% endif  %}
        {{ form_start(form) }}
        {{ form_widget(form) }}
    <a class=\"btn btn-warning\"  href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\"> <i class=\"fa fa-edit\"> Edit </i></a>
    <a class=\"btn btn-danger\"  href=\"{{ path('evennements_delete', { 'id': evennement.id }) }}\"> <i class=\"fa fa-close\"></i> Delete</a>

    {{ form_end(form) }}
    {% endif %}

</div>

    <!--- safa Boufares's work start-->
        <!-- /row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                    <a href=\"{{ path('signalsEvsN_new', {'evennement' : evennement.id}) }}\"><i class=\"fa fa-flag pull-right\"></i></a>
                    <br/>
                </div>
            </div>
            <div class=\"col-md-6\">
                <!-- test si l'utilisateur est connecté -->
                {{ form_start(formC) }}
                {{ form_errors(formC.contenu) }}
                {{ form_widget(formC.contenu, {'attr': {'class': 'comment form-control'}}) }}

                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {% if is_granted(\"ROLE_CLIENT\")  %}
                        <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>

                    {% endif %}
                {% else %}
                    <button type=\"button\" class=\"btn sign pull-right\" data-toggle=\"modal\" data-target=\"#noComment\">

                        <i class=\"fa fa-commenting-o\"></i> Commenter
                    </button>
                {% endif %}
               {{ form_end(formC) }}
                <br>
                <br>
        </div>
        </div>
        <div class=\"row\">
            {% for com in comsEvs %}


                <div class=\"col-md-12\">

                    <div class=\"one-comment\">
                        <div class=\"col-sm-1\">
                            <div class=\"thumbnail\">
                                <img class=\"img-responsive user-photo\" src=\"https://ssl.gstatic.com/accounts/ui/avatar_2x.png\">
                            </div>
                            <!-- /thumbnail -->
                        </div>
                        <!-- /col-sm-1 -->

                        <div class=\"col-sm-5\">
                            <div class=\"panel panel-default\">

                                <div class=\"panel-heading\">
                                    <strong>{{ com.client.username }}</strong> <label class=\"text-muted text-right\"> commenté le {{ com.dateCmt|date('D-M-Y') }} </label>
                                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                        {% if app.user.id  == com.client.id %}
                                            <a href=\"{{ path('commentairesEvs_delete',{'evennement':com.evennement.id,'com':com.id}) }}\"><i class=\"fa fa-trash-o\"></i></a>
                                            <a href=\"{{ path('commentairesEvs_Edit',{'evennement':com.evennement.id,'com':com.id}) }}\"><i class=\"fa fa-edit\"></i></a>
                                        {% endif %}
                                    {% endif %}
                                </div>
                                <div class=\"panel-body\">
                                    {{ com.contenu }}
                                </div>
                                <!-- /panel-body -->
                            </div>
                            <!-- /panel panel-default -->
                        </div>
                        <!-- /col-sm-5 -->
                    </div>
                </div>
            {% endfor %}
        </div>

    <!-- /row -->
    <!-- Modal no comment -->
    <div id=\"noComment\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Commentaires </h4>
                </div>

                <div class=\"modal-body\">

                    <div class=\"col-md-12\">
                        <p>Vous devez se connecter afin de pouvoir ajouter un  <b>commentaire</b>.</p>
                    </div>

                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>
    <!--- safa Boufares 's work end-->
{% endblock %}
{% block js %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
{% endblock js %}

", "FrontBundle:evennements:show.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/evennements/show.html.twig");
    }
}

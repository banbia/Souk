<?php

/* FrontBundle:evennements:show.html.twig */
class __TwigTemplate_84384198ba66fabf48964fe21302cac7678ba88b23b24840e921ea21ea40fa8c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundle/front/css/style_Salsabil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!--- salsabil's work -->

    <h1  class=\"text-info\"> Evenement </h1>

<div class=\"row form-groupEvent\">
   <div class=\"col-md-12\">
       <div class=\"col-md-5\">
       <img   src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
       </div>
       <div class=\"col-md-6\">
    <table  class=\"table center-block\">
        <tbody class=\"thead-light\">

            <tr >
                <th class=\"text-success\">Titre</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 23, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-success\">Description</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 27, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-success\">Date debut</th>
                <td>";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 31, $this->source); })()), "dateDeb", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 31, $this->source); })()), "dateDeb", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-success\">Date fin</th>
                <td>";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 35, $this->source); })()), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 35, $this->source); })()), "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-success\">Lieu</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 39, $this->source); })()), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-success\">Prix</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 43, $this->source); })()), "prix", array()), "html", null, true);
        echo " DT </td>
            </tr>

        </tbody>
    </table>
       </div>
   </div>
    <div class=\" col-md-12\">

    ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
            // line 53
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), 'form_start');
            echo "
        ";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), 'widget');
            echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
        <a class=\"btn btn-success\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_index");
            echo "\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
    ";
            // line 57
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COM")) {
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 61, $this->source); })()), "commercial", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->source); })()), "user", array()), "id", array()))) {
                // line 62
                echo "
            <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_parts", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 63, $this->source); })()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-list\"></i> Consulter liste des partciapants </a>
            <a class=\"btn btn-warning\"  href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 64, $this->source); })()), "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"> Edit </i></a>
            <a class=\"btn btn-danger\"  href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 65, $this->source); })()), "id", array()))), "html", null, true);
                echo "\"> <i class=\"fa fa-close\"></i> Delete</a>
            <a class=\"btn btn-success\" href=\"";
                // line 66
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_index");
                echo "\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
        ";
            }
            // line 68
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), 'form_start');
            echo "
        ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), 'widget');
            echo "

    </div>

    ";
            // line 73
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 75
        echo "
</div>

    <!--- safa Boufares's work start-->
        <!-- /row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                    <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalsEvsN_new", array("evennement" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 83, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                    <br/>
                </div>
            </div>
            <div class=\"col-md-6\">
                <!-- test si l'utilisateur est connecté -->
                ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 89, $this->source); })()), 'form_start');
        echo "
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 90, $this->source); })()), "contenu", array()), 'errors');
        echo "
                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 91, $this->source); })()), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "

                ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 94
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
                // line 95
                echo "                        <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>

                    ";
            }
            // line 98
            echo "                ";
        } else {
            // line 99
            echo "                    <button type=\"button\" class=\"btn sign pull-right\" data-toggle=\"modal\" data-target=\"#noComment\">

                        <i class=\"fa fa-commenting-o\"></i> Commenter
                    </button>
                ";
        }
        // line 104
        echo "               ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
                <br>
                <br>
        </div>
        </div>
        <div class=\"row\">
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comEvs"]) || array_key_exists("comEvs", $context) ? $context["comEvs"] : (function () { throw new Twig_Error_Runtime('Variable "comEvs" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 111
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
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                    ";
            // line 129
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 130
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 130, $this->source); })()), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "id", array()))) {
                    // line 131
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_delete", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                            <a href=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_Edit", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-edit\"></i></a>
                                        ";
                }
                // line 134
                echo "                                    ";
            }
            // line 135
            echo "                                </div>
                                <div class=\"panel-body\">
                                    ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "contenu", array()), "html", null, true);
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
        // line 147
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

    // line 178
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 179
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
        return array (  392 => 179,  383 => 178,  343 => 147,  327 => 137,  323 => 135,  320 => 134,  315 => 132,  310 => 131,  307 => 130,  305 => 129,  299 => 128,  280 => 111,  276 => 110,  266 => 104,  259 => 99,  256 => 98,  251 => 95,  248 => 94,  246 => 93,  241 => 91,  237 => 90,  233 => 89,  224 => 83,  214 => 75,  209 => 73,  202 => 69,  197 => 68,  192 => 66,  188 => 65,  184 => 64,  180 => 63,  177 => 62,  174 => 61,  172 => 60,  169 => 59,  164 => 57,  160 => 56,  155 => 54,  150 => 53,  148 => 52,  136 => 43,  129 => 39,  120 => 35,  111 => 31,  104 => 27,  97 => 23,  86 => 15,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block style %}
<link href=\"{{ asset('bundle/front/css/style_Salsabil.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock style %}

{% block body %}
    <!--- salsabil's work -->

    <h1  class=\"text-info\"> Evenement </h1>

<div class=\"row form-groupEvent\">
   <div class=\"col-md-12\">
       <div class=\"col-md-5\">
       <img   src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
       </div>
       <div class=\"col-md-6\">
    <table  class=\"table center-block\">
        <tbody class=\"thead-light\">

            <tr >
                <th class=\"text-success\">Titre</th>
                <td>{{ evennement.titre }}</td>
            </tr>
            <tr>
                <th class=\"text-success\">Description</th>
                <td>{{ evennement.description }}</td>
            </tr>
            <tr>
                <th class=\"text-success\">Date debut</th>
                <td>{% if evennement.dateDeb %}{{ evennement.dateDeb|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th class=\"text-success\">Date fin</th>
                <td>{% if evennement.dateFin %}{{ evennement.dateFin|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th class=\"text-success\">Lieu</th>
                <td>{{ evennement.lieu }}</td>
            </tr>
            <tr>
                <th class=\"text-success\">Prix</th>
                <td>{{ evennement.prix}} DT </td>
            </tr>

        </tbody>
    </table>
       </div>
   </div>
    <div class=\" col-md-12\">

    {% if is_granted('ROLE_CLIENT') %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
        <a class=\"btn btn-success\" href=\"{{ path('evennements_index') }}\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
    {{ form_end(form) }}
    {% endif %}

    {% if is_granted('ROLE_COM') %}
        {% if evennement.commercial.id == app.user.id %}

            <a href=\"{{ path('evennements_parts',{'id':evennement.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-list\"></i> Consulter liste des partciapants </a>
            <a class=\"btn btn-warning\"  href=\"{{ path('evennements_edit', { 'id': evennement.id }) }}\"> <i class=\"fa fa-edit\"> Edit </i></a>
            <a class=\"btn btn-danger\"  href=\"{{ path('evennements_delete', { 'id': evennement.id }) }}\"> <i class=\"fa fa-close\"></i> Delete</a>
            <a class=\"btn btn-success\" href=\"{{ path('evennements_index') }}\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
        {% endif  %}
        {{ form_start(form) }}
        {{ form_widget(form) }}

    </div>

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
            {% for com in comEvs %}


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

", "FrontBundle:evennements:show.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/evennements/show.html.twig");
    }
}

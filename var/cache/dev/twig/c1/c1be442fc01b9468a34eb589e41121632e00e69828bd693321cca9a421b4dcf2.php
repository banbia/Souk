<?php

/* FrontBundle:evennements:show.html.twig */
class __TwigTemplate_03c27f32fb8bd7b4a680d824d8d7e1c8bac6d36e737e9a5ccee803b0ef02458a extends Twig_Template
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
        echo "    <h1> Evenement </h1>
<div class=\"row form-groupEvent\">
   <div class=\"col-md-12\">
    <table  class=\"table table-striped\">
        <tbody class=\"thead-light\">

            <tr >
                <th>Titre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 16, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 20, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date debut</th>
                <td>";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 24, $this->source); })()), "dateDeb", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 24, $this->source); })()), "dateDeb", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Date fin</th>
                <td>";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 28, $this->source); })()), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 28, $this->source); })()), "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 32, $this->source); })()), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 36, $this->source); })()), "prix", array()), "html", null, true);
        echo " DT </td>
            </tr>
            ";
        // line 42
        echo "        </tbody>
    </table>
   </div>

    ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
            // line 47
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), 'form_start');
            echo "
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), 'widget');
            echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
    ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 52
        echo "

    <a class=\"btn btn-success\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_index");
        echo "\"><i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>

    ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COM")) {
            // line 57
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 57, $this->source); })()), "commercial", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->source); })()), "user", array()), "id", array()))) {
                // line 58
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_parts", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 58, $this->source); })()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-list\"></i> Consulter liste des partciapants </a>
        ";
            }
            // line 60
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), 'form_start');
            echo "
        ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), 'widget');
            echo "
    <a class=\"btn btn-warning\"  href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 62, $this->source); })()), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-edit\"> Edit </i></a>
    <a class=\"btn btn-danger\"  href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 63, $this->source); })()), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-close\"></i> Delete</a>

    ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 67
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrontBundle:Evennements:newEvs", array("evennement" => twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 67, $this->source); })()), "id", array()))));
        echo "

</div>
=======
    <!--- safa Boufares's work start-->
        <!-- /row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalsEvsN_new", array("evennement" => (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 76, $this->source); })()))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                    <br/>
                </div>
            </div>
            <div class=\"col-md-6\">
                <!-- test si l'utilisateur est connecté -->
                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 82, $this->source); })()), 'form_start');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 83, $this->source); })()), "contenu", array()), 'errors');
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 84, $this->source); })()), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "

                ";
        // line 86
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 87
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
                // line 88
                echo "                        <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>

                    ";
            }
            // line 91
            echo "                ";
        } else {
            // line 92
            echo "                    <button type=\"button\" class=\"btn sign pull-right\" data-toggle=\"modal\" data-target=\"#noComment\">

                        <i class=\"fa fa-commenting-o\"></i> Commenter
                    </button>
                ";
        }
        // line 97
        echo "               ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
                <br>
                <br>
        </div>
        </div>
        <div class=\"row\">
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comsEvs"]) || array_key_exists("comsEvs", $context) ? $context["comsEvs"] : (function () { throw new Twig_Error_Runtime('Variable "comsEvs" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 104
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
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                    ";
            // line 122
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 123
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 123, $this->source); })()), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "id", array()))) {
                    // line 124
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_delete", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                            <a href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_Edit", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-edit\"></i></a>
                                        ";
                }
                // line 127
                echo "                                    ";
            }
            // line 128
            echo "                                </div>
                                <div class=\"panel-body\">
                                    ";
            // line 130
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
        // line 140
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

    // line 171
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 172
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
        return array (  378 => 172,  369 => 171,  329 => 140,  313 => 130,  309 => 128,  306 => 127,  301 => 125,  296 => 124,  293 => 123,  291 => 122,  285 => 121,  266 => 104,  262 => 103,  252 => 97,  245 => 92,  242 => 91,  237 => 88,  234 => 87,  232 => 86,  227 => 84,  223 => 83,  219 => 82,  210 => 76,  197 => 67,  192 => 65,  187 => 63,  183 => 62,  179 => 61,  174 => 60,  168 => 58,  165 => 57,  163 => 56,  158 => 54,  154 => 52,  149 => 50,  144 => 48,  139 => 47,  137 => 46,  131 => 42,  126 => 36,  119 => 32,  110 => 28,  101 => 24,  94 => 20,  87 => 16,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
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
    {{ render(controller('FrontBundle:Evennements:newEvs', { 'evennement':evennement.id  })) }}

</div>
=======
    <!--- safa Boufares's work start-->
        <!-- /row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                    <a href=\"{{ path('signalsEvsN_new', {'evennement' : evennement}) }}\"><i class=\"fa fa-flag pull-right\"></i></a>
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

", "FrontBundle:evennements:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/show.html.twig");
    }
}

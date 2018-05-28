<?php

/* FrontBundle:evennements:show.html.twig */
class __TwigTemplate_17a2f135355b653765d030250cb2c7b10ff309fc31a6bf29d43a35c5f47862b7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundle/front/css/style_Salsabil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date debut</th>
                <td>";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "dateDeb", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "dateDeb", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Date fin</th>
                <td>";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "prix", array()), "html", null, true);
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
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Participer\" />
    ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "commercial", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "id", array()))) {
                // line 58
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_parts", array("id" => twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-list\"></i> Consulter liste des partciapants </a>
        ";
            }
            // line 60
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
        ";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    <a class=\"btn btn-warning\"  href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-edit\"> Edit </i></a>
    <a class=\"btn btn-danger\"  href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evennements_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-close\"></i> Delete</a>

    ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalsEvsN_new", array("evennement" => twig_get_attribute($this->env, $this->source, ($context["evennement"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                    <br/>
                </div>
            </div>
            <div class=\"col-md-6\">
                <!-- test si l'utilisateur est connecté -->
                ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formC"] ?? null), 'form_start');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formC"] ?? null), "contenu", array()), 'errors');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formC"] ?? null), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "

                ";
        // line 85
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formC"] ?? null), 'form_end');
        echo "
                <br>
                <br>
        </div>
        </div>
        <div class=\"row\">
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comEvs"] ?? null));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                    ";
            // line 121
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 122
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "id", array()))) {
                    // line 123
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_delete", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                            <a href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_Edit", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
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
    }

    // line 170
    public function block_js($context, array $blocks = array())
    {
        // line 171
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
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
        return array (  333 => 171,  330 => 170,  296 => 139,  280 => 129,  276 => 127,  273 => 126,  268 => 124,  263 => 123,  260 => 122,  258 => 121,  252 => 120,  233 => 103,  229 => 102,  219 => 96,  212 => 91,  209 => 90,  204 => 87,  201 => 86,  199 => 85,  194 => 83,  190 => 82,  186 => 81,  177 => 75,  167 => 67,  162 => 65,  157 => 63,  153 => 62,  149 => 61,  144 => 60,  138 => 58,  135 => 57,  133 => 56,  128 => 54,  124 => 52,  119 => 50,  114 => 48,  109 => 47,  107 => 46,  101 => 42,  96 => 36,  89 => 32,  80 => 28,  71 => 24,  64 => 20,  57 => 16,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:evennements:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/show.html.twig");
    }
}

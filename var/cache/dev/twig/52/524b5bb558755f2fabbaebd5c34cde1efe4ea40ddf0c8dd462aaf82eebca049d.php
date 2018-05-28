<?php

/* FrontBundle:commandes:index.html.twig */
class __TwigTemplate_44ac5a1654c7ec50c093a13c0b811ba3c279740a7002e17d962dbeef4199c387 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"wrap\">
        <h1 align=\"center\">Mes demandes</h1>
        <div class=\"tab\">
            <button class=\"tablinks active\" onclick=\"openCity(event, 'Tous')\">Tous</button>
            <button class=\"tablinks\" onclick=\"openCity(event, 'Attente')\">En attente</button>
            <button class=\"tablinks\" onclick=\"openCity(event, 'Confirme')\">Confirmés</button>
        </div>

        <div id=\"panels\">
            <div id=\"Tous\" class=\"tabcontent\">
                <h3 align=\"center\">Tous les commandes</h3>
                <table class=\"table table-striped\">
                    <thead>
                    <tr class=\"table-light\">
                        <th>Date commande</th>
                        <th>Titre Annonce</th>
                        <th>Catégorie Annonce</th>
                        <th>Quantite</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new Twig_Error_Runtime('Variable "commandes" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 31
            echo "                        <tr>
                            <td>";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["commande"], "etat", array()) == 0)) {
                echo " En attente ";
            } else {
                echo " Confirmée";
            }
            echo "</td>
                            <td>

                                ";
            // line 39
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
                // line 40
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["commande"], "etat", array()) == 0)) {
                    // line 41
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-warning outline\">
                                                <i class=\"fa fa-edit\"></i>Modifier
                                            </a>
                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger\">

                                                <i class=\"fa fa-times\"></i>    Annuler
                                            </a>
                                            <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_show", array("commande" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info\">

                                            <i class=\"fa fa-file-pdf-o\"></i>    PDF
                                         </a>

                                    ";
                } else {
                    // line 56
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#noEdit\">

                                                <i class=\"fa fa-edit\"></i>   Modifier
                                            </a>
                                        <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_show", array("commande" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                    echo "}) }}\" class=\"btn btn-info\">

                                            <i class=\"fa fa-file-pdf-o\"></i>    PDF
                                        </a>
                                    ";
                }
                // line 66
                echo "

                                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COM")) {
                // line 69
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["commande"], "etat", array()) == 0)) {
                    // line 70
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_valid", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-success\">

                                                <i class=\"fa fa-check\"></i>    Valider
                                            </a>
                                    ";
                } else {
                    // line 76
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn btn-info\" disabled data-toggle=\"modal\" data-target=\"#noValid\">

                                                <i class=\"fa fa-ban\"></i>    Valider</span>
                                            </a>
                                    ";
                }
                // line 82
                echo "                                ";
            }
            // line 83
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    </tbody>
                </table>
            </div>
            <div id=\"Attente\" class=\"tabcontent\">
                <h3 align=\"center\">Les commandes en attente</h3>
                <table class=\"table table-striped\">
                    <thead>
                    <tr class=\"table-light\">
                        <th>Date commande</th>
                        <th>Titre Annonce</th>
                        <th>Catégorie Annonce</th>
                        <th>Quantite</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes_attente"]) || array_key_exists("commandes_attente", $context) ? $context["commandes_attente"] : (function () { throw new Twig_Error_Runtime('Variable "commandes_attente" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 103
            echo "                        <tr>
                            <td>";
            // line 104
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>

                                ";
            // line 110
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
                // line 111
                echo "
                                    <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">
                                        <i class=\"fa fa-edit\"></i>Modifier
                                    </a>
                                    <!-- Nour's work -->
                                    <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">

                                        <i class=\"fa fa-times\"></i>    Annuler
                                    </a>



                                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COM")) {
                // line 124
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["commande"], "etat", array()) == 0)) {
                    // line 125
                    echo "                                        <!-- Nour's work -->
                                        <a href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_valid", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-success\">

                                            <i class=\"fa fa-check\"></i>    Valider
                                        </a>
                                    ";
                } else {
                    // line 131
                    echo "                                        <!-- Nour's work -->
                                        <a href=\"#\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#noValid\">

                                            <i class=\"fa fa-check\"></i>    Valider</span>
                                        </a>
                                    ";
                }
                // line 137
                echo "                                ";
            }
            // line 138
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                    </tbody>
                </table>
            </div>
            <div id=\"Confirme\" class=\"tabcontent\">
                <h3 align=\"center\">Les commandes confirmées</h3>
                <table class=\"table table-striped\">
                    <thead>
                    <tr class=\"table-light\">
                        <th>Date commande</th>
                        <th>Titre Annonce</th>
                        <th>Catégorie Annonce</th>
                        <th>Quantite</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes_confirme"]) || array_key_exists("commandes_confirme", $context) ? $context["commandes_confirme"] : (function () { throw new Twig_Error_Runtime('Variable "commandes_confirme" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 158
            echo "                        <tr>
                            <td>";
            // line 159
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_show", array("commande" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">

                                    <i class=\"fa fa-file-pdf-o\"></i>    PDF
                                </a>
                            </td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>







    <!-- Modal no edit -->
    <div id=\"noEdit\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Edition Commande </h4>
                </div>

                <div class=\"modal-body\">

                    <div class=\"col-md-12\">
                        <p>Vous ne pouvez pas modifier une commande <b>confirmée</b>.</p>
                    </div>

                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal no valide -->
    <div id=\"noValid\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Validation Commande </h4>
                </div>

                <div class=\"modal-body\">

                    <div class=\"col-md-12\">
                        <p>Vous avez déjà validé cette commande.</p>
                    </div>

                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 238
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 239
        echo "<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class=\"tabcontent\" and hide them
        tabcontent = document.getElementsByClassName(\"tabcontent\");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = \"none\";
        }

        // Get all elements with class=\"tablinks\" and remove the class \"active\"
        tablinks = document.getElementsByClassName(\"tablinks\");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
        }

        // Show the current tab, and add an \"active\" class to the button that opened the tab
        document.getElementById(cityName).style.display = \"block\";
        evt.currentTarget.className += \" active\";
    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 239,  456 => 238,  381 => 172,  367 => 164,  362 => 162,  358 => 161,  354 => 160,  348 => 159,  345 => 158,  341 => 157,  323 => 141,  315 => 138,  312 => 137,  304 => 131,  296 => 126,  293 => 125,  290 => 124,  279 => 116,  272 => 112,  269 => 111,  267 => 110,  261 => 107,  257 => 106,  253 => 105,  247 => 104,  244 => 103,  240 => 102,  222 => 86,  214 => 83,  211 => 82,  203 => 76,  195 => 71,  192 => 70,  189 => 69,  184 => 66,  176 => 61,  169 => 56,  160 => 50,  153 => 46,  146 => 42,  143 => 41,  140 => 40,  138 => 39,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  110 => 32,  107 => 31,  103 => 30,  78 => 7,  69 => 6,  55 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{% block style %}
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block body %}
    <div class=\"wrap\">
        <h1 align=\"center\">Mes demandes</h1>
        <div class=\"tab\">
            <button class=\"tablinks active\" onclick=\"openCity(event, 'Tous')\">Tous</button>
            <button class=\"tablinks\" onclick=\"openCity(event, 'Attente')\">En attente</button>
            <button class=\"tablinks\" onclick=\"openCity(event, 'Confirme')\">Confirmés</button>
        </div>

        <div id=\"panels\">
            <div id=\"Tous\" class=\"tabcontent\">
                <h3 align=\"center\">Tous les commandes</h3>
                <table class=\"table table-striped\">
                    <thead>
                    <tr class=\"table-light\">
                        <th>Date commande</th>
                        <th>Titre Annonce</th>
                        <th>Catégorie Annonce</th>
                        <th>Quantite</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for commande in commandes %}
                        <tr>
                            <td>{% if commande.dateCom %}{{ commande.dateCom|date('d-m-Y') }}{% endif %}</td>
                            <td>{{ commande.annonce.titre }}</td>
                            <td>{{ commande.annonce.categorie.designation }}</td>
                            <td>{{ commande.quantite }}</td>
                            <td>{% if commande.etat == 0 %} En attente {%  else %} Confirmée{% endif %}</td>
                            <td>

                                {% if is_granted('ROLE_CLIENT') %}
                                    {% if commande.etat==0 %}
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_edit',{'id':commande.id}) }}\" class=\"btn btn-warning outline\">
                                                <i class=\"fa fa-edit\"></i>Modifier
                                            </a>
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_delete',{'id':commande.id}) }}\" class=\"btn btn-danger\">

                                                <i class=\"fa fa-times\"></i>    Annuler
                                            </a>
                                            <a href=\"{{ path('pdf_show',{'commande':commande.id}) }}\" class=\"btn btn-info\">

                                            <i class=\"fa fa-file-pdf-o\"></i>    PDF
                                         </a>

                                    {% else %}
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#noEdit\">

                                                <i class=\"fa fa-edit\"></i>   Modifier
                                            </a>
                                        <a href=\"{{ path('pdf_show',{'commande':commande.id}) }}}) }}\" class=\"btn btn-info\">

                                            <i class=\"fa fa-file-pdf-o\"></i>    PDF
                                        </a>
                                    {% endif %}


                                {% elseif is_granted('ROLE_COM') %}
                                    {% if commande.etat==0 %}
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_valid',{'id':commande.id}) }}\" class=\"btn btn-success\">

                                                <i class=\"fa fa-check\"></i>    Valider
                                            </a>
                                    {% else %}
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn btn-info\" disabled data-toggle=\"modal\" data-target=\"#noValid\">

                                                <i class=\"fa fa-ban\"></i>    Valider</span>
                                            </a>
                                    {% endif %}
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div id=\"Attente\" class=\"tabcontent\">
                <h3 align=\"center\">Les commandes en attente</h3>
                <table class=\"table table-striped\">
                    <thead>
                    <tr class=\"table-light\">
                        <th>Date commande</th>
                        <th>Titre Annonce</th>
                        <th>Catégorie Annonce</th>
                        <th>Quantite</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for commande in commandes_attente %}
                        <tr>
                            <td>{% if commande.dateCom %}{{ commande.dateCom|date('d-m-Y') }}{% endif %}</td>
                            <td>{{ commande.annonce.titre }}</td>
                            <td>{{ commande.annonce.categorie.designation }}</td>
                            <td>{{ commande.quantite }}</td>
                            <td>

                                {% if is_granted('ROLE_CLIENT') %}

                                    <a href=\"{{ path('commandes_edit',{'id':commande.id}) }}\" class=\"btn btn-warning\">
                                        <i class=\"fa fa-edit\"></i>Modifier
                                    </a>
                                    <!-- Nour's work -->
                                    <a href=\"{{ path('commandes_delete',{'id':commande.id}) }}\" class=\"btn btn-danger\">

                                        <i class=\"fa fa-times\"></i>    Annuler
                                    </a>



                                {% elseif is_granted('ROLE_COM') %}
                                    {% if commande.etat==0 %}
                                        <!-- Nour's work -->
                                        <a href=\"{{ path('commandes_valid',{'id':commande.id}) }}\" class=\"btn btn-success\">

                                            <i class=\"fa fa-check\"></i>    Valider
                                        </a>
                                    {% else %}
                                        <!-- Nour's work -->
                                        <a href=\"#\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#noValid\">

                                            <i class=\"fa fa-check\"></i>    Valider</span>
                                        </a>
                                    {% endif %}
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div id=\"Confirme\" class=\"tabcontent\">
                <h3 align=\"center\">Les commandes confirmées</h3>
                <table class=\"table table-striped\">
                    <thead>
                    <tr class=\"table-light\">
                        <th>Date commande</th>
                        <th>Titre Annonce</th>
                        <th>Catégorie Annonce</th>
                        <th>Quantite</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for commande in commandes_confirme %}
                        <tr>
                            <td>{% if commande.dateCom %}{{ commande.dateCom|date('d-m-Y') }}{% endif %}</td>
                            <td>{{ commande.annonce.titre }}</td>
                            <td>{{ commande.annonce.categorie.designation }}</td>
                            <td>{{ commande.quantite }}</td>
                            <td>
                                <a href=\"{{ path('pdf_show',{'commande':commande.id}) }}\" class=\"btn btn-info\">

                                    <i class=\"fa fa-file-pdf-o\"></i>    PDF
                                </a>
                            </td>

                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>







    <!-- Modal no edit -->
    <div id=\"noEdit\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Edition Commande </h4>
                </div>

                <div class=\"modal-body\">

                    <div class=\"col-md-12\">
                        <p>Vous ne pouvez pas modifier une commande <b>confirmée</b>.</p>
                    </div>

                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal no valide -->
    <div id=\"noValid\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Validation Commande </h4>
                </div>

                <div class=\"modal-body\">

                    <div class=\"col-md-12\">
                        <p>Vous avez déjà validé cette commande.</p>
                    </div>

                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>
{% endblock %}
{% block js %}
<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class=\"tabcontent\" and hide them
        tabcontent = document.getElementsByClassName(\"tabcontent\");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = \"none\";
        }

        // Get all elements with class=\"tablinks\" and remove the class \"active\"
        tablinks = document.getElementsByClassName(\"tablinks\");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
        }

        // Show the current tab, and add an \"active\" class to the button that opened the tab
        document.getElementById(cityName).style.display = \"block\";
        evt.currentTarget.className += \" active\";
    }

</script>
{% endblock js %}", "FrontBundle:commandes:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/index.html.twig");
    }
}

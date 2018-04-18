<?php

/* FrontBundle:commandes:index.html.twig */
class __TwigTemplate_5d7f599207866bd05286e22818fe1f5bfca7508c537dc08ae1299a751b1753b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 30
            echo "                        <tr>
                            <td>";
            // line 31
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                echo " En attente ";
            } else {
                echo " Confirmée";
            }
            echo "</td>
                            <td>

                                ";
            // line 38
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 39
                echo "                                    ";
                if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                    // line 40
                    echo "                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Modifier</span>
                                            </a>
                                        </div>
                                    ";
                } else {
                    // line 48
                    echo "                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noEdit\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Modifier</span>
                                            </a>
                                        </div>
                                    ";
                }
                // line 56
                echo "

                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 59
                echo "                                    ";
                if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                    // line 60
                    echo "                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
                                    ";
                } else {
                    // line 68
                    echo "                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noValid\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
                                    ";
                }
                // line 76
                echo "                                ";
            }
            // line 77
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_attente"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 97
            echo "                        <tr>
                            <td>";
            // line 98
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>

                                ";
            // line 104
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 105
                echo "
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Modifier</span>
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_delete", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Annuler</span>
                                            </a>
                                        </div>



                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 124
                echo "                                    ";
                if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                    // line 125
                    echo "                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_valid", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
                                    ";
                } else {
                    // line 133
                    echo "                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noValid\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
                                    ";
                }
                // line 141
                echo "                                ";
            }
            // line 142
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
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
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_confirme"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 161
            echo "                        <tr>
                            <td>";
            // line 162
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
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
    <div id=\"noVAlid\" class=\"modal fade\" role=\"dialog\">
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
    }

    // line 235
    public function block_js($context, array $blocks = array())
    {
        // line 236
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
        return array (  404 => 236,  401 => 235,  332 => 169,  322 => 165,  318 => 164,  314 => 163,  308 => 162,  305 => 161,  301 => 160,  284 => 145,  276 => 142,  273 => 141,  263 => 133,  254 => 127,  250 => 125,  247 => 124,  235 => 115,  225 => 108,  220 => 105,  218 => 104,  212 => 101,  208 => 100,  204 => 99,  198 => 98,  195 => 97,  191 => 96,  173 => 80,  165 => 77,  162 => 76,  152 => 68,  143 => 62,  139 => 60,  136 => 59,  131 => 56,  121 => 48,  112 => 42,  108 => 40,  105 => 39,  103 => 38,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  75 => 31,  72 => 30,  68 => 29,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:commandes:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/index.html.twig");
    }
}

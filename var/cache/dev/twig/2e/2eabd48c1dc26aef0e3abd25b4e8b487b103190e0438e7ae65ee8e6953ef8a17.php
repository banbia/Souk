<?php

/* FrontBundle:commandes:index.html.twig */
class __TwigTemplate_ec51157190c0e767df5ef9aa101520c868e1edb69a21a8fda137d516c405db5a extends Twig_Template
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
        $__internal_cccee8d540c93d5d9901e152a6e5121caa5f680c78a02a9d4b57d51390533dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccee8d540c93d5d9901e152a6e5121caa5f680c78a02a9d4b57d51390533dfb->enter($__internal_cccee8d540c93d5d9901e152a6e5121caa5f680c78a02a9d4b57d51390533dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $__internal_bbecedc2c554d0a5f2bfad10bd71a75b303fcb9f6ea3329b8445f5c082f2602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbecedc2c554d0a5f2bfad10bd71a75b303fcb9f6ea3329b8445f5c082f2602a->enter($__internal_bbecedc2c554d0a5f2bfad10bd71a75b303fcb9f6ea3329b8445f5c082f2602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cccee8d540c93d5d9901e152a6e5121caa5f680c78a02a9d4b57d51390533dfb->leave($__internal_cccee8d540c93d5d9901e152a6e5121caa5f680c78a02a9d4b57d51390533dfb_prof);

        
        $__internal_bbecedc2c554d0a5f2bfad10bd71a75b303fcb9f6ea3329b8445f5c082f2602a->leave($__internal_bbecedc2c554d0a5f2bfad10bd71a75b303fcb9f6ea3329b8445f5c082f2602a_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_cc585b998130706e8a9f98812d2d89b3b99add3b768d9c16712060cbb5be07a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc585b998130706e8a9f98812d2d89b3b99add3b768d9c16712060cbb5be07a3->enter($__internal_cc585b998130706e8a9f98812d2d89b3b99add3b768d9c16712060cbb5be07a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_b37f216046d8204102fe4ed5aeb1d68dbf8ad8eb695abb1703023a2002dce6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37f216046d8204102fe4ed5aeb1d68dbf8ad8eb695abb1703023a2002dce6c8->enter($__internal_b37f216046d8204102fe4ed5aeb1d68dbf8ad8eb695abb1703023a2002dce6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_b37f216046d8204102fe4ed5aeb1d68dbf8ad8eb695abb1703023a2002dce6c8->leave($__internal_b37f216046d8204102fe4ed5aeb1d68dbf8ad8eb695abb1703023a2002dce6c8_prof);

        
        $__internal_cc585b998130706e8a9f98812d2d89b3b99add3b768d9c16712060cbb5be07a3->leave($__internal_cc585b998130706e8a9f98812d2d89b3b99add3b768d9c16712060cbb5be07a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0452196663e1d86b584b2346d1e37ce87b9864b52b4c1f104e1da35a234e6f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0452196663e1d86b584b2346d1e37ce87b9864b52b4c1f104e1da35a234e6f06->enter($__internal_0452196663e1d86b584b2346d1e37ce87b9864b52b4c1f104e1da35a234e6f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c786b013f2f4bb4e8da31b612bda54325eecfa8991f499e677d3b856a87dbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c786b013f2f4bb4e8da31b612bda54325eecfa8991f499e677d3b856a87dbce->enter($__internal_1c786b013f2f4bb4e8da31b612bda54325eecfa8991f499e677d3b856a87dbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
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
        $context['_seq'] = twig_ensure_traversable(($context["commandes_attente"] ?? $this->getContext($context, "commandes_attente")));
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
        $context['_seq'] = twig_ensure_traversable(($context["commandes_confirme"] ?? $this->getContext($context, "commandes_confirme")));
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
        
        $__internal_1c786b013f2f4bb4e8da31b612bda54325eecfa8991f499e677d3b856a87dbce->leave($__internal_1c786b013f2f4bb4e8da31b612bda54325eecfa8991f499e677d3b856a87dbce_prof);

        
        $__internal_0452196663e1d86b584b2346d1e37ce87b9864b52b4c1f104e1da35a234e6f06->leave($__internal_0452196663e1d86b584b2346d1e37ce87b9864b52b4c1f104e1da35a234e6f06_prof);

    }

    // line 235
    public function block_js($context, array $blocks = array())
    {
        $__internal_464f686a759651f7f9b2045e9fe3f72e195a5cc38ecb0192fcf38ac7059685c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464f686a759651f7f9b2045e9fe3f72e195a5cc38ecb0192fcf38ac7059685c3->enter($__internal_464f686a759651f7f9b2045e9fe3f72e195a5cc38ecb0192fcf38ac7059685c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_b62441736e529eba6a69e48c5aa672c9c748ae81ba7e92aa2c2706db8eedc6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62441736e529eba6a69e48c5aa672c9c748ae81ba7e92aa2c2706db8eedc6cf->enter($__internal_b62441736e529eba6a69e48c5aa672c9c748ae81ba7e92aa2c2706db8eedc6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_b62441736e529eba6a69e48c5aa672c9c748ae81ba7e92aa2c2706db8eedc6cf->leave($__internal_b62441736e529eba6a69e48c5aa672c9c748ae81ba7e92aa2c2706db8eedc6cf_prof);

        
        $__internal_464f686a759651f7f9b2045e9fe3f72e195a5cc38ecb0192fcf38ac7059685c3->leave($__internal_464f686a759651f7f9b2045e9fe3f72e195a5cc38ecb0192fcf38ac7059685c3_prof);

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
        return array (  446 => 236,  437 => 235,  362 => 169,  352 => 165,  348 => 164,  344 => 163,  338 => 162,  335 => 161,  331 => 160,  314 => 145,  306 => 142,  303 => 141,  293 => 133,  284 => 127,  280 => 125,  277 => 124,  265 => 115,  255 => 108,  250 => 105,  248 => 104,  242 => 101,  238 => 100,  234 => 99,  228 => 98,  225 => 97,  221 => 96,  203 => 80,  195 => 77,  192 => 76,  182 => 68,  173 => 62,  169 => 60,  166 => 59,  161 => 56,  151 => 48,  142 => 42,  138 => 40,  135 => 39,  133 => 38,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  105 => 31,  102 => 30,  98 => 29,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_edit',{'id':commande.id}) }}\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Modifier</span>
                                            </a>
                                        </div>
                                    {% else %}
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noEdit\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Modifier</span>
                                            </a>
                                        </div>
                                    {% endif %}


                                {% elseif is_granted('ROLE_COM') %}
                                    {% if commande.etat==0 %}
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_edit',{'id':commande.id}) }}\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
                                    {% else %}
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noValid\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
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

                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_edit',{'id':commande.id}) }}\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Modifier</span>
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_delete',{'id':commande.id}) }}\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Annuler</span>
                                            </a>
                                        </div>



                                {% elseif is_granted('ROLE_COM') %}
                                    {% if commande.etat==0 %}
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_valid',{'id':commande.id}) }}\" class=\"btn left\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
                                    {% else %}
                                        <div class=\"content\">
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noValid\">

                                                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Valider</span>
                                            </a>
                                        </div>
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
                    </tr>
                    </thead>
                    <tbody>
                    {% for commande in commandes_confirme %}
                        <tr>
                            <td>{% if commande.dateCom %}{{ commande.dateCom|date('d-m-Y') }}{% endif %}</td>
                            <td>{{ commande.annonce.titre }}</td>
                            <td>{{ commande.annonce.categorie.designation }}</td>
                            <td>{{ commande.quantite }}</td>

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

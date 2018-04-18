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
        $__internal_f0d38c4060a366d28c7d140a97d5a496f3e8b3ae354753e404d2c129260dcd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d38c4060a366d28c7d140a97d5a496f3e8b3ae354753e404d2c129260dcd79->enter($__internal_f0d38c4060a366d28c7d140a97d5a496f3e8b3ae354753e404d2c129260dcd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $__internal_ddf5b9d40959153fc3f85abd42b9c15b7453f4434dc8c375cda99f3ec106261f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf5b9d40959153fc3f85abd42b9c15b7453f4434dc8c375cda99f3ec106261f->enter($__internal_ddf5b9d40959153fc3f85abd42b9c15b7453f4434dc8c375cda99f3ec106261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d38c4060a366d28c7d140a97d5a496f3e8b3ae354753e404d2c129260dcd79->leave($__internal_f0d38c4060a366d28c7d140a97d5a496f3e8b3ae354753e404d2c129260dcd79_prof);

        
        $__internal_ddf5b9d40959153fc3f85abd42b9c15b7453f4434dc8c375cda99f3ec106261f->leave($__internal_ddf5b9d40959153fc3f85abd42b9c15b7453f4434dc8c375cda99f3ec106261f_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_a24acf47f79e2a443da1479382d699549da1e78fc1c36e35bacffdc8b9453516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24acf47f79e2a443da1479382d699549da1e78fc1c36e35bacffdc8b9453516->enter($__internal_a24acf47f79e2a443da1479382d699549da1e78fc1c36e35bacffdc8b9453516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_cdac04de4f62d2495617d4a42eb6f5cf7ed8d33517fe685f2b8695321c3c3b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdac04de4f62d2495617d4a42eb6f5cf7ed8d33517fe685f2b8695321c3c3b01->enter($__internal_cdac04de4f62d2495617d4a42eb6f5cf7ed8d33517fe685f2b8695321c3c3b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_cdac04de4f62d2495617d4a42eb6f5cf7ed8d33517fe685f2b8695321c3c3b01->leave($__internal_cdac04de4f62d2495617d4a42eb6f5cf7ed8d33517fe685f2b8695321c3c3b01_prof);

        
        $__internal_a24acf47f79e2a443da1479382d699549da1e78fc1c36e35bacffdc8b9453516->leave($__internal_a24acf47f79e2a443da1479382d699549da1e78fc1c36e35bacffdc8b9453516_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_21663e112ad9d456b2e6756b2bc57dd4b5287907a26947af0f78ee20ad912bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21663e112ad9d456b2e6756b2bc57dd4b5287907a26947af0f78ee20ad912bce->enter($__internal_21663e112ad9d456b2e6756b2bc57dd4b5287907a26947af0f78ee20ad912bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55b0a372bfbba63c81556a6460b4be6f3fb13d060a82d4bf338c2d6416604885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b0a372bfbba63c81556a6460b4be6f3fb13d060a82d4bf338c2d6416604885->enter($__internal_55b0a372bfbba63c81556a6460b4be6f3fb13d060a82d4bf338c2d6416604885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_55b0a372bfbba63c81556a6460b4be6f3fb13d060a82d4bf338c2d6416604885->leave($__internal_55b0a372bfbba63c81556a6460b4be6f3fb13d060a82d4bf338c2d6416604885_prof);

        
        $__internal_21663e112ad9d456b2e6756b2bc57dd4b5287907a26947af0f78ee20ad912bce->leave($__internal_21663e112ad9d456b2e6756b2bc57dd4b5287907a26947af0f78ee20ad912bce_prof);

    }

    // line 235
    public function block_js($context, array $blocks = array())
    {
        $__internal_68002f9d883bbe032ab4bdebf8acfcda16bfcbe32cc6fb8f847bf51febab9b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68002f9d883bbe032ab4bdebf8acfcda16bfcbe32cc6fb8f847bf51febab9b99->enter($__internal_68002f9d883bbe032ab4bdebf8acfcda16bfcbe32cc6fb8f847bf51febab9b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_3e02ecacad90876fc7b763493c7615a697fb0e4dea7c4cd878f53b85be8b564f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e02ecacad90876fc7b763493c7615a697fb0e4dea7c4cd878f53b85be8b564f->enter($__internal_3e02ecacad90876fc7b763493c7615a697fb0e4dea7c4cd878f53b85be8b564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_3e02ecacad90876fc7b763493c7615a697fb0e4dea7c4cd878f53b85be8b564f->leave($__internal_3e02ecacad90876fc7b763493c7615a697fb0e4dea7c4cd878f53b85be8b564f_prof);

        
        $__internal_68002f9d883bbe032ab4bdebf8acfcda16bfcbe32cc6fb8f847bf51febab9b99->leave($__internal_68002f9d883bbe032ab4bdebf8acfcda16bfcbe32cc6fb8f847bf51febab9b99_prof);

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

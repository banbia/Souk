<?php

/* FrontBundle:commandes:index.html.twig */
class __TwigTemplate_26cc17d4b7490dd871200c84aeaacc9b3ebe6ad6f487dbe13e4cdeda91278fd2 extends Twig_Template
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
        $__internal_88b7c746a4cea22ed1f70217172547da038ffaa04adfe090710c87eef4f831b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b7c746a4cea22ed1f70217172547da038ffaa04adfe090710c87eef4f831b1->enter($__internal_88b7c746a4cea22ed1f70217172547da038ffaa04adfe090710c87eef4f831b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $__internal_b7c53411d3495739d79eea501c470ad8c76b5e6587caf7512c200fef1f6a704a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c53411d3495739d79eea501c470ad8c76b5e6587caf7512c200fef1f6a704a->enter($__internal_b7c53411d3495739d79eea501c470ad8c76b5e6587caf7512c200fef1f6a704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b7c746a4cea22ed1f70217172547da038ffaa04adfe090710c87eef4f831b1->leave($__internal_88b7c746a4cea22ed1f70217172547da038ffaa04adfe090710c87eef4f831b1_prof);

        
        $__internal_b7c53411d3495739d79eea501c470ad8c76b5e6587caf7512c200fef1f6a704a->leave($__internal_b7c53411d3495739d79eea501c470ad8c76b5e6587caf7512c200fef1f6a704a_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_c590e26d5cf5cf028504d61a2ec569b68a364893ad4aa06405463cb4ad67ad65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c590e26d5cf5cf028504d61a2ec569b68a364893ad4aa06405463cb4ad67ad65->enter($__internal_c590e26d5cf5cf028504d61a2ec569b68a364893ad4aa06405463cb4ad67ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ed648a4ba331ce40b8c2c4114805c076b38c3067618cf4577d92a36bcdff4cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed648a4ba331ce40b8c2c4114805c076b38c3067618cf4577d92a36bcdff4cb6->enter($__internal_ed648a4ba331ce40b8c2c4114805c076b38c3067618cf4577d92a36bcdff4cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_ed648a4ba331ce40b8c2c4114805c076b38c3067618cf4577d92a36bcdff4cb6->leave($__internal_ed648a4ba331ce40b8c2c4114805c076b38c3067618cf4577d92a36bcdff4cb6_prof);

        
        $__internal_c590e26d5cf5cf028504d61a2ec569b68a364893ad4aa06405463cb4ad67ad65->leave($__internal_c590e26d5cf5cf028504d61a2ec569b68a364893ad4aa06405463cb4ad67ad65_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1059b83df306bafea88c091386f5271fdb9300df648f3853d453d5ae30b6bc03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1059b83df306bafea88c091386f5271fdb9300df648f3853d453d5ae30b6bc03->enter($__internal_1059b83df306bafea88c091386f5271fdb9300df648f3853d453d5ae30b6bc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8c5423b1e224fa06c2daaa69e3204d4104212aab2fb99dd69912bd5599f23c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c5423b1e224fa06c2daaa69e3204d4104212aab2fb99dd69912bd5599f23c7->enter($__internal_a8c5423b1e224fa06c2daaa69e3204d4104212aab2fb99dd69912bd5599f23c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 31
            echo "                        <tr>
                            <td>";
            // line 32
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                echo " En attente ";
            } else {
                echo " Confirmée";
            }
            echo "</td>
                            <td>

                                ";
            // line 39
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 40
                echo "                                    ";
                if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                    // line 41
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-warning outline\">
                                                <i class=\"fa fa-edit\"></i>Modifier
                                            </a>
                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_delete", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger\">

                                                <i class=\"fa fa-times\"></i>    Annuler
                                            </a>
                                    ";
                } else {
                    // line 51
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#noEdit\">

                                                <i class=\"fa fa-edit\"></i>   Modifier
                                            </a>
                                    ";
                }
                // line 57
                echo "

                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 60
                echo "                                    ";
                if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                    // line 61
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_valid", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-success\">

                                                <i class=\"fa fa-check\"></i>    Valider
                                            </a>
                                    ";
                } else {
                    // line 67
                    echo "                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn btn-info\" disabled data-toggle=\"modal\" data-target=\"#noValid\">

                                                <i class=\"fa fa-ban\"></i>    Valider</span>
                                            </a>
                                    ";
                }
                // line 73
                echo "                                ";
            }
            // line 74
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_attente"] ?? $this->getContext($context, "commandes_attente")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 94
            echo "                        <tr>
                            <td>";
            // line 95
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>

                                ";
            // line 101
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 102
                echo "
                                    <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">
                                        <i class=\"fa fa-edit\"></i>Modifier
                                    </a>
                                    <!-- Nour's work -->
                                    <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_delete", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">

                                        <i class=\"fa fa-times\"></i>    Annuler
                                    </a>



                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 115
                echo "                                    ";
                if (($this->getAttribute($context["commande"], "etat", array()) == 0)) {
                    // line 116
                    echo "                                        <!-- Nour's work -->
                                        <a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_valid", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-success\">

                                            <i class=\"fa fa-check\"></i>    Valider
                                        </a>
                                    ";
                } else {
                    // line 122
                    echo "                                        <!-- Nour's work -->
                                        <a href=\"#\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#noValid\">

                                            <i class=\"fa fa-check\"></i>    Valider</span>
                                        </a>
                                    ";
                }
                // line 128
                echo "                                ";
            }
            // line 129
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
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
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_confirme"] ?? $this->getContext($context, "commandes_confirme")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 148
            echo "                        <tr>
                            <td>";
            // line 149
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
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
        
        $__internal_a8c5423b1e224fa06c2daaa69e3204d4104212aab2fb99dd69912bd5599f23c7->leave($__internal_a8c5423b1e224fa06c2daaa69e3204d4104212aab2fb99dd69912bd5599f23c7_prof);

        
        $__internal_1059b83df306bafea88c091386f5271fdb9300df648f3853d453d5ae30b6bc03->leave($__internal_1059b83df306bafea88c091386f5271fdb9300df648f3853d453d5ae30b6bc03_prof);

    }

    // line 222
    public function block_js($context, array $blocks = array())
    {
        $__internal_99d2f8ea02b4afd3fcac87677b27de086b00bf4d97c99b4965ca5f892e0dd8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d2f8ea02b4afd3fcac87677b27de086b00bf4d97c99b4965ca5f892e0dd8fa->enter($__internal_99d2f8ea02b4afd3fcac87677b27de086b00bf4d97c99b4965ca5f892e0dd8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_3b8c35cb6be84284a998f9acfd54387adbb8751fd56e9bbf05f8d7dedd69af75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8c35cb6be84284a998f9acfd54387adbb8751fd56e9bbf05f8d7dedd69af75->enter($__internal_3b8c35cb6be84284a998f9acfd54387adbb8751fd56e9bbf05f8d7dedd69af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 223
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
        
        $__internal_3b8c35cb6be84284a998f9acfd54387adbb8751fd56e9bbf05f8d7dedd69af75->leave($__internal_3b8c35cb6be84284a998f9acfd54387adbb8751fd56e9bbf05f8d7dedd69af75_prof);

        
        $__internal_99d2f8ea02b4afd3fcac87677b27de086b00bf4d97c99b4965ca5f892e0dd8fa->leave($__internal_99d2f8ea02b4afd3fcac87677b27de086b00bf4d97c99b4965ca5f892e0dd8fa_prof);

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
        return array (  436 => 223,  427 => 222,  352 => 156,  342 => 152,  338 => 151,  334 => 150,  328 => 149,  325 => 148,  321 => 147,  304 => 132,  296 => 129,  293 => 128,  285 => 122,  277 => 117,  274 => 116,  271 => 115,  260 => 107,  253 => 103,  250 => 102,  248 => 101,  242 => 98,  238 => 97,  234 => 96,  228 => 95,  225 => 94,  221 => 93,  203 => 77,  195 => 74,  192 => 73,  184 => 67,  176 => 62,  173 => 61,  170 => 60,  165 => 57,  157 => 51,  149 => 46,  142 => 42,  139 => 41,  136 => 40,  134 => 39,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  106 => 32,  103 => 31,  99 => 30,  74 => 7,  65 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_edit',{'id':commande.id}) }}\" class=\"btn btn-warning outline\">
                                                <i class=\"fa fa-edit\"></i>Modifier
                                            </a>
                                            <!-- Nour's work -->
                                            <a href=\"{{ path('commandes_delete',{'id':commande.id}) }}\" class=\"btn btn-danger\">

                                                <i class=\"fa fa-times\"></i>    Annuler
                                            </a>
                                    {% else %}
                                            <!-- Nour's work -->
                                            <a href=\"#\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#noEdit\">

                                                <i class=\"fa fa-edit\"></i>   Modifier
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

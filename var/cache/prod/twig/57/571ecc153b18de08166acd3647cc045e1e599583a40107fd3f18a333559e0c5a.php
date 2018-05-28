<?php

/* FrontBundle:annonces:show.html.twig */
class __TwigTemplate_8d342bd4527a00597947ed9ba2a955e606a0477ae0dedcfd9beebe9e33e99fde extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:show.html.twig", 1);
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
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/rating.css"), "html", null, true);
        echo "\" />

";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        // line 15
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_homepage");
        echo "\">Annonce</a></li>
        <li><a href=\"\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "categorie", array()), "designation", array()), "html", null, true);
        echo "</a></li>
        <li>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "titre", array()), "html", null, true);
        echo "</li>


    </ol>
    <div class=\"row\">
        <div class=\"col-md-5 single-right-left \">
            <div  class=\"slider\">

                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li data-thumb=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                    </ul>


                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div id=\"sidebar\" class=\"col-md-7 single-right-left simpleCart_shelfItem\">

            <h3>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "titre", array()), "html", null, true);
        echo "</h3>
            <div class=\"rating1\">
\t\t\t\t\t<span class=\"starRating\">
\t\t\t\t\t\t<input id=\"rating5\" type=\"radio\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t<label for=\"rating5\">5</label>
\t\t\t\t\t\t<input id=\"rating4\" type=\"radio\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t<label for=\"rating4\">4</label>
\t\t\t\t\t\t<input id=\"rating3\" type=\"radio\" name=\"rating\" value=\"3\" checked=\"\">
\t\t\t\t\t\t<label for=\"rating3\">3</label>
\t\t\t\t\t\t<input id=\"rating2\" type=\"radio\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t<label for=\"rating2\">2</label>
\t\t\t\t\t\t<input id=\"rating1\" type=\"radio\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t<label for=\"rating1\">1</label>
\t\t\t\t\t</span>
            </div>
            <p>
                <span class=\"item_price\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "prix", array()), "html", null, true);
        echo "</span>

                <label>

                    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "disponible", array())) {
            echo "En stock";
        } else {
            echo "Repture  de stock";
        }
        echo "</td>

                </label>
            </p>
            <div class=\"single-infoagile\">
                <ul>
                    <li>
                        <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> Livraison gratuite
                    </li>
                    <li>
                        <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> Paiement à la livraison admissible.
                    </li>

                </ul>
            </div>
            <div class=\"product-single-w3l\">
                <p>
                    <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>";
        // line 86
        echo twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "description", array());
        echo "
                </p>
            </div>
             <div class=\"product-single-w3l\">
                <p>
            ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "commercial", array()), "adresse", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-map-marker\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "commercial", array()), "adresse", array()), "html", null, true);
            echo "</span>";
        }
        // line 92
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "commercial", array()), "mobile", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-phone\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "commercial", array()), "mobile", array()), "html", null, true);
            echo "</span>";
        }
        // line 93
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "commercial", array()), "email", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-envelope\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "commercial", array()), "email", array()), "html", null, true);
            echo "</span>";
        }
        // line 94
        echo "                </p>
             </div>
       </div>
        <div class=\"clearfix\"> </div>
    </div>
    <br>



    
    ";
        // line 105
        echo "
<!-- Nour's work -->
";
        // line 107
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 108
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "commercial", array()), "id", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "id", array()))) {
                // line 109
                echo "        <div class=\"content\">
            ";
                // line 110
                if ((($context["com"] ?? null) == 0)) {
                    // line 111
                    echo "                <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#newCom\">

                    <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
                </a>

            ";
                } else {
                    // line 117
                    echo "                <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noCom\">

                    <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
                </a>
            ";
                }
                // line 122
                echo "        </div>
";
            }
        }
        // line 125
        echo "
    <!-- Modal new com-->
    <div id=\"newCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Nouvelle Commande </h4>
                </div>

                <div class=\"modal-body\">

                        <div class=\"col-md-12\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateCom", array()), 'label');
        echo "
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateCom", array()), 'errors');
        echo "
                                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", array()), 'label');
        echo "
                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", array()), 'errors');
        echo "
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
            ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
    <!-- Modal no com-->
    <div id=\"noCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Nouvelle Commande </h4>
                </div>

                <div class=\"modal-body\">
                    <p>Vous avez déjà une commande en attente pour cette annonce.</p>


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>
    <!--- safa Boufares's work start-->

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalsAncN_new", array("annonce" => twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            <!-- test si l'utilisateur est connecté -->
            ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formC"] ?? null), 'form_start');
        echo "
            ";
        // line 200
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formC"] ?? null), "contenu", array()), 'errors');
        echo "
            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formC"] ?? null), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
                ";
        // line 202
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 203
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
                // line 204
                echo "                        <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>

                    ";
            }
            // line 207
            echo "                ";
        } else {
            // line 208
            echo "                    <button type=\"button\" class=\"btn sign pull-right\" data-toggle=\"modal\" data-target=\"#noComment\">

                        <i class=\"fa fa-commenting-o\"></i> Commenter
                    </button>
                ";
        }
        // line 213
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formC"] ?? null), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">


        ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comn"]) {
            // line 222
            echo "            <div class=\"col-md-12\">

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
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comn"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comn"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                ";
            // line 238
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 239
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comn"], "client", array()), "id", array()))) {
                    // line 240
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesAnc_delete", array("com" => twig_get_attribute($this->env, $this->source, $context["comn"], "id", array()), "annonce" => twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"";
                    // line 241
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesAnc_Edit", array("com" => twig_get_attribute($this->env, $this->source, $context["comn"], "id", array()), "annonce" => twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-edit\"></i></a>
                                    ";
                }
                // line 243
                echo "                                ";
            }
            // line 244
            echo "                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comn"], "contenu", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "    </div>

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

    // line 288
    public function block_js($context, array $blocks = array())
    {
        // line 289
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">


    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/rating.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/demo.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/shCore.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/jquery.mousewheel.css"), "html", null, true);
        echo "\"></script>

    <!-- FlexSlider -->
    <script defer src=\"../jquery.flexslider.js\"></script>

    <script type=\"text/javascript\">
        \$(function(){
            SyntaxHighlighter.all();
        });
        \$(window).load(function(){
            \$('.flexslider').flexslider({
                animation: \"slide\",
                controlNav: \"thumbnails\",
                start: function(slider){
                    \$('body').removeClass('loading');
                }
            });
        });


    </script>

    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\">
        <script>
        \$( function() {
            \$( \"#souk_backbundle_commandes_dateCom\" ).datepicker({
                altField: \"#souk_backbundle_commandes_dateCom\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 296,  518 => 295,  514 => 294,  510 => 293,  504 => 289,  501 => 288,  466 => 256,  450 => 246,  446 => 244,  443 => 243,  438 => 241,  433 => 240,  430 => 239,  428 => 238,  422 => 237,  405 => 222,  401 => 221,  389 => 213,  382 => 208,  379 => 207,  374 => 204,  371 => 203,  369 => 202,  365 => 201,  361 => 200,  357 => 199,  348 => 193,  313 => 161,  297 => 148,  293 => 147,  289 => 146,  283 => 143,  279 => 142,  275 => 141,  260 => 129,  254 => 125,  249 => 122,  242 => 117,  234 => 111,  232 => 110,  229 => 109,  226 => 108,  224 => 107,  220 => 105,  208 => 94,  201 => 93,  194 => 92,  188 => 91,  180 => 86,  156 => 69,  149 => 65,  130 => 49,  116 => 38,  111 => 36,  106 => 34,  101 => 32,  96 => 30,  91 => 28,  78 => 18,  74 => 17,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  55 => 10,  50 => 8,  46 => 7,  42 => 6,  37 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:annonces:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/show.html.twig");
    }
}

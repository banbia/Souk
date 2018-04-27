<?php

/* FrontBundle:annonces:show.html.twig */
class __TwigTemplate_5a53721aa6b6c1d5d2816ec406dc34a0b82e683dfa8cb573070a13c0b21c15d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/rating.css"), "html", null, true);
        echo "\" />

";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        // line 17
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\">Annonce</a></li>
        <li><a href=\"\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "categorie", array()), "designation", array()), "html", null, true);
        echo "</a></li>
        <li>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "titre", array()), "html", null, true);
        echo "</li>


    </ol>
    <div class=\"row\">
        <div class=\"col-md-5 single-right-left \">
            <div  class=\"slider\">

                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li data-thumb=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                    </ul>


                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div id=\"sidebar\" class=\"col-md-7 single-right-left simpleCart_shelfItem\">

            <h3>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "titre", array()), "html", null, true);
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
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "prix", array()), "html", null, true);
        echo "</span>

                <label>

                    ";
        // line 71
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "disponible", array())) {
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
        // line 88
        echo $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "description", array());
        echo "
                </p>
            </div>
             <div class=\"product-single-w3l\">
                <p>
            ";
        // line 93
        if ($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "commercial", array()), "adresse", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-map-marker\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "commercial", array()), "adresse", array()), "html", null, true);
            echo "</span>";
        }
        // line 94
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "commercial", array()), "mobile", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-phone\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "commercial", array()), "mobile", array()), "html", null, true);
            echo "</span>";
        }
        // line 95
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "commercial", array()), "email", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-envelope\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "commercial", array()), "email", array()), "html", null, true);
            echo "</span>";
        }
        // line 96
        echo "                </p>
             </div>
       </div>
        <div class=\"clearfix\"> </div>
    </div>
    <br>



    
    ";
        // line 107
        echo "
<!-- Nour's work -->
";
        // line 109
        if (($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "commercial", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            // line 110
            echo "    <div class=\"content\">
        ";
            // line 111
            if (((isset($context["com"]) ? $context["com"] : null) == 0)) {
                // line 112
                echo "        <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#newCom\">

            <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
        </a>
        ";
            } else {
                // line 117
                echo "            <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noCom\">

                <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
            </a>
        ";
            }
            // line 122
            echo "    </div>
";
        }
        // line 124
        echo "    <!-- Modal new com-->
    <div id=\"newCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
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
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateCom", array()), 'label');
        echo "
                                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateCom", array()), 'errors');
        echo "
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantite", array()), 'label');
        echo "
                                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantite", array()), 'errors');
        echo "
                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 159
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
                    <p>Vus avez déjà une commande en attente pour cette annonce.</p>


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>
";
    }

    // line 186
    public function block_js($context, array $blocks = array())
    {
        // line 187
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$( function() {
            \$( \"#souk_backbundle_commandes_dateCom\" ).datepicker({
                altField: \"#souk_backbundle_commandes_dateCom\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/rating.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/demo.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/shCore.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.mousewheel.css"), "html", null, true);
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
        return array (  367 => 204,  363 => 203,  359 => 202,  355 => 201,  339 => 187,  336 => 186,  305 => 159,  289 => 146,  285 => 145,  281 => 144,  275 => 141,  271 => 140,  267 => 139,  252 => 127,  247 => 124,  243 => 122,  236 => 117,  229 => 112,  227 => 111,  224 => 110,  222 => 109,  218 => 107,  206 => 96,  199 => 95,  192 => 94,  186 => 93,  178 => 88,  154 => 71,  147 => 67,  128 => 51,  114 => 40,  109 => 38,  104 => 36,  99 => 34,  94 => 32,  89 => 30,  76 => 20,  72 => 19,  68 => 18,  65 => 17,  63 => 16,  60 => 15,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:annonces:show.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/annonces/show.html.twig");
    }
}

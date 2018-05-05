<?php

/* FrontBundle:annonces:show.html.twig */
class __TwigTemplate_f5feeed6bf4f3609db894ba7eaca94dfa49aca640c66343f9ce7719d9f62027c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/rating.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        // line 15
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\">Annonce</a></li>
        <li><a href=\"\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "categorie", array()), "designation", array()), "html", null, true);
        echo "</a></li>
        <li>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</li>


    </ol>
    <div class=\"row\">
        <div class=\"col-md-5 single-right-left \">
            <div  class=\"slider\">

                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li data-thumb=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"thumb-image\">
                                <img src=\"";
        // line 38
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
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</span>

                <label>

                    ";
        // line 69
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "disponible", array())) {
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
        echo $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "description", array());
        echo "
                </p>
            </div>
             <div class=\"product-single-w3l\">
                <p>
            ";
        // line 91
        if ($this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "commercial", array()), "adresse", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-map-marker\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "commercial", array()), "adresse", array()), "html", null, true);
            echo "</span>";
        }
        // line 92
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "commercial", array()), "mobile", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-phone\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "commercial", array()), "mobile", array()), "html", null, true);
            echo "</span>";
        }
        // line 93
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "commercial", array()), "email", array())) {
            echo "<span class=\"phone\"><i class=\"fa fa-envelope\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "commercial", array()), "email", array()), "html", null, true);
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 108
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "commercial", array()), "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 109
                echo "        <div class=\"content\">
            ";
                // line 110
                if ((($context["com"] ?? $this->getContext($context, "com")) == 0)) {
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'label');
        echo "
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'errors');
        echo "
                                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'label');
        echo "
                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signalsAncN_new", array("annonce" => $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            <!-- test si l'utilisateur est connecté -->
            ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formC"] ?? $this->getContext($context, "formC")), 'form_start');
        echo "
            ";
        // line 200
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formC"] ?? $this->getContext($context, "formC")), "contenu", array()), 'errors');
        echo "
            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formC"] ?? $this->getContext($context, "formC")), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
                ";
        // line 202
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 203
            echo "                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formC"] ?? $this->getContext($context, "formC")), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">


        ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coms"] ?? $this->getContext($context, "coms")));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comn"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comn"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                ";
            // line 238
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 239
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["comn"], "client", array()), "id", array()))) {
                    // line 240
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesAnc_delete", array("com" => $this->getAttribute($context["comn"], "id", array()), "annonce" => $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"";
                    // line 241
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesAnc_Edit", array("com" => $this->getAttribute($context["comn"], "id", array()), "annonce" => $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["comn"], "contenu", array()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 288
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 289
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">


    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/rating.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/demo.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/shCore.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 296
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  560 => 296,  556 => 295,  552 => 294,  548 => 293,  542 => 289,  533 => 288,  492 => 256,  476 => 246,  472 => 244,  469 => 243,  464 => 241,  459 => 240,  456 => 239,  454 => 238,  448 => 237,  431 => 222,  427 => 221,  415 => 213,  408 => 208,  405 => 207,  400 => 204,  397 => 203,  395 => 202,  391 => 201,  387 => 200,  383 => 199,  374 => 193,  339 => 161,  323 => 148,  319 => 147,  315 => 146,  309 => 143,  305 => 142,  301 => 141,  286 => 129,  280 => 125,  275 => 122,  268 => 117,  260 => 111,  258 => 110,  255 => 109,  252 => 108,  250 => 107,  246 => 105,  234 => 94,  227 => 93,  220 => 92,  214 => 91,  206 => 86,  182 => 69,  175 => 65,  156 => 49,  142 => 38,  137 => 36,  132 => 34,  127 => 32,  122 => 30,  117 => 28,  104 => 18,  100 => 17,  96 => 16,  93 => 15,  91 => 14,  82 => 13,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  51 => 3,  42 => 2,  11 => 1,);
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

    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('bundles/front/css/style_haifa_daoud.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('bundles/front/css/flexslider.css') }}\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/front/css/rating.css') }}\" />

{% endblock style %}
{% block body %}
    {# dev-haifa#}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('front_homepage') }}\">Annonce</a></li>
        <li><a href=\"\">{{ annonce.categorie.designation }}</a></li>
        <li>{{ annonce.titre }}</li>


    </ol>
    <div class=\"row\">
        <div class=\"col-md-5 single-right-left \">
            <div  class=\"slider\">

                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li data-thumb=\"{{ asset('bundles/front/images/pic1.jpg') }}\">
                            <div class=\"thumb-image\">
                                <img src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"{{ asset('bundles/front/images/pic1.jpg') }}\">
                            <div class=\"thumb-image\">
                                <img src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                        <li data-thumb=\"{{ asset('bundles/front/images/pic1.jpg') }}\">
                            <div class=\"thumb-image\">
                                <img src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
                        </li>
                    </ul>


                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div id=\"sidebar\" class=\"col-md-7 single-right-left simpleCart_shelfItem\">

            <h3>{{ annonce.titre }}</h3>
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
                <span class=\"item_price\">{{ annonce.prix }}</span>

                <label>

                    {% if annonce.disponible %}En stock{% else %}Repture  de stock{% endif %}</td>

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
                    <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>{{ annonce.description|raw }}
                </p>
            </div>
             <div class=\"product-single-w3l\">
                <p>
            {% if annonce.commercial.adresse %}<span class=\"phone\"><i class=\"fa fa-map-marker\"></i> {{ annonce.commercial.adresse }}</span>{% endif %}
            {% if annonce.commercial.mobile %}<span class=\"phone\"><i class=\"fa fa-phone\"></i> {{ annonce.commercial.mobile }}</span>{% endif %}
            {% if annonce.commercial.email %}<span class=\"phone\"><i class=\"fa fa-envelope\"></i> {{ annonce.commercial.email }}</span>{% endif %}
                </p>
             </div>
       </div>
        <div class=\"clearfix\"> </div>
    </div>
    <br>



    
    {# dev-haifa#}

<!-- Nour's work -->
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    {% if annonce.commercial.id != app.user.id %}
        <div class=\"content\">
            {% if com==0 %}
                <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#newCom\">

                    <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
                </a>

            {% else %}
                <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noCom\">

                    <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
                </a>
            {% endif %}
        </div>
{% endif %}
{% endif %}

    <!-- Modal new com-->
    <div id=\"newCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            {{ form_start(form) }}
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Nouvelle Commande </h4>
                </div>

                <div class=\"modal-body\">

                        <div class=\"col-md-12\">
                            <div class=\"form-group col-md-6\">
                                {{ form_label(form.dateCom) }}
                                {{ form_errors(form.dateCom) }}
                                {{ form_widget(form.dateCom, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_label(form.quantite) }}
                                {{ form_errors(form.quantite) }}
                                {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
            {{ form_end(form) }}
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
                <a href=\"{{ path('signalsAncN_new',{'annonce':annonce.id}) }}\"><i class=\"fa fa-flag pull-right\"></i></a>
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


        {% for comn in coms %}
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
                                <strong>{{ comn.client.username }}</strong> <label class=\"text-muted text-right\"> commenté le {{ comn.dateCmt|date('D-M-Y') }} </label>
                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                    {% if app.user.id  == comn.client.id %}
                                        <a href=\"{{ path('commentairesAnc_delete',{'com':comn.id,'annonce':annonce.id}) }}\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"{{ path('commentairesAnc_Edit',{'com':comn.id,'annonce':annonce.id}) }}\"><i class=\"fa fa-edit\"></i></a>
                                    {% endif %}
                                {% endif %}
                            </div>
                            <div class=\"panel-body\">
                                {{ comn.contenu }}
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
{% endblock body %}
{% block js %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">


    <script src=\"{{ asset('bundles/front/js/rating.js') }}\"></script>
    <script src=\"{{ asset('bundles/front/js/demo.css') }}\"></script>
    <script src=\"{{ asset('bundles/front/js/shCore.css') }}\"></script>
    <script src=\"{{ asset('bundles/front/js/jquery.mousewheel.css') }}\"></script>

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
{% endblock js %}", "FrontBundle:annonces:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/show.html.twig");
    }
}

<?php

/* FrontBundle:annonces:index.html.twig */
class __TwigTemplate_a27890d4a3d106a28b0d2f0babc0d2d4599443f94aedb68526b436bd26f978cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:index.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

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
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">

                        <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_annonces_index");
        echo "\">Tous</a></h4>
                                </div>
                            </div>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index_by_categorie", array("categorie" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "designation", array()), "html", null, true);
            echo "</a></h4>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 31
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CategorieProduit", array("categorie" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"font-additional font-weight-normal hover-focus-color color-third text-uppercase\">
                                    <span class=\"pull-left\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomCategorie", array()), "html", null, true);
            echo "</span>
                                    <span class=\"pull-right\">(8)</span>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </div><!--/category-products-->




                    </div>
                </div>

                <div class=\"col-sm-9 padding-right\">
                    <div class=\"features_items\"><!--features_items-->
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 48
            echo "                           ";
            // line 68
            echo "                            <div class=\"col-md-4 blog-top\">
                                <div class=\"blog-in\">
                                    <div class=\"slideshow-container\">

                                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["annonce"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 73
                echo "

                                            <div class=\"mySlides fade in\">
                                                <div class=\"numbertext\"></div>
                                                <img src=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/annonceImage/" . $this->getAttribute($context["img"], "imageName", array()))), "html", null, true);
                echo "\" style=\"width:100%\">

                                            </div>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
                                        <!-- Full-width images with number and caption text -->


                                        <!-- Next and previous buttons -->
                                        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
                                        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
                                    </div>
                                    <div class=\"blog-grid\">
                                        <h3><a  href=\"#\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                        <div class=\"date\">
                                            <span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                            <a href=\"#\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>24</a>
                                            <div class=\"clearfix\"> </div>
                                        </div>
                                        <p></p>
                                        <div class=\"more\">
                                            <a class=\"link link-yaku\"href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">
                                                <span>Détails</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
                    </div><!--features_items-->


                </div>
            </div>
        </div>
    </section>
    ";
        // line 116
        echo "    <div class=\"navigation text-center\">
        ";
        // line 117
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["annonces"] ?? $this->getContext($context, "annonces")));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 117,  231 => 116,  221 => 107,  207 => 99,  198 => 93,  193 => 91,  182 => 82,  171 => 77,  165 => 73,  161 => 72,  155 => 68,  153 => 48,  149 => 47,  137 => 37,  127 => 33,  121 => 31,  117 => 30,  114 => 29,  102 => 25,  98 => 23,  94 => 22,  88 => 19,  75 => 8,  66 => 7,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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

    <link href=\"{{ asset('bundles/front/css/style_haifa_daoud.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block body %}


    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">

                        <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a href=\"{{ path('client_annonces_index') }}\">Tous</a></h4>
                                </div>
                            </div>
                            {% for category in categories %}
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a href=\"{{ path('annonces_index_by_categorie', { 'categorie': category.id }) }}\">{{  category.designation }}</a></h4>
                                </div>
                            </div>
                            {% endfor %}

                            {% for produit in produit %}
                                <a href=\"{{ path('CategorieProduit',{'categorie':produit.id}) }}\"
                                   class=\"font-additional font-weight-normal hover-focus-color color-third text-uppercase\">
                                    <span class=\"pull-left\">{{ produit.nomCategorie }}</span>
                                    <span class=\"pull-right\">(8)</span>
                                </a>
                            {% endfor %}
                        </div><!--/category-products-->




                    </div>
                </div>

                <div class=\"col-sm-9 padding-right\">
                    <div class=\"features_items\"><!--features_items-->
                        {% for annonce in annonces %}
                           {#<div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
                                <a href=\"\">
                                    <div class=\"inner_content clearfix\">
                                        <div class=\"product_image\">
                                            <img  href=\"\" src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>


                                            <a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\"
                                               class=\"button fa fa-info item_1\"> </a>
                                            <div class=\"product_container\">
                                                <div class=\"cart-left\">
                                                    <p class=\"title\">{{ annonce.titre }}</p>
                                                </div>
                                                <span class=\"amount item_price\">{{ annonce.prix }}</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>#}
                            <div class=\"col-md-4 blog-top\">
                                <div class=\"blog-in\">
                                    <div class=\"slideshow-container\">

                                        {% for img in annonce.images %}


                                            <div class=\"mySlides fade in\">
                                                <div class=\"numbertext\"></div>
                                                <img src=\"{{ asset('uploads/annonceImage/'~ img.imageName) }}\" style=\"width:100%\">

                                            </div>

                                        {% endfor %}

                                        <!-- Full-width images with number and caption text -->


                                        <!-- Next and previous buttons -->
                                        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
                                        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
                                    </div>
                                    <div class=\"blog-grid\">
                                        <h3><a  href=\"#\">{{ annonce.titre }}</a></h3>
                                        <div class=\"date\">
                                            <span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ annonce.dateCreation|date('Y-m-d') }}</span>
                                            <a href=\"#\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>24</a>
                                            <div class=\"clearfix\"> </div>
                                        </div>
                                        <p></p>
                                        <div class=\"more\">
                                            <a class=\"link link-yaku\"href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\">
                                                <span>Détails</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}

                    </div><!--features_items-->


                </div>
            </div>
        </div>
    </section>
    {# salsabil api display navigation #}
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(annonces) }}
    </div>
{% endblock %}
", "FrontBundle:annonces:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/index.html.twig");
    }
}

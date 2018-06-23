<?php

/* FrontBundle:default:index.html.twig */
class __TwigTemplate_f46804bf2920e07f4ac3eeec4ad0e889e83690d724b4b06a2396ad0c4a8db06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 162
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 163
        echo "
        <link href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/stylehaifa2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 169
        echo "
        <div class=\"blog\">
            <div class=\"container\">

                <div class=\"col-md-9 blog-header\">
                    ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 175
            echo "                        <div class=\"col-md-4 blog-top\">
                            <div class=\"blog-in\">
                                <a href=\"#\">

                                    ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "images", array()), 0, 1)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 180
                echo "

                                        <img src=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/annonceImage/" . $this->getAttribute($context["img"], "imageName", array()))), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">
                                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 184
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/annonceImage/no.png"), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                                </a>
                                <div class=\"blog-grid\">
                                    <h3><a  href=\"#\">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                    <div class=\"date\">
                                        <span class=\"date-in\"><i class=\"fa fa-calendar\"> </i>  ";
            // line 191
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                        <a href=\"#\" class=\"comments\"></a>
                                        <div class=\"clearfix\"> </div>
                                    </div>
                                    <p></p>
                                    <div class=\"more\">
                                        <a class=\"link link-yaku\" href=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "







                </div>
                <div class=\"col-md-3 categories-grid\">
                    <div class=\"search-in animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">

                        ";
        // line 223
        echo "                    </div>
                    <div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <h4>Catégories</h4>
                        <ul class=\"popular\">

                            ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 229
            echo "
                                <li><a href=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index_by_categoriesDefault", array("categorie" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "designation", array()), "html", null, true);
            echo "</a></li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "
                        </ul>
                    </div>
                    <div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <h4>Nouveautés</h4>
                        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["annonces"] ?? $this->getContext($context, "annonces")), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 239
            echo "                            <div class=\"product-go\">
                                ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "images", array()), 0, 1)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 241
                echo "


                                    <img src=\"";
                // line 244
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/annonceImage/" . $this->getAttribute($context["img"], "imageName", array()))), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 247
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/annonceImage/no.png"), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                                <div class=\"grid-product\">
                                    <a href=\"#\" class=\"elit\">";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a>
                                    <p>";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "


                    </div>

                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
        ";
        // line 270
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 270,  253 => 257,  242 => 252,  238 => 251,  235 => 250,  225 => 247,  217 => 244,  212 => 241,  207 => 240,  204 => 239,  200 => 238,  193 => 233,  182 => 230,  179 => 229,  175 => 228,  168 => 223,  154 => 205,  140 => 197,  131 => 191,  126 => 189,  122 => 187,  112 => 184,  105 => 182,  101 => 180,  96 => 179,  90 => 175,  86 => 174,  79 => 169,  70 => 168,  57 => 165,  53 => 164,  50 => 163,  41 => 162,  11 => 1,);
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


    {# dev-haifa
    <h3 class=\"m_1\">Les nouveaux produits</h3>
    <div class=\"content_grid\">
        {% for annonce in annonces %}
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
                            <a href=\"\">
                                <div class=\"inner_content clearfix\">
                                    <div class=\"product_image\">
                                       {# <img  href=\"\" src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                                        <div class=\"slideshow-container\">

                                            {% for img in annonce.images %}


                                                <div class=\"mySlides fade in\">
                                                    <div class=\"numbertext\"></div>
                                                    <img src=\"{{ asset('uploads/annonceImage/'~ img.imageName) }}\" style=\"width:100%;height:300px !important;\">

                                                </div>

                                            {% endfor %}

                                            <!-- Full-width images with number and caption text -->


                                            <!-- Next and previous buttons -->

                                        </div>

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
                        </div>

        <div class=\"clearfix\"></div>
{% endfor %}
</div>

    {# dev-haifa
    <h3 class=\"m_2\">Top Produits</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic7.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$4500.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic8.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1050.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic13.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2000.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <h3 class=\"m_2\">Sale Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"single.html\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic10.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$99.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic11.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$60.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic12.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$900.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>#}
    {% block style %}

        <link href=\"{{ asset('bundles/front/css/style_haifa_daoud.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('bundles/front/css/stylehaifa2.css') }}\" rel=\"stylesheet\"/>

    {% endblock style %}
    {% block body %}

        <div class=\"blog\">
            <div class=\"container\">

                <div class=\"col-md-9 blog-header\">
                    {% for article in annonces %}
                        <div class=\"col-md-4 blog-top\">
                            <div class=\"blog-in\">
                                <a href=\"#\">

                                    {% for img in article.images|slice(0, 1)|e %}


                                        <img src=\"{{ asset('uploads/annonceImage/'~ img.imageName) }}\" style=\"width:100%;height: 200px\">
                                    {% else %}
                                        <img src=\"{{ asset('uploads/annonceImage/no.png') }}\" style=\"width:100%;height: 200px\">

                                    {% endfor %}
                                </a>
                                <div class=\"blog-grid\">
                                    <h3><a  href=\"#\">{{ article.titre }}</a></h3>
                                    <div class=\"date\">
                                        <span class=\"date-in\"><i class=\"fa fa-calendar\"> </i>  {{ article.dateCreation|date('Y-m-d') }}</span>
                                        <a href=\"#\" class=\"comments\"></a>
                                        <div class=\"clearfix\"> </div>
                                    </div>
                                    <p></p>
                                    <div class=\"more\">
                                        <a class=\"link link-yaku\" href=\"{{ path('annonces_show', { 'id': article.id }) }}\">
                                            <span>Détails</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}








                </div>
                <div class=\"col-md-3 categories-grid\">
                    <div class=\"search-in animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">

                        {#<div class=\"search\">
                            <form method=\"POST\" >
                                <input type=\"text\" placeholder=\"Trouvez votre annonce\" name=\"search\" required=\"\" >
                                <input type=\"submit\" value=\"\" >
                            </form>
                        </div>#}
                    </div>
                    <div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <h4>Catégories</h4>
                        <ul class=\"popular\">

                            {% for category in categories %}

                                <li><a href=\"{{ path('annonces_index_by_categoriesDefault', { 'categorie': category.id }) }}\">{{  category.designation }}</a></li>

                            {% endfor %}

                        </ul>
                    </div>
                    <div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <h4>Nouveautés</h4>
                        {% for article in annonces|slice(0, 1) %}
                            <div class=\"product-go\">
                                {% for img in article.images|slice(0, 1)|e %}



                                    <img src=\"{{ asset('uploads/annonceImage/'~ img.imageName) }}\" style=\"width:100%;height: 200px\">

                                {% else %}
                                    <img src=\"{{ asset('uploads/annonceImage/no.png') }}\" style=\"width:100%;height: 200px\">

                                {% endfor %}
                                <div class=\"grid-product\">
                                    <a href=\"#\" class=\"elit\">{{ article.titre }}</a>
                                    <p>{{ article.description }}</p>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        {% endfor %}



                    </div>

                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
        {# salsabil api display navigation
        <div class=\"navigation text-center\">
            {{ knp_pagination_render(annonces) }}
        </div>#}


{% endblock %}

", "FrontBundle:default:index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/default/index.html.twig");
    }
}

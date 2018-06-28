<?php

/* FrontBundle:annonces:index.html.twig */
class __TwigTemplate_12586ab1d1ce956af381898255a56fc7afc34d0a2e8b6a827fbefdc7ad6f300c extends Twig_Template
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
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/stylehaifa2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <div class=\"blog\">
        <div class=\"container\">

            <div class=\"col-md-9 blog-header\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "                    <div class=\"col-md-4 blog-top\">
                        <div class=\"blog-in\">
                            <a href=\"#\">

                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "images", array()), 0, 1)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 20
                echo "

                                        <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/annonceImage/" . $this->getAttribute($context["img"], "imageName", array()))), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 24
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/annonceImage/no.png"), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                            </a>
                            <div class=\"blog-grid\">
                                <h3><a  href=\"#\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                <div class=\"date\">
                                    <span class=\"date-in\"><i class=\"fa fa-calendar\"> </i>  ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                    <a href=\"#\" class=\"comments\"></a>
                                    <div class=\"clearfix\"> </div>
                                </div>
                                <p></p>
                                <div class=\"more\">
                                    <a class=\"link link-yaku\" href=\"";
            // line 37
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
        // line 45
        echo "







            </div>
            <div class=\"col-md-3 categories-grid\">
                <div class=\"search-in animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">

                    ";
        // line 63
        echo "                </div>
                <div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h4>Catégories</h4>
                    <ul class=\"popular\">
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_annonces_index");
        echo "\">Tous </a></li>
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 69
            echo "
                            <li><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index_by_categories", array("categorie" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "designation", array()), "html", null, true);
            echo "</a></li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                    </ul>
                </div>
                <div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h4>Nouveautés</h4>
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["annonces"] ?? $this->getContext($context, "annonces")), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 79
            echo "                        <div class=\"product-go\">
                            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "images", array()), 0, 1)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 81
                echo "


                                    <img src=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/annonceImage/" . $this->getAttribute($context["img"], "imageName", array()))), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 87
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/annonceImage/no.png"), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                            <div class=\"grid-product\">
                                <a href=\"#\" class=\"elit\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a>
                                <p>";
            // line 92
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
        // line 97
        echo "


                </div>

            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    ";
        // line 107
        echo "    <div class=\"navigation text-center\">
        ";
        // line 108
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
        return array (  270 => 108,  267 => 107,  256 => 97,  245 => 92,  241 => 91,  238 => 90,  228 => 87,  220 => 84,  215 => 81,  210 => 80,  207 => 79,  203 => 78,  196 => 73,  185 => 70,  182 => 69,  178 => 68,  174 => 67,  168 => 63,  154 => 45,  140 => 37,  131 => 31,  126 => 29,  122 => 27,  112 => 24,  105 => 22,  101 => 20,  96 => 19,  90 => 15,  86 => 14,  79 => 9,  70 => 8,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li><a href=\"{{ path('client_annonces_index') }}\">Tous </a></li>
                        {% for category in categories %}

                            <li><a href=\"{{ path('annonces_index_by_categories', { 'categorie': category.id }) }}\">{{  category.designation }}</a></li>

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
    {#salsabil api display navigation#}
    <div class=\"navigation text-center\">
        {{ knp_pagination_render(annonces) }}
    </div>
{% endblock %}
", "FrontBundle:annonces:index.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/annonces/index.html.twig");
    }
}

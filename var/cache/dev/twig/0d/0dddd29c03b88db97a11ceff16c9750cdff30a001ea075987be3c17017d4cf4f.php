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

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/stylehaifa2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
        <div class=\"blog\">
            <div class=\"container\">

                <div class=\"col-md-9 blog-header\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 18
            echo "                        <div class=\"col-md-4 blog-top\">
                            <div class=\"blog-in\">
                                <a href=\"#\">

                                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "images", array()), 0, 1)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 23
                echo "

                                        <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/annonceImage/" . $this->getAttribute($context["img"], "imageName", array()))), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">
                                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/annonceImage/no.jpg"), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                                </a>
                                <div class=\"blog-grid\">
                                    <h3><a  href=\"#\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                    <div class=\"date\">
                                        <span class=\"date-in\"><i class=\"fa fa-calendar\"> </i>  ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                        <a href=\"#\" class=\"comments\"></a>
                                        <div class=\"clearfix\"> </div>
                                    </div>
                                    <p></p>
                                    <div class=\"more\">
                                        <a class=\"link link-yaku\" href=\"";
            // line 40
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
        // line 48
        echo "







                </div>
                <div class=\"col-md-3 categories-grid\">
                    <div class=\"search-in animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">

                        ";
        // line 66
        echo "                    </div>
                    <div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <h4>Catégories</h4>
                        <ul class=\"popular\">

                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 72
            echo "
                                <li><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index_by_categoriesDefault", array("categorie" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "designation", array()), "html", null, true);
            echo "</a></li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
                        </ul>
                    </div>
                    <div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <h4>Nouveautés</h4>
                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["annonces"] ?? $this->getContext($context, "annonces")), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 82
            echo "                            <div class=\"product-go\">
                                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "images", array()), 0, 1)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 84
                echo "


                                    <img src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/annonceImage/" . $this->getAttribute($context["img"], "imageName", array()))), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 90
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/annonceImage/no.jpg"), "html", null, true);
                echo "\" style=\"width:100%;height: 200px\">

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                                <div class=\"grid-product\">
                                    <a href=\"#\" class=\"elit\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a>
                                    <p>";
            // line 95
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
        // line 100
        echo "


                    </div>

                </div>
                <div class=\"clearfix\"> </div>
            </div>

        </div>

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
<<<<<<< HEAD
        return array (  253 => 100,  242 => 95,  238 => 94,  235 => 93,  225 => 90,  217 => 87,  212 => 84,  207 => 83,  204 => 82,  200 => 81,  193 => 76,  182 => 73,  179 => 72,  175 => 71,  168 => 66,  154 => 48,  140 => 40,  131 => 34,  126 => 32,  122 => 30,  112 => 27,  105 => 25,  101 => 23,  96 => 22,  90 => 18,  86 => 17,  79 => 12,  70 => 11,  57 => 8,  53 => 7,  50 => 6,  41 => 5,  11 => 1,);
=======
<<<<<<< HEAD
        return array (  253 => 257,  242 => 252,  238 => 251,  235 => 250,  225 => 247,  217 => 244,  212 => 241,  207 => 240,  204 => 239,  200 => 238,  193 => 233,  182 => 230,  179 => 229,  175 => 228,  168 => 223,  154 => 205,  140 => 197,  131 => 191,  126 => 189,  122 => 187,  112 => 184,  105 => 182,  101 => 180,  96 => 179,  90 => 175,  86 => 174,  79 => 169,  70 => 168,  57 => 165,  53 => 164,  50 => 163,  41 => 162,  11 => 1,);
=======
        return array (  253 => 100,  242 => 95,  238 => 94,  235 => 93,  225 => 90,  217 => 87,  212 => 84,  207 => 83,  204 => 82,  200 => 81,  193 => 76,  182 => 73,  179 => 72,  175 => 71,  168 => 66,  154 => 48,  140 => 40,  131 => 34,  126 => 32,  122 => 30,  112 => 27,  105 => 25,  101 => 23,  96 => 22,  90 => 18,  86 => 17,  79 => 12,  70 => 11,  57 => 8,  53 => 7,  50 => 6,  41 => 5,  11 => 1,);
>>>>>>> 699416ee8165181a141789dfe3faf6461d88fbd7
>>>>>>> 35c5af559d9ea554225542e1f73c4ce964030799
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


    {# dev-haifa  #}
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
                                        <img src=\"{{ asset('uploads/annonceImage/no.jpg') }}\" style=\"width:100%;height: 200px\">

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
                                    <img src=\"{{ asset('uploads/annonceImage/no.jpg') }}\" style=\"width:100%;height: 200px\">

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
        </div>
#}
{% endblock %}

<<<<<<< HEAD
", "FrontBundle:default:index.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/default/index.html.twig");
=======
<<<<<<< HEAD
", "FrontBundle:default:index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/default/index.html.twig");
=======
", "FrontBundle:default:index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/default/index.html.twig");
>>>>>>> 96cc820aa22a3748c3cb0a2d3aaea39aea3955fe
>>>>>>> 699416ee8165181a141789dfe3faf6461d88fbd7
    }
}

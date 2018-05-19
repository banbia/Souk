<?php

/* FrontBundle:annonces:index.html.twig */
class __TwigTemplate_3aac655f602245a74e8dc4b3c08a22c450f49d4fa2574b85179bc5871ee689c1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_annonces_index");
        echo "\">Tous</a></h4>
                                </div>
                            </div>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_index_by_categorie", array("categorie" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "designation", array()), "html", null, true);
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

                        </div><!--/category-products-->




                    </div>
                </div>

                <div class=\"col-sm-9 padding-right\">
                    <div class=\"features_items\"><!--features_items-->
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new Twig_Error_Runtime('Variable "annonces" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 42
            echo "                            <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
                                <a href=\"\">
                                    <div class=\"inner_content clearfix\">
                                        <div class=\"product_image\">
                                            <img  href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", array("id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", array()))), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"/>


                                            <a href=\"\"
                                               class=\"button item_add item_1\"> </a>
                                            <div class=\"product_container\">
                                                <div class=\"cart-left\">
                                                    <p class=\"title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", array()), "html", null, true);
            echo "</p>
                                                </div>
                                                <span class=\"amount item_price\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "prix", array()), "html", null, true);
            echo "</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                    </div><!--features_items-->


                </div>
            </div>
        </div>
    </section>

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
        return array (  173 => 63,  159 => 55,  154 => 53,  142 => 46,  136 => 42,  132 => 41,  118 => 29,  106 => 25,  102 => 23,  98 => 22,  92 => 19,  79 => 8,  70 => 7,  57 => 4,  54 => 3,  45 => 2,  15 => 1,);
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


                        </div><!--/category-products-->




                    </div>
                </div>

                <div class=\"col-sm-9 padding-right\">
                    <div class=\"features_items\"><!--features_items-->
                        {% for annonce in annonces %}
                            <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
                                <a href=\"\">
                                    <div class=\"inner_content clearfix\">
                                        <div class=\"product_image\">
                                            <img  href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\" src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>


                                            <a href=\"\"
                                               class=\"button item_add item_1\"> </a>
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
                        {% endfor %}

                    </div><!--features_items-->


                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "FrontBundle:annonces:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/index.html.twig");
    }
}

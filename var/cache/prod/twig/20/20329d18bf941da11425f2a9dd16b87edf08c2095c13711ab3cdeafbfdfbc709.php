<?php

/* FrontBundle:annonces:index.html.twig */
class __TwigTemplate_27ae7efd67d3c435c31de4f5d255a9364325b10e0b44ac6995ae195061c6f0f4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? null));
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
        return array (  143 => 63,  129 => 55,  124 => 53,  112 => 46,  106 => 42,  102 => 41,  88 => 29,  76 => 25,  72 => 23,  68 => 22,  62 => 19,  49 => 8,  46 => 7,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:annonces:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/index.html.twig");
    }
}

<?php

/* FrontBundle:default:index.html.twig */
class __TwigTemplate_7f29bf969a57d450f1f4770f8da03ab09d77291b0ef7c552b4f9eaa429770b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e07b6d5a237e351a467238261292cd286a417c9f3dbd5e0817b866cf2d1d7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e07b6d5a237e351a467238261292cd286a417c9f3dbd5e0817b866cf2d1d7a2->enter($__internal_7e07b6d5a237e351a467238261292cd286a417c9f3dbd5e0817b866cf2d1d7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:default:index.html.twig"));

        $__internal_baabdcf0132874c0a6e8509525622ea7e1c181d4ca56cdf970c365b6d8fc5ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baabdcf0132874c0a6e8509525622ea7e1c181d4ca56cdf970c365b6d8fc5ef2->enter($__internal_baabdcf0132874c0a6e8509525622ea7e1c181d4ca56cdf970c365b6d8fc5ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e07b6d5a237e351a467238261292cd286a417c9f3dbd5e0817b866cf2d1d7a2->leave($__internal_7e07b6d5a237e351a467238261292cd286a417c9f3dbd5e0817b866cf2d1d7a2_prof);

        
        $__internal_baabdcf0132874c0a6e8509525622ea7e1c181d4ca56cdf970c365b6d8fc5ef2->leave($__internal_baabdcf0132874c0a6e8509525622ea7e1c181d4ca56cdf970c365b6d8fc5ef2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d83f7f3924b9c50db977c524a09ee2421053ad4ba3844db200abc7356660e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d83f7f3924b9c50db977c524a09ee2421053ad4ba3844db200abc7356660e5f->enter($__internal_3d83f7f3924b9c50db977c524a09ee2421053ad4ba3844db200abc7356660e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a77ea741f6e460943147190496d6c0b284b1764132d58133fe19303bcd744ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a77ea741f6e460943147190496d6c0b284b1764132d58133fe19303bcd744ca->enter($__internal_7a77ea741f6e460943147190496d6c0b284b1764132d58133fe19303bcd744ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        // line 5
        echo "    <h3 class=\"m_1\">Les nouveaux produits</h3>
    <div class=\"content_grid\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 8
            echo "            <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
                <a href=\"\">
                    <div class=\"inner_content clearfix\">
                        <div class=\"product_image\">
                            <img  href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"/>


                            <a href=\"\"
                               class=\"button item_add item_1\"> </a>
                            <div class=\"product_container\">
                                <div class=\"cart-left\">
                                    <p class=\"title\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</p>
                                </div>
                                <span class=\"amount item_price\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
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
        // line 29
        echo "
        <div class=\"clearfix\"></div>
    </div>
    ";
        // line 33
        echo "    <h3 class=\"m_2\">Top Produits</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
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
                        <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
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
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic13.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
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
                        <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
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
                        <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
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
                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
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
    </div>
";
        
        $__internal_7a77ea741f6e460943147190496d6c0b284b1764132d58133fe19303bcd744ca->leave($__internal_7a77ea741f6e460943147190496d6c0b284b1764132d58133fe19303bcd744ca_prof);

        
        $__internal_3d83f7f3924b9c50db977c524a09ee2421053ad4ba3844db200abc7356660e5f->leave($__internal_3d83f7f3924b9c50db977c524a09ee2421053ad4ba3844db200abc7356660e5f_prof);

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
        return array (  213 => 128,  193 => 111,  173 => 94,  149 => 73,  129 => 56,  109 => 39,  101 => 33,  96 => 29,  82 => 21,  77 => 19,  65 => 12,  59 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    {# dev-haifa#}
    <h3 class=\"m_1\">Les nouveaux produits</h3>
    <div class=\"content_grid\">
        {% for annonce in annonces %}
            <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
                <a href=\"\">
                    <div class=\"inner_content clearfix\">
                        <div class=\"product_image\">
                            <img  href=\"{{ path('client_annonces_show', { 'id': annonce.id }) }}\" src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>


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

        <div class=\"clearfix\"></div>
    </div>
    {# dev-haifa#}
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
    </div>
{% endblock %}
", "FrontBundle:default:index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/default/index.html.twig");
    }
}

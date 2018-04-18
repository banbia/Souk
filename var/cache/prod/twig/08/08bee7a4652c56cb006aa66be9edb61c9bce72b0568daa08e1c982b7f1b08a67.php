<?php

/* FrontBundle:default:index.html.twig */
class __TwigTemplate_832798cfc6aecd7ed13deaad058bc5d2889a285f1e9a98d29675ebcc8b9bf489 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class=\"m_1\">New Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2300.00</span>
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
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1500.00</span>
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
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic3.jpg"), "html", null, true);
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
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1700.00</span>
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$800.00</span>
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$199.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <h3 class=\"m_2\">Top Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 119
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
        // line 136
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
        // line 153
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
        // line 174
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
        // line 191
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
        // line 208
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
        return array (  270 => 208,  250 => 191,  230 => 174,  206 => 153,  186 => 136,  166 => 119,  142 => 98,  122 => 81,  102 => 64,  79 => 44,  59 => 27,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:default:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/default/index.html.twig");
    }
}

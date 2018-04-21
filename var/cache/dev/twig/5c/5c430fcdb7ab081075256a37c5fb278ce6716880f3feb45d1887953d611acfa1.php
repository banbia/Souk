<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_1849b594130573f3772beeb0aefb52e456823abfb243db1e28d0e5eabbd80bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'formulaire' => array($this, 'block_formulaire'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87de23ce74203257c412a3844052baecd329573ba496537b7040b099397783f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87de23ce74203257c412a3844052baecd329573ba496537b7040b099397783f5->enter($__internal_87de23ce74203257c412a3844052baecd329573ba496537b7040b099397783f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_8a23e858e974ec6df55dae68cddd107cb0e81f5c24a4d3eda2b1c07be0792a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a23e858e974ec6df55dae68cddd107cb0e81f5c24a4d3eda2b1c07be0792a40->enter($__internal_8a23e858e974ec6df55dae68cddd107cb0e81f5c24a4d3eda2b1c07be0792a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>Souk El Medina</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Luxury Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/simpleCart.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme files -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_safaBoufares.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <!--//webfont-->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 24
        $this->displayBlock('style', $context, $blocks);
        // line 27
        echo "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"header-top\">
            <div class=\"logo\">
                <a href=\"\"><h6>Souk El Medina</h6></a>
            </div>
            <div class=\"header_right\">
                <div class=\"member\">
                    <div class=\"dropdown\">
                        ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "                        <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">

                            <li >
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-address-card-o\"></i>  Profil</a>

                            </li>
                            <li >
                                <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i>
                                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                        ";
        } else {
            // line 58
            echo "                            <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    Espace Membres </span>
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">

                                <li >
                                    <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"> <i class=\"fa fa-address-card\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li >
                                    <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\"></i>  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            </ul>
                        ";
        }
        // line 70
        echo "

                    </div>

                </div>
                <div>

                </div>
                <div class=\"lang_list\">

                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"banner_wrap\">
            <div class=\"bannertop_box\">


            </div>
            <div class=\"banner_right\">
                <h1>Welcome to Souk ElMedina <br></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <a href=\"#\" class=\"banner_btn\">Buy Now</a>
            </div>
            <div class='clearfix'></div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"content_box\">
        <div class=\"container\">
            <div class=\"row\">

                ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "                ";
        $this->displayBlock('formulaire', $context, $blocks);
        // line 108
        echo "            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"brands\">
            <ul class=\"brand_icons\">
                <li><img src='";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon1.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon2.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon3.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon4.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
            </ul>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"instagram_top\">
            <div class=\"instagram text-center\">
                <h3>Our Collections</h3>
            </div>
            <ul class=\"instagram_grid\">
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <div class=\"clearfix\"></div>
                <div id=\"small-dialog1\" class=\"mfp-hide\">
                    <div class=\"pop_up\">
                        <h4>A Sample Photo Stream</h4>
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i_zoom.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                </div>
            </ul>
        </div>
        <ul class=\"footer_social\">
            <li><a href=\"#\"><i class=\"tw\"> </i> </a></li>
            <li><a href=\"#\"> <i class=\"fb\"> </i> </a></li>
            <li><a href=\"#\"><i class=\"pin\"> </i> </a></li>
            <div class=\"clearfix\"></div>
        </ul>
    </div>
</div>
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"footer-grid\">
            <h3>Category</h3>
            <ul class=\"list1\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"about.html\">About us</a></li>
                <li><a href=\"about.html\">Eshop</a></li>
                <li><a href=\"about.html\">Features</a></li>
                <li><a href=\"about.html\">New Collections</a></li>
                <li><a href=\"typo.html\">Typo</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Account</h3>
            <ul class=\"list1\">
                <li><a href=\"login.html\">Your Account</a></li>
                <li><a href=\"contact.html\">Personal information</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
                <li><a href=\"#\">Discount</a></li>
                <li><a href=\"checkout.html\">Orders history</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Support</h3>
            <ul class=\"list1\">
                <li><a href=\"contact.html\">Site Map</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
                <li><a href=\"about.html\">Advanced Search</a></li>
                <li><a href=\"about.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Contact Us</a></li>
                <li><a href=\"contact.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Newsletter</h3>
            <p class=\"footer_desc\">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
            <div class=\"search_footer\">
                <input type=\"text\" class=\"text\" value=\"Your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Your Email';}\">
                <input type=\"submit\" value=\"Subscribe\">
            </div>
            <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/payment.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2018 </p>
        </div>
    </div>
</div>

";
        // line 206
        $this->displayBlock('js', $context, $blocks);
        // line 208
        echo "</body>
</html>";
        
        $__internal_87de23ce74203257c412a3844052baecd329573ba496537b7040b099397783f5->leave($__internal_87de23ce74203257c412a3844052baecd329573ba496537b7040b099397783f5_prof);

        
        $__internal_8a23e858e974ec6df55dae68cddd107cb0e81f5c24a4d3eda2b1c07be0792a40->leave($__internal_8a23e858e974ec6df55dae68cddd107cb0e81f5c24a4d3eda2b1c07be0792a40_prof);

    }

    // line 24
    public function block_style($context, array $blocks = array())
    {
        $__internal_295a1883a810d899c22034ec61e17de753678b09dac646b2e7ddecfe969bd543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295a1883a810d899c22034ec61e17de753678b09dac646b2e7ddecfe969bd543->enter($__internal_295a1883a810d899c22034ec61e17de753678b09dac646b2e7ddecfe969bd543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_16cabd398cf972fcfdf14b3f0f087d8f2de8fd9385d51f6b2b3498dc38367495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cabd398cf972fcfdf14b3f0f087d8f2de8fd9385d51f6b2b3498dc38367495->enter($__internal_16cabd398cf972fcfdf14b3f0f087d8f2de8fd9385d51f6b2b3498dc38367495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 25
        echo "
    ";
        
        $__internal_16cabd398cf972fcfdf14b3f0f087d8f2de8fd9385d51f6b2b3498dc38367495->leave($__internal_16cabd398cf972fcfdf14b3f0f087d8f2de8fd9385d51f6b2b3498dc38367495_prof);

        
        $__internal_295a1883a810d899c22034ec61e17de753678b09dac646b2e7ddecfe969bd543->leave($__internal_295a1883a810d899c22034ec61e17de753678b09dac646b2e7ddecfe969bd543_prof);

    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        $__internal_c711d891b7286cc4c43912faf7d8df10fdf791661ac8680d012bbf50ca9b3e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c711d891b7286cc4c43912faf7d8df10fdf791661ac8680d012bbf50ca9b3e7a->enter($__internal_c711d891b7286cc4c43912faf7d8df10fdf791661ac8680d012bbf50ca9b3e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee32e8fe986329b84943efc982bde1927a76e8ec6c0b0459b854815d14417bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee32e8fe986329b84943efc982bde1927a76e8ec6c0b0459b854815d14417bdd->enter($__internal_ee32e8fe986329b84943efc982bde1927a76e8ec6c0b0459b854815d14417bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "                ";
        
        $__internal_ee32e8fe986329b84943efc982bde1927a76e8ec6c0b0459b854815d14417bdd->leave($__internal_ee32e8fe986329b84943efc982bde1927a76e8ec6c0b0459b854815d14417bdd_prof);

        
        $__internal_c711d891b7286cc4c43912faf7d8df10fdf791661ac8680d012bbf50ca9b3e7a->leave($__internal_c711d891b7286cc4c43912faf7d8df10fdf791661ac8680d012bbf50ca9b3e7a_prof);

    }

    // line 106
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_8f1ba2f1e8c8d6d5637dc2f3dc7197ced14a1de6b8cfa4494290e3f975fe5335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1ba2f1e8c8d6d5637dc2f3dc7197ced14a1de6b8cfa4494290e3f975fe5335->enter($__internal_8f1ba2f1e8c8d6d5637dc2f3dc7197ced14a1de6b8cfa4494290e3f975fe5335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_b726c1b8428ec13cfeaee5c9d63a853d17d5437b0fdb672c1b54603a997c54de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b726c1b8428ec13cfeaee5c9d63a853d17d5437b0fdb672c1b54603a997c54de->enter($__internal_b726c1b8428ec13cfeaee5c9d63a853d17d5437b0fdb672c1b54603a997c54de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 107
        echo "                ";
        
        $__internal_b726c1b8428ec13cfeaee5c9d63a853d17d5437b0fdb672c1b54603a997c54de->leave($__internal_b726c1b8428ec13cfeaee5c9d63a853d17d5437b0fdb672c1b54603a997c54de_prof);

        
        $__internal_8f1ba2f1e8c8d6d5637dc2f3dc7197ced14a1de6b8cfa4494290e3f975fe5335->leave($__internal_8f1ba2f1e8c8d6d5637dc2f3dc7197ced14a1de6b8cfa4494290e3f975fe5335_prof);

    }

    // line 206
    public function block_js($context, array $blocks = array())
    {
        $__internal_6047ddec1fe6f550c164c212d5b38de0c9574b850d25cf3d6ef398124ebabb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6047ddec1fe6f550c164c212d5b38de0c9574b850d25cf3d6ef398124ebabb06->enter($__internal_6047ddec1fe6f550c164c212d5b38de0c9574b850d25cf3d6ef398124ebabb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_cc6fb6702c60c248c3f50ec4db3e86bfb1e4071ce40af073e2874afe1d16c0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6fb6702c60c248c3f50ec4db3e86bfb1e4071ce40af073e2874afe1d16c0eb->enter($__internal_cc6fb6702c60c248c3f50ec4db3e86bfb1e4071ce40af073e2874afe1d16c0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_cc6fb6702c60c248c3f50ec4db3e86bfb1e4071ce40af073e2874afe1d16c0eb->leave($__internal_cc6fb6702c60c248c3f50ec4db3e86bfb1e4071ce40af073e2874afe1d16c0eb_prof);

        
        $__internal_6047ddec1fe6f550c164c212d5b38de0c9574b850d25cf3d6ef398124ebabb06->leave($__internal_6047ddec1fe6f550c164c212d5b38de0c9574b850d25cf3d6ef398124ebabb06_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 206,  386 => 107,  377 => 106,  367 => 105,  358 => 104,  347 => 25,  338 => 24,  327 => 208,  325 => 206,  309 => 193,  249 => 136,  241 => 131,  237 => 130,  233 => 129,  229 => 128,  225 => 127,  212 => 117,  208 => 116,  204 => 115,  200 => 114,  192 => 108,  189 => 106,  187 => 104,  151 => 70,  142 => 66,  134 => 63,  127 => 58,  119 => 53,  115 => 52,  108 => 48,  99 => 43,  97 => 42,  80 => 27,  78 => 24,  74 => 23,  70 => 22,  65 => 20,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>
    <title>Souk El Medina</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Luxury Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"{{ asset('bundles/front/css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"{{ asset('bundles/front/js/simpleCart.min.js') }}\"> </script>
    <script src=\"{{ asset('bundles/front/js/jquery.min.js') }}\"></script>
    <!-- Custom Theme files -->
    <link href=\"{{ asset('bundles/front/css/style.css') }}\" rel='stylesheet' type='text/css' />
    <link href=\"{{ asset('bundles/front/css/style_safaBoufares.css') }}\" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <!--//webfont-->
    <script src=\"{{ asset('bundles/front/js/jquery.easydropdown.js') }}\"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src=\"{{ asset('bundles/front/js/jquery.magnific-popup.js') }}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('bundles/front/css/magnific-popup.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    {% block style %}

    {% endblock style %}

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"header-top\">
            <div class=\"logo\">
                <a href=\"\"><h6>Souk El Medina</h6></a>
            </div>
            <div class=\"header_right\">
                <div class=\"member\">
                    <div class=\"dropdown\">
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    {{ app.user.username }} </span>
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">

                            <li >
                                <a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"fa fa-address-card-o\"></i>  Profil</a>

                            </li>
                            <li >
                                <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i>
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        </ul>
                        {% else %}
                            <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    Espace Membres </span>
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">

                                <li >
                                    <a href=\"{{ path('fos_user_registration_register') }}\"> <i class=\"fa fa-address-card\"></i> {{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>
                                </li>
                                <li >
                                    <a href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-sign-in\"></i>  {{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                                </li>
                            </ul>
                        {% endif %}


                    </div>

                </div>
                <div>

                </div>
                <div class=\"lang_list\">

                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"banner_wrap\">
            <div class=\"bannertop_box\">


            </div>
            <div class=\"banner_right\">
                <h1>Welcome to Souk ElMedina <br></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <a href=\"#\" class=\"banner_btn\">Buy Now</a>
            </div>
            <div class='clearfix'></div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"content_box\">
        <div class=\"container\">
            <div class=\"row\">

                {% block body %}
                {% endblock body %}
                {% block formulaire %}
                {% endblock formulaire %}
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"brands\">
            <ul class=\"brand_icons\">
                <li><img src='{{ asset('bundles/front/images/icon1.png') }}' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='{{ asset('bundles/front/images/icon2.png') }}' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='{{ asset('bundles/front/images/icon3.png') }}' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='{{ asset('bundles/front/images/icon4.png') }}' class=\"img-responsive\" alt=\"\"/></li>
            </ul>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"instagram_top\">
            <div class=\"instagram text-center\">
                <h3>Our Collections</h3>
            </div>
            <ul class=\"instagram_grid\">
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i1.jpg') }}\" class=\"img-responsive\"alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i2.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i3.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i4.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i5.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
                <div class=\"clearfix\"></div>
                <div id=\"small-dialog1\" class=\"mfp-hide\">
                    <div class=\"pop_up\">
                        <h4>A Sample Photo Stream</h4>
                        <img src=\"{{ asset('bundles/front/images/i_zoom.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                </div>
            </ul>
        </div>
        <ul class=\"footer_social\">
            <li><a href=\"#\"><i class=\"tw\"> </i> </a></li>
            <li><a href=\"#\"> <i class=\"fb\"> </i> </a></li>
            <li><a href=\"#\"><i class=\"pin\"> </i> </a></li>
            <div class=\"clearfix\"></div>
        </ul>
    </div>
</div>
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"footer-grid\">
            <h3>Category</h3>
            <ul class=\"list1\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"about.html\">About us</a></li>
                <li><a href=\"about.html\">Eshop</a></li>
                <li><a href=\"about.html\">Features</a></li>
                <li><a href=\"about.html\">New Collections</a></li>
                <li><a href=\"typo.html\">Typo</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Account</h3>
            <ul class=\"list1\">
                <li><a href=\"login.html\">Your Account</a></li>
                <li><a href=\"contact.html\">Personal information</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
                <li><a href=\"#\">Discount</a></li>
                <li><a href=\"checkout.html\">Orders history</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Support</h3>
            <ul class=\"list1\">
                <li><a href=\"contact.html\">Site Map</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
                <li><a href=\"about.html\">Advanced Search</a></li>
                <li><a href=\"about.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Contact Us</a></li>
                <li><a href=\"contact.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Newsletter</h3>
            <p class=\"footer_desc\">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
            <div class=\"search_footer\">
                <input type=\"text\" class=\"text\" value=\"Your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Your Email';}\">
                <input type=\"submit\" value=\"Subscribe\">
            </div>
            <img src=\"{{ asset('bundles/front/images/payment.png') }}\" class=\"img-responsive\" alt=\"\"/>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2018 </p>
        </div>
    </div>
</div>

{% block js %}
{% endblock js %}
</body>
</html>", "FrontBundle::layout.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/layout.html.twig");
    }
}

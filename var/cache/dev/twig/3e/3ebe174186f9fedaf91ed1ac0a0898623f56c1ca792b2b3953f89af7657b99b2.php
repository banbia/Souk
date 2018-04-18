<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_4fdde9746cda82c1fa44f8b4e2d2fa68674452e6e38ae1fe8319a9945bbf0ead extends Twig_Template
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
        $__internal_68906008dba3cff1352eb104829b085f28445e1059fa49813d9e998472698aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68906008dba3cff1352eb104829b085f28445e1059fa49813d9e998472698aac->enter($__internal_68906008dba3cff1352eb104829b085f28445e1059fa49813d9e998472698aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_717e9d9b30107b2b33f360905353582fb3df7e07d588282fc24a92ddb8c2c958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717e9d9b30107b2b33f360905353582fb3df7e07d588282fc24a92ddb8c2c958->enter($__internal_717e9d9b30107b2b33f360905353582fb3df7e07d588282fc24a92ddb8c2c958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
        // line 26
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
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                        <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">

                            <li >
                                <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-address-card-o\"></i>  Profil</a>

                            </li>
                            <li >
                                <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i>
                                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                        ";
        } else {
            // line 57
            echo "                            <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    Espace Membres </span>
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">

                                <li >
                                    <a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"> <i class=\"fa fa-address-card\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li >
                                    <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\"></i>  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            </ul>
                        ";
        }
        // line 69
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
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "                ";
        $this->displayBlock('formulaire', $context, $blocks);
        // line 107
        echo "            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"brands\">
            <ul class=\"brand_icons\">
                <li><img src='";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon1.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon2.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon3.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 116
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
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <div class=\"clearfix\"></div>
                <div id=\"small-dialog1\" class=\"mfp-hide\">
                    <div class=\"pop_up\">
                        <h4>A Sample Photo Stream</h4>
                        <img src=\"";
        // line 135
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
        // line 192
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
        // line 205
        $this->displayBlock('js', $context, $blocks);
        // line 207
        echo "</body>
</html>";
        
        $__internal_68906008dba3cff1352eb104829b085f28445e1059fa49813d9e998472698aac->leave($__internal_68906008dba3cff1352eb104829b085f28445e1059fa49813d9e998472698aac_prof);

        
        $__internal_717e9d9b30107b2b33f360905353582fb3df7e07d588282fc24a92ddb8c2c958->leave($__internal_717e9d9b30107b2b33f360905353582fb3df7e07d588282fc24a92ddb8c2c958_prof);

    }

    // line 24
    public function block_style($context, array $blocks = array())
    {
        $__internal_1f6ab230c5d9ff0a903fa7b9df96f80a86d37285d9c5db23f40406435577eef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6ab230c5d9ff0a903fa7b9df96f80a86d37285d9c5db23f40406435577eef3->enter($__internal_1f6ab230c5d9ff0a903fa7b9df96f80a86d37285d9c5db23f40406435577eef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ea08acc2e484b61651fecd2f414be2f15f8c8dffc6ec8a3350373710c4fb72c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea08acc2e484b61651fecd2f414be2f15f8c8dffc6ec8a3350373710c4fb72c5->enter($__internal_ea08acc2e484b61651fecd2f414be2f15f8c8dffc6ec8a3350373710c4fb72c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 25
        echo "    ";
        
        $__internal_ea08acc2e484b61651fecd2f414be2f15f8c8dffc6ec8a3350373710c4fb72c5->leave($__internal_ea08acc2e484b61651fecd2f414be2f15f8c8dffc6ec8a3350373710c4fb72c5_prof);

        
        $__internal_1f6ab230c5d9ff0a903fa7b9df96f80a86d37285d9c5db23f40406435577eef3->leave($__internal_1f6ab230c5d9ff0a903fa7b9df96f80a86d37285d9c5db23f40406435577eef3_prof);

    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        $__internal_c142c3ddb9d9f9574bb051094af6d696d7f4e59977794e3812f531c1047f3a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c142c3ddb9d9f9574bb051094af6d696d7f4e59977794e3812f531c1047f3a42->enter($__internal_c142c3ddb9d9f9574bb051094af6d696d7f4e59977794e3812f531c1047f3a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2e5668768a8ccb93610688ddc58aa21f73ae6e2b809a383841068e601a8e470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e5668768a8ccb93610688ddc58aa21f73ae6e2b809a383841068e601a8e470->enter($__internal_f2e5668768a8ccb93610688ddc58aa21f73ae6e2b809a383841068e601a8e470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "                ";
        
        $__internal_f2e5668768a8ccb93610688ddc58aa21f73ae6e2b809a383841068e601a8e470->leave($__internal_f2e5668768a8ccb93610688ddc58aa21f73ae6e2b809a383841068e601a8e470_prof);

        
        $__internal_c142c3ddb9d9f9574bb051094af6d696d7f4e59977794e3812f531c1047f3a42->leave($__internal_c142c3ddb9d9f9574bb051094af6d696d7f4e59977794e3812f531c1047f3a42_prof);

    }

    // line 105
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_82c7b499654a7e78826392d6a8ecfe408b2d63abed8489d996573a2af85a9ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c7b499654a7e78826392d6a8ecfe408b2d63abed8489d996573a2af85a9ee1->enter($__internal_82c7b499654a7e78826392d6a8ecfe408b2d63abed8489d996573a2af85a9ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_3f6098f1a29950366c84efd9e9bd517f13e4ff3c4009aa9a3ca3e52d180e566e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6098f1a29950366c84efd9e9bd517f13e4ff3c4009aa9a3ca3e52d180e566e->enter($__internal_3f6098f1a29950366c84efd9e9bd517f13e4ff3c4009aa9a3ca3e52d180e566e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 106
        echo "                ";
        
        $__internal_3f6098f1a29950366c84efd9e9bd517f13e4ff3c4009aa9a3ca3e52d180e566e->leave($__internal_3f6098f1a29950366c84efd9e9bd517f13e4ff3c4009aa9a3ca3e52d180e566e_prof);

        
        $__internal_82c7b499654a7e78826392d6a8ecfe408b2d63abed8489d996573a2af85a9ee1->leave($__internal_82c7b499654a7e78826392d6a8ecfe408b2d63abed8489d996573a2af85a9ee1_prof);

    }

    // line 205
    public function block_js($context, array $blocks = array())
    {
        $__internal_95990e3cd7b9440f2921e15b90b670c1bd1317ed2b8bb6000c3fb9a299139de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95990e3cd7b9440f2921e15b90b670c1bd1317ed2b8bb6000c3fb9a299139de0->enter($__internal_95990e3cd7b9440f2921e15b90b670c1bd1317ed2b8bb6000c3fb9a299139de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_c780c8994282f9dbb254248ee33e1c228e3080c22a65862143af1475d169d5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c780c8994282f9dbb254248ee33e1c228e3080c22a65862143af1475d169d5a8->enter($__internal_c780c8994282f9dbb254248ee33e1c228e3080c22a65862143af1475d169d5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_c780c8994282f9dbb254248ee33e1c228e3080c22a65862143af1475d169d5a8->leave($__internal_c780c8994282f9dbb254248ee33e1c228e3080c22a65862143af1475d169d5a8_prof);

        
        $__internal_95990e3cd7b9440f2921e15b90b670c1bd1317ed2b8bb6000c3fb9a299139de0->leave($__internal_95990e3cd7b9440f2921e15b90b670c1bd1317ed2b8bb6000c3fb9a299139de0_prof);

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
        return array (  395 => 205,  385 => 106,  376 => 105,  366 => 104,  357 => 103,  347 => 25,  338 => 24,  327 => 207,  325 => 205,  309 => 192,  249 => 135,  241 => 130,  237 => 129,  233 => 128,  229 => 127,  225 => 126,  212 => 116,  208 => 115,  204 => 114,  200 => 113,  192 => 107,  189 => 105,  187 => 103,  151 => 69,  142 => 65,  134 => 62,  127 => 57,  119 => 52,  115 => 51,  108 => 47,  99 => 42,  97 => 41,  80 => 26,  78 => 24,  74 => 23,  70 => 22,  65 => 20,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
</html>", "FrontBundle::layout.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/layout.html.twig");
    }
}

<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_2ca274c0345855b85146bc97bac7834c177fd7b546ff09bb94ae1fc59535f5fa extends Twig_Template
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
<<<<<<< HEAD
        $__internal_2365c79e9e22b1f0fc1e79b461d1a568299654f9c723034044e8ce706472f853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2365c79e9e22b1f0fc1e79b461d1a568299654f9c723034044e8ce706472f853->enter($__internal_2365c79e9e22b1f0fc1e79b461d1a568299654f9c723034044e8ce706472f853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_4953f1b8fed2f971f8d2bcaa19126a9710250f02fd937b8a616506a5f0ae8ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4953f1b8fed2f971f8d2bcaa19126a9710250f02fd937b8a616506a5f0ae8ea6->enter($__internal_4953f1b8fed2f971f8d2bcaa19126a9710250f02fd937b8a616506a5f0ae8ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));
=======
        $__internal_e39a53a374f3d51ad970f83868c91b2cb885e27f22fb3b448a73fee9be8686e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39a53a374f3d51ad970f83868c91b2cb885e27f22fb3b448a73fee9be8686e7->enter($__internal_e39a53a374f3d51ad970f83868c91b2cb885e27f22fb3b448a73fee9be8686e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_99fcf0b4350715f5c610ad13438f5850dfc096aebbc7d323e7d45ff5e5dda43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fcf0b4350715f5c610ad13438f5850dfc096aebbc7d323e7d45ff5e5dda43a->enter($__internal_99fcf0b4350715f5c610ad13438f5850dfc096aebbc7d323e7d45ff5e5dda43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646

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
<<<<<<< HEAD
        // line 27
=======
        // line 26
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
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
<<<<<<< HEAD
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
=======
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
            echo "                        <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">

                            <li >
                                <a href=\"";
<<<<<<< HEAD
            // line 48
=======
            // line 47
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-address-card-o\"></i>  Profil</a>

                            </li>
                            <li >
                                <a href=\"";
<<<<<<< HEAD
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i>
                                    ";
            // line 53
=======
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i>
                                    ";
            // line 52
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                        ";
        } else {
<<<<<<< HEAD
            // line 58
=======
            // line 57
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
            echo "                            <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    Espace Membres </span>
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">

                                <li >
                                    <a href=\"";
<<<<<<< HEAD
            // line 63
=======
            // line 62
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"> <i class=\"fa fa-address-card\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li >
                                    <a href=\"";
<<<<<<< HEAD
            // line 66
=======
            // line 65
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\"></i>  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            </ul>
                        ";
        }
<<<<<<< HEAD
        // line 70
=======
        // line 69
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
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
<<<<<<< HEAD
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "                ";
        $this->displayBlock('formulaire', $context, $blocks);
        // line 108
=======
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "                ";
        $this->displayBlock('formulaire', $context, $blocks);
        // line 107
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
        echo "            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"brands\">
            <ul class=\"brand_icons\">
                <li><img src='";
<<<<<<< HEAD
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
=======
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
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
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
<<<<<<< HEAD
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
=======
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
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <div class=\"clearfix\"></div>
                <div id=\"small-dialog1\" class=\"mfp-hide\">
                    <div class=\"pop_up\">
                        <h4>A Sample Photo Stream</h4>
                        <img src=\"";
<<<<<<< HEAD
        // line 136
=======
        // line 135
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
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
<<<<<<< HEAD
        // line 193
=======
        // line 192
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
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
<<<<<<< HEAD
        // line 206
        $this->displayBlock('js', $context, $blocks);
        // line 208
        echo "</body>
</html>";
        
        $__internal_2365c79e9e22b1f0fc1e79b461d1a568299654f9c723034044e8ce706472f853->leave($__internal_2365c79e9e22b1f0fc1e79b461d1a568299654f9c723034044e8ce706472f853_prof);

        
        $__internal_4953f1b8fed2f971f8d2bcaa19126a9710250f02fd937b8a616506a5f0ae8ea6->leave($__internal_4953f1b8fed2f971f8d2bcaa19126a9710250f02fd937b8a616506a5f0ae8ea6_prof);
=======
        // line 205
        $this->displayBlock('js', $context, $blocks);
        // line 207
        echo "</body>
</html>";
        
        $__internal_e39a53a374f3d51ad970f83868c91b2cb885e27f22fb3b448a73fee9be8686e7->leave($__internal_e39a53a374f3d51ad970f83868c91b2cb885e27f22fb3b448a73fee9be8686e7_prof);

        
        $__internal_99fcf0b4350715f5c610ad13438f5850dfc096aebbc7d323e7d45ff5e5dda43a->leave($__internal_99fcf0b4350715f5c610ad13438f5850dfc096aebbc7d323e7d45ff5e5dda43a_prof);
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646

    }

    // line 24
    public function block_style($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_681778ce06799030f0d6c17118b9931129522430c83f108e4023c2491d49a326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681778ce06799030f0d6c17118b9931129522430c83f108e4023c2491d49a326->enter($__internal_681778ce06799030f0d6c17118b9931129522430c83f108e4023c2491d49a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_0754580a83eac5219bf4338efe962dd7b0505762c98b83f3e96cf580bcd0f9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0754580a83eac5219bf4338efe962dd7b0505762c98b83f3e96cf580bcd0f9b2->enter($__internal_0754580a83eac5219bf4338efe962dd7b0505762c98b83f3e96cf580bcd0f9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 25
        echo "
    ";
        
        $__internal_0754580a83eac5219bf4338efe962dd7b0505762c98b83f3e96cf580bcd0f9b2->leave($__internal_0754580a83eac5219bf4338efe962dd7b0505762c98b83f3e96cf580bcd0f9b2_prof);

        
        $__internal_681778ce06799030f0d6c17118b9931129522430c83f108e4023c2491d49a326->leave($__internal_681778ce06799030f0d6c17118b9931129522430c83f108e4023c2491d49a326_prof);

    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        $__internal_a39bb3c037ca53e55052c1784fc0ba8c1ac78ffa4a9d10900db1dd44530eb343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39bb3c037ca53e55052c1784fc0ba8c1ac78ffa4a9d10900db1dd44530eb343->enter($__internal_a39bb3c037ca53e55052c1784fc0ba8c1ac78ffa4a9d10900db1dd44530eb343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_451c80669745a0d44f711bf3066b7117e9718f9c22252a5a4a2648a61f2c49fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451c80669745a0d44f711bf3066b7117e9718f9c22252a5a4a2648a61f2c49fd->enter($__internal_451c80669745a0d44f711bf3066b7117e9718f9c22252a5a4a2648a61f2c49fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "                ";
        
        $__internal_451c80669745a0d44f711bf3066b7117e9718f9c22252a5a4a2648a61f2c49fd->leave($__internal_451c80669745a0d44f711bf3066b7117e9718f9c22252a5a4a2648a61f2c49fd_prof);

        
        $__internal_a39bb3c037ca53e55052c1784fc0ba8c1ac78ffa4a9d10900db1dd44530eb343->leave($__internal_a39bb3c037ca53e55052c1784fc0ba8c1ac78ffa4a9d10900db1dd44530eb343_prof);

    }

    // line 106
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_177b26fc9519d536f7ffb178b682e654e884d80dbef2893113a9d3c4aa312967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177b26fc9519d536f7ffb178b682e654e884d80dbef2893113a9d3c4aa312967->enter($__internal_177b26fc9519d536f7ffb178b682e654e884d80dbef2893113a9d3c4aa312967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_434c2ad8e85cfa43fd754b5ee692d225374eca0a7db84dc369eeaff606ac3b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434c2ad8e85cfa43fd754b5ee692d225374eca0a7db84dc369eeaff606ac3b31->enter($__internal_434c2ad8e85cfa43fd754b5ee692d225374eca0a7db84dc369eeaff606ac3b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 107
        echo "                ";
        
        $__internal_434c2ad8e85cfa43fd754b5ee692d225374eca0a7db84dc369eeaff606ac3b31->leave($__internal_434c2ad8e85cfa43fd754b5ee692d225374eca0a7db84dc369eeaff606ac3b31_prof);

        
        $__internal_177b26fc9519d536f7ffb178b682e654e884d80dbef2893113a9d3c4aa312967->leave($__internal_177b26fc9519d536f7ffb178b682e654e884d80dbef2893113a9d3c4aa312967_prof);

    }

    // line 206
    public function block_js($context, array $blocks = array())
    {
        $__internal_5b1be44d58b9612c65176608e2301860299aeffdc1fe112fe6647ba18064fc1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1be44d58b9612c65176608e2301860299aeffdc1fe112fe6647ba18064fc1f->enter($__internal_5b1be44d58b9612c65176608e2301860299aeffdc1fe112fe6647ba18064fc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_37dbdad9f0556de637338fb9a656dc1fe19f32dde9ab35842f857d48390018e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dbdad9f0556de637338fb9a656dc1fe19f32dde9ab35842f857d48390018e5->enter($__internal_37dbdad9f0556de637338fb9a656dc1fe19f32dde9ab35842f857d48390018e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_37dbdad9f0556de637338fb9a656dc1fe19f32dde9ab35842f857d48390018e5->leave($__internal_37dbdad9f0556de637338fb9a656dc1fe19f32dde9ab35842f857d48390018e5_prof);

        
        $__internal_5b1be44d58b9612c65176608e2301860299aeffdc1fe112fe6647ba18064fc1f->leave($__internal_5b1be44d58b9612c65176608e2301860299aeffdc1fe112fe6647ba18064fc1f_prof);
=======
        $__internal_4152bf9b4b48b990252dbe9a6e2dba2dc36c02e08fb540bc982313bd3d784640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4152bf9b4b48b990252dbe9a6e2dba2dc36c02e08fb540bc982313bd3d784640->enter($__internal_4152bf9b4b48b990252dbe9a6e2dba2dc36c02e08fb540bc982313bd3d784640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_6876dbdec0b84b48cbe741e22592e00a502d2f4eed35fb270db88a486fc6965c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6876dbdec0b84b48cbe741e22592e00a502d2f4eed35fb270db88a486fc6965c->enter($__internal_6876dbdec0b84b48cbe741e22592e00a502d2f4eed35fb270db88a486fc6965c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 25
        echo "    ";
        
        $__internal_6876dbdec0b84b48cbe741e22592e00a502d2f4eed35fb270db88a486fc6965c->leave($__internal_6876dbdec0b84b48cbe741e22592e00a502d2f4eed35fb270db88a486fc6965c_prof);

        
        $__internal_4152bf9b4b48b990252dbe9a6e2dba2dc36c02e08fb540bc982313bd3d784640->leave($__internal_4152bf9b4b48b990252dbe9a6e2dba2dc36c02e08fb540bc982313bd3d784640_prof);

    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        $__internal_f27ed9e6885cb213759744f2544a5956a7c1804107b219f441c398af0a91cc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27ed9e6885cb213759744f2544a5956a7c1804107b219f441c398af0a91cc19->enter($__internal_f27ed9e6885cb213759744f2544a5956a7c1804107b219f441c398af0a91cc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_333679f1a4a5647145d8168a02f13072c9e6a7dff33b3fbaef7c9e23f61dde2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333679f1a4a5647145d8168a02f13072c9e6a7dff33b3fbaef7c9e23f61dde2c->enter($__internal_333679f1a4a5647145d8168a02f13072c9e6a7dff33b3fbaef7c9e23f61dde2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "                ";
        
        $__internal_333679f1a4a5647145d8168a02f13072c9e6a7dff33b3fbaef7c9e23f61dde2c->leave($__internal_333679f1a4a5647145d8168a02f13072c9e6a7dff33b3fbaef7c9e23f61dde2c_prof);

        
        $__internal_f27ed9e6885cb213759744f2544a5956a7c1804107b219f441c398af0a91cc19->leave($__internal_f27ed9e6885cb213759744f2544a5956a7c1804107b219f441c398af0a91cc19_prof);

    }

    // line 105
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_15488c771684eb73e72cd23f27eff7811e1dc10f6589b99f43d1bf60823c49ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15488c771684eb73e72cd23f27eff7811e1dc10f6589b99f43d1bf60823c49ed->enter($__internal_15488c771684eb73e72cd23f27eff7811e1dc10f6589b99f43d1bf60823c49ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_bda49a2ceb01316ca5e72d149fe79b18dd9ab43be2409169a6cf82193fd2cccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda49a2ceb01316ca5e72d149fe79b18dd9ab43be2409169a6cf82193fd2cccd->enter($__internal_bda49a2ceb01316ca5e72d149fe79b18dd9ab43be2409169a6cf82193fd2cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 106
        echo "                ";
        
        $__internal_bda49a2ceb01316ca5e72d149fe79b18dd9ab43be2409169a6cf82193fd2cccd->leave($__internal_bda49a2ceb01316ca5e72d149fe79b18dd9ab43be2409169a6cf82193fd2cccd_prof);

        
        $__internal_15488c771684eb73e72cd23f27eff7811e1dc10f6589b99f43d1bf60823c49ed->leave($__internal_15488c771684eb73e72cd23f27eff7811e1dc10f6589b99f43d1bf60823c49ed_prof);

    }

    // line 205
    public function block_js($context, array $blocks = array())
    {
        $__internal_490360d2563737b67cda23e7666c68a5cac727c364e9e25757c713bd464f7bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490360d2563737b67cda23e7666c68a5cac727c364e9e25757c713bd464f7bb5->enter($__internal_490360d2563737b67cda23e7666c68a5cac727c364e9e25757c713bd464f7bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_c2143b3b358244623c40a8dbfa290f3e40ec29841ff02e631a492b16f4b0804e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2143b3b358244623c40a8dbfa290f3e40ec29841ff02e631a492b16f4b0804e->enter($__internal_c2143b3b358244623c40a8dbfa290f3e40ec29841ff02e631a492b16f4b0804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_c2143b3b358244623c40a8dbfa290f3e40ec29841ff02e631a492b16f4b0804e->leave($__internal_c2143b3b358244623c40a8dbfa290f3e40ec29841ff02e631a492b16f4b0804e_prof);

        
        $__internal_490360d2563737b67cda23e7666c68a5cac727c364e9e25757c713bd464f7bb5->leave($__internal_490360d2563737b67cda23e7666c68a5cac727c364e9e25757c713bd464f7bb5_prof);
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646

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
<<<<<<< HEAD
        return array (  396 => 206,  386 => 107,  377 => 106,  367 => 105,  358 => 104,  347 => 25,  338 => 24,  327 => 208,  325 => 206,  309 => 193,  249 => 136,  241 => 131,  237 => 130,  233 => 129,  229 => 128,  225 => 127,  212 => 117,  208 => 116,  204 => 115,  200 => 114,  192 => 108,  189 => 106,  187 => 104,  151 => 70,  142 => 66,  134 => 63,  127 => 58,  119 => 53,  115 => 52,  108 => 48,  99 => 43,  97 => 42,  80 => 27,  78 => 24,  74 => 23,  70 => 22,  65 => 20,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
=======
        return array (  395 => 205,  385 => 106,  376 => 105,  366 => 104,  357 => 103,  347 => 25,  338 => 24,  327 => 207,  325 => 205,  309 => 192,  249 => 135,  241 => 130,  237 => 129,  233 => 128,  229 => 127,  225 => 126,  212 => 116,  208 => 115,  204 => 114,  200 => 113,  192 => 107,  189 => 105,  187 => 103,  151 => 69,  142 => 65,  134 => 62,  127 => 57,  119 => 52,  115 => 51,  108 => 47,  99 => 42,  97 => 41,  80 => 26,  78 => 24,  74 => 23,  70 => 22,  65 => 20,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
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
<<<<<<< HEAD

=======
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
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
<<<<<<< HEAD
</html>", "FrontBundle::layout.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/layout.html.twig");
=======
</html>", "FrontBundle::layout.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/layout.html.twig");
>>>>>>> 4ba455dae7cf86e7b86aaa319290c327594c8646
    }
}

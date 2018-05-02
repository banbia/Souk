<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_3835207d9d0bee8a21d99c013e1201b885b7b41cf25b02686dd31e5523d601d9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
                <a href=\"#\"><img width=\"200\" height=\"90\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/logo.png"), "html", null, true);
        echo "\"/></a></a>
            </div>
            <div class=\"menu\">
                <div class=\"toggle\"></div>
                <ul class=\"w3nav\">
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\" class=\"active\"> Accueil</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_index");
        echo "\"> Annonces</a></li>
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_annonces_index");
        echo "\"> Evennements</a></li>
                    ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
            echo "\">Mes Messages</a></li>
                        ";
            // line 47
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 48
                echo "
                            <li><a href=\"\">Mes Abonnements</a></li>
                        ";
            }
            // line 51
            echo "                    ";
        }
        // line 52
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\"> Réclamations</a></li>
                </ul>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"header_right\">
                <div class=\"clearfix\"> </div>

                <div class=\"member\">
                    <div class=\"dropdown\">
                        ";
        // line 61
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                        <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">

                            <li >
                                <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-address-card-o\"></i>  Profil</a>

                            </li>
                            <li >
                                <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i>
                                    ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                        ";
        } else {
            // line 77
            echo "                            <button class=\"btn-simple dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><span><i class=\"fa fa-user\"></i>    Espace Membres </span>
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">

                                <li >
                                    <a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"> <i class=\"fa fa-address-card\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li >
                                    <a href=\"";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\"></i>  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            </ul>
                        ";
        }
        // line 89
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
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "                ";
        $this->displayBlock('formulaire', $context, $blocks);
        // line 127
        echo "            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"brands\">
            <ul class=\"brand_icons\">
                <li><img src='";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon1.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon2.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon3.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 136
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
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <div class=\"clearfix\"></div>
                <div id=\"small-dialog1\" class=\"mfp-hide\">
                    <div class=\"pop_up\">
                        <h4>A Sample Photo Stream</h4>
                        <img src=\"";
        // line 155
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
        // line 212
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
        // line 225
        $this->displayBlock('js', $context, $blocks);
        // line 227
        echo "<script>
    \$('.toggle').on('click', function() {
        \$('.menu').toggleClass('open');
        \$('.w3nav').toggleClass('show-w3nav');
        \$('.w3nav a').toggleClass('show-w3nav-link');
        \$('.toggle').toggleClass('close');
    });
</script>
<!-- //menu js -->
<!-- start-smooth-scrolling -->
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event){
            event.preventDefault();

            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type=\"text/javascript\">
    \$(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- desoslide-JavaScript -->
<script>
    \$('#demo1_thumbs').desoSlide({
        main: {
            container: '#demo1_main_image',
            cssClass: 'img-responsive'
        },
        effect: 'sideFade',
        caption: true
    });
</script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 25
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 126
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  490 => 225,  480 => 126,  471 => 125,  461 => 124,  452 => 123,  441 => 25,  432 => 24,  372 => 227,  370 => 225,  354 => 212,  294 => 155,  286 => 150,  282 => 149,  278 => 148,  274 => 147,  270 => 146,  257 => 136,  253 => 135,  249 => 134,  245 => 133,  237 => 127,  234 => 125,  232 => 123,  196 => 89,  187 => 85,  179 => 82,  172 => 77,  164 => 72,  160 => 71,  153 => 67,  144 => 62,  142 => 61,  129 => 52,  126 => 51,  121 => 48,  119 => 47,  114 => 46,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  92 => 37,  80 => 27,  78 => 24,  74 => 23,  70 => 22,  65 => 20,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
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
                <a href=\"#\"><img width=\"200\" height=\"90\" src=\"{{ asset('bundles/front/images/logo.png') }}\"/></a></a>
            </div>
            <div class=\"menu\">
                <div class=\"toggle\"></div>
                <ul class=\"w3nav\">
                    <li><a href=\"{{ path('front_homepage') }}\" class=\"active\"> Accueil</a></li>
                    <li><a href=\"{{ path('evennements_index') }}\"> Annonces</a></li>
                    <li><a href=\"{{ path('client_annonces_index') }}\"> Evennements</a></li>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <li><a href=\"{{ path('fos_message_inbox') }}\">Mes Messages</a></li>
                        {% if is_granted('ROLE_COM') %}

                            <li><a href=\"\">Mes Abonnements</a></li>
                        {% endif %}
                    {% endif %}
                    <li><a href=\"{{ path('reclamations_index') }}\"> Réclamations</a></li>
                </ul>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"header_right\">
                <div class=\"clearfix\"> </div>

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
<script>
    \$('.toggle').on('click', function() {
        \$('.menu').toggleClass('open');
        \$('.w3nav').toggleClass('show-w3nav');
        \$('.w3nav a').toggleClass('show-w3nav-link');
        \$('.toggle').toggleClass('close');
    });
</script>
<!-- //menu js -->
<!-- start-smooth-scrolling -->
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event){
            event.preventDefault();

            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type=\"text/javascript\">
    \$(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- desoslide-JavaScript -->
<script>
    \$('#demo1_thumbs').desoSlide({
        main: {
            container: '#demo1_main_image',
            cssClass: 'img-responsive'
        },
        effect: 'sideFade',
        caption: true
    });
</script>

</body>
</html>", "FrontBundle::layout.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/layout.html.twig");
    }
}

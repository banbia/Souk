<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6b977d72c91f68b0357df22e38fc9a56c6adef025212cd7ec834bd88225df94f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70defb41b3eabe8e2bf3c6beb7b1ef7857cba05933afc80663bf3967c04c4c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70defb41b3eabe8e2bf3c6beb7b1ef7857cba05933afc80663bf3967c04c4c60->enter($__internal_70defb41b3eabe8e2bf3c6beb7b1ef7857cba05933afc80663bf3967c04c4c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7c2fffdd399c0242f2ba77c89f6ee168adb9bd7bffa2e342d9410a99d9aa3660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2fffdd399c0242f2ba77c89f6ee168adb9bd7bffa2e342d9410a99d9aa3660->enter($__internal_7c2fffdd399c0242f2ba77c89f6ee168adb9bd7bffa2e342d9410a99d9aa3660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>Souk ElMedina</title>
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
    <!-- Custom Theme files -->
    <!--//webfont-->
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


    <script>
        \$(document).ready(function() {
            \$('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"header-top\">
            <div class=\"logo\">
                <a href=\"\"><h6>Souk El Medina</h6></a>
            </div>
            <div class=\"header_right\">
                <div>
                    ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 55
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 57
        echo "                </div>
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
                <div class=\"col-md-2\">

                </div>

                <div class=\"col-md-10 box-form\">
                    ";
        // line 88
        $this->displayBlock('formulaire', $context, $blocks);
        // line 90
        echo "                </div>

            </div>
        </div>
    </div>

</div>
<div class=\"footer\">

</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2018 </p>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_70defb41b3eabe8e2bf3c6beb7b1ef7857cba05933afc80663bf3967c04c4c60->leave($__internal_70defb41b3eabe8e2bf3c6beb7b1ef7857cba05933afc80663bf3967c04c4c60_prof);

        
        $__internal_7c2fffdd399c0242f2ba77c89f6ee168adb9bd7bffa2e342d9410a99d9aa3660->leave($__internal_7c2fffdd399c0242f2ba77c89f6ee168adb9bd7bffa2e342d9410a99d9aa3660_prof);

    }

    // line 88
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_a05e0f0557f388771f47ee3805b9297e05aded5dd59ed6639e0760b22898e8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05e0f0557f388771f47ee3805b9297e05aded5dd59ed6639e0760b22898e8c3->enter($__internal_a05e0f0557f388771f47ee3805b9297e05aded5dd59ed6639e0760b22898e8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_c88e73a159a32b9468e19a6b3782f92df76d9c20c045a69f47f2813f615a019c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88e73a159a32b9468e19a6b3782f92df76d9c20c045a69f47f2813f615a019c->enter($__internal_c88e73a159a32b9468e19a6b3782f92df76d9c20c045a69f47f2813f615a019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 89
        echo "                    ";
        
        $__internal_c88e73a159a32b9468e19a6b3782f92df76d9c20c045a69f47f2813f615a019c->leave($__internal_c88e73a159a32b9468e19a6b3782f92df76d9c20c045a69f47f2813f615a019c_prof);

        
        $__internal_a05e0f0557f388771f47ee3805b9297e05aded5dd59ed6639e0760b22898e8c3->leave($__internal_a05e0f0557f388771f47ee3805b9297e05aded5dd59ed6639e0760b22898e8c3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 89,  186 => 88,  157 => 90,  155 => 88,  122 => 57,  114 => 55,  108 => 52,  104 => 51,  99 => 50,  97 => 49,  66 => 21,  62 => 20,  57 => 18,  51 => 15,  46 => 13,  42 => 12,  37 => 10,  26 => 1,);
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
    <title>Souk ElMedina</title>
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
    <!-- Custom Theme files -->
    <!--//webfont-->
    <script src=\"{{ asset('bundles/front/js/jquery.easydropdown.js') }}\"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src=\"{{ asset('bundles/front/js/jquery.magnific-popup.js') }}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('bundles/front/css/magnific-popup.css') }}\" rel=\"stylesheet\" type=\"text/css\">


    <script>
        \$(document).ready(function() {
            \$('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"header-top\">
            <div class=\"logo\">
                <a href=\"\"><h6>Souk El Medina</h6></a>
            </div>
            <div class=\"header_right\">
                <div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    {% endif %}
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
                <div class=\"col-md-2\">

                </div>

                <div class=\"col-md-10 box-form\">
                    {% block formulaire %}
                    {% endblock formulaire %}
                </div>

            </div>
        </div>
    </div>

</div>
<div class=\"footer\">

</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2018 </p>
        </div>
    </div>
</div>
</body>
</html>
", "@FOSUser/layout.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/layout.html.twig");
    }
}
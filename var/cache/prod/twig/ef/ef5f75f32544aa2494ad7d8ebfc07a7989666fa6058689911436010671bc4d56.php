<?php

/* BackBundle::panel.html.twig */
class __TwigTemplate_df43a32b39f058de454b0117781306a98cc68432e9dc8b23fb6720b14dd776b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <![endif]-->
    <title>Souk ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/admin/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- FONT AWESOME STYLE  -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/admin/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE  -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/admin/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class=\"navbar navbar-inverse set-radius-zero\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">

                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/admin/assets/img/logo.png"), "html", null, true);
        echo "\" />
                </a>

            </div>

            <div class=\"right-div\">
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-danger pull-right\">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class=\"menu-section\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-12\">
                    <div class=\"navbar-collapse collapse \">
                        <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"index.html\" class=\"menu-top-active\">Tableau de Bord</a></li>
                           
                            <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_index");
        echo "\">Abonnements</a></li>
                            <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" id=\"ddlmenuItem\" data-toggle=\"dropdown\">Paramétrages <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"ddlmenuItem\">
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_index");
        echo "\">Catégories</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_index");
        echo "\">Reclamations</a></li>
                             <li><a href=\"\">TABLES</a></li>
                            <li><a href=\"\">BLANK PAGE</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class=\"content-wrapper\">
         <div class=\"container\">
        <div class=\"row pad-botm\">
            <div class=\"col-md-12\">
                <h4 class=\"header-line\">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
                      
            <div class=\"row\">

              ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "             
            </div>
            

            
           

    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                   &copy; 2018 </a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/admin/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/admin/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/admin/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>
";
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "              ";
    }

    public function getTemplateName()
    {
        return "BackBundle::panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 85,  179 => 84,  170 => 113,  165 => 111,  160 => 109,  135 => 86,  133 => 84,  105 => 59,  99 => 56,  92 => 52,  76 => 39,  67 => 33,  48 => 17,  43 => 15,  38 => 13,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle::panel.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/panel.html.twig");
    }
}

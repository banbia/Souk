<?php

/* BackBundle::panel.html.twig */
class __TwigTemplate_e15b6806bca0677ec8903e965352a2782d1835f2305780dec28dfe10824b1af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90fc2c1308cdd49676e93ec53aee1cee2078f0b528eecba86ae5ca8aed09ad07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fc2c1308cdd49676e93ec53aee1cee2078f0b528eecba86ae5ca8aed09ad07->enter($__internal_90fc2c1308cdd49676e93ec53aee1cee2078f0b528eecba86ae5ca8aed09ad07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::panel.html.twig"));

        $__internal_611cfd72ba31243d0d252047caf2636f2ef346c36d805145f22c29c50d8ae7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611cfd72ba31243d0d252047caf2636f2ef346c36d805145f22c29c50d8ae7a2->enter($__internal_611cfd72ba31243d0d252047caf2636f2ef346c36d805145f22c29c50d8ae7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::panel.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- FONT AWESOME STYLE  -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE  -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/css/style.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/img/logo.png"), "html", null, true);
        echo "\" />
                </a>

            </div>

            <div class=\"right-div\">
                <a href=\"#\" class=\"btn btn-danger pull-right\">LOG ME OUT</a>
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
                            <li><a href=\"index.html\" class=\"menu-top-active\">DASHBOARD</a></li>
                           
                            <li><a href=\"form.html\">FORMS</a></li>
                            <li>
                                <a href=\"#\" class=\"dropdown-toggle\" id=\"ddlmenuItem\" data-toggle=\"dropdown\">UI ELEMENTS <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"ddlmenuItem\">
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"\">UI ELEMENTS</a></li>
                                     <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EXAMPLE LINK</a></li>
                                </ul>
                            </li>
                            <li><a href=\"\">TABS & PANELS</a></li>
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
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 87
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
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>
";
        
        $__internal_90fc2c1308cdd49676e93ec53aee1cee2078f0b528eecba86ae5ca8aed09ad07->leave($__internal_90fc2c1308cdd49676e93ec53aee1cee2078f0b528eecba86ae5ca8aed09ad07_prof);

        
        $__internal_611cfd72ba31243d0d252047caf2636f2ef346c36d805145f22c29c50d8ae7a2->leave($__internal_611cfd72ba31243d0d252047caf2636f2ef346c36d805145f22c29c50d8ae7a2_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_463d31928c72cf00c64df1ddae212b9909a8f4ed7a95c3a51ff83af2d94963bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463d31928c72cf00c64df1ddae212b9909a8f4ed7a95c3a51ff83af2d94963bc->enter($__internal_463d31928c72cf00c64df1ddae212b9909a8f4ed7a95c3a51ff83af2d94963bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f2151879c08473d1fc29d258a0e9d09615843636f3a3d404f5bf1e3fb2b5943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2151879c08473d1fc29d258a0e9d09615843636f3a3d404f5bf1e3fb2b5943->enter($__internal_7f2151879c08473d1fc29d258a0e9d09615843636f3a3d404f5bf1e3fb2b5943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "              ";
        
        $__internal_7f2151879c08473d1fc29d258a0e9d09615843636f3a3d404f5bf1e3fb2b5943->leave($__internal_7f2151879c08473d1fc29d258a0e9d09615843636f3a3d404f5bf1e3fb2b5943_prof);

        
        $__internal_463d31928c72cf00c64df1ddae212b9909a8f4ed7a95c3a51ff83af2d94963bc->leave($__internal_463d31928c72cf00c64df1ddae212b9909a8f4ed7a95c3a51ff83af2d94963bc_prof);

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
        return array (  185 => 86,  176 => 85,  161 => 114,  156 => 112,  151 => 110,  126 => 87,  124 => 85,  69 => 33,  50 => 17,  45 => 15,  40 => 13,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("﻿<!DOCTYPE html>
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
    <link href=\"{{asset('bundles/back/admin/assets/css/bootstrap.css')}}\" rel=\"stylesheet\" />
    <!-- FONT AWESOME STYLE  -->
    <link href=\"{{asset('bundles/back/admin/assets/css/font-awesome.css')}}\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE  -->
    <link href=\"{{asset('bundles/back/admin/assets/css/style.css')}}\" rel=\"stylesheet\" />
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

                    <img src=\"{{asset('bundles/back/admin/assets/img/logo.png')}}\" />
                </a>

            </div>

            <div class=\"right-div\">
                <a href=\"#\" class=\"btn btn-danger pull-right\">LOG ME OUT</a>
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
                            <li><a href=\"index.html\" class=\"menu-top-active\">DASHBOARD</a></li>
                           
                            <li><a href=\"form.html\">FORMS</a></li>
                            <li>
                                <a href=\"#\" class=\"dropdown-toggle\" id=\"ddlmenuItem\" data-toggle=\"dropdown\">UI ELEMENTS <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"ddlmenuItem\">
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"\">UI ELEMENTS</a></li>
                                     <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EXAMPLE LINK</a></li>
                                </ul>
                            </li>
                            <li><a href=\"\">TABS & PANELS</a></li>
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

              {% block body %}
              {% endblock body %}
             
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
    <script src=\"{{asset('bundles/back/admin/assets/js/jquery-1.10.2.js')}}\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"{{asset('bundles/back/admin/assets/js/bootstrap.js')}}\"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src=\"{{asset('bundles/back/admin/assets/js/custom.js')}}\"></script>
  
</body>
</html>
", "BackBundle::panel.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/panel.html.twig");
    }
}

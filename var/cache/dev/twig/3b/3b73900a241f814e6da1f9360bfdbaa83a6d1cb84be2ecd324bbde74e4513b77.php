<?php

/* BackBundle::panel.html.twig */
class __TwigTemplate_e7bdd5819424eaf569645eb20f7c5649498d169079b8c0e8419a0204890eddc9 extends Twig_Template
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
        $__internal_fda32461d29af6525035be4589772f45c98dca31dd77e068760889eb9a72f2e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda32461d29af6525035be4589772f45c98dca31dd77e068760889eb9a72f2e2->enter($__internal_fda32461d29af6525035be4589772f45c98dca31dd77e068760889eb9a72f2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::panel.html.twig"));

        $__internal_7cbb4604373743d93158e043f599bd67aed569074141a48edf53df3760b81c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbb4604373743d93158e043f599bd67aed569074141a48edf53df3760b81c4a->enter($__internal_7cbb4604373743d93158e043f599bd67aed569074141a48edf53df3760b81c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::panel.html.twig"));

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
                            <li><a href=\"index.html\" class=\"menu-top-active\">Tableau de Bord</a></li>
                           
                            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\">Abonnements</a></li>
                            <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" id=\"ddlmenuItem\" data-toggle=\"dropdown\">Paramétrages <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"ddlmenuItem\">
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_index");
        echo "\">Catégories</a></li>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>
";
        
        $__internal_fda32461d29af6525035be4589772f45c98dca31dd77e068760889eb9a72f2e2->leave($__internal_fda32461d29af6525035be4589772f45c98dca31dd77e068760889eb9a72f2e2_prof);

        
        $__internal_7cbb4604373743d93158e043f599bd67aed569074141a48edf53df3760b81c4a->leave($__internal_7cbb4604373743d93158e043f599bd67aed569074141a48edf53df3760b81c4a_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b06241cca827b41b7d44c8b1acd74ef5c9fa5cda9d9782584559ce8031e3ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b06241cca827b41b7d44c8b1acd74ef5c9fa5cda9d9782584559ce8031e3ec3->enter($__internal_6b06241cca827b41b7d44c8b1acd74ef5c9fa5cda9d9782584559ce8031e3ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afe322f62046c99cb0a55027a4f5fe7ecb62dd9f959f66ef1b21f8eb30a9b6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe322f62046c99cb0a55027a4f5fe7ecb62dd9f959f66ef1b21f8eb30a9b6a1->enter($__internal_afe322f62046c99cb0a55027a4f5fe7ecb62dd9f959f66ef1b21f8eb30a9b6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "              ";
        
        $__internal_afe322f62046c99cb0a55027a4f5fe7ecb62dd9f959f66ef1b21f8eb30a9b6a1->leave($__internal_afe322f62046c99cb0a55027a4f5fe7ecb62dd9f959f66ef1b21f8eb30a9b6a1_prof);

        
        $__internal_6b06241cca827b41b7d44c8b1acd74ef5c9fa5cda9d9782584559ce8031e3ec3->leave($__internal_6b06241cca827b41b7d44c8b1acd74ef5c9fa5cda9d9782584559ce8031e3ec3_prof);

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
        return array (  190 => 85,  181 => 84,  166 => 113,  161 => 111,  156 => 109,  131 => 86,  129 => 84,  98 => 56,  91 => 52,  69 => 33,  50 => 17,  45 => 15,  40 => 13,  26 => 1,);
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
                            <li><a href=\"index.html\" class=\"menu-top-active\">Tableau de Bord</a></li>
                           
                            <li><a href=\"{{ path('abonnements_index') }}\">Abonnements</a></li>
                            <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" id=\"ddlmenuItem\" data-toggle=\"dropdown\">Paramétrages <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"ddlmenuItem\">
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"{{ path('categories_index') }}\">Catégories</a></li>
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
", "BackBundle::panel.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/panel.html.twig");
    }
}

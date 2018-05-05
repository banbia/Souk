<?php

/* FrontBundle:commandes:edit.html.twig */
class __TwigTemplate_3cc8242298b0b8300a49d3a77d857d0a515cd871c451be87187701077630b62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:edit.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/rating.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <h1>Modifier Commande</h1>

    <!-- Modal content-->

    <p class=\"text-center text-success\" id=\"succ\"></p>
            <div class=\"col-md-12\">
                <div class=\"form-group col-md-6\">
                    <label for=\"date\">Date de réception souhaitée </label>
                    <input type=\"text\" id=\"date\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "dateCom", array()), "Y-m-d"), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" id=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "id", array()), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"quantite\">Quantité</label>
                    <input type=\"text\" id=\"quantite\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commande"] ?? $this->getContext($context, "commande")), "quantite", array()), "html", null, true);
        echo "\"/>

                </div>
            </div>


            <button type=\"button\" id=\"mod\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Modifier  </button>
            <a class=\"btn btn-info\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_index");
        echo "\"><i class=\"fa fa-edit\"></i>  Retourner à la liste</a>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 42
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$( function() {
            \$( \"#souk_backbundle_commandes_dateCom\" ).datepicker({
                altField: \"#souk_backbundle_commandes_dateCom\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>

    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/rating.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/demo.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/shCore.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.mousewheel.css"), "html", null, true);
        echo "\"></script>

    <!-- FlexSlider -->
    <script defer src=\"../jquery.flexslider.js\"></script>

    <script type=\"text/javascript\">
        \$(function(){
            SyntaxHighlighter.all();
        });
        \$(window).load(function(){
            \$('.flexslider').flexslider({
                animation: \"slide\",
                controlNav: \"thumbnails\",
                start: function(slider){
                    \$('body').removeClass('loading');
                }
            });
        });


    </script>

    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$( function() {
            \$( \"#date\" ).datepicker({
                altField: \"#date\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>

    <script>
        \$(document).ready(function() {
            \$(\"#mod\").click(function () {
                var id = \$(\"#id\").val();
                var quantite = \$(\"#quantite\").val();
                var date = \$(\"#date\").val();

                var dataString = {};
                dataString['id'] = id;
                dataString['quantite'] = quantite;
                dataString['date'] = date;


                \$.ajax({
                    method: 'POST',
                    dataType: 'json',
                    url: '";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_modif");
        echo "',
                    data: dataString,
                    success: function (data) {
                        \$('#succ').text('Commande modifié avec succès.');

                    }
                });

            });
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 107,  175 => 58,  171 => 57,  167 => 56,  163 => 55,  148 => 42,  139 => 41,  122 => 34,  112 => 27,  105 => 23,  101 => 22,  91 => 14,  82 => 13,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
{% block style %}

    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('bundles/front/css/style_haifa_daoud.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('bundles/front/css/flexslider.css') }}\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/front/css/rating.css') }}\" />

{% endblock style %}
{% block body %}
    <h1>Modifier Commande</h1>

    <!-- Modal content-->

    <p class=\"text-center text-success\" id=\"succ\"></p>
            <div class=\"col-md-12\">
                <div class=\"form-group col-md-6\">
                    <label for=\"date\">Date de réception souhaitée </label>
                    <input type=\"text\" id=\"date\" class=\"form-control\" value=\"{{ commande.dateCom|date('Y-m-d') }}\"/>
                    <input type=\"hidden\" id=\"id\" value=\"{{ commande.id }}\"/>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"quantite\">Quantité</label>
                    <input type=\"text\" id=\"quantite\" class=\"form-control\" value=\"{{ commande.quantite }}\"/>

                </div>
            </div>


            <button type=\"button\" id=\"mod\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Modifier  </button>
            <a class=\"btn btn-info\" href=\"{{ path('commandes_index') }}\"><i class=\"fa fa-edit\"></i>  Retourner à la liste</a>





{% endblock %}
{% block js %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$( function() {
            \$( \"#souk_backbundle_commandes_dateCom\" ).datepicker({
                altField: \"#souk_backbundle_commandes_dateCom\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>

    <script src=\"{{ asset('bundles/front/js/rating.js') }}\"></script>
    <script src=\"{{ asset('bundles/front/js/demo.css') }}\"></script>
    <script src=\"{{ asset('bundles/front/js/shCore.css') }}\"></script>
    <script src=\"{{ asset('bundles/front/js/jquery.mousewheel.css') }}\"></script>

    <!-- FlexSlider -->
    <script defer src=\"../jquery.flexslider.js\"></script>

    <script type=\"text/javascript\">
        \$(function(){
            SyntaxHighlighter.all();
        });
        \$(window).load(function(){
            \$('.flexslider').flexslider({
                animation: \"slide\",
                controlNav: \"thumbnails\",
                start: function(slider){
                    \$('body').removeClass('loading');
                }
            });
        });


    </script>

    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$( function() {
            \$( \"#date\" ).datepicker({
                altField: \"#date\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>

    <script>
        \$(document).ready(function() {
            \$(\"#mod\").click(function () {
                var id = \$(\"#id\").val();
                var quantite = \$(\"#quantite\").val();
                var date = \$(\"#date\").val();

                var dataString = {};
                dataString['id'] = id;
                dataString['quantite'] = quantite;
                dataString['date'] = date;


                \$.ajax({
                    method: 'POST',
                    dataType: 'json',
                    url: '{{ path('commandes_modif') }}',
                    data: dataString,
                    success: function (data) {
                        \$('#succ').text('Commande modifié avec succès.');

                    }
                });

            });
        });
    </script>


{% endblock js %}", "FrontBundle:commandes:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/edit.html.twig");
    }
}

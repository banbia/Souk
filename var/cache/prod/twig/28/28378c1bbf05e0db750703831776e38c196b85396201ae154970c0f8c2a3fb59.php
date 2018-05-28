<?php

/* FrontBundle:commandes:edit.html.twig */
class __TwigTemplate_95d4def9122c5aad07eb875ea41f17f75abf9209eca5521de85070db1e0e88f5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/rating.css"), "html", null, true);
        echo "\" />

";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <h1>Modifier Commande</h1>

    <!-- Modal content-->

    <p class=\"text-center text-success\" id=\"succ\"></p>
            <div class=\"col-md-12\">
                <div class=\"form-group col-md-6\">
                    <label for=\"date\">Date de réception souhaitée </label>
                    <input type=\"text\" id=\"date\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "dateCom", array()), "Y-m-d"), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" id=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "id", array()), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"quantite\">Quantité</label>
                    <input type=\"text\" id=\"quantite\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "quantite", array()), "html", null, true);
        echo "\"/>

                </div>
            </div>


            <button type=\"button\" id=\"mod\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Modifier  </button>
            <a class=\"btn btn-info\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_index");
        echo "\"><i class=\"fa fa-edit\"></i>  Retourner à la liste</a>





";
    }

    // line 41
    public function block_js($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/rating.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/demo.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/shCore.css"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/js/jquery.mousewheel.css"), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commandes_modif");
        echo "',
                    data: dataString,
                    success: function (data) {
                        \$('#succ').html('Commande modifiée avec succès.<br/><br/>');

                    }
                });

            });
        });
    </script>


";
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
        return array (  189 => 107,  137 => 58,  133 => 57,  129 => 56,  125 => 55,  110 => 42,  107 => 41,  96 => 34,  86 => 27,  79 => 23,  75 => 22,  65 => 14,  62 => 13,  55 => 10,  50 => 8,  46 => 7,  42 => 6,  37 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:commandes:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/edit.html.twig");
    }
}

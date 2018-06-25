<?php

/* @Front/Rating/Rating.html.twig */
class __TwigTemplate_49c76f908b054a6d1076a8a76cf2f6fe68249d6c6e9ccba59232432649599b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBonPlanBundle::layout.html.twig", "@Front/Rating/Rating.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBonPlanBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Rating/Rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Rating/Rating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <html>
    <head>
        <title>jQuery Emoji Ratings</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <style>
            .star-rating {
                line-height:32px;
                font-size:1.25em;
            }
            .star-rating .fa-star{color: yellow;}
        </style>
    </head>
    <body>
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"star-rating\">
                    <span class=\"fa fa-star-o\" data-rating=\"1\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"2\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"3\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"4\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"5\"></span>
                    <input type=\"hidden\" name=\"whatever3\" class=\"rating-value\" value=\"4.1\">
                </div>
            </div>
        </div>
    </div>

    </body>
    <script>
        var \$star_rating = \$('.star-rating .fa');
        var SetRatingStar = function() {
            return \$star_rating.each(function() {
                if (parseInt(\$star_rating.siblings('input.rating-value').val()) >= parseInt(\$(this).data('rating'))) {
                    return \$(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return \$(this).removeClass('fa-star').addClass('fa-star-o');
                }
            });
        };
        \$star_rating.on('click', function() {
            \$star_rating.siblings('input.rating-value').val(\$(this).data('rating'));
            return SetRatingStar();
        });
        SetRatingStar();
        \$(document).ready(function() {
        });
    </script>
    </html>




    <!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Rating/Rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Front\\BonPlanBundle::layout.html.twig\" %}
{% block container %}
    <html>
    <head>
        <title>jQuery Emoji Ratings</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <style>
            .star-rating {
                line-height:32px;
                font-size:1.25em;
            }
            .star-rating .fa-star{color: yellow;}
        </style>
    </head>
    <body>
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"star-rating\">
                    <span class=\"fa fa-star-o\" data-rating=\"1\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"2\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"3\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"4\"></span>
                    <span class=\"fa fa-star-o\" data-rating=\"5\"></span>
                    <input type=\"hidden\" name=\"whatever3\" class=\"rating-value\" value=\"4.1\">
                </div>
            </div>
        </div>
    </div>

    </body>
    <script>
        var \$star_rating = \$('.star-rating .fa');
        var SetRatingStar = function() {
            return \$star_rating.each(function() {
                if (parseInt(\$star_rating.siblings('input.rating-value').val()) >= parseInt(\$(this).data('rating'))) {
                    return \$(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return \$(this).removeClass('fa-star').addClass('fa-star-o');
                }
            });
        };
        \$star_rating.on('click', function() {
            \$star_rating.siblings('input.rating-value').val(\$(this).data('rating'));
            return SetRatingStar();
        });
        SetRatingStar();
        \$(document).ready(function() {
        });
    </script>
    </html>




    <!-- /.container -->
{% endblock %}", "@Front/Rating/Rating.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle\\Resources\\views\\Rating\\Rating.html.twig");
    }
}

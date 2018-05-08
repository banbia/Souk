<?php

/* FrontBundle:image:ajouterImage.html.twig */
class __TwigTemplate_1e911793c2998ad7e2e4e6e78eafccf67a4ee3ec017c2347214ecbf19937e0cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:image:ajouterImage.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:image:ajouterImage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:image:ajouterImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 5
        echo "

        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        // line 13
        echo "
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_homepage");
        echo "\">Annonce</a></li>

        <li>Ajouter une nouvelle annonce</li>
        <li>Ajouter une photo</li>

    </ol>
    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2\">

            <!--      Wizard container        -->
            <div class=\"wizard-container\">

                <div class=\"card wizard-card\" data-color=\"orange\" id=\"wizardProfile\">
                  ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImage"]) || array_key_exists("formImage", $context) ? $context["formImage"] : (function () { throw new Twig_Error_Runtime('Variable "formImage" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
                    <div class=\"col-md-12\">
                           <div class=\"form-group col-md-6\">
                               ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formImage"]) || array_key_exists("formImage", $context) ? $context["formImage"] : (function () { throw new Twig_Error_Runtime('Variable "formImage" does not exist.', 31, $this->source); })()), "ImageFile", array()), 'label');
        echo "
                               ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formImage"]) || array_key_exists("formImage", $context) ? $context["formImage"] : (function () { throw new Twig_Error_Runtime('Variable "formImage" does not exist.', 32, $this->source); })()), "ImageFile", array()), 'errors');
        echo "
                               ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formImage"]) || array_key_exists("formImage", $context) ? $context["formImage"] : (function () { throw new Twig_Error_Runtime('Variable "formImage" does not exist.', 33, $this->source); })()), "ImageFile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                           </div>

                       </div>


                   </div>


                    <div class=\"col-md-12\">
                        <div class=\"form-group \">
                            <button type=\"submit\"  class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"></i> Ajouter</button>
                        </div>
                    </div>

                    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImage"]) || array_key_exists("formImage", $context) ? $context["formImage"] : (function () { throw new Twig_Error_Runtime('Variable "formImage" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
                ";
        // line 67
        echo "</div>
</div> <!-- wizard container -->
</div>
</div><!-- end row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 73
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:image:ajouterImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 73,  154 => 72,  140 => 67,  136 => 48,  118 => 33,  114 => 32,  110 => 31,  104 => 28,  88 => 15,  84 => 13,  82 => 12,  73 => 11,  59 => 7,  55 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}


    {% block style %}


        <link href=\"{{ asset('bundles/front/css/style_haifa_daoud.css') }}\" rel=\"stylesheet\"/>


    {% endblock style %}
{% block body %}
    {# dev-haifa#}

    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('front_homepage') }}\">Annonce</a></li>

        <li>Ajouter une nouvelle annonce</li>
        <li>Ajouter une photo</li>

    </ol>
    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2\">

            <!--      Wizard container        -->
            <div class=\"wizard-container\">

                <div class=\"card wizard-card\" data-color=\"orange\" id=\"wizardProfile\">
                  {{ form_start(formImage) }}
                    <div class=\"col-md-12\">
                           <div class=\"form-group col-md-6\">
                               {{ form_label(formImage.ImageFile) }}
                               {{ form_errors(formImage.ImageFile) }}
                               {{ form_widget(formImage.ImageFile, {'attr': {'class': 'form-control'}}) }}
                           </div>

                       </div>


                   </div>


                    <div class=\"col-md-12\">
                        <div class=\"form-group \">
                            <button type=\"submit\"  class=\"btn btn-success pull-right\"><i class=\"fa fa-plus\"></i> Ajouter</button>
                        </div>
                    </div>

                    {{ form_end(formImage) }}
                {#      {% block vich_image_widget %}
       {% spaceless %}
      <div class=\"vich-image\">
          {{ form_widget(formImage.file) }}
          {% if formImage.delete is defined %}
              {{ form_row(formImage.delete) }}
          {% endif %}

          {% if image_uri %}
              <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
          {% endif %}
          {% if download_uri %}
              <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
          {% endif %}
      </div>
  {% endspaceless %}
 {% endblock %}
  #}
</div>
</div> <!-- wizard container -->
</div>
</div><!-- end row -->
{% endblock body %}
{% block js %}

{% endblock js %}", "FrontBundle:image:ajouterImage.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/image/ajouterImage.html.twig");
    }
}

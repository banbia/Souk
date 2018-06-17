<?php

/* FrontBundle:image:ajouterImage.html.twig */
class __TwigTemplate_f0003eb0a34b44f31875aa8b9468cc469dbf2992880b3e778a13afed24541704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:image:ajouterImage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:image:ajouterImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 5
        echo "

        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        // line 13
        echo "
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commercial_annonces_index");
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), 'form_start');
        echo "
                    <div class=\"col-md-12\">
                           <div class=\"form-group col-md-6\">

                               ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), "imageFile", array()), 'errors');
        echo "
                               ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), "imageFile", array()), 'widget');
        echo "
                           </div>

                       </div>

                    <div class=\"col-md-12\">
                        <div class=\"form-group \">
                            <button type=\"submit\"  class=\"btn btn-success pull-right \"><i class=\"fa fa-plus\"></i> Ajouter</button>
                            <div class=\"col-md-1\"></div>
                            <a class=\"btn  pull-right btn-info \"   href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commercial_annonces_index");
        echo "\"><i class=\"fa fa-location-arrow\"></i> Terminer</a>

                        </div>
                    </div>
                   </div>




                    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), 'form_end');
        echo "
                ";
        // line 70
        echo "</div>
</div> <!-- wizard container -->
</div>
</div><!-- end row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 76
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
        return array (  162 => 76,  153 => 75,  139 => 70,  135 => 51,  123 => 42,  111 => 33,  107 => 32,  100 => 28,  84 => 15,  80 => 13,  78 => 12,  69 => 11,  55 => 7,  51 => 5,  42 => 4,  11 => 1,);
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


        <link href=\"{{ asset('bundles/front/css/style_haifa_daoud.css') }}\" rel=\"stylesheet\"/>


    {% endblock style %}
{% block body %}
    {# dev-haifa#}

    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('commercial_annonces_index') }}\">Annonce</a></li>

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

                               {{ form_errors(formImage.imageFile) }}
                               {{ form_widget(formImage.imageFile) }}
                           </div>

                       </div>

                    <div class=\"col-md-12\">
                        <div class=\"form-group \">
                            <button type=\"submit\"  class=\"btn btn-success pull-right \"><i class=\"fa fa-plus\"></i> Ajouter</button>
                            <div class=\"col-md-1\"></div>
                            <a class=\"btn  pull-right btn-info \"   href=\"{{ path('commercial_annonces_index') }}\"><i class=\"fa fa-location-arrow\"></i> Terminer</a>

                        </div>
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

{% endblock js %}", "FrontBundle:image:ajouterImage.html.twig", "C:\\Users\\HAYFA\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/image/ajouterImage.html.twig");
    }
}

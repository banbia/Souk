<?php

/* FrontBundle:image:ajouterImage.html.twig */
class __TwigTemplate_d89455c24ea53f9a37338fd4ae5b870474f97ac44e4b2635cfa60fbc438ebfc7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_style($context, array $blocks = array())
    {
        // line 5
        echo "

        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_haifa_daoud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formImage"] ?? null), 'form_start');
        echo "
                    <div class=\"col-md-12\">
                           <div class=\"form-group col-md-6\">
                               ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formImage"] ?? null), "ImageFile", array()), 'label');
        echo "
                               ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formImage"] ?? null), "ImageFile", array()), 'errors');
        echo "
                               ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formImage"] ?? null), "ImageFile", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formImage"] ?? null), 'form_end');
        echo "
                ";
        // line 67
        echo "</div>
</div> <!-- wizard container -->
</div>
</div><!-- end row -->
";
    }

    // line 72
    public function block_js($context, array $blocks = array())
    {
        // line 73
        echo "
";
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
        return array (  121 => 73,  118 => 72,  110 => 67,  106 => 48,  88 => 33,  84 => 32,  80 => 31,  74 => 28,  58 => 15,  54 => 13,  52 => 12,  49 => 11,  41 => 7,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:image:ajouterImage.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/image/ajouterImage.html.twig");
    }
}

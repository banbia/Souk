<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6914c83e62a9b04c489656893fea6cf220892f5ae719738dd82c8d437932c570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778f6bb818401e97cb0a0107293eb31fdf057a154d3d57b6f30bca1c003c07b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778f6bb818401e97cb0a0107293eb31fdf057a154d3d57b6f30bca1c003c07b9->enter($__internal_778f6bb818401e97cb0a0107293eb31fdf057a154d3d57b6f30bca1c003c07b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a7bcf55f1599bac5af03fcd5194f1bb938783283d02848a10bc72afae1034f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bcf55f1599bac5af03fcd5194f1bb938783283d02848a10bc72afae1034f35->enter($__internal_a7bcf55f1599bac5af03fcd5194f1bb938783283d02848a10bc72afae1034f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_778f6bb818401e97cb0a0107293eb31fdf057a154d3d57b6f30bca1c003c07b9->leave($__internal_778f6bb818401e97cb0a0107293eb31fdf057a154d3d57b6f30bca1c003c07b9_prof);

        
        $__internal_a7bcf55f1599bac5af03fcd5194f1bb938783283d02848a10bc72afae1034f35->leave($__internal_a7bcf55f1599bac5af03fcd5194f1bb938783283d02848a10bc72afae1034f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

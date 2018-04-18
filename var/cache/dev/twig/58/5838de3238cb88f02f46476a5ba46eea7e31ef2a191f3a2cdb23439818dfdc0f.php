<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ec948ae5a659ba4c4ef22f59d25bae39855cb92407528a2a041652060650828f extends Twig_Template
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
        $__internal_6b361d86aae51b29fdc04fde5401fd4b7ca0e4005a7af091509bc1e0285d0554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b361d86aae51b29fdc04fde5401fd4b7ca0e4005a7af091509bc1e0285d0554->enter($__internal_6b361d86aae51b29fdc04fde5401fd4b7ca0e4005a7af091509bc1e0285d0554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_83703b64722a5517a4f6516368f9f3a65a8703e740c310bc5dc6def19e196d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83703b64722a5517a4f6516368f9f3a65a8703e740c310bc5dc6def19e196d25->enter($__internal_83703b64722a5517a4f6516368f9f3a65a8703e740c310bc5dc6def19e196d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6b361d86aae51b29fdc04fde5401fd4b7ca0e4005a7af091509bc1e0285d0554->leave($__internal_6b361d86aae51b29fdc04fde5401fd4b7ca0e4005a7af091509bc1e0285d0554_prof);

        
        $__internal_83703b64722a5517a4f6516368f9f3a65a8703e740c310bc5dc6def19e196d25->leave($__internal_83703b64722a5517a4f6516368f9f3a65a8703e740c310bc5dc6def19e196d25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

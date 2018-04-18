<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cc4284aead74b74bbce86a0eae1d835b688ac9d86bb7ae8ca691c54485bec163 extends Twig_Template
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
        $__internal_0af313e064fcc78a6ae90b4631f4062bb363461ef9480c063a10486de1efead2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af313e064fcc78a6ae90b4631f4062bb363461ef9480c063a10486de1efead2->enter($__internal_0af313e064fcc78a6ae90b4631f4062bb363461ef9480c063a10486de1efead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c2d5eb592a8eb286c9188ea955cdfba00e5a6da163ee0be52833a92a39b1b0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d5eb592a8eb286c9188ea955cdfba00e5a6da163ee0be52833a92a39b1b0dd->enter($__internal_c2d5eb592a8eb286c9188ea955cdfba00e5a6da163ee0be52833a92a39b1b0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0af313e064fcc78a6ae90b4631f4062bb363461ef9480c063a10486de1efead2->leave($__internal_0af313e064fcc78a6ae90b4631f4062bb363461ef9480c063a10486de1efead2_prof);

        
        $__internal_c2d5eb592a8eb286c9188ea955cdfba00e5a6da163ee0be52833a92a39b1b0dd->leave($__internal_c2d5eb592a8eb286c9188ea955cdfba00e5a6da163ee0be52833a92a39b1b0dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

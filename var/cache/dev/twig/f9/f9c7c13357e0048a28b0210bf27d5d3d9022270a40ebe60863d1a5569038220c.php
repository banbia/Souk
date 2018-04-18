<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_62439feda52b8bc4a60c43e40383c0d30e781158e38bcd38d83c799eadbbbe25 extends Twig_Template
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
        $__internal_2254420ac36e3fb81227c6e9edccfabf3a3cac8525dac0016374fb9ebafc95a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2254420ac36e3fb81227c6e9edccfabf3a3cac8525dac0016374fb9ebafc95a4->enter($__internal_2254420ac36e3fb81227c6e9edccfabf3a3cac8525dac0016374fb9ebafc95a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b993bd9e6fc62d3b56567387612ce9c2c56b2fd67f54d3f50a4071c05d02444d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b993bd9e6fc62d3b56567387612ce9c2c56b2fd67f54d3f50a4071c05d02444d->enter($__internal_b993bd9e6fc62d3b56567387612ce9c2c56b2fd67f54d3f50a4071c05d02444d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2254420ac36e3fb81227c6e9edccfabf3a3cac8525dac0016374fb9ebafc95a4->leave($__internal_2254420ac36e3fb81227c6e9edccfabf3a3cac8525dac0016374fb9ebafc95a4_prof);

        
        $__internal_b993bd9e6fc62d3b56567387612ce9c2c56b2fd67f54d3f50a4071c05d02444d->leave($__internal_b993bd9e6fc62d3b56567387612ce9c2c56b2fd67f54d3f50a4071c05d02444d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bc64f50c53ef56d4c5b48bed4a334a9db649d4dc3efc08f7200066a54f9faf03 extends Twig_Template
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
        $__internal_21ee765b65c01cd57018c713923ee11c80601dc77cd538afdfcecd0dffa71570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ee765b65c01cd57018c713923ee11c80601dc77cd538afdfcecd0dffa71570->enter($__internal_21ee765b65c01cd57018c713923ee11c80601dc77cd538afdfcecd0dffa71570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3e04b5f86192fea9c04b67602bfa24ec4fff9e6ba8df725ad5be1457f4338cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e04b5f86192fea9c04b67602bfa24ec4fff9e6ba8df725ad5be1457f4338cc1->enter($__internal_3e04b5f86192fea9c04b67602bfa24ec4fff9e6ba8df725ad5be1457f4338cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_21ee765b65c01cd57018c713923ee11c80601dc77cd538afdfcecd0dffa71570->leave($__internal_21ee765b65c01cd57018c713923ee11c80601dc77cd538afdfcecd0dffa71570_prof);

        
        $__internal_3e04b5f86192fea9c04b67602bfa24ec4fff9e6ba8df725ad5be1457f4338cc1->leave($__internal_3e04b5f86192fea9c04b67602bfa24ec4fff9e6ba8df725ad5be1457f4338cc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

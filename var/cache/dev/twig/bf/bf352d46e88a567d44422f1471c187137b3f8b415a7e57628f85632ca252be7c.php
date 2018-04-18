<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_96d4458e28355d4fc40b278355acd5bde6eda2caad4c311af52af8954dc59e34 extends Twig_Template
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
        $__internal_7be79ecf2ab14c4f42fe79a16339a384bc05941b8663a3e7de01c725b91e37b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be79ecf2ab14c4f42fe79a16339a384bc05941b8663a3e7de01c725b91e37b5->enter($__internal_7be79ecf2ab14c4f42fe79a16339a384bc05941b8663a3e7de01c725b91e37b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_86047969fffefdf67ac6b6f7ec125d80603d0c71637461d07533cae56df0576c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86047969fffefdf67ac6b6f7ec125d80603d0c71637461d07533cae56df0576c->enter($__internal_86047969fffefdf67ac6b6f7ec125d80603d0c71637461d07533cae56df0576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7be79ecf2ab14c4f42fe79a16339a384bc05941b8663a3e7de01c725b91e37b5->leave($__internal_7be79ecf2ab14c4f42fe79a16339a384bc05941b8663a3e7de01c725b91e37b5_prof);

        
        $__internal_86047969fffefdf67ac6b6f7ec125d80603d0c71637461d07533cae56df0576c->leave($__internal_86047969fffefdf67ac6b6f7ec125d80603d0c71637461d07533cae56df0576c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b40d582ba4236d30d03a1829548987f71111012c1b139b26a46c3e567de0e7bf extends Twig_Template
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
        $__internal_bbc585ea1a7b1ae02ea40595fd60f9e1f1adbb5a1b556cbeab3a8131a90f4f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc585ea1a7b1ae02ea40595fd60f9e1f1adbb5a1b556cbeab3a8131a90f4f90->enter($__internal_bbc585ea1a7b1ae02ea40595fd60f9e1f1adbb5a1b556cbeab3a8131a90f4f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_359af03cdba53f052923588b3579596c05e66b2a7f6bf15125e646dd4536fc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359af03cdba53f052923588b3579596c05e66b2a7f6bf15125e646dd4536fc96->enter($__internal_359af03cdba53f052923588b3579596c05e66b2a7f6bf15125e646dd4536fc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bbc585ea1a7b1ae02ea40595fd60f9e1f1adbb5a1b556cbeab3a8131a90f4f90->leave($__internal_bbc585ea1a7b1ae02ea40595fd60f9e1f1adbb5a1b556cbeab3a8131a90f4f90_prof);

        
        $__internal_359af03cdba53f052923588b3579596c05e66b2a7f6bf15125e646dd4536fc96->leave($__internal_359af03cdba53f052923588b3579596c05e66b2a7f6bf15125e646dd4536fc96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

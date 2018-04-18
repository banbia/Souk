<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_19d7757d2c1754fb6e4983db491e790fdb36c76af06ecb9eef90cc2e5848826d extends Twig_Template
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
        $__internal_f524b3ecca1c6366cca0cfa6e7fa8df5776e16bcb852ae8267ed703a9dbf8e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f524b3ecca1c6366cca0cfa6e7fa8df5776e16bcb852ae8267ed703a9dbf8e9f->enter($__internal_f524b3ecca1c6366cca0cfa6e7fa8df5776e16bcb852ae8267ed703a9dbf8e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_11f41bc227884cad0f42ae2ae833dfe0a178cdbdeb08bcc563882716528d4ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f41bc227884cad0f42ae2ae833dfe0a178cdbdeb08bcc563882716528d4ece->enter($__internal_11f41bc227884cad0f42ae2ae833dfe0a178cdbdeb08bcc563882716528d4ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f524b3ecca1c6366cca0cfa6e7fa8df5776e16bcb852ae8267ed703a9dbf8e9f->leave($__internal_f524b3ecca1c6366cca0cfa6e7fa8df5776e16bcb852ae8267ed703a9dbf8e9f_prof);

        
        $__internal_11f41bc227884cad0f42ae2ae833dfe0a178cdbdeb08bcc563882716528d4ece->leave($__internal_11f41bc227884cad0f42ae2ae833dfe0a178cdbdeb08bcc563882716528d4ece_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

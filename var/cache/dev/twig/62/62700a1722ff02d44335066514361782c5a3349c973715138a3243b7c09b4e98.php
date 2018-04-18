<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3e20ea7cb56650b283fa97e80933eac011946b30e24b0a2b3bdf8ec8b86fa174 extends Twig_Template
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
        $__internal_44d62784a9efd08e2af30db06be347528ff4181b6af80cd5ed3fb56afe676b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d62784a9efd08e2af30db06be347528ff4181b6af80cd5ed3fb56afe676b68->enter($__internal_44d62784a9efd08e2af30db06be347528ff4181b6af80cd5ed3fb56afe676b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e25dbc97e1fe049decd77b882eaef3483e604d23548747b49223190f3ee2c8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25dbc97e1fe049decd77b882eaef3483e604d23548747b49223190f3ee2c8c5->enter($__internal_e25dbc97e1fe049decd77b882eaef3483e604d23548747b49223190f3ee2c8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_44d62784a9efd08e2af30db06be347528ff4181b6af80cd5ed3fb56afe676b68->leave($__internal_44d62784a9efd08e2af30db06be347528ff4181b6af80cd5ed3fb56afe676b68_prof);

        
        $__internal_e25dbc97e1fe049decd77b882eaef3483e604d23548747b49223190f3ee2c8c5->leave($__internal_e25dbc97e1fe049decd77b882eaef3483e604d23548747b49223190f3ee2c8c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

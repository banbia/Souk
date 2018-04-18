<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d9f2a93e7cb4a73f0ea8c941c0ba5957624a17c69c0c75b47299c7135a62e07f extends Twig_Template
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
        $__internal_eaa34dab0e52012bf114d07c38c373840f2c793593f0efaad9ecfe5d8222f44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa34dab0e52012bf114d07c38c373840f2c793593f0efaad9ecfe5d8222f44e->enter($__internal_eaa34dab0e52012bf114d07c38c373840f2c793593f0efaad9ecfe5d8222f44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d0deb9d318f91cc306f23ea2c4d2a8af05d278d4c7d6f657eb6077b18dd53f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0deb9d318f91cc306f23ea2c4d2a8af05d278d4c7d6f657eb6077b18dd53f10->enter($__internal_d0deb9d318f91cc306f23ea2c4d2a8af05d278d4c7d6f657eb6077b18dd53f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_eaa34dab0e52012bf114d07c38c373840f2c793593f0efaad9ecfe5d8222f44e->leave($__internal_eaa34dab0e52012bf114d07c38c373840f2c793593f0efaad9ecfe5d8222f44e_prof);

        
        $__internal_d0deb9d318f91cc306f23ea2c4d2a8af05d278d4c7d6f657eb6077b18dd53f10->leave($__internal_d0deb9d318f91cc306f23ea2c4d2a8af05d278d4c7d6f657eb6077b18dd53f10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

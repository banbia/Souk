<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f7a973c1a0fe6ddd7da5603831fcd42372cd13f2cfe510431ec059314f918e76 extends Twig_Template
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
        $__internal_c4b2cb365aabe6c50e4c6b9471dd6d8adebbb61891fa7b732a26e2e2002b50ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b2cb365aabe6c50e4c6b9471dd6d8adebbb61891fa7b732a26e2e2002b50ff->enter($__internal_c4b2cb365aabe6c50e4c6b9471dd6d8adebbb61891fa7b732a26e2e2002b50ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a8b31b5b74e977698d4c2855df40f2f6f40306fd26c2a4b3bd88c795f0068d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b31b5b74e977698d4c2855df40f2f6f40306fd26c2a4b3bd88c795f0068d57->enter($__internal_a8b31b5b74e977698d4c2855df40f2f6f40306fd26c2a4b3bd88c795f0068d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c4b2cb365aabe6c50e4c6b9471dd6d8adebbb61891fa7b732a26e2e2002b50ff->leave($__internal_c4b2cb365aabe6c50e4c6b9471dd6d8adebbb61891fa7b732a26e2e2002b50ff_prof);

        
        $__internal_a8b31b5b74e977698d4c2855df40f2f6f40306fd26c2a4b3bd88c795f0068d57->leave($__internal_a8b31b5b74e977698d4c2855df40f2f6f40306fd26c2a4b3bd88c795f0068d57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

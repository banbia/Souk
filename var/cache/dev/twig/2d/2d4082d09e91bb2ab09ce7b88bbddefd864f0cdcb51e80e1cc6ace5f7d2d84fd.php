<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2ebafec8d483cdf536429b50bb44a1eb06d38ad3a33134937e80cda0f9cbadc0 extends Twig_Template
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
        $__internal_829641778d42f6e82c6b5f18de3859f54e41423160fc9a85246a11ab85876948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829641778d42f6e82c6b5f18de3859f54e41423160fc9a85246a11ab85876948->enter($__internal_829641778d42f6e82c6b5f18de3859f54e41423160fc9a85246a11ab85876948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b0631e97cd08e751fc646e6e47a29a0d9720754fda7d945914d2e3f85e9ef0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0631e97cd08e751fc646e6e47a29a0d9720754fda7d945914d2e3f85e9ef0b9->enter($__internal_b0631e97cd08e751fc646e6e47a29a0d9720754fda7d945914d2e3f85e9ef0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_829641778d42f6e82c6b5f18de3859f54e41423160fc9a85246a11ab85876948->leave($__internal_829641778d42f6e82c6b5f18de3859f54e41423160fc9a85246a11ab85876948_prof);

        
        $__internal_b0631e97cd08e751fc646e6e47a29a0d9720754fda7d945914d2e3f85e9ef0b9->leave($__internal_b0631e97cd08e751fc646e6e47a29a0d9720754fda7d945914d2e3f85e9ef0b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

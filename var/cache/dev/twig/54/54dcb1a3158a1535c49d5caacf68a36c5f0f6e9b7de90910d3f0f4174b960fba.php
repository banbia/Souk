<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_49932f9a5594ca11f641482d4765265eb8294383322b81e6a52b4c05b59f1c24 extends Twig_Template
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
        $__internal_0a8e3e4725adeec514e62195b4df651b405bd3dec240f3191b51d8bcc40161d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8e3e4725adeec514e62195b4df651b405bd3dec240f3191b51d8bcc40161d4->enter($__internal_0a8e3e4725adeec514e62195b4df651b405bd3dec240f3191b51d8bcc40161d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_fd92a0a6848f818b8cae6fe2b7a9fd633c6c0a2a791fcd280acae93841a84e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd92a0a6848f818b8cae6fe2b7a9fd633c6c0a2a791fcd280acae93841a84e6c->enter($__internal_fd92a0a6848f818b8cae6fe2b7a9fd633c6c0a2a791fcd280acae93841a84e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0a8e3e4725adeec514e62195b4df651b405bd3dec240f3191b51d8bcc40161d4->leave($__internal_0a8e3e4725adeec514e62195b4df651b405bd3dec240f3191b51d8bcc40161d4_prof);

        
        $__internal_fd92a0a6848f818b8cae6fe2b7a9fd633c6c0a2a791fcd280acae93841a84e6c->leave($__internal_fd92a0a6848f818b8cae6fe2b7a9fd633c6c0a2a791fcd280acae93841a84e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

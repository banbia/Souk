<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_10a7879ff59c50bdd8b0e3e609199cdb8d6c8132931ed0e4374d68ab54735f39 extends Twig_Template
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
        $__internal_a935a1b424f3e762480f49d0744316609fed02b0a97a2d102b50a5e7dd5f1ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a935a1b424f3e762480f49d0744316609fed02b0a97a2d102b50a5e7dd5f1ac3->enter($__internal_a935a1b424f3e762480f49d0744316609fed02b0a97a2d102b50a5e7dd5f1ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4fb179f9370f649bce5adbc2bc651d721f37a4d6235c94f3e49a8334782ee3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb179f9370f649bce5adbc2bc651d721f37a4d6235c94f3e49a8334782ee3b5->enter($__internal_4fb179f9370f649bce5adbc2bc651d721f37a4d6235c94f3e49a8334782ee3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a935a1b424f3e762480f49d0744316609fed02b0a97a2d102b50a5e7dd5f1ac3->leave($__internal_a935a1b424f3e762480f49d0744316609fed02b0a97a2d102b50a5e7dd5f1ac3_prof);

        
        $__internal_4fb179f9370f649bce5adbc2bc651d721f37a4d6235c94f3e49a8334782ee3b5->leave($__internal_4fb179f9370f649bce5adbc2bc651d721f37a4d6235c94f3e49a8334782ee3b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

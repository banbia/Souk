<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1be7f5e9e7e53c86b8c98ed3f46fa81c3acaab0ed368bf3cd0f5bb454f3892a3 extends Twig_Template
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
        $__internal_678169219ab775f09445fe070aa3294a321e93ef25b9230c7a9e2c006081b486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678169219ab775f09445fe070aa3294a321e93ef25b9230c7a9e2c006081b486->enter($__internal_678169219ab775f09445fe070aa3294a321e93ef25b9230c7a9e2c006081b486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_152cb3d630cdcd50c9e2f80cf111cbba15b745a33f7008027d23c501d866fef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152cb3d630cdcd50c9e2f80cf111cbba15b745a33f7008027d23c501d866fef3->enter($__internal_152cb3d630cdcd50c9e2f80cf111cbba15b745a33f7008027d23c501d866fef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_678169219ab775f09445fe070aa3294a321e93ef25b9230c7a9e2c006081b486->leave($__internal_678169219ab775f09445fe070aa3294a321e93ef25b9230c7a9e2c006081b486_prof);

        
        $__internal_152cb3d630cdcd50c9e2f80cf111cbba15b745a33f7008027d23c501d866fef3->leave($__internal_152cb3d630cdcd50c9e2f80cf111cbba15b745a33f7008027d23c501d866fef3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

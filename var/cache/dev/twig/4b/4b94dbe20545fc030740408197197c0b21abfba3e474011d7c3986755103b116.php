<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b2228f26187822b7dcaaedd5bc8e703f8346a2a551618476a784261ba70334e1 extends Twig_Template
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
        $__internal_4d509b9abc98993195c6d4d44c9daa1274943f71ca672ac3ffa7c645725191f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d509b9abc98993195c6d4d44c9daa1274943f71ca672ac3ffa7c645725191f5->enter($__internal_4d509b9abc98993195c6d4d44c9daa1274943f71ca672ac3ffa7c645725191f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cf772513f2a5dbd36d13a435eb36b94fb390fe820e487ef29f63167d87e58bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf772513f2a5dbd36d13a435eb36b94fb390fe820e487ef29f63167d87e58bd8->enter($__internal_cf772513f2a5dbd36d13a435eb36b94fb390fe820e487ef29f63167d87e58bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4d509b9abc98993195c6d4d44c9daa1274943f71ca672ac3ffa7c645725191f5->leave($__internal_4d509b9abc98993195c6d4d44c9daa1274943f71ca672ac3ffa7c645725191f5_prof);

        
        $__internal_cf772513f2a5dbd36d13a435eb36b94fb390fe820e487ef29f63167d87e58bd8->leave($__internal_cf772513f2a5dbd36d13a435eb36b94fb390fe820e487ef29f63167d87e58bd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

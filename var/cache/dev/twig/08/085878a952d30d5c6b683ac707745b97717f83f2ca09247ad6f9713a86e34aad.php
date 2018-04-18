<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_df50bef4455ed64b19272ad945e499ee671da08f633f237c8165b99a8066956c extends Twig_Template
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
        $__internal_d38f67a1a1554832c5823659f129e65ba74a8530ebf52cfa53200e2f19b26f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38f67a1a1554832c5823659f129e65ba74a8530ebf52cfa53200e2f19b26f93->enter($__internal_d38f67a1a1554832c5823659f129e65ba74a8530ebf52cfa53200e2f19b26f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_497e72cec8c22a24176fc31511b76923d7058fc4e961cd8c61e9cc5b26433334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497e72cec8c22a24176fc31511b76923d7058fc4e961cd8c61e9cc5b26433334->enter($__internal_497e72cec8c22a24176fc31511b76923d7058fc4e961cd8c61e9cc5b26433334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d38f67a1a1554832c5823659f129e65ba74a8530ebf52cfa53200e2f19b26f93->leave($__internal_d38f67a1a1554832c5823659f129e65ba74a8530ebf52cfa53200e2f19b26f93_prof);

        
        $__internal_497e72cec8c22a24176fc31511b76923d7058fc4e961cd8c61e9cc5b26433334->leave($__internal_497e72cec8c22a24176fc31511b76923d7058fc4e961cd8c61e9cc5b26433334_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}

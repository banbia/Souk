<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fe24a0c9baaff5b6e383547b51c6433131733fa050f1ea4455a5cdb28cabdd50 extends Twig_Template
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
        $__internal_f0935257e4415ef90edcd558fdec9ea795fc984b48a16c7198fa88698a85da6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0935257e4415ef90edcd558fdec9ea795fc984b48a16c7198fa88698a85da6b->enter($__internal_f0935257e4415ef90edcd558fdec9ea795fc984b48a16c7198fa88698a85da6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_843a537d04d31090ab9e2a3622ee0e10124fdae2c0c57fad043f921eefc1ba7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843a537d04d31090ab9e2a3622ee0e10124fdae2c0c57fad043f921eefc1ba7a->enter($__internal_843a537d04d31090ab9e2a3622ee0e10124fdae2c0c57fad043f921eefc1ba7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f0935257e4415ef90edcd558fdec9ea795fc984b48a16c7198fa88698a85da6b->leave($__internal_f0935257e4415ef90edcd558fdec9ea795fc984b48a16c7198fa88698a85da6b_prof);

        
        $__internal_843a537d04d31090ab9e2a3622ee0e10124fdae2c0c57fad043f921eefc1ba7a->leave($__internal_843a537d04d31090ab9e2a3622ee0e10124fdae2c0c57fad043f921eefc1ba7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

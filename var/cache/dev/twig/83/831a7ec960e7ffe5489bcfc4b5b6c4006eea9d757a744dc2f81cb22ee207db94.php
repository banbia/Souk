<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_30d90c1c171886708f56fb686b29075981748b9a52ac1c296f71b0a490becf71 extends Twig_Template
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
        $__internal_bb7ed0b22323c44fa8263ce0cdd4566d283390fce95aa21ab7ba81bec9b1369a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7ed0b22323c44fa8263ce0cdd4566d283390fce95aa21ab7ba81bec9b1369a->enter($__internal_bb7ed0b22323c44fa8263ce0cdd4566d283390fce95aa21ab7ba81bec9b1369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_02294e207f8dd31182e15de6e3ef181b9d2bc4702a608f16d93e1b8843180de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02294e207f8dd31182e15de6e3ef181b9d2bc4702a608f16d93e1b8843180de3->enter($__internal_02294e207f8dd31182e15de6e3ef181b9d2bc4702a608f16d93e1b8843180de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bb7ed0b22323c44fa8263ce0cdd4566d283390fce95aa21ab7ba81bec9b1369a->leave($__internal_bb7ed0b22323c44fa8263ce0cdd4566d283390fce95aa21ab7ba81bec9b1369a_prof);

        
        $__internal_02294e207f8dd31182e15de6e3ef181b9d2bc4702a608f16d93e1b8843180de3->leave($__internal_02294e207f8dd31182e15de6e3ef181b9d2bc4702a608f16d93e1b8843180de3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

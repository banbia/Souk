<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0237d70ccb03df280ffd350d264691a86dd3edfbf1ecf40c91bb2414d3b5ec6e extends Twig_Template
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
        $__internal_32f9ff41b75f6a7d0a98cdf60dc6e89f035814cdf0daa02b2252d119b7f1125d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f9ff41b75f6a7d0a98cdf60dc6e89f035814cdf0daa02b2252d119b7f1125d->enter($__internal_32f9ff41b75f6a7d0a98cdf60dc6e89f035814cdf0daa02b2252d119b7f1125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6a710a52385e563de2fac9320127452ed0e9eb216be50abe6ca1ff78b32ef948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a710a52385e563de2fac9320127452ed0e9eb216be50abe6ca1ff78b32ef948->enter($__internal_6a710a52385e563de2fac9320127452ed0e9eb216be50abe6ca1ff78b32ef948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_32f9ff41b75f6a7d0a98cdf60dc6e89f035814cdf0daa02b2252d119b7f1125d->leave($__internal_32f9ff41b75f6a7d0a98cdf60dc6e89f035814cdf0daa02b2252d119b7f1125d_prof);

        
        $__internal_6a710a52385e563de2fac9320127452ed0e9eb216be50abe6ca1ff78b32ef948->leave($__internal_6a710a52385e563de2fac9320127452ed0e9eb216be50abe6ca1ff78b32ef948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_153e3b83f9f3cfcc5c20654083209e268f923c591f32507a9c76589559a8f9c0 extends Twig_Template
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
        $__internal_f7c09dcacfb19853ef294afaaebbde8078487045bd5cafbfddbc4f52a1605e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c09dcacfb19853ef294afaaebbde8078487045bd5cafbfddbc4f52a1605e3d->enter($__internal_f7c09dcacfb19853ef294afaaebbde8078487045bd5cafbfddbc4f52a1605e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d008457e420540df28703493be3d27a96be3997b67dd10a32a00e0aa262547b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d008457e420540df28703493be3d27a96be3997b67dd10a32a00e0aa262547b8->enter($__internal_d008457e420540df28703493be3d27a96be3997b67dd10a32a00e0aa262547b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f7c09dcacfb19853ef294afaaebbde8078487045bd5cafbfddbc4f52a1605e3d->leave($__internal_f7c09dcacfb19853ef294afaaebbde8078487045bd5cafbfddbc4f52a1605e3d_prof);

        
        $__internal_d008457e420540df28703493be3d27a96be3997b67dd10a32a00e0aa262547b8->leave($__internal_d008457e420540df28703493be3d27a96be3997b67dd10a32a00e0aa262547b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

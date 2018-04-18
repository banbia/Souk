<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7625a648d0a203a30e6f4c9bef4b73ee71fd2db77597705c0210c23272fe7c67 extends Twig_Template
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
        $__internal_4e4e507af6da3768e8e50542082eba3ce16c0167dece933c3e812c142ea3e6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4e507af6da3768e8e50542082eba3ce16c0167dece933c3e812c142ea3e6c1->enter($__internal_4e4e507af6da3768e8e50542082eba3ce16c0167dece933c3e812c142ea3e6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f58417b67d51b7a2ffb9fc0f8f64cb0eec0ac1e1efcc75b645b12968f66b8d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58417b67d51b7a2ffb9fc0f8f64cb0eec0ac1e1efcc75b645b12968f66b8d67->enter($__internal_f58417b67d51b7a2ffb9fc0f8f64cb0eec0ac1e1efcc75b645b12968f66b8d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4e4e507af6da3768e8e50542082eba3ce16c0167dece933c3e812c142ea3e6c1->leave($__internal_4e4e507af6da3768e8e50542082eba3ce16c0167dece933c3e812c142ea3e6c1_prof);

        
        $__internal_f58417b67d51b7a2ffb9fc0f8f64cb0eec0ac1e1efcc75b645b12968f66b8d67->leave($__internal_f58417b67d51b7a2ffb9fc0f8f64cb0eec0ac1e1efcc75b645b12968f66b8d67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

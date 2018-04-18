<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a97db563874a16fcdd2bb808afab45dd3d89944858029427f83c8bb68367728e extends Twig_Template
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
        $__internal_35f003fa937170ca5129a9fa5818c4929cb4d9af067de01aad3fe428f113bd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f003fa937170ca5129a9fa5818c4929cb4d9af067de01aad3fe428f113bd69->enter($__internal_35f003fa937170ca5129a9fa5818c4929cb4d9af067de01aad3fe428f113bd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5d570ccb1f8473333c65f3d8add924d74fa53329695e56f58af7092d6b3bf1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d570ccb1f8473333c65f3d8add924d74fa53329695e56f58af7092d6b3bf1d7->enter($__internal_5d570ccb1f8473333c65f3d8add924d74fa53329695e56f58af7092d6b3bf1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_35f003fa937170ca5129a9fa5818c4929cb4d9af067de01aad3fe428f113bd69->leave($__internal_35f003fa937170ca5129a9fa5818c4929cb4d9af067de01aad3fe428f113bd69_prof);

        
        $__internal_5d570ccb1f8473333c65f3d8add924d74fa53329695e56f58af7092d6b3bf1d7->leave($__internal_5d570ccb1f8473333c65f3d8add924d74fa53329695e56f58af7092d6b3bf1d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}

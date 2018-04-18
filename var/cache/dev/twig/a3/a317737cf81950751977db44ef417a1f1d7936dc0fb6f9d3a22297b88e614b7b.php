<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8bf45b18704a0c86e17022732b14b4bee4192cb1c5b19f002f25958b63675101 extends Twig_Template
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
        $__internal_2046aad406c5addfd3d6534518cfbfe0eacc404d65b3936684cb446cb09c956c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2046aad406c5addfd3d6534518cfbfe0eacc404d65b3936684cb446cb09c956c->enter($__internal_2046aad406c5addfd3d6534518cfbfe0eacc404d65b3936684cb446cb09c956c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a1630bb53b77a68ff7a990f1b17aa57c4345290e378e759976eb6d51ac230311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1630bb53b77a68ff7a990f1b17aa57c4345290e378e759976eb6d51ac230311->enter($__internal_a1630bb53b77a68ff7a990f1b17aa57c4345290e378e759976eb6d51ac230311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2046aad406c5addfd3d6534518cfbfe0eacc404d65b3936684cb446cb09c956c->leave($__internal_2046aad406c5addfd3d6534518cfbfe0eacc404d65b3936684cb446cb09c956c_prof);

        
        $__internal_a1630bb53b77a68ff7a990f1b17aa57c4345290e378e759976eb6d51ac230311->leave($__internal_a1630bb53b77a68ff7a990f1b17aa57c4345290e378e759976eb6d51ac230311_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

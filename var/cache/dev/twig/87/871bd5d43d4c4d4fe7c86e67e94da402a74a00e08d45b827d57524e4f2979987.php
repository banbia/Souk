<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1a8ac2d6a58e74659a100c840123f57cddbd6547984b3466a6490dc8a58df10b extends Twig_Template
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
        $__internal_001c5d3e8346d888b76c97f60eb9a06b3c6956c6c80e258cfb0a658cff051635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001c5d3e8346d888b76c97f60eb9a06b3c6956c6c80e258cfb0a658cff051635->enter($__internal_001c5d3e8346d888b76c97f60eb9a06b3c6956c6c80e258cfb0a658cff051635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3922537aa33fa3963ebeb2f9c0656e5900dc2b0d6c26e9f29f5d69d0ff52cb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3922537aa33fa3963ebeb2f9c0656e5900dc2b0d6c26e9f29f5d69d0ff52cb96->enter($__internal_3922537aa33fa3963ebeb2f9c0656e5900dc2b0d6c26e9f29f5d69d0ff52cb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_001c5d3e8346d888b76c97f60eb9a06b3c6956c6c80e258cfb0a658cff051635->leave($__internal_001c5d3e8346d888b76c97f60eb9a06b3c6956c6c80e258cfb0a658cff051635_prof);

        
        $__internal_3922537aa33fa3963ebeb2f9c0656e5900dc2b0d6c26e9f29f5d69d0ff52cb96->leave($__internal_3922537aa33fa3963ebeb2f9c0656e5900dc2b0d6c26e9f29f5d69d0ff52cb96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

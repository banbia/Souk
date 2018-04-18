<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cb1f40bd645a8f5b5cfe9219a6ccd03b1dee4a70114cfe47382bb195d91080a4 extends Twig_Template
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
        $__internal_d6b536cd8f39251566cd781f20065d0dca2a3613fe0b13938fb4221f2bc91d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b536cd8f39251566cd781f20065d0dca2a3613fe0b13938fb4221f2bc91d07->enter($__internal_d6b536cd8f39251566cd781f20065d0dca2a3613fe0b13938fb4221f2bc91d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_cab554d76b606581970cf7a75633c897461e1dcaf7b2d100fd679970d3df7826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab554d76b606581970cf7a75633c897461e1dcaf7b2d100fd679970d3df7826->enter($__internal_cab554d76b606581970cf7a75633c897461e1dcaf7b2d100fd679970d3df7826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d6b536cd8f39251566cd781f20065d0dca2a3613fe0b13938fb4221f2bc91d07->leave($__internal_d6b536cd8f39251566cd781f20065d0dca2a3613fe0b13938fb4221f2bc91d07_prof);

        
        $__internal_cab554d76b606581970cf7a75633c897461e1dcaf7b2d100fd679970d3df7826->leave($__internal_cab554d76b606581970cf7a75633c897461e1dcaf7b2d100fd679970d3df7826_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}

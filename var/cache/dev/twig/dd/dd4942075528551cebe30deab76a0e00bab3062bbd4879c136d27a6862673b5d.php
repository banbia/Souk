<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_87c5dd7db955e85cd4e52f2f86a8093da70901902edc0b754cfae2397b737ccc extends Twig_Template
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
        $__internal_2166a108ccbaeb6a261cde8e5917c7cf1e8129b35d28fafb8b3fd9f81ed82a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2166a108ccbaeb6a261cde8e5917c7cf1e8129b35d28fafb8b3fd9f81ed82a2a->enter($__internal_2166a108ccbaeb6a261cde8e5917c7cf1e8129b35d28fafb8b3fd9f81ed82a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b899bb1290488eb2955a13a768860ef853fe6c3570dc7435ee2dcfcc3dbdba00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b899bb1290488eb2955a13a768860ef853fe6c3570dc7435ee2dcfcc3dbdba00->enter($__internal_b899bb1290488eb2955a13a768860ef853fe6c3570dc7435ee2dcfcc3dbdba00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2166a108ccbaeb6a261cde8e5917c7cf1e8129b35d28fafb8b3fd9f81ed82a2a->leave($__internal_2166a108ccbaeb6a261cde8e5917c7cf1e8129b35d28fafb8b3fd9f81ed82a2a_prof);

        
        $__internal_b899bb1290488eb2955a13a768860ef853fe6c3570dc7435ee2dcfcc3dbdba00->leave($__internal_b899bb1290488eb2955a13a768860ef853fe6c3570dc7435ee2dcfcc3dbdba00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

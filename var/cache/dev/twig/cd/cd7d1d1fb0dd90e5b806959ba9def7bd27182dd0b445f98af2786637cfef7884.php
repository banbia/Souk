<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5c6d53de101aa60db38ae7291578c5203b1cce73f52eb4318af81838c00c1588 extends Twig_Template
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
        $__internal_a5eb9d2209c09c3133b8c52305f791a333fac0ac57c30069461e618cebe6f8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eb9d2209c09c3133b8c52305f791a333fac0ac57c30069461e618cebe6f8fa->enter($__internal_a5eb9d2209c09c3133b8c52305f791a333fac0ac57c30069461e618cebe6f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8080a987ba18d0509eb863aa7e71d9ae741e72c881e7a37fbbea67ff20785682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8080a987ba18d0509eb863aa7e71d9ae741e72c881e7a37fbbea67ff20785682->enter($__internal_8080a987ba18d0509eb863aa7e71d9ae741e72c881e7a37fbbea67ff20785682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a5eb9d2209c09c3133b8c52305f791a333fac0ac57c30069461e618cebe6f8fa->leave($__internal_a5eb9d2209c09c3133b8c52305f791a333fac0ac57c30069461e618cebe6f8fa_prof);

        
        $__internal_8080a987ba18d0509eb863aa7e71d9ae741e72c881e7a37fbbea67ff20785682->leave($__internal_8080a987ba18d0509eb863aa7e71d9ae741e72c881e7a37fbbea67ff20785682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

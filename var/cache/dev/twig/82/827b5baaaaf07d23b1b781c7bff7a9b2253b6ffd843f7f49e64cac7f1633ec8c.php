<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4833b29a5d1c718787e780246680b741fe755d4830cc249ed98b6433584569a8 extends Twig_Template
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
        $__internal_271efcb8dd42672a3130d19421d918b92066339b88ffa414c3988b0dc2115c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271efcb8dd42672a3130d19421d918b92066339b88ffa414c3988b0dc2115c1d->enter($__internal_271efcb8dd42672a3130d19421d918b92066339b88ffa414c3988b0dc2115c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_be5c974353f9d8eb682438e63290ca94fa092c568c7e1adc71bf047670c5fabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5c974353f9d8eb682438e63290ca94fa092c568c7e1adc71bf047670c5fabb->enter($__internal_be5c974353f9d8eb682438e63290ca94fa092c568c7e1adc71bf047670c5fabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_271efcb8dd42672a3130d19421d918b92066339b88ffa414c3988b0dc2115c1d->leave($__internal_271efcb8dd42672a3130d19421d918b92066339b88ffa414c3988b0dc2115c1d_prof);

        
        $__internal_be5c974353f9d8eb682438e63290ca94fa092c568c7e1adc71bf047670c5fabb->leave($__internal_be5c974353f9d8eb682438e63290ca94fa092c568c7e1adc71bf047670c5fabb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6d79a801df08ccb72b2031f77ba884291dcb69dc3b88ba899b64a39d67e4b6d3 extends Twig_Template
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
        $__internal_ee60ecabeac37632d3d355c0838fee47979a79c61f8837168ea1a64d56052e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee60ecabeac37632d3d355c0838fee47979a79c61f8837168ea1a64d56052e1a->enter($__internal_ee60ecabeac37632d3d355c0838fee47979a79c61f8837168ea1a64d56052e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c2320a8c3bb76edc7d76768eed92ac8ddb5cfbe46890507e5fb4229af823af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2320a8c3bb76edc7d76768eed92ac8ddb5cfbe46890507e5fb4229af823af04->enter($__internal_c2320a8c3bb76edc7d76768eed92ac8ddb5cfbe46890507e5fb4229af823af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ee60ecabeac37632d3d355c0838fee47979a79c61f8837168ea1a64d56052e1a->leave($__internal_ee60ecabeac37632d3d355c0838fee47979a79c61f8837168ea1a64d56052e1a_prof);

        
        $__internal_c2320a8c3bb76edc7d76768eed92ac8ddb5cfbe46890507e5fb4229af823af04->leave($__internal_c2320a8c3bb76edc7d76768eed92ac8ddb5cfbe46890507e5fb4229af823af04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

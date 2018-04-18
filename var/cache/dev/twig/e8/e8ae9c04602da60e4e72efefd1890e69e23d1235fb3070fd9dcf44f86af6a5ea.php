<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_504743940da6aba7e0eb0409fc1d24b267e26622e31163e0ed4b0707a9a7ee63 extends Twig_Template
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
        $__internal_9185451a5968951044aaaa41db2cf6427d00f5158cff199d88c5cc8ec15136b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9185451a5968951044aaaa41db2cf6427d00f5158cff199d88c5cc8ec15136b4->enter($__internal_9185451a5968951044aaaa41db2cf6427d00f5158cff199d88c5cc8ec15136b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6e28f69509317d5c5789f202a55f6d41df3aed8f3e663df089d7275ec7f68fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e28f69509317d5c5789f202a55f6d41df3aed8f3e663df089d7275ec7f68fb9->enter($__internal_6e28f69509317d5c5789f202a55f6d41df3aed8f3e663df089d7275ec7f68fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9185451a5968951044aaaa41db2cf6427d00f5158cff199d88c5cc8ec15136b4->leave($__internal_9185451a5968951044aaaa41db2cf6427d00f5158cff199d88c5cc8ec15136b4_prof);

        
        $__internal_6e28f69509317d5c5789f202a55f6d41df3aed8f3e663df089d7275ec7f68fb9->leave($__internal_6e28f69509317d5c5789f202a55f6d41df3aed8f3e663df089d7275ec7f68fb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

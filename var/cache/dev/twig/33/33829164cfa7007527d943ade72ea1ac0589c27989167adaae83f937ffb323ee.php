<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_225365b4fbfb66c7de772fe96d72cc1c2a4271fa86aa770c2e14ab7f9948dce2 extends Twig_Template
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
        $__internal_8535d3ba7abf106afc5dc9a685671582db444cb520940616a3e4719d868fdbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8535d3ba7abf106afc5dc9a685671582db444cb520940616a3e4719d868fdbdf->enter($__internal_8535d3ba7abf106afc5dc9a685671582db444cb520940616a3e4719d868fdbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_00a45f853a606417eeb1e64decf20d763e94089f2ca7eedbfc605a5efeb22075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a45f853a606417eeb1e64decf20d763e94089f2ca7eedbfc605a5efeb22075->enter($__internal_00a45f853a606417eeb1e64decf20d763e94089f2ca7eedbfc605a5efeb22075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8535d3ba7abf106afc5dc9a685671582db444cb520940616a3e4719d868fdbdf->leave($__internal_8535d3ba7abf106afc5dc9a685671582db444cb520940616a3e4719d868fdbdf_prof);

        
        $__internal_00a45f853a606417eeb1e64decf20d763e94089f2ca7eedbfc605a5efeb22075->leave($__internal_00a45f853a606417eeb1e64decf20d763e94089f2ca7eedbfc605a5efeb22075_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

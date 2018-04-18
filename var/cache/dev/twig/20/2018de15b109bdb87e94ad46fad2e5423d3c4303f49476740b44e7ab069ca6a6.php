<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_58e3118f6ff9d170123e59920f83ec221c2577a8325b29ab233a4e9161e1e1b0 extends Twig_Template
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
        $__internal_7c3552b6aea6b7a1599433119778041d408e32ddf3467ac01739ea179c623ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3552b6aea6b7a1599433119778041d408e32ddf3467ac01739ea179c623ff1->enter($__internal_7c3552b6aea6b7a1599433119778041d408e32ddf3467ac01739ea179c623ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e62e11841989402195ea736bb58788a46fd32b75d38e59ec2d06418e58e40add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62e11841989402195ea736bb58788a46fd32b75d38e59ec2d06418e58e40add->enter($__internal_e62e11841989402195ea736bb58788a46fd32b75d38e59ec2d06418e58e40add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7c3552b6aea6b7a1599433119778041d408e32ddf3467ac01739ea179c623ff1->leave($__internal_7c3552b6aea6b7a1599433119778041d408e32ddf3467ac01739ea179c623ff1_prof);

        
        $__internal_e62e11841989402195ea736bb58788a46fd32b75d38e59ec2d06418e58e40add->leave($__internal_e62e11841989402195ea736bb58788a46fd32b75d38e59ec2d06418e58e40add_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

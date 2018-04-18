<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_729df5c583bea7dbc40c6ce18c778778cbdae3f2f340be64fca3714eaa720d04 extends Twig_Template
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
        $__internal_8254e945b306202370bf798d8be2ce38809630520d5f6a1403123e966c8730c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8254e945b306202370bf798d8be2ce38809630520d5f6a1403123e966c8730c3->enter($__internal_8254e945b306202370bf798d8be2ce38809630520d5f6a1403123e966c8730c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5c5a5e45b585225479db1ce7044b77b972fdf679a09e0f4d88c8f4a0f0cd4a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5a5e45b585225479db1ce7044b77b972fdf679a09e0f4d88c8f4a0f0cd4a05->enter($__internal_5c5a5e45b585225479db1ce7044b77b972fdf679a09e0f4d88c8f4a0f0cd4a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8254e945b306202370bf798d8be2ce38809630520d5f6a1403123e966c8730c3->leave($__internal_8254e945b306202370bf798d8be2ce38809630520d5f6a1403123e966c8730c3_prof);

        
        $__internal_5c5a5e45b585225479db1ce7044b77b972fdf679a09e0f4d88c8f4a0f0cd4a05->leave($__internal_5c5a5e45b585225479db1ce7044b77b972fdf679a09e0f4d88c8f4a0f0cd4a05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_32c7356f37d8be51b51e6842a6b5a400359d59feb517c9c4cc7d20c75ee475ce extends Twig_Template
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
        $__internal_4266698bd5817ba62ffcd9198fc8630fbc4a4d7b1c446d9a160fc3a13cca4326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4266698bd5817ba62ffcd9198fc8630fbc4a4d7b1c446d9a160fc3a13cca4326->enter($__internal_4266698bd5817ba62ffcd9198fc8630fbc4a4d7b1c446d9a160fc3a13cca4326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c996ecf682e264d401a68855906c9132ae85c1026098cf6ecd85a0fd3c1e02dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c996ecf682e264d401a68855906c9132ae85c1026098cf6ecd85a0fd3c1e02dd->enter($__internal_c996ecf682e264d401a68855906c9132ae85c1026098cf6ecd85a0fd3c1e02dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4266698bd5817ba62ffcd9198fc8630fbc4a4d7b1c446d9a160fc3a13cca4326->leave($__internal_4266698bd5817ba62ffcd9198fc8630fbc4a4d7b1c446d9a160fc3a13cca4326_prof);

        
        $__internal_c996ecf682e264d401a68855906c9132ae85c1026098cf6ecd85a0fd3c1e02dd->leave($__internal_c996ecf682e264d401a68855906c9132ae85c1026098cf6ecd85a0fd3c1e02dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

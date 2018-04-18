<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_12ff3a365d8b0071e616e4076159be06186f507e5aefc47e75157f143f3e1e32 extends Twig_Template
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
        $__internal_297f2998011aeaca3f0aa982d99fff6c70d120baf281e58281ea65180cb17965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297f2998011aeaca3f0aa982d99fff6c70d120baf281e58281ea65180cb17965->enter($__internal_297f2998011aeaca3f0aa982d99fff6c70d120baf281e58281ea65180cb17965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_068c037bf48718521d0e3303f21f6d635ec66c796357a10824eff6c6c38ac178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068c037bf48718521d0e3303f21f6d635ec66c796357a10824eff6c6c38ac178->enter($__internal_068c037bf48718521d0e3303f21f6d635ec66c796357a10824eff6c6c38ac178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_297f2998011aeaca3f0aa982d99fff6c70d120baf281e58281ea65180cb17965->leave($__internal_297f2998011aeaca3f0aa982d99fff6c70d120baf281e58281ea65180cb17965_prof);

        
        $__internal_068c037bf48718521d0e3303f21f6d635ec66c796357a10824eff6c6c38ac178->leave($__internal_068c037bf48718521d0e3303f21f6d635ec66c796357a10824eff6c6c38ac178_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

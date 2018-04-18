<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_39bf5f0585a86e06fbfdf5c07402e1aca18815cf49a1115836f30c51f9b64f18 extends Twig_Template
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
        $__internal_58467ccea93563d4f12196c9b01f162cb96da1e099fa9deb50c56e1968ac5df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58467ccea93563d4f12196c9b01f162cb96da1e099fa9deb50c56e1968ac5df3->enter($__internal_58467ccea93563d4f12196c9b01f162cb96da1e099fa9deb50c56e1968ac5df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2799a8b04b5406fe6cd49a16d48e20aabca5df699f894a0647999f8a9baf10c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2799a8b04b5406fe6cd49a16d48e20aabca5df699f894a0647999f8a9baf10c9->enter($__internal_2799a8b04b5406fe6cd49a16d48e20aabca5df699f894a0647999f8a9baf10c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_58467ccea93563d4f12196c9b01f162cb96da1e099fa9deb50c56e1968ac5df3->leave($__internal_58467ccea93563d4f12196c9b01f162cb96da1e099fa9deb50c56e1968ac5df3_prof);

        
        $__internal_2799a8b04b5406fe6cd49a16d48e20aabca5df699f894a0647999f8a9baf10c9->leave($__internal_2799a8b04b5406fe6cd49a16d48e20aabca5df699f894a0647999f8a9baf10c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

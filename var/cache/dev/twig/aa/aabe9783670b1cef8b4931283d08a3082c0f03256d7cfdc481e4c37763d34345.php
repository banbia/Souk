<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_aa6bac907024d4e744df1843c706dd70bdb5f8bb5d6b19739a7d61f9524e469a extends Twig_Template
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
        $__internal_191fc922d3efaaf62191150400f504b313b7556d994fc893dc9b21c6512a9ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191fc922d3efaaf62191150400f504b313b7556d994fc893dc9b21c6512a9ba7->enter($__internal_191fc922d3efaaf62191150400f504b313b7556d994fc893dc9b21c6512a9ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3fa3955ceee843cae9cfe5b5e112187e99bd58e2d99395729d5132f1400f3b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa3955ceee843cae9cfe5b5e112187e99bd58e2d99395729d5132f1400f3b8f->enter($__internal_3fa3955ceee843cae9cfe5b5e112187e99bd58e2d99395729d5132f1400f3b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_191fc922d3efaaf62191150400f504b313b7556d994fc893dc9b21c6512a9ba7->leave($__internal_191fc922d3efaaf62191150400f504b313b7556d994fc893dc9b21c6512a9ba7_prof);

        
        $__internal_3fa3955ceee843cae9cfe5b5e112187e99bd58e2d99395729d5132f1400f3b8f->leave($__internal_3fa3955ceee843cae9cfe5b5e112187e99bd58e2d99395729d5132f1400f3b8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

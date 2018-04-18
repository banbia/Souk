<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_57fc21f12543d9b26dc828cf563ef990e33ede9f850342d95553d931023730a3 extends Twig_Template
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
        $__internal_e7194bbcbcb3bf9ca2377e111865cc2c62f45ffb7a37741321d185cf759b95ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7194bbcbcb3bf9ca2377e111865cc2c62f45ffb7a37741321d185cf759b95ef->enter($__internal_e7194bbcbcb3bf9ca2377e111865cc2c62f45ffb7a37741321d185cf759b95ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_891e1628c8067defc655b1949a6bd2a9c687ae2b6d9970d0f6d0e47796a038b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891e1628c8067defc655b1949a6bd2a9c687ae2b6d9970d0f6d0e47796a038b1->enter($__internal_891e1628c8067defc655b1949a6bd2a9c687ae2b6d9970d0f6d0e47796a038b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e7194bbcbcb3bf9ca2377e111865cc2c62f45ffb7a37741321d185cf759b95ef->leave($__internal_e7194bbcbcb3bf9ca2377e111865cc2c62f45ffb7a37741321d185cf759b95ef_prof);

        
        $__internal_891e1628c8067defc655b1949a6bd2a9c687ae2b6d9970d0f6d0e47796a038b1->leave($__internal_891e1628c8067defc655b1949a6bd2a9c687ae2b6d9970d0f6d0e47796a038b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

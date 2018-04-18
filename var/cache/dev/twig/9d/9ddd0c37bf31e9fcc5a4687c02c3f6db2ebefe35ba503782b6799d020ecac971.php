<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f167c570feecda21278c6448d2311b55f4b79b4f90522c1d0bcc54abe5ae1d13 extends Twig_Template
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
        $__internal_c1a91acd46b4319633326fa9aae180974edeef6bce2b52d9252d817d824d4681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a91acd46b4319633326fa9aae180974edeef6bce2b52d9252d817d824d4681->enter($__internal_c1a91acd46b4319633326fa9aae180974edeef6bce2b52d9252d817d824d4681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8c365ae65779edf659bb809d54a284ca5decc9c9d5d9fc789b7c7a42f50311b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c365ae65779edf659bb809d54a284ca5decc9c9d5d9fc789b7c7a42f50311b4->enter($__internal_8c365ae65779edf659bb809d54a284ca5decc9c9d5d9fc789b7c7a42f50311b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c1a91acd46b4319633326fa9aae180974edeef6bce2b52d9252d817d824d4681->leave($__internal_c1a91acd46b4319633326fa9aae180974edeef6bce2b52d9252d817d824d4681_prof);

        
        $__internal_8c365ae65779edf659bb809d54a284ca5decc9c9d5d9fc789b7c7a42f50311b4->leave($__internal_8c365ae65779edf659bb809d54a284ca5decc9c9d5d9fc789b7c7a42f50311b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

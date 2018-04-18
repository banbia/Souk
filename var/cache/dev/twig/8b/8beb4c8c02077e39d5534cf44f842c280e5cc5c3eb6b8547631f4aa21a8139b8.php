<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b660e3ca8c2878a4f440b5da8144b2397a39cf5ac6f2423345e9ec27a6d93f62 extends Twig_Template
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
        $__internal_6b1a8525d658906b23b584bedc61f5ccea802ea85a19344fe020c002478e71d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1a8525d658906b23b584bedc61f5ccea802ea85a19344fe020c002478e71d7->enter($__internal_6b1a8525d658906b23b584bedc61f5ccea802ea85a19344fe020c002478e71d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_70d6670cb484c9553a96f8d6065c46056e18ebd3fc4c011dc3d159a1db0474c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d6670cb484c9553a96f8d6065c46056e18ebd3fc4c011dc3d159a1db0474c1->enter($__internal_70d6670cb484c9553a96f8d6065c46056e18ebd3fc4c011dc3d159a1db0474c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6b1a8525d658906b23b584bedc61f5ccea802ea85a19344fe020c002478e71d7->leave($__internal_6b1a8525d658906b23b584bedc61f5ccea802ea85a19344fe020c002478e71d7_prof);

        
        $__internal_70d6670cb484c9553a96f8d6065c46056e18ebd3fc4c011dc3d159a1db0474c1->leave($__internal_70d6670cb484c9553a96f8d6065c46056e18ebd3fc4c011dc3d159a1db0474c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

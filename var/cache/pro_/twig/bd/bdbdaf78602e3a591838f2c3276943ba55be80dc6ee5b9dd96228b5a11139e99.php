<?php

/* @Back/abonnements/new.html.twig */
class __TwigTemplate_4c977a20252c65d3d1f06ae84eeb3564dce4a7bb05f272b4976b5b0edc6e7003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "@Back/abonnements/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Abonnement creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
       ";
        // line 8
        echo "    <div class=\"col-md-12\">
        <div class=\"col-md-6\">
            <label> Designation :</label>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "designation", array()), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "designation", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        </div>
        <div class=\"col-md-6\">
            <label> Description :</label>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
        </div>
    </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label> Prix :</label>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            </div>
            <div class=\"col-md-6\">
                <label> Nombre de mois :</label>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nbMois", array()), 'errors');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nbMois", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            </div>
        </div>

<div class=\"col-md-12\" style=\"margin-top: 15px\" >
    <div class=\"col-md-6\">
    <a class =\"btn btn-default\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
    <button type=\"submit\" class=\"btn btn-success \" > Créer </button>
    </div>
</div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Back/abonnements/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  92 => 35,  83 => 29,  79 => 28,  72 => 24,  68 => 23,  59 => 17,  55 => 16,  48 => 12,  44 => 11,  39 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Back/abonnements/new.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle\\Resources\\views\\abonnements\\new.html.twig");
    }
}

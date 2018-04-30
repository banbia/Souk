<?php

/* FrontBundle:reclamations:edit.html.twig */
class __TwigTemplate_010741f3cd8b7f5ab75e31146b371ab42030dd7f8205b8ffbfb4df01cea4eafe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Modifier Votre reclamation </h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit"]) ? $context["edit"] : null), 'form_start');
        echo "
    <div class=\"col-md-12\">

        <div class=\"form-group col-md-8\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "commercial", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "commercial", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group col-md-8\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "contenu", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "contenu", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

    </div>

            <button type=\"submit\" class=\"btn btn-success\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\" ><i class=\"fa fa-check\"></i>  Edit </button>
        <a class=\"btn btn-default\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\"  > <i class=\"fa fa-arrow-left\" > Back to the liste </i> </a>
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit"]) ? $context["edit"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  76 => 23,  72 => 22,  64 => 17,  60 => 16,  56 => 15,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:reclamations:edit.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/edit.html.twig");
    }
}

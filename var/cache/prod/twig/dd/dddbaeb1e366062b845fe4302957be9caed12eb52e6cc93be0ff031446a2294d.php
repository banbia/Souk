<?php

/* FrontBundle:commandes:new.html.twig */
class __TwigTemplate_35bedf5210b4b0869fe8cb8710069c6290c512842afe388de295d8f571daca98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:new.html.twig", 1);
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
        echo "    <h1>Nouvelle Commande</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"col-md-12\">
        <div class=\"form-group col-md-6\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateCom", array()), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateCom", array()), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group col-md-6\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantite", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantite", array()), 'errors');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  63 => 16,  59 => 15,  55 => 14,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:commandes:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/new.html.twig");
    }
}
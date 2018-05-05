<?php

/* BackBundle:abonnements:show.html.twig */
class __TwigTemplate_d75e4605371da44dfdd66bfb48b90d8b73777dc461e0b5ed96b762dda3f33686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:show.html.twig", 1);
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
        echo "    <h1>Abonnement</h1>

        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
               <label>Designation : </label>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? null), "designation", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Description : </label>
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? null), "description", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label>Prix : </label>
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? null), "prix", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Nombre de mois : </label>
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? null), "nbMois", array()), "html", null, true);
        echo "
            </div>

        </div>

            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
    <a class =\"btn btn-default\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
    <a class =\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute(($context["abonnement"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Edit</a>
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\"> Delete </button>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  77 => 30,  73 => 29,  69 => 28,  61 => 23,  54 => 19,  45 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:abonnements:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/show.html.twig");
    }
}

<?php

/* BackBundle:abonnements:show.html.twig */
class __TwigTemplate_c3c6a2ad4dfcc70d00716a88b856aee7981a884e554216c8faed148be4478f13 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        echo "    <h1 class=\"text-warning\">Abonnement ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "designation", array()), "html", null, true);
        echo " </h1>

        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
               <label>Designation : </label>
                ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "designation", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Description : </label>
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "description", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <label>Prix : </label>
                ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "prix", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <label>Nombre de mois : </label>
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "nbMois", array()), "html", null, true);
        echo "
            </div>

        </div>


    <a class =\"btn btn-default\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Retourner à la liste</a>
    <a class =\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i> Modifier</a>


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
        return array (  80 => 30,  76 => 29,  67 => 23,  60 => 19,  51 => 13,  44 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:abonnements:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/show.html.twig");
    }
}

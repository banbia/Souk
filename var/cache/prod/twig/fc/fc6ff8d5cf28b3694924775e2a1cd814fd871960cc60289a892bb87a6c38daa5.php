<?php

/* BackBundle:abonnements:index.html.twig */
class __TwigTemplate_9bef4fe0a0ea0b4d4b179d45789b733f9113d859b32dbe85d19e27ee9dcaa8a3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:index.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/back/css/SafaBarka_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"text-warning\">Liste Des Abonnements</h1>

            <a class=\"btn btn-success\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_new");
        echo "\"><i class=\"fa fa-plus\"></i> Nouvel abonnement</a>
            <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_demandes");
        echo "\"><i class=\"fa fa-list\"></i> Demandes</a>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Nombre de mois </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abonnements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "nbMois", array()), "html", null, true);
            echo "</td>
                <td>

                    <a class =\"btn btn-default\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_show", array("id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file-text-o\"></i> Afficher</a>
                    <a class =\"btn btn-default\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    <a class =\"btn btn-default\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnements_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\"></i> Supprimer</a>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 32,  99 => 31,  95 => 30,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  74 => 23,  70 => 22,  54 => 9,  50 => 8,  46 => 6,  43 => 5,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:abonnements:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/index.html.twig");
    }
}

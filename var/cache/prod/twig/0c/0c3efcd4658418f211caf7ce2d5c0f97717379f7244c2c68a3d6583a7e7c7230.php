<?php

/* BackBundle:categories:index.html.twig */
class __TwigTemplate_db8f5fb2c2b9cabe72dc55be932493db7f0634bf0c1d6ba41b39790e0530094e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:categories:index.html.twig", 1);
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
        echo "    <h3>Categories list</h3>

    <div class=\"col-md-12\">
        <div class=\"form-group col-md-2\" style=\"float: right\">
            <a    href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter </a>
        </div>

    </div>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "designation", array()), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary\"><i class=\"fa fa-pencil\" ></i></a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\" ></i></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "BackBundle:categories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  78 => 28,  74 => 27,  68 => 24,  64 => 23,  61 => 22,  57 => 21,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:categories:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/categories/index.html.twig");
    }
}

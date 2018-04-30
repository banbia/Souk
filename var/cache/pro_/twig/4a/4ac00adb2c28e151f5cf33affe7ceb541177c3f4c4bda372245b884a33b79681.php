<?php

/* @Back/categories/index.html.twig */
class __TwigTemplate_3ff9f486237bc8796a1ebc67503c743400aaf482d8d6ee5be54c2d3a44a70322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "@Back/categories/index.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "designation", array()), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary\"><i class=\"fa fa-pencil\" ></i></a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
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
        return "@Back/categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  74 => 28,  70 => 27,  64 => 24,  60 => 23,  57 => 22,  53 => 21,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Back/categories/index.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle\\Resources\\views\\categories\\index.html.twig");
    }
}

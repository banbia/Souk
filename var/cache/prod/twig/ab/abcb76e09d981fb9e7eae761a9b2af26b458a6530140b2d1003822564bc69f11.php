<?php

/* BackBundle:abonnements:index.html.twig */
class __TwigTemplate_0999e007af2eb00b336bef183978e213c53c0a3248c21ffa924199f37d4ed09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:index.html.twig", 1);
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
        echo "    <h1>Abonnements list</h1>

            <a class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_new");
        echo "\"><i class=\"fa fa-plus\"></i> Nouvel abonnement</a>

    <table class=\"table\">
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abonnements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "designation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "nbMois", array()), "html", null, true);
            echo "</td>
                <td>

                    <a class =\"btn btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_show", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file-text-o\"></i> Show</a>
                    <a class =\"btn btn-default\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> Edit</a>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return array (  90 => 32,  80 => 28,  76 => 27,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  55 => 20,  51 => 19,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:abonnements:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/index.html.twig");
    }
}

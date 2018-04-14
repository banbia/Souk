<?php

/* @Back/commercial/annonces/index.html.twig */
class __TwigTemplate_032449734502c52bdc6e13da9f7fdfcb9fc35448425fae7195c264c767f12982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "@Back/commercial/annonces/index.html.twig", 1);
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
        echo "    <h1>Annonces list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Datecreation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["annonce"], "disponible", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["annonce"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_new");
        echo "\">Create a new annonce</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "@Back/commercial/annonces/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  108 => 39,  96 => 33,  90 => 30,  81 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  55 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Back/commercial/annonces/index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\BackBundle\\Resources\\views\\commercial\\annonces\\index.html.twig");
    }
}

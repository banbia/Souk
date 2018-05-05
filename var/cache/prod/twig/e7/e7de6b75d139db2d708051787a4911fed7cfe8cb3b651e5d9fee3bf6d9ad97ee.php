<?php

/* BackBundle:Signals:index.html.twig */
class __TwigTemplate_58b93ab10f1311584c502ffdc3ac1c8502dde93cd7f855f2a67893c79f3753b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:Signals:index.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#evs\">Evennemnts</a></li>
        <li><a data-toggle=\"tab\" href=\"#anc\">Annonces</a></li>
    </ul>

    <div class=\"tab-content\">
        <div id=\"evs\" class=\"tab-pane fade in active\">
            <h3>EVS</h3>
            <table class=\"table table-condensed\">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de debut</th>
                    <th>Date de Fin</th>
                    <th>Lieu</th>
                    <th>Prix</th>
                    <th>Action</th>
               </tr>

                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dateDeb", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "lieu", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prix", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("evennement" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\"></i>Consulter Signals</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
            </table>
        </div>
        <div id=\"anc\" class=\"tab-pane fade\">
            <h3>Anc</h3>
            <table class=\"table table-condensed\">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>disponible</th>
                        <th>Date deCreation</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 57
            echo "                    <tr>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prix", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "disponible", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                       <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter", array("annonce" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\"></i>Consulter Signals </a></td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>
            </table>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "BackBundle:Signals:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 67,  142 => 63,  138 => 62,  134 => 61,  130 => 60,  126 => 59,  122 => 58,  119 => 57,  115 => 56,  95 => 38,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  70 => 31,  66 => 30,  62 => 29,  59 => 28,  55 => 27,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:Signals:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/Signals/index.html.twig");
    }
}

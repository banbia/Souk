<?php

/* BackBundle:Signals:index.html.twig */
class __TwigTemplate_a1766f1990ffcde59d4121f085ce9dfbde9eabb1475d169db733ddbcf994d002 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
            <h3>Evnement </h3>
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dateDeb", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "lieu", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prix", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", array("evennement" => twig_get_attribute($this->env, $this->source, $context["a"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info \"><i class=\"fa fa-eye\"></i></a></td>
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prix", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "disponible", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                       <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulter", array("annonce" => twig_get_attribute($this->env, $this->source, $context["a"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>

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
        return array (  156 => 67,  146 => 63,  142 => 62,  138 => 61,  134 => 60,  130 => 59,  126 => 58,  123 => 57,  119 => 56,  99 => 38,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  63 => 28,  59 => 27,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:Signals:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/Signals/index.html.twig");
    }
}

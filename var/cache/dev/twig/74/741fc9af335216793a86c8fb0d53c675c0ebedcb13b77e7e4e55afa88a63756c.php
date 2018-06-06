<?php

/* BackBundle:Signals:index.html.twig */
class __TwigTemplate_d25fa4bdf372c2bb17d64a51c1da3cf650b2ae98b143f35c4c1ccf3766cc601a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Signals:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Signals:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new Twig_Error_Runtime('Variable "ev" does not exist.', 27, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["anc"]) || array_key_exists("anc", $context) ? $context["anc"] : (function () { throw new Twig_Error_Runtime('Variable "anc" does not exist.', 56, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  174 => 67,  164 => 63,  160 => 62,  156 => 61,  152 => 60,  148 => 59,  144 => 58,  141 => 57,  137 => 56,  117 => 38,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  81 => 28,  77 => 27,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BackBundle::panel.html.twig\" %}


{% block body %}
    <ul class=\"nav nav-tabs\">
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
                {% for a in ev %}
                    <tr>
                        <td>{{ a.titre }}</td>
                        <td>{{ a.description }}</td>
                        <td>{{ a.dateDeb|date(\"d/m/Y\") }}</td>
                        <td>{{ a.dateFin|date(\"d/m/Y\") }}</td>
                        <td>{{ a.lieu }}</td>
                        <td>{{ a.prix }}</td>
                        <td><a href=\"{{ path('show',{'evennement':a.id}) }}\" class=\"btn btn-info \"><i class=\"fa fa-eye\"></i></a></td>
                    </tr>
                {% endfor %}
                </tbody>
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
                {% for a in anc %}
                    <tr>
                        <td>{{ a.titre }}</td>
                        <td>{{ a.description }}</td>
                        <td>{{ a.prix }}</td>
                        <td>{{ a.disponible }}</td>
                        <td>{{ a.dateCreation|date(\"d/m/Y\") }}</td>
                       <td><a href=\"{{ path('consulter',{'annonce':a.id}) }}\"  class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>

                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

    </div>

{% endblock %}
", "BackBundle:Signals:index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/Signals/index.html.twig");
    }
}

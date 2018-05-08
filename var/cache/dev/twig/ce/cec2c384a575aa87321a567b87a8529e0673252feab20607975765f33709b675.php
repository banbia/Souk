<?php

/* BackBundle:signalsAnc:listeSignalsAnc.html.twig */
class __TwigTemplate_a568f37465e4fc5a8268fcf16a396e1ca255076ab2af4a9810fe042d296a2645 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:signalsAnc:listeSignalsAnc.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsAnc:listeSignalsAnc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsAnc:listeSignalsAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 38
        echo "
    <h2> La liste des signaux</h2>
    <br/>

    <table  class=\"col-md-9 table table-condensed\"  >
        <tr>

            <td><b>Client</b></td>
            <td><b>Contenu</b> </td>
            <td><b>Date du signale</b></td>
            <td><b>Action</b></td>
        </tr>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) || array_key_exists("coms", $context) ? $context["coms"] : (function () { throw new Twig_Error_Runtime('Variable "coms" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 51
            echo "
        <tr>

            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "contenu", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateSg", array()), "D-M-Y"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:signalsAnc:listeSignalsAnc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 59,  87 => 56,  83 => 55,  79 => 54,  74 => 51,  70 => 50,  56 => 38,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}

    {#
<div class=\"row\">
    {% for com in coms %}

        <div class=\"col-md-12\">

            <div class=\"one-comment\">
                <div class=\"col-sm-1\">
                    <div class=\"thumbnail\">
                        <img class=\"img-responsive user-photo\" src=\"https://ssl.gstatic.com/accounts/ui/avatar_2x.png\">
                    </div>
                    <!-- /thumbnail -->
                </div>
                <!-- /col-sm-1 -->

                <div class=\"col-sm-5\">
                    <div class=\"panel panel-default\">

                        <div class=\"panel-heading\">
                            <strong>{{ com.client.username }}</strong> <label class=\"text-muted text-right\"> signalé le {{ com.dateSg|date('D-M-Y') }} </label>
                        </div>
                        <div class=\"panel-body\">
                            {{ com.contenu }}
                        </div>
                        <!-- /panel-body -->
                    </div>
                    <!-- /panel panel-default -->
                </div>
                <!-- /col-sm-5 -->
            </div>
        </div>
    {% endfor %}
</div> #}

    <h2> La liste des signaux</h2>
    <br/>

    <table  class=\"col-md-9 table table-condensed\"  >
        <tr>

            <td><b>Client</b></td>
            <td><b>Contenu</b> </td>
            <td><b>Date du signale</b></td>
            <td><b>Action</b></td>
        </tr>
    {% for com in coms %}

        <tr>

            <td>{{ com.client.username }}</td>
            <td> {{ com.contenu }}</td>
            <td>{{ com.dateSg|date('D-M-Y') }}</td>
        </tr>
    {% endfor %}
    </table>
{% endblock %}", "BackBundle:signalsAnc:listeSignalsAnc.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/signalsAnc/listeSignalsAnc.html.twig");
    }
}

<?php

/* BackBundle:signalsAnc:listeSignalsAnc.html.twig */
class __TwigTemplate_70cf7a73d2a67b56106170ef296be97ab83ee282823d36d7011ef67de0e46aa7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsAnc:listeSignalsAnc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsAnc:listeSignalsAnc.html.twig"));

        // line 1
        echo "<div class=\"row\">

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) || array_key_exists("coms", $context) ? $context["coms"] : (function () { throw new Twig_Error_Runtime('Variable "coms" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 4
            echo "
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
                            <strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                        </div>
                        <div class=\"panel-body\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "contenu", array()), "html", null, true);
            echo "
                        </div>
                        <!-- /panel-body -->
                    </div>
                    <!-- /panel panel-default -->
                </div>
                <!-- /col-sm-5 -->
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  79 => 33,  63 => 23,  55 => 20,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">

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
                            <strong>{{ com.client.username }}</strong> <label class=\"text-muted text-right\"> commenté le {{ com.dateCmt|date('D-M-Y') }} </label>
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
</div>", "BackBundle:signalsAnc:listeSignalsAnc.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/signalsAnc/listeSignalsAnc.html.twig");
    }
}

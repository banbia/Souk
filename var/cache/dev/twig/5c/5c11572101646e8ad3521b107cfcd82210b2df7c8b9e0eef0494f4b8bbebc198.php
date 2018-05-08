<?php

/* FrontBundle:evennements:new_commentairesEvs.html.twig */
class __TwigTemplate_e46d3e86fb715db53eb08c37faf4244f3b09f2a3997e868be9d029c59af4ca93 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new_commentairesEvs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new_commentairesEvs.html.twig"));

        // line 1
        echo "

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalsEvsN_new", array("evennement" => (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new Twig_Error_Runtime('Variable "evennement" does not exist.', 7, $this->source); })()))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new Twig_Error_Runtime('Variable "formCommentaire" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new Twig_Error_Runtime('Variable "formCommentaire" does not exist.', 13, $this->source); })()), "contenu", array()), 'errors');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new Twig_Error_Runtime('Variable "formCommentaire" does not exist.', 14, $this->source); })()), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
                <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new Twig_Error_Runtime('Variable "formCommentaire" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms_Evs"]) || array_key_exists("coms_Evs", $context) ? $context["coms_Evs"] : (function () { throw new Twig_Error_Runtime('Variable "coms_Evs" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 23
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
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "client", array()), "id", array()))) {
                // line 42
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_delete", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentairesEvs_Edit", array("evennement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "evennement", array()), "id", array()), "com" => twig_get_attribute($this->env, $this->source, $context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a>
                                ";
            }
            // line 45
            echo "                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 47
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
        // line 57
        echo "    </div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:new_commentairesEvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  112 => 47,  108 => 45,  103 => 43,  98 => 42,  96 => 41,  90 => 40,  71 => 23,  67 => 22,  58 => 16,  53 => 14,  49 => 13,  45 => 12,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
            <a href=\"{{ path('signalsEvsN_new', {'evennement' : evennement}) }}\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            {{ form_start(formCommentaire) }}
                {{ form_errors(formCommentaire.contenu) }}
                {{ form_widget(formCommentaire.contenu, {'attr': {'class': 'comment form-control'}}) }}
                <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>
            {{ form_end(formCommentaire) }}
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">
        {% for com in coms_Evs %}


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
                                {% if app.user.id  == com.client.id %}
                                    <a href=\"{{ path('commentairesEvs_delete',{'evennement':com.evennement.id,'com':com.id}) }}\"><i class=\"fa fa-trash-o\"></i></a>
                                    <a href=\"{{ path('commentairesEvs_Edit',{'evennement':com.evennement.id,'com':com.id}) }}\"><i class=\"fa fa-edit\"></i></a>
                                {% endif %}
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
    </div>

", "FrontBundle:evennements:new_commentairesEvs.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/new_commentairesEvs.html.twig");
    }
}

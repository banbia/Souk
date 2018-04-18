<?php

/* FrontBundle:annonces:new_commentairesEvs.html.twig */
class __TwigTemplate_64b4359001c1d0becfcb7b6ed0c2456d7c162e3974a5672cef9d9c0694e008d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:new_commentairesEvs.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb68d4a3bfc1ba6447eab753507b74270a1899a608f14a0fb78984cca4b17714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb68d4a3bfc1ba6447eab753507b74270a1899a608f14a0fb78984cca4b17714->enter($__internal_cb68d4a3bfc1ba6447eab753507b74270a1899a608f14a0fb78984cca4b17714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:new_commentairesEvs.html.twig"));

        $__internal_afd31fddd6753f1597fb3416ef42423eceac1ef8cef2f653a5bcd34fde3bd5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd31fddd6753f1597fb3416ef42423eceac1ef8cef2f653a5bcd34fde3bd5ab->enter($__internal_afd31fddd6753f1597fb3416ef42423eceac1ef8cef2f653a5bcd34fde3bd5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:new_commentairesEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb68d4a3bfc1ba6447eab753507b74270a1899a608f14a0fb78984cca4b17714->leave($__internal_cb68d4a3bfc1ba6447eab753507b74270a1899a608f14a0fb78984cca4b17714_prof);

        
        $__internal_afd31fddd6753f1597fb3416ef42423eceac1ef8cef2f653a5bcd34fde3bd5ab->leave($__internal_afd31fddd6753f1597fb3416ef42423eceac1ef8cef2f653a5bcd34fde3bd5ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce913ec7f5805ee623e5d5979c68cbffe14ff4dbf49d088122dfa8fdf8e79c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce913ec7f5805ee623e5d5979c68cbffe14ff4dbf49d088122dfa8fdf8e79c2b->enter($__internal_ce913ec7f5805ee623e5d5979c68cbffe14ff4dbf49d088122dfa8fdf8e79c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bb0747977c8bdd4bfc69bae6e61d1cb2c1377f40b1fc9509e0db464bfb04260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb0747977c8bdd4bfc69bae6e61d1cb2c1377f40b1fc9509e0db464bfb04260->enter($__internal_5bb0747977c8bdd4bfc69bae6e61d1cb2c1377f40b1fc9509e0db464bfb04260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <a href=\"#\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Send </button>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms_Evs"]) ? $context["coms_Evs"] : $this->getContext($context, "coms_Evs")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 27
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
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                ";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                // line 45
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_delete", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_Edit", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a>
                                ";
            }
            // line 48
            echo "                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "contenu", array()), "html", null, true);
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
        // line 60
        echo "    </div>

    <!-- /row -->
";
        
        $__internal_5bb0747977c8bdd4bfc69bae6e61d1cb2c1377f40b1fc9509e0db464bfb04260->leave($__internal_5bb0747977c8bdd4bfc69bae6e61d1cb2c1377f40b1fc9509e0db464bfb04260_prof);

        
        $__internal_ce913ec7f5805ee623e5d5979c68cbffe14ff4dbf49d088122dfa8fdf8e79c2b->leave($__internal_ce913ec7f5805ee623e5d5979c68cbffe14ff4dbf49d088122dfa8fdf8e79c2b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:new_commentairesEvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 60,  129 => 50,  125 => 48,  120 => 46,  115 => 45,  113 => 44,  107 => 43,  89 => 27,  85 => 26,  75 => 19,  70 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}


    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <a href=\"#\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            {{ form_start(form) }}
            {{ form_errors(form.contenu) }}
            {{ form_widget(form.contenu, {'attr': {'class': 'comment form-control'}}) }}
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Send </button>
            {{ form_end(form) }}
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

    <!-- /row -->
{% endblock %}", "FrontBundle:annonces:new_commentairesEvs.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/annonces/new_commentairesEvs.html.twig");
    }
}

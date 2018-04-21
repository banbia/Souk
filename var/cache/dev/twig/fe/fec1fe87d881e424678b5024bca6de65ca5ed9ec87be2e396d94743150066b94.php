<?php

/* FrontBundle:evennements:new_commentairesEvs.html.twig */
class __TwigTemplate_f7df5fa12076bb543f3272eabdfc15482dd00374540e547934f91665c030a9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:new_commentairesEvs.html.twig", 1);
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
        $__internal_cb946b48df7eb0660eec525038ac604052daa488e43df708cec89c815cd02394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb946b48df7eb0660eec525038ac604052daa488e43df708cec89c815cd02394->enter($__internal_cb946b48df7eb0660eec525038ac604052daa488e43df708cec89c815cd02394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new_commentairesEvs.html.twig"));

        $__internal_a5133c1c61678bfd40a834a6b2da0f2af51ca89acfbc7d969f90afa66256dda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5133c1c61678bfd40a834a6b2da0f2af51ca89acfbc7d969f90afa66256dda7->enter($__internal_a5133c1c61678bfd40a834a6b2da0f2af51ca89acfbc7d969f90afa66256dda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:new_commentairesEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb946b48df7eb0660eec525038ac604052daa488e43df708cec89c815cd02394->leave($__internal_cb946b48df7eb0660eec525038ac604052daa488e43df708cec89c815cd02394_prof);

        
        $__internal_a5133c1c61678bfd40a834a6b2da0f2af51ca89acfbc7d969f90afa66256dda7->leave($__internal_a5133c1c61678bfd40a834a6b2da0f2af51ca89acfbc7d969f90afa66256dda7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edec243315dadf2e10f993bffc86f6895e04172dadd2dffe05075688f813e2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edec243315dadf2e10f993bffc86f6895e04172dadd2dffe05075688f813e2fa->enter($__internal_edec243315dadf2e10f993bffc86f6895e04172dadd2dffe05075688f813e2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1054ea6cebfdda29c29e6e1d8a9bdccf2daada772c5959f52022cef56bbca689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1054ea6cebfdda29c29e6e1d8a9bdccf2daada772c5959f52022cef56bbca689->enter($__internal_1054ea6cebfdda29c29e6e1d8a9bdccf2daada772c5959f52022cef56bbca689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signalsEvsN_new", array("evennement" => (isset($context["evennement"]) ? $context["evennement"] : $this->getContext($context, "evennement")))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Send </button>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms_Evs"]) ? $context["coms_Evs"] : $this->getContext($context, "coms_Evs")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 25
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
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                ";
            // line 43
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                // line 44
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_delete", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_Edit", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a>
                                ";
            }
            // line 47
            echo "                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 49
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
        // line 59
        echo "    </div>

    <!-- /row -->
";
        
        $__internal_1054ea6cebfdda29c29e6e1d8a9bdccf2daada772c5959f52022cef56bbca689->leave($__internal_1054ea6cebfdda29c29e6e1d8a9bdccf2daada772c5959f52022cef56bbca689_prof);

        
        $__internal_edec243315dadf2e10f993bffc86f6895e04172dadd2dffe05075688f813e2fa->leave($__internal_edec243315dadf2e10f993bffc86f6895e04172dadd2dffe05075688f813e2fa_prof);

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
        return array (  147 => 59,  131 => 49,  127 => 47,  122 => 45,  117 => 44,  115 => 43,  109 => 42,  90 => 25,  86 => 24,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
            <a href=\"{{ path('signalsEvsN_new', {'evennement' : evennement}) }}\"><i class=\"fa fa-flag pull-right\"></i></a>
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
{% endblock %}", "FrontBundle:evennements:new_commentairesEvs.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/evennements/new_commentairesEvs.html.twig");
    }
}

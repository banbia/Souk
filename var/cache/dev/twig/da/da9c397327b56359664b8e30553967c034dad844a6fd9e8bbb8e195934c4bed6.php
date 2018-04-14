<?php

/* FrontBundle:commentairesAnc:new_commentairesAnc.html.twig */
class __TwigTemplate_e8a4309971e75a16cb3c7a184718cc795c5f07843da4764dc434530f9ccd8a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig", 1);
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
        $__internal_c40865be242b101d8c9e17e45060cea607d196fcd5115dff85d2c8150f6b71db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40865be242b101d8c9e17e45060cea607d196fcd5115dff85d2c8150f6b71db->enter($__internal_c40865be242b101d8c9e17e45060cea607d196fcd5115dff85d2c8150f6b71db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig"));

        $__internal_f1ec7ee92a4c2d9364580ebccb0b8514723129d3577d1e6e8ccd865f966121ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ec7ee92a4c2d9364580ebccb0b8514723129d3577d1e6e8ccd865f966121ee->enter($__internal_f1ec7ee92a4c2d9364580ebccb0b8514723129d3577d1e6e8ccd865f966121ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c40865be242b101d8c9e17e45060cea607d196fcd5115dff85d2c8150f6b71db->leave($__internal_c40865be242b101d8c9e17e45060cea607d196fcd5115dff85d2c8150f6b71db_prof);

        
        $__internal_f1ec7ee92a4c2d9364580ebccb0b8514723129d3577d1e6e8ccd865f966121ee->leave($__internal_f1ec7ee92a4c2d9364580ebccb0b8514723129d3577d1e6e8ccd865f966121ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05925ac78aebc29b4f22caf8c70fa1fa64a9e51226bfb3520c48f42d4a451e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05925ac78aebc29b4f22caf8c70fa1fa64a9e51226bfb3520c48f42d4a451e6d->enter($__internal_05925ac78aebc29b4f22caf8c70fa1fa64a9e51226bfb3520c48f42d4a451e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a12ca1483495792192acf2ade41d9b68bb5bb860a0085f978207a02ab3b60a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12ca1483495792192acf2ade41d9b68bb5bb860a0085f978207a02ab3b60a1d->enter($__internal_a12ca1483495792192acf2ade41d9b68bb5bb860a0085f978207a02ab3b60a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

\t<!-- /row -->
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
\t\t\t<button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Send </button>
\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t<br>
\t\t\t<br>
\t\t</div>
\t</div>
\t<div class=\"row\">

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 21
            echo "
\t\t\t<div class=\"col-md-12\">

\t\t\t\t<div class=\"one-comment\">
\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t<img class=\"img-responsive user-photo\" src=\"https://ssl.gstatic.com/accounts/ui/avatar_2x.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /thumbnail -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /col-sm-1 -->

\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"panel panel-default\">

\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<strong>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
\t\t\t\t\t\t\t\t";
            // line 38
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesAnc_delete", array("id_Anc" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fa fa-edit\"></i></a>
\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "contenu", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /panel-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /panel panel-default -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /col-sm-5 -->
\t\t\t\t</div>
\t\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t</div>

<!-- /row -->
";
        
        $__internal_a12ca1483495792192acf2ade41d9b68bb5bb860a0085f978207a02ab3b60a1d->leave($__internal_a12ca1483495792192acf2ade41d9b68bb5bb860a0085f978207a02ab3b60a1d_prof);

        
        $__internal_05925ac78aebc29b4f22caf8c70fa1fa64a9e51226bfb3520c48f42d4a451e6d->leave($__internal_05925ac78aebc29b4f22caf8c70fa1fa64a9e51226bfb3520c48f42d4a451e6d_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  120 => 44,  116 => 42,  109 => 39,  107 => 38,  101 => 37,  83 => 21,  79 => 20,  69 => 13,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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


\t<!-- /row -->
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
                {{ form_start(form) }}
                    {{ form_errors(form.contenu) }}
                    {{ form_widget(form.contenu, {'attr': {'class': 'comment form-control'}}) }}
\t\t\t<button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Send </button>
\t\t\t\t{{ form_end(form) }}
\t\t\t<br>
\t\t\t<br>
\t\t</div>
\t</div>
\t<div class=\"row\">

        {% for com in coms %}

\t\t\t<div class=\"col-md-12\">

\t\t\t\t<div class=\"one-comment\">
\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t<img class=\"img-responsive user-photo\" src=\"https://ssl.gstatic.com/accounts/ui/avatar_2x.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /thumbnail -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /col-sm-1 -->

\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"panel panel-default\">

\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<strong>{{ com.client.username }}</strong> <label class=\"text-muted text-right\"> commenté le {{ com.dateCmt|date('D-M-Y') }} </label>
\t\t\t\t\t\t\t\t{% if app.user.id  == com.client.id %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commentairesAnc_delete',{'id_Anc':com.id}) }}\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fa fa-edit\"></i></a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
                                {{ com.contenu }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /panel-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /panel panel-default -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /col-sm-5 -->
\t\t\t\t</div>
\t\t\t</div>
        {% endfor %}
\t</div>

<!-- /row -->
{% endblock %}", "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/commentairesAnc/new_commentairesAnc.html.twig");
    }
}

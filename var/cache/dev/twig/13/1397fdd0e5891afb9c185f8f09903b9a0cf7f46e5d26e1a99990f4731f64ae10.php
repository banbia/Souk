<?php

/* FrontBundle:annonces:new_commentairesAnc.html.twig */
class __TwigTemplate_07854be9413bc2f181e9672a2908f404bf5c2bae48a563f05d029922c4bb6c5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:new_commentairesAnc.html.twig", 1);
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
        $__internal_2cc1376cee4765ba0952f8bc09fad9e30b0815af88f6973cc0133823e374c9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc1376cee4765ba0952f8bc09fad9e30b0815af88f6973cc0133823e374c9d4->enter($__internal_2cc1376cee4765ba0952f8bc09fad9e30b0815af88f6973cc0133823e374c9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:new_commentairesAnc.html.twig"));

        $__internal_39b0a8099710e374153e38c0824a248b3708ce97273fdafdfa95d2dd822bd2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b0a8099710e374153e38c0824a248b3708ce97273fdafdfa95d2dd822bd2c9->enter($__internal_39b0a8099710e374153e38c0824a248b3708ce97273fdafdfa95d2dd822bd2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:new_commentairesAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc1376cee4765ba0952f8bc09fad9e30b0815af88f6973cc0133823e374c9d4->leave($__internal_2cc1376cee4765ba0952f8bc09fad9e30b0815af88f6973cc0133823e374c9d4_prof);

        
        $__internal_39b0a8099710e374153e38c0824a248b3708ce97273fdafdfa95d2dd822bd2c9->leave($__internal_39b0a8099710e374153e38c0824a248b3708ce97273fdafdfa95d2dd822bd2c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc8e0301496fc0d05882eaf23d22c84bf725fed514be9810c31d682bc484755e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8e0301496fc0d05882eaf23d22c84bf725fed514be9810c31d682bc484755e->enter($__internal_bc8e0301496fc0d05882eaf23d22c84bf725fed514be9810c31d682bc484755e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdf59a7169aae35caf5fe8809ec3696be4c5cf9d0fffcc54a951431741ddcf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf59a7169aae35caf5fe8809ec3696be4c5cf9d0fffcc54a951431741ddcf5d->enter($__internal_bdf59a7169aae35caf5fe8809ec3696be4c5cf9d0fffcc54a951431741ddcf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

\t<!-- /row -->
\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-6\">
\t\t\t<a href=\"#\"><i class=\"fa fa-flag pull-right\"></i></a>
\t\t<br/>
\t\t</div>
\t</div>
\t\t<div class=\"col-md-6\">
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
\t\t\t<button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Send </button>
\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t<br>
\t\t\t<br>
\t\t</div>
\t</div>
\t<div class=\"row\">

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 27
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
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
\t\t\t\t\t\t\t\t";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesAnc_delete", array("com" => $this->getAttribute($context["com"], "id", array()), "annonce" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesAnc_Edit", array("com" => $this->getAttribute($context["com"], "id", array()), "annonce" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a>
\t\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
                                ";
            // line 50
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
        // line 60
        echo "\t</div>

<!-- /row -->
";
        
        $__internal_bdf59a7169aae35caf5fe8809ec3696be4c5cf9d0fffcc54a951431741ddcf5d->leave($__internal_bdf59a7169aae35caf5fe8809ec3696be4c5cf9d0fffcc54a951431741ddcf5d_prof);

        
        $__internal_bc8e0301496fc0d05882eaf23d22c84bf725fed514be9810c31d682bc484755e->leave($__internal_bc8e0301496fc0d05882eaf23d22c84bf725fed514be9810c31d682bc484755e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:new_commentairesAnc.html.twig";
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


\t<!-- /row -->
\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-6\">
\t\t\t<a href=\"#\"><i class=\"fa fa-flag pull-right\"></i></a>
\t\t<br/>
\t\t</div>
\t</div>
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
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commentairesAnc_delete',{'com':com.id,'annonce':annonce.id}) }}\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commentairesAnc_Edit',{'com':com.id,'annonce':annonce.id}) }}\"><i class=\"fa fa-edit\"></i></a>
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
{% endblock %}", "FrontBundle:annonces:new_commentairesAnc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/annonces/new_commentairesAnc.html.twig");
    }
}

<?php

/* FrontBundle:commentairesAnc:new_commentairesAnc.html.twig */
class __TwigTemplate_ca222f37f8bbb8f76137d6cf614d0587e98922acaab4842e74725ada38b4c65b extends Twig_Template
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
        $__internal_9772a42bb8ae3d8ac48055f1e5fd2ab62c233d6f525dd4d05cad17f86f3e5856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9772a42bb8ae3d8ac48055f1e5fd2ab62c233d6f525dd4d05cad17f86f3e5856->enter($__internal_9772a42bb8ae3d8ac48055f1e5fd2ab62c233d6f525dd4d05cad17f86f3e5856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig"));

        $__internal_9c16df5ee559287ee29bee637aa77b5bb669732228e4fed20512f3dc07ed4502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c16df5ee559287ee29bee637aa77b5bb669732228e4fed20512f3dc07ed4502->enter($__internal_9c16df5ee559287ee29bee637aa77b5bb669732228e4fed20512f3dc07ed4502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9772a42bb8ae3d8ac48055f1e5fd2ab62c233d6f525dd4d05cad17f86f3e5856->leave($__internal_9772a42bb8ae3d8ac48055f1e5fd2ab62c233d6f525dd4d05cad17f86f3e5856_prof);

        
        $__internal_9c16df5ee559287ee29bee637aa77b5bb669732228e4fed20512f3dc07ed4502->leave($__internal_9c16df5ee559287ee29bee637aa77b5bb669732228e4fed20512f3dc07ed4502_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd2b40bbe6bc1a4638ee099529e6213f623c10ce431e182234603497ea929b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2b40bbe6bc1a4638ee099529e6213f623c10ce431e182234603497ea929b4e->enter($__internal_bd2b40bbe6bc1a4638ee099529e6213f623c10ce431e182234603497ea929b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b8427a700677b575bd7682f84925d8d0809e3a4f1597e5e7e36fa9ea4648761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8427a700677b575bd7682f84925d8d0809e3a4f1597e5e7e36fa9ea4648761->enter($__internal_9b8427a700677b575bd7682f84925d8d0809e3a4f1597e5e7e36fa9ea4648761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"\">

\t<!-- /row -->
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<textarea class=\"comment form-control\" name=\"lname\" ></textarea>
\t\t\t<button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o
\t\"></i> Send </button>
\t\t\t<br>
\t\t\t<br>
\t\t</div>
\t</div>
\t<div class=\"row\">

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coms"] ?? $this->getContext($context, "coms")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 19
            echo "\t\t\t<div class=\"col-md-12\">

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
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
\t\t\t\t\t\t\t\t";
            // line 35
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesAnc_delete");
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fa fa-edit\"></i></a>
\t\t\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
                                ";
            // line 41
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
        // line 51
        echo "\t</div>


</div>
<!-- /row -->
";
        
        $__internal_9b8427a700677b575bd7682f84925d8d0809e3a4f1597e5e7e36fa9ea4648761->leave($__internal_9b8427a700677b575bd7682f84925d8d0809e3a4f1597e5e7e36fa9ea4648761_prof);

        
        $__internal_bd2b40bbe6bc1a4638ee099529e6213f623c10ce431e182234603497ea929b4e->leave($__internal_bd2b40bbe6bc1a4638ee099529e6213f623c10ce431e182234603497ea929b4e_prof);

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
        return array (  121 => 51,  105 => 41,  101 => 39,  94 => 36,  92 => 35,  86 => 34,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"\">

\t<!-- /row -->
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<textarea class=\"comment form-control\" name=\"lname\" ></textarea>
\t\t\t<button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o
\t\"></i> Send </button>
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
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commentairesAnc_delete') }}\"><i class=\"fa fa-trash-o\"></i></a>
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


</div>
<!-- /row -->
{% endblock %}", "FrontBundle:commentairesAnc:new_commentairesAnc.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commentairesAnc/new_commentairesAnc.html.twig");
    }
}

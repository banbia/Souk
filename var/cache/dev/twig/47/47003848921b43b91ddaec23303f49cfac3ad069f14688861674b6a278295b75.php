<?php

/* BackBundle:signalsEvs:listeSignalsEvs.html.twig */
class __TwigTemplate_cd7bffa9bbc0a04ae1a66a93f66126bd09414407f30607bb5cf1f781f66b9daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:signalsEvs:listeSignalsEvs.html.twig", 1);
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
        $__internal_fb3059ddf6e82a2901b4e11ba854ed921ba172f24e02be653e5910e08c3688cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3059ddf6e82a2901b4e11ba854ed921ba172f24e02be653e5910e08c3688cd->enter($__internal_fb3059ddf6e82a2901b4e11ba854ed921ba172f24e02be653e5910e08c3688cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsEvs:listeSignalsEvs.html.twig"));

        $__internal_3ec7f681b7db52936d3def28db4d0806ce161709c8e2409bd6027d29f1d2111a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec7f681b7db52936d3def28db4d0806ce161709c8e2409bd6027d29f1d2111a->enter($__internal_3ec7f681b7db52936d3def28db4d0806ce161709c8e2409bd6027d29f1d2111a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsEvs:listeSignalsEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3059ddf6e82a2901b4e11ba854ed921ba172f24e02be653e5910e08c3688cd->leave($__internal_fb3059ddf6e82a2901b4e11ba854ed921ba172f24e02be653e5910e08c3688cd_prof);

        
        $__internal_3ec7f681b7db52936d3def28db4d0806ce161709c8e2409bd6027d29f1d2111a->leave($__internal_3ec7f681b7db52936d3def28db4d0806ce161709c8e2409bd6027d29f1d2111a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb5da90d4bf0e49631f16ff9298374ebc153814a7197bd8b688177a5f0e1fcfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5da90d4bf0e49631f16ff9298374ebc153814a7197bd8b688177a5f0e1fcfd->enter($__internal_eb5da90d4bf0e49631f16ff9298374ebc153814a7197bd8b688177a5f0e1fcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b65634c77c680b1298c0ebf62a6e0d28ef33bf9717d2da1fdfc11ca79e7f4dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65634c77c680b1298c0ebf62a6e0d28ef33bf9717d2da1fdfc11ca79e7f4dff->enter($__internal_b65634c77c680b1298c0ebf62a6e0d28ef33bf9717d2da1fdfc11ca79e7f4dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 6
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
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> signalé le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateSg", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 25
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
        // line 35
        echo "    </div>
";
        
        $__internal_b65634c77c680b1298c0ebf62a6e0d28ef33bf9717d2da1fdfc11ca79e7f4dff->leave($__internal_b65634c77c680b1298c0ebf62a6e0d28ef33bf9717d2da1fdfc11ca79e7f4dff_prof);

        
        $__internal_eb5da90d4bf0e49631f16ff9298374ebc153814a7197bd8b688177a5f0e1fcfd->leave($__internal_eb5da90d4bf0e49631f16ff9298374ebc153814a7197bd8b688177a5f0e1fcfd_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:signalsEvs:listeSignalsEvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  82 => 25,  74 => 22,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
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
    </div>
{% endblock %}", "BackBundle:signalsEvs:listeSignalsEvs.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\BackBundle/Resources/views/signalsEvs/listeSignalsEvs.html.twig");
    }
}

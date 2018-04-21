<?php

/* BackBundle:signalsAnc:listeSignalsAnc.html.twig */
class __TwigTemplate_1e3410e16c63816bd5593345ea7b2b38198c672790405d449a95abc0ae4b1a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_345b2effd7ca8175fd0ebca8983420c6380c2ff26bfef575ee21bb4ebb894f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345b2effd7ca8175fd0ebca8983420c6380c2ff26bfef575ee21bb4ebb894f96->enter($__internal_345b2effd7ca8175fd0ebca8983420c6380c2ff26bfef575ee21bb4ebb894f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsAnc:listeSignalsAnc.html.twig"));

        $__internal_426dd65501b4f7dfa904ad59f258b7754e905ec5d6be201d966e4cb20fe9cc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426dd65501b4f7dfa904ad59f258b7754e905ec5d6be201d966e4cb20fe9cc23->enter($__internal_426dd65501b4f7dfa904ad59f258b7754e905ec5d6be201d966e4cb20fe9cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:signalsAnc:listeSignalsAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345b2effd7ca8175fd0ebca8983420c6380c2ff26bfef575ee21bb4ebb894f96->leave($__internal_345b2effd7ca8175fd0ebca8983420c6380c2ff26bfef575ee21bb4ebb894f96_prof);

        
        $__internal_426dd65501b4f7dfa904ad59f258b7754e905ec5d6be201d966e4cb20fe9cc23->leave($__internal_426dd65501b4f7dfa904ad59f258b7754e905ec5d6be201d966e4cb20fe9cc23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b13b5870cd80772b386f8186d0d1c1f279e4cbaba21f9d5cc67fb477c58e422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b13b5870cd80772b386f8186d0d1c1f279e4cbaba21f9d5cc67fb477c58e422->enter($__internal_0b13b5870cd80772b386f8186d0d1c1f279e4cbaba21f9d5cc67fb477c58e422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7ba89fa4739d7253221abe3f02b6055bc72ce36155370ef8672d82307b60495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ba89fa4739d7253221abe3f02b6055bc72ce36155370ef8672d82307b60495->enter($__internal_a7ba89fa4739d7253221abe3f02b6055bc72ce36155370ef8672d82307b60495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
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
        echo "</div>
";
        
        $__internal_a7ba89fa4739d7253221abe3f02b6055bc72ce36155370ef8672d82307b60495->leave($__internal_a7ba89fa4739d7253221abe3f02b6055bc72ce36155370ef8672d82307b60495_prof);

        
        $__internal_0b13b5870cd80772b386f8186d0d1c1f279e4cbaba21f9d5cc67fb477c58e422->leave($__internal_0b13b5870cd80772b386f8186d0d1c1f279e4cbaba21f9d5cc67fb477c58e422_prof);

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
{% endblock %}", "BackBundle:signalsAnc:listeSignalsAnc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\BackBundle/Resources/views/signalsAnc/listeSignalsAnc.html.twig");
    }
}

<?php

/* FrontBundle:commentairesAnc:liste_commentaireAnc.html.twig */
class __TwigTemplate_57c1ff75e7466faee0610dea88fd5b98fdf3d21b2fcb78fbb1b3057879628cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesAnc:liste_commentaireAnc.html.twig", 1);
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
        $__internal_d8c4c81cbf3ad3ef99589db4d8f0b887c436396798595c17e1caf37cc182a1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c4c81cbf3ad3ef99589db4d8f0b887c436396798595c17e1caf37cc182a1e4->enter($__internal_d8c4c81cbf3ad3ef99589db4d8f0b887c436396798595c17e1caf37cc182a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:liste_commentaireAnc.html.twig"));

        $__internal_a0c6c298d61bc7adf8dc315f7734a6c7437ef9f14bcfdea10dd594787028366c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c6c298d61bc7adf8dc315f7734a6c7437ef9f14bcfdea10dd594787028366c->enter($__internal_a0c6c298d61bc7adf8dc315f7734a6c7437ef9f14bcfdea10dd594787028366c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesAnc:liste_commentaireAnc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c4c81cbf3ad3ef99589db4d8f0b887c436396798595c17e1caf37cc182a1e4->leave($__internal_d8c4c81cbf3ad3ef99589db4d8f0b887c436396798595c17e1caf37cc182a1e4_prof);

        
        $__internal_a0c6c298d61bc7adf8dc315f7734a6c7437ef9f14bcfdea10dd594787028366c->leave($__internal_a0c6c298d61bc7adf8dc315f7734a6c7437ef9f14bcfdea10dd594787028366c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a905712a599f927d4d0f00c378419843bd4addcef4c5cc6ee95580a38022fe76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a905712a599f927d4d0f00c378419843bd4addcef4c5cc6ee95580a38022fe76->enter($__internal_a905712a599f927d4d0f00c378419843bd4addcef4c5cc6ee95580a38022fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8fc25efd3612d6602d900f5080103ab1088b27c56f9137a3b5668651a5d7c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fc25efd3612d6602d900f5080103ab1088b27c56f9137a3b5668651a5d7c61->enter($__internal_f8fc25efd3612d6602d900f5080103ab1088b27c56f9137a3b5668651a5d7c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">

        <!-- /row -->
        <div class=\"col-md-12\">
            <input type=\"text\" id=\"lname\" name=\"lname\" >
            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-commenting-o
                \"></i> Send </button>
            <br>
            <br>
        </div>
        <div class=\"row\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["CommentairesAnc"]);
        foreach ($context['_seq'] as $context["_key"] => $context["CommentairesAnc"]) {
            // line 16
            echo "            <div class=\"col-md-12\">

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
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["CommentairesAnc"], "nom", array()), "html", null, true);
            echo "</strong> <span class=\"text-muted\"> commented ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["CommentairesAnc"], "dateCmt", array()), "html", null, true);
            echo " </span>
                                <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesAnc_delete");
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                <a href=\"\"><i class=\"fa fa-edit\"></i></a>
                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["CommentairesAnc"], "contenu", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CommentairesAnc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->
";
        
        $__internal_f8fc25efd3612d6602d900f5080103ab1088b27c56f9137a3b5668651a5d7c61->leave($__internal_f8fc25efd3612d6602d900f5080103ab1088b27c56f9137a3b5668651a5d7c61_prof);

        
        $__internal_a905712a599f927d4d0f00c378419843bd4addcef4c5cc6ee95580a38022fe76->leave($__internal_a905712a599f927d4d0f00c378419843bd4addcef4c5cc6ee95580a38022fe76_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesAnc:liste_commentaireAnc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  96 => 36,  89 => 32,  83 => 31,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">

        <!-- /row -->
        <div class=\"col-md-12\">
            <input type=\"text\" id=\"lname\" name=\"lname\" >
            <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-commenting-o
                \"></i> Send </button>
            <br>
            <br>
        </div>
        <div class=\"row\">
    {% for CommentairesAnc in CommentairesAnc %}
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
                                <strong>{{ CommentairesAnc.nom }}</strong> <span class=\"text-muted\"> commented {{ CommentairesAnc.dateCmt }} </span>
                                <a href=\"{{ path('commentairesAnc_delete') }}\"><i class=\"fa fa-trash-o\"></i></a>
                                <a href=\"\"><i class=\"fa fa-edit\"></i></a>
                            </div>
                            <div class=\"panel-body\">
                                {{ CommentairesAnc.contenu }}
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

    </div>
    <!-- /container -->
{% endblock %}", "FrontBundle:commentairesAnc:liste_commentaireAnc.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commentairesAnc/liste_commentaireAnc.html.twig");
    }
}

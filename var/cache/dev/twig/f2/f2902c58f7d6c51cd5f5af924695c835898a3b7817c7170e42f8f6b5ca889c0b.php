<?php

/* FrontBundle:commentairesEvs:new_commentairesEvs.html.twig */
class __TwigTemplate_aaf095fd7b54b7b37956e54f98b5a5e01dbdecb3ca1696be43845d6a504ffb30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesEvs:new_commentairesEvs.html.twig", 1);
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
        $__internal_07114afa340d4c484a2cfa1cf96c1e260495491078a501f6b1b4f31f1f6450a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07114afa340d4c484a2cfa1cf96c1e260495491078a501f6b1b4f31f1f6450a0->enter($__internal_07114afa340d4c484a2cfa1cf96c1e260495491078a501f6b1b4f31f1f6450a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:new_commentairesEvs.html.twig"));

        $__internal_9f7686717234ab4ee716201dfc1c9f2fe17f4671898cf9c460a1962b6560f1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7686717234ab4ee716201dfc1c9f2fe17f4671898cf9c460a1962b6560f1f6->enter($__internal_9f7686717234ab4ee716201dfc1c9f2fe17f4671898cf9c460a1962b6560f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commentairesEvs:new_commentairesEvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07114afa340d4c484a2cfa1cf96c1e260495491078a501f6b1b4f31f1f6450a0->leave($__internal_07114afa340d4c484a2cfa1cf96c1e260495491078a501f6b1b4f31f1f6450a0_prof);

        
        $__internal_9f7686717234ab4ee716201dfc1c9f2fe17f4671898cf9c460a1962b6560f1f6->leave($__internal_9f7686717234ab4ee716201dfc1c9f2fe17f4671898cf9c460a1962b6560f1f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_157d14b7f7728e7dcbeaeb19a6139aeae9d1e2c93b80ec4420992b3d3d834b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157d14b7f7728e7dcbeaeb19a6139aeae9d1e2c93b80ec4420992b3d3d834b03->enter($__internal_157d14b7f7728e7dcbeaeb19a6139aeae9d1e2c93b80ec4420992b3d3d834b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b567551dbaa1d2d0ae7e1ef4df7040f8f67777aa81f1c25097e3f2828347c7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b567551dbaa1d2d0ae7e1ef4df7040f8f67777aa81f1c25097e3f2828347c7f7->enter($__internal_b567551dbaa1d2d0ae7e1ef4df7040f8f67777aa81f1c25097e3f2828347c7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-6\">
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
            <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Send </button>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms_Evs"]) ? $context["coms_Evs"] : $this->getContext($context, "coms_Evs")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 21
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
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                ";
            // line 38
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                // line 39
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_delete", array("id_Evs" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                    <a href=\"\"><i class=\"fa fa-edit\"></i></a>
                                ";
            }
            // line 42
            echo "                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 44
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
        // line 54
        echo "    </div>

    <!-- /row -->
";
        
        $__internal_b567551dbaa1d2d0ae7e1ef4df7040f8f67777aa81f1c25097e3f2828347c7f7->leave($__internal_b567551dbaa1d2d0ae7e1ef4df7040f8f67777aa81f1c25097e3f2828347c7f7_prof);

        
        $__internal_157d14b7f7728e7dcbeaeb19a6139aeae9d1e2c93b80ec4420992b3d3d834b03->leave($__internal_157d14b7f7728e7dcbeaeb19a6139aeae9d1e2c93b80ec4420992b3d3d834b03_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesEvs:new_commentairesEvs.html.twig";
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


    <!-- /row -->
    <div class=\"row\">
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
                                    <a href=\"{{ path('commentairesEvs_delete',{'id_Evs':com.id}) }}\"><i class=\"fa fa-trash-o\"></i></a>
                                    <a href=\"\"><i class=\"fa fa-edit\"></i></a>
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
{% endblock %}", "FrontBundle:commentairesEvs:new_commentairesEvs.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/commentairesEvs/new_commentairesEvs.html.twig");
    }
}

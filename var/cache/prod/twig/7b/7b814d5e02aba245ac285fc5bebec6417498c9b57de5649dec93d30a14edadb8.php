<?php

/* FrontBundle:evennements:new_commentairesEvs.html.twig */
class __TwigTemplate_7d51040584780ab9c775d6e02bc8c3f014f2b70376cd76043601234bb8c31d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signalsEvsN_new", array("evennement" => (isset($context["evennement"]) ? $context["evennement"] : null))), "html", null, true);
        echo "\"><i class=\"fa fa-flag pull-right\"></i></a>
                <br/>
            </div>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCommentaire"]) ? $context["formCommentaire"] : null), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formCommentaire"]) ? $context["formCommentaire"] : null), "contenu", array()), 'errors');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formCommentaire"]) ? $context["formCommentaire"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "comment form-control")));
        echo "
                <button type=\"submit\" class=\"btn sign pull-right\"><i class=\"fa fa-commenting-o\"></i> Commenter </button>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCommentaire"]) ? $context["formCommentaire"] : null), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms_Evs"]) ? $context["coms_Evs"] : null));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "username", array()), "html", null, true);
            echo "</strong> <label class=\"text-muted text-right\"> commenté le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "dateCmt", array()), "D-M-Y"), "html", null, true);
            echo " </label>
                                ";
            // line 41
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["com"], "client", array()), "id", array()))) {
                // line 42
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_delete", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash-o\"></i></a>
                                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentairesEvs_Edit", array("evennement" => $this->getAttribute($this->getAttribute($context["com"], "evennement", array()), "id", array()), "com" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a>
                                ";
            }
            // line 45
            echo "                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 47
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
        // line 57
        echo "    </div>

";
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
        return array (  118 => 57,  102 => 47,  98 => 45,  93 => 43,  88 => 42,  86 => 41,  80 => 40,  61 => 23,  57 => 22,  48 => 16,  43 => 14,  39 => 13,  35 => 12,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:evennements:new_commentairesEvs.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/evennements/new_commentairesEvs.html.twig");
    }
}

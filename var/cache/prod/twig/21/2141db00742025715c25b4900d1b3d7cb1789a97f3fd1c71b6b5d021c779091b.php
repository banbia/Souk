<?php

/* @Front/commentairesAnc/liste_commentaireAnc.html.twig */
class __TwigTemplate_e61edf2640ade4338c99f65f445d9604a1b715b3692c1b13fa0e8949d6577acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@Front/commentairesAnc/liste_commentaireAnc.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "@Front/commentairesAnc/liste_commentaireAnc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 46,  78 => 36,  71 => 32,  65 => 31,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Front/commentairesAnc/liste_commentaireAnc.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle\\Resources\\views\\commentairesAnc\\liste_commentaireAnc.html.twig");
    }
}

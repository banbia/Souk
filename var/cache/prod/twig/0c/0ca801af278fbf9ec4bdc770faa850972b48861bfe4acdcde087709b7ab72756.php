<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c6959587a307f4e2b660691b982905281ce6c1b6ace79742393ad072d7e620b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'formulaire' => array($this, 'block_formulaire'),
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
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
    }

    // line 7
    public function block_formulaire($context, array $blocks = array())
    {
        // line 8
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


<script>
    \$(document).ready(function(){
        \$('select').removeAttr('multiple');
        \$('select').val('ROLE_CLIENT');
        \$('#img-com').hide();
        \$('#img-cl').show();
        \$('#fos_user_registration_form_titre_commercial').val('null');
        \$('#com').hide(100);
        \$(\"#btn-cl\").addClass('active');
        \$(\"#btn-com\").removeClass('active');
        \$('select').css('visibility','hidden');
        \$(\"#btn-cl\").click(function(){
            \$('#com').hide(100);
            \$('#cl').show(100);

            \$('#img-com').hide(100);
            \$('#img-cl').show(100);
            \$('#fos_user_registration_form_titre_commercial').val('null');
            \$('select').val('ROLE_CLIENT');
            \$(\"#btn-cl\").addClass('active');
            \$(\"#btn-com\").removeClass('active');
        });
        \$(\"#btn-com\").click(function(){
            \$('#fos_user_registration_form_titre_commercial').val('');
            \$('#com').show(100);
            \$('#cl').hide(100);

            \$('#img-cl').hide(100);
            \$('#img-com').show(100);

            \$('select').val('ROLE_COM');
            \$(\"#btn-cl\").removeClass('active');
            \$(\"#btn-com\").addClass('active');
        });
    });
</script>
<ul class=\"nav nav-tabs nav-justified\" role=\"tablist\" id=\"tabs\">
    <li id=\"btn-cl\" class=\"active\"> <span>Vous êtes un Client   </span>  <img id=\"img-cl\" src=\"/bundles/front/images/check.png\"/></li>
    <li id=\"btn-com\"> <span>Vous êtes un Commercial   </span>   <img id=\"img-com\" src=\"/bundles/front/images/check.png\"/></li>
</ul>
    <div class=\"row\" id=\"tab\">
        <div class=\"col-md-12\">
            <br/>
            <br/>
            <br/>
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\" class=\"box-form text-left\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'label');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'errors');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'label');
        echo "
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'errors');
        echo "
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'errors');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "adresse", array()), 'label');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "adresse", array()), 'errors');
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-12\" id=\"com\">
                    <div class=\"form-group\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre_commercial", array()), 'label');
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre_commercial", array()), 'errors');
        echo "
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre_commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                </div>
                <div class=\"col-md-12\" id=\"cl\">



                </div>
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'label');
        echo "
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
        echo "
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'label');
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'errors');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'label');
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'label');
        echo "
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-8 text-center\">
                    <input type=\"submit\" value=\"S'inscrire\" class=\"sign\" />
                </div>
            </div>
            <div class=\"col-md-3\"></div>
            ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </div></div>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 127,  237 => 119,  233 => 118,  229 => 117,  223 => 114,  219 => 113,  215 => 112,  206 => 106,  202 => 105,  198 => 104,  192 => 101,  188 => 100,  184 => 99,  170 => 88,  166 => 87,  162 => 86,  154 => 81,  150 => 80,  146 => 79,  140 => 76,  136 => 75,  132 => 74,  124 => 69,  120 => 68,  116 => 67,  110 => 64,  106 => 63,  102 => 62,  93 => 56,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

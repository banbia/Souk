<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f73158d7146f7ab637c958b779dbf35d72cef5f214331201a61d86b3dee44999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
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

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        // line 5
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
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\" class=\"box-form text-left\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'label');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'label');
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'errors');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'label');
        echo "
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'errors');
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-12\" id=\"com\">
                    <div class=\"form-group\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre_commercial", array()), 'label');
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre_commercial", array()), 'errors');
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre_commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                </div>
                <div class=\"col-md-12\" id=\"cl\">



                </div>
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label');
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'label');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'label');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-8 text-center\">
                    <input type=\"submit\" value=\"S'inscrire\" class=\"sign\" />
                </div>
            </div>
            <div class=\"col-md-3\"></div>
            ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  236 => 124,  225 => 116,  221 => 115,  217 => 114,  211 => 111,  207 => 110,  203 => 109,  194 => 103,  190 => 102,  186 => 101,  180 => 98,  176 => 97,  172 => 96,  158 => 85,  154 => 84,  150 => 83,  142 => 78,  138 => 77,  134 => 76,  128 => 73,  124 => 72,  120 => 71,  112 => 66,  108 => 65,  104 => 64,  98 => 61,  94 => 60,  90 => 59,  81 => 53,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}

<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_59b1d1be42059dfc210584b96ec95ea1f1de88250e1de2f4297014e551c6993a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_a57033f993461e0162b47c3ea583622b27f003861afab40b59b79e3c42e08b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57033f993461e0162b47c3ea583622b27f003861afab40b59b79e3c42e08b9e->enter($__internal_a57033f993461e0162b47c3ea583622b27f003861afab40b59b79e3c42e08b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_40e1e5ef149ca53950c3fdf6732156b785d0dff92ed909f81662ccef7638b8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e1e5ef149ca53950c3fdf6732156b785d0dff92ed909f81662ccef7638b8ab->enter($__internal_40e1e5ef149ca53950c3fdf6732156b785d0dff92ed909f81662ccef7638b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57033f993461e0162b47c3ea583622b27f003861afab40b59b79e3c42e08b9e->leave($__internal_a57033f993461e0162b47c3ea583622b27f003861afab40b59b79e3c42e08b9e_prof);

        
        $__internal_40e1e5ef149ca53950c3fdf6732156b785d0dff92ed909f81662ccef7638b8ab->leave($__internal_40e1e5ef149ca53950c3fdf6732156b785d0dff92ed909f81662ccef7638b8ab_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_7faaa15da6b9317406fbfdde5a3c38579ec69389fa9fa89e5458b333bf09b05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7faaa15da6b9317406fbfdde5a3c38579ec69389fa9fa89e5458b333bf09b05f->enter($__internal_7faaa15da6b9317406fbfdde5a3c38579ec69389fa9fa89e5458b333bf09b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_68bf3fe241a3b12f702bdd661d668e7fb09fe1cbef4847135ab3549856606590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bf3fe241a3b12f702bdd661d668e7fb09fe1cbef4847135ab3549856606590->enter($__internal_68bf3fe241a3b12f702bdd661d668e7fb09fe1cbef4847135ab3549856606590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\" class=\"box-form text-left\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile", array()), 'label');
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile", array()), 'errors');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-12\" id=\"com\">
                    <div class=\"form-group\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_commercial", array()), 'label');
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_commercial", array()), 'errors');
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                </div>
                <div class=\"col-md-12\" id=\"cl\">



                </div>
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div></div>


";
        
        $__internal_68bf3fe241a3b12f702bdd661d668e7fb09fe1cbef4847135ab3549856606590->leave($__internal_68bf3fe241a3b12f702bdd661d668e7fb09fe1cbef4847135ab3549856606590_prof);

        
        $__internal_7faaa15da6b9317406fbfdde5a3c38579ec69389fa9fa89e5458b333bf09b05f->leave($__internal_7faaa15da6b9317406fbfdde5a3c38579ec69389fa9fa89e5458b333bf09b05f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 124,  243 => 116,  239 => 115,  235 => 114,  229 => 111,  225 => 110,  221 => 109,  212 => 103,  208 => 102,  204 => 101,  198 => 98,  194 => 97,  190 => 96,  176 => 85,  172 => 84,  168 => 83,  160 => 78,  156 => 77,  152 => 76,  146 => 73,  142 => 72,  138 => 71,  130 => 66,  126 => 65,  122 => 64,  116 => 61,  112 => 60,  108 => 59,  99 => 53,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block formulaire %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


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
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\" class=\"box-form text-left\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.nom) }}
                        {{ form_errors(form.nom) }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.prenom) }}
                        {{ form_errors(form.prenom) }}
                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                    </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.mobile) }}
                        {{ form_errors(form.mobile) }}
                        {{ form_widget(form.mobile, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.adresse) }}
                        {{ form_errors(form.adresse) }}
                        {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"col-md-12\" id=\"com\">
                    <div class=\"form-group\">
                        {{ form_label(form.titre_commercial) }}
                        {{ form_errors(form.titre_commercial) }}
                        {{ form_widget(form.titre_commercial, {'attr': {'class': 'form-control'}}) }}
                    </div>

                </div>
                <div class=\"col-md-12\" id=\"cl\">



                </div>
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.email) }}
                        {{ form_errors(form.email) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.username) }}
                        {{ form_errors(form.username) }}
                        {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.plainPassword.first) }}
                        {{ form_errors(form.plainPassword.first) }}
                        {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.plainPassword.second) }}
                        {{ form_errors(form.plainPassword.second) }}
                        {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"col-md-8 text-center\">
                    <input type=\"submit\" value=\"S'inscrire\" class=\"sign\" />
                </div>
            </div>
            <div class=\"col-md-3\"></div>
            {{ form_end(form) }}

        </div></div>


{% endblock formulaire %}
", "@FOSUser/Registration/register.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

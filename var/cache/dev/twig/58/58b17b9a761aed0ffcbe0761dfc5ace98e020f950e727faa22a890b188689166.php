<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_c0c05bd37fa9c59a5afa6e3034cc53cd7ca086835e8f4e5042d9b51cdd512a68 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_b57300819b086811954e1b0379a226f7c487323b7395c459c510cba51879daa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57300819b086811954e1b0379a226f7c487323b7395c459c510cba51879daa6->enter($__internal_b57300819b086811954e1b0379a226f7c487323b7395c459c510cba51879daa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_8e0373c27ec5d69821bddda3c769c3382cea5f7f2b68b1ca8bd3a59f82e7740a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0373c27ec5d69821bddda3c769c3382cea5f7f2b68b1ca8bd3a59f82e7740a->enter($__internal_8e0373c27ec5d69821bddda3c769c3382cea5f7f2b68b1ca8bd3a59f82e7740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));
=======
        $__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5->enter($__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e->enter($__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e

        // line 2
        echo "
<div class=\"fos_user_user_show\">
<<<<<<< HEAD
    <p >
        <label class=\"text-default\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
        <label class=\"text-primary\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</label>
    </p>
    <p>
        <label class=\"text-default\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
        <label class=\"text-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</label>

    </p>
    <p>
        ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
            // line 15
            echo "            <label class=\"text-default\">Titre Commercial:</label>
            <label class=\"text-primary\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "TitreCommercial", array()), "html", null, true);
            echo "</label>
        ";
        }
        // line 18
        echo "    </p>


    <div class=\"container\">
        <h1>Mes données</h1>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 \">
                <div class=\"service-box\">
                    <div class=\"service-icon yellow\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-trophy\"></i>
                            <h3>Commandes</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3> En attente</h3>
                        <h3> Confirmées</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 \">
                <div class=\"service-box\">
                    <div class=\"service-icon orange\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-anchor\"></i>
                            <h3>Evennements</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3>";
        // line 47
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "evennements", array())), "html", null, true);
        echo " Evennements</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-box \">
                    <div class=\"service-icon red\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-trophy\"></i>
                            <h3>Abonnements</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3>";
        // line 60
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "abonnements", array())), "html", null, true);
        echo " Abonnements</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-box\">
                    <div class=\"service-icon grey\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-paper-plane-o\"></i>
                            <h3>Reclamations</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3>";
        // line 73
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "reclamations", array())), "html", null, true);
        echo " Reclamations</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_b57300819b086811954e1b0379a226f7c487323b7395c459c510cba51879daa6->leave($__internal_b57300819b086811954e1b0379a226f7c487323b7395c459c510cba51879daa6_prof);

        
        $__internal_8e0373c27ec5d69821bddda3c769c3382cea5f7f2b68b1ca8bd3a59f82e7740a->leave($__internal_8e0373c27ec5d69821bddda3c769c3382cea5f7f2b68b1ca8bd3a59f82e7740a_prof);
=======
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5->leave($__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5_prof);

        
        $__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e->leave($__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e_prof);
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  124 => 73,  108 => 60,  92 => 47,  61 => 18,  56 => 16,  53 => 15,  51 => 14,  44 => 10,  40 => 9,  34 => 6,  30 => 5,  25 => 2,);
=======
        return array (  35 => 5,  29 => 4,  25 => 2,);
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
<<<<<<< HEAD
    <p >
        <label class=\"text-default\">{{ 'profile.show.username'|trans }}:</label>
        <label class=\"text-primary\">{{ user.username }}</label>
    </p>
    <p>
        <label class=\"text-default\">{{ 'profile.show.email'|trans }}:</label>
        <label class=\"text-primary\">{{ user.email }}</label>

    </p>
    <p>
        {% if is_granted('ROLE_COM') %}
            <label class=\"text-default\">Titre Commercial:</label>
            <label class=\"text-primary\">{{ user.TitreCommercial }}</label>
        {% endif %}
    </p>


    <div class=\"container\">
        <h1>Mes données</h1>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 \">
                <div class=\"service-box\">
                    <div class=\"service-icon yellow\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-trophy\"></i>
                            <h3>Commandes</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3> En attente</h3>
                        <h3> Confirmées</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 \">
                <div class=\"service-box\">
                    <div class=\"service-icon orange\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-anchor\"></i>
                            <h3>Evennements</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3>{{ user.evennements|length }} Evennements</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-box \">
                    <div class=\"service-icon red\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-trophy\"></i>
                            <h3>Abonnements</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3>{{ user.abonnements|length }} Abonnements</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-box\">
                    <div class=\"service-icon grey\">
                        <div class=\"front-content\">
                            <i class=\"fa fa-paper-plane-o\"></i>
                            <h3>Reclamations</h3>
                        </div>
                    </div>
                    <div class=\"service-content\">
                        <h3>{{ user.reclamations|length }} Reclamations</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
=======
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e
    }
}

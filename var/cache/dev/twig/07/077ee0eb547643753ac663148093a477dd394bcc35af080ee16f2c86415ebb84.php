<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9cb938f53246c09709c06a6f8bdca7d928923b0018733cd53108a9a14be54d6a extends Twig_Template
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
        $__internal_d0d844be8141cc23153b44c835bbcf8fc9ada957c360fd08db9ea73e2d167bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d844be8141cc23153b44c835bbcf8fc9ada957c360fd08db9ea73e2d167bfc->enter($__internal_d0d844be8141cc23153b44c835bbcf8fc9ada957c360fd08db9ea73e2d167bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_03492aaacb05844ac100cbb828ccf81f1fbc1f009f7355ed9397f55df7c1629d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03492aaacb05844ac100cbb828ccf81f1fbc1f009f7355ed9397f55df7c1629d->enter($__internal_03492aaacb05844ac100cbb828ccf81f1fbc1f009f7355ed9397f55df7c1629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p >
        <label class=\"text-default\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
        <label class=\"text-primary\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</label>
    </p>
    <p>
        <label class=\"text-default\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
        <label class=\"text-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "TitreCommercial", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "evennements", array())), "html", null, true);
        echo " Evennements</h3>
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("");
        echo "\">Mes abonnements</a>
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
        // line 61
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "abonnements", array())), "html", null, true);
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
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "reclamations", array())), "html", null, true);
        echo " Reclamations</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_d0d844be8141cc23153b44c835bbcf8fc9ada957c360fd08db9ea73e2d167bfc->leave($__internal_d0d844be8141cc23153b44c835bbcf8fc9ada957c360fd08db9ea73e2d167bfc_prof);

        
        $__internal_03492aaacb05844ac100cbb828ccf81f1fbc1f009f7355ed9397f55df7c1629d->leave($__internal_03492aaacb05844ac100cbb828ccf81f1fbc1f009f7355ed9397f55df7c1629d_prof);

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
        return array (  128 => 74,  112 => 61,  96 => 48,  92 => 47,  61 => 18,  56 => 16,  53 => 15,  51 => 14,  44 => 10,  40 => 9,  34 => 6,  30 => 5,  25 => 2,);
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
                        <a href=\"{{ path('') }}\">Mes abonnements</a>
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
", "@FOSUser/Profile/show_content.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}

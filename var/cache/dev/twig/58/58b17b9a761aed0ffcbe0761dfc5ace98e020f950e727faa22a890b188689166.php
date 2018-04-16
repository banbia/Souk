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
        $__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5->enter($__internal_9caf1abaa1d78c1021688095eafe4f3927bbe37468783f2cc70fe33e51c378a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e->enter($__internal_92e99bc97912278510a86ad7cc888d5f2a607462bbc950b9faf9d763e671093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
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
        return array (  35 => 5,  29 => 4,  25 => 2,);
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
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}

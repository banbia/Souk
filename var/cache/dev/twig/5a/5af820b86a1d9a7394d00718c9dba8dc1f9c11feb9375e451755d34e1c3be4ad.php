<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_7d0979fcb7d71c1d00f7eee260fb009f3e745abe88f090339bdf7b9800710f01 extends Twig_Template
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
        $__internal_6ee9c9331b2eca92b710128837c1d7f753a0158aa4f0f9f14cada469f53203cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee9c9331b2eca92b710128837c1d7f753a0158aa4f0f9f14cada469f53203cc->enter($__internal_6ee9c9331b2eca92b710128837c1d7f753a0158aa4f0f9f14cada469f53203cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_398881335e8672c20d3449e82839c39f4bd711c4c9ab1880db1e2c26a6ebe1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398881335e8672c20d3449e82839c39f4bd711c4c9ab1880db1e2c26a6ebe1dc->enter($__internal_398881335e8672c20d3449e82839c39f4bd711c4c9ab1880db1e2c26a6ebe1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6ee9c9331b2eca92b710128837c1d7f753a0158aa4f0f9f14cada469f53203cc->leave($__internal_6ee9c9331b2eca92b710128837c1d7f753a0158aa4f0f9f14cada469f53203cc_prof);

        
        $__internal_398881335e8672c20d3449e82839c39f4bd711c4c9ab1880db1e2c26a6ebe1dc->leave($__internal_398881335e8672c20d3449e82839c39f4bd711c4c9ab1880db1e2c26a6ebe1dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/show_content.html.twig");
    }
}

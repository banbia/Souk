<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_27cdec725b3e6ee10b80cafd5a839c49455959e3c3ebaa85236485181ca8ac2d extends Twig_Template
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
        $__internal_a4d9779acd34bb4da92e5fffc89439df7e31aad4e6d38c8f4b638c91e9e4ea49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d9779acd34bb4da92e5fffc89439df7e31aad4e6d38c8f4b638c91e9e4ea49->enter($__internal_a4d9779acd34bb4da92e5fffc89439df7e31aad4e6d38c8f4b638c91e9e4ea49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_c6941548aaad943441d6c76caf8d08ef8c37292fea51f9d7b611e3d50cd311d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6941548aaad943441d6c76caf8d08ef8c37292fea51f9d7b611e3d50cd311d9->enter($__internal_c6941548aaad943441d6c76caf8d08ef8c37292fea51f9d7b611e3d50cd311d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_a4d9779acd34bb4da92e5fffc89439df7e31aad4e6d38c8f4b638c91e9e4ea49->leave($__internal_a4d9779acd34bb4da92e5fffc89439df7e31aad4e6d38c8f4b638c91e9e4ea49_prof);

        
        $__internal_c6941548aaad943441d6c76caf8d08ef8c37292fea51f9d7b611e3d50cd311d9->leave($__internal_c6941548aaad943441d6c76caf8d08ef8c37292fea51f9d7b611e3d50cd311d9_prof);

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

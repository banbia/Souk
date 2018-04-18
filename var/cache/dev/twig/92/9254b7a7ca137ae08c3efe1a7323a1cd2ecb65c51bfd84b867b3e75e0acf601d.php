<?php

/* BackBundle:abonnements:new.html.twig */
class __TwigTemplate_acfe2e1dbbea64b4079c7eca52e28ca429e23140279dd4bd074c0673d1cbda11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c0e63c42c54d6990820a72cdbdc3695c4dc6170d0a884dd570791819e94d279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0e63c42c54d6990820a72cdbdc3695c4dc6170d0a884dd570791819e94d279->enter($__internal_7c0e63c42c54d6990820a72cdbdc3695c4dc6170d0a884dd570791819e94d279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $__internal_6fbf27dffe81437935f4e55136d92d7dc2bc5ae219049721d9769d3716126340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbf27dffe81437935f4e55136d92d7dc2bc5ae219049721d9769d3716126340->enter($__internal_6fbf27dffe81437935f4e55136d92d7dc2bc5ae219049721d9769d3716126340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c0e63c42c54d6990820a72cdbdc3695c4dc6170d0a884dd570791819e94d279->leave($__internal_7c0e63c42c54d6990820a72cdbdc3695c4dc6170d0a884dd570791819e94d279_prof);

        
        $__internal_6fbf27dffe81437935f4e55136d92d7dc2bc5ae219049721d9769d3716126340->leave($__internal_6fbf27dffe81437935f4e55136d92d7dc2bc5ae219049721d9769d3716126340_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3854bac3110218d793b40d958e9f92c9812366e3671169005def01c8110273c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3854bac3110218d793b40d958e9f92c9812366e3671169005def01c8110273c8->enter($__internal_3854bac3110218d793b40d958e9f92c9812366e3671169005def01c8110273c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93b347c5d2b712aec0d13e513bedada9563fcb2ecce6b7f58e1cf335936a0be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b347c5d2b712aec0d13e513bedada9563fcb2ecce6b7f58e1cf335936a0be2->enter($__internal_93b347c5d2b712aec0d13e513bedada9563fcb2ecce6b7f58e1cf335936a0be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnement creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_93b347c5d2b712aec0d13e513bedada9563fcb2ecce6b7f58e1cf335936a0be2->leave($__internal_93b347c5d2b712aec0d13e513bedada9563fcb2ecce6b7f58e1cf335936a0be2_prof);

        
        $__internal_3854bac3110218d793b40d958e9f92c9812366e3671169005def01c8110273c8->leave($__internal_3854bac3110218d793b40d958e9f92c9812366e3671169005def01c8110273c8_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
    <h1>Abonnement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('abonnements_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BackBundle:abonnements:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/new.html.twig");
    }
}

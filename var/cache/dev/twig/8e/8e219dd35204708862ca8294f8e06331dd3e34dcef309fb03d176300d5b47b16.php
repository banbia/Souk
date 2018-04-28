<?php

/* BackBundle:abonnements:edit.html.twig */
class __TwigTemplate_f528919c7e46630c0c8eeb084228438e2f4c069a6d61dcc9883341ddf820b3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:edit.html.twig", 1);
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
        $__internal_c2cfceb1cd59ecd916a7f351a0adfbee449f70496e43639ae914c18f5226ccbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cfceb1cd59ecd916a7f351a0adfbee449f70496e43639ae914c18f5226ccbb->enter($__internal_c2cfceb1cd59ecd916a7f351a0adfbee449f70496e43639ae914c18f5226ccbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:edit.html.twig"));

        $__internal_787007bbdb7b28164043aea0974a5e986c3dad7eb82251806b6f8942a1d2c8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787007bbdb7b28164043aea0974a5e986c3dad7eb82251806b6f8942a1d2c8be->enter($__internal_787007bbdb7b28164043aea0974a5e986c3dad7eb82251806b6f8942a1d2c8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2cfceb1cd59ecd916a7f351a0adfbee449f70496e43639ae914c18f5226ccbb->leave($__internal_c2cfceb1cd59ecd916a7f351a0adfbee449f70496e43639ae914c18f5226ccbb_prof);

        
        $__internal_787007bbdb7b28164043aea0974a5e986c3dad7eb82251806b6f8942a1d2c8be->leave($__internal_787007bbdb7b28164043aea0974a5e986c3dad7eb82251806b6f8942a1d2c8be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9031c3c55667888ed26102f1830d5d7383eb93d6d71e9fedad019015e2e99a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9031c3c55667888ed26102f1830d5d7383eb93d6d71e9fedad019015e2e99a58->enter($__internal_9031c3c55667888ed26102f1830d5d7383eb93d6d71e9fedad019015e2e99a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b967dcf0e836b1b8139495ea290f3edae6582696f2944ad80942212a35345907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b967dcf0e836b1b8139495ea290f3edae6582696f2944ad80942212a35345907->enter($__internal_b967dcf0e836b1b8139495ea290f3edae6582696f2944ad80942212a35345907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnement edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b967dcf0e836b1b8139495ea290f3edae6582696f2944ad80942212a35345907->leave($__internal_b967dcf0e836b1b8139495ea290f3edae6582696f2944ad80942212a35345907_prof);

        
        $__internal_9031c3c55667888ed26102f1830d5d7383eb93d6d71e9fedad019015e2e99a58->leave($__internal_9031c3c55667888ed26102f1830d5d7383eb93d6d71e9fedad019015e2e99a58_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Abonnement edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('abonnements_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackBundle:abonnements:edit.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/edit.html.twig");
    }
}

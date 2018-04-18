<?php

/* FrontBundle:evennements:edit.html.twig */
class __TwigTemplate_32b398bb77ce207f2bff1602ed28eea8d399639a39bf6921e72399c4d6b8a767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:evennements:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e301deb81b1fa95cf68b5afea8700dec8532c308df6c6a369beb9d36240e10b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e301deb81b1fa95cf68b5afea8700dec8532c308df6c6a369beb9d36240e10b3->enter($__internal_e301deb81b1fa95cf68b5afea8700dec8532c308df6c6a369beb9d36240e10b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:edit.html.twig"));

        $__internal_18659410033c40c3e9f6d9f4663f7028b52984d1504db9c9f95314c16cf83c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18659410033c40c3e9f6d9f4663f7028b52984d1504db9c9f95314c16cf83c9c->enter($__internal_18659410033c40c3e9f6d9f4663f7028b52984d1504db9c9f95314c16cf83c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:evennements:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e301deb81b1fa95cf68b5afea8700dec8532c308df6c6a369beb9d36240e10b3->leave($__internal_e301deb81b1fa95cf68b5afea8700dec8532c308df6c6a369beb9d36240e10b3_prof);

        
        $__internal_18659410033c40c3e9f6d9f4663f7028b52984d1504db9c9f95314c16cf83c9c->leave($__internal_18659410033c40c3e9f6d9f4663f7028b52984d1504db9c9f95314c16cf83c9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca3aa2af624649e159206eacd1ed16cc20a3f8acfa9d4b82827ce090425b849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca3aa2af624649e159206eacd1ed16cc20a3f8acfa9d4b82827ce090425b849->enter($__internal_9ca3aa2af624649e159206eacd1ed16cc20a3f8acfa9d4b82827ce090425b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af1aaf4e6908493088706dbfd9cc087f205564804dda41bcbd1402c88568082f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1aaf4e6908493088706dbfd9cc087f205564804dda41bcbd1402c88568082f->enter($__internal_af1aaf4e6908493088706dbfd9cc087f205564804dda41bcbd1402c88568082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Evennement edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evennements_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_af1aaf4e6908493088706dbfd9cc087f205564804dda41bcbd1402c88568082f->leave($__internal_af1aaf4e6908493088706dbfd9cc087f205564804dda41bcbd1402c88568082f_prof);

        
        $__internal_9ca3aa2af624649e159206eacd1ed16cc20a3f8acfa9d4b82827ce090425b849->leave($__internal_9ca3aa2af624649e159206eacd1ed16cc20a3f8acfa9d4b82827ce090425b849_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:evennements:edit.html.twig";
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
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}
    <h1>Evennement edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('evennements_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "FrontBundle:evennements:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/evennements/edit.html.twig");
    }
}

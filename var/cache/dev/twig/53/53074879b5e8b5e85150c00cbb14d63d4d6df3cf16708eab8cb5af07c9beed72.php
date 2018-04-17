<?php

/* BackBundle:abonnements:new.html.twig */
class __TwigTemplate_4df57c77edf9687c003b7a61f4433a1f85c25787f06aacbda9f7331811808ca8 extends Twig_Template
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
        $__internal_9d41287820ae5408f48176f7824a4da414a555ea7945bea99ab84bd85066f829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d41287820ae5408f48176f7824a4da414a555ea7945bea99ab84bd85066f829->enter($__internal_9d41287820ae5408f48176f7824a4da414a555ea7945bea99ab84bd85066f829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $__internal_67f9a150c4980e4ef4abe60b2fd1fac1f55c7ed08a839a5fff9cfbca6daac6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f9a150c4980e4ef4abe60b2fd1fac1f55c7ed08a839a5fff9cfbca6daac6fc->enter($__internal_67f9a150c4980e4ef4abe60b2fd1fac1f55c7ed08a839a5fff9cfbca6daac6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d41287820ae5408f48176f7824a4da414a555ea7945bea99ab84bd85066f829->leave($__internal_9d41287820ae5408f48176f7824a4da414a555ea7945bea99ab84bd85066f829_prof);

        
        $__internal_67f9a150c4980e4ef4abe60b2fd1fac1f55c7ed08a839a5fff9cfbca6daac6fc->leave($__internal_67f9a150c4980e4ef4abe60b2fd1fac1f55c7ed08a839a5fff9cfbca6daac6fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd79a1f95035388548d4292c14a6a3c33922435227eea39421df36b8f54adeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd79a1f95035388548d4292c14a6a3c33922435227eea39421df36b8f54adeae->enter($__internal_bd79a1f95035388548d4292c14a6a3c33922435227eea39421df36b8f54adeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4d9e7b6d0e743f7e0268c6bb4d5d04c97d18ee5fa5af700bd8e704d3e0c732a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d9e7b6d0e743f7e0268c6bb4d5d04c97d18ee5fa5af700bd8e704d3e0c732a->enter($__internal_b4d9e7b6d0e743f7e0268c6bb4d5d04c97d18ee5fa5af700bd8e704d3e0c732a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnement creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_b4d9e7b6d0e743f7e0268c6bb4d5d04c97d18ee5fa5af700bd8e704d3e0c732a->leave($__internal_b4d9e7b6d0e743f7e0268c6bb4d5d04c97d18ee5fa5af700bd8e704d3e0c732a_prof);

        
        $__internal_bd79a1f95035388548d4292c14a6a3c33922435227eea39421df36b8f54adeae->leave($__internal_bd79a1f95035388548d4292c14a6a3c33922435227eea39421df36b8f54adeae_prof);

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
", "BackBundle:abonnements:new.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/abonnements/new.html.twig");
    }
}

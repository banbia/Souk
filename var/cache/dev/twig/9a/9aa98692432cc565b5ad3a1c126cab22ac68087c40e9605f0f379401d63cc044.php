<?php

/* FrontBundle:reclamations:edit.html.twig */
class __TwigTemplate_bf04a574232033539fc8cf2772aeb991e075cf22cb94531cf7e8305820bf1113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:reclamations:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c443be5c59b50e5affadb78e73be5f629b98876c78e967d9c40cf7ffd22956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c443be5c59b50e5affadb78e73be5f629b98876c78e967d9c40cf7ffd22956->enter($__internal_e6c443be5c59b50e5affadb78e73be5f629b98876c78e967d9c40cf7ffd22956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:edit.html.twig"));

        $__internal_2a0dc54bb8b5b95ba793ff87b20133758267bb8a8112375be062c30311c51088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0dc54bb8b5b95ba793ff87b20133758267bb8a8112375be062c30311c51088->enter($__internal_2a0dc54bb8b5b95ba793ff87b20133758267bb8a8112375be062c30311c51088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c443be5c59b50e5affadb78e73be5f629b98876c78e967d9c40cf7ffd22956->leave($__internal_e6c443be5c59b50e5affadb78e73be5f629b98876c78e967d9c40cf7ffd22956_prof);

        
        $__internal_2a0dc54bb8b5b95ba793ff87b20133758267bb8a8112375be062c30311c51088->leave($__internal_2a0dc54bb8b5b95ba793ff87b20133758267bb8a8112375be062c30311c51088_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5f6166e3f827ddf72ded218bb95c22fe21a62a931ca4fb1e337e5eaa7a9a8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f6166e3f827ddf72ded218bb95c22fe21a62a931ca4fb1e337e5eaa7a9a8f8->enter($__internal_b5f6166e3f827ddf72ded218bb95c22fe21a62a931ca4fb1e337e5eaa7a9a8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd0bc8b286b863660d5f6865f1e74ea152c1cd903c8338821683554bd66f63d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0bc8b286b863660d5f6865f1e74ea152c1cd903c8338821683554bd66f63d1->enter($__internal_dd0bc8b286b863660d5f6865f1e74ea152c1cd903c8338821683554bd66f63d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reclamation edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
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
        
        $__internal_dd0bc8b286b863660d5f6865f1e74ea152c1cd903c8338821683554bd66f63d1->leave($__internal_dd0bc8b286b863660d5f6865f1e74ea152c1cd903c8338821683554bd66f63d1_prof);

        
        $__internal_b5f6166e3f827ddf72ded218bb95c22fe21a62a931ca4fb1e337e5eaa7a9a8f8->leave($__internal_b5f6166e3f827ddf72ded218bb95c22fe21a62a931ca4fb1e337e5eaa7a9a8f8_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:edit.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reclamation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reclamations_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "FrontBundle:reclamations:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/reclamations/edit.html.twig");
    }
}

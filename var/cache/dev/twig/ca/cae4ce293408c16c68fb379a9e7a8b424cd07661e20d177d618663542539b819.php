<?php

/* BackBundle:abonnements:show.html.twig */
class __TwigTemplate_66e017f9efbfc5fa770d960a866992d5e59ca35caa78478bc28cb0471549d0f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:abonnements:show.html.twig", 1);
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
        $__internal_95b6423a9ae5bfd1c6fc8a2a25308d8e15a9f6697b63c6da20f2bda57b0f47a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b6423a9ae5bfd1c6fc8a2a25308d8e15a9f6697b63c6da20f2bda57b0f47a9->enter($__internal_95b6423a9ae5bfd1c6fc8a2a25308d8e15a9f6697b63c6da20f2bda57b0f47a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:show.html.twig"));

        $__internal_f0c14298b473c31c685b49dd3c462a636facbcf88554c1285991a8b676f06d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c14298b473c31c685b49dd3c462a636facbcf88554c1285991a8b676f06d83->enter($__internal_f0c14298b473c31c685b49dd3c462a636facbcf88554c1285991a8b676f06d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:abonnements:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b6423a9ae5bfd1c6fc8a2a25308d8e15a9f6697b63c6da20f2bda57b0f47a9->leave($__internal_95b6423a9ae5bfd1c6fc8a2a25308d8e15a9f6697b63c6da20f2bda57b0f47a9_prof);

        
        $__internal_f0c14298b473c31c685b49dd3c462a636facbcf88554c1285991a8b676f06d83->leave($__internal_f0c14298b473c31c685b49dd3c462a636facbcf88554c1285991a8b676f06d83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1b6885b433d90c7283d35407d8be86ebf30917cf07158bda71b5243bb855290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b6885b433d90c7283d35407d8be86ebf30917cf07158bda71b5243bb855290->enter($__internal_a1b6885b433d90c7283d35407d8be86ebf30917cf07158bda71b5243bb855290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6af9f0f0378bbac0f0abeb55f1ba033ad7e3f45312fc7bb2608df9cb9913a973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af9f0f0378bbac0f0abeb55f1ba033ad7e3f45312fc7bb2608df9cb9913a973->enter($__internal_6af9f0f0378bbac0f0abeb55f1ba033ad7e3f45312fc7bb2608df9cb9913a973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonnement</h1>

    <table>
        <tbody>

            <tr>
                <th>Designation</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "designation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbmois</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "nbMois", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnements_edit", array("id" => $this->getAttribute(($context["abonnement"] ?? $this->getContext($context, "abonnement")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6af9f0f0378bbac0f0abeb55f1ba033ad7e3f45312fc7bb2608df9cb9913a973->leave($__internal_6af9f0f0378bbac0f0abeb55f1ba033ad7e3f45312fc7bb2608df9cb9913a973_prof);

        
        $__internal_a1b6885b433d90c7283d35407d8be86ebf30917cf07158bda71b5243bb855290->leave($__internal_a1b6885b433d90c7283d35407d8be86ebf30917cf07158bda71b5243bb855290_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:abonnements:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  101 => 36,  95 => 33,  89 => 30,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Abonnement</h1>

    <table>
        <tbody>

            <tr>
                <th>Designation</th>
                <td>{{ abonnement.designation }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ abonnement.description }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ abonnement.prix }}</td>
            </tr>
            <tr>
                <th>Nbmois</th>
                <td>{{ abonnement.nbMois }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('abonnements_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('abonnements_edit', { 'id': abonnement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackBundle:abonnements:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/abonnements/show.html.twig");
    }
}

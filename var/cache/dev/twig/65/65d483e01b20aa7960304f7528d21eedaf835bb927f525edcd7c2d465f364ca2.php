<?php

/* FrontBundle:reclamations:show.html.twig */
class __TwigTemplate_7c72d7ff9d89417e3d93cda27ddb92888b2cf09b9721f6cb9d95ab3ff97416dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:reclamations:show.html.twig", 1);
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
        $__internal_4910e9d67356dbdec578dfdcf74e3fdeb0a3b39202e5338c21d1d53101002301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4910e9d67356dbdec578dfdcf74e3fdeb0a3b39202e5338c21d1d53101002301->enter($__internal_4910e9d67356dbdec578dfdcf74e3fdeb0a3b39202e5338c21d1d53101002301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $__internal_f456eb5dfe74716b2fbff5dc96835503ade9a58a5ea3817e00ad6ee22a46fe4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f456eb5dfe74716b2fbff5dc96835503ade9a58a5ea3817e00ad6ee22a46fe4b->enter($__internal_f456eb5dfe74716b2fbff5dc96835503ade9a58a5ea3817e00ad6ee22a46fe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reclamations:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4910e9d67356dbdec578dfdcf74e3fdeb0a3b39202e5338c21d1d53101002301->leave($__internal_4910e9d67356dbdec578dfdcf74e3fdeb0a3b39202e5338c21d1d53101002301_prof);

        
        $__internal_f456eb5dfe74716b2fbff5dc96835503ade9a58a5ea3817e00ad6ee22a46fe4b->leave($__internal_f456eb5dfe74716b2fbff5dc96835503ade9a58a5ea3817e00ad6ee22a46fe4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9870fb4c96fbdd2078ac9f370783405c424415fbae8cc5947507aaab2def21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9870fb4c96fbdd2078ac9f370783405c424415fbae8cc5947507aaab2def21->enter($__internal_be9870fb4c96fbdd2078ac9f370783405c424415fbae8cc5947507aaab2def21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3c903d34646b4e5842082d770bb9aa7f455a378c8ab83c246500b16386ad1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c903d34646b4e5842082d770bb9aa7f455a378c8ab83c246500b16386ad1d5->enter($__internal_d3c903d34646b4e5842082d770bb9aa7f455a378c8ab83c246500b16386ad1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reclamation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Daterec</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "dateRec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "dateRec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamations_edit", array("id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d3c903d34646b4e5842082d770bb9aa7f455a378c8ab83c246500b16386ad1d5->leave($__internal_d3c903d34646b4e5842082d770bb9aa7f455a378c8ab83c246500b16386ad1d5_prof);

        
        $__internal_be9870fb4c96fbdd2078ac9f370783405c424415fbae8cc5947507aaab2def21->leave($__internal_be9870fb4c96fbdd2078ac9f370783405c424415fbae8cc5947507aaab2def21_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reclamations:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reclamation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reclamation.id }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ reclamation.contenu }}</td>
            </tr>
            <tr>
                <th>Daterec</th>
                <td>{% if reclamation.dateRec %}{{ reclamation.dateRec|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ reclamation.etat }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reclamations_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reclamations_edit', { 'id': reclamation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "FrontBundle:reclamations:show.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/reclamations/show.html.twig");
    }
}

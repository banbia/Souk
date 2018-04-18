<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fb5f047929042883f4c9744f14ce7fc2138402e4ea0f800cd8865df5e1c8b2e1 extends Twig_Template
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
        $__internal_5ffdaa95e4454dead41512471f70fb769d0c81b173a651904d18261c7f207f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffdaa95e4454dead41512471f70fb769d0c81b173a651904d18261c7f207f7b->enter($__internal_5ffdaa95e4454dead41512471f70fb769d0c81b173a651904d18261c7f207f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0e1906e7a786d927c33a94a7d9628cc8c87ed787118c1584f3d4251301b37cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1906e7a786d927c33a94a7d9628cc8c87ed787118c1584f3d4251301b37cf7->enter($__internal_0e1906e7a786d927c33a94a7d9628cc8c87ed787118c1584f3d4251301b37cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5ffdaa95e4454dead41512471f70fb769d0c81b173a651904d18261c7f207f7b->leave($__internal_5ffdaa95e4454dead41512471f70fb769d0c81b173a651904d18261c7f207f7b_prof);

        
        $__internal_0e1906e7a786d927c33a94a7d9628cc8c87ed787118c1584f3d4251301b37cf7->leave($__internal_0e1906e7a786d927c33a94a7d9628cc8c87ed787118c1584f3d4251301b37cf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

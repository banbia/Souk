<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9efd5216a893fa35818be6a9132b452e75642171c84a63804c0f399aed90f686 extends Twig_Template
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
        $__internal_6646804ecdf3933445a61c22319919ea5a57c39a717512762bc93b0bb337120b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6646804ecdf3933445a61c22319919ea5a57c39a717512762bc93b0bb337120b->enter($__internal_6646804ecdf3933445a61c22319919ea5a57c39a717512762bc93b0bb337120b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c2ef539225f35d28587e747d004617e65966914d97b1cb83abe9a450b412275d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ef539225f35d28587e747d004617e65966914d97b1cb83abe9a450b412275d->enter($__internal_c2ef539225f35d28587e747d004617e65966914d97b1cb83abe9a450b412275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6646804ecdf3933445a61c22319919ea5a57c39a717512762bc93b0bb337120b->leave($__internal_6646804ecdf3933445a61c22319919ea5a57c39a717512762bc93b0bb337120b_prof);

        
        $__internal_c2ef539225f35d28587e747d004617e65966914d97b1cb83abe9a450b412275d->leave($__internal_c2ef539225f35d28587e747d004617e65966914d97b1cb83abe9a450b412275d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

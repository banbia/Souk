<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3fd53ae1cbb15a96db84a39f8d5ffecc6917c0506d4403e3a5c6e3a20249a138 extends Twig_Template
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
        $__internal_a5eb19cfbb82c1559465ec5f0f2ad302bfd76060f7ecd9eaf4ea6d3e4d045f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eb19cfbb82c1559465ec5f0f2ad302bfd76060f7ecd9eaf4ea6d3e4d045f3a->enter($__internal_a5eb19cfbb82c1559465ec5f0f2ad302bfd76060f7ecd9eaf4ea6d3e4d045f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7ce12496aac8b955d1b6362035f68bec9ddea696310c5842e81a6d1eb7383f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce12496aac8b955d1b6362035f68bec9ddea696310c5842e81a6d1eb7383f36->enter($__internal_7ce12496aac8b955d1b6362035f68bec9ddea696310c5842e81a6d1eb7383f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a5eb19cfbb82c1559465ec5f0f2ad302bfd76060f7ecd9eaf4ea6d3e4d045f3a->leave($__internal_a5eb19cfbb82c1559465ec5f0f2ad302bfd76060f7ecd9eaf4ea6d3e4d045f3a_prof);

        
        $__internal_7ce12496aac8b955d1b6362035f68bec9ddea696310c5842e81a6d1eb7383f36->leave($__internal_7ce12496aac8b955d1b6362035f68bec9ddea696310c5842e81a6d1eb7383f36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
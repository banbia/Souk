<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_57a8079489fe1afd5ae5185c3ea8ee2b12c14e49a87cb8102f1975d4e1629b0f extends Twig_Template
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
        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray", array()))));
        echo "
";
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
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception.json.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

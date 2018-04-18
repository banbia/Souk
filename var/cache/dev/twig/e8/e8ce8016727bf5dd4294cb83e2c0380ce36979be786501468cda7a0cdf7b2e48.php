<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_46802b50229f716fc82df6e78265fd802ace18ae5553455c5e33c1bb5befdef2 extends Twig_Template
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
        $__internal_00ca84a62cb182152aa67fad7b8b12a42b89d22c08e66780774d1f182824d7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ca84a62cb182152aa67fad7b8b12a42b89d22c08e66780774d1f182824d7c4->enter($__internal_00ca84a62cb182152aa67fad7b8b12a42b89d22c08e66780774d1f182824d7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6b6388fc18b9d979075a9922c3362f8188866d110490287499c405533879bebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6388fc18b9d979075a9922c3362f8188866d110490287499c405533879bebe->enter($__internal_6b6388fc18b9d979075a9922c3362f8188866d110490287499c405533879bebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_00ca84a62cb182152aa67fad7b8b12a42b89d22c08e66780774d1f182824d7c4->leave($__internal_00ca84a62cb182152aa67fad7b8b12a42b89d22c08e66780774d1f182824d7c4_prof);

        
        $__internal_6b6388fc18b9d979075a9922c3362f8188866d110490287499c405533879bebe->leave($__internal_6b6388fc18b9d979075a9922c3362f8188866d110490287499c405533879bebe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

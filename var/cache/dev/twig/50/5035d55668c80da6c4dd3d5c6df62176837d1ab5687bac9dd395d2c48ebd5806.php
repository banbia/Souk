<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_75f781ccd718460df811b0811a3820e799e80e84fcd498453f7ab27c4ef7bdab extends Twig_Template
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
        $__internal_5b39b20bb2bfde90d358c2a0bf84e3d5c6ca8c25d8fbcf2ab8f025d9606312e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b39b20bb2bfde90d358c2a0bf84e3d5c6ca8c25d8fbcf2ab8f025d9606312e0->enter($__internal_5b39b20bb2bfde90d358c2a0bf84e3d5c6ca8c25d8fbcf2ab8f025d9606312e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7721d2bcb58ae54e0575560684881294a3a78482bd38ebe85c5860b49d426eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7721d2bcb58ae54e0575560684881294a3a78482bd38ebe85c5860b49d426eb7->enter($__internal_7721d2bcb58ae54e0575560684881294a3a78482bd38ebe85c5860b49d426eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5b39b20bb2bfde90d358c2a0bf84e3d5c6ca8c25d8fbcf2ab8f025d9606312e0->leave($__internal_5b39b20bb2bfde90d358c2a0bf84e3d5c6ca8c25d8fbcf2ab8f025d9606312e0_prof);

        
        $__internal_7721d2bcb58ae54e0575560684881294a3a78482bd38ebe85c5860b49d426eb7->leave($__internal_7721d2bcb58ae54e0575560684881294a3a78482bd38ebe85c5860b49d426eb7_prof);

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

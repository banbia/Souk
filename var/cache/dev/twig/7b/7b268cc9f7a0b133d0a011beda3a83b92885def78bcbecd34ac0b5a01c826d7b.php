<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1ceea822ff6245660dbf2fbde2aa5d2119ad21feec4219b416ea4333df127389 extends Twig_Template
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
        $__internal_cacbc76352d5df7df57c15b9537c6573b6b0a13fc63d971a2e84d91633fd6ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacbc76352d5df7df57c15b9537c6573b6b0a13fc63d971a2e84d91633fd6ad5->enter($__internal_cacbc76352d5df7df57c15b9537c6573b6b0a13fc63d971a2e84d91633fd6ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_625d6d080c8764e2e118bcc1f6440c7b6389c745ec4b44537d27c59e8706674b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625d6d080c8764e2e118bcc1f6440c7b6389c745ec4b44537d27c59e8706674b->enter($__internal_625d6d080c8764e2e118bcc1f6440c7b6389c745ec4b44537d27c59e8706674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cacbc76352d5df7df57c15b9537c6573b6b0a13fc63d971a2e84d91633fd6ad5->leave($__internal_cacbc76352d5df7df57c15b9537c6573b6b0a13fc63d971a2e84d91633fd6ad5_prof);

        
        $__internal_625d6d080c8764e2e118bcc1f6440c7b6389c745ec4b44537d27c59e8706674b->leave($__internal_625d6d080c8764e2e118bcc1f6440c7b6389c745ec4b44537d27c59e8706674b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

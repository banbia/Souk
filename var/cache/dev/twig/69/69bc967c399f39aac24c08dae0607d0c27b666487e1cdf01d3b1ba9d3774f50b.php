<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9c87c909501a9e0f235cd025e10bbfac5d4a4d5ff8212bb4ef79af446f182b2f extends Twig_Template
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
        $__internal_6bd36e67ed6c0f3c1165edf53f5aef86548f36f45d10d5851582dcb43de02c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd36e67ed6c0f3c1165edf53f5aef86548f36f45d10d5851582dcb43de02c62->enter($__internal_6bd36e67ed6c0f3c1165edf53f5aef86548f36f45d10d5851582dcb43de02c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_a7bfb0a1ddecdaf9061bdbba0c8b698214b8c2cd7ddd3ae1b4a6785357792d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bfb0a1ddecdaf9061bdbba0c8b698214b8c2cd7ddd3ae1b4a6785357792d04->enter($__internal_a7bfb0a1ddecdaf9061bdbba0c8b698214b8c2cd7ddd3ae1b4a6785357792d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6bd36e67ed6c0f3c1165edf53f5aef86548f36f45d10d5851582dcb43de02c62->leave($__internal_6bd36e67ed6c0f3c1165edf53f5aef86548f36f45d10d5851582dcb43de02c62_prof);

        
        $__internal_a7bfb0a1ddecdaf9061bdbba0c8b698214b8c2cd7ddd3ae1b4a6785357792d04->leave($__internal_a7bfb0a1ddecdaf9061bdbba0c8b698214b8c2cd7ddd3ae1b4a6785357792d04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

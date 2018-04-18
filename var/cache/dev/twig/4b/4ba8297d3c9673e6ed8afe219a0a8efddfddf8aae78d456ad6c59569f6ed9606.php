<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_211f0371fdf6942a7cf52733cd970a6daee9b554a427fcc1c5b1212246e8d54b extends Twig_Template
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
        $__internal_a4bf26344d6f4c04ba2822d7a11b218b3dd7f5dabec249ccfbd328b90c421698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bf26344d6f4c04ba2822d7a11b218b3dd7f5dabec249ccfbd328b90c421698->enter($__internal_a4bf26344d6f4c04ba2822d7a11b218b3dd7f5dabec249ccfbd328b90c421698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_313df49d22964bebdc690e59fc60f51fd7e902b4dbb39d45874d94bd7d2dd937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313df49d22964bebdc690e59fc60f51fd7e902b4dbb39d45874d94bd7d2dd937->enter($__internal_313df49d22964bebdc690e59fc60f51fd7e902b4dbb39d45874d94bd7d2dd937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a4bf26344d6f4c04ba2822d7a11b218b3dd7f5dabec249ccfbd328b90c421698->leave($__internal_a4bf26344d6f4c04ba2822d7a11b218b3dd7f5dabec249ccfbd328b90c421698_prof);

        
        $__internal_313df49d22964bebdc690e59fc60f51fd7e902b4dbb39d45874d94bd7d2dd937->leave($__internal_313df49d22964bebdc690e59fc60f51fd7e902b4dbb39d45874d94bd7d2dd937_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

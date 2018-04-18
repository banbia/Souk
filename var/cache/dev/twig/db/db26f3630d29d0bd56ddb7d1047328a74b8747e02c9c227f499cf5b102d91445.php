<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3096b035b61eb9de9dc7e12b6c1c6461bcbb0675f04bfd0b178f1bed0c80ba59 extends Twig_Template
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
        $__internal_04f132432744c7750f741943d17d1aeb0edcbf455c5f653baaeefd89b4a726f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f132432744c7750f741943d17d1aeb0edcbf455c5f653baaeefd89b4a726f4->enter($__internal_04f132432744c7750f741943d17d1aeb0edcbf455c5f653baaeefd89b4a726f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6f3767e566f6dbdcdc7486cb2694dd40a47bb4404aa9fad9777f244a38698ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3767e566f6dbdcdc7486cb2694dd40a47bb4404aa9fad9777f244a38698ee1->enter($__internal_6f3767e566f6dbdcdc7486cb2694dd40a47bb4404aa9fad9777f244a38698ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_04f132432744c7750f741943d17d1aeb0edcbf455c5f653baaeefd89b4a726f4->leave($__internal_04f132432744c7750f741943d17d1aeb0edcbf455c5f653baaeefd89b4a726f4_prof);

        
        $__internal_6f3767e566f6dbdcdc7486cb2694dd40a47bb4404aa9fad9777f244a38698ee1->leave($__internal_6f3767e566f6dbdcdc7486cb2694dd40a47bb4404aa9fad9777f244a38698ee1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

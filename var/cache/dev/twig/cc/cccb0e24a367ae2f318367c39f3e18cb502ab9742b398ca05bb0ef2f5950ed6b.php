<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7cdbaa818ce27bc498ad8f187f371d8e6cbdb13fe9ea79728b34a7572a8ca3e8 extends Twig_Template
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
        $__internal_eed240fe5fd246470d931ea046cc3bb8f4aceba2c50471afdc94ade3a66a1fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed240fe5fd246470d931ea046cc3bb8f4aceba2c50471afdc94ade3a66a1fd3->enter($__internal_eed240fe5fd246470d931ea046cc3bb8f4aceba2c50471afdc94ade3a66a1fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2d0d32fdd865ca306ab4583e668a420fa184b54ced048b0afdedc6458abbf739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0d32fdd865ca306ab4583e668a420fa184b54ced048b0afdedc6458abbf739->enter($__internal_2d0d32fdd865ca306ab4583e668a420fa184b54ced048b0afdedc6458abbf739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_eed240fe5fd246470d931ea046cc3bb8f4aceba2c50471afdc94ade3a66a1fd3->leave($__internal_eed240fe5fd246470d931ea046cc3bb8f4aceba2c50471afdc94ade3a66a1fd3_prof);

        
        $__internal_2d0d32fdd865ca306ab4583e668a420fa184b54ced048b0afdedc6458abbf739->leave($__internal_2d0d32fdd865ca306ab4583e668a420fa184b54ced048b0afdedc6458abbf739_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

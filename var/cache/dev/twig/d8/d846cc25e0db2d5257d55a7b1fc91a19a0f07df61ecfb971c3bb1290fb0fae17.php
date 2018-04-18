<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a8d4ab88a9db9d3408a0c01ccf95aef3af909df7106d08b583ea8dfb539b903e extends Twig_Template
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
        $__internal_ca18b51d8b40079bf67e4e18a29c4f359552baa6f9697cbb033c0c7702a8bf32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca18b51d8b40079bf67e4e18a29c4f359552baa6f9697cbb033c0c7702a8bf32->enter($__internal_ca18b51d8b40079bf67e4e18a29c4f359552baa6f9697cbb033c0c7702a8bf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2612203f2d6793a4cae108fd54f4a2ff651cae85b90531db5ed18189bd8529e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2612203f2d6793a4cae108fd54f4a2ff651cae85b90531db5ed18189bd8529e3->enter($__internal_2612203f2d6793a4cae108fd54f4a2ff651cae85b90531db5ed18189bd8529e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ca18b51d8b40079bf67e4e18a29c4f359552baa6f9697cbb033c0c7702a8bf32->leave($__internal_ca18b51d8b40079bf67e4e18a29c4f359552baa6f9697cbb033c0c7702a8bf32_prof);

        
        $__internal_2612203f2d6793a4cae108fd54f4a2ff651cae85b90531db5ed18189bd8529e3->leave($__internal_2612203f2d6793a4cae108fd54f4a2ff651cae85b90531db5ed18189bd8529e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

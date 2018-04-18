<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_de95d7b71089f891a6728581e4547b1a1e7ba6ad31953d691ba4e676d3e913d0 extends Twig_Template
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
        $__internal_baab98cc444fd782fd7bb8b36d73af4ab1be86baa4867382372f990775a38b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baab98cc444fd782fd7bb8b36d73af4ab1be86baa4867382372f990775a38b32->enter($__internal_baab98cc444fd782fd7bb8b36d73af4ab1be86baa4867382372f990775a38b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_87e0abdd0afbabcc20b8032dcacb1fa849d38952d51bbb04d6adbe9d42384e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e0abdd0afbabcc20b8032dcacb1fa849d38952d51bbb04d6adbe9d42384e67->enter($__internal_87e0abdd0afbabcc20b8032dcacb1fa849d38952d51bbb04d6adbe9d42384e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_baab98cc444fd782fd7bb8b36d73af4ab1be86baa4867382372f990775a38b32->leave($__internal_baab98cc444fd782fd7bb8b36d73af4ab1be86baa4867382372f990775a38b32_prof);

        
        $__internal_87e0abdd0afbabcc20b8032dcacb1fa849d38952d51bbb04d6adbe9d42384e67->leave($__internal_87e0abdd0afbabcc20b8032dcacb1fa849d38952d51bbb04d6adbe9d42384e67_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

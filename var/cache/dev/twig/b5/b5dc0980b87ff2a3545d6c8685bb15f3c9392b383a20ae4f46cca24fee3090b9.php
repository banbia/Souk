<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_41ec5d30e42f1fad3c07c6532ddeab936be5d092256c1a70311f8ec72520c861 extends Twig_Template
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
        $__internal_4ad16bbc19f1dbf8dabe82548dfbe0a04d5cb643a5ab4597a3788d80a50bb99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad16bbc19f1dbf8dabe82548dfbe0a04d5cb643a5ab4597a3788d80a50bb99d->enter($__internal_4ad16bbc19f1dbf8dabe82548dfbe0a04d5cb643a5ab4597a3788d80a50bb99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_d4f091fd368b11d186f590656ae7ff46f0cb1f91c8fd0630e21f6c4f8e6fae21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f091fd368b11d186f590656ae7ff46f0cb1f91c8fd0630e21f6c4f8e6fae21->enter($__internal_d4f091fd368b11d186f590656ae7ff46f0cb1f91c8fd0630e21f6c4f8e6fae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()))), array((" at line " . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? (")") : (""));
        }
        
        $__internal_4ad16bbc19f1dbf8dabe82548dfbe0a04d5cb643a5ab4597a3788d80a50bb99d->leave($__internal_4ad16bbc19f1dbf8dabe82548dfbe0a04d5cb643a5ab4597a3788d80a50bb99d_prof);

        
        $__internal_d4f091fd368b11d186f590656ae7ff46f0cb1f91c8fd0630e21f6c4f8e6fae21->leave($__internal_d4f091fd368b11d186f590656ae7ff46f0cb1f91c8fd0630e21f6c4f8e6fae21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}

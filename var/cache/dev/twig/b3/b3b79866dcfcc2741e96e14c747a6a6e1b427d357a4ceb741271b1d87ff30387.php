<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_a8a2a53de9f7dc83eb2ca1cfc51e25fafef136a05db3122bd4778c8471e9f178 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_f39d9ded7bb0a9aca12e67442b70caa651f068e8d42a3fdf945b54792d9dda22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39d9ded7bb0a9aca12e67442b70caa651f068e8d42a3fdf945b54792d9dda22->enter($__internal_f39d9ded7bb0a9aca12e67442b70caa651f068e8d42a3fdf945b54792d9dda22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_d970f3d504086339913ab5c2c22da0f35b371a98459d89c54ffc2383662fe07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d970f3d504086339913ab5c2c22da0f35b371a98459d89c54ffc2383662fe07a->enter($__internal_d970f3d504086339913ab5c2c22da0f35b371a98459d89c54ffc2383662fe07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
<<<<<<< HEAD
        $__internal_2f00b97c9e6433aab4cae2667e7ca2c3224790bbe765c665c9b18e65385c46f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f00b97c9e6433aab4cae2667e7ca2c3224790bbe765c665c9b18e65385c46f7->enter($__internal_2f00b97c9e6433aab4cae2667e7ca2c3224790bbe765c665c9b18e65385c46f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_c1e92fa2bbcee25f83722306e2487f726b6c49b48ab8ee904f8468b5e568fa26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e92fa2bbcee25f83722306e2487f726b6c49b48ab8ee904f8468b5e568fa26->enter($__internal_c1e92fa2bbcee25f83722306e2487f726b6c49b48ab8ee904f8468b5e568fa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
        $__internal_e280f6e98680beb973244c98c1cc2a2834954bbde5858734e171440f3d734162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e280f6e98680beb973244c98c1cc2a2834954bbde5858734e171440f3d734162->enter($__internal_e280f6e98680beb973244c98c1cc2a2834954bbde5858734e171440f3d734162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_e028efb9b834896d6150ef6c680794fbc448ebf93db1510518e00f1588c55200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e028efb9b834896d6150ef6c680794fbc448ebf93db1510518e00f1588c55200->enter($__internal_e028efb9b834896d6150ef6c680794fbc448ebf93db1510518e00f1588c55200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
>>>>>>> b7bbdb60c65e5f392ab7a344685dadf0fa4791ff
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e

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
        
<<<<<<< HEAD
        $__internal_f39d9ded7bb0a9aca12e67442b70caa651f068e8d42a3fdf945b54792d9dda22->leave($__internal_f39d9ded7bb0a9aca12e67442b70caa651f068e8d42a3fdf945b54792d9dda22_prof);

        
        $__internal_d970f3d504086339913ab5c2c22da0f35b371a98459d89c54ffc2383662fe07a->leave($__internal_d970f3d504086339913ab5c2c22da0f35b371a98459d89c54ffc2383662fe07a_prof);
=======
<<<<<<< HEAD
        $__internal_2f00b97c9e6433aab4cae2667e7ca2c3224790bbe765c665c9b18e65385c46f7->leave($__internal_2f00b97c9e6433aab4cae2667e7ca2c3224790bbe765c665c9b18e65385c46f7_prof);

        
        $__internal_c1e92fa2bbcee25f83722306e2487f726b6c49b48ab8ee904f8468b5e568fa26->leave($__internal_c1e92fa2bbcee25f83722306e2487f726b6c49b48ab8ee904f8468b5e568fa26_prof);
=======
        $__internal_e280f6e98680beb973244c98c1cc2a2834954bbde5858734e171440f3d734162->leave($__internal_e280f6e98680beb973244c98c1cc2a2834954bbde5858734e171440f3d734162_prof);

        
        $__internal_e028efb9b834896d6150ef6c680794fbc448ebf93db1510518e00f1588c55200->leave($__internal_e028efb9b834896d6150ef6c680794fbc448ebf93db1510518e00f1588c55200_prof);
>>>>>>> b7bbdb60c65e5f392ab7a344685dadf0fa4791ff
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e

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
<<<<<<< HEAD
", "@Twig/Exception/trace.txt.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
=======
<<<<<<< HEAD
", "@Twig/Exception/trace.txt.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
=======
", "@Twig/Exception/trace.txt.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
>>>>>>> b7bbdb60c65e5f392ab7a344685dadf0fa4791ff
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e
    }
}

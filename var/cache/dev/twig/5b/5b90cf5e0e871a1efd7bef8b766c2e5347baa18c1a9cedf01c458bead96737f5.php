<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5bef56037aa4dd8a30e57a95ef79d1855e37ef8c55142d4890f9a128d01a1f26 extends Twig_Template
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
        $__internal_e45e0ccec7c89b7edc49a59ab7491b21e0976b2b39b5787c9b2de3eefec3b71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45e0ccec7c89b7edc49a59ab7491b21e0976b2b39b5787c9b2de3eefec3b71d->enter($__internal_e45e0ccec7c89b7edc49a59ab7491b21e0976b2b39b5787c9b2de3eefec3b71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b9553fbcf699c57b2ba1a2f4968c0570e0e48db8dd830959f9a65801ae6de97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9553fbcf699c57b2ba1a2f4968c0570e0e48db8dd830959f9a65801ae6de97f->enter($__internal_b9553fbcf699c57b2ba1a2f4968c0570e0e48db8dd830959f9a65801ae6de97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e45e0ccec7c89b7edc49a59ab7491b21e0976b2b39b5787c9b2de3eefec3b71d->leave($__internal_e45e0ccec7c89b7edc49a59ab7491b21e0976b2b39b5787c9b2de3eefec3b71d_prof);

        
        $__internal_b9553fbcf699c57b2ba1a2f4968c0570e0e48db8dd830959f9a65801ae6de97f->leave($__internal_b9553fbcf699c57b2ba1a2f4968c0570e0e48db8dd830959f9a65801ae6de97f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

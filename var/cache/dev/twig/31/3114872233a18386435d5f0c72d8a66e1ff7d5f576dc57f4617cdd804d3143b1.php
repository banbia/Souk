<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fcbda585081672abd3e07e26de77cbabcb6178b65d2b1a37d5d83b5765c61e7b extends Twig_Template
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
        $__internal_11a2e409714a533f4a0d9676b698e7bdca21e395105903851da5ab54da34182c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a2e409714a533f4a0d9676b698e7bdca21e395105903851da5ab54da34182c->enter($__internal_11a2e409714a533f4a0d9676b698e7bdca21e395105903851da5ab54da34182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fe5b0946d479bbd9a890425b7b8bb7fafffd2f4c90be0e51952481307bfcbbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5b0946d479bbd9a890425b7b8bb7fafffd2f4c90be0e51952481307bfcbbd0->enter($__internal_fe5b0946d479bbd9a890425b7b8bb7fafffd2f4c90be0e51952481307bfcbbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_11a2e409714a533f4a0d9676b698e7bdca21e395105903851da5ab54da34182c->leave($__internal_11a2e409714a533f4a0d9676b698e7bdca21e395105903851da5ab54da34182c_prof);

        
        $__internal_fe5b0946d479bbd9a890425b7b8bb7fafffd2f4c90be0e51952481307bfcbbd0->leave($__internal_fe5b0946d479bbd9a890425b7b8bb7fafffd2f4c90be0e51952481307bfcbbd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

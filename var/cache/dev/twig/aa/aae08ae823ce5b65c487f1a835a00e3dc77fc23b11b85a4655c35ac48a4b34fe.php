<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ca2aeb5a158da3be0d80edcc11c6ad7992716c6b4606c2b7deedf0a71a281b4d extends Twig_Template
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
        $__internal_4c78f49a2b29dbc704e7553128fda1a2d817031ac70fe67bec44f839d6789fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c78f49a2b29dbc704e7553128fda1a2d817031ac70fe67bec44f839d6789fcf->enter($__internal_4c78f49a2b29dbc704e7553128fda1a2d817031ac70fe67bec44f839d6789fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_eec734d7e1b1321e14ee7d9b1e0a22ef50ffb7db467262f4af2b401224610f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec734d7e1b1321e14ee7d9b1e0a22ef50ffb7db467262f4af2b401224610f81->enter($__internal_eec734d7e1b1321e14ee7d9b1e0a22ef50ffb7db467262f4af2b401224610f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4c78f49a2b29dbc704e7553128fda1a2d817031ac70fe67bec44f839d6789fcf->leave($__internal_4c78f49a2b29dbc704e7553128fda1a2d817031ac70fe67bec44f839d6789fcf_prof);

        
        $__internal_eec734d7e1b1321e14ee7d9b1e0a22ef50ffb7db467262f4af2b401224610f81->leave($__internal_eec734d7e1b1321e14ee7d9b1e0a22ef50ffb7db467262f4af2b401224610f81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}

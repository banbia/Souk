<?php

/* BackBundle:Stats:index.html.twig */
class __TwigTemplate_a20f822a533433ab0ec345ac5b74d3cd6a1f3acc1c54b26fbbad8b0e4b2d8c1d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Stats:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Stats:index.html.twig"));

        // line 1
        echo "<!-- index.html.twig -->
<html>
<head></head>
<body>
<div id=\"div_piechart\"></div>
<div id=\"div_histogram\"></div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 10
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw(array(0 => (isset($context["piechart"]) || array_key_exists("piechart", $context) ? $context["piechart"] : (function () { throw new Twig_Error_Runtime('Variable "piechart" does not exist.', 10, $this->source); })()), 1 => (isset($context["histogram"]) || array_key_exists("histogram", $context) ? $context["histogram"] : (function () { throw new Twig_Error_Runtime('Variable "histogram" does not exist.', 10, $this->source); })())), array(0 => "div_piechart", 1 => "div_histogram"));
        echo "
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Stats:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- index.html.twig -->
<html>
<head></head>
<body>
<div id=\"div_piechart\"></div>
<div id=\"div_histogram\"></div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">
    {{ gc_draw([piechart, histogram], ['div_piechart', 'div_histogram']) }}
</script>
</body>
</html>", "BackBundle:Stats:index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/Stats/index.html.twig");
    }
}

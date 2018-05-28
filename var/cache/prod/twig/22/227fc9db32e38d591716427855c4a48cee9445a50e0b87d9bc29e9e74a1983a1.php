<?php

/* BackBundle:Stats:index.html.twig */
class __TwigTemplate_82fffdf043e053c8d5727bff8863a6d3ae4900ae6109c95974ef4a947682f96b extends Twig_Template
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
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw(array(0 => ($context["piechart"] ?? null), 1 => ($context["histogram"] ?? null)), array(0 => "div_piechart", 1 => "div_histogram"));
        echo "
</script>
</body>
</html>";
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
        return array (  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:Stats:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/Stats/index.html.twig");
    }
}

<?php

/* ApiBundle:Default:index.html.twig */
class __TwigTemplate_4ee7f5b0d67ed07d64965a29819f3423e25ea7f111f834066c37eab3fbab0b4c extends Twig_Template
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
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "ApiBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ApiBundle:Default:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/ApiBundle/Resources/views/Default/index.html.twig");
    }
}

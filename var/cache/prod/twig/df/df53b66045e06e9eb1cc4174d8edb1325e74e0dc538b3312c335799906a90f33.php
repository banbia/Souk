<?php

/* BackBundle:admin:home.html.twig */
class __TwigTemplate_f47960afa687ffb183fb773b43df97a73a00233867795bb8a7d32401682c2bf3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:admin:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-md-12\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-info back-widget-set text-center\">
                <i class=\"fa fa-history fa-5x\"></i>
                <h3>500+&nbsp; <i class=\"fa fa-dollar\"></i></h3>
               Amount Pending For Approval
            </div>
        </div>
  <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-success back-widget-set text-center\">
                <i class=\"fa fa-bars fa-5x\"></i>
                <h3>300+ Tasks</h3>
                Pending For New Events
            </div>
        </div>
   <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-warning back-widget-set text-center\">
                <i class=\"fa fa-recycle fa-5x\"></i>
                <h3>56+ Calls</h3>
               To Be Made For New Orders
            </div>
        </div>
   <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-danger back-widget-set text-center\">
                <i class=\"fa fa-briefcase fa-5x\"></i>
                <h3>30+ Issues </h3>
                That Should Be Resolved Now
            </div>
        </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "BackBundle:admin:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackBundle:admin:home.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/admin/home.html.twig");
    }
}

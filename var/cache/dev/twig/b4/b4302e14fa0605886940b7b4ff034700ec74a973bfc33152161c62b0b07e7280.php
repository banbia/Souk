<?php

/* BackBundle:admin:home.html.twig */
class __TwigTemplate_f97af7f3ea904240482675781de112f06a7ecdc9007cd79a70124f122e768ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_3a5d06b9389ee453f962f9117fd4ce76170605614aab336a30d29dca1926e170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5d06b9389ee453f962f9117fd4ce76170605614aab336a30d29dca1926e170->enter($__internal_3a5d06b9389ee453f962f9117fd4ce76170605614aab336a30d29dca1926e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $__internal_bc28e8417df6b67da53140010058ff3405915762d91b46fe17e1699afc63b570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc28e8417df6b67da53140010058ff3405915762d91b46fe17e1699afc63b570->enter($__internal_bc28e8417df6b67da53140010058ff3405915762d91b46fe17e1699afc63b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a5d06b9389ee453f962f9117fd4ce76170605614aab336a30d29dca1926e170->leave($__internal_3a5d06b9389ee453f962f9117fd4ce76170605614aab336a30d29dca1926e170_prof);

        
        $__internal_bc28e8417df6b67da53140010058ff3405915762d91b46fe17e1699afc63b570->leave($__internal_bc28e8417df6b67da53140010058ff3405915762d91b46fe17e1699afc63b570_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9862670ff75ffc8aa9a212ddd642ebc13ad4381df38b66d04f0e738bd9bf8177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9862670ff75ffc8aa9a212ddd642ebc13ad4381df38b66d04f0e738bd9bf8177->enter($__internal_9862670ff75ffc8aa9a212ddd642ebc13ad4381df38b66d04f0e738bd9bf8177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c5f667232be6430faf4fb04496eed63d988cb4f5bb8af3f904aadc6f0923f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5f667232be6430faf4fb04496eed63d988cb4f5bb8af3f904aadc6f0923f73->enter($__internal_9c5f667232be6430faf4fb04496eed63d988cb4f5bb8af3f904aadc6f0923f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c5f667232be6430faf4fb04496eed63d988cb4f5bb8af3f904aadc6f0923f73->leave($__internal_9c5f667232be6430faf4fb04496eed63d988cb4f5bb8af3f904aadc6f0923f73_prof);

        
        $__internal_9862670ff75ffc8aa9a212ddd642ebc13ad4381df38b66d04f0e738bd9bf8177->leave($__internal_9862670ff75ffc8aa9a212ddd642ebc13ad4381df38b66d04f0e738bd9bf8177_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
<div class=\"col-md-12\">
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

{% endblock %}
", "BackBundle:admin:home.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/admin/home.html.twig");
    }
}

<?php

/* BackBundle:admin:home.html.twig */
class __TwigTemplate_e26d7acb30478fc1927b9a89b0271d4b4e6d0ccbcab4d008332746375fbbd198 extends Twig_Template
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
        $__internal_0771d6cc71d712869f113ded281e8a3302ba0cc458184812ee142468064aabbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0771d6cc71d712869f113ded281e8a3302ba0cc458184812ee142468064aabbd->enter($__internal_0771d6cc71d712869f113ded281e8a3302ba0cc458184812ee142468064aabbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $__internal_05b8e51ac3ac148c73e98c44215f9005882b5828b10ffcbaa8ce13a9121462cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b8e51ac3ac148c73e98c44215f9005882b5828b10ffcbaa8ce13a9121462cf->enter($__internal_05b8e51ac3ac148c73e98c44215f9005882b5828b10ffcbaa8ce13a9121462cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0771d6cc71d712869f113ded281e8a3302ba0cc458184812ee142468064aabbd->leave($__internal_0771d6cc71d712869f113ded281e8a3302ba0cc458184812ee142468064aabbd_prof);

        
        $__internal_05b8e51ac3ac148c73e98c44215f9005882b5828b10ffcbaa8ce13a9121462cf->leave($__internal_05b8e51ac3ac148c73e98c44215f9005882b5828b10ffcbaa8ce13a9121462cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_056134bc4b3112eea1aea04cdc1d2aa15f3449a3464af2556a82932244478525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056134bc4b3112eea1aea04cdc1d2aa15f3449a3464af2556a82932244478525->enter($__internal_056134bc4b3112eea1aea04cdc1d2aa15f3449a3464af2556a82932244478525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a43a1972304d68c7a9122061ff13552196a0df053c14827a3af38c2c4fc112c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a43a1972304d68c7a9122061ff13552196a0df053c14827a3af38c2c4fc112c->enter($__internal_6a43a1972304d68c7a9122061ff13552196a0df053c14827a3af38c2c4fc112c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a43a1972304d68c7a9122061ff13552196a0df053c14827a3af38c2c4fc112c->leave($__internal_6a43a1972304d68c7a9122061ff13552196a0df053c14827a3af38c2c4fc112c_prof);

        
        $__internal_056134bc4b3112eea1aea04cdc1d2aa15f3449a3464af2556a82932244478525->leave($__internal_056134bc4b3112eea1aea04cdc1d2aa15f3449a3464af2556a82932244478525_prof);

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
", "BackBundle:admin:home.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\BackBundle/Resources/views/admin/home.html.twig");
    }
}

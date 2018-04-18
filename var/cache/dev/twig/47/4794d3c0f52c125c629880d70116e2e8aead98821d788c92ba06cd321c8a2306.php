<?php

/* FrontBundle:Message:inbox.html.twig */
class __TwigTemplate_be39922e37d953c1886d0c3cba25c0ac20b01427d3217ff18feb7e59978cfd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Message:inbox.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e95c8bd71d11e78fe8589bf029f1bd4590ded0841bac42478c25d48b7a236b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95c8bd71d11e78fe8589bf029f1bd4590ded0841bac42478c25d48b7a236b9b->enter($__internal_e95c8bd71d11e78fe8589bf029f1bd4590ded0841bac42478c25d48b7a236b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:inbox.html.twig"));

        $__internal_1139ca48043b4f31ddf6100de2e3d8d3431df1e4afe4c5894dd9122cc624d537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1139ca48043b4f31ddf6100de2e3d8d3431df1e4afe4c5894dd9122cc624d537->enter($__internal_1139ca48043b4f31ddf6100de2e3d8d3431df1e4afe4c5894dd9122cc624d537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e95c8bd71d11e78fe8589bf029f1bd4590ded0841bac42478c25d48b7a236b9b->leave($__internal_e95c8bd71d11e78fe8589bf029f1bd4590ded0841bac42478c25d48b7a236b9b_prof);

        
        $__internal_1139ca48043b4f31ddf6100de2e3d8d3431df1e4afe4c5894dd9122cc624d537->leave($__internal_1139ca48043b4f31ddf6100de2e3d8d3431df1e4afe4c5894dd9122cc624d537_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e2904ac60ff18c3954c7c239ec1536e09c83abbd36b105c147451d136590248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2904ac60ff18c3954c7c239ec1536e09c83abbd36b105c147451d136590248->enter($__internal_6e2904ac60ff18c3954c7c239ec1536e09c83abbd36b105c147451d136590248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffd204526a007fbac8cf8bab4a3cc5821c34bf781c7ed8b4e343cf8a4f46fecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd204526a007fbac8cf8bab4a3cc5821c34bf781c7ed8b4e343cf8a4f46fecd->enter($__internal_ffd204526a007fbac8cf8bab4a3cc5821c34bf781c7ed8b4e343cf8a4f46fecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</h2>
<br/>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">
 <div class=\"mail-box\">
                  <aside class=\"sm-side\">
                      
                      <div class=\"inbox-body\">
                          <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\"  class=\"btn btn-compose\">
                              ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        // line 16
        echo "                          </a>                          
                      </div>
                      <ul class=\"inbox-nav inbox-divider\">
                          <li class=\"active\">
                              <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-danger pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->getNbUnread(($context["threads"] ?? $this->getContext($context, "threads"))), "html", null, true);
        echo "</span></a>

                          </li>
                          <li>
                              <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_sent");
        echo "\"><i class=\"fa fa-envelope-o\"></i> Envoyés</a>
                          </li>
                         
                          <li>
                              <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_deleted");
        echo "\"><i class=\" fa fa-trash-o\"></i> Corbeille</a>
                          </li>
                      </ul>
                      

                      

                  </aside>
                  <aside class=\"lg-side\">
                      <div class=\"inbox-head\">
                          <h3>Inbox</h3>
                         
                      </div>
                      <div class=\"inbox-body\">
                         <div class=\"mail-option\">
                             

                             <div class=\"btn-group\">
                                 <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\" class=\"btn mini tooltips\">
                                     <i class=\" fa fa-refresh\"></i>
                                 </a>
                             </div>
                             
                             

                         </div>
                          ";
        // line 54
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FrontBundle:Message:inbox.html.twig", 54)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 55
        echo "
                      </div>
                  </aside>
              </div>
</div>
";
        
        $__internal_ffd204526a007fbac8cf8bab4a3cc5821c34bf781c7ed8b4e343cf8a4f46fecd->leave($__internal_ffd204526a007fbac8cf8bab4a3cc5821c34bf781c7ed8b4e343cf8a4f46fecd_prof);

        
        $__internal_6e2904ac60ff18c3954c7c239ec1536e09c83abbd36b105c147451d136590248->leave($__internal_6e2904ac60ff18c3954c7c239ec1536e09c83abbd36b105c147451d136590248_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  124 => 54,  113 => 46,  92 => 28,  85 => 24,  76 => 20,  70 => 16,  68 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}

<h2>{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</h2>
<br/>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">
 <div class=\"mail-box\">
                  <aside class=\"sm-side\">
                      
                      <div class=\"inbox-body\">
                          <a href=\"{{ url('fos_message_thread_new' )}}\"  class=\"btn btn-compose\">
                              {% trans from 'FOSMessageBundle' %}send_new{% endtrans %}
                          </a>                          
                      </div>
                      <ul class=\"inbox-nav inbox-divider\">
                          <li class=\"active\">
                              <a href=\"{{path('fos_message_inbox')}}\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-danger pull-right\">{{fos_message_nb_unread(threads)}}</span></a>

                          </li>
                          <li>
                              <a href=\"{{path('fos_message_sent')}}\"><i class=\"fa fa-envelope-o\"></i> Envoyés</a>
                          </li>
                         
                          <li>
                              <a href=\"{{path('fos_message_deleted')}}\"><i class=\" fa fa-trash-o\"></i> Corbeille</a>
                          </li>
                      </ul>
                      

                      

                  </aside>
                  <aside class=\"lg-side\">
                      <div class=\"inbox-head\">
                          <h3>Inbox</h3>
                         
                      </div>
                      <div class=\"inbox-body\">
                         <div class=\"mail-option\">
                             

                             <div class=\"btn-group\">
                                 <a href=\"{{path('fos_message_inbox')}}\" class=\"btn mini tooltips\">
                                     <i class=\" fa fa-refresh\"></i>
                                 </a>
                             </div>
                             
                             

                         </div>
                          {% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

                      </div>
                  </aside>
              </div>
</div>
{% endblock %}
", "FrontBundle:Message:inbox.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/inbox.html.twig");
    }
}

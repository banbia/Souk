<?php

/* FrontBundle:Message:deleted.html.twig */
class __TwigTemplate_a622da29f9f711d1d43342f3dafa3176e9189557b6013e11e4afc53827bdca62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Message:deleted.html.twig", 1);
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
        $__internal_2b643871a5a276c496657eecfebb4607bed0ae8c0e5525e4a4f6f403b5b68a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b643871a5a276c496657eecfebb4607bed0ae8c0e5525e4a4f6f403b5b68a6b->enter($__internal_2b643871a5a276c496657eecfebb4607bed0ae8c0e5525e4a4f6f403b5b68a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:deleted.html.twig"));

        $__internal_31e187b9f444808d6ebb9ad827baf030c92c1b51592a4b6b384beff7a78aff32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e187b9f444808d6ebb9ad827baf030c92c1b51592a4b6b384beff7a78aff32->enter($__internal_31e187b9f444808d6ebb9ad827baf030c92c1b51592a4b6b384beff7a78aff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b643871a5a276c496657eecfebb4607bed0ae8c0e5525e4a4f6f403b5b68a6b->leave($__internal_2b643871a5a276c496657eecfebb4607bed0ae8c0e5525e4a4f6f403b5b68a6b_prof);

        
        $__internal_31e187b9f444808d6ebb9ad827baf030c92c1b51592a4b6b384beff7a78aff32->leave($__internal_31e187b9f444808d6ebb9ad827baf030c92c1b51592a4b6b384beff7a78aff32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c42f7e0591ad54966e43ead87845178e6c2b3893c19ac5791973496ec5f9099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c42f7e0591ad54966e43ead87845178e6c2b3893c19ac5791973496ec5f9099->enter($__internal_9c42f7e0591ad54966e43ead87845178e6c2b3893c19ac5791973496ec5f9099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8390e174d20646c2bcbcb2f625d45c53bf6022aab360f21941d24e40f63f1960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8390e174d20646c2bcbcb2f625d45c53bf6022aab360f21941d24e40f63f1960->enter($__internal_8390e174d20646c2bcbcb2f625d45c53bf6022aab360f21941d24e40f63f1960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
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
                          <li>
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
                         
                          <li class=\"active\">
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_deleted");
        echo "\" class=\"btn mini tooltips\">
                                     <i class=\" fa fa-refresh\"></i>
                                 </a>
                             </div>
                             

                         </div>
                          ";
        // line 53
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FrontBundle:Message:deleted.html.twig", 53)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 54
        echo "
                      </div>
                  </aside>
              </div>
</div>
";
        
        $__internal_8390e174d20646c2bcbcb2f625d45c53bf6022aab360f21941d24e40f63f1960->leave($__internal_8390e174d20646c2bcbcb2f625d45c53bf6022aab360f21941d24e40f63f1960_prof);

        
        $__internal_9c42f7e0591ad54966e43ead87845178e6c2b3893c19ac5791973496ec5f9099->leave($__internal_9c42f7e0591ad54966e43ead87845178e6c2b3893c19ac5791973496ec5f9099_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 54,  123 => 53,  113 => 46,  92 => 28,  85 => 24,  76 => 20,  70 => 16,  68 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</h2>
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
                          <li>
                              <a href=\"{{path('fos_message_inbox')}}\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-danger pull-right\">{{fos_message_nb_unread(threads)}}</span></a>

                          </li>
                          <li>
                              <a href=\"{{path('fos_message_sent')}}\"><i class=\"fa fa-envelope-o\"></i> Envoyés</a>
                          </li>
                         
                          <li class=\"active\">
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
                                 <a href=\"{{path('fos_message_deleted')}}\" class=\"btn mini tooltips\">
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
", "FrontBundle:Message:deleted.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/deleted.html.twig");
    }
}

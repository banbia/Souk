<?php

/* FrontBundle:Message:newThread.html.twig */
class __TwigTemplate_91602efacc4055669e10f23e8ece26049aeaf6f8ec2264dfc36772c33a8b00d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Message:newThread.html.twig", 1);
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
        $__internal_04a0d15cc6455de9b71a5d3cb3f1f2bb2745a4ee4b0f9ac177a34776befbf53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a0d15cc6455de9b71a5d3cb3f1f2bb2745a4ee4b0f9ac177a34776befbf53b->enter($__internal_04a0d15cc6455de9b71a5d3cb3f1f2bb2745a4ee4b0f9ac177a34776befbf53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:newThread.html.twig"));

        $__internal_a2c8938f36b454ce9657b4f1f5d53d27fb87ae9449dfdd10a703da8a7733e3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c8938f36b454ce9657b4f1f5d53d27fb87ae9449dfdd10a703da8a7733e3b4->enter($__internal_a2c8938f36b454ce9657b4f1f5d53d27fb87ae9449dfdd10a703da8a7733e3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a0d15cc6455de9b71a5d3cb3f1f2bb2745a4ee4b0f9ac177a34776befbf53b->leave($__internal_04a0d15cc6455de9b71a5d3cb3f1f2bb2745a4ee4b0f9ac177a34776befbf53b_prof);

        
        $__internal_a2c8938f36b454ce9657b4f1f5d53d27fb87ae9449dfdd10a703da8a7733e3b4->leave($__internal_a2c8938f36b454ce9657b4f1f5d53d27fb87ae9449dfdd10a703da8a7733e3b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13dfcf784c0ffcbbbc3948046821fcc65128b9b01aaa9d25410e70508d6db4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13dfcf784c0ffcbbbc3948046821fcc65128b9b01aaa9d25410e70508d6db4cf->enter($__internal_13dfcf784c0ffcbbbc3948046821fcc65128b9b01aaa9d25410e70508d6db4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee1fccb60522fb0902cc345ce1f5f4d1533d7dc6cdaeb89269f2a26c74bcb7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1fccb60522fb0902cc345ce1f5f4d1533d7dc6cdaeb89269f2a26c74bcb7c4->enter($__internal_ee1fccb60522fb0902cc345ce1f5f4d1533d7dc6cdaeb89269f2a26c74bcb7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Message", array(), "FOSMessageBundle");
        echo "</h2>
<br/>
<!------ Include the above in your HEAD tag ---------->

<div class=\"row\">
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
                         <div>
                              <div class=\"box box-primary\">
                                <div class=\"box-header with-border\">
                                  <h3 class=\"box-title\">Nouveau Message</h3>
                                </div>
                                <div class=\"box-body no-padding\">
                                    
<form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" class=\"sign\" />
</form>
                                        
                                </div>
                                <br/>
                                <br/>
                                  
                                          
                             </div>
                          </div>
                            
                      </div>
                  </aside>
              </div>
</div>
";
        
        $__internal_ee1fccb60522fb0902cc345ce1f5f4d1533d7dc6cdaeb89269f2a26c74bcb7c4->leave($__internal_ee1fccb60522fb0902cc345ce1f5f4d1533d7dc6cdaeb89269f2a26c74bcb7c4_prof);

        
        $__internal_13dfcf784c0ffcbbbc3948046821fcc65128b9b01aaa9d25410e70508d6db4cf->leave($__internal_13dfcf784c0ffcbbbc3948046821fcc65128b9b01aaa9d25410e70508d6db4cf_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  113 => 46,  92 => 28,  85 => 24,  76 => 20,  70 => 16,  68 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}Message{% endtrans %}</h2>
<br/>
<!------ Include the above in your HEAD tag ---------->

<div class=\"row\">
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
                         <div>
                              <div class=\"box box-primary\">
                                <div class=\"box-header with-border\">
                                  <h3 class=\"box-title\">Nouveau Message</h3>
                                </div>
                                <div class=\"box-body no-padding\">
                                    
<form action=\"{{ url('fos_message_thread_new') }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" class=\"sign\" />
</form>
                                        
                                </div>
                                <br/>
                                <br/>
                                  
                                          
                             </div>
                          </div>
                            
                      </div>
                  </aside>
              </div>
</div>
{% endblock %}
", "FrontBundle:Message:newThread.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/newThread.html.twig");
    }
}

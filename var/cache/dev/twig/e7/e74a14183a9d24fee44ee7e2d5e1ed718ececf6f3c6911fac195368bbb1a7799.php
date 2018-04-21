<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_7e47e99ec352056f2d69c0f7dd95a274ddf37d2adfb253988f3414a83ae8c9b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
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
        $__internal_abd813a0b1842b8c7223c0b69a1f56c05460fbfc458e1c8228d4298192b8d59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd813a0b1842b8c7223c0b69a1f56c05460fbfc458e1c8228d4298192b8d59d->enter($__internal_abd813a0b1842b8c7223c0b69a1f56c05460fbfc458e1c8228d4298192b8d59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $__internal_6213c513367f93223a6f2217b3b71aff16543aa5736f15675ad5a1d7ea581e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6213c513367f93223a6f2217b3b71aff16543aa5736f15675ad5a1d7ea581e63->enter($__internal_6213c513367f93223a6f2217b3b71aff16543aa5736f15675ad5a1d7ea581e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abd813a0b1842b8c7223c0b69a1f56c05460fbfc458e1c8228d4298192b8d59d->leave($__internal_abd813a0b1842b8c7223c0b69a1f56c05460fbfc458e1c8228d4298192b8d59d_prof);

        
        $__internal_6213c513367f93223a6f2217b3b71aff16543aa5736f15675ad5a1d7ea581e63->leave($__internal_6213c513367f93223a6f2217b3b71aff16543aa5736f15675ad5a1d7ea581e63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2524e66ce6466a0ef0d6c8607a2225fd167646e6658eeebc4729e1d1a307ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2524e66ce6466a0ef0d6c8607a2225fd167646e6658eeebc4729e1d1a307ea->enter($__internal_be2524e66ce6466a0ef0d6c8607a2225fd167646e6658eeebc4729e1d1a307ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6645a8ae7902037fe41a409cf96bf0c6fc0554a2420f240cfdc40fc42957ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6645a8ae7902037fe41a409cf96bf0c6fc0554a2420f240cfdc40fc42957ab3->enter($__internal_e6645a8ae7902037fe41a409cf96bf0c6fc0554a2420f240cfdc40fc42957ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                  <h3 class=\"box-title\">Lire Message</h3>
                                </div>
                                <div class=\"box-body no-padding\">
                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "                                  <div class=\"mailbox-read-info\">
                                    <h3>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "subject", array()), "html", null, true);
            echo "</h3>
                                      <br/>
                                    <h5>From: ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array()));
            echo " <span class=\"mailbox-read-time text-default pull-right\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()), "d-M-Y h:m"), "html", null, true);
            echo "</span></h5>
                                  </div>
                                  
                                  <div class=\"mailbox-read-message\">
                                      
                                    <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "</p>
                                  </div>
                                <div class=\"mailbox-controls with-border text-left\">
                                    <br/>
                                    <div class=\"btn-group \">
                                      ";
            // line 59
            if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread(($context["thread"] ?? $this->getContext($context, "thread")))) {
                // line 60
                echo "                                        ";
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant(($context["thread"] ?? $this->getContext($context, "thread")))) {
                    // line 61
                    echo "                                            ";
                    ob_start();
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))), "html", null, true);
                    $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 62
                    echo "                                            ";
                    ob_start();
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                    $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 63
                    echo "                                        ";
                } else {
                    // line 64
                    echo "                                            ";
                    ob_start();
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))), "html", null, true);
                    $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 65
                    echo "                                            ";
                    ob_start();
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                    $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 66
                    echo "                                        ";
                }
                // line 67
                echo "                                        <form action=\"";
                echo twig_escape_filter($this->env, ($context["formAction"] ?? $this->getContext($context, "formAction")), "html", null, true);
                echo "\" method=\"post\">
                                                <button class=\"btn-simple text-danger\" type=\"submit\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, ($context["submitValue"] ?? $this->getContext($context, "submitValue")), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i></button>
                                        </form>
                                    ";
            }
            // line 71
            echo "                                    </div>
                                  </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </div>
                                <br/>
                                <br/>
                                  
                                          
                             </div>
                          </div>
                            <div class=\"\">
                                <h3>";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

                                <form style=\"width: 100%;\" action=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

                                    <input type=\"submit\" class=\"sign\" value=\"Envoyer\" />
                                </form>    
                            </div>
                      </div>
                  </aside>
              </div>
</div>

";
        
        $__internal_e6645a8ae7902037fe41a409cf96bf0c6fc0554a2420f240cfdc40fc42957ab3->leave($__internal_e6645a8ae7902037fe41a409cf96bf0c6fc0554a2420f240cfdc40fc42957ab3_prof);

        
        $__internal_be2524e66ce6466a0ef0d6c8607a2225fd167646e6658eeebc4729e1d1a307ea->leave($__internal_be2524e66ce6466a0ef0d6c8607a2225fd167646e6658eeebc4729e1d1a307ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 85,  207 => 84,  202 => 82,  192 => 74,  184 => 71,  178 => 68,  173 => 67,  170 => 66,  165 => 65,  160 => 64,  157 => 63,  152 => 62,  147 => 61,  144 => 60,  142 => 59,  134 => 54,  124 => 49,  119 => 47,  116 => 46,  112 => 45,  92 => 28,  85 => 24,  76 => 20,  70 => 16,  68 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
                                  <h3 class=\"box-title\">Lire Message</h3>
                                </div>
                                <div class=\"box-body no-padding\">
                                    {% for message in thread.messages %}
                                  <div class=\"mailbox-read-info\">
                                    <h3>{{ thread.subject }}</h3>
                                      <br/>
                                    <h5>From: {{message.sender|e}} <span class=\"mailbox-read-time text-default pull-right\">{{message.createdAt|date('d-M-Y h:m')}}</span></h5>
                                  </div>
                                  
                                  <div class=\"mailbox-read-message\">
                                      
                                    <p>{{ message.body }}</p>
                                  </div>
                                <div class=\"mailbox-controls with-border text-left\">
                                    <br/>
                                    <div class=\"btn-group \">
                                      {% if fos_message_can_delete_thread(thread) %}
                                        {% if fos_message_deleted_by_participant(thread) %}
                                            {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                                        {% else %}
                                            {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                                        {% endif %}
                                        <form action=\"{{ formAction }}\" method=\"post\">
                                                <button class=\"btn-simple text-danger\" type=\"submit\" value=\"{{ submitValue }}\" ><i class=\"fa fa-trash\"></i></button>
                                        </form>
                                    {% endif %}
                                    </div>
                                  </div>
                                    {% endfor %}
                                </div>
                                <br/>
                                <br/>
                                  
                                          
                             </div>
                          </div>
                            <div class=\"\">
                                <h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>

                                <form style=\"width: 100%;\" action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
                                    {{ form_widget(form) }}

                                    <input type=\"submit\" class=\"sign\" value=\"Envoyer\" />
                                </form>    
                            </div>
                      </div>
                  </aside>
              </div>
</div>

{% endblock %}
", "FOSMessageBundle:Message:thread.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/thread.html.twig");
    }
}

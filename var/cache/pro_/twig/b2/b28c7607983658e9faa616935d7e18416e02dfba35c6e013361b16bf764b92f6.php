<?php

/* @Front/Message/thread.html.twig */
class __TwigTemplate_f99fc773c0cbeda8ac3ab47ca1604910f20387f7fd3619ae09e33eb4df71a140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@Front/Message/thread.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->getNbUnread((isset($context["threads"]) ? $context["threads"] : null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "                                  <div class=\"mailbox-read-info\">
                                    <h3>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "subject", array()), "html", null, true);
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
            if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread((isset($context["thread"]) ? $context["thread"] : null))) {
                // line 60
                echo "                                        ";
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant((isset($context["thread"]) ? $context["thread"] : null))) {
                    // line 61
                    echo "                                            ";
                    ob_start();
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : null), "html", null, true);
                echo "\" method=\"post\">
                                                <button class=\"btn-simple text-danger\" type=\"submit\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, (isset($context["submitValue"]) ? $context["submitValue"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

                                    <input type=\"submit\" class=\"sign\" value=\"Envoyer\" />
                                </form>    
                            </div>
                      </div>
                  </aside>
              </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@Front/Message/thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 85,  189 => 84,  184 => 82,  174 => 74,  166 => 71,  160 => 68,  155 => 67,  152 => 66,  147 => 65,  142 => 64,  139 => 63,  134 => 62,  129 => 61,  126 => 60,  124 => 59,  116 => 54,  106 => 49,  101 => 47,  98 => 46,  94 => 45,  74 => 28,  67 => 24,  58 => 20,  52 => 16,  50 => 15,  46 => 14,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Front/Message/thread.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle\\Resources\\views\\Message\\thread.html.twig");
    }
}

<?php

/* @Front/Message/newThread.html.twig */
class __TwigTemplate_7e1b71967312c1019dad33e261b6b16b29f67dc3133bfd23742102fbb3e90344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@Front/Message/newThread.html.twig", 1);
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
                                  <h3 class=\"box-title\">Nouveau Message</h3>
                                </div>
                                <div class=\"box-body no-padding\">
                                    
<form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
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
    }

    public function getTemplateName()
    {
        return "@Front/Message/newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  95 => 46,  74 => 28,  67 => 24,  58 => 20,  52 => 16,  50 => 15,  46 => 14,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Front/Message/newThread.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle\\Resources\\views\\Message\\newThread.html.twig");
    }
}

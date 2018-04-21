<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_b5cc76198e95341bdd3cb12247250b0e789a5c6aa40ec4b1bbead6edb511f47a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 1);
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
        $__internal_1245f9a7262b012d87128ca9c210a1d714fb3a6f38cafe24808dd7923d2a244a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1245f9a7262b012d87128ca9c210a1d714fb3a6f38cafe24808dd7923d2a244a->enter($__internal_1245f9a7262b012d87128ca9c210a1d714fb3a6f38cafe24808dd7923d2a244a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $__internal_d9dddaa1f7980f470783c1bf812f7653d5a4c512849bc99555f65868bb426c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dddaa1f7980f470783c1bf812f7653d5a4c512849bc99555f65868bb426c3f->enter($__internal_d9dddaa1f7980f470783c1bf812f7653d5a4c512849bc99555f65868bb426c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1245f9a7262b012d87128ca9c210a1d714fb3a6f38cafe24808dd7923d2a244a->leave($__internal_1245f9a7262b012d87128ca9c210a1d714fb3a6f38cafe24808dd7923d2a244a_prof);

        
        $__internal_d9dddaa1f7980f470783c1bf812f7653d5a4c512849bc99555f65868bb426c3f->leave($__internal_d9dddaa1f7980f470783c1bf812f7653d5a4c512849bc99555f65868bb426c3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b1e5bfb87921960f8ca3e8a1883ad553464cccb265c823f6559346d862ecc02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1e5bfb87921960f8ca3e8a1883ad553464cccb265c823f6559346d862ecc02->enter($__internal_6b1e5bfb87921960f8ca3e8a1883ad553464cccb265c823f6559346d862ecc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64429e6223152a6c90f9df800594cd2cf4b8d4f0f53e92c426b1bd2af37843bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64429e6223152a6c90f9df800594cd2cf4b8d4f0f53e92c426b1bd2af37843bd->enter($__internal_64429e6223152a6c90f9df800594cd2cf4b8d4f0f53e92c426b1bd2af37843bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 54)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 55
        echo "
                      </div>
                  </aside>
              </div>
</div>
";
        
        $__internal_64429e6223152a6c90f9df800594cd2cf4b8d4f0f53e92c426b1bd2af37843bd->leave($__internal_64429e6223152a6c90f9df800594cd2cf4b8d4f0f53e92c426b1bd2af37843bd_prof);

        
        $__internal_6b1e5bfb87921960f8ca3e8a1883ad553464cccb265c823f6559346d862ecc02->leave($__internal_6b1e5bfb87921960f8ca3e8a1883ad553464cccb265c823f6559346d862ecc02_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
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
", "FOSMessageBundle:Message:inbox.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/inbox.html.twig");
    }
}

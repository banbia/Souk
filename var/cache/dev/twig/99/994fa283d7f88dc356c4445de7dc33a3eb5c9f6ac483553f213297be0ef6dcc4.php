<?php

/* FrontBundle:Message:thread.html.twig */
class __TwigTemplate_541b7c62ae98363fd8da88be77d1235c486b25b9fae5b63d88486ede80353404 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Message:thread.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:thread.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h2>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Messages", array(), "FOSMessageBundle");
        echo "</h2>
<br/>
<!------ Include the above in your HEAD tag ---------->

    <div class=\"container\">
        <div class=\"mail-box\">
            <aside class=\"sm-side\">

                <div class=\"inbox-body\">
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_new");
        echo "\"  class=\"btn btn-compose\">
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        // line 19
        echo "                    </a>
                </div>
                <ul class=\"inbox-nav inbox-divider\">
                    <li class=\"active\">
                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_message_inbox");
        echo "\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-danger pull-right\">";
        echo twig_escape_filter($this->env, $this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->getNbUnread((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new Twig_Error_Runtime('Variable "threads" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "</span></a>

                    </li>
                    <li>
                        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_message_sent");
        echo "\"><i class=\"fa fa-envelope-o\"></i> Envoyés</a>
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 49, $this->source); })()), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            echo "                                  <div class=\"mailbox-read-info\">
                                    <h3 class=\"text-default\">Objet : ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 51, $this->source); })()), "subject", array()), "html", null, true);
            echo "</h3>
                                      <br/>
                                    <h4 class=\"text-primary\">From: ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sender", array()));
            echo " <span class=\"mailbox-read-time text-default pull-right\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", array()), "d-M-Y h:m"), "html", null, true);
            echo "</span></h4>
                                  </div>
                                  
                                  <div class=\"mailbox-read-message\" style=\"padding-top: 25px;padding-left:4%\">
                                      
                                    <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "body", array()), "html", null, true);
            echo "</p>
                                  </div>
                                        <br/>
                                <div class=\"mailbox-controls with-border text-left\">
                                    <br/>
                                    <div class=\"btn-group \" style=\"width:100%\">
                                      ";
            // line 64
            if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->canDeleteThread((isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 64, $this->source); })()))) {
                // line 65
                echo "                                        ";
                if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->isThreadDeletedByParticipant((isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 65, $this->source); })()))) {
                    // line 66
                    echo "                                            ";
                    ob_start();
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_undelete", array("threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 66, $this->source); })()), "id", array()))), "html", null, true);
                    $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 67
                    echo "                                            ";
                    ob_start();
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                    $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 68
                    echo "                                        ";
                } else {
                    // line 69
                    echo "                                            ";
                    ob_start();
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_delete", array("threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 69, $this->source); })()), "id", array()))), "html", null, true);
                    $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 70
                    echo "                                            ";
                    ob_start();
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                    $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 71
                    echo "                                        ";
                }
                // line 72
                echo "                                        <form  action=\"";
                echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new Twig_Error_Runtime('Variable "formAction" does not exist.', 72, $this->source); })()), "html", null, true);
                echo "\" method=\"post\">
                                                <button class=\"btn-simple text-danger pull-right\" type=\"submit\" value=\"";
                // line 73
                echo twig_escape_filter($this->env, (isset($context["submitValue"]) || array_key_exists("submitValue", $context) ? $context["submitValue"] : (function () { throw new Twig_Error_Runtime('Variable "submitValue" does not exist.', 73, $this->source); })()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i> Supprimer</button>
                                        </form>
                                    ";
            }
            // line 76
            echo "                                    </div>
                                  </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                </div>
                                <br/>
                                <br/>
                                  
                                          
                             </div>
                          </div>
                            <div class=\"\">
                                <h3>";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>
                                <br/>
                                ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_view", array("threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 89, $this->source); })()), "id", array()))), "attr" => array("class" => "")));
        echo "



                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "body", array()), 'label', array("label" => "Contenu"));
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "body", array()), 'errors');
        echo "
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), "body", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                <br/>
                                <br/>
                                <input type=\"submit\" class=\"sign\" />
                                ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "

                            </div>
                      </div>
                  </aside>
              </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 99,  249 => 95,  245 => 94,  241 => 93,  234 => 89,  229 => 87,  219 => 79,  211 => 76,  205 => 73,  200 => 72,  197 => 71,  192 => 70,  187 => 69,  184 => 68,  179 => 67,  174 => 66,  171 => 65,  169 => 64,  160 => 58,  150 => 53,  145 => 51,  142 => 50,  138 => 49,  113 => 27,  104 => 23,  98 => 19,  96 => 18,  92 => 17,  80 => 8,  77 => 7,  68 => 6,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{% block style %}
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>

{% endblock style %}
{% block body %}

<h2>{% trans from 'FOSMessageBundle' %}Messages{% endtrans %}</h2>
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
                                    <h3 class=\"text-default\">Objet : {{ thread.subject }}</h3>
                                      <br/>
                                    <h4 class=\"text-primary\">From: {{message.sender|e}} <span class=\"mailbox-read-time text-default pull-right\">{{message.createdAt|date('d-M-Y h:m')}}</span></h4>
                                  </div>
                                  
                                  <div class=\"mailbox-read-message\" style=\"padding-top: 25px;padding-left:4%\">
                                      
                                    <p>{{ message.body }}</p>
                                  </div>
                                        <br/>
                                <div class=\"mailbox-controls with-border text-left\">
                                    <br/>
                                    <div class=\"btn-group \" style=\"width:100%\">
                                      {% if fos_message_can_delete_thread(thread) %}
                                        {% if fos_message_deleted_by_participant(thread) %}
                                            {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                                        {% else %}
                                            {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                                        {% endif %}
                                        <form  action=\"{{ formAction }}\" method=\"post\">
                                                <button class=\"btn-simple text-danger pull-right\" type=\"submit\" value=\"{{ submitValue }}\" ><i class=\"fa fa-trash\"></i> Supprimer</button>
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
                                <br/>
                                {{ form_start(form, {'method': 'post', 'action': url('fos_message_thread_view', {'threadId': thread.id}), 'attr': {'class': ''}}) }}



                                {{ form_label(form.body,'Contenu') }}
                                {{ form_errors(form.body) }}
                                {{ form_widget(form.body, {'attr': {'class': 'form-control'}}) }}
                                <br/>
                                <br/>
                                <input type=\"submit\" class=\"sign\" />
                                {{ form_end(form) }}

                            </div>
                      </div>
                  </aside>
              </div>
</div>

{% endblock %}
", "FrontBundle:Message:thread.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/thread.html.twig");
    }
}

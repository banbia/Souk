<?php

/* FrontBundle:Message:thread.html.twig */
class __TwigTemplate_c71305da3db9681bed04e967cc00e29b70867aaf1b6ec2261fb8c47541d8ecf9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->getNbUnread(($context["threads"] ?? null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["thread"] ?? null), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            echo "                                  <div class=\"mailbox-read-info\">
                                    <h3 class=\"text-default\">Objet : ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thread"] ?? null), "subject", array()), "html", null, true);
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
            if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->canDeleteThread(($context["thread"] ?? null))) {
                // line 65
                echo "                                        ";
                if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->isThreadDeletedByParticipant(($context["thread"] ?? null))) {
                    // line 66
                    echo "                                            ";
                    ob_start();
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_undelete", array("threadId" => twig_get_attribute($this->env, $this->source, ($context["thread"] ?? null), "id", array()))), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_delete", array("threadId" => twig_get_attribute($this->env, $this->source, ($context["thread"] ?? null), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
                echo "\" method=\"post\">
                                                <button class=\"btn-simple text-danger pull-right\" type=\"submit\" value=\"";
                // line 73
                echo twig_escape_filter($this->env, ($context["submitValue"] ?? null), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_view", array("threadId" => twig_get_attribute($this->env, $this->source, ($context["thread"] ?? null), "id", array()))), "attr" => array("class" => "")));
        echo "



                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", array()), 'label', array("label" => "Contenu"));
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", array()), 'errors');
        echo "
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                <br/>
                                <br/>
                                <input type=\"submit\" class=\"sign\" />
                                ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

                            </div>
                      </div>
                  </aside>
              </div>
</div>

";
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
        return array (  226 => 99,  219 => 95,  215 => 94,  211 => 93,  204 => 89,  199 => 87,  189 => 79,  181 => 76,  175 => 73,  170 => 72,  167 => 71,  162 => 70,  157 => 69,  154 => 68,  149 => 67,  144 => 66,  141 => 65,  139 => 64,  130 => 58,  120 => 53,  115 => 51,  112 => 50,  108 => 49,  83 => 27,  74 => 23,  68 => 19,  66 => 18,  62 => 17,  50 => 8,  47 => 7,  44 => 6,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Message:thread.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/thread.html.twig");
    }
}

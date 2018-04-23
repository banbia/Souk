<?php

/* FrontBundle:Message:threads_list.html.twig */
class __TwigTemplate_1ad91b76acc9832cd0229f670fc554f23a6897ac4bbd2617b398b0b776520f04 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"table table-inbox table-hover\">
    <tbody>
    ";
        // line 3
        if (($context["threads"] ?? null)) {
            // line 4
            echo "        
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["threads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 6
                echo "                    ";
                if ( !$this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->isRead($context["thread"])) {
                    // line 7
                    echo "                        <tr class=\"unread\">
                    ";
                } else {
                    // line 9
                    echo "                        <tr class=\"\">
                    ";
                }
                // line 11
                echo "              
                  <td class=\"inbox-small-cells\">
                      ";
                // line 13
                if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->canDeleteThread($context["thread"])) {
                    // line 14
                    echo "                        ";
                    if ($this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->isThreadDeletedByParticipant($context["thread"])) {
                        // line 15
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_undelete", array("threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 16
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 17
                        echo "                        ";
                    } else {
                        // line 18
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_delete", array("threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 19
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 20
                        echo "                        ";
                    }
                    // line 21
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
                    echo "\" method=\"post\">
                                <button class=\"btn-simple text-danger\" type=\"submit\" value=\"";
                    // line 22
                    echo twig_escape_filter($this->env, ($context["submitValue"] ?? null), "html", null, true);
                    echo "\" ><i class=\"fa fa-trash\"></i></button>
                        </form>
                      <a class=\" text-success\" href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_message_thread_view", array("threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", array()))), "html", null, true);
                    echo "\">  <i class=\"fa fa-eye\"></i></a>
                    ";
                }
                // line 26
                echo "                  </td>
                  <td class=\"view-message  dont-show\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["thread"], "lastMessage", array()), "sender", array()));
                echo "</td>
                  <td class=\"view-message  dont-show\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "subject", array()), "html", null, true);
                echo "</td>
                  <td class=\"view-message \">
                      <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_view", array("threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "id", array()))), "html", null, true);
                echo "#message_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                echo "\">
                            →
                        </a></td>
                  <td class=\"view-message  text-right\">";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "createdAt", array()), "d-m-Y H:m"), "html", null, true);
                echo "</td>
              </tr>
              
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        <tr>
            <td colspan=\"5\">
                ";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
            </td>
        </tr>
    ";
        }
        // line 44
        echo "
    </tbody>

</table>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  136 => 40,  132 => 38,  129 => 37,  119 => 33,  109 => 30,  104 => 28,  100 => 27,  97 => 26,  92 => 24,  87 => 22,  82 => 21,  79 => 20,  74 => 19,  69 => 18,  66 => 17,  61 => 16,  56 => 15,  53 => 14,  51 => 13,  47 => 11,  43 => 9,  39 => 7,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Message:threads_list.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/threads_list.html.twig");
    }
}

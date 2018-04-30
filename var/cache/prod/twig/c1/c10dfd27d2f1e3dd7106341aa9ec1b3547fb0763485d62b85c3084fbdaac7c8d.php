<?php

/* FrontBundle:Message:threads_list.html.twig */
class __TwigTemplate_318f9a4f4474bc49c08df0be977ec02561873da2fa764aaa3cbb32777f1bb0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
                if ( !$this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isRead($context["thread"])) {
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
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread($context["thread"])) {
                    // line 14
                    echo "                        ";
                    if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 15
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
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
                    echo "
                        <a style=\"margin-left:5px;\" class=\"btn-simple text-success\" href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "\">  <i class=\"fa fa-eye\"></i></a>
                          <form action=\"";
                    // line 23
                    echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
                    echo "\" method=\"post\">
                              <button class=\"btn-simple text-danger\" type=\"submit\" value=\"";
                    // line 24
                    echo twig_escape_filter($this->env, ($context["submitValue"] ?? null), "html", null, true);
                    echo "\" ><i class=\"fa fa-trash\"></i></button>
                          </form>
                  ";
                }
                // line 27
                echo "                  </td>
                  <td class=\"view-message  dont-show\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()));
                echo "</td>
                  <td class=\"view-message  dont-show\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "</td>
                  <td class=\"view-message \">
                      <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "#message_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                echo "\">
                            →
                        </a></td>
                  <td class=\"view-message  text-right\">";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array()), "d-m-Y H:m"), "html", null, true);
                echo "</td>
              </tr>
              
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        <tr>
            <td colspan=\"5\">
                ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
            </td>
        </tr>
    ";
        }
        // line 45
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
        return array (  141 => 45,  134 => 41,  130 => 39,  127 => 38,  117 => 34,  107 => 31,  102 => 29,  98 => 28,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  78 => 21,  75 => 20,  70 => 19,  65 => 18,  62 => 17,  57 => 16,  52 => 15,  49 => 14,  47 => 13,  43 => 11,  39 => 9,  35 => 7,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Message:threads_list.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/threads_list.html.twig");
    }
}

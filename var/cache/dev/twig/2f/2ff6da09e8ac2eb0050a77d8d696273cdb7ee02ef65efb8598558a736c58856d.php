<?php

/* FOSMessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_9dd6dbf5999e811e58f8f94bc24bf4c246a3fa10516cc9d854de80bd71befdee extends Twig_Template
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
        $__internal_f6a8339c520e610bdf879af5b39074c4d52a8644b94629a9082a6845d3152d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a8339c520e610bdf879af5b39074c4d52a8644b94629a9082a6845d3152d83->enter($__internal_f6a8339c520e610bdf879af5b39074c4d52a8644b94629a9082a6845d3152d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        $__internal_720bfbdec2f83353b727befddc390827636381e00239eef72801f9ce17ffaa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720bfbdec2f83353b727befddc390827636381e00239eef72801f9ce17ffaa41->enter($__internal_720bfbdec2f83353b727befddc390827636381e00239eef72801f9ce17ffaa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        // line 1
        echo "<table class=\"table table-inbox table-hover\">
    <tbody>
    ";
        // line 3
        if (($context["threads"] ?? $this->getContext($context, "threads"))) {
            // line 4
            echo "        
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["threads"] ?? $this->getContext($context, "threads")));
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
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, ($context["formAction"] ?? $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                <button class=\"btn-simple text-danger\" type=\"submit\" value=\"";
                    // line 22
                    echo twig_escape_filter($this->env, ($context["submitValue"] ?? $this->getContext($context, "submitValue")), "html", null, true);
                    echo "\" ><i class=\"fa fa-trash\"></i></button>
                        </form>
                      <a class=\" text-success\" href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "\">  <i class=\"fa fa-eye\"></i></a>
                    ";
                }
                // line 26
                echo "                  </td>
                  <td class=\"view-message  dont-show\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()));
                echo "</td>
                  <td class=\"view-message  dont-show\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "</td>
                  <td class=\"view-message \">
                      <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "#message_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                echo "\">
                            →
                        </a></td>
                  <td class=\"view-message  text-right\">";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array()), "d-m-Y H:m"), "html", null, true);
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
        
        $__internal_f6a8339c520e610bdf879af5b39074c4d52a8644b94629a9082a6845d3152d83->leave($__internal_f6a8339c520e610bdf879af5b39074c4d52a8644b94629a9082a6845d3152d83_prof);

        
        $__internal_720bfbdec2f83353b727befddc390827636381e00239eef72801f9ce17ffaa41->leave($__internal_720bfbdec2f83353b727befddc390827636381e00239eef72801f9ce17ffaa41_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 44,  138 => 40,  134 => 38,  131 => 37,  121 => 33,  111 => 30,  106 => 28,  102 => 27,  99 => 26,  94 => 24,  89 => 22,  84 => 21,  81 => 20,  76 => 19,  71 => 18,  68 => 17,  63 => 16,  58 => 15,  55 => 14,  53 => 13,  49 => 11,  45 => 9,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-inbox table-hover\">
    <tbody>
    {% if threads %}
        
            {% for thread in threads %}
                    {% if not fos_message_is_read(thread) %}
                        <tr class=\"unread\">
                    {% else %}
                        <tr class=\"\">
                    {% endif %}
              
                  <td class=\"inbox-small-cells\">
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
                      <a class=\" text-success\" href=\"{{ path('fos_message_thread_view', {'threadId': thread.id}) }}\">  <i class=\"fa fa-eye\"></i></a>
                    {% endif %}
                  </td>
                  <td class=\"view-message  dont-show\">{{thread.lastMessage.sender|e }}</td>
                  <td class=\"view-message  dont-show\">{{thread.subject }}</td>
                  <td class=\"view-message \">
                      <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}\" title=\"{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}\">
                            →
                        </a></td>
                  <td class=\"view-message  text-right\">{{ thread.createdAt|date('d-m-Y H:m') }}</td>
              </tr>
              
            {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"5\">
                {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.
            </td>
        </tr>
    {% endif %}

    </tbody>

</table>
", "FOSMessageBundle:Message:threads_list.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/threads_list.html.twig");
    }
}

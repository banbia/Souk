<?php

/* FrontBundle:Message:search.html.twig */
class __TwigTemplate_b9f71386f17b73013fb39d59e4faf8613b34277d65bffdf2225e8f9cd8c5e92c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FrontBundle:Message:search.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
    }

    // line 6
    public function block_fos_message_content($context, array $blocks = array())
    {
        // line 7
        echo "
<h2>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("search", array(), "FOSMessageBundle");
        echo "</h2>

<p>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, ($context["threads"] ?? null)), array("%num%" => twig_length_filter($this->env, ($context["threads"] ?? null))), "FOSMessageBundle");
        // line 12
        echo "</p>

";
        // line 14
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FrontBundle:Message:search.html.twig", 14)->display(array_merge($context, array("threads" => ($context["threads"] ?? null))));
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  57 => 14,  53 => 12,  51 => 10,  46 => 8,  43 => 7,  40 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Message:search.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/search.html.twig");
    }
}

<?php

/* FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig */
class __TwigTemplate_6af44770fea35929ee41634b0e6ad8e8fe01d63a9d1c91ef0add923ef37cc85d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig", 1);
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
        echo "<p> bonjour </p>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/commentairesAnc/edit_commantaireAnc.html.twig");
    }
}

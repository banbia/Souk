<?php

/* FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig */
class __TwigTemplate_c1b8df2dae1d9e34351c5b9499fef7442445695ea3ab99d42d72e039e6406ac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig", 1);
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
        return "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig";
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
        return new Twig_Source("", "FrontBundle:commentairesEvs:delete_commentaireEvs.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\src\\Souk\\FrontBundle/Resources/views/commentairesEvs/delete_commentaireEvs.html.twig");
    }
}

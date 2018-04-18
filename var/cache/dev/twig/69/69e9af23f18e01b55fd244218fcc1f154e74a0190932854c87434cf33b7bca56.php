<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0808b9c472333a9a2a141f15bd97934beb01a42f21661eac3122ec62d4f24267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1870beace0a687cfe47ccd8ac5162c0215dc9ef21e5ba1e4641893371d7eb4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1870beace0a687cfe47ccd8ac5162c0215dc9ef21e5ba1e4641893371d7eb4fb->enter($__internal_1870beace0a687cfe47ccd8ac5162c0215dc9ef21e5ba1e4641893371d7eb4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_433f00752b9b29b79f5ea5ed63767e4cf0338a822a48757ef51d5167e2de99be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433f00752b9b29b79f5ea5ed63767e4cf0338a822a48757ef51d5167e2de99be->enter($__internal_433f00752b9b29b79f5ea5ed63767e4cf0338a822a48757ef51d5167e2de99be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1870beace0a687cfe47ccd8ac5162c0215dc9ef21e5ba1e4641893371d7eb4fb->leave($__internal_1870beace0a687cfe47ccd8ac5162c0215dc9ef21e5ba1e4641893371d7eb4fb_prof);

        
        $__internal_433f00752b9b29b79f5ea5ed63767e4cf0338a822a48757ef51d5167e2de99be->leave($__internal_433f00752b9b29b79f5ea5ed63767e4cf0338a822a48757ef51d5167e2de99be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0944bddc92b3858ffaebf02e5d568ec686188c14b264aa19447706a161990e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0944bddc92b3858ffaebf02e5d568ec686188c14b264aa19447706a161990e23->enter($__internal_0944bddc92b3858ffaebf02e5d568ec686188c14b264aa19447706a161990e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_31d64626eadab69d12a34cd08147878587d4043c1345b764178d5aa939ea800e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d64626eadab69d12a34cd08147878587d4043c1345b764178d5aa939ea800e->enter($__internal_31d64626eadab69d12a34cd08147878587d4043c1345b764178d5aa939ea800e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_31d64626eadab69d12a34cd08147878587d4043c1345b764178d5aa939ea800e->leave($__internal_31d64626eadab69d12a34cd08147878587d4043c1345b764178d5aa939ea800e_prof);

        
        $__internal_0944bddc92b3858ffaebf02e5d568ec686188c14b264aa19447706a161990e23->leave($__internal_0944bddc92b3858ffaebf02e5d568ec686188c14b264aa19447706a161990e23_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/list.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d364844e5189110d769fea3ab6be18419b2dcafed30974bdc308494ccd358ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d364844e5189110d769fea3ab6be18419b2dcafed30974bdc308494ccd358ed7->enter($__internal_d364844e5189110d769fea3ab6be18419b2dcafed30974bdc308494ccd358ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f7ca4153966877960abeae1c8c1988ee90cb0ab6aac63a8f5519cebaed8606b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ca4153966877960abeae1c8c1988ee90cb0ab6aac63a8f5519cebaed8606b3->enter($__internal_f7ca4153966877960abeae1c8c1988ee90cb0ab6aac63a8f5519cebaed8606b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d364844e5189110d769fea3ab6be18419b2dcafed30974bdc308494ccd358ed7->leave($__internal_d364844e5189110d769fea3ab6be18419b2dcafed30974bdc308494ccd358ed7_prof);

        
        $__internal_f7ca4153966877960abeae1c8c1988ee90cb0ab6aac63a8f5519cebaed8606b3->leave($__internal_f7ca4153966877960abeae1c8c1988ee90cb0ab6aac63a8f5519cebaed8606b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e0f30b861e409b905f2e2859571b98d24c0e94b73ed11f98cb3160d0c12c8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0f30b861e409b905f2e2859571b98d24c0e94b73ed11f98cb3160d0c12c8c6->enter($__internal_4e0f30b861e409b905f2e2859571b98d24c0e94b73ed11f98cb3160d0c12c8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a3b5a17ffade1d2a51b8775c9feaa9fed22a850caa92efa832301bd73528b96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b5a17ffade1d2a51b8775c9feaa9fed22a850caa92efa832301bd73528b96a->enter($__internal_a3b5a17ffade1d2a51b8775c9feaa9fed22a850caa92efa832301bd73528b96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3b5a17ffade1d2a51b8775c9feaa9fed22a850caa92efa832301bd73528b96a->leave($__internal_a3b5a17ffade1d2a51b8775c9feaa9fed22a850caa92efa832301bd73528b96a_prof);

        
        $__internal_4e0f30b861e409b905f2e2859571b98d24c0e94b73ed11f98cb3160d0c12c8c6->leave($__internal_4e0f30b861e409b905f2e2859571b98d24c0e94b73ed11f98cb3160d0c12c8c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4dd78129d412128f41e1e8da674f7545395c6da68ab87e265488889b8d2a23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4dd78129d412128f41e1e8da674f7545395c6da68ab87e265488889b8d2a23b->enter($__internal_b4dd78129d412128f41e1e8da674f7545395c6da68ab87e265488889b8d2a23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae6d7c6d152abe5eb4cef52ec217af24be5a04f49cbd18a14f91d41a989778a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6d7c6d152abe5eb4cef52ec217af24be5a04f49cbd18a14f91d41a989778a0->enter($__internal_ae6d7c6d152abe5eb4cef52ec217af24be5a04f49cbd18a14f91d41a989778a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ae6d7c6d152abe5eb4cef52ec217af24be5a04f49cbd18a14f91d41a989778a0->leave($__internal_ae6d7c6d152abe5eb4cef52ec217af24be5a04f49cbd18a14f91d41a989778a0_prof);

        
        $__internal_b4dd78129d412128f41e1e8da674f7545395c6da68ab87e265488889b8d2a23b->leave($__internal_b4dd78129d412128f41e1e8da674f7545395c6da68ab87e265488889b8d2a23b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c5f7855224d9bfdcb4ddd827868bd6c9675f6036a80b3e8ac338967aa019d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5f7855224d9bfdcb4ddd827868bd6c9675f6036a80b3e8ac338967aa019d1c->enter($__internal_4c5f7855224d9bfdcb4ddd827868bd6c9675f6036a80b3e8ac338967aa019d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_475ff17ec64ab07cffa9ef4ee47c404c2dd4b036b8dfd9dcdf30777c0c0e81d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475ff17ec64ab07cffa9ef4ee47c404c2dd4b036b8dfd9dcdf30777c0c0e81d0->enter($__internal_475ff17ec64ab07cffa9ef4ee47c404c2dd4b036b8dfd9dcdf30777c0c0e81d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_475ff17ec64ab07cffa9ef4ee47c404c2dd4b036b8dfd9dcdf30777c0c0e81d0->leave($__internal_475ff17ec64ab07cffa9ef4ee47c404c2dd4b036b8dfd9dcdf30777c0c0e81d0_prof);

        
        $__internal_4c5f7855224d9bfdcb4ddd827868bd6c9675f6036a80b3e8ac338967aa019d1c->leave($__internal_4c5f7855224d9bfdcb4ddd827868bd6c9675f6036a80b3e8ac338967aa019d1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

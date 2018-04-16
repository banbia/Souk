<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_94365efcb6bde1d2a1968e2b89170180ce005c1efdb3182ccd4d5bca44c01019 extends Twig_Template
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
        $__internal_631fabe781ae26d7d59e5a819516bb3c0188f9f6833fc56e2fd0b061db94d2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631fabe781ae26d7d59e5a819516bb3c0188f9f6833fc56e2fd0b061db94d2b2->enter($__internal_631fabe781ae26d7d59e5a819516bb3c0188f9f6833fc56e2fd0b061db94d2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c4c7e33499058c728c078e02676bb7d4e6c088a3bfc30f4df62393ae9f42253e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c7e33499058c728c078e02676bb7d4e6c088a3bfc30f4df62393ae9f42253e->enter($__internal_c4c7e33499058c728c078e02676bb7d4e6c088a3bfc30f4df62393ae9f42253e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631fabe781ae26d7d59e5a819516bb3c0188f9f6833fc56e2fd0b061db94d2b2->leave($__internal_631fabe781ae26d7d59e5a819516bb3c0188f9f6833fc56e2fd0b061db94d2b2_prof);

        
        $__internal_c4c7e33499058c728c078e02676bb7d4e6c088a3bfc30f4df62393ae9f42253e->leave($__internal_c4c7e33499058c728c078e02676bb7d4e6c088a3bfc30f4df62393ae9f42253e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbdb09499177481292e72740e28190283e52ed7737c2ae74f1ad0199409ce662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdb09499177481292e72740e28190283e52ed7737c2ae74f1ad0199409ce662->enter($__internal_bbdb09499177481292e72740e28190283e52ed7737c2ae74f1ad0199409ce662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62b7ccdec4b1b9c3f355a6a176cd70a5a4d6ea000010faffbe16a5d4f4cf93a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b7ccdec4b1b9c3f355a6a176cd70a5a4d6ea000010faffbe16a5d4f4cf93a3->enter($__internal_62b7ccdec4b1b9c3f355a6a176cd70a5a4d6ea000010faffbe16a5d4f4cf93a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62b7ccdec4b1b9c3f355a6a176cd70a5a4d6ea000010faffbe16a5d4f4cf93a3->leave($__internal_62b7ccdec4b1b9c3f355a6a176cd70a5a4d6ea000010faffbe16a5d4f4cf93a3_prof);

        
        $__internal_bbdb09499177481292e72740e28190283e52ed7737c2ae74f1ad0199409ce662->leave($__internal_bbdb09499177481292e72740e28190283e52ed7737c2ae74f1ad0199409ce662_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18ff0330da68b6ad811671c30450dda080d9ddc4304751b54e6ac7500e0c9e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ff0330da68b6ad811671c30450dda080d9ddc4304751b54e6ac7500e0c9e08->enter($__internal_18ff0330da68b6ad811671c30450dda080d9ddc4304751b54e6ac7500e0c9e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d116e7903efcb2bf37de35c8cc46b534b01216e629f2045d4e7e5f268a4a2f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d116e7903efcb2bf37de35c8cc46b534b01216e629f2045d4e7e5f268a4a2f9a->enter($__internal_d116e7903efcb2bf37de35c8cc46b534b01216e629f2045d4e7e5f268a4a2f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d116e7903efcb2bf37de35c8cc46b534b01216e629f2045d4e7e5f268a4a2f9a->leave($__internal_d116e7903efcb2bf37de35c8cc46b534b01216e629f2045d4e7e5f268a4a2f9a_prof);

        
        $__internal_18ff0330da68b6ad811671c30450dda080d9ddc4304751b54e6ac7500e0c9e08->leave($__internal_18ff0330da68b6ad811671c30450dda080d9ddc4304751b54e6ac7500e0c9e08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3860f4af5ce9ef9451828d0b463f191d55ac5fe78302375a255da69e38f3a73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3860f4af5ce9ef9451828d0b463f191d55ac5fe78302375a255da69e38f3a73a->enter($__internal_3860f4af5ce9ef9451828d0b463f191d55ac5fe78302375a255da69e38f3a73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a11e2a1886cf49eefe9c8a724d69c4f6268343ee33b1ef90baad02cc4a47893c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11e2a1886cf49eefe9c8a724d69c4f6268343ee33b1ef90baad02cc4a47893c->enter($__internal_a11e2a1886cf49eefe9c8a724d69c4f6268343ee33b1ef90baad02cc4a47893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a11e2a1886cf49eefe9c8a724d69c4f6268343ee33b1ef90baad02cc4a47893c->leave($__internal_a11e2a1886cf49eefe9c8a724d69c4f6268343ee33b1ef90baad02cc4a47893c_prof);

        
        $__internal_3860f4af5ce9ef9451828d0b463f191d55ac5fe78302375a255da69e38f3a73a->leave($__internal_3860f4af5ce9ef9451828d0b463f191d55ac5fe78302375a255da69e38f3a73a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d2c50b3b356853961eeb2ed1fe11fcd22b005fc87d5d26f08284bc146213d8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_302ba0231ae4eb0362a9e0a4cd2837f13dbf8062461c3fbbbbc819879c5d8669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302ba0231ae4eb0362a9e0a4cd2837f13dbf8062461c3fbbbbc819879c5d8669->enter($__internal_302ba0231ae4eb0362a9e0a4cd2837f13dbf8062461c3fbbbbc819879c5d8669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5e7b658e94be6bc6c1fffdeef8268235275cd896d2635bcaf27f97f8a83d75b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7b658e94be6bc6c1fffdeef8268235275cd896d2635bcaf27f97f8a83d75b0->enter($__internal_5e7b658e94be6bc6c1fffdeef8268235275cd896d2635bcaf27f97f8a83d75b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_302ba0231ae4eb0362a9e0a4cd2837f13dbf8062461c3fbbbbc819879c5d8669->leave($__internal_302ba0231ae4eb0362a9e0a4cd2837f13dbf8062461c3fbbbbc819879c5d8669_prof);

        
        $__internal_5e7b658e94be6bc6c1fffdeef8268235275cd896d2635bcaf27f97f8a83d75b0->leave($__internal_5e7b658e94be6bc6c1fffdeef8268235275cd896d2635bcaf27f97f8a83d75b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5815488f85a01d6cfd0c4c675ce64791d5d6106bab7a6bc912d40aac89f2422e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5815488f85a01d6cfd0c4c675ce64791d5d6106bab7a6bc912d40aac89f2422e->enter($__internal_5815488f85a01d6cfd0c4c675ce64791d5d6106bab7a6bc912d40aac89f2422e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2bef486946a93b387b25d47184176c25c09db3c9d7c56091f96aa1175fda1a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bef486946a93b387b25d47184176c25c09db3c9d7c56091f96aa1175fda1a40->enter($__internal_2bef486946a93b387b25d47184176c25c09db3c9d7c56091f96aa1175fda1a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2bef486946a93b387b25d47184176c25c09db3c9d7c56091f96aa1175fda1a40->leave($__internal_2bef486946a93b387b25d47184176c25c09db3c9d7c56091f96aa1175fda1a40_prof);

        
        $__internal_5815488f85a01d6cfd0c4c675ce64791d5d6106bab7a6bc912d40aac89f2422e->leave($__internal_5815488f85a01d6cfd0c4c675ce64791d5d6106bab7a6bc912d40aac89f2422e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d92723f67de46046fbeba05c8958f62313db4af5d398ef8ced4a8f6666951b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d92723f67de46046fbeba05c8958f62313db4af5d398ef8ced4a8f6666951b4->enter($__internal_0d92723f67de46046fbeba05c8958f62313db4af5d398ef8ced4a8f6666951b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_242e3eb346e55dd111bcdf41a3d58fcd310f20c3bc0ab33f18a26cd54927edeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242e3eb346e55dd111bcdf41a3d58fcd310f20c3bc0ab33f18a26cd54927edeb->enter($__internal_242e3eb346e55dd111bcdf41a3d58fcd310f20c3bc0ab33f18a26cd54927edeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_242e3eb346e55dd111bcdf41a3d58fcd310f20c3bc0ab33f18a26cd54927edeb->leave($__internal_242e3eb346e55dd111bcdf41a3d58fcd310f20c3bc0ab33f18a26cd54927edeb_prof);

        
        $__internal_0d92723f67de46046fbeba05c8958f62313db4af5d398ef8ced4a8f6666951b4->leave($__internal_0d92723f67de46046fbeba05c8958f62313db4af5d398ef8ced4a8f6666951b4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f8b0f19f6b4abe4b970495b849c3d3a8e554ac923852adc31bcd42585911855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8b0f19f6b4abe4b970495b849c3d3a8e554ac923852adc31bcd42585911855->enter($__internal_6f8b0f19f6b4abe4b970495b849c3d3a8e554ac923852adc31bcd42585911855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_691863dcf7ce7be30d6a96b87935c4b69353fb62316cca5707bdb05a5414d90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691863dcf7ce7be30d6a96b87935c4b69353fb62316cca5707bdb05a5414d90c->enter($__internal_691863dcf7ce7be30d6a96b87935c4b69353fb62316cca5707bdb05a5414d90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_691863dcf7ce7be30d6a96b87935c4b69353fb62316cca5707bdb05a5414d90c->leave($__internal_691863dcf7ce7be30d6a96b87935c4b69353fb62316cca5707bdb05a5414d90c_prof);

        
        $__internal_6f8b0f19f6b4abe4b970495b849c3d3a8e554ac923852adc31bcd42585911855->leave($__internal_6f8b0f19f6b4abe4b970495b849c3d3a8e554ac923852adc31bcd42585911855_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

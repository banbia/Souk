<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_9c65b14be9cb0ac486be97c84241db9cbe4a4b96560ec361517d14bb9b9055ee extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/67/670a07760d99d910ac2eee8faa5a5e90d8a3ab668dd7f56d3f27346afc151a68.php
        $__internal_90ccdc85bfd323cd5fcb56e8ecdc44a8f42d1fecbf6fa7d4f55ec7921ec1c8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ccdc85bfd323cd5fcb56e8ecdc44a8f42d1fecbf6fa7d4f55ec7921ec1c8d3->enter($__internal_90ccdc85bfd323cd5fcb56e8ecdc44a8f42d1fecbf6fa7d4f55ec7921ec1c8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_3ea20a9a00c88681742ec3bf01a068ef2d5bb3c991052c76f6955ba66e997394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea20a9a00c88681742ec3bf01a068ef2d5bb3c991052c76f6955ba66e997394->enter($__internal_3ea20a9a00c88681742ec3bf01a068ef2d5bb3c991052c76f6955ba66e997394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_2c861e0c3b7f5d030ff128a7dfd914398c387ffe6d763f8c4d15093421a32751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c861e0c3b7f5d030ff128a7dfd914398c387ffe6d763f8c4d15093421a32751->enter($__internal_2c861e0c3b7f5d030ff128a7dfd914398c387ffe6d763f8c4d15093421a32751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_b8d536668c72c9b995ca30e15c5e17bc81a628f38103ef143c1ab77162533976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d536668c72c9b995ca30e15c5e17bc81a628f38103ef143c1ab77162533976->enter($__internal_b8d536668c72c9b995ca30e15c5e17bc81a628f38103ef143c1ab77162533976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 0e9102e1b53e7c378e8f3fee9dd32c05a0e797dd:var/cache/dev/twig/d6/d681f80f143131e9ee9d64a5b7758c4cd242ea0139b0fde089088afabeb64136.php

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter(($context["additional_classes"] ?? $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("block_attrs", $context)) ? (_twig_default_filter(($context["block_attrs"] ?? $this->getContext($context, "block_attrs")), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || ($context["link"] ?? $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter(($context["link"] ?? $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD:var/cache/dev/twig/67/670a07760d99d910ac2eee8faa5a5e90d8a3ab668dd7f56d3f27346afc151a68.php
        $__internal_90ccdc85bfd323cd5fcb56e8ecdc44a8f42d1fecbf6fa7d4f55ec7921ec1c8d3->leave($__internal_90ccdc85bfd323cd5fcb56e8ecdc44a8f42d1fecbf6fa7d4f55ec7921ec1c8d3_prof);

        
        $__internal_3ea20a9a00c88681742ec3bf01a068ef2d5bb3c991052c76f6955ba66e997394->leave($__internal_3ea20a9a00c88681742ec3bf01a068ef2d5bb3c991052c76f6955ba66e997394_prof);
=======
        $__internal_2c861e0c3b7f5d030ff128a7dfd914398c387ffe6d763f8c4d15093421a32751->leave($__internal_2c861e0c3b7f5d030ff128a7dfd914398c387ffe6d763f8c4d15093421a32751_prof);

        
        $__internal_b8d536668c72c9b995ca30e15c5e17bc81a628f38103ef143c1ab77162533976->leave($__internal_b8d536668c72c9b995ca30e15c5e17bc81a628f38103ef143c1ab77162533976_prof);
>>>>>>> 0e9102e1b53e7c378e8f3fee9dd32c05a0e797dd:var/cache/dev/twig/d6/d681f80f143131e9ee9d64a5b7758c4cd242ea0139b0fde089088afabeb64136.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\" {{ block_attrs|default('')|raw }}>
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_item.html.twig");
    }
}

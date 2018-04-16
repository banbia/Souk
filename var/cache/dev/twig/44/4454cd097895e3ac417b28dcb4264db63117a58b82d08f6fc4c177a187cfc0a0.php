<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_b65306e1634f6b33b470655348d909b18537e5ae2dfb1444601cf5c86966846a extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
        $__internal_85e0a21ba2b2de14ead1bb8aeb3e93749d2a1d12d959aead8a49aaadafeacf1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e0a21ba2b2de14ead1bb8aeb3e93749d2a1d12d959aead8a49aaadafeacf1a->enter($__internal_85e0a21ba2b2de14ead1bb8aeb3e93749d2a1d12d959aead8a49aaadafeacf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_5f9c3e64cd96fc9f30b43ba05d7b7bed9cb96fecf53e969ed4743bded977a171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9c3e64cd96fc9f30b43ba05d7b7bed9cb96fecf53e969ed4743bded977a171->enter($__internal_5f9c3e64cd96fc9f30b43ba05d7b7bed9cb96fecf53e969ed4743bded977a171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
        $__internal_5aecf4308378dc28354cf0e191df86a14c848450cb8c9a115f1ae5d8298ad0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aecf4308378dc28354cf0e191df86a14c848450cb8c9a115f1ae5d8298ad0ee->enter($__internal_5aecf4308378dc28354cf0e191df86a14c848450cb8c9a115f1ae5d8298ad0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_6225e75035f95c674cbf82eaee51bf327ad6e7f3469f9ced513de9823ab15327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6225e75035f95c674cbf82eaee51bf327ad6e7f3469f9ced513de9823ab15327->enter($__internal_6225e75035f95c674cbf82eaee51bf327ad6e7f3469f9ced513de9823ab15327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" accesskey=\"D\">
        ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
<<<<<<< HEAD:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
                $__internal_26a7d3f92cd55e1cc4a518e1298865fecd203efad170de6042280f12b46fa151 = array("collector" => $this->getAttribute(                // line 13
=======
                $__internal_d596bc54afd337d67b214e3bbba0d74587601f2f95614fd1e20875bd565e0a43 = array("collector" => $this->getAttribute(                // line 13
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
(isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(                // line 15
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
(isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>                 // line 18
(isset($context["csp_script_nonce"]) ? $context["csp_script_nonce"] : $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>                 // line 19
(isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce")));
<<<<<<< HEAD:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
                if (!is_array($__internal_26a7d3f92cd55e1cc4a518e1298865fecd203efad170de6042280f12b46fa151)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_26a7d3f92cd55e1cc4a518e1298865fecd203efad170de6042280f12b46fa151);
=======
                if (!is_array($__internal_d596bc54afd337d67b214e3bbba0d74587601f2f95614fd1e20875bd565e0a43)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_d596bc54afd337d67b214e3bbba0d74587601f2f95614fd1e20875bd565e0a43);
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
<<<<<<< HEAD:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
        $__internal_85e0a21ba2b2de14ead1bb8aeb3e93749d2a1d12d959aead8a49aaadafeacf1a->leave($__internal_85e0a21ba2b2de14ead1bb8aeb3e93749d2a1d12d959aead8a49aaadafeacf1a_prof);

        
        $__internal_5f9c3e64cd96fc9f30b43ba05d7b7bed9cb96fecf53e969ed4743bded977a171->leave($__internal_5f9c3e64cd96fc9f30b43ba05d7b7bed9cb96fecf53e969ed4743bded977a171_prof);
=======
        $__internal_5aecf4308378dc28354cf0e191df86a14c848450cb8c9a115f1ae5d8298ad0ee->leave($__internal_5aecf4308378dc28354cf0e191df86a14c848450cb8c9a115f1ae5d8298ad0ee_prof);

        
        $__internal_6225e75035f95c674cbf82eaee51bf327ad6e7f3469f9ced513de9823ab15327->leave($__internal_6225e75035f95c674cbf82eaee51bf327ad6e7f3469f9ced513de9823ab15327_prof);
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  47 => 9,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
<<<<<<< HEAD:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\Users\\ASUS PC\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar.html.twig");
=======
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar.html.twig");
>>>>>>> 569975356f977e993c9d01c74d1d22de51b5508e:var/cache/dev/twig/44/4454cd097895e3ac417b28dcb4264db63117a58b82d08f6fc4c177a187cfc0a0.php
    }
}

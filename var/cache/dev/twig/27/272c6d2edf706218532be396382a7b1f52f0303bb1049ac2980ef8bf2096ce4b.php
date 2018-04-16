<?php

/* FrontBundle:annonces:show.html.twig */
class __TwigTemplate_543471e1387dbc496d6632d2ec29394d0890d677439ca4e3859e97a24a3288d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:annonces:show.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eadf8366413f4f9fd1c08130534103d4eb4a9d04ba61b23ad94d51b505b294ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadf8366413f4f9fd1c08130534103d4eb4a9d04ba61b23ad94d51b505b294ac->enter($__internal_eadf8366413f4f9fd1c08130534103d4eb4a9d04ba61b23ad94d51b505b294ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $__internal_1d7354a057aef63d459842a394470f57b07495492ad244ec94d2c64062e8d87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7354a057aef63d459842a394470f57b07495492ad244ec94d2c64062e8d87d->enter($__internal_1d7354a057aef63d459842a394470f57b07495492ad244ec94d2c64062e8d87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eadf8366413f4f9fd1c08130534103d4eb4a9d04ba61b23ad94d51b505b294ac->leave($__internal_eadf8366413f4f9fd1c08130534103d4eb4a9d04ba61b23ad94d51b505b294ac_prof);

        
        $__internal_1d7354a057aef63d459842a394470f57b07495492ad244ec94d2c64062e8d87d->leave($__internal_1d7354a057aef63d459842a394470f57b07495492ad244ec94d2c64062e8d87d_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_d08e7e6644f68825e5b68a817e00b4a8230ac6f670383aa4c0b8cfa027917193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08e7e6644f68825e5b68a817e00b4a8230ac6f670383aa4c0b8cfa027917193->enter($__internal_d08e7e6644f68825e5b68a817e00b4a8230ac6f670383aa4c0b8cfa027917193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_8da72dcd4d6bfe39fbbfb04aab076fe82f0de8431d06366c95f7d3ddfb68ea25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da72dcd4d6bfe39fbbfb04aab076fe82f0de8431d06366c95f7d3ddfb68ea25->enter($__internal_8da72dcd4d6bfe39fbbfb04aab076fe82f0de8431d06366c95f7d3ddfb68ea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_8da72dcd4d6bfe39fbbfb04aab076fe82f0de8431d06366c95f7d3ddfb68ea25->leave($__internal_8da72dcd4d6bfe39fbbfb04aab076fe82f0de8431d06366c95f7d3ddfb68ea25_prof);

        
        $__internal_d08e7e6644f68825e5b68a817e00b4a8230ac6f670383aa4c0b8cfa027917193->leave($__internal_d08e7e6644f68825e5b68a817e00b4a8230ac6f670383aa4c0b8cfa027917193_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6968aa85a2e28806e6f663534dd93a213b373cbe18ed66801da7d38e1831a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6968aa85a2e28806e6f663534dd93a213b373cbe18ed66801da7d38e1831a1->enter($__internal_fe6968aa85a2e28806e6f663534dd93a213b373cbe18ed66801da7d38e1831a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e830e86f3c67a55bcaacef7819a00aee3e9d9833d0e6d8a087c3d95d10b56557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e830e86f3c67a55bcaacef7819a00aee3e9d9833d0e6d8a087c3d95d10b56557->enter($__internal_e830e86f3c67a55bcaacef7819a00aee3e9d9833d0e6d8a087c3d95d10b56557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1>Annonce</h1>

    <table>
        <tbody>

            <tr>
                <th>Titre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "disponible", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "dateCreation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

<div class=\"content\">
<!-- Nour's work -->
    <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#newCom\">

        <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
    </a>
</div>
    <!-- Modal -->
    <div id=\"newCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Nouvelle Commande </h4>
                </div>

                <div class=\"modal-body\">

                        <div class=\"col-md-12\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'label');
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'errors');
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'label');
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_e830e86f3c67a55bcaacef7819a00aee3e9d9833d0e6d8a087c3d95d10b56557->leave($__internal_e830e86f3c67a55bcaacef7819a00aee3e9d9833d0e6d8a087c3d95d10b56557_prof);

        
        $__internal_fe6968aa85a2e28806e6f663534dd93a213b373cbe18ed66801da7d38e1831a1->leave($__internal_fe6968aa85a2e28806e6f663534dd93a213b373cbe18ed66801da7d38e1831a1_prof);

    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
        $__internal_8c7d14e370f148b788218e6d0db493c2d33ca33f1b5ef04e563c1df00bdf3f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7d14e370f148b788218e6d0db493c2d33ca33f1b5ef04e563c1df00bdf3f8a->enter($__internal_8c7d14e370f148b788218e6d0db493c2d33ca33f1b5ef04e563c1df00bdf3f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_e267b30c75c8e4cf487497ab9b742753884c68e410835569927fecb39dd2f2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e267b30c75c8e4cf487497ab9b742753884c68e410835569927fecb39dd2f2cb->enter($__internal_e267b30c75c8e4cf487497ab9b742753884c68e410835569927fecb39dd2f2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 86
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$( function() {
            \$( \"#souk_backbundle_commandes_dateCom\" ).datepicker({
                altField: \"#souk_backbundle_commandes_dateCom\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>
";
        
        $__internal_e267b30c75c8e4cf487497ab9b742753884c68e410835569927fecb39dd2f2cb->leave($__internal_e267b30c75c8e4cf487497ab9b742753884c68e410835569927fecb39dd2f2cb_prof);

        
        $__internal_8c7d14e370f148b788218e6d0db493c2d33ca33f1b5ef04e563c1df00bdf3f8a->leave($__internal_8c7d14e370f148b788218e6d0db493c2d33ca33f1b5ef04e563c1df00bdf3f8a_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:annonces:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 86,  207 => 85,  193 => 81,  177 => 68,  173 => 67,  169 => 66,  163 => 63,  159 => 62,  155 => 61,  140 => 49,  120 => 34,  109 => 30,  102 => 26,  95 => 22,  88 => 18,  79 => 11,  70 => 10,  58 => 8,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{% block style %}

    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <link href=\"{{ asset('bundles/front/css/style_Nour.css') }}\" rel=\"stylesheet\"/>
{% endblock style %}
{% block body %}
    <h1>Annonce</h1>

    <table>
        <tbody>

            <tr>
                <th>Titre</th>
                <td>{{ annonce.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ annonce.description }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ annonce.prix }}</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>{% if annonce.disponible %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>{% if annonce.dateCreation %}{{ annonce.dateCreation|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

<div class=\"content\">
<!-- Nour's work -->
    <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#newCom\">

        <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
    </a>
</div>
    <!-- Modal -->
    <div id=\"newCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            {{ form_start(form) }}
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Nouvelle Commande </h4>
                </div>

                <div class=\"modal-body\">

                        <div class=\"col-md-12\">
                            <div class=\"form-group col-md-6\">
                                {{ form_label(form.dateCom) }}
                                {{ form_errors(form.dateCom) }}
                                {{ form_widget(form.dateCom, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_label(form.quantite) }}
                                {{ form_errors(form.quantite) }}
                                {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" ><i class=\"fa fa-check\"></i>  Valider  </button>

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
{% block js %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
        \$( function() {
            \$( \"#souk_backbundle_commandes_dateCom\" ).datepicker({
                altField: \"#souk_backbundle_commandes_dateCom\",
                altFormat: \"yy-mm-dd\"
            });
        } );
    </script>
{% endblock js %}", "FrontBundle:annonces:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/show.html.twig");
    }
}

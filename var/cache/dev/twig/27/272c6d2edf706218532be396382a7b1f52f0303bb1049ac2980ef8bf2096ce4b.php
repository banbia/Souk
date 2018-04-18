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
        $__internal_b5940e1442acd6de9312761aa697d569ce912d5440e3f66d5544b95cb99ce18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5940e1442acd6de9312761aa697d569ce912d5440e3f66d5544b95cb99ce18f->enter($__internal_b5940e1442acd6de9312761aa697d569ce912d5440e3f66d5544b95cb99ce18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $__internal_ae85f19de7b14dab775ddebe5a7a3fa0626c7df73840b576ce4f73d5c074d5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae85f19de7b14dab775ddebe5a7a3fa0626c7df73840b576ce4f73d5c074d5b5->enter($__internal_ae85f19de7b14dab775ddebe5a7a3fa0626c7df73840b576ce4f73d5c074d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5940e1442acd6de9312761aa697d569ce912d5440e3f66d5544b95cb99ce18f->leave($__internal_b5940e1442acd6de9312761aa697d569ce912d5440e3f66d5544b95cb99ce18f_prof);

        
        $__internal_ae85f19de7b14dab775ddebe5a7a3fa0626c7df73840b576ce4f73d5c074d5b5->leave($__internal_ae85f19de7b14dab775ddebe5a7a3fa0626c7df73840b576ce4f73d5c074d5b5_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_ef36537e8fd2baca39f78c42206c24a66a8be9b986710c09c97774b512fadcca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef36537e8fd2baca39f78c42206c24a66a8be9b986710c09c97774b512fadcca->enter($__internal_ef36537e8fd2baca39f78c42206c24a66a8be9b986710c09c97774b512fadcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_d94b0acb3d4de9388a4c8b71ec9745a776f573a3c1e23a526de948e0fd9ffbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94b0acb3d4de9388a4c8b71ec9745a776f573a3c1e23a526de948e0fd9ffbc3->enter($__internal_d94b0acb3d4de9388a4c8b71ec9745a776f573a3c1e23a526de948e0fd9ffbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_d94b0acb3d4de9388a4c8b71ec9745a776f573a3c1e23a526de948e0fd9ffbc3->leave($__internal_d94b0acb3d4de9388a4c8b71ec9745a776f573a3c1e23a526de948e0fd9ffbc3_prof);

        
        $__internal_ef36537e8fd2baca39f78c42206c24a66a8be9b986710c09c97774b512fadcca->leave($__internal_ef36537e8fd2baca39f78c42206c24a66a8be9b986710c09c97774b512fadcca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2a264d3f019e9c5bf9d489afa9000f5782c19a69d6de7367c386caa93f9367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2a264d3f019e9c5bf9d489afa9000f5782c19a69d6de7367c386caa93f9367->enter($__internal_1b2a264d3f019e9c5bf9d489afa9000f5782c19a69d6de7367c386caa93f9367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f55c00f1c5487bfb485980ca58a9399f72f4d980b2607100fa74d8a8475483eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55c00f1c5487bfb485980ca58a9399f72f4d980b2607100fa74d8a8475483eb->enter($__internal_f55c00f1c5487bfb485980ca58a9399f72f4d980b2607100fa74d8a8475483eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f55c00f1c5487bfb485980ca58a9399f72f4d980b2607100fa74d8a8475483eb->leave($__internal_f55c00f1c5487bfb485980ca58a9399f72f4d980b2607100fa74d8a8475483eb_prof);

        
        $__internal_1b2a264d3f019e9c5bf9d489afa9000f5782c19a69d6de7367c386caa93f9367->leave($__internal_1b2a264d3f019e9c5bf9d489afa9000f5782c19a69d6de7367c386caa93f9367_prof);

    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
        $__internal_f9df1d63982115ae71e024cd859a97190d9a1435f850fdfb84d6b809eec3fd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9df1d63982115ae71e024cd859a97190d9a1435f850fdfb84d6b809eec3fd0b->enter($__internal_f9df1d63982115ae71e024cd859a97190d9a1435f850fdfb84d6b809eec3fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_5cccf070127ac9e4d33dceefcd1fa995f51b18fb68173f955b07303a773f49fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cccf070127ac9e4d33dceefcd1fa995f51b18fb68173f955b07303a773f49fb->enter($__internal_5cccf070127ac9e4d33dceefcd1fa995f51b18fb68173f955b07303a773f49fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_5cccf070127ac9e4d33dceefcd1fa995f51b18fb68173f955b07303a773f49fb->leave($__internal_5cccf070127ac9e4d33dceefcd1fa995f51b18fb68173f955b07303a773f49fb_prof);

        
        $__internal_f9df1d63982115ae71e024cd859a97190d9a1435f850fdfb84d6b809eec3fd0b->leave($__internal_f9df1d63982115ae71e024cd859a97190d9a1435f850fdfb84d6b809eec3fd0b_prof);

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
{% endblock body %}
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

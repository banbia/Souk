<?php

/* FrontBundle:annonces:show.html.twig */
class __TwigTemplate_280f250e35200605d37d5d869c20a79d5fa7abe542663cbec5d38201f866cd6f extends Twig_Template
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
        $__internal_04bfb91094a3b356bedeb4bcfa845b3897ee825159d30a69584abb2a2e5ecfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bfb91094a3b356bedeb4bcfa845b3897ee825159d30a69584abb2a2e5ecfef->enter($__internal_04bfb91094a3b356bedeb4bcfa845b3897ee825159d30a69584abb2a2e5ecfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $__internal_8b4ba1eaefde9ead189b495820759afecb4ba5394698450d62d077fb26278367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4ba1eaefde9ead189b495820759afecb4ba5394698450d62d077fb26278367->enter($__internal_8b4ba1eaefde9ead189b495820759afecb4ba5394698450d62d077fb26278367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:annonces:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04bfb91094a3b356bedeb4bcfa845b3897ee825159d30a69584abb2a2e5ecfef->leave($__internal_04bfb91094a3b356bedeb4bcfa845b3897ee825159d30a69584abb2a2e5ecfef_prof);

        
        $__internal_8b4ba1eaefde9ead189b495820759afecb4ba5394698450d62d077fb26278367->leave($__internal_8b4ba1eaefde9ead189b495820759afecb4ba5394698450d62d077fb26278367_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_c3175e78daca87cebeed9845df96612deb3dfc8ad7851984a009870300debec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3175e78daca87cebeed9845df96612deb3dfc8ad7851984a009870300debec3->enter($__internal_c3175e78daca87cebeed9845df96612deb3dfc8ad7851984a009870300debec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_55f2fde79877466eaa474da750cb19134d87059d8212594d97e167b287cf199f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f2fde79877466eaa474da750cb19134d87059d8212594d97e167b287cf199f->enter($__internal_55f2fde79877466eaa474da750cb19134d87059d8212594d97e167b287cf199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_55f2fde79877466eaa474da750cb19134d87059d8212594d97e167b287cf199f->leave($__internal_55f2fde79877466eaa474da750cb19134d87059d8212594d97e167b287cf199f_prof);

        
        $__internal_c3175e78daca87cebeed9845df96612deb3dfc8ad7851984a009870300debec3->leave($__internal_c3175e78daca87cebeed9845df96612deb3dfc8ad7851984a009870300debec3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a47b7c995c76e26a492d37a1b63afbdfd1a6a88a983f74e637b6410f3f44a396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47b7c995c76e26a492d37a1b63afbdfd1a6a88a983f74e637b6410f3f44a396->enter($__internal_a47b7c995c76e26a492d37a1b63afbdfd1a6a88a983f74e637b6410f3f44a396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d24bc287e404e2a2b5ac8d8762c1d88a2cb9e871b07e72a58dd153e76e44186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d24bc287e404e2a2b5ac8d8762c1d88a2cb9e871b07e72a58dd153e76e44186->enter($__internal_3d24bc287e404e2a2b5ac8d8762c1d88a2cb9e871b07e72a58dd153e76e44186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

<!-- Nour's work -->
<div class=\"content\">
    ";
        // line 41
        if ((($context["com"] ?? $this->getContext($context, "com")) == 0)) {
            // line 42
            echo "    <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#newCom\">

        <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
    </a>
    ";
        } else {
            // line 47
            echo "        <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noCom\">

            <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
        </a>
    ";
        }
        // line 52
        echo "</div>
    <!-- Modal new com-->
    <div id=\"newCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            ";
        // line 56
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
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'label');
        echo "
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'errors');
        echo "
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'label');
        echo "
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "
                                ";
        // line 75
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
        // line 88
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <!-- Modal no com-->
    <div id=\"noCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Nouvelle Commande </h4>
                </div>

                <div class=\"modal-body\">
                    <p>Vus avez déjà une commande en attente pour cette annonce.</p>


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_3d24bc287e404e2a2b5ac8d8762c1d88a2cb9e871b07e72a58dd153e76e44186->leave($__internal_3d24bc287e404e2a2b5ac8d8762c1d88a2cb9e871b07e72a58dd153e76e44186_prof);

        
        $__internal_a47b7c995c76e26a492d37a1b63afbdfd1a6a88a983f74e637b6410f3f44a396->leave($__internal_a47b7c995c76e26a492d37a1b63afbdfd1a6a88a983f74e637b6410f3f44a396_prof);

    }

    // line 115
    public function block_js($context, array $blocks = array())
    {
        $__internal_b8446fefff92d36f68b0efbc2f921016150783afbf71834d978b8b5944f8a268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8446fefff92d36f68b0efbc2f921016150783afbf71834d978b8b5944f8a268->enter($__internal_b8446fefff92d36f68b0efbc2f921016150783afbf71834d978b8b5944f8a268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_6e69fb3af6f7ca17c8209a22392692c580b7c932ddd00b210c32db000bf97c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e69fb3af6f7ca17c8209a22392692c580b7c932ddd00b210c32db000bf97c5b->enter($__internal_6e69fb3af6f7ca17c8209a22392692c580b7c932ddd00b210c32db000bf97c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 116
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
        
        $__internal_6e69fb3af6f7ca17c8209a22392692c580b7c932ddd00b210c32db000bf97c5b->leave($__internal_6e69fb3af6f7ca17c8209a22392692c580b7c932ddd00b210c32db000bf97c5b_prof);

        
        $__internal_b8446fefff92d36f68b0efbc2f921016150783afbf71834d978b8b5944f8a268->leave($__internal_b8446fefff92d36f68b0efbc2f921016150783afbf71834d978b8b5944f8a268_prof);

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
        return array (  253 => 116,  244 => 115,  207 => 88,  191 => 75,  187 => 74,  183 => 73,  177 => 70,  173 => 69,  169 => 68,  154 => 56,  148 => 52,  141 => 47,  134 => 42,  132 => 41,  120 => 34,  109 => 30,  102 => 26,  95 => 22,  88 => 18,  79 => 11,  70 => 10,  58 => 8,  51 => 3,  42 => 2,  11 => 1,);
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

<!-- Nour's work -->
<div class=\"content\">
    {% if com==0 %}
    <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#newCom\">

        <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
    </a>
    {% else %}
        <a href=\"#\" class=\"btn left\" data-toggle=\"modal\" data-target=\"#noCom\">

            <span class=\"right title\"><span class=\"arrow-right\"></span><span class=\" fa fa-check\"></span>    Commander</span>
        </a>
    {% endif %}
</div>
    <!-- Modal new com-->
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
    <!-- Modal no com-->
    <div id=\"noCom\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Nouvelle Commande </h4>
                </div>

                <div class=\"modal-body\">
                    <p>Vus avez déjà une commande en attente pour cette annonce.</p>


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i>  Fermer</button>

                </div>

            </div>
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

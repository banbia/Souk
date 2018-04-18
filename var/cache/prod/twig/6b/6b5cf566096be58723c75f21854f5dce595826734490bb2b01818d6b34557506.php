<?php

/* FrontBundle:annonces:show.html.twig */
class __TwigTemplate_eca9cfa5c253bb8b7fa445ea197d5f528062d08182cc96f48b71701bc870debc extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>Annonce</h1>

    <table>
        <tbody>

            <tr>
                <th>Titre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? null), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? null), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? null), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["annonce"] ?? null), "disponible", array())) {
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
        if ($this->getAttribute(($context["annonce"] ?? null), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["annonce"] ?? null), "dateCreation", array()), "Y-m-d"), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateCom", array()), 'label');
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateCom", array()), 'errors');
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantite", array()), 'label');
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantite", array()), 'errors');
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
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
        return array (  174 => 86,  171 => 85,  163 => 81,  147 => 68,  143 => 67,  139 => 66,  133 => 63,  129 => 62,  125 => 61,  110 => 49,  90 => 34,  79 => 30,  72 => 26,  65 => 22,  58 => 18,  49 => 11,  46 => 10,  40 => 8,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:annonces:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/annonces/show.html.twig");
    }
}

<?php

/* FrontBundle:commandes:index.html.twig */
class __TwigTemplate_ec51157190c0e767df5ef9aa101520c868e1edb69a21a8fda137d516c405db5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:index.html.twig", 1);
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
        $__internal_107b2eadabeaa3503757c2fa5064f8165e98070225f85c438ecf8c1c6ecb9a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107b2eadabeaa3503757c2fa5064f8165e98070225f85c438ecf8c1c6ecb9a87->enter($__internal_107b2eadabeaa3503757c2fa5064f8165e98070225f85c438ecf8c1c6ecb9a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $__internal_31fff5bbe32918c9f4a38f86070a88cf64abb3324aa97e8bb3bd835e0ea8c0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fff5bbe32918c9f4a38f86070a88cf64abb3324aa97e8bb3bd835e0ea8c0a4->enter($__internal_31fff5bbe32918c9f4a38f86070a88cf64abb3324aa97e8bb3bd835e0ea8c0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:commandes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107b2eadabeaa3503757c2fa5064f8165e98070225f85c438ecf8c1c6ecb9a87->leave($__internal_107b2eadabeaa3503757c2fa5064f8165e98070225f85c438ecf8c1c6ecb9a87_prof);

        
        $__internal_31fff5bbe32918c9f4a38f86070a88cf64abb3324aa97e8bb3bd835e0ea8c0a4->leave($__internal_31fff5bbe32918c9f4a38f86070a88cf64abb3324aa97e8bb3bd835e0ea8c0a4_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_f9f02914448d67fe2b24b591d52db1faff11507574a148ef85cd47c65dd356fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f02914448d67fe2b24b591d52db1faff11507574a148ef85cd47c65dd356fe->enter($__internal_f9f02914448d67fe2b24b591d52db1faff11507574a148ef85cd47c65dd356fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_60c765bf4b51d0e1d49978ac83c6b88f7a415ed8883014b8957fde8304c88e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c765bf4b51d0e1d49978ac83c6b88f7a415ed8883014b8957fde8304c88e83->enter($__internal_60c765bf4b51d0e1d49978ac83c6b88f7a415ed8883014b8957fde8304c88e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style_Nour.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_60c765bf4b51d0e1d49978ac83c6b88f7a415ed8883014b8957fde8304c88e83->leave($__internal_60c765bf4b51d0e1d49978ac83c6b88f7a415ed8883014b8957fde8304c88e83_prof);

        
        $__internal_f9f02914448d67fe2b24b591d52db1faff11507574a148ef85cd47c65dd356fe->leave($__internal_f9f02914448d67fe2b24b591d52db1faff11507574a148ef85cd47c65dd356fe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcae653d241a76b9a6c5bfbcbdca0ed8895768f51bb42d70da721c305c0fa198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcae653d241a76b9a6c5bfbcbdca0ed8895768f51bb42d70da721c305c0fa198->enter($__internal_fcae653d241a76b9a6c5bfbcbdca0ed8895768f51bb42d70da721c305c0fa198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_055d4f118f5a952149d4dfd1ebc7460e82e2a36097ddea5797ee49a1ff8187f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055d4f118f5a952149d4dfd1ebc7460e82e2a36097ddea5797ee49a1ff8187f0->enter($__internal_055d4f118f5a952149d4dfd1ebc7460e82e2a36097ddea5797ee49a1ff8187f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"wrap\">
        <h1 align=\"center\">Mes demandes</h1>
        <ul class=\"tabs group\">
            <li><a class=\"active\" href=\"#one\">Tous</a></li>
            <li><a href=\"#two\">En attente</a></li>
            <li><a href=\"#three\">Confirmés</a></li>
        </ul>
        <div id=\"panels\">
            <p id=\"one\">
            <table>
                <thead>
                <tr>
                    <th>Date commande</th>
                    <th>Titre Annonce</th>
                    <th>Catégorie Annonce</th>
                    <th>Quantite</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 39
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 40
                echo "                                <ul>
                                    <li>
                                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_show", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                                    </li>
                                </ul>

                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 50
                echo "
                            ";
            }
            // line 52
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
            </p>
            <p id=\"two\">
            <table>
                <thead>
                <tr>
                    <th>Date commande</th>
                    <th>Titre Annonce</th>
                    <th>Catégorie Annonce</th>
                    <th>Quantite</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_attente"] ?? $this->getContext($context, "commandes_attente")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 72
            echo "                    <tr>
                        <td>";
            // line 73
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 79
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 80
                echo "                                <ul>
                                    <li>
                                        <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_show", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                                    </li>
                                </ul>

                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 90
                echo "
                            ";
            }
            // line 92
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                </tbody>
            </table>
            </p>
            <p id=\"three\">
            <table>
                <thead>
                <tr>
                    <th>Date commande</th>
                    <th>Titre Annonce</th>
                    <th>Catégorie Annonce</th>
                    <th>Quantite</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_confirme"] ?? $this->getContext($context, "commandes_confirme")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 112
            echo "                    <tr>
                        <td>";
            // line 113
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 119
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 120
                echo "                                <ul>
                                    <li>
                                        <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_show", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                                    </li>
                                </ul>

                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 130
                echo "
                            ";
            }
            // line 132
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </tbody>
            </table>
            </p>
        </div>
    </div>








";
        
        $__internal_055d4f118f5a952149d4dfd1ebc7460e82e2a36097ddea5797ee49a1ff8187f0->leave($__internal_055d4f118f5a952149d4dfd1ebc7460e82e2a36097ddea5797ee49a1ff8187f0_prof);

        
        $__internal_fcae653d241a76b9a6c5bfbcbdca0ed8895768f51bb42d70da721c305c0fa198->leave($__internal_fcae653d241a76b9a6c5bfbcbdca0ed8895768f51bb42d70da721c305c0fa198_prof);

    }

    // line 149
    public function block_js($context, array $blocks = array())
    {
        $__internal_8dd249a3c06df8348b39680d7d87b1fa0711822efb9be7f230d757bfd20c5d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd249a3c06df8348b39680d7d87b1fa0711822efb9be7f230d757bfd20c5d50->enter($__internal_8dd249a3c06df8348b39680d7d87b1fa0711822efb9be7f230d757bfd20c5d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_2c90264e4a491b1bef1778b0801b7b46948c4bcd03163d644327cd9e2b4b60ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c90264e4a491b1bef1778b0801b7b46948c4bcd03163d644327cd9e2b4b60ea->enter($__internal_2c90264e4a491b1bef1778b0801b7b46948c4bcd03163d644327cd9e2b4b60ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 150
        echo "    <link href=\"http://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">

    <script>
    (function(\$) {

        var tabs =  \$(\".tabs li a\");

        tabs.click(function() {
            var panels = this.hash.replace('/','');
            tabs.removeClass(\"active\");
            \$(this).addClass(\"active\");
            \$(\"#panels\").find('p').hide();
            \$(panels).fadeIn(200);
        });

    })(jQuery);
</script>
";
        
        $__internal_2c90264e4a491b1bef1778b0801b7b46948c4bcd03163d644327cd9e2b4b60ea->leave($__internal_2c90264e4a491b1bef1778b0801b7b46948c4bcd03163d644327cd9e2b4b60ea_prof);

        
        $__internal_8dd249a3c06df8348b39680d7d87b1fa0711822efb9be7f230d757bfd20c5d50->leave($__internal_8dd249a3c06df8348b39680d7d87b1fa0711822efb9be7f230d757bfd20c5d50_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 150,  346 => 149,  323 => 135,  315 => 132,  311 => 130,  303 => 125,  297 => 122,  293 => 120,  291 => 119,  286 => 117,  282 => 116,  278 => 115,  274 => 114,  268 => 113,  265 => 112,  261 => 111,  243 => 95,  235 => 92,  231 => 90,  223 => 85,  217 => 82,  213 => 80,  211 => 79,  206 => 77,  202 => 76,  198 => 75,  194 => 74,  188 => 73,  185 => 72,  181 => 71,  163 => 55,  155 => 52,  151 => 50,  143 => 45,  137 => 42,  133 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  108 => 33,  105 => 32,  101 => 31,  78 => 10,  69 => 9,  57 => 7,  51 => 3,  42 => 2,  11 => 1,);
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
    <div class=\"wrap\">
        <h1 align=\"center\">Mes demandes</h1>
        <ul class=\"tabs group\">
            <li><a class=\"active\" href=\"#one\">Tous</a></li>
            <li><a href=\"#two\">En attente</a></li>
            <li><a href=\"#three\">Confirmés</a></li>
        </ul>
        <div id=\"panels\">
            <p id=\"one\">
            <table>
                <thead>
                <tr>
                    <th>Date commande</th>
                    <th>Titre Annonce</th>
                    <th>Catégorie Annonce</th>
                    <th>Quantite</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for commande in commandes %}
                    <tr>
                        <td>{% if commande.dateCom %}{{ commande.dateCom|date('d-m-Y') }}{% endif %}</td>
                        <td>{{ commande.annonce.titre }}</td>
                        <td>{{ commande.annonce.categorie.designation }}</td>
                        <td>{{ commande.quantite }}</td>
                        <td>{{ commande.etat }}</td>
                        <td>
                            {% if is_granted('ROLE_CLIENT') %}
                                <ul>
                                    <li>
                                        <a href=\"{{ path('commandes_show', { 'id': commande.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('commandes_edit', { 'id': commande.id }) }}\">edit</a>
                                    </li>
                                </ul>

                            {% elseif is_granted('ROLE_COM') %}

                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            </p>
            <p id=\"two\">
            <table>
                <thead>
                <tr>
                    <th>Date commande</th>
                    <th>Titre Annonce</th>
                    <th>Catégorie Annonce</th>
                    <th>Quantite</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for commande in commandes_attente %}
                    <tr>
                        <td>{% if commande.dateCom %}{{ commande.dateCom|date('d-m-Y') }}{% endif %}</td>
                        <td>{{ commande.annonce.titre }}</td>
                        <td>{{ commande.annonce.categorie.designation }}</td>
                        <td>{{ commande.quantite }}</td>
                        <td>{{ commande.etat }}</td>
                        <td>
                            {% if is_granted('ROLE_CLIENT') %}
                                <ul>
                                    <li>
                                        <a href=\"{{ path('commandes_show', { 'id': commande.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('commandes_edit', { 'id': commande.id }) }}\">edit</a>
                                    </li>
                                </ul>

                            {% elseif is_granted('ROLE_COM') %}

                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            </p>
            <p id=\"three\">
            <table>
                <thead>
                <tr>
                    <th>Date commande</th>
                    <th>Titre Annonce</th>
                    <th>Catégorie Annonce</th>
                    <th>Quantite</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for commande in commandes_confirme %}
                    <tr>
                        <td>{% if commande.dateCom %}{{ commande.dateCom|date('d-m-Y') }}{% endif %}</td>
                        <td>{{ commande.annonce.titre }}</td>
                        <td>{{ commande.annonce.categorie.designation }}</td>
                        <td>{{ commande.quantite }}</td>
                        <td>{{ commande.etat }}</td>
                        <td>
                            {% if is_granted('ROLE_CLIENT') %}
                                <ul>
                                    <li>
                                        <a href=\"{{ path('commandes_show', { 'id': commande.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('commandes_edit', { 'id': commande.id }) }}\">edit</a>
                                    </li>
                                </ul>

                            {% elseif is_granted('ROLE_COM') %}

                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            </p>
        </div>
    </div>








{% endblock %}
{% block js %}
    <link href=\"http://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">

    <script>
    (function(\$) {

        var tabs =  \$(\".tabs li a\");

        tabs.click(function() {
            var panels = this.hash.replace('/','');
            tabs.removeClass(\"active\");
            \$(this).addClass(\"active\");
            \$(\"#panels\").find('p').hide();
            \$(panels).fadeIn(200);
        });

    })(jQuery);
</script>
{% endblock js %}", "FrontBundle:commandes:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/index.html.twig");
    }
}

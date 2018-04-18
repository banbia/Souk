<?php

/* FrontBundle:commandes:index.html.twig */
class __TwigTemplate_189ac63b4e457666362364147802e128d3278cab0f1946706bf236f35e9d0682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:commandes:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"wrap\">
        <h1 align=\"center\">Mes demandes</h1>
        <ul class=\"tabs group\">
            <li><a class=\"active\" href=\"#/one\">Tous</a></li>
            <li><a href=\"#/two\">En attente</a></li>
            <li><a href=\"#/three\">Confirmés</a></li>
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 25
            echo "                    <tr>
                        <td>";
            // line 26
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 32
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 33
                echo "                                <ul>
                                    <li>
                                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_show", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                                    </li>
                                </ul>

                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 43
                echo "
                            ";
            }
            // line 45
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_attente"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 65
            echo "                    <tr>
                        <td>";
            // line 66
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 72
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 73
                echo "                                <ul>
                                    <li>
                                        <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_show", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                                    </li>
                                </ul>

                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 83
                echo "
                            ";
            }
            // line 85
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes_confirme"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 105
            echo "                    <tr>
                        <td>";
            // line 106
            if ($this->getAttribute($context["commande"], "dateCom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCom", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "annonce", array()), "categorie", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 112
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CLIENT")) {
                // line 113
                echo "                                <ul>
                                    <li>
                                        <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_show", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commandes_edit", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                                    </li>
                                </ul>

                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COM")) {
                // line 123
                echo "
                            ";
            }
            // line 125
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                </tbody>
            </table>
            </p>
        </div>
    </div>








";
    }

    // line 142
    public function block_js($context, array $blocks = array())
    {
        // line 143
        echo "<script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script><script>
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
        return array (  297 => 143,  294 => 142,  277 => 128,  269 => 125,  265 => 123,  257 => 118,  251 => 115,  247 => 113,  245 => 112,  240 => 110,  236 => 109,  232 => 108,  228 => 107,  222 => 106,  219 => 105,  215 => 104,  197 => 88,  189 => 85,  185 => 83,  177 => 78,  171 => 75,  167 => 73,  165 => 72,  160 => 70,  156 => 69,  152 => 68,  148 => 67,  142 => 66,  139 => 65,  135 => 64,  117 => 48,  109 => 45,  105 => 43,  97 => 38,  91 => 35,  87 => 33,  85 => 32,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  62 => 26,  59 => 25,  55 => 24,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:commandes:index.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/commandes/index.html.twig");
    }
}

<?php

/* form_table_layout.html.twig */
class __TwigTemplate_bf30663a6d6e6e811e986863caea312beb509ae3cf3908279c7923e628762741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4ef2c9569ff9ae404dad84cd3e5ba7cfea9188db670936734793b89c47dedf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ef2c9569ff9ae404dad84cd3e5ba7cfea9188db670936734793b89c47dedf8->enter($__internal_f4ef2c9569ff9ae404dad84cd3e5ba7cfea9188db670936734793b89c47dedf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_52c1702db6630149d6bf696670c7b169e366247c70c72ee6acda58bb8a804133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c1702db6630149d6bf696670c7b169e366247c70c72ee6acda58bb8a804133->enter($__internal_52c1702db6630149d6bf696670c7b169e366247c70c72ee6acda58bb8a804133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_f4ef2c9569ff9ae404dad84cd3e5ba7cfea9188db670936734793b89c47dedf8->leave($__internal_f4ef2c9569ff9ae404dad84cd3e5ba7cfea9188db670936734793b89c47dedf8_prof);

        
        $__internal_52c1702db6630149d6bf696670c7b169e366247c70c72ee6acda58bb8a804133->leave($__internal_52c1702db6630149d6bf696670c7b169e366247c70c72ee6acda58bb8a804133_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f0cb4d075f9f59055cd8075f1f9cce295046a1596ad95ffab6020e01e98b8f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cb4d075f9f59055cd8075f1f9cce295046a1596ad95ffab6020e01e98b8f5e->enter($__internal_f0cb4d075f9f59055cd8075f1f9cce295046a1596ad95ffab6020e01e98b8f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ab00bea6007c543c21f901a9e40be7ade289dd1a3e14d28862ff86d2e7dca5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab00bea6007c543c21f901a9e40be7ade289dd1a3e14d28862ff86d2e7dca5c1->enter($__internal_ab00bea6007c543c21f901a9e40be7ade289dd1a3e14d28862ff86d2e7dca5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_ab00bea6007c543c21f901a9e40be7ade289dd1a3e14d28862ff86d2e7dca5c1->leave($__internal_ab00bea6007c543c21f901a9e40be7ade289dd1a3e14d28862ff86d2e7dca5c1_prof);

        
        $__internal_f0cb4d075f9f59055cd8075f1f9cce295046a1596ad95ffab6020e01e98b8f5e->leave($__internal_f0cb4d075f9f59055cd8075f1f9cce295046a1596ad95ffab6020e01e98b8f5e_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9aa98d4703774e9a1895073db69230bdf14c8913ace24bd00f3502c007ed1fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa98d4703774e9a1895073db69230bdf14c8913ace24bd00f3502c007ed1fdf->enter($__internal_9aa98d4703774e9a1895073db69230bdf14c8913ace24bd00f3502c007ed1fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d57896fa887dfd36dd4b4a2ddd806b4128b7a59f77e4324ec87c5b5a8d1bb9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57896fa887dfd36dd4b4a2ddd806b4128b7a59f77e4324ec87c5b5a8d1bb9c0->enter($__internal_d57896fa887dfd36dd4b4a2ddd806b4128b7a59f77e4324ec87c5b5a8d1bb9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_d57896fa887dfd36dd4b4a2ddd806b4128b7a59f77e4324ec87c5b5a8d1bb9c0->leave($__internal_d57896fa887dfd36dd4b4a2ddd806b4128b7a59f77e4324ec87c5b5a8d1bb9c0_prof);

        
        $__internal_9aa98d4703774e9a1895073db69230bdf14c8913ace24bd00f3502c007ed1fdf->leave($__internal_9aa98d4703774e9a1895073db69230bdf14c8913ace24bd00f3502c007ed1fdf_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_2465b6bec48930e0cb526ce2958cf4d2036a534a33defc5df889c71b00e1c2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2465b6bec48930e0cb526ce2958cf4d2036a534a33defc5df889c71b00e1c2c4->enter($__internal_2465b6bec48930e0cb526ce2958cf4d2036a534a33defc5df889c71b00e1c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_d1553c598e573a1d81e356a950352ca5858d74de42052d33439a6f7f963af801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1553c598e573a1d81e356a950352ca5858d74de42052d33439a6f7f963af801->enter($__internal_d1553c598e573a1d81e356a950352ca5858d74de42052d33439a6f7f963af801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_d1553c598e573a1d81e356a950352ca5858d74de42052d33439a6f7f963af801->leave($__internal_d1553c598e573a1d81e356a950352ca5858d74de42052d33439a6f7f963af801_prof);

        
        $__internal_2465b6bec48930e0cb526ce2958cf4d2036a534a33defc5df889c71b00e1c2c4->leave($__internal_2465b6bec48930e0cb526ce2958cf4d2036a534a33defc5df889c71b00e1c2c4_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e5fefce968450e40fb98e40cc47bd24ceaeb898296abe995c7ac80a26fa354aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fefce968450e40fb98e40cc47bd24ceaeb898296abe995c7ac80a26fa354aa->enter($__internal_e5fefce968450e40fb98e40cc47bd24ceaeb898296abe995c7ac80a26fa354aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7ce4db8bda0e997464d81de78f2b3ffedc3057c2b386271bbe9665ef7b3e0c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce4db8bda0e997464d81de78f2b3ffedc3057c2b386271bbe9665ef7b3e0c69->enter($__internal_7ce4db8bda0e997464d81de78f2b3ffedc3057c2b386271bbe9665ef7b3e0c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_7ce4db8bda0e997464d81de78f2b3ffedc3057c2b386271bbe9665ef7b3e0c69->leave($__internal_7ce4db8bda0e997464d81de78f2b3ffedc3057c2b386271bbe9665ef7b3e0c69_prof);

        
        $__internal_e5fefce968450e40fb98e40cc47bd24ceaeb898296abe995c7ac80a26fa354aa->leave($__internal_e5fefce968450e40fb98e40cc47bd24ceaeb898296abe995c7ac80a26fa354aa_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}

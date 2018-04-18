<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_cf0a83e6251cdd0cc63cf1cd94903b4fc5c5dbca6676da10c63684d1d73fea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_795ac1097d936fd15b945b5a5d2cd2a9718777c30ec3abe69b1b21197fd62543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795ac1097d936fd15b945b5a5d2cd2a9718777c30ec3abe69b1b21197fd62543->enter($__internal_795ac1097d936fd15b945b5a5d2cd2a9718777c30ec3abe69b1b21197fd62543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_549607f4d69f49bbe2cfc8f746fc28d60968c141f1f4890858816a1292d729ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549607f4d69f49bbe2cfc8f746fc28d60968c141f1f4890858816a1292d729ae->enter($__internal_549607f4d69f49bbe2cfc8f746fc28d60968c141f1f4890858816a1292d729ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795ac1097d936fd15b945b5a5d2cd2a9718777c30ec3abe69b1b21197fd62543->leave($__internal_795ac1097d936fd15b945b5a5d2cd2a9718777c30ec3abe69b1b21197fd62543_prof);

        
        $__internal_549607f4d69f49bbe2cfc8f746fc28d60968c141f1f4890858816a1292d729ae->leave($__internal_549607f4d69f49bbe2cfc8f746fc28d60968c141f1f4890858816a1292d729ae_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_31ab0071c5fd9d549241252551e1f69cca9663ca204ac9fb0596dde2ff6127e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ab0071c5fd9d549241252551e1f69cca9663ca204ac9fb0596dde2ff6127e5->enter($__internal_31ab0071c5fd9d549241252551e1f69cca9663ca204ac9fb0596dde2ff6127e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_cbc6441e1a70b8c6e5174f2dabc446d1b2c2a714dc7fdea5b87424defc8e8c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc6441e1a70b8c6e5174f2dabc446d1b2c2a714dc7fdea5b87424defc8e8c69->enter($__internal_cbc6441e1a70b8c6e5174f2dabc446d1b2c2a714dc7fdea5b87424defc8e8c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cbc6441e1a70b8c6e5174f2dabc446d1b2c2a714dc7fdea5b87424defc8e8c69->leave($__internal_cbc6441e1a70b8c6e5174f2dabc446d1b2c2a714dc7fdea5b87424defc8e8c69_prof);

        
        $__internal_31ab0071c5fd9d549241252551e1f69cca9663ca204ac9fb0596dde2ff6127e5->leave($__internal_31ab0071c5fd9d549241252551e1f69cca9663ca204ac9fb0596dde2ff6127e5_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_853d4fb7fe1b1194f9c1ef7a472944f4b31b53fd5c9899b256c1675aaf907c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853d4fb7fe1b1194f9c1ef7a472944f4b31b53fd5c9899b256c1675aaf907c4e->enter($__internal_853d4fb7fe1b1194f9c1ef7a472944f4b31b53fd5c9899b256c1675aaf907c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_206d999c3fc4907b71d1be70b924eaa931928c80a225a09d00df46d4667784da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206d999c3fc4907b71d1be70b924eaa931928c80a225a09d00df46d4667784da->enter($__internal_206d999c3fc4907b71d1be70b924eaa931928c80a225a09d00df46d4667784da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_206d999c3fc4907b71d1be70b924eaa931928c80a225a09d00df46d4667784da->leave($__internal_206d999c3fc4907b71d1be70b924eaa931928c80a225a09d00df46d4667784da_prof);

        
        $__internal_853d4fb7fe1b1194f9c1ef7a472944f4b31b53fd5c9899b256c1675aaf907c4e->leave($__internal_853d4fb7fe1b1194f9c1ef7a472944f4b31b53fd5c9899b256c1675aaf907c4e_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_481361807bfbe266fcfa00bcb135b23b79206433d1dbe8c756c40713c3fdd5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481361807bfbe266fcfa00bcb135b23b79206433d1dbe8c756c40713c3fdd5d5->enter($__internal_481361807bfbe266fcfa00bcb135b23b79206433d1dbe8c756c40713c3fdd5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_45a3df4bcd90028d34645c577c68a6bcbb29aef89fb0d2e30d18eeff17f3a49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a3df4bcd90028d34645c577c68a6bcbb29aef89fb0d2e30d18eeff17f3a49c->enter($__internal_45a3df4bcd90028d34645c577c68a6bcbb29aef89fb0d2e30d18eeff17f3a49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_45a3df4bcd90028d34645c577c68a6bcbb29aef89fb0d2e30d18eeff17f3a49c->leave($__internal_45a3df4bcd90028d34645c577c68a6bcbb29aef89fb0d2e30d18eeff17f3a49c_prof);

        
        $__internal_481361807bfbe266fcfa00bcb135b23b79206433d1dbe8c756c40713c3fdd5d5->leave($__internal_481361807bfbe266fcfa00bcb135b23b79206433d1dbe8c756c40713c3fdd5d5_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_851289fec823beb36e6c4ba6015f3a66340b79cebf34fe3134fb7d5d2ec36d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851289fec823beb36e6c4ba6015f3a66340b79cebf34fe3134fb7d5d2ec36d70->enter($__internal_851289fec823beb36e6c4ba6015f3a66340b79cebf34fe3134fb7d5d2ec36d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_dbf1040828a2536dd2afacc14762fcf32b6c39efee91b22bcee63d390bccba6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf1040828a2536dd2afacc14762fcf32b6c39efee91b22bcee63d390bccba6a->enter($__internal_dbf1040828a2536dd2afacc14762fcf32b6c39efee91b22bcee63d390bccba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_dbf1040828a2536dd2afacc14762fcf32b6c39efee91b22bcee63d390bccba6a->leave($__internal_dbf1040828a2536dd2afacc14762fcf32b6c39efee91b22bcee63d390bccba6a_prof);

        
        $__internal_851289fec823beb36e6c4ba6015f3a66340b79cebf34fe3134fb7d5d2ec36d70->leave($__internal_851289fec823beb36e6c4ba6015f3a66340b79cebf34fe3134fb7d5d2ec36d70_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_90ddcf419edced4f952b1e42794c3622efa59fce78825854e4480a1ebcfbfa83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ddcf419edced4f952b1e42794c3622efa59fce78825854e4480a1ebcfbfa83->enter($__internal_90ddcf419edced4f952b1e42794c3622efa59fce78825854e4480a1ebcfbfa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_57047244fda20c4fed139602e44d6368cda7d6ed89729c7634efdcc51bc33bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57047244fda20c4fed139602e44d6368cda7d6ed89729c7634efdcc51bc33bcc->enter($__internal_57047244fda20c4fed139602e44d6368cda7d6ed89729c7634efdcc51bc33bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_57047244fda20c4fed139602e44d6368cda7d6ed89729c7634efdcc51bc33bcc->leave($__internal_57047244fda20c4fed139602e44d6368cda7d6ed89729c7634efdcc51bc33bcc_prof);

        
        $__internal_90ddcf419edced4f952b1e42794c3622efa59fce78825854e4480a1ebcfbfa83->leave($__internal_90ddcf419edced4f952b1e42794c3622efa59fce78825854e4480a1ebcfbfa83_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_20c14b5d9031f3922c286355d378039f6981931659cae4b864b246b0f5031597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c14b5d9031f3922c286355d378039f6981931659cae4b864b246b0f5031597->enter($__internal_20c14b5d9031f3922c286355d378039f6981931659cae4b864b246b0f5031597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_aca65c6cfb67a3151aaa379e5d7c40df7b7d8d76b3445d5b2ba4d8c08b3400e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca65c6cfb67a3151aaa379e5d7c40df7b7d8d76b3445d5b2ba4d8c08b3400e6->enter($__internal_aca65c6cfb67a3151aaa379e5d7c40df7b7d8d76b3445d5b2ba4d8c08b3400e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_aca65c6cfb67a3151aaa379e5d7c40df7b7d8d76b3445d5b2ba4d8c08b3400e6->leave($__internal_aca65c6cfb67a3151aaa379e5d7c40df7b7d8d76b3445d5b2ba4d8c08b3400e6_prof);

        
        $__internal_20c14b5d9031f3922c286355d378039f6981931659cae4b864b246b0f5031597->leave($__internal_20c14b5d9031f3922c286355d378039f6981931659cae4b864b246b0f5031597_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fd426298efbdbcff708b98f770705c24642219c247a6b19cb3a062cffdae0652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd426298efbdbcff708b98f770705c24642219c247a6b19cb3a062cffdae0652->enter($__internal_fd426298efbdbcff708b98f770705c24642219c247a6b19cb3a062cffdae0652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0c06f350db8908d042522f7812e297ffd4a5fdf42b420bf7d022fa4bb779a998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c06f350db8908d042522f7812e297ffd4a5fdf42b420bf7d022fa4bb779a998->enter($__internal_0c06f350db8908d042522f7812e297ffd4a5fdf42b420bf7d022fa4bb779a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_0c06f350db8908d042522f7812e297ffd4a5fdf42b420bf7d022fa4bb779a998->leave($__internal_0c06f350db8908d042522f7812e297ffd4a5fdf42b420bf7d022fa4bb779a998_prof);

        
        $__internal_fd426298efbdbcff708b98f770705c24642219c247a6b19cb3a062cffdae0652->leave($__internal_fd426298efbdbcff708b98f770705c24642219c247a6b19cb3a062cffdae0652_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9fdfb5cacdccf9c7471a8798cbecd7141d0b072f50194ed7bfe74ccd67fcea9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdfb5cacdccf9c7471a8798cbecd7141d0b072f50194ed7bfe74ccd67fcea9a->enter($__internal_9fdfb5cacdccf9c7471a8798cbecd7141d0b072f50194ed7bfe74ccd67fcea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_aaf096346b1c0f05fc1c209988ad739cb532049c39be03eef34b198ba3ae5fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf096346b1c0f05fc1c209988ad739cb532049c39be03eef34b198ba3ae5fde->enter($__internal_aaf096346b1c0f05fc1c209988ad739cb532049c39be03eef34b198ba3ae5fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_aaf096346b1c0f05fc1c209988ad739cb532049c39be03eef34b198ba3ae5fde->leave($__internal_aaf096346b1c0f05fc1c209988ad739cb532049c39be03eef34b198ba3ae5fde_prof);

        
        $__internal_9fdfb5cacdccf9c7471a8798cbecd7141d0b072f50194ed7bfe74ccd67fcea9a->leave($__internal_9fdfb5cacdccf9c7471a8798cbecd7141d0b072f50194ed7bfe74ccd67fcea9a_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bb3f74e41c21c5a1f979de1200c399b3a13fc0adee14aefe369dc57365035c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3f74e41c21c5a1f979de1200c399b3a13fc0adee14aefe369dc57365035c12->enter($__internal_bb3f74e41c21c5a1f979de1200c399b3a13fc0adee14aefe369dc57365035c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8a9aa1aca907e6b8b550ea00f950d234548a35760fdf2cc337999195157eab38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9aa1aca907e6b8b550ea00f950d234548a35760fdf2cc337999195157eab38->enter($__internal_8a9aa1aca907e6b8b550ea00f950d234548a35760fdf2cc337999195157eab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_8a9aa1aca907e6b8b550ea00f950d234548a35760fdf2cc337999195157eab38->leave($__internal_8a9aa1aca907e6b8b550ea00f950d234548a35760fdf2cc337999195157eab38_prof);

        
        $__internal_bb3f74e41c21c5a1f979de1200c399b3a13fc0adee14aefe369dc57365035c12->leave($__internal_bb3f74e41c21c5a1f979de1200c399b3a13fc0adee14aefe369dc57365035c12_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4ac7bbec6d20468082686db614d97ed607792740089ccf6c2539b05ac790242b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac7bbec6d20468082686db614d97ed607792740089ccf6c2539b05ac790242b->enter($__internal_4ac7bbec6d20468082686db614d97ed607792740089ccf6c2539b05ac790242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ce9bccd07b53c735b280ad143824a24649920d26bd066a95d837177e92685b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9bccd07b53c735b280ad143824a24649920d26bd066a95d837177e92685b47->enter($__internal_ce9bccd07b53c735b280ad143824a24649920d26bd066a95d837177e92685b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_ce9bccd07b53c735b280ad143824a24649920d26bd066a95d837177e92685b47->leave($__internal_ce9bccd07b53c735b280ad143824a24649920d26bd066a95d837177e92685b47_prof);

        
        $__internal_4ac7bbec6d20468082686db614d97ed607792740089ccf6c2539b05ac790242b->leave($__internal_4ac7bbec6d20468082686db614d97ed607792740089ccf6c2539b05ac790242b_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1e4f0fa9c58aa4cb6ee75b20235c5b368e1f1dac1f5341c6381797ced281c60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4f0fa9c58aa4cb6ee75b20235c5b368e1f1dac1f5341c6381797ced281c60d->enter($__internal_1e4f0fa9c58aa4cb6ee75b20235c5b368e1f1dac1f5341c6381797ced281c60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a1339d20122fa1e49dc15b374708022e5469f044b669b0e31b2b0679286c1a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1339d20122fa1e49dc15b374708022e5469f044b669b0e31b2b0679286c1a18->enter($__internal_a1339d20122fa1e49dc15b374708022e5469f044b669b0e31b2b0679286c1a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_a1339d20122fa1e49dc15b374708022e5469f044b669b0e31b2b0679286c1a18->leave($__internal_a1339d20122fa1e49dc15b374708022e5469f044b669b0e31b2b0679286c1a18_prof);

        
        $__internal_1e4f0fa9c58aa4cb6ee75b20235c5b368e1f1dac1f5341c6381797ced281c60d->leave($__internal_1e4f0fa9c58aa4cb6ee75b20235c5b368e1f1dac1f5341c6381797ced281c60d_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fcf0d8202011fd42bc643bd18de7c696a84d74c96d2dcb0c0b0355c70275e12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf0d8202011fd42bc643bd18de7c696a84d74c96d2dcb0c0b0355c70275e12b->enter($__internal_fcf0d8202011fd42bc643bd18de7c696a84d74c96d2dcb0c0b0355c70275e12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6ab0216e34bd7fea79dba0caa30ea4a4f53a52b018f7f5354f0f074b432bd7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab0216e34bd7fea79dba0caa30ea4a4f53a52b018f7f5354f0f074b432bd7f0->enter($__internal_6ab0216e34bd7fea79dba0caa30ea4a4f53a52b018f7f5354f0f074b432bd7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_6ab0216e34bd7fea79dba0caa30ea4a4f53a52b018f7f5354f0f074b432bd7f0->leave($__internal_6ab0216e34bd7fea79dba0caa30ea4a4f53a52b018f7f5354f0f074b432bd7f0_prof);

        
        $__internal_fcf0d8202011fd42bc643bd18de7c696a84d74c96d2dcb0c0b0355c70275e12b->leave($__internal_fcf0d8202011fd42bc643bd18de7c696a84d74c96d2dcb0c0b0355c70275e12b_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b9c8f3ed80b96d3d220ed90c8a1076ea5cd86f5390eba6eebc0a1c018dbc5e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c8f3ed80b96d3d220ed90c8a1076ea5cd86f5390eba6eebc0a1c018dbc5e46->enter($__internal_b9c8f3ed80b96d3d220ed90c8a1076ea5cd86f5390eba6eebc0a1c018dbc5e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a33b590af0e4e2b2721de239accaf6b47b62179845445f433512cd74a0fdf80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33b590af0e4e2b2721de239accaf6b47b62179845445f433512cd74a0fdf80e->enter($__internal_a33b590af0e4e2b2721de239accaf6b47b62179845445f433512cd74a0fdf80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a33b590af0e4e2b2721de239accaf6b47b62179845445f433512cd74a0fdf80e->leave($__internal_a33b590af0e4e2b2721de239accaf6b47b62179845445f433512cd74a0fdf80e_prof);

        
        $__internal_b9c8f3ed80b96d3d220ed90c8a1076ea5cd86f5390eba6eebc0a1c018dbc5e46->leave($__internal_b9c8f3ed80b96d3d220ed90c8a1076ea5cd86f5390eba6eebc0a1c018dbc5e46_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3b9816933ac85496baa008b75a18476330739a8e7a4cde3ce02bc5f0f770af6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9816933ac85496baa008b75a18476330739a8e7a4cde3ce02bc5f0f770af6f->enter($__internal_3b9816933ac85496baa008b75a18476330739a8e7a4cde3ce02bc5f0f770af6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9527799c6c2c70c4fc720b49f9ebf2717bdf05ffbbb1171678a641091c1c35ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9527799c6c2c70c4fc720b49f9ebf2717bdf05ffbbb1171678a641091c1c35ec->enter($__internal_9527799c6c2c70c4fc720b49f9ebf2717bdf05ffbbb1171678a641091c1c35ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9527799c6c2c70c4fc720b49f9ebf2717bdf05ffbbb1171678a641091c1c35ec->leave($__internal_9527799c6c2c70c4fc720b49f9ebf2717bdf05ffbbb1171678a641091c1c35ec_prof);

        
        $__internal_3b9816933ac85496baa008b75a18476330739a8e7a4cde3ce02bc5f0f770af6f->leave($__internal_3b9816933ac85496baa008b75a18476330739a8e7a4cde3ce02bc5f0f770af6f_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_781bf53f2d875c69d07490e2d7b30a0b3a61d2097ccf7d6910632f4765e45e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781bf53f2d875c69d07490e2d7b30a0b3a61d2097ccf7d6910632f4765e45e05->enter($__internal_781bf53f2d875c69d07490e2d7b30a0b3a61d2097ccf7d6910632f4765e45e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_1efde955d75789e607280d3179ee3a62be9433c451ba1616f122938e16165270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efde955d75789e607280d3179ee3a62be9433c451ba1616f122938e16165270->enter($__internal_1efde955d75789e607280d3179ee3a62be9433c451ba1616f122938e16165270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1efde955d75789e607280d3179ee3a62be9433c451ba1616f122938e16165270->leave($__internal_1efde955d75789e607280d3179ee3a62be9433c451ba1616f122938e16165270_prof);

        
        $__internal_781bf53f2d875c69d07490e2d7b30a0b3a61d2097ccf7d6910632f4765e45e05->leave($__internal_781bf53f2d875c69d07490e2d7b30a0b3a61d2097ccf7d6910632f4765e45e05_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4def496f4d2f40ebe9ad51ebb4e61e5fa30d16118edfd070c1b6d0375688560b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4def496f4d2f40ebe9ad51ebb4e61e5fa30d16118edfd070c1b6d0375688560b->enter($__internal_4def496f4d2f40ebe9ad51ebb4e61e5fa30d16118edfd070c1b6d0375688560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c24a520bb407549e0488dec3ae9e39af1cce6f524b5f4332ac9be429e8f4f193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24a520bb407549e0488dec3ae9e39af1cce6f524b5f4332ac9be429e8f4f193->enter($__internal_c24a520bb407549e0488dec3ae9e39af1cce6f524b5f4332ac9be429e8f4f193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c24a520bb407549e0488dec3ae9e39af1cce6f524b5f4332ac9be429e8f4f193->leave($__internal_c24a520bb407549e0488dec3ae9e39af1cce6f524b5f4332ac9be429e8f4f193_prof);

        
        $__internal_4def496f4d2f40ebe9ad51ebb4e61e5fa30d16118edfd070c1b6d0375688560b->leave($__internal_4def496f4d2f40ebe9ad51ebb4e61e5fa30d16118edfd070c1b6d0375688560b_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_46ac4244ba29d84c9e14ccb16bfb2e1c1af2e4d876d08b356449820eea884ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ac4244ba29d84c9e14ccb16bfb2e1c1af2e4d876d08b356449820eea884ca9->enter($__internal_46ac4244ba29d84c9e14ccb16bfb2e1c1af2e4d876d08b356449820eea884ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ada6f00c96668744bb9792e68a7f28dcc46e5496e2c595bb6e86ce94533b8f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada6f00c96668744bb9792e68a7f28dcc46e5496e2c595bb6e86ce94533b8f96->enter($__internal_ada6f00c96668744bb9792e68a7f28dcc46e5496e2c595bb6e86ce94533b8f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_ada6f00c96668744bb9792e68a7f28dcc46e5496e2c595bb6e86ce94533b8f96->leave($__internal_ada6f00c96668744bb9792e68a7f28dcc46e5496e2c595bb6e86ce94533b8f96_prof);

        
        $__internal_46ac4244ba29d84c9e14ccb16bfb2e1c1af2e4d876d08b356449820eea884ca9->leave($__internal_46ac4244ba29d84c9e14ccb16bfb2e1c1af2e4d876d08b356449820eea884ca9_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e42aa7936e13a5de074897d3cf38be8dae1825d1ab535ba7e2c38f47c5e2e771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42aa7936e13a5de074897d3cf38be8dae1825d1ab535ba7e2c38f47c5e2e771->enter($__internal_e42aa7936e13a5de074897d3cf38be8dae1825d1ab535ba7e2c38f47c5e2e771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0c7b14701154562fe1f15454fc45799958b22f55fb436811f690da18b6e36348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7b14701154562fe1f15454fc45799958b22f55fb436811f690da18b6e36348->enter($__internal_0c7b14701154562fe1f15454fc45799958b22f55fb436811f690da18b6e36348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0c7b14701154562fe1f15454fc45799958b22f55fb436811f690da18b6e36348->leave($__internal_0c7b14701154562fe1f15454fc45799958b22f55fb436811f690da18b6e36348_prof);

        
        $__internal_e42aa7936e13a5de074897d3cf38be8dae1825d1ab535ba7e2c38f47c5e2e771->leave($__internal_e42aa7936e13a5de074897d3cf38be8dae1825d1ab535ba7e2c38f47c5e2e771_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_48a9ab691dd87c75f1904c61e6acf191f70e2f2d8166727c162036b783b7ab0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a9ab691dd87c75f1904c61e6acf191f70e2f2d8166727c162036b783b7ab0c->enter($__internal_48a9ab691dd87c75f1904c61e6acf191f70e2f2d8166727c162036b783b7ab0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4da8654b918a88be3dcedf225ac4c227e74f13e23a932aa0b4103157907c9fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da8654b918a88be3dcedf225ac4c227e74f13e23a932aa0b4103157907c9fb4->enter($__internal_4da8654b918a88be3dcedf225ac4c227e74f13e23a932aa0b4103157907c9fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4da8654b918a88be3dcedf225ac4c227e74f13e23a932aa0b4103157907c9fb4->leave($__internal_4da8654b918a88be3dcedf225ac4c227e74f13e23a932aa0b4103157907c9fb4_prof);

        
        $__internal_48a9ab691dd87c75f1904c61e6acf191f70e2f2d8166727c162036b783b7ab0c->leave($__internal_48a9ab691dd87c75f1904c61e6acf191f70e2f2d8166727c162036b783b7ab0c_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8a72980917fa99ac59e7bbc46509e462cfa7fa83d89e4fadb7bb00dc0a862816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a72980917fa99ac59e7bbc46509e462cfa7fa83d89e4fadb7bb00dc0a862816->enter($__internal_8a72980917fa99ac59e7bbc46509e462cfa7fa83d89e4fadb7bb00dc0a862816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2f7a8614cd9eaa7ef659f1a43e19a4f4dce2411c78b5bea30306a9aac8196bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7a8614cd9eaa7ef659f1a43e19a4f4dce2411c78b5bea30306a9aac8196bd2->enter($__internal_2f7a8614cd9eaa7ef659f1a43e19a4f4dce2411c78b5bea30306a9aac8196bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2f7a8614cd9eaa7ef659f1a43e19a4f4dce2411c78b5bea30306a9aac8196bd2->leave($__internal_2f7a8614cd9eaa7ef659f1a43e19a4f4dce2411c78b5bea30306a9aac8196bd2_prof);

        
        $__internal_8a72980917fa99ac59e7bbc46509e462cfa7fa83d89e4fadb7bb00dc0a862816->leave($__internal_8a72980917fa99ac59e7bbc46509e462cfa7fa83d89e4fadb7bb00dc0a862816_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_50d7b9db41ebf5893c63a83b2f103c846ef2d1c08754735289c36827ab7dc441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d7b9db41ebf5893c63a83b2f103c846ef2d1c08754735289c36827ab7dc441->enter($__internal_50d7b9db41ebf5893c63a83b2f103c846ef2d1c08754735289c36827ab7dc441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0b690618b889561394612423e2762c047195006329c65a0db35eda94198f2752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b690618b889561394612423e2762c047195006329c65a0db35eda94198f2752->enter($__internal_0b690618b889561394612423e2762c047195006329c65a0db35eda94198f2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0b690618b889561394612423e2762c047195006329c65a0db35eda94198f2752->leave($__internal_0b690618b889561394612423e2762c047195006329c65a0db35eda94198f2752_prof);

        
        $__internal_50d7b9db41ebf5893c63a83b2f103c846ef2d1c08754735289c36827ab7dc441->leave($__internal_50d7b9db41ebf5893c63a83b2f103c846ef2d1c08754735289c36827ab7dc441_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_87931426ac7a7d3ce7e25ee3aeb1b29925226f1358f7df9d6ea084bbc996c9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87931426ac7a7d3ce7e25ee3aeb1b29925226f1358f7df9d6ea084bbc996c9d6->enter($__internal_87931426ac7a7d3ce7e25ee3aeb1b29925226f1358f7df9d6ea084bbc996c9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_9407fa948c49789741f21c49982332d177afb770c1a39b9c0e1f96a0653e071a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9407fa948c49789741f21c49982332d177afb770c1a39b9c0e1f96a0653e071a->enter($__internal_9407fa948c49789741f21c49982332d177afb770c1a39b9c0e1f96a0653e071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9407fa948c49789741f21c49982332d177afb770c1a39b9c0e1f96a0653e071a->leave($__internal_9407fa948c49789741f21c49982332d177afb770c1a39b9c0e1f96a0653e071a_prof);

        
        $__internal_87931426ac7a7d3ce7e25ee3aeb1b29925226f1358f7df9d6ea084bbc996c9d6->leave($__internal_87931426ac7a7d3ce7e25ee3aeb1b29925226f1358f7df9d6ea084bbc996c9d6_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f0db5d2f48d4164cea443735b15fb059666b9b50eefcd3923f02db7179f32b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0db5d2f48d4164cea443735b15fb059666b9b50eefcd3923f02db7179f32b2a->enter($__internal_f0db5d2f48d4164cea443735b15fb059666b9b50eefcd3923f02db7179f32b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0a7401c4318bca8e6ac5fe1133ad1e6d39f3ad43743b188e0c511e3ce4c081e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7401c4318bca8e6ac5fe1133ad1e6d39f3ad43743b188e0c511e3ce4c081e9->enter($__internal_0a7401c4318bca8e6ac5fe1133ad1e6d39f3ad43743b188e0c511e3ce4c081e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0a7401c4318bca8e6ac5fe1133ad1e6d39f3ad43743b188e0c511e3ce4c081e9->leave($__internal_0a7401c4318bca8e6ac5fe1133ad1e6d39f3ad43743b188e0c511e3ce4c081e9_prof);

        
        $__internal_f0db5d2f48d4164cea443735b15fb059666b9b50eefcd3923f02db7179f32b2a->leave($__internal_f0db5d2f48d4164cea443735b15fb059666b9b50eefcd3923f02db7179f32b2a_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ad809da23d7163eb977a17a703d1850790b6298b7eb1a9424b7f13eb55810777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad809da23d7163eb977a17a703d1850790b6298b7eb1a9424b7f13eb55810777->enter($__internal_ad809da23d7163eb977a17a703d1850790b6298b7eb1a9424b7f13eb55810777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a1545a5e3b3c2794368e1bef61c987047a2196379c029b07960d3210eef16f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1545a5e3b3c2794368e1bef61c987047a2196379c029b07960d3210eef16f8f->enter($__internal_a1545a5e3b3c2794368e1bef61c987047a2196379c029b07960d3210eef16f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a1545a5e3b3c2794368e1bef61c987047a2196379c029b07960d3210eef16f8f->leave($__internal_a1545a5e3b3c2794368e1bef61c987047a2196379c029b07960d3210eef16f8f_prof);

        
        $__internal_ad809da23d7163eb977a17a703d1850790b6298b7eb1a9424b7f13eb55810777->leave($__internal_ad809da23d7163eb977a17a703d1850790b6298b7eb1a9424b7f13eb55810777_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2fda2d33fc92989aa7093a3640672e5d7a187f6fb9204588d81769b0dfcd1ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fda2d33fc92989aa7093a3640672e5d7a187f6fb9204588d81769b0dfcd1ad9->enter($__internal_2fda2d33fc92989aa7093a3640672e5d7a187f6fb9204588d81769b0dfcd1ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d5e07d4ba3752061ab9a44fb580d08eeb77f7966be161cc09166e7214f5091d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e07d4ba3752061ab9a44fb580d08eeb77f7966be161cc09166e7214f5091d9->enter($__internal_d5e07d4ba3752061ab9a44fb580d08eeb77f7966be161cc09166e7214f5091d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d5e07d4ba3752061ab9a44fb580d08eeb77f7966be161cc09166e7214f5091d9->leave($__internal_d5e07d4ba3752061ab9a44fb580d08eeb77f7966be161cc09166e7214f5091d9_prof);

        
        $__internal_2fda2d33fc92989aa7093a3640672e5d7a187f6fb9204588d81769b0dfcd1ad9->leave($__internal_2fda2d33fc92989aa7093a3640672e5d7a187f6fb9204588d81769b0dfcd1ad9_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}

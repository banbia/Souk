<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_272e13c85893e077d880aeda02554d4b9340bfcbd54a96cb86b7dbda7c003e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6b0817cfd38e5ea84d862fbbb2984d3e678cd7bc2b6ce64d323112063903cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b0817cfd38e5ea84d862fbbb2984d3e678cd7bc2b6ce64d323112063903cd0->enter($__internal_a6b0817cfd38e5ea84d862fbbb2984d3e678cd7bc2b6ce64d323112063903cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_b14bd10f3851a80f92cef35337823681da40400a0c0a2c6261fc75b50e3caa55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14bd10f3851a80f92cef35337823681da40400a0c0a2c6261fc75b50e3caa55->enter($__internal_b14bd10f3851a80f92cef35337823681da40400a0c0a2c6261fc75b50e3caa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a6b0817cfd38e5ea84d862fbbb2984d3e678cd7bc2b6ce64d323112063903cd0->leave($__internal_a6b0817cfd38e5ea84d862fbbb2984d3e678cd7bc2b6ce64d323112063903cd0_prof);

        
        $__internal_b14bd10f3851a80f92cef35337823681da40400a0c0a2c6261fc75b50e3caa55->leave($__internal_b14bd10f3851a80f92cef35337823681da40400a0c0a2c6261fc75b50e3caa55_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7e66f810fd0a2227c599ae5121f71675a9101e44c607fba3ede03815c7c76123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e66f810fd0a2227c599ae5121f71675a9101e44c607fba3ede03815c7c76123->enter($__internal_7e66f810fd0a2227c599ae5121f71675a9101e44c607fba3ede03815c7c76123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_fe9aab50aec2133598d5a4172d328c092a1a705448fe7843cfef71e7f9fdf7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9aab50aec2133598d5a4172d328c092a1a705448fe7843cfef71e7f9fdf7ea->enter($__internal_fe9aab50aec2133598d5a4172d328c092a1a705448fe7843cfef71e7f9fdf7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fe9aab50aec2133598d5a4172d328c092a1a705448fe7843cfef71e7f9fdf7ea->leave($__internal_fe9aab50aec2133598d5a4172d328c092a1a705448fe7843cfef71e7f9fdf7ea_prof);

        
        $__internal_7e66f810fd0a2227c599ae5121f71675a9101e44c607fba3ede03815c7c76123->leave($__internal_7e66f810fd0a2227c599ae5121f71675a9101e44c607fba3ede03815c7c76123_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_06ed952232ad542a8426794c3d26a713770418d08ce552b6f49afdc9cdd40db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ed952232ad542a8426794c3d26a713770418d08ce552b6f49afdc9cdd40db0->enter($__internal_06ed952232ad542a8426794c3d26a713770418d08ce552b6f49afdc9cdd40db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_44b4b4337ca72268dc0d1a03c7c07499ea5b3c61386ebca075239b8dce755d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b4b4337ca72268dc0d1a03c7c07499ea5b3c61386ebca075239b8dce755d09->enter($__internal_44b4b4337ca72268dc0d1a03c7c07499ea5b3c61386ebca075239b8dce755d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_44b4b4337ca72268dc0d1a03c7c07499ea5b3c61386ebca075239b8dce755d09->leave($__internal_44b4b4337ca72268dc0d1a03c7c07499ea5b3c61386ebca075239b8dce755d09_prof);

        
        $__internal_06ed952232ad542a8426794c3d26a713770418d08ce552b6f49afdc9cdd40db0->leave($__internal_06ed952232ad542a8426794c3d26a713770418d08ce552b6f49afdc9cdd40db0_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_043c454f14e8e23245a4a3e1580befcdfb6392a26c59fb872ca223ef3774fe32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043c454f14e8e23245a4a3e1580befcdfb6392a26c59fb872ca223ef3774fe32->enter($__internal_043c454f14e8e23245a4a3e1580befcdfb6392a26c59fb872ca223ef3774fe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_28a2518ff9d5b2614db38bab15a0ec93d2f8ee42ce3c2aca604d08ce1613d7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a2518ff9d5b2614db38bab15a0ec93d2f8ee42ce3c2aca604d08ce1613d7b8->enter($__internal_28a2518ff9d5b2614db38bab15a0ec93d2f8ee42ce3c2aca604d08ce1613d7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_28a2518ff9d5b2614db38bab15a0ec93d2f8ee42ce3c2aca604d08ce1613d7b8->leave($__internal_28a2518ff9d5b2614db38bab15a0ec93d2f8ee42ce3c2aca604d08ce1613d7b8_prof);

        
        $__internal_043c454f14e8e23245a4a3e1580befcdfb6392a26c59fb872ca223ef3774fe32->leave($__internal_043c454f14e8e23245a4a3e1580befcdfb6392a26c59fb872ca223ef3774fe32_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_35548ea278149e10b74f48c3464ccb134d93d720fe803dcf7d45169315fdac08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35548ea278149e10b74f48c3464ccb134d93d720fe803dcf7d45169315fdac08->enter($__internal_35548ea278149e10b74f48c3464ccb134d93d720fe803dcf7d45169315fdac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_359b2c9672ec555e3f01d80e020e05aec1c5b69d652b3a3a8d822ecefe2dd93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359b2c9672ec555e3f01d80e020e05aec1c5b69d652b3a3a8d822ecefe2dd93f->enter($__internal_359b2c9672ec555e3f01d80e020e05aec1c5b69d652b3a3a8d822ecefe2dd93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_0d89ac9b4958fa04deb161d040d9dba91f79ffbd55303604bd959dff4e349afd = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d817abff271dcec5d261c65b698b958abc624f62408db71d9989e41a992759d5 = "{{") && ('' === $__internal_d817abff271dcec5d261c65b698b958abc624f62408db71d9989e41a992759d5 || 0 === strpos($__internal_0d89ac9b4958fa04deb161d040d9dba91f79ffbd55303604bd959dff4e349afd, $__internal_d817abff271dcec5d261c65b698b958abc624f62408db71d9989e41a992759d5)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_0f30b00ca5ea05f7bcdc5435a1e837cbdc58da0d01c7fa4e654ccb2152040a2c = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_8e96b82675db2c314ed931b21ab6596e93f2c8daeb211963de7a06cea4a5aa86 = "}}") && ('' === $__internal_8e96b82675db2c314ed931b21ab6596e93f2c8daeb211963de7a06cea4a5aa86 || $__internal_8e96b82675db2c314ed931b21ab6596e93f2c8daeb211963de7a06cea4a5aa86 === substr($__internal_0f30b00ca5ea05f7bcdc5435a1e837cbdc58da0d01c7fa4e654ccb2152040a2c, -strlen($__internal_8e96b82675db2c314ed931b21ab6596e93f2c8daeb211963de7a06cea4a5aa86))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_359b2c9672ec555e3f01d80e020e05aec1c5b69d652b3a3a8d822ecefe2dd93f->leave($__internal_359b2c9672ec555e3f01d80e020e05aec1c5b69d652b3a3a8d822ecefe2dd93f_prof);

        
        $__internal_35548ea278149e10b74f48c3464ccb134d93d720fe803dcf7d45169315fdac08->leave($__internal_35548ea278149e10b74f48c3464ccb134d93d720fe803dcf7d45169315fdac08_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_01e3861a2832666c6905d636b17a915fa3db182f50e2ed7a2c3c70399ed320d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e3861a2832666c6905d636b17a915fa3db182f50e2ed7a2c3c70399ed320d3->enter($__internal_01e3861a2832666c6905d636b17a915fa3db182f50e2ed7a2c3c70399ed320d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_537840fda4f86599c2c9a0987ae3a09bdedb41d2e90bbae2b098ac23d018df7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537840fda4f86599c2c9a0987ae3a09bdedb41d2e90bbae2b098ac23d018df7a->enter($__internal_537840fda4f86599c2c9a0987ae3a09bdedb41d2e90bbae2b098ac23d018df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_537840fda4f86599c2c9a0987ae3a09bdedb41d2e90bbae2b098ac23d018df7a->leave($__internal_537840fda4f86599c2c9a0987ae3a09bdedb41d2e90bbae2b098ac23d018df7a_prof);

        
        $__internal_01e3861a2832666c6905d636b17a915fa3db182f50e2ed7a2c3c70399ed320d3->leave($__internal_01e3861a2832666c6905d636b17a915fa3db182f50e2ed7a2c3c70399ed320d3_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e6443ee685eac08fab9a15e3b03a62105f960144a827d11501160831dc1b2c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6443ee685eac08fab9a15e3b03a62105f960144a827d11501160831dc1b2c3e->enter($__internal_e6443ee685eac08fab9a15e3b03a62105f960144a827d11501160831dc1b2c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_772e92c3f143e03879780b1a197039f290d3a10f196dd58e6b682f6ec55c489f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772e92c3f143e03879780b1a197039f290d3a10f196dd58e6b682f6ec55c489f->enter($__internal_772e92c3f143e03879780b1a197039f290d3a10f196dd58e6b682f6ec55c489f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_772e92c3f143e03879780b1a197039f290d3a10f196dd58e6b682f6ec55c489f->leave($__internal_772e92c3f143e03879780b1a197039f290d3a10f196dd58e6b682f6ec55c489f_prof);

        
        $__internal_e6443ee685eac08fab9a15e3b03a62105f960144a827d11501160831dc1b2c3e->leave($__internal_e6443ee685eac08fab9a15e3b03a62105f960144a827d11501160831dc1b2c3e_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e43c1ec5d215b579a0a14b2fcf7c926acaab71d5f04d597022e8a7386a876a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43c1ec5d215b579a0a14b2fcf7c926acaab71d5f04d597022e8a7386a876a00->enter($__internal_e43c1ec5d215b579a0a14b2fcf7c926acaab71d5f04d597022e8a7386a876a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d9b95a3f2e244ecf50df2a3b4cf15cd888011ab0a7668ae5f111679c39bce47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b95a3f2e244ecf50df2a3b4cf15cd888011ab0a7668ae5f111679c39bce47a->enter($__internal_d9b95a3f2e244ecf50df2a3b4cf15cd888011ab0a7668ae5f111679c39bce47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_d9b95a3f2e244ecf50df2a3b4cf15cd888011ab0a7668ae5f111679c39bce47a->leave($__internal_d9b95a3f2e244ecf50df2a3b4cf15cd888011ab0a7668ae5f111679c39bce47a_prof);

        
        $__internal_e43c1ec5d215b579a0a14b2fcf7c926acaab71d5f04d597022e8a7386a876a00->leave($__internal_e43c1ec5d215b579a0a14b2fcf7c926acaab71d5f04d597022e8a7386a876a00_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6cc6305c27f1b48a7f2181273a6f6bcd20882d57cd39bfbe5d88e6cfbc5148e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc6305c27f1b48a7f2181273a6f6bcd20882d57cd39bfbe5d88e6cfbc5148e3->enter($__internal_6cc6305c27f1b48a7f2181273a6f6bcd20882d57cd39bfbe5d88e6cfbc5148e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c1db8268acb1cc33dfea123e84774b4c4099c4c814c89a766144b0d9f486bd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1db8268acb1cc33dfea123e84774b4c4099c4c814c89a766144b0d9f486bd71->enter($__internal_c1db8268acb1cc33dfea123e84774b4c4099c4c814c89a766144b0d9f486bd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_c1db8268acb1cc33dfea123e84774b4c4099c4c814c89a766144b0d9f486bd71->leave($__internal_c1db8268acb1cc33dfea123e84774b4c4099c4c814c89a766144b0d9f486bd71_prof);

        
        $__internal_6cc6305c27f1b48a7f2181273a6f6bcd20882d57cd39bfbe5d88e6cfbc5148e3->leave($__internal_6cc6305c27f1b48a7f2181273a6f6bcd20882d57cd39bfbe5d88e6cfbc5148e3_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c84d9e34746bd91c0e85e25140719417c3dcef5ae793ffa3da438340ca58a367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84d9e34746bd91c0e85e25140719417c3dcef5ae793ffa3da438340ca58a367->enter($__internal_c84d9e34746bd91c0e85e25140719417c3dcef5ae793ffa3da438340ca58a367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_19c4f3402acc44325d333d86cba80071c5fa3b3fbd6bebcb6ffa01f72ce96c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c4f3402acc44325d333d86cba80071c5fa3b3fbd6bebcb6ffa01f72ce96c1c->enter($__internal_19c4f3402acc44325d333d86cba80071c5fa3b3fbd6bebcb6ffa01f72ce96c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_19c4f3402acc44325d333d86cba80071c5fa3b3fbd6bebcb6ffa01f72ce96c1c->leave($__internal_19c4f3402acc44325d333d86cba80071c5fa3b3fbd6bebcb6ffa01f72ce96c1c_prof);

        
        $__internal_c84d9e34746bd91c0e85e25140719417c3dcef5ae793ffa3da438340ca58a367->leave($__internal_c84d9e34746bd91c0e85e25140719417c3dcef5ae793ffa3da438340ca58a367_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_361eec9c9bd6796ffa9a6bd0b62f01562672d2ef4320e34bd6b0abfecf7d8eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361eec9c9bd6796ffa9a6bd0b62f01562672d2ef4320e34bd6b0abfecf7d8eb7->enter($__internal_361eec9c9bd6796ffa9a6bd0b62f01562672d2ef4320e34bd6b0abfecf7d8eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_12b1b9f47e24cfa328e2d7823326129ca486a4816f18ef0086139adf523687bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b1b9f47e24cfa328e2d7823326129ca486a4816f18ef0086139adf523687bb->enter($__internal_12b1b9f47e24cfa328e2d7823326129ca486a4816f18ef0086139adf523687bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_12b1b9f47e24cfa328e2d7823326129ca486a4816f18ef0086139adf523687bb->leave($__internal_12b1b9f47e24cfa328e2d7823326129ca486a4816f18ef0086139adf523687bb_prof);

        
        $__internal_361eec9c9bd6796ffa9a6bd0b62f01562672d2ef4320e34bd6b0abfecf7d8eb7->leave($__internal_361eec9c9bd6796ffa9a6bd0b62f01562672d2ef4320e34bd6b0abfecf7d8eb7_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9ca5a5a233d28a26cbf4b5f1d6f2e7f5097370f510ae9d3462caa61f89db91c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca5a5a233d28a26cbf4b5f1d6f2e7f5097370f510ae9d3462caa61f89db91c7->enter($__internal_9ca5a5a233d28a26cbf4b5f1d6f2e7f5097370f510ae9d3462caa61f89db91c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_126c57b07400cf8b2314c2cf005f0b0583e915672346d8c00f095ba9414966d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126c57b07400cf8b2314c2cf005f0b0583e915672346d8c00f095ba9414966d8->enter($__internal_126c57b07400cf8b2314c2cf005f0b0583e915672346d8c00f095ba9414966d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_126c57b07400cf8b2314c2cf005f0b0583e915672346d8c00f095ba9414966d8->leave($__internal_126c57b07400cf8b2314c2cf005f0b0583e915672346d8c00f095ba9414966d8_prof);

        
        $__internal_9ca5a5a233d28a26cbf4b5f1d6f2e7f5097370f510ae9d3462caa61f89db91c7->leave($__internal_9ca5a5a233d28a26cbf4b5f1d6f2e7f5097370f510ae9d3462caa61f89db91c7_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d46dc35ffe9319d2c523a66a0632e8b8be0d8bc44329640d3ff839a6bd361a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46dc35ffe9319d2c523a66a0632e8b8be0d8bc44329640d3ff839a6bd361a01->enter($__internal_d46dc35ffe9319d2c523a66a0632e8b8be0d8bc44329640d3ff839a6bd361a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1e663447efb8541e9c393cbcd49526ebd5927e21f3409ceec1f23555e2cded18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e663447efb8541e9c393cbcd49526ebd5927e21f3409ceec1f23555e2cded18->enter($__internal_1e663447efb8541e9c393cbcd49526ebd5927e21f3409ceec1f23555e2cded18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_1e663447efb8541e9c393cbcd49526ebd5927e21f3409ceec1f23555e2cded18->leave($__internal_1e663447efb8541e9c393cbcd49526ebd5927e21f3409ceec1f23555e2cded18_prof);

        
        $__internal_d46dc35ffe9319d2c523a66a0632e8b8be0d8bc44329640d3ff839a6bd361a01->leave($__internal_d46dc35ffe9319d2c523a66a0632e8b8be0d8bc44329640d3ff839a6bd361a01_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6a399af2197ac3bae602ad50871eb340387df8a29b8de1447e087fa2330ebceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a399af2197ac3bae602ad50871eb340387df8a29b8de1447e087fa2330ebceb->enter($__internal_6a399af2197ac3bae602ad50871eb340387df8a29b8de1447e087fa2330ebceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2e132ad9c57712c6279d0cd9330dfa11fe00a8452fc7017da6b555b138891156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e132ad9c57712c6279d0cd9330dfa11fe00a8452fc7017da6b555b138891156->enter($__internal_2e132ad9c57712c6279d0cd9330dfa11fe00a8452fc7017da6b555b138891156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_2e132ad9c57712c6279d0cd9330dfa11fe00a8452fc7017da6b555b138891156->leave($__internal_2e132ad9c57712c6279d0cd9330dfa11fe00a8452fc7017da6b555b138891156_prof);

        
        $__internal_6a399af2197ac3bae602ad50871eb340387df8a29b8de1447e087fa2330ebceb->leave($__internal_6a399af2197ac3bae602ad50871eb340387df8a29b8de1447e087fa2330ebceb_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2599833f150441b9303dc7cf227a29c31eab91e5cf27289779abc5d243a12221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2599833f150441b9303dc7cf227a29c31eab91e5cf27289779abc5d243a12221->enter($__internal_2599833f150441b9303dc7cf227a29c31eab91e5cf27289779abc5d243a12221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_da42be8573f305424c25536ce32dc77c87b900560140999c956db46e3df0cd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da42be8573f305424c25536ce32dc77c87b900560140999c956db46e3df0cd75->enter($__internal_da42be8573f305424c25536ce32dc77c87b900560140999c956db46e3df0cd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_da42be8573f305424c25536ce32dc77c87b900560140999c956db46e3df0cd75->leave($__internal_da42be8573f305424c25536ce32dc77c87b900560140999c956db46e3df0cd75_prof);

        
        $__internal_2599833f150441b9303dc7cf227a29c31eab91e5cf27289779abc5d243a12221->leave($__internal_2599833f150441b9303dc7cf227a29c31eab91e5cf27289779abc5d243a12221_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_60f07c04be9a383f92085b718a2f877c4fffc3c31d0a5508a384d04a4d59fb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f07c04be9a383f92085b718a2f877c4fffc3c31d0a5508a384d04a4d59fb83->enter($__internal_60f07c04be9a383f92085b718a2f877c4fffc3c31d0a5508a384d04a4d59fb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2c7677909733b6dd6464448861c7b3daad734411f4cf04d93d6a2586d8eb15a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7677909733b6dd6464448861c7b3daad734411f4cf04d93d6a2586d8eb15a7->enter($__internal_2c7677909733b6dd6464448861c7b3daad734411f4cf04d93d6a2586d8eb15a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2c7677909733b6dd6464448861c7b3daad734411f4cf04d93d6a2586d8eb15a7->leave($__internal_2c7677909733b6dd6464448861c7b3daad734411f4cf04d93d6a2586d8eb15a7_prof);

        
        $__internal_60f07c04be9a383f92085b718a2f877c4fffc3c31d0a5508a384d04a4d59fb83->leave($__internal_60f07c04be9a383f92085b718a2f877c4fffc3c31d0a5508a384d04a4d59fb83_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c858477bb73eea3a4cede70b88f8b8c34cf6081fbda3e8152c8e35cabc36393e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c858477bb73eea3a4cede70b88f8b8c34cf6081fbda3e8152c8e35cabc36393e->enter($__internal_c858477bb73eea3a4cede70b88f8b8c34cf6081fbda3e8152c8e35cabc36393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_07b593c08b9f65f074332dc4cfc2177b417299e692081a9f5c9900ba025013f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b593c08b9f65f074332dc4cfc2177b417299e692081a9f5c9900ba025013f9->enter($__internal_07b593c08b9f65f074332dc4cfc2177b417299e692081a9f5c9900ba025013f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_07b593c08b9f65f074332dc4cfc2177b417299e692081a9f5c9900ba025013f9->leave($__internal_07b593c08b9f65f074332dc4cfc2177b417299e692081a9f5c9900ba025013f9_prof);

        
        $__internal_c858477bb73eea3a4cede70b88f8b8c34cf6081fbda3e8152c8e35cabc36393e->leave($__internal_c858477bb73eea3a4cede70b88f8b8c34cf6081fbda3e8152c8e35cabc36393e_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4922b666d0f7bd05771ac827bf082b92e1c0e83b8cec4cd4bb911a10c8e5510e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4922b666d0f7bd05771ac827bf082b92e1c0e83b8cec4cd4bb911a10c8e5510e->enter($__internal_4922b666d0f7bd05771ac827bf082b92e1c0e83b8cec4cd4bb911a10c8e5510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_aa600e077be6174d53fea33036ff57193a0b8cc984ba19ad30e2779c1bca0fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa600e077be6174d53fea33036ff57193a0b8cc984ba19ad30e2779c1bca0fbf->enter($__internal_aa600e077be6174d53fea33036ff57193a0b8cc984ba19ad30e2779c1bca0fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_aa600e077be6174d53fea33036ff57193a0b8cc984ba19ad30e2779c1bca0fbf->leave($__internal_aa600e077be6174d53fea33036ff57193a0b8cc984ba19ad30e2779c1bca0fbf_prof);

        
        $__internal_4922b666d0f7bd05771ac827bf082b92e1c0e83b8cec4cd4bb911a10c8e5510e->leave($__internal_4922b666d0f7bd05771ac827bf082b92e1c0e83b8cec4cd4bb911a10c8e5510e_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7ceca97e7a42888b133b02ccd656bcab582eeaf5e360f73ffbe470fed10d1c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ceca97e7a42888b133b02ccd656bcab582eeaf5e360f73ffbe470fed10d1c06->enter($__internal_7ceca97e7a42888b133b02ccd656bcab582eeaf5e360f73ffbe470fed10d1c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_32886c99e159af1ee63a90b74cc16007e24849bb94d39e077645dc0cd32f93e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32886c99e159af1ee63a90b74cc16007e24849bb94d39e077645dc0cd32f93e1->enter($__internal_32886c99e159af1ee63a90b74cc16007e24849bb94d39e077645dc0cd32f93e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
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
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_32886c99e159af1ee63a90b74cc16007e24849bb94d39e077645dc0cd32f93e1->leave($__internal_32886c99e159af1ee63a90b74cc16007e24849bb94d39e077645dc0cd32f93e1_prof);

        
        $__internal_7ceca97e7a42888b133b02ccd656bcab582eeaf5e360f73ffbe470fed10d1c06->leave($__internal_7ceca97e7a42888b133b02ccd656bcab582eeaf5e360f73ffbe470fed10d1c06_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2a4b82ea1ee57b1c18c46d2ff3109a525b345edee58089710ccbc34c94837793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4b82ea1ee57b1c18c46d2ff3109a525b345edee58089710ccbc34c94837793->enter($__internal_2a4b82ea1ee57b1c18c46d2ff3109a525b345edee58089710ccbc34c94837793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5ce482f02913744e1ec9dcf46ec0aceb43d310b13f716d941ec3f33ad472ba2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce482f02913744e1ec9dcf46ec0aceb43d310b13f716d941ec3f33ad472ba2e->enter($__internal_5ce482f02913744e1ec9dcf46ec0aceb43d310b13f716d941ec3f33ad472ba2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_5ce482f02913744e1ec9dcf46ec0aceb43d310b13f716d941ec3f33ad472ba2e->leave($__internal_5ce482f02913744e1ec9dcf46ec0aceb43d310b13f716d941ec3f33ad472ba2e_prof);

        
        $__internal_2a4b82ea1ee57b1c18c46d2ff3109a525b345edee58089710ccbc34c94837793->leave($__internal_2a4b82ea1ee57b1c18c46d2ff3109a525b345edee58089710ccbc34c94837793_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_35dc46a1cb3b8578036b985f0abaa8e25d9fba13850f28b3017975a4657214e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35dc46a1cb3b8578036b985f0abaa8e25d9fba13850f28b3017975a4657214e0->enter($__internal_35dc46a1cb3b8578036b985f0abaa8e25d9fba13850f28b3017975a4657214e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3cfbf587d6891706cc17a8c82e7fb6ad92d9c3c0cb3ce3b16865b567c3d36aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfbf587d6891706cc17a8c82e7fb6ad92d9c3c0cb3ce3b16865b567c3d36aa2->enter($__internal_3cfbf587d6891706cc17a8c82e7fb6ad92d9c3c0cb3ce3b16865b567c3d36aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_3cfbf587d6891706cc17a8c82e7fb6ad92d9c3c0cb3ce3b16865b567c3d36aa2->leave($__internal_3cfbf587d6891706cc17a8c82e7fb6ad92d9c3c0cb3ce3b16865b567c3d36aa2_prof);

        
        $__internal_35dc46a1cb3b8578036b985f0abaa8e25d9fba13850f28b3017975a4657214e0->leave($__internal_35dc46a1cb3b8578036b985f0abaa8e25d9fba13850f28b3017975a4657214e0_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1c46cc82f9161a2574539158b45c19eef8a012029e9095f920fc860bebf30587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c46cc82f9161a2574539158b45c19eef8a012029e9095f920fc860bebf30587->enter($__internal_1c46cc82f9161a2574539158b45c19eef8a012029e9095f920fc860bebf30587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_46dddebd19b05b7e453bbe44ac37faa3835073425551d2404ab057a65e764365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dddebd19b05b7e453bbe44ac37faa3835073425551d2404ab057a65e764365->enter($__internal_46dddebd19b05b7e453bbe44ac37faa3835073425551d2404ab057a65e764365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_46dddebd19b05b7e453bbe44ac37faa3835073425551d2404ab057a65e764365->leave($__internal_46dddebd19b05b7e453bbe44ac37faa3835073425551d2404ab057a65e764365_prof);

        
        $__internal_1c46cc82f9161a2574539158b45c19eef8a012029e9095f920fc860bebf30587->leave($__internal_1c46cc82f9161a2574539158b45c19eef8a012029e9095f920fc860bebf30587_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_24ac829aa8e0ee0effd76f6e75566ba6dbe1a07267392c88f9fb2d6a9bb29acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ac829aa8e0ee0effd76f6e75566ba6dbe1a07267392c88f9fb2d6a9bb29acf->enter($__internal_24ac829aa8e0ee0effd76f6e75566ba6dbe1a07267392c88f9fb2d6a9bb29acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_872eb641b18bc7c2f14df63d84f83ad9b6338ca00d6f59d221d00f2b073ef8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872eb641b18bc7c2f14df63d84f83ad9b6338ca00d6f59d221d00f2b073ef8fd->enter($__internal_872eb641b18bc7c2f14df63d84f83ad9b6338ca00d6f59d221d00f2b073ef8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_872eb641b18bc7c2f14df63d84f83ad9b6338ca00d6f59d221d00f2b073ef8fd->leave($__internal_872eb641b18bc7c2f14df63d84f83ad9b6338ca00d6f59d221d00f2b073ef8fd_prof);

        
        $__internal_24ac829aa8e0ee0effd76f6e75566ba6dbe1a07267392c88f9fb2d6a9bb29acf->leave($__internal_24ac829aa8e0ee0effd76f6e75566ba6dbe1a07267392c88f9fb2d6a9bb29acf_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_2f5340988f325394eea8fb6da42685cd64ce55a63875639efce8a29b5a83601f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5340988f325394eea8fb6da42685cd64ce55a63875639efce8a29b5a83601f->enter($__internal_2f5340988f325394eea8fb6da42685cd64ce55a63875639efce8a29b5a83601f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_dd4ddc5227c81ca2bf974bde2516b0719eb1f77263d0b673e396ca5a1f3eb00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4ddc5227c81ca2bf974bde2516b0719eb1f77263d0b673e396ca5a1f3eb00a->enter($__internal_dd4ddc5227c81ca2bf974bde2516b0719eb1f77263d0b673e396ca5a1f3eb00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dd4ddc5227c81ca2bf974bde2516b0719eb1f77263d0b673e396ca5a1f3eb00a->leave($__internal_dd4ddc5227c81ca2bf974bde2516b0719eb1f77263d0b673e396ca5a1f3eb00a_prof);

        
        $__internal_2f5340988f325394eea8fb6da42685cd64ce55a63875639efce8a29b5a83601f->leave($__internal_2f5340988f325394eea8fb6da42685cd64ce55a63875639efce8a29b5a83601f_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5d980994f91f950fdff0f524699a0c438a57cbfbd182f2128a7bd8ff93167cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d980994f91f950fdff0f524699a0c438a57cbfbd182f2128a7bd8ff93167cdf->enter($__internal_5d980994f91f950fdff0f524699a0c438a57cbfbd182f2128a7bd8ff93167cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e7a4a83e12585dcdc70178b32338e7c94f66672cec9574aa412a56772986e1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a4a83e12585dcdc70178b32338e7c94f66672cec9574aa412a56772986e1a4->enter($__internal_e7a4a83e12585dcdc70178b32338e7c94f66672cec9574aa412a56772986e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e7a4a83e12585dcdc70178b32338e7c94f66672cec9574aa412a56772986e1a4->leave($__internal_e7a4a83e12585dcdc70178b32338e7c94f66672cec9574aa412a56772986e1a4_prof);

        
        $__internal_5d980994f91f950fdff0f524699a0c438a57cbfbd182f2128a7bd8ff93167cdf->leave($__internal_5d980994f91f950fdff0f524699a0c438a57cbfbd182f2128a7bd8ff93167cdf_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7903ffdb335e41f7c32b8db17208d8ba819b6044fb09bec3c5247ecfcfcb8911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7903ffdb335e41f7c32b8db17208d8ba819b6044fb09bec3c5247ecfcfcb8911->enter($__internal_7903ffdb335e41f7c32b8db17208d8ba819b6044fb09bec3c5247ecfcfcb8911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d0cf03c1396f2d76e79850cd2c04ca8b0bb98d6538777ae13b16a2c93f334e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cf03c1396f2d76e79850cd2c04ca8b0bb98d6538777ae13b16a2c93f334e61->enter($__internal_d0cf03c1396f2d76e79850cd2c04ca8b0bb98d6538777ae13b16a2c93f334e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_d0cf03c1396f2d76e79850cd2c04ca8b0bb98d6538777ae13b16a2c93f334e61->leave($__internal_d0cf03c1396f2d76e79850cd2c04ca8b0bb98d6538777ae13b16a2c93f334e61_prof);

        
        $__internal_7903ffdb335e41f7c32b8db17208d8ba819b6044fb09bec3c5247ecfcfcb8911->leave($__internal_7903ffdb335e41f7c32b8db17208d8ba819b6044fb09bec3c5247ecfcfcb8911_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c2d6f20eda8d43c3463ff7ce2867a8964bdab7b1bba4ddd91264aa63730b5d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d6f20eda8d43c3463ff7ce2867a8964bdab7b1bba4ddd91264aa63730b5d2e->enter($__internal_c2d6f20eda8d43c3463ff7ce2867a8964bdab7b1bba4ddd91264aa63730b5d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e3bfc75b71bd6f951eaf96a07cfe655b479f65e345668dc960450e4ac0f8eb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bfc75b71bd6f951eaf96a07cfe655b479f65e345668dc960450e4ac0f8eb19->enter($__internal_e3bfc75b71bd6f951eaf96a07cfe655b479f65e345668dc960450e4ac0f8eb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_e3bfc75b71bd6f951eaf96a07cfe655b479f65e345668dc960450e4ac0f8eb19->leave($__internal_e3bfc75b71bd6f951eaf96a07cfe655b479f65e345668dc960450e4ac0f8eb19_prof);

        
        $__internal_c2d6f20eda8d43c3463ff7ce2867a8964bdab7b1bba4ddd91264aa63730b5d2e->leave($__internal_c2d6f20eda8d43c3463ff7ce2867a8964bdab7b1bba4ddd91264aa63730b5d2e_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_bf2ea76c6124a0b8d50f942b53f24298be44aafaa43d310666708c58e05ccc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2ea76c6124a0b8d50f942b53f24298be44aafaa43d310666708c58e05ccc2e->enter($__internal_bf2ea76c6124a0b8d50f942b53f24298be44aafaa43d310666708c58e05ccc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_be9775ed0c39684f915eb93343cb594c94aff130b448b607c258d074018fab44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9775ed0c39684f915eb93343cb594c94aff130b448b607c258d074018fab44->enter($__internal_be9775ed0c39684f915eb93343cb594c94aff130b448b607c258d074018fab44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_be9775ed0c39684f915eb93343cb594c94aff130b448b607c258d074018fab44->leave($__internal_be9775ed0c39684f915eb93343cb594c94aff130b448b607c258d074018fab44_prof);

        
        $__internal_bf2ea76c6124a0b8d50f942b53f24298be44aafaa43d310666708c58e05ccc2e->leave($__internal_bf2ea76c6124a0b8d50f942b53f24298be44aafaa43d310666708c58e05ccc2e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}

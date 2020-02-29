<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* form_div_layout.html.twig */
class __TwigTemplate_aa0cf62db95ed262d13b2c7e3788761887d8b4768ead543c59d9485bcaba8b98 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 20
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 30
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 49
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 78
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 91
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 95
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 112
        $this->displayBlock('date_widget', $context, $blocks);
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 137
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 172
        $this->displayBlock('number_widget', $context, $blocks);
        // line 178
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 183
        $this->displayBlock('money_widget', $context, $blocks);
        // line 187
        $this->displayBlock('url_widget', $context, $blocks);
        // line 192
        $this->displayBlock('search_widget', $context, $blocks);
        // line 197
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 202
        $this->displayBlock('password_widget', $context, $blocks);
        // line 207
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 212
        $this->displayBlock('email_widget', $context, $blocks);
        // line 217
        $this->displayBlock('range_widget', $context, $blocks);
        // line 222
        $this->displayBlock('button_widget', $context, $blocks);
        // line 238
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 243
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 248
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 253
        $this->displayBlock('color_widget', $context, $blocks);
        // line 258
        $this->displayBlock('week_widget', $context, $blocks);
        // line 271
        $this->displayBlock('form_label', $context, $blocks);
        // line 299
        $this->displayBlock('button_label', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('form_help', $context, $blocks);
        // line 323
        echo "
";
        // line 326
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 334
        $this->displayBlock('form_row', $context, $blocks);
        // line 347
        $this->displayBlock('button_row', $context, $blocks);
        // line 353
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 359
        $this->displayBlock('form', $context, $blocks);
        // line 365
        $this->displayBlock('form_start', $context, $blocks);
        // line 379
        $this->displayBlock('form_end', $context, $blocks);
        // line 386
        $this->displayBlock('form_errors', $context, $blocks);
        // line 396
        $this->displayBlock('form_rest', $context, $blocks);
        // line 417
        echo "
";
        // line 420
        $this->displayBlock('form_rows', $context, $blocks);
        // line 426
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 433
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 438
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 443
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        $this->displayBlock("form_rows", $context, $blocks);
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        echo "</div>";
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        if (((isset($context["prototype"]) || array_key_exists("prototype", $context)) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 31))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 59) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            (((($context["placeholder"] ?? null) != "")) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 66
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 69
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 70
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 73
        $context["options"] = ($context["choices"] ?? null);
        // line 74
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 75
        echo "</select>";
    }

    // line 78
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 80
            if (twig_test_iterable($context["choice"])) {
                // line 81
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
                ";
                // line 82
                $context["options"] = $context["choice"];
                // line 83
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 84
                echo "</optgroup>";
            } else {
                // line 86
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 86), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 86)) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 86)];
                    if (!twig_test_iterable($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 86, $this->getSourceContext());
                    }
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_to_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4);
                    $context['_parent'] = $context;
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 86)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 86), [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 91
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 95
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 99
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 101
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 103
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 104), 'errors');
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 105), 'errors');
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 106), 'widget');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 107), 'widget');
            // line 108
            echo "</div>";
        }
    }

    // line 112
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 114
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 116
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 117
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 118
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 118), 'widget'), "{{ month }}" =>             // line 119
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 119), 'widget'), "{{ day }}" =>             // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 120), 'widget')]);
            // line 122
            echo "</div>";
        }
    }

    // line 126
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 132), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 132), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 132), 'widget', ($context["vars"] ?? null));
            }
            // line 133
            echo "        </div>";
        }
    }

    // line 137
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 139
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 141
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 142
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 143
            echo "<table class=\"";
            echo twig_escape_filter($this->env, (((isset($context["table_class"]) || array_key_exists("table_class", $context))) ? (_twig_default_filter(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 146
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 146), 'label');
                echo "</th>";
            }
            // line 147
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 147), 'label');
                echo "</th>";
            }
            // line 148
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 148), 'label');
                echo "</th>";
            }
            // line 149
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 149), 'label');
                echo "</th>";
            }
            // line 150
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 150), 'label');
                echo "</th>";
            }
            // line 151
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 151), 'label');
                echo "</th>";
            }
            // line 152
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 152), 'label');
                echo "</th>";
            }
            // line 153
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 157
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 157), 'widget');
                echo "</td>";
            }
            // line 158
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 158), 'widget');
                echo "</td>";
            }
            // line 159
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 159), 'widget');
                echo "</td>";
            }
            // line 160
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 160), 'widget');
                echo "</td>";
            }
            // line 161
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 161), 'widget');
                echo "</td>";
            }
            // line 162
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 162), 'widget');
                echo "</td>";
            }
            // line 163
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 163), 'widget');
                echo "</td>";
            }
            // line 164
            echo "</tr>
                </tbody>
            </table>";
            // line 167
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 167), 'widget');
            }
            // line 168
            echo "</div>";
        }
    }

    // line 172
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 178
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 183
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->renderBlock("form_widget_simple", $context, $blocks));
    }

    // line 187
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 189
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 192
    public function block_search_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 194
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 197
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 199
        $this->displayBlock("form_widget_simple", $context, $blocks);
        if (($context["symbol"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, (((isset($context["symbol"]) || array_key_exists("symbol", $context))) ? (_twig_default_filter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
        }
    }

    // line 202
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 203
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 204
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 207
    public function block_hidden_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 209
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 212
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 214
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 217
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "range")) : ("range"));
        // line 219
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 222
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 224
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 225
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 226
($context["name"] ?? null), "%id%" =>                 // line 227
($context["id"] ?? null)]);
            } elseif ((            // line 229
($context["label"] ?? null) === false)) {
                // line 230
                $context["translation_domain"] = false;
            } else {
                // line 232
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 235
        echo "<button type=\"";
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
        echo "</button>";
    }

    // line 238
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 239
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 240
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 243
    public function block_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 244
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 245
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 248
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "tel")) : ("tel"));
        // line 250
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 253
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "color")) : ("color"));
        // line 255
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 258
    public function block_week_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 260
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 262
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 263
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 264
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 264), 'widget', ($context["vars"] ?? null));
            echo "-";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, false, 264), 'widget', ($context["vars"] ?? null));
            echo "
        </div>";
        }
    }

    // line 271
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 272
        if ( !(($context["label"] ?? null) === false)) {
            // line 273
            if ( !($context["compound"] ?? null)) {
                // line 274
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 276
            if (($context["required"] ?? null)) {
                // line 277
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 277)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 277), "")) : ("")) . " required"))]);
            }
            // line 279
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 280
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 281
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 282
($context["name"] ?? null), "%id%" =>                     // line 283
($context["id"] ?? null)]);
                } else {
                    // line 286
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 289
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 289, $this->getSourceContext());
                }
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
                $context['_parent'] = $context;
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            // line 290
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 291
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 293
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 295
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 299
    public function block_button_label($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 303
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 304
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 305
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 305)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 305), "")) : ("")) . " help-text"))]);
            // line 306
            echo "<p id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 306, $this->getSourceContext());
            }
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_to_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 307
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 308
                if ((($context["help_html"] ?? null) === false)) {
                    // line 309
                    echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
                } else {
                    // line 311
                    echo ($context["help"] ?? null);
                }
            } else {
                // line 314
                if ((($context["help_html"] ?? null) === false)) {
                    // line 315
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 317
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 320
            echo "</p>";
        }
    }

    // line 326
    public function block_repeated_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 334
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 335
        $context["widget_attr"] = [];
        // line 336
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 337
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 339
        echo "<div";
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 339, $this->getSourceContext());
        }
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 344
        echo "</div>";
    }

    // line 347
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 348
        echo "<div";
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 348, $this->getSourceContext());
        }
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_to_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 350
        echo "</div>";
    }

    // line 353
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 359
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 360
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 362
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 365
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 366
        twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 366);
        // line 367
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 368
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 369
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 371
            $context["form_method"] = "POST";
        }
        // line 373
        echo "<form";
        if ((($context["name"] ?? null) != "")) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        $this->displayBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 374
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 375
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 379
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 380
        if (( !(isset($context["render_rest"]) || array_key_exists("render_rest", $context)) || ($context["render_rest"] ?? null))) {
            // line 381
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 383
        echo "</form>";
    }

    // line 386
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 387
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 388
            echo "<ul>";
            // line 389
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 390
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 390), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "</ul>";
        }
    }

    // line 396
    public function block_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 398
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 398)) {
                // line 399
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        if (( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, false, 403) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 404
            twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 404);
            // line 405
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
            // line 406
            if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
                // line 407
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 409
                $context["form_method"] = "POST";
            }
            // line 412
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 413
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "\" />";
            }
        }
    }

    // line 420
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 421); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 422
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 426
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 427
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 428
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 429
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 430
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 433
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 434
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 435
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 438
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 439
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 440
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 443
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 445
            echo " ";
            // line 446
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 447
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], ($context["attr_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 448
$context["attrvalue"] === true)) {
                // line 449
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 450
$context["attrvalue"] === false)) {
                // line 451
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1288 => 451,  1286 => 450,  1281 => 449,  1279 => 448,  1274 => 447,  1272 => 446,  1270 => 445,  1266 => 444,  1262 => 443,  1258 => 440,  1249 => 439,  1245 => 438,  1241 => 435,  1235 => 434,  1231 => 433,  1227 => 430,  1223 => 429,  1219 => 428,  1213 => 427,  1209 => 426,  1201 => 422,  1197 => 421,  1193 => 420,  1185 => 413,  1183 => 412,  1180 => 409,  1177 => 407,  1175 => 406,  1173 => 405,  1171 => 404,  1169 => 403,  1162 => 399,  1160 => 398,  1156 => 397,  1152 => 396,  1147 => 392,  1139 => 390,  1135 => 389,  1133 => 388,  1131 => 387,  1127 => 386,  1123 => 383,  1120 => 381,  1118 => 380,  1114 => 379,  1107 => 375,  1105 => 374,  1085 => 373,  1082 => 371,  1079 => 369,  1077 => 368,  1075 => 367,  1073 => 366,  1069 => 365,  1065 => 362,  1063 => 361,  1061 => 360,  1057 => 359,  1053 => 354,  1049 => 353,  1045 => 350,  1043 => 349,  1031 => 348,  1027 => 347,  1023 => 344,  1021 => 343,  1019 => 342,  1017 => 341,  1015 => 340,  1003 => 339,  1000 => 337,  998 => 336,  996 => 335,  992 => 334,  988 => 331,  984 => 326,  979 => 320,  975 => 317,  972 => 315,  970 => 314,  966 => 311,  963 => 309,  961 => 308,  959 => 307,  945 => 306,  943 => 305,  941 => 304,  937 => 303,  931 => 299,  924 => 295,  921 => 293,  918 => 291,  916 => 290,  901 => 289,  897 => 286,  894 => 283,  893 => 282,  892 => 281,  890 => 280,  888 => 279,  885 => 277,  883 => 276,  880 => 274,  878 => 273,  876 => 272,  872 => 271,  863 => 264,  858 => 263,  856 => 262,  853 => 260,  851 => 259,  847 => 258,  843 => 255,  841 => 254,  837 => 253,  833 => 250,  831 => 249,  827 => 248,  823 => 245,  821 => 244,  817 => 243,  813 => 240,  811 => 239,  807 => 238,  797 => 235,  793 => 232,  790 => 230,  788 => 229,  786 => 227,  785 => 226,  784 => 225,  782 => 224,  780 => 223,  776 => 222,  772 => 219,  770 => 218,  766 => 217,  762 => 214,  760 => 213,  756 => 212,  752 => 209,  750 => 208,  746 => 207,  742 => 204,  740 => 203,  736 => 202,  728 => 199,  726 => 198,  722 => 197,  718 => 194,  716 => 193,  712 => 192,  708 => 189,  706 => 188,  702 => 187,  698 => 184,  694 => 183,  690 => 180,  688 => 179,  684 => 178,  680 => 175,  678 => 174,  674 => 172,  669 => 168,  665 => 167,  661 => 164,  655 => 163,  649 => 162,  643 => 161,  637 => 160,  631 => 159,  625 => 158,  619 => 157,  614 => 153,  608 => 152,  602 => 151,  596 => 150,  590 => 149,  584 => 148,  578 => 147,  572 => 146,  566 => 143,  564 => 142,  560 => 141,  557 => 139,  555 => 138,  551 => 137,  546 => 133,  536 => 132,  531 => 131,  529 => 130,  526 => 128,  524 => 127,  520 => 126,  515 => 122,  513 => 120,  512 => 119,  511 => 118,  510 => 117,  506 => 116,  503 => 114,  501 => 113,  497 => 112,  492 => 108,  490 => 107,  488 => 106,  486 => 105,  484 => 104,  480 => 103,  477 => 101,  475 => 100,  471 => 99,  457 => 96,  453 => 95,  439 => 92,  435 => 91,  399 => 86,  396 => 84,  394 => 83,  392 => 82,  387 => 81,  385 => 80,  368 => 79,  364 => 78,  360 => 75,  358 => 74,  356 => 73,  350 => 70,  348 => 69,  346 => 68,  344 => 67,  342 => 66,  333 => 64,  331 => 63,  324 => 62,  321 => 60,  319 => 59,  315 => 58,  311 => 55,  305 => 53,  303 => 52,  299 => 51,  295 => 50,  291 => 49,  286 => 45,  283 => 43,  281 => 42,  277 => 41,  269 => 38,  265 => 37,  261 => 34,  258 => 32,  256 => 31,  252 => 30,  248 => 27,  246 => 26,  244 => 25,  241 => 23,  239 => 22,  235 => 21,  231 => 20,  217 => 17,  214 => 15,  212 => 13,  210 => 12,  206 => 11,  201 => 7,  198 => 5,  196 => 4,  192 => 3,  188 => 443,  186 => 438,  184 => 433,  182 => 426,  180 => 420,  177 => 417,  175 => 396,  173 => 386,  171 => 379,  169 => 365,  167 => 359,  165 => 353,  163 => 347,  161 => 334,  159 => 326,  156 => 323,  154 => 303,  151 => 302,  149 => 299,  147 => 271,  145 => 258,  143 => 253,  141 => 248,  139 => 243,  137 => 238,  135 => 222,  133 => 217,  131 => 212,  129 => 207,  127 => 202,  125 => 197,  123 => 192,  121 => 187,  119 => 183,  117 => 178,  115 => 172,  113 => 137,  111 => 126,  109 => 112,  107 => 99,  105 => 95,  103 => 91,  101 => 78,  99 => 58,  97 => 49,  95 => 41,  93 => 37,  91 => 30,  89 => 20,  87 => 11,  85 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}

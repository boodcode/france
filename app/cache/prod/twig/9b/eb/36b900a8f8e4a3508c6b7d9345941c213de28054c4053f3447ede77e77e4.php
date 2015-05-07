<?php

/* BoodcodeContactBundle:Form:fields.html.twig */
class __TwigTemplate_9beb36b900a8f8e4a3508c6b7d9345941c213de28054c4053f3447ede77e77e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('choice_widget_options', $context, $blocks);
    }

    // line 1
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        // line 4
        echo "        ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 5
            echo "            ";
            $context["errorClass"] = "error";
            // line 6
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if ($this->getAttribute($_attr_, "class", array(), "any", true, true)) {
                // line 7
                echo "                ";
                if (isset($context["errorClass"])) { $_errorClass_ = $context["errorClass"]; } else { $_errorClass_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["errorClass"] = (($_errorClass_ . " ") . $this->getAttribute($_attr_, "class", array()));
                // line 8
                echo "            ";
            }
            // line 9
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["errorClass"])) { $_errorClass_ = $context["errorClass"]; } else { $_errorClass_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => $_errorClass_));
            // line 10
            echo "        ";
        }
        // line 11
        echo "        ";
        // line 12
        echo "        id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" name=\"";
        if (isset($context["full_name"])) { $_full_name_ = $context["full_name"]; } else { $_full_name_ = null; }
        echo twig_escape_filter($this->env, $_full_name_, "html", null, true);
        echo "\"";
        // line 13
        if (isset($context["read_only"])) { $_read_only_ = $context["read_only"]; } else { $_read_only_ = null; }
        if ($_read_only_) {
            echo " readonly=\"readonly\"";
        }
        // line 14
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ($_disabled_) {
            echo " disabled=\"disabled\"";
        }
        // line 15
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        if ($_required_) {
            echo " required=\"required\"";
        }
        // line 16
        if (isset($context["max_length"])) { $_max_length_ = $context["max_length"]; } else { $_max_length_ = null; }
        if ($_max_length_) {
            echo " maxlength=\"";
            if (isset($context["max_length"])) { $_max_length_ = $context["max_length"]; } else { $_max_length_ = null; }
            echo twig_escape_filter($this->env, $_max_length_, "html", null, true);
            echo "\"";
        }
        // line 17
        if (isset($context["pattern"])) { $_pattern_ = $context["pattern"]; } else { $_pattern_ = null; }
        if ($_pattern_) {
            echo " pattern=\"";
            if (isset($context["pattern"])) { $_pattern_ = $context["pattern"]; } else { $_pattern_ = null; }
            echo twig_escape_filter($this->env, $_pattern_, "html", null, true);
            echo "\"";
        }
        // line 18
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 19
            echo " ";
            // line 20
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            if (twig_in_filter($_attrname_, array(0 => "placeholder", 1 => "title"))) {
                // line 21
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_attrvalue_, array(), $_translation_domain_), "html", null, true);
                echo "\"";
            } elseif (($_attrvalue_ === true)) {
                // line 23
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "\"";
            } elseif ((!($_attrvalue_ === false))) {
                // line 25
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 32
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
        if (isset($context["empty_value_in_choices"])) { $_empty_value_in_choices_ = $context["empty_value_in_choices"]; } else { $_empty_value_in_choices_ = null; }
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if (((($_required_ && (null === $_empty_value_)) && (!$_empty_value_in_choices_)) && (!$_multiple_))) {
            // line 33
            $context["required"] = false;
        }
        // line 36
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " style=\"display:none;\">
        ";
        // line 37
        if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
        if ((!(null === $_empty_value_))) {
            // line 38
            echo "<option value=\"\"";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (($_required_ && twig_test_empty($_value_))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
            echo "</option>";
        }
        // line 40
        echo "    </select>
    <input  id=\"";
        // line 41
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"  type=\"text\" readonly=\"readonly\" value=\"";
        if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
        if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
        echo "\" class=\"w_470\">
    <ul ";
        // line 42
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if ($_multiple_) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 43
        if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
        if ((!(null === $_empty_value_))) {
            // line 44
            echo "<li value=\"\"";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (($_required_ && twig_test_empty($_value_))) {
                echo " class=\"selected\"";
            }
            echo ">";
            if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
            echo "</li>";
        }
        // line 46
        if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
        if ((twig_length_filter($this->env, $_preferred_choices_) > 0)) {
            // line 47
            if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
            $context["options"] = $_preferred_choices_;
            // line 48
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 49
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
            if (((twig_length_filter($this->env, $_choices_) > 0) && (!(null === $_separator_)))) {
                // line 50
                echo "<li disabled=\"disabled\">";
                if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
                echo twig_escape_filter($this->env, $_separator_, "html", null, true);
                echo "</li>";
            }
        }
        // line 53
        if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
        $context["options"] = $_choices_;
        // line 55
        echo "    </ul>";
    }

    // line 58
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 59
        if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_choices_);
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 60
            if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
            if (twig_test_iterable($_choice_)) {
                // line 61
                echo "<optgroup label=\"";
                if (isset($context["group_label"])) { $_group_label_ = $context["group_label"]; } else { $_group_label_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_group_label_, array(), $_translation_domain_), "html", null, true);
                echo "\">
                ";
                // line 62
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                $context["options"] = $_choice_;
                // line 63
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 64
                echo "</optgroup>";
            } else {
                // line 66
                echo "<li value=\"";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_choice_, "value", array()), "html", null, true);
                echo "\"";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if ($this->env->getExtension('form')->isSelectedChoice($_choice_, $_value_)) {
                    echo " class=\"selected\"";
                }
                echo ">";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_choice_, "label", array()), array(), $_translation_domain_), "html", null, true);
                echo "</li>";
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

    public function getTemplateName()
    {
        return "BoodcodeContactBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  289 => 66,  286 => 64,  284 => 63,  281 => 62,  274 => 61,  271 => 60,  253 => 59,  250 => 58,  246 => 55,  243 => 53,  236 => 50,  232 => 49,  230 => 48,  227 => 47,  224 => 46,  211 => 44,  208 => 43,  200 => 42,  191 => 41,  188 => 40,  175 => 38,  172 => 37,  167 => 36,  164 => 33,  158 => 32,  155 => 31,  140 => 25,  132 => 23,  123 => 21,  119 => 20,  117 => 19,  112 => 18,  104 => 17,  96 => 16,  91 => 15,  86 => 14,  81 => 13,  73 => 12,  71 => 11,  68 => 10,  63 => 9,  60 => 8,  55 => 7,  51 => 6,  48 => 5,  44 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 58,  29 => 57,  27 => 31,  24 => 30,  22 => 1,);
    }
}

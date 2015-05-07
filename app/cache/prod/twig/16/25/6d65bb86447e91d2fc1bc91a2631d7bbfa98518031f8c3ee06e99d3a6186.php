<?php

/* BoodcodeFranceBundle:Default:index.html.twig */
class __TwigTemplate_16256d65bb86447e91d2fc1bc91a2631d7bbfa98518031f8c3ee06e99d3a6186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BoodcodeFranceBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BoodcodeFranceBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Accueil ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        echo "    
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"grid\">
\t\t\t\t";
        // line 10
        if (isset($context["works"])) { $_works_ = $context["works"]; } else { $_works_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_works_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 11
            echo "\t\t\t\t\t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((((($this->getAttribute($_loop_, "index", array()) == 1) || ($this->getAttribute($_loop_, "index", array()) == 4)) || ($this->getAttribute($_loop_, "index", array()) == 8)) || ($this->getAttribute($_loop_, "index", array()) == 13))) {
                // line 12
                echo "\t\t\t\t\t<div class=\"bloc\">
\t\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t\t\t<div id=\"";
            if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_work_, "slug", array()), "html", null, true);
            echo "\" class=\"work w";
            if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_work_, "homeWidth", array()), "html", null, true);
            echo " h";
            if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_work_, "homeHeight", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"over\">
\t\t\t\t\t\t\t\t<div class=\"title\">";
            // line 16
            if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_work_, "titre", array()), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t<span class=\"subtitle\">";
            // line 17
            if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_work_, "description", array()), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--img src=\"";
            // line 19
            if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/works/" . $this->getAttribute($_work_, "slug", array())) . "-home.jpg")), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_work_, "slug", array()), "html", null, true);
            echo "\" width=\"100%\"-->
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 21
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((((($this->getAttribute($_loop_, "index", array()) == 3) || ($this->getAttribute($_loop_, "index", array()) == 7)) || ($this->getAttribute($_loop_, "index", array()) == 12)) || ($this->getAttribute($_loop_, "index", array()) == 15))) {
                // line 22
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 23
            echo "\t
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BoodcodeFranceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  110 => 23,  106 => 22,  103 => 21,  94 => 19,  88 => 17,  83 => 16,  70 => 14,  66 => 12,  62 => 11,  44 => 10,  36 => 6,  29 => 5,);
    }
}

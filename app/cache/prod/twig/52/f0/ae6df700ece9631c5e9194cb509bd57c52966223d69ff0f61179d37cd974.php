<?php

/* BoodcodeFranceBundle:Default:work.html.twig */
class __TwigTemplate_52f0ae6df700ece9631c5e9194cb509bd57c52966223d69ff0f61179d37cd974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BoodcodeFranceBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo " ";
        if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_work_, "titre", array()), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tiltSlider.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        echo "    
\t<div class=\"container-fluid\">
\t\t<div class=\"slideshow\" id=\"slideshow\">
\t\t\t<div id=\"infos\">
\t\t\t\t<h1>";
        // line 13
        if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_work_, "titre", array()), "html", null, true);
        echo "</h1>
\t\t\t\t<h2>";
        // line 14
        if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_work_, "description", array()), "html", null, true);
        echo "</h2>
\t\t\t\t<div class=\"details\">";
        // line 15
        if (isset($context["work"])) { $_work_ = $context["work"]; } else { $_work_ = null; }
        echo $this->env->getExtension('boodcode_extension')->nl2liste($this->getAttribute($_work_, "details", array()));
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"nav-work\">
\t\t\t\t<div class=\"prev\">
\t\t\t\t\t<a href=\"";
        // line 19
        if (isset($context["prevSlug"])) { $_prevSlug_ = $context["prevSlug"]; } else { $_prevSlug_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boodcode_france_work", array("slug" => $_prevSlug_)), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/nav_prev.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"next\">
\t\t\t\t\t<a href=\"";
        // line 22
        if (isset($context["nextSlug"])) { $_nextSlug_ = $context["nextSlug"]; } else { $_nextSlug_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boodcode_france_work", array("slug" => $_nextSlug_)), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/nav_next.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<ol class=\"slides\">
\t\t\t
\t\t\t";
        // line 27
        if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_image_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 28
            echo "
\t\t\t\t<li class=\"";
            // line 29
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first", array())) {
                echo " current ";
            }
            echo "\">
\t\t\t\t\t<div class=\"tiltview col\">";
            // line 30
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_img_, "ordre", array()), "html", null, true);
            echo "
\t\t\t\t\t\t<a href=\"#\"><img src=\"";
            // line 31
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_img_, "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_img_, "alt", array()), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t
\t\t\t</ol>
\t\t\t<!--img src=\"datas/images/bnp-paribas/bnp-paribas-argument-1.jpg\" height=\"600\" alt=\"bnp-paribas magazine argument\"-->
\t\t</div>
\t\t
\t\t<div class=\"clearfix\"></div>
\t</div>
\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tiltSlider.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tnew TiltSlider( document.getElementById( 'slideshow' ) );
\t</script>
";
    }

    public function getTemplateName()
    {
        return "BoodcodeFranceBundle:Default:work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  163 => 42,  154 => 35,  132 => 31,  127 => 30,  120 => 29,  117 => 28,  99 => 27,  88 => 22,  79 => 19,  71 => 15,  66 => 14,  61 => 13,  53 => 9,  47 => 7,  40 => 6,  30 => 5,);
    }
}

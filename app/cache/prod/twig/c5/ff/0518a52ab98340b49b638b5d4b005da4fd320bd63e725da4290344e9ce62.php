<?php

/* BoodcodeFranceBundle::layout.html.twig */
class __TwigTemplate_c5ff0518a52ab98340b49b638b5d4b005da4fd320bd63e725da4290344e9ce62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
\t<meta name=\"description\" content=\"Graphiste Publicitaire, Identité visuelle, Charte graphique, Image de marque, cahier de style. Edition / Print, Magazine, brochure, Evénementiel\">
\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"favicon.png\"/>
\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 11
        if (isset($context["site_root"])) { $_site_root_ = $context["site_root"]; } else { $_site_root_ = null; }
        echo twig_escape_filter($this->env, $_site_root_, "html", null, true);
        echo "favicon.png\"/>
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "  \t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "
  </head>
  <body class=\"";
        // line 26
        if (isset($context["body_class"])) { $_body_class_ = $context["body_class"]; } else { $_body_class_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter($_body_class_, "page")) : ("page")), "html", null, true);
        echo "\">
  \t";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "\t<div id=\"main\">
\t    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    </div>
\t<div class=\"row\" id=\"footer\">
\t\t<ul class=\"demi left\">
\t\t\t<li><a href=\"";
        // line 50
        if (isset($context["site_root"])) { $_site_root_ = $context["site_root"]; } else { $_site_root_ = null; }
        echo twig_escape_filter($this->env, $_site_root_, "html", null, true);
        echo "\">Françoise Aberton</a></li>
\t\t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("boodcode_france_clients");
        echo "\">Clients</a></li>
\t\t\t<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("boodcode_france_about");
        echo "\">A propos</a></li>
\t\t\t<li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("boodcode_contact_fr");
        echo "\">Contact</a></li>
\t\t</ul>
\t\t<ul class=\"demi right\">
\t\t\t<li><a href=\"http://www.viadeo.com/profile/002s46wj388myij?nav=0&navContext=002fh8icvccjoy1&consultationType=27\" target=\"_blank\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/footer_viadeo.png"), "html", null, true);
        echo "\" alt=\"viadeo\"></a></li>
\t\t</ul>
\t</div>
\t<script>
\t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

\t  ga('create', 'UA-10314669-30', 'auto');
\t  ga('send', 'pageview');

\t</script>
  </body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Françoise Aberton | Graphiste DA";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "      \t<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic' rel='stylesheet' type='text/css'>
      \t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "\t\t<script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\" id=\"header\">
  \t\t\t<div class=\"logo\"><a href=\"";
        // line 30
        if (isset($context["site_root"])) { $_site_root_ = $context["site_root"]; } else { $_site_root_ = null; }
        echo twig_escape_filter($this->env, $_site_root_, "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Françoise Aberton\"></a></div>
  \t\t\t<div class=\"title\">
  \t\t\t\t<h1>Françoise Aberton</h1>
  \t\t\t\t<h2>Graphiste D.A.</h2>
  \t\t\t</div>\t\t
  \t\t\t<div class=\"menu\">
  \t\t\t\t<a href=\"";
        // line 36
        if (isset($context["site_root"])) { $_site_root_ = $context["site_root"]; } else { $_site_root_ = null; }
        echo twig_escape_filter($this->env, $_site_root_, "html", null, true);
        echo "\">Portfolio</a> | 
  \t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("boodcode_france_about");
        echo "\">A propos</a> | 
  \t\t\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("boodcode_france_clients");
        echo "\">Clients</a> | 
  \t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("boodcode_contact_fr");
        echo "\">Contact</a>
  \t\t\t</div>
\t\t</div>
\t\t
\t";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "BoodcodeFranceBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 46,  191 => 45,  182 => 39,  178 => 38,  174 => 37,  169 => 36,  157 => 30,  153 => 28,  150 => 27,  144 => 22,  140 => 21,  136 => 20,  132 => 19,  129 => 18,  126 => 17,  120 => 15,  117 => 14,  114 => 13,  108 => 12,  89 => 56,  83 => 53,  79 => 52,  75 => 51,  70 => 50,  65 => 47,  63 => 45,  60 => 44,  58 => 27,  53 => 26,  49 => 24,  46 => 17,  44 => 13,  40 => 12,  35 => 11,  24 => 2,);
    }
}

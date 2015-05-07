<?php

/* BoodcodeContactBundle::base.html.twig */
class __TwigTemplate_4b032b0c5d9203b8952d89dc7ed141ee2ecad6dff34c190234e9f70b551d9c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BoodcodeFranceBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " | Contact ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href='http://fonts.googleapis.com/css?family=Raleway:700,500,300' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
\t<link href='";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../../bundles/boodcodecontact/css/style.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        echo "    
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t";
        // line 15
        $this->displayBlock('main', $context, $blocks);
        // line 16
        echo "\t\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "\t\t</div>
\t</div>
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\t\t";
        // line 18
        echo "\t\t\t";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script>
\t<script>
\t\$('ul li.div_1_2').hover(function(){
\t\t\$(this).children('ul').show();
\t},function(){
\t\t\$(this).children('ul').hide();
\t})
\t</script>

";
    }

    public function getTemplateName()
    {
        return "BoodcodeContactBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  88 => 22,  84 => 18,  82 => 17,  79 => 16,  74 => 15,  68 => 19,  65 => 16,  63 => 15,  56 => 12,  50 => 10,  43 => 7,  40 => 6,  33 => 5,);
    }
}

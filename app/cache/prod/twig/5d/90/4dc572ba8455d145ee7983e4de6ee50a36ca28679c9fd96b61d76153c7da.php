<?php

/* BoodcodeFranceBundle:Sitemaps:sitemap.xml.twig */
class __TwigTemplate_5d904dc572ba8455d145ee7983e4de6ee50a36ca28679c9fd96b61d76153c7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
";
        // line 3
        if (isset($context["urls"])) { $_urls_ = $context["urls"]; } else { $_urls_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_urls_);
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 4
            echo "    <url>";
            // line 5
            echo "        <loc>http://";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if ((strtr($this->getAttribute($_url_, "loc", array()), array("hostname" => "")) == $this->getAttribute($_url_, "loc", array()))) {
                if (isset($context["hostname"])) { $_hostname_ = $context["hostname"]; } else { $_hostname_ = null; }
                echo twig_escape_filter($this->env, $_hostname_, "html", null, true);
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_url_, "loc", array()), "html", null, true);
            } else {
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_url_, "loc", array()), "html", null, true);
            }
            echo "</loc>
";
            // line 6
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if ($this->getAttribute($_url_, "lastmod", array(), "any", true, true)) {
                // line 7
                echo "        <lastmod>";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_url_, "lastmod", array()), "html", null, true);
                echo "</lastmod>
";
            }
            // line 9
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if ($this->getAttribute($_url_, "changefreq", array(), "any", true, true)) {
                // line 10
                echo "        <changefreq>";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_url_, "changefreq", array()), "html", null, true);
                echo "</changefreq>
";
            }
            // line 12
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if ($this->getAttribute($_url_, "priority", array(), "any", true, true)) {
                // line 13
                echo "        <priority>";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_url_, "priority", array()), "html", null, true);
                echo "</priority>
";
            }
            // line 15
            echo "    </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</urlset>";
    }

    public function getTemplateName()
    {
        return "BoodcodeFranceBundle:Sitemaps:sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  74 => 15,  67 => 13,  64 => 12,  57 => 10,  54 => 9,  47 => 7,  44 => 6,  30 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}

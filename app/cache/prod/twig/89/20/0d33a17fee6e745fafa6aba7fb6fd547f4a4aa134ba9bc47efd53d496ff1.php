<?php

/* BoodcodeFranceBundle:Default:clients.html.twig */
class __TwigTemplate_89200d33a17fee6e745fafa6aba7fb6fd547f4a4aa134ba9bc47efd53d496ff1 extends Twig_Template
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
        echo " Clients | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        echo "    
\t<div class=\"container-fluid\">
\t\t<h2>Clients</h1>
\t\t<ul class=\"clients\">
\t\t";
        // line 10
        if (isset($context["clients"])) { $_clients_ = $context["clients"]; } else { $_clients_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_clients_);
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            echo "\t\t
\t\t\t<li>
\t\t\t\t<img class=\"over\" src=\"";
            // line 12
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/clients/" . $_client_) . ".png")), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $_client_, "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 13
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/clients-NB/" . $_client_) . ".png")), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $_client_, "html", null, true);
            echo "\">
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BoodcodeFranceBundle:Default:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  60 => 13,  52 => 12,  44 => 10,  36 => 6,  29 => 5,);
    }
}

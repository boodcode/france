<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_362b1df02cd6389693037b49cd544ce621f76c12aa3dd3a9539e41fb8e0bffc6 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Accueil ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo "    
  <div class=\"container-fluid\">
    <div class=\"row\" style=\"width:50%;margin:30px auto;\">
    <h1>Oops! An Error Occurred</h1>
    <h2>The server returned a \"";
        // line 8
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "\".</h2>

    <div>
      Something is broken. Please e-mail us at [email] and let us know
      what you were doing when this error occurred. We will fix it as soon
      as possible. Sorry for any inconvenience caused.
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  36 => 4,  29 => 3,);
    }
}

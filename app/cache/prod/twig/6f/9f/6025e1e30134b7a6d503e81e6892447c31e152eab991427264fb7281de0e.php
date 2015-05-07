<?php

/* BoodcodeContactBundle:Default:contact_form.html.twig */
class __TwigTemplate_6f9f6025e1e30134b7a6d503e81e6892447c31e152eab991427264fb7281de0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BoodcodeContactBundle::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BoodcodeContactBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "      ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
  ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <h2 class=\"pageTitle2\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("CONTACT", array(), "messages");
        echo "</h2>

    <p>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Merci de compléter les informations ci-dessous<br>afin que nous puissions reprendre contact avec vous au plus vite.", array(), "messages");
        echo "</p>
      ";
        // line 9
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_, array(0 => "BoodcodeContactBundle:Form:fields.html.twig"));
        // line 10
        echo "      ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("novalidate" => "novalidate", "class" => "form")));
        echo "
          <div class=\"div_1_2\">
            ";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "message", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Votre Message"), "class" => "")));
        echo "
            <div class=\"clear\"></div>
            ";
        // line 14
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "message", array()), 'errors');
        echo "
          </div>
          <div class=\"div_1_2\">
            ";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "prenom", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Prénom"), "class" => "w_230")));
        echo " ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "prenom", array()), 'errors');
        echo "
            <div class=\"clear\"></div>
             ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Nom"), "class" => "w_230")));
        echo " ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom", array()), 'errors');
        echo "
            <div class=\"clear\"></div>
            ";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "tel", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Téléphone"), "class" => "w_160")));
        echo "
            <div class=\"clear\"></div>
             ";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mail", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("E-mail"), "class" => "w_300")));
        echo " ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mail", array()), 'errors');
        echo "
            <div class=\"clear\"></div>
            ";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget', array("label" => $this->env->getExtension('translator')->trans("ENVOYER")));
        echo "
            <div class=\"clear\"></div>
            ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (($this->getAttribute($this->getAttribute($_form_, "vars", array()), "valid", array()) == false)) {
            echo " 
              <div class=\"error_mentions\">";
            // line 28
            echo $this->env->getExtension('translator')->getTranslator()->trans("Les champs encadrés sont incorrects ou incomplets.", array(), "messages");
            echo " </div>
            ";
        }
        // line 30
        echo "            </div>
          ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
          
        ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
        <div class=\"clear\"></div>
    <div class=\"clear\"></div>
  ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    //************************************

    \$(function(){
      \$('input[readonly=\"readonly\"]').each(function(){
        \$(this).attr('value', \$(this).next('ul').find('li.selected').text());
      })
      \$('input[readonly=\"readonly\"]').on('click', function(){
        \$(this).next().addClass('open');
      })

    })

    </script>
  ";
    }

    public function getTemplateName()
    {
        return "BoodcodeContactBundle:Default:contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  143 => 37,  134 => 33,  128 => 31,  125 => 30,  120 => 28,  115 => 27,  109 => 25,  100 => 23,  94 => 21,  85 => 19,  76 => 17,  69 => 14,  63 => 12,  56 => 10,  53 => 9,  49 => 8,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}

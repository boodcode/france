<?php

/* BoodcodeFranceBundle:Default:about.html.twig */
class __TwigTemplate_d90803cb1b944628779d43d04a422ad7c4499c4d41676e6e7800d2b9b7118baa extends Twig_Template
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
        echo " À propos | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        echo "    
\t<div class=\"container-fluid\">
\t\t<h2>A propos</h2>
\t\t<h3>Formations</h3>
\t\t<ul>
\t\t\t<li>BAC+4 ESAM - Ecole Supérieure des Arts Modernes - Graphiste Publicitaire</li>
\t\t</ul>
\t\t<h3>Secteurs d'activité</h3>
\t\t\t<ul>
\t\t\t\t<li>Communication Évènementielle</li>
\t\t\t\t<li>Communication Institutionnelle</li>
\t\t\t\t<li>Luxe, Banques, Finance, Assurances...</li>
\t\t\t\t<li>B to B</li>
\t\t\t</ul>

\t\t<h3>Compétences</h3>
\t\t<ul class=\"col_3\">
\t\t\t<li>Identité visuelle</li>
\t\t\t<ul>
\t\t\t\t<li>Charte graphique, Image de marque, cahier de style.</li>
\t\t\t\t<li>Création de Thèmes Microsoft Powerpoint & Word</li>
\t\t\t</ul>
\t\t\t</ul>
\t\t</ul>
\t\t<ul class=\"col_3\">
\t\t\t<li>Edition / Print</li>
\t\t\t<ul>
\t\t\t\t<li>Magazine, brochure, presse</li>
\t\t\t\t<li>Plaquettes commerciales, affiches, catalogues</li>
\t\t\t\t<li>Annonces presse</li>
\t\t\t\t<li>Chemises, kits pochette, illustrations, dessins ...</li>
\t\t\t</ul>
\t\t</ul>
\t\t<ul class=\"col_3\">
\t\t\t<li>Communication Evénementielle </li>
\t\t\t<ul>
\t\t\t\t<li>Affiches</li>
\t\t\t\t<li>Cahiers de style de stand, création de stands, stands parapluie, habillage stands, dessins en perspective</li>
\t\t\t\t<li>Habillage tentes, recovering véhicules, kakemonos</li>
\t\t\t\t
\t\t\t</ul>
\t\t</ul>

\t\t<h3>Points forts</h3>
\t\t<ul>
\t\t\t<li>Travail en équipe, facilité d’adaptation </li>
\t\t\t<li>Très bonne analyse des besoins à mettre en place  pour les projets</li>
\t\t\t<li>Dessin d’ébauche</li>
\t\t\t<li>Très bonne connaissance de la chaîne graphique</li>
\t\t\t<li>Suivi BAT, réalisation des fichiers techniques et calage machine chez l’imprimeur</li>
\t\t\t<li>Tablette graphique</li>
\t\t</ul>

\t\t<h3>Logiciels</h3>
\t\t<ul>
\t\t\t<li>Suite Adobe CS5-CS6 <span class=\"note_4sur4\"></span>
\t\t\t<li>Adobe Indesign, XPress <span class=\"note_4sur4\"></span>
\t\t\t<li>Adobe Photoshop, Adobe Illustrator <span class=\"note_4sur4\"></span>
\t\t\t<li>Microsoft Powerpoint <span class=\"note_3sur4\"></span>
\t\t\t<li>Microsoft Word & Excel <span class=\"note_2sur4\"></span>
\t\t</ul>

\t

\t\t<h3>Langues</h3>
\t\t<ul>
\t\t\t<li>Espagnol <span class=\"note_4sur4\"></span>
\t\t\t<li>Anglais <span class=\"note_2sur4\"></span>
\t\t</ul>

\t\t<h3>Centres d'intérêt</h3>
\t\t<ul>
\t\t\t<li>Dessin en atelier professionnel, art, design, décoration, mode, musée, tendance, cinéma, cuisine, voyages.</li>
\t\t</ul>



\t</div>
";
    }

    public function getTemplateName()
    {
        return "BoodcodeFranceBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  29 => 5,);
    }
}

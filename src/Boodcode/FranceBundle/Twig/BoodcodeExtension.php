<?php
// src/Bodcode/FranceBundle/Twig/BoodcodeExtension.php
namespace Boodcode\FranceBundle\Twig;

class BoodcodeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('nl2p', array($this, 'nl2paragraph')),
            new \Twig_SimpleFilter('nl2li', array($this, 'nl2liste')),
        );
    }

    public function nl2paragraph($string)
    {
        $string =nl2br($string);
        $arr_str = preg_split('/<br>|<br \/>/', $string);
        $ps = "";
        foreach ($arr_str as $p ) {
        	$ps.="<p>".$p."</p>";
        }

        return $ps;
    }

    public function nl2liste($string)
    {
        $string =nl2br($string);
        $arr_str = preg_split('/<br>|<br \/>/', $string);
        $liste = "<ul>";
        foreach ($arr_str as $p ) {
        	$liste.="<li><span>".$p."</span></li>";
        }
        $liste .= "</ul>";

        return $liste;
    }

     public function getName()
    {
        return 'boodcode_extension';
    }

}
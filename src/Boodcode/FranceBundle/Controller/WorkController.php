<?php
// src/Boodcode/FranceBundle/Controller/WorkController.php


namespace Boodcode\FranceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;

class WorkController extends Controller
{

  public function translationAction($name)
  {
    return $this->render('BoodcodeFranceBundle:Work:translation.html.twig', array(
      'name' => $name
    ));
  }
}
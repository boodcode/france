<?php
// src/Boodcode/FranceBundle/Beta/BetaHTML.php

namespace Boodcode\FranceBundle\Beta;

use Symfony\Component\HttpFoundation\Response;

class BetaHTML
{
  // La date de fin de la version bêta :
  // - Avant cette date, on affichera un compte à rebours (J-3 par exemple)
  // - Après cette date, on n'affichera plus le « bêta »
  protected $endDate;

  public function __construct($endDate)
  {
    $this->endDate = new \Datetime($endDate);
  }

  // Méthode pour ajouter le « bêta » à une réponse
  public function displayBeta(Response $response, $remainingDays)
  {
    $content = $response->getContent();

    // Code à rajouter
    $html = '<span style="color: red; font-size: 0.5em;"> - Beta J-'.(int) $remainingDays.' !</span>';

    // Insertion du code dans la page, dans le premier <h1>
    $content = preg_replace(
      '#<h1>(.*?)</h1>#iU',
      '<h1>$1'.$html.'</h1>',
      $content,
      1
    );

    // Modification du contenu dans la réponse
    $response->setContent($content);

    return $response;
  }
}
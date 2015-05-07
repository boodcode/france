<?php
// src/Boodcode/FranceBundle/Validator/Antiflood.php

namespace Boodcode\FranceBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Antiflood extends Constraint
{
  public $message = "Vous avez déjà posté un message il y a moins de 15 secondes, merci d'attendre un peu.";

  public function validateBy()
  {
  	return 'boodcode_france_antiflood'; // appel au service via son alias
  }
}
<?php

namespace Boodcode\FranceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CKeditorType extends AbstractType
{
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(
			array(
				'attr' => array('class' => 'ckeditor') //on ajoute la classe
			)
		);
	}

	public function getParent() //on ajoute l'heritage de formulaire
	{
		return 'textarea';
	}

	public function getName()
	{
		return 'ckeditor';
	}
}
<?php

namespace Boodcode\ContactBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            /*
            ->add('civ', 'choice', array(
                'choices'=> array(
                    'Mme.'    => 'Mme',
                    'M.'  =>  'M.'
                    ),
                'expanded' => true,
                'multiple' => false,
                'data' => 'Mme.'
                ))
            */
            ->add('civ', 'hidden', array(
                'data' => 'M.'
            ))
            ->add('prenom')
            ->add('nom')
            
            /*
            ->add('adresse', null, array('required'=>false))
            ->add('cp')
            */
            ->add('cp', 'hidden', array(
                'data' => '99999'
            ))
            /*
            ->add('ville', null, array('required'=>false))
            ->add('pays', 'country', array(
                'empty_value' => 'Pays',
                'preferred_choices' => array(
                    'FR','US', 'UK','ES', 'IT','DE', 'CN', 'JP','KR', 'RU' 
                )
            ))
            */
            ->add('pays', 'hidden',array(
                'data' => 'FR'
                ))
            
            ->add('tel', null, array('required'=>false))
            ->add('mail')
            /*
            ->add('contactObjet', 'entity', array(
                'class' => 'BoodcodeContactBundle:ContactObjet',
                'property' => 'mailObjet',
                'expanded' => false,
                'multiple' => false,
                'empty_value' => 'Objet'
            ))
            */
            ->add('message')
            /*
            ->add('attachment', new AttachmentType(), array('required' => false))
            ->add('newsletter', 'checkbox', array('required' => false))
            */
            ->add('save', 'submit')
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Boodcode\ContactBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'boodcode_contactbundle_contact';
    }
}

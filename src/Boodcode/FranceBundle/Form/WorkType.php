<?php

namespace Boodcode\FranceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkType extends AbstractType
{

   

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ordre')
            ->add('titre',      'text')
            ->add('description','textarea')
            ->add('details',    'textarea')
            ->add('home_width')
            ->add('home_height')
            ->add('publication','checkbox', array('required'=> false ))
           // ->add('homepageImage', new HomepageImageType())
            ->add('image',     'collection', array(
                    'type'          => new ImageType(),
                    'allow_add'     => true,
                    'allow_delete'  => true
                ))
            ->add('save',       'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Boodcode\FranceBundle\Entity\Work'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'boodcode_francebundle_work';
    }
}

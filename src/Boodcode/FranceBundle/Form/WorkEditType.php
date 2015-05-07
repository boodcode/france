<?php

namespace Boodcode\FranceBundle\Form;
use Boodcode\FranceBundle\Entity\ImageRepository;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkEditType extends AbstractType
{
    public function __construct($id)
    {
        $this->id = $id; // variable à passer dans le query_builder
    }


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        //$builder->remove('image');

        $work_id = $this->id;
        $builder->add('image', 'entity', array(
            'class' => 'BoodcodeFranceBundle:Image',
            'property' => 'id',
            'query_builder' => function(ImageRepository $repo) use($work_id){
                    return $repo->createQueryBuilder('i')
                                ->where("i.work = :id")
                                ->andWhere("i.url NOT LIKE '%home%'")
                                ->orderBy("i.ordre","ASC")
                                ->setParameter('id', $work_id);
                },
            'expanded' => true,
            'multiple' => true,
            'empty_value' => 'activer au moins une image'
            ));
            
                
    }
    
   public function getParent()
   {
        return new WorkType();
   }

    /**
     * @return string
     */
    public function getName()
    {
        return 'boodcode_francebundle_work_edit';
    }
}

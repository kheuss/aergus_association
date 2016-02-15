<?php
    namespace AERGUS\associationBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use AERGUS\associationBundle\Entity\Membre;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolverInterface;

    class MembreType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                
                ->add('numeroDeChambre', 'text',array(
                    'label'=>'Numero de chambre',
                    'attr'=> array(
                        'placeholder'=>'Ajouter le numero de chambre')
                    ))
                ->add('block', 'entity', array(
                    'class' => 'AERGUS\associationBundle\Entity\Block',
                    'label' =>'Block',
                    'property'=>'block',
                    'multiple'=>false,
                ))
                ->add('village', 'entity', array(
                    'class' => 'AERGUS\associationBundle\Entity\Village',
                    'label' =>'Village',
                    'property'=>'village',
                    'multiple'=>false,
                ))
                ->add('section', 'entity', array(
                    'class' => 'AERGUS\associationBundle\Entity\Section',
                    'label' =>'Section',
                    'property'=>'libelle',
                    'multiple'=>false,
                ))

                ->add('niveau', 'entity', array(
                    'class' => 'AERGUS\associationBundle\Entity\Niveau',
                    'label' =>'Niveau',
                    'property'=>'niveau',
                    'multiple'=>false,
                ))
                
                ->add('fonction', 'entity', array(
                    'class' => 'AERGUS\associationBundle\Entity\Fonction',
                    'label' =>'Fonction',
                    'property'=>'libelle',
                    'multiple'=>false,
                ))
            ;
        }

        public function setDefaultOptions(OptionsResolverInterface $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => 'AERGUS\associationBundle\Entity\Membre',
            ));
        }

        public function getName()
        {
            return '';
        }
    }
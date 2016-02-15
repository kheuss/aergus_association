<?php
    namespace AERGUS\associationBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use AERGUS\associationBundle\Entity\Bureau;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolverInterface;

    class BureauType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('nom', 'text',array(
                    'label'=>'Nom du Bureau',
                    'attr'=> array(
                        'placeholder'=>'Ajouter un nouveau bureau')
                    ))
                ->add('programme', 'entity', array(
                    'class' => 'AERGUS\associationBundle\Entity\Programme',
                    'label' =>false,
                    'property'=>'path',
                    'multiple'=>false,
                ))
            ;
        }

        public function setDefaultOptions(OptionsResolverInterface $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => 'AERGUS\associationBundle\Entity\Bureau',
            ));
        }

        public function getName()
        {
            return '';
        }
    }
<?php

    namespace AERGUS\associationBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use AERGUS\associationBundle\Entity\Ressortissants;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolverInterface;

    class RessortissantMembreType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
              ->remove('section');
        }

        public function getName()
        {
          return 'oc_platformbundle_advert_edit';
        }

        public function getParent()
        {
          return new RessortissantsType();
        }
    }
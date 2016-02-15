<?php

	namespace AERGUS\associationBundle\Form;

	use AERGUS\associationBundle\Entity\Niveau;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	class NiveauType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('niveau', 'text',array('label'=>false,
					'attr'=>array('placeholder'=>'Ajouter un niveau')))	
			;
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => 'AERGUS\associationBundle\Entity\Niveau'
			));
		}

		public function getName()
		{
			return 'aergus_association_niveau';
		}
	}
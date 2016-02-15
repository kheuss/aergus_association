<?php

	namespace AERGUS\associationBundle\Form;

	use AERGUS\associationBundle\Entity\Ufr;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	class UfrType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('libelle', 'text',array('label'=>'Ufr'))
				->add('nomComplet', 'text',array('label'=>'Nom complet'))
			;
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => 'AERGUS\associationBundle\Entity\Ufr'
			));
		}

		public function getName()
		{
			return 'aergus_association_ufr';
		}
	}
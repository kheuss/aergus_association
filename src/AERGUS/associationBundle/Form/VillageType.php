<?php

	namespace AERGUS\associationBundle\Form;

	use AERGUS\associationBundle\Entity\Village;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	class VillageType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('village', 'text',array('label'=>false,
					'attr'=>array('placeholder'=>'Ajouter un nouveau village')))	
			;
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => 'AERGUS\associationBundle\Entity\Village'
			));
		}

		public function getName()
		{
			return 'aergus_association_village';
		}
	} 
<?php

	namespace AERGUS\associationBundle\Form;

	use AERGUS\associationBundle\Entity\Section;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	class SectionType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('libelle', 'text',array('label'=>false,
					'attr'=>array('placeholder'=>'Ajouter une section')))	
			;
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => 'AERGUS\associationBundle\Entity\Section'
			));
		}

		public function getName()
		{
			return 'aergus_association_section';
		}
	} 
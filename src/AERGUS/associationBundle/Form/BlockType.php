<?php

	namespace AERGUS\associationBundle\Form;

	use AERGUS\associationBundle\Entity\Block;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	class BlockType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('block', 'text',array('label'=>false,
					'attr'=>array('placeholder'=>'Ajouter un nouveau block')))	
			;
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => 'AERGUS\associationBundle\Entity\Block'
			));
		}

		public function getName()
		{
			return 'aergus_association_block';
		}
	} 
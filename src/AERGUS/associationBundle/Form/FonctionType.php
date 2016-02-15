<?php

	namespace AERGUS\associationBundle\Form;

	use AERGUS\associationBundle\Entity\Fonction;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	class FonctionType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('libelle', 'text',array('label'=>false,
					'attr'=>array('placeholder'=>'Ajouter une nouvelle fonction')))	
			;
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => 'AERGUS\associationBundle\Entity\Fonction'
			));
		}

		public function getName()
		{
			return 'aergus_association_fonction';
		}
	} 
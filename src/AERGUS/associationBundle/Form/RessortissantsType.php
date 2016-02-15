<?php

	namespace AERGUS\associationBundle\Form;

	use AERGUS\associationBundle\Entity\Ressortissants;
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;
	class RessortissantsType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('nom', 'text',array(
					'attr'=>array('placeholder'=>'Saisissez le nom du ressortissant')
					))
				->add('prenom', 'text',array(
					'attr'=>array('placeholder'=>'Saisissez le prenom du ressortissant')
					))
				->add('numeroDeTelephone', 'text',array(
					'attr'=>array('placeholder'=>'Saisissez le numero du ressortissant')
					))
				->add('dateDeNaissance', 'date', array(
                                                	'widget' => 'single_text',
                                                	'input' => 'datetime',
                                                	'format' => 'dd/MM/yyyy',
                                                	'attr' => array('class' => 'date','placeholder'=>'Saisissez la date de naissance'),
                                                )
				)
				->add('section','entity',array(
					'class'=>'AERGUSassociationBundle:Section',
					'property'=>'libelle',
					'multiple'=>false,
					))
				->add('anneeVenu', 'text',array(
					'attr'=>array('placeholder'=>'Saisissez l\'annee qu\'il a eu son bac')
					))
			;
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => 'AERGUS\associationBundle\Entity\Ressortissants'
			));
		}

		public function getName()
		{
			return 'aergus_association_ressortissant';
		}
	} 
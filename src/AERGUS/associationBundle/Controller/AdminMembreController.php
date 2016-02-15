<?php

	namespace AERGUS\associationBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use AERGUS\associationBundle\Entity\Membre;
	use AERGUS\associationBundle\Entity\MembreRepository;
	use AERGUS\associationBundle\Form\MembreType; 
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\JsonResponse;

	class AdminMembreController extends Controller
	{
	    /*
	        Page d'accueil des membres
	    */

	    public function indexAction(Request $request, $bureau){

	    	$membres=$this->getDoctrine()
	    		->getManager()
            	->getRepository('AERGUSassociationBundle:Membre')
            	->findAllMembreBureau($bureau);

            $ressortissants=$this->getDoctrine()
            	->getRepository('AERGUSassociationBundle:Ressortissants')
            	->findBy(array('etat'=>true));

            return $this->render('AERGUSassociationBundle:AdminMembre:index.html.twig',array(
                'membres'=>$membres,
                'ressortissants'=>$ressortissants,
                'bureau' => $bureau,
            ));
	    }

	    public function ajouterAction(Request $request, $bureau){
	    	if($request->isXmlHttpRequest()){
	    		$type = $request->request->get('type');
	    		$id = $request->request->get('id');
	    		if($type=='formulaire'){
	            	$ressortissant=$this->getDoctrine()
	                	->getRepository('AERGUSassociationBundle:Ressortissants')
	                	->find($id);
	                $membre= new Membre();
	                $form = $this->get('form.factory')->create(new MembreType(), $membre);

	            	return $this->render('AERGUSassociationBundle:AdminMembre:ajouter.html.twig',array(
	                	'form'=>$form->createView(),
	                	'ressortissant'=>$ressortissant,
	                	'id'=>$id,
	                	'bureau'=>$bureau,
                		'type' => $type
	            	));
	    		}
	    		else{
	    			$chambre = $request->request->get('chambre');
	    			$idSection = $request->request->get('section');
	    			$idNiveau = $request->request->get('niveau');
	    			$idBlock = $request->request->get('block');
	    			$idVillage = $request->request->get('village');
	    			$membreBureau=$request->request->get('membreBureau');
	    			$idFonction=$request->request->get('fonction');
    				
    				$fonction=$this->getDoctrine()
                		->getRepository('AERGUSassociationBundle:Fonction')
                		->find($idFonction);

	    			$bureauMembre=$this->getDoctrine()
	                	->getRepository('AERGUSassociationBundle:Bureau')
	                	->findOneBy(array('nom'=>$bureau));

	                $idMembre='M'.$id.'B'.$bureauMembre->getId();

	                $ressortissant=$this->getDoctrine()
	                	->getRepository('AERGUSassociationBundle:Ressortissants')
	                	->find($id);

	                $section=$this->getDoctrine()
	                	->getRepository('AERGUSassociationBundle:Section')
	                	->find($idSection);

	                $village=$this->getDoctrine()
	                	->getRepository('AERGUSassociationBundle:Village')
	                	->find($idVillage);

	                $niveau=$this->getDoctrine()
	                	->getRepository('AERGUSassociationBundle:Niveau')
	                	->find($idNiveau);

	                $block=$this->getDoctrine()
	                	->getRepository('AERGUSassociationBundle:Block')
	                	->find($idBlock);
	                
	                $membre= new Membre();
	                $membre->setId($idMembre);
	                $membre->setBureau($bureauMembre);
	                $membre->setRessortissant($ressortissant);
	                $membre->setNumeroDeChambre($chambre);
	                $membre->setBlock($block);
	                $membre->setVillage($village);
	                $membre->setNiveau($niveau);
	                $membre->setSection($section);

	    			if($membreBureau=='true'){
	                	$membre->setFonction($fonction);
	    			}
	                $em = $this->getDoctrine()->getManager();
            		$em->persist($membre);
            		$em->flush();

            		$ressortissants=$this->getDoctrine()
		            	->getRepository('AERGUSassociationBundle:Ressortissants')
		            	->findBy(array('etat'=>true));

		            return $this->render('AERGUSassociationBundle:AdminMembre:ajouter.html.twig',array(
	                	'ressortissants'=>$ressortissants,
                		'type' => $type,
                		'bureau'=>$bureau,
	            	));
			    }
        	}
        	else{
            	throw new \Exception("Erreur");
        	}
	    }

	}
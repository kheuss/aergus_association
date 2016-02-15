<?php

namespace AERGUS\associationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AERGUS\associationBundle\Entity\Ressortissants;
use AERGUS\associationBundle\Form\RessortissantsType; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminRessortissantsController extends Controller
{

    public function indexAction()
    {
    	$ressortissants=$this->getDoctrine()
            ->getRepository('AERGUSassociationBundle:Ressortissants')
            ->findBy(array('etat'=>true));

        $ressortissant = new Ressortissants();
		$form = $this->get('form.factory')->create(new RessortissantsType(), $ressortissant);
        return $this->render('AERGUSassociationBundle:AdminRessortissants:index.html.twig',array(
            'ressortissants'=>$ressortissants,
            'form' => $form->createView()
        ));
    }

    public function ajouterAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $numero = $request->request->get('numero');
            $naissance = $request->request->get('naissance');
            $idSection = $request->request->get('section');
            $annee = $request->request->get('annee');

            $section=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Section')
                ->find($idSection);

            $ressortissant= new Ressortissants();
            $ressortissant->setNom($nom);
            $ressortissant->setPrenom($prenom);
            $ressortissant->setDateDeNaissance($naissance);
            $ressortissant->setNumeroDeTelephone($numero);
            $ressortissant->setAnneeVenu($annee);
            $ressortissant->setSection($section);

            $em = $this->getDoctrine()->getManager();
            $em->persist($ressortissant);
            $em->flush(); 
            $ressortissants=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->findBy(array('etat'=>true));
            return $this->render('AERGUSassociationBundle:AdminRessortissants:ajouter.html.twig',array(
                'ressortissants'=>$ressortissants,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    } 

    public function supprimerAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');

            $ressortissant=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->find($id);
            $ressortissant->setEtat(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($ressortissant);
            $em->flush(); 
            $ressortissants=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->findBy(array('etat'=>true));
            return $this->render('AERGUSassociationBundle:AdminRessortissants:supprimer.html.twig',array(
                'ressortissants'=>$ressortissants,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function modifierAction(Request $request)
	{
		if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');

            $ressortissant=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->find($id);
            $form = $this->get('form.factory')->create(new RessortissantsType(), $ressortissant);
            return $this->render('AERGUSassociationBundle:AdminRessortissants:modifier.html.twig',array(
                'form' => $form->createView(),
                'id'=> $id,
        ));
        }
        else{
            throw new \Exception("Erreur");
        }
	} 

    public function modifierConfirmerAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');
            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $numero = $request->request->get('numero');
            $naissance = $request->request->get('naissance');
            $idSection = $request->request->get('section');
            $annee = $request->request->get('annee');

            $section=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Section')
                ->find($idSection);

            $ressortissant=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->find($id);
            $ressortissant->setNom($nom);
            $ressortissant->setPrenom($prenom);
            $ressortissant->setDateDeNaissance($naissance);
            $ressortissant->setNumeroDeTelephone($numero);
            $ressortissant->setAnneeVenu($annee);
            $ressortissant->setSection($section);

            $em = $this->getDoctrine()->getManager();
            $em->persist($ressortissant);
            $em->flush(); 
            $ressortissants=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->findBy(array('etat'=>true));
            return $this->render('AERGUSassociationBundle:AdminRessortissants:modifierConfirmer.html.twig',array(
                'ressortissants'=>$ressortissants,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    } 

    public function afficherAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');

            $ressortissant=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->find($id); 
            $section=$ressortissant->getSection();
            $ufr=$section->getUfr();

            return $this->render('AERGUSassociationBundle:AdminRessortissants:afficher.html.twig',array(
                'ressortissant'=>$ressortissant,
                'ufr'=>$ufr,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function cocherRestaurerAction(Request $request)
    {
        if($request->isXmlHttpRequest()){

            $ressortissants=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->findBy(array('etat'=>false)); 

            return $this->render('AERGUSassociationBundle:AdminRessortissants:cocherRestaurer.html.twig',array(
                'ressortissants'=>$ressortissants
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function restaurerAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $tableauId = $request->request->get('tableauId');
            $em = $this->getDoctrine()->getManager();
            $ids=json_decode($tableauId);
            foreach ($ids as $id) {
                $ressortissant=$this->getDoctrine()
                    ->getRepository('AERGUSassociationBundle:Ressortissants')
                    ->find($id);
                $ressortissant->setEtat(true);
                $em->persist($ressortissant);
                $em->flush();      
            }

            $ressortissants=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->findBy(array('etat'=>true)); 

            return $this->render('AERGUSassociationBundle:AdminRessortissants:restaurer.html.twig',array(
                'ressortissants'=>$ressortissants
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function supprimerMultipleAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $tableauId = $request->request->get('tableauId');
            $em = $this->getDoctrine()->getManager();
            $ids=json_decode($tableauId);
            foreach ($ids as $id) {
                $ressortissant=$this->getDoctrine()
                    ->getRepository('AERGUSassociationBundle:Ressortissants')
                    ->find($id);
                $ressortissant->setEtat(false);
                $em->persist($ressortissant);
                $em->flush();      
            }

            $ressortissants=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ressortissants')
                ->findBy(array('etat'=>true)); 

            return $this->render('AERGUSassociationBundle:AdminRessortissants:supprimerMultiple.html.twig',array(
                'ressortissants'=>$ressortissants
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

}
<?php

namespace AERGUS\associationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AERGUS\associationBundle\Entity\Ufr;
use AERGUS\associationBundle\Entity\Section;
use AERGUS\associationBundle\Form\UfrType; 
use AERGUS\associationBundle\Form\SectionType; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminOrientationController extends Controller
{
    /*
        Page d'accueil des ufrs
    */

    public function indexAction(Request $request)
    {
        $ufrs=$this->getDoctrine()
            ->getRepository('AERGUSassociationBundle:Ufr')
            ->findAll();
        $ufr = new Ufr();
        $form = $this->get('form.factory')->create(new UfrType(), $ufr);
        return $this->render('AERGUSassociationBundle:AdminOrientation:index.html.twig',array(
            'ufrs'=>$ufrs,
            'form' => $form->createView(),
        ));

    }

    /*
        Suppression d'un ufr
    */

    public function supprimerUfrAction(Request $request, $libelle){
        if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');
            $ufr=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->find($id);
            return $this->render('AERGUSassociationBundle:AdminOrientation:supprimerUfr.html.twig',array(
                'ufr'=>$ufr
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    /*
        Confirmation de la suppresion d'un ufr
    */

    public function supprimerConfirmedUfrAction(Request $request, $libelle){
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $id = $request->request->get('id');
            $ufr=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->find($id);
            $em->remove($ufr);
            $em->flush();
            $ufrs=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminOrientation:supprimerConfirmedUfr.html.twig',array(
                'ufrs'=>$ufrs,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    /*
        Liste des sections pour un ufr
    */
    public function listeAction(Request $request, $id)
    {
        $verif=false;
        if($request->isXmlHttpRequest()){
            $ufr=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->find($id);
            $section = new Section();
            $form = $this->get('form.factory')->create(new SectionType(), $section);
            $sections=$ufr->getSections();
            if($sections==null){
               $verif=true;
            }
            return $this->render('AERGUSassociationBundle:AdminOrientation:liste.html.twig',array(
                'sections'=>$sections,
                'form'=>$form->createView(),
                'id'=>$id,
                'verif'=>$verif,
            ));
            
        }
        else{
            throw new \Exception("Erreur");
            
        }
    }
        
    /*
        Ajouter un ufr
    */
    public function ajouterAction(Request $request)
	{
        $verif=false;
		if($request->isXmlHttpRequest()){
            $libelle = $request->request->get('libelle'); 
            $nomComplet = $request->request->get('nomComplet');
            $ufrverifs=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->findAll();
            foreach ($ufrverifs as $ufr) {
                if($ufr->getLibelle()==$libelle && $ufr->getNomComplet()==$nomComplet){
                    $verif=true;
                }
            }
            if($verif==true){
                return new Response('error');
            }
            $ufr = new Ufr();
            $ufr->setLibelle($libelle);
            $ufr->setNomComplet($nomComplet);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($ufr);
            $em->flush(); 
            $ufrs=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminOrientation:ajouter.html.twig',array(
                'ufrs'=>$ufrs,
            ));
        }
        else{
            throw new \Exception("Erreur");
            
        }
	} 

    /*
        Ajouter une section pour un ufr
    */

    public function addSectionAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $libelle = $request->request->get('libelle'); 
            $id = $request->request->get('id');
            $ufr=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->find($id);
            $section = new Section();
            $section->setLibelle($libelle);
            $section->setUfr($ufr);
            $validator = $this->get('validator');
            $listErrors = $validator->validate($section); 
            $em = $this->getDoctrine()->getManager();
            $em->persist($section);
            $em->flush(); 
            $sections=$ufr->getSections();
            return $this->render('AERGUSassociationBundle:AdminOrientation:addSection.html.twig',array(
                'sections'=>$sections,
            ));
        }
        else{
            throw new \Exception("Erreur");
            
        }
    } 

    /*
        Modifier un ufr
    */

    function modifierUfrAction(Request $request, $libelle){

        if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');
            $ufr=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->find($id);
            $form = $this->get('form.factory')->create(new UfrType(), $ufr);
            return $this->render('AERGUSassociationBundle:AdminOrientation:modifierUfr.html.twig',array(
                'ufr'=>$ufr,
                'form' => $form->createView(),
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    } 

    /*
        Modifier un ufr Confirmation
    */

    function modifierConfirmUfrAction(Request $request){

        if($request->isXmlHttpRequest()){
            $libelle = $request->request->get('libelle'); 
            $nomComplet = $request->request->get('nomComplet');
            $id = $request->request->get('id');
            $ufr=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->find($id);
            $ufr->setLibelle($libelle);
            $ufr->setNomComplet($nomComplet);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($ufr);
            $em->flush(); 
            $ufrs=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Ufr')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminOrientation:modifierConfirmUfr.html.twig',array(
                'ufrs'=>$ufrs,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    } 

    /*
        Modifier une section
    */

    function modifierUfrSectionAction(Request $request, $libelle){

        if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');
            $section=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Section')
                ->find($id);
            $form = $this->get('form.factory')->create(new SectionType(), $section);
            return $this->render('AERGUSassociationBundle:AdminOrientation:modifierUfrSection.html.twig',array(
                'section'=>$section,
                'form' => $form->createView(),
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    } 

    /*
        Modifier une section Confirmation
    */

    function modifierConfirmUfrSectionAction(Request $request){

        if($request->isXmlHttpRequest()){
            $libelle = $request->request->get('libelle'); 
            $id = $request->request->get('id');
            $section=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Section')
                ->find($id);
            $section->setLibelle($libelle);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($section);
            $em->flush();

            $ufr=$section->getUfr();
            $sections=$ufr->getSections();
            return $this->render('AERGUSassociationBundle:AdminOrientation:modifierConfirmUfrSection.html.twig',array(
                'sections'=>$sections,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    } 

    /*
        Suppression d'un ufr
    */

    public function supprimerUfrSectionAction(Request $request, $libelle){
        if($request->isXmlHttpRequest()){
            $id = $request->request->get('id');
            $section=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Section')
                ->find($id);
            return $this->render('AERGUSassociationBundle:AdminOrientation:supprimerUfrSection.html.twig',array(
                'section'=>$section
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    /*
        Confirmation de la suppresion d'une section
    */

    public function supprimerConfirmedUfrSectionAction(Request $request, $libelle){
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $id = $request->request->get('id');
            $section=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Section')
                ->find($id);

            $ufr=$section->getUfr();
            $em->remove($section);
            $em->flush();
            $sections=$ufr->getSections();
            return $this->render('AERGUSassociationBundle:AdminOrientation:supprimerConfirmedUfrSection.html.twig',array(
                'sections'=>$sections,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }
}
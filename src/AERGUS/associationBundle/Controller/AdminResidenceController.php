<?php

namespace AERGUS\associationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AERGUS\associationBundle\Entity\Block;
use AERGUS\associationBundle\Entity\Village;
use AERGUS\associationBundle\Form\BlockType; 
use AERGUS\associationBundle\Form\VillageType; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminResidenceController extends Controller{

    /*
        Page d'accueil des residences
    */

    public function indexAction(Request $request)
    {
        $villages=$this->getDoctrine()
            ->getRepository('AERGUSassociationBundle:Village')
            ->findAll();
        $village = new Village();
        $formVillage = $this->get('form.factory')->create(new VillageType(), $village);

        $blocks=$this->getDoctrine()
            ->getRepository('AERGUSassociationBundle:Block')
            ->findAll();
        $block = new Block();
        $formBlock = $this->get('form.factory')->create(new BlockType(), $block);

        return $this->render('AERGUSassociationBundle:AdminResidence:index.html.twig',array(
            'villages'=>$villages,
            'formVillage' => $formVillage->createView(),
            'blocks'=>$blocks,
            'formBlock' => $formBlock->createView(),
        ));

    }

    public function ajouterVillageAction(Request $request)
    {   
        if($request->isXmlHttpRequest())
        {    
            $nom = $request->request->get('nom');
            $village = new Village();
            $village->setVillage($nom);
            $em = $this->getDoctrine()->getManager();
            $em->persist($village);
            $em->flush(); 
            
            $villages=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Village')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminResidence:ajouterVillage.html.twig',array(
                'villages'=>$villages,
            ));
        }
        else{
            throw new \Exception("Erreur");
            
        }

    }

    public function ajouterBlockAction(Request $request)
    {   
        if($request->isXmlHttpRequest())
        {    
            $nom = $request->request->get('nom');
            $block = new Block();
            $block->setBlock($nom);
            $em = $this->getDoctrine()->getManager();
            $em->persist($block);
            $em->flush(); 
            
            $blocks=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Block')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminResidence:ajouterBlock.html.twig',array(
                'blocks'=>$blocks,
            ));
        }
        else{
            throw new \Exception("Erreur");
            
        }

    }

    public function deleteVillageAction(Request $request)
    {   
        if($request->isXmlHttpRequest())
        {    
            $id = $request->request->get('id');
            $village=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Village')
                ->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($village);
            $em->flush();
            
            $villages=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Village')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminResidence:deleteVillage.html.twig',array(
                'villages'=>$villages,
            ));
        }
        else{
            throw new \Exception("Erreur");
            
        }

    }

    public function deleteBlockAction(Request $request)
    {   
        if($request->isXmlHttpRequest())
        {    
            $id = $request->request->get('id');
            $block=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Block')
                ->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($block);
            $em->flush();
            
            $blocks=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Block')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminResidence:deleteBlock.html.twig',array(
                'blocks'=>$blocks,
            ));
        }
        else{
            throw new \Exception("Erreur");
            
        }

    }
}
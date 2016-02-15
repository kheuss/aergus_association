<?php

namespace AERGUS\associationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AERGUS\associationBundle\Entity\Bureau;
use AERGUS\associationBundle\Entity\Programme;
use AERGUS\associationBundle\Entity\Fonction;
use AERGUS\associationBundle\Entity\Niveau;
use AERGUS\associationBundle\Form\FonctionType; 
use AERGUS\associationBundle\Form\ProgrammeType; 
use AERGUS\associationBundle\Form\BureauType; 
use AERGUS\associationBundle\Form\NiveauType; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminBureauController extends Controller
{
    /*
        Page d'accueil des bureaux
    */

    public function indexAction(Request $request)
    {
        $paths=array();
        $bureaux=$this->getDoctrine()
            ->getRepository('AERGUSassociationBundle:Bureau')
            ->findAll();

        $fonctions=$this->getDoctrine()
            ->getRepository('AERGUSassociationBundle:Fonction')
            ->findAll();

        $niveaux=$this->getDoctrine()
            ->getRepository('AERGUSassociationBundle:Niveau')
            ->findAll();
        $id=0;
        foreach ($bureaux as $bureau) {
            $path=array();
            $tab=array();
            $path=explode('/', $bureau->getProgramme()->getPath());
            $namePath=$path[sizeof($path)-1];
            $tab['id']=$bureau->getId();
            $tab['nomPath']=$namePath;
            $tab['nomBureau']=$bureau->getNom();
            $paths[$id]=$tab;
            $id++;
        }
        $fonction = new Fonction();
        $formFonction = $this->get('form.factory')->create(new FonctionType(), $fonction);

        $niveau = new Niveau();
        $formNiveau = $this->get('form.factory')->create(new NiveauType(), $niveau);

        $bureau = new Bureau();
        $form = $this->get('form.factory')->create(new BureauType(), $bureau);
        return $this->render('AERGUSassociationBundle:AdminBureau:index.html.twig',array(
            'form' => $form->createView(),
            'bureaux'=>$paths,
            'formFonction'=>$formFonction->createView(),
            'formNiveau'=>$formNiveau->createView(),
            'fonctions'=>$fonctions,
            'niveaux'=>$niveaux,
        ));

    }

    public function ajouterBureauAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $nom = $request->request->get('nom');
            $id = $request->request->get('id');
            $bureau = new Bureau();
            $programme=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Programme')
                ->find($id);
            $bureau->setNom($nom);
            $bureau->setProgramme($programme);
            $em = $this->getDoctrine()->getManager();
            $em->persist($bureau);
            $em->flush();
            $bureaux=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Bureau')
                ->findAll();
            $paths=array();
            $id=0;
            foreach ($bureaux as $bureau) {
                $path=array();
                $tab=array();
                $path=explode('/', $bureau->getProgramme()->getPath());
                $namePath=$path[sizeof($path)-1];
                $tab['id']=$bureau->getId();
                $tab['nomPath']=$namePath;
                $tab['nomBureau']=$bureau->getNom();
                $paths[$id]=$tab;
                $id++;
            }  
            return $this->render('AERGUSassociationBundle:AdminBureau:ajouterBureau.html.twig',array(
                'bureaux'=>$paths
            ));
        }
        else{
            throw new \Exception("Erreur");
        }

    }

    public function ajouterProgrammeAction(Request $request){
        $programme = new Programme;
        $form = $this->createForm(new ProgrammeType, $programme);

        if($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getEntityManager();

            // On utilise un service pour gérer l'upload du fichier sur le serveur
            $this->get('stof_doctrine_extensions.uploadable.manager')
                 ->markEntityToUpload($programme, $programme->getFile());
            $em->persist($programme);

            $em->flush();

            // On retourne l'id du fichier dans un tableau JSON
            return new JsonResponse(array(
                'id' => $programme->getId(),
            ));
        }

        // Si le formulaire n'est pas valide on retourne une erreur en JSON
        return new JsonResponse(array(
            'error' => (string) $form->getErrors(true),
        ), 400);
    }

    public function supprimerBureauAction(Request $request, $id){
        if($request->isXmlHttpRequest()){
            $bureau=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Bureau')
                ->find($id);

            $programme=$bureau->getProgramme();
            $link=$programme->getPath();
            $em = $this->getDoctrine()->getManager();
            $em->remove($bureau);
            $em->remove($programme);
            $em->flush();
            $bureaux=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Bureau')
                ->findAll();
            $paths=array();
            $id=0;
            foreach ($bureaux as $bureau) {
                $path=array();
                $tab=array();
                $path=explode('/', $bureau->getProgramme()->getPath());
                $namePath=$path[sizeof($path)-1];
                $tab['id']=$bureau->getId();
                $tab['nomPath']=$namePath;
                $tab['nomBureau']=$bureau->getNom();
                $paths[$id]=$tab;
                $id++;
            }  
            return $this->render('AERGUSassociationBundle:AdminBureau:supprimerBureau.html.twig',array(
                'bureaux'=>$paths
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function modifierBureauAction(Request $request, $id)
    {
        if($request->isXmlHttpRequest()){
            $type = $request->request->get('type');
            $idtype = $request->request->get('id');
            $bureau=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Bureau')
                ->find($id);
            if($type=='formulaire'){
                $form = $this->get('form.factory')->create(new BureauType(), $bureau);
                return $this->render('AERGUSassociationBundle:AdminBureau:modifierBureau.html.twig',array(
                    'form' => $form->createView(),
                    'type'=> $type,
                    'id'=> $idtype,
                 ));
                
            }

            else{

                if($type=='modifier'){
                    $verif = $request->request->get('verif');
                    $nom = $request->request->get('nom');
                    $bureau->setNom($nom);
                    if($verif=='faux'){
                        $idProgramme = $request->request->get('idProgramme');
                         $programme=$this->getDoctrine()
                            ->getRepository('AERGUSassociationBundle:Programme')
                            ->find($idProgramme);
                        $ancienProgramme=$bureau->getProgramme();
                        $bureau->setProgramme($programme);
                    }
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($bureau);
                    $em->flush();
                    if(isset($ancienProgramme)){
                        $em->remove($ancienProgramme);
                        $em->flush();
                    }

                    $bureaux=$this->getDoctrine()
                        ->getRepository('AERGUSassociationBundle:Bureau')
                        ->findAll();
                    $paths=array();
                    $id=0;
                    foreach ($bureaux as $bureau) {
                        $path=array();
                        $tab=array();
                        $path=explode('/', $bureau->getProgramme()->getPath());
                        $namePath=$path[sizeof($path)-1];
                        $tab['id']=$bureau->getId();
                        $tab['nomPath']=$namePath;
                        $tab['nomBureau']=$bureau->getNom();
                        $paths[$id]=$tab;
                        $id++;
                    }  
                    return $this->render('AERGUSassociationBundle:AdminBureau:modifierBureau.html.twig',array(
                        'bureaux'=>$paths,
                        'type'=> $type,
                    ));
                }
            }
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function ajouterFonctionAction(Request $request){
        if($request->isXmlHttpRequest()){
            $libelle = $request->request->get('fonction');
            $fonction = new Fonction();
            $fonction->setLibelle($libelle);
            $em = $this->getDoctrine()->getManager();
            $em->persist($fonction);
            $em->flush();
            $fonctions=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Fonction')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminBureau:ajouterFonction.html.twig',array(
                'fonctions'=>$fonctions
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function supprimerFonctionAction(Request $request, $id){
        if($request->isXmlHttpRequest()){
            $fonction=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Fonction')
                ->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($fonction);
            $em->flush();
            $fonctions=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Fonction')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminBureau:supprimerFonction.html.twig',array(
                'fonctions'=>$fonctions,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function modifierFonctionAction(Request $request, $id)
    {
        if($request->isXmlHttpRequest()){
            $type = $request->request->get('type');
            $fonction=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Fonction')
                ->find($id);
            if($type=='formulaire'){
                $form = $this->get('form.factory')->create(new FonctionType(), $fonction);
                return $this->render('AERGUSassociationBundle:AdminBureau:modifierFonction.html.twig',array(
                    'form' => $form->createView(),
                    'type'=> $type,
                    'id'=> $id,
                ));
                
            }
            else{
                $libelle = $request->request->get('fonction');
                $fonction->setLibelle($libelle);
                $em = $this->getDoctrine()->getManager();
                $em->persist($fonction);
                $em->flush();
                $fonctions=$this->getDoctrine()
                    ->getRepository('AERGUSassociationBundle:Fonction')
                    ->findAll();
                return $this->render('AERGUSassociationBundle:AdminBureau:modifierFonction.html.twig',array(
                    'fonctions'=>$fonctions,
                    'type'=>$type,
                ));
            }
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function ajouterNiveauAction(Request $request){
        if($request->isXmlHttpRequest()){
            $libelle = $request->request->get('niveau');
            $niveau = new Niveau();
            $niveau->setNiveau($libelle);
            $em = $this->getDoctrine()->getManager();
            $em->persist($niveau);
            $em->flush();
            $niveaux=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Niveau')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminBureau:ajouterNiveau.html.twig',array(
                'niveaux'=>$niveaux
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function supprimerNiveauAction(Request $request, $id){
        if($request->isXmlHttpRequest()){
            $niveau=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Niveau')
                ->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($niveau);
            $em->flush();
            $niveaux=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Niveau')
                ->findAll();
            return $this->render('AERGUSassociationBundle:AdminBureau:supprimerNiveau.html.twig',array(
                'niveaux'=>$niveaux,
            ));
        }
        else{
            throw new \Exception("Erreur");
        }
    }

    public function modifierNiveauAction(Request $request, $id)
    {
        if($request->isXmlHttpRequest()){
            $type = $request->request->get('type');
            $niveau=$this->getDoctrine()
                ->getRepository('AERGUSassociationBundle:Niveau')
                ->find($id);
            if($type=='formulaire'){
                $form = $this->get('form.factory')->create(new NiveauType(), $niveau);
                return $this->render('AERGUSassociationBundle:AdminBureau:modifierNiveau.html.twig',array(
                    'formNiveau' => $form->createView(),
                    'type'=> $type,
                    'id'=> $id,
                ));
                
            }
            else{
                $libelle = $request->request->get('niveau');
                $niveau->setNiveau($libelle);
                $em = $this->getDoctrine()->getManager();
                $em->persist($niveau);
                $em->flush();
                $niveaux=$this->getDoctrine()
                    ->getRepository('AERGUSassociationBundle:Niveau')
                    ->findAll();
                return $this->render('AERGUSassociationBundle:AdminBureau:modifierNiveau.html.twig',array(
                    'niveaux'=>$niveaux,
                    'type'=>$type,
                ));
            }
        }
        else{
            throw new \Exception("Erreur");
        }
    }
}
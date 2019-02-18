<?php
// src/Controller/FormationController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Formation;

use Symfony\Component\HttpFoundation\Request;

use App\Form\FormationType;


class FormationController extends Controller // Doit finir par controler
{
    public function sauvegarder()
    {
        $form = new Formation();
        $form -> setName('Ma formation');
        $form -> setContenu('Boy');
        $form -> setDebut(666);
        $form -> setFin(666);
        $eManager = $this -> getDoctrine()->getManager();
        $eManager -> persist($form);
        $eManager -> flush();
    
            return $this->render('alea/formation.html.twig',[
            //On doit forcement retourner Quelque chose.
            //En vert le fichier auuel on renvoit la page
            ]);
        
        
        
    }
    
    public function create()
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        
        return $this->render('formation/create.html.twig',[
            'entity' => $formation,
            'form' => $form->createView(),
            ]
        );
    }
    
    public function valid(Request $request)
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $formation = $form->getData();
        
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formation);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_lucky_number');
        }
    
    return $this->render('formation/create.html.twig',[
        'entity' => $formation,
        'form' => $form->createView(),
        ]
      );
    }
    
    public function edit($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $formation = $entityManager->getRepository(Formation::class)->findOneBy(['id' => $id]);
        $form = $this->createForm(FormationType::class, $formation);
        
        return $this->render('formation/create.html.twig', [
            'entity' => $formation,
            'form' => $form->createView(),
            ]
        );
    }
    
    public function delete($id)
    {
        
            $entityManager = $this->getDoctrine()->getManager();
            $formation = $entityManager->getRepository(Formation::class)->findOneBy(['id' => $id]);
            if ($formation) {
                $entityManager->remove($formation);
                $entityManager->flush();
            
    
                return $this->redirectToRoute('app_lucky_number');
            } else{
                return new Response(
            '<html><body>nani ?</body></html>'
        );
            }
    }
}


    
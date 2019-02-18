<?php
// src/Controller/FormationController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Experience;

use Symfony\Component\HttpFoundation\Request;

use App\Form\ExperienceType;




class ExperienceController extends Controller // Doit finir par controler
{
    public function sauvegarder()
    {
        $form = new Experience();
        $form -> setName('Mon experience');
        $form -> setEntreprise('Boy');
        $form -> setDebut(\DateTime::createFromFormat("d/m/y", "5/06/17"));
        $form -> setFin(\DateTime::createFromFormat("d/m/y", "6/09/52"));
        $form -> setDomaine('les tires bouchons');
        $eManager = $this -> getDoctrine()->getManager();
        $eManager -> persist($form);
        $eManager -> flush();
    
            return $this->render('alea/experience.html.twig',[
            //On doit forcement retourner Quelque chose.
            //En vert le fichier auuel on renvoit la page
            ]);
        
        
        
    }
    
        public function create()
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);
        
        return $this->render('experience/create.html.twig',[
            'entity' => $experience,
            'form' => $form->createView(),
            ]
        );
    }
    
    public function valid(Request $request)
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $experience = $form->getData();
        
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($experience);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_lucky_number');
        }
    
    return $this->render('experience/create.html.twig',[
        'entity' => $experience,
        'form' => $form->createView(),
        ]
      );
    }
    
    public function edit($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $experience = $entityManager->getRepository(Experience::class)->findOneBy(['id' => $id]);
        $form = $this->createForm(ExperienceType::class, $experience);
        
        return $this->render('experience/create.html.twig', [
            'entity' => $experience,
            'form' => $form->createView(),
            ]
        );
    }


    public function delete(Request $request, Experience $experience)
    {
        
        if ($this->isCsrfTokenValid('delete'.$experience->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            
            ///////
            if ($experience) {
            ///////
            
            $entityManager->remove($experience);
            $entityManager->flush();
        

            return $this->redirectToRoute('experience_index');
        }else{
            return $this->redirectToRoute('experience_index');
             }
        }
    }
    
    
}


    
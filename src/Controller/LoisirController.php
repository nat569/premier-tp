<?php
// src/Controller/LoisirController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Loisir;

use Symfony\Component\HttpFoundation\Request;

use App\Form\LoisirType;


class LoisirController extends Controller // Doit finir par controler
{
    public function sauvegarder()
    {
        $form = new Loisir();
        $form -> setName('Mes loisirs');
        $form -> setCategory('lance de tire-bouchons');
        $form -> setCompetencesQueCaTApportes('dexteirte');
        $eManager = $this -> getDoctrine()->getManager();
        $eManager -> persist($form);
        $eManager -> flush();
    
            return $this->render('alea/loisir.html.twig',[
            //On doit forcement retourner Quelque chose.
            //En vert le fichier auuel on renvoit la page
            ]);
    }
    
    public function create()
    {
        $loisir = new Loisir();
        $form = $this->createForm(LoisirType::class, $loisir);
        
        return $this->render('loisir/create.html.twig',[
            'entity' => $loisir,
            'form' => $form->createView(),
            ]
        );
    }
    
    public function valid(Request $request)
    {
        $loisir = new Loisir();
        $form = $this->createForm(LoisirType::class, $loisir);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $loisir = $form->getData();
        
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($loisir);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_lucky_number');
        }
    
    return $this->render('loisir/create.html.twig',[
        'entity' => $loisir,
        'form' => $form->createView(),
        ]
      );
    }
    
    public function edit($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $loisir = $entityManager->getRepository(Loisir::class)->findOneBy(['id' => $id]);
        $form = $this->createForm(LoisirType::class, $loisir);
        
        return $this->render('loisir/create.html.twig', [
            'entity' => $loisir,
            'form' => $form->createView(),
            ]
        );
    }
}


    
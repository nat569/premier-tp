<?php
// src/Controller/FormationController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Formation;


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
}


    
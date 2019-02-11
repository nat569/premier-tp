<?php
// src/Controller/FormationController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Experience;


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
}


    
<?php
// src/Controller/FormationController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Loisir;


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
}


    
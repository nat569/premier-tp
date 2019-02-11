<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Formation;

use App\Entity\Experience;

use App\Entity\Loisir;


class AleaController extends Controller
{
    public function number($name, $nameFamily)
    {
        
        $number = 0;
        while ($number <22){
        $number = random_int(0, 100);
       
       /* 
        $number = $number/10;
        $number = $number*50;
        $number = sqrt($number); 
        $number = (int)$number;
        
        if ($number < 10){
            echo "yolo frere <br/>";
        }
        */
        }
        
        $formations = $this->getDoctrine()->getManager()->getRepository(Formation::class)->findAllFormations();
        $experiences = $this->getDoctrine()->getManager()->getRepository(Experience::class)->findAllExperiences();
        $loisirs = $this->getDoctrine()->getManager()->getRepository(Loisir::class)->findAllLoisirs();



        return $this->render('alea/toto.html.twig',[
            'number' => $number,
            'name' => $name,
            'nameFamily' => $nameFamily,
            'formations' => $formations,
            'experiences' => $experiences,
            'loisirs' => $loisirs,
            
            ]);
    }
}


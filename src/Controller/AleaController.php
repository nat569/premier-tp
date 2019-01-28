<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AleaController extends Controller
{
    public function number()
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
        

        return $this->render('alea/toto.html.twig',[
            'number' => $number,
            ]);
    }
}


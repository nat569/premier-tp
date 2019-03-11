<?php

// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Formation;
use App\Entity\Experience;
use App\Entity\Loisir;
use App\Entity\Contact;

class AleaController extends Controller
{
    public function number()
    {
        $number = 0;
        while ($number < 22) {
            $number = random_int(0, 100);
        }

        $formations = $this->getDoctrine()->getManager()->getRepository(Formation::class)->findAllFormations();
        $experiences = $this->getDoctrine()->getManager()->getRepository(Experience::class)->findAllExperiences();
        $loisirs = $this->getDoctrine()->getManager()->getRepository(Loisir::class)->findAllLoisirs();
        $contacts = $this->getDoctrine()->getManager()->getRepository(Contact::class)->findAllContacts();

        return $this->render('alea/toto.html.twig', [
            'number' => $number,
            'name' => 'Nathan',
            'nameFamily' => 'Rabadan',
            'formations' => $formations,
            'experiences' => $experiences,
            'loisirs' => $loisirs,
            'contacts' => $contacts,
            ]);
    }
}

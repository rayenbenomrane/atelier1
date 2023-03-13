<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SommeController extends AbstractController
{
    #[Route('/somme', name: 'app_somme')]
    public function index(): Response
    {
        return $this->render('somme/index.html.twig', [
            'controller_name' => 'SommeController',
        ]);
    }
    #[route('/somme/{a<\d+>}/{b<\d+>}', name: 'somme_app')]
    function somme($a, $b)
    {
        $c = $a + $b;
        return $this->render('somme/somme.html.twig', ["a" => $a, "b" => $b, "c" => $c]);
    }
    #[route('/soustraction/{a<\d+>}/{b<\d+>}', name: 'sous_app')]
    function sosutraction($a, $b)
    {
        $c = $a - $b;
        return $this->render('somme/soustraction.html.twig', ["a" => $a, "b" => $b, "c" => $c]);
    }
    #[route('home', name: 'app_home')]
    function affich()
    {

        return $this->render('somme/afficher.html.twig');
    }
}

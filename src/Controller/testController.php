<?php

namespace App\Controller {

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use App\taxes\calculateur;


    class testController extends AbstractController
    {
        #[route('/test', name: 'test')]
        protected $calcul;

        function index(calculateur $calcul)
        {
            $mt = $calcul->prixtva(100);
            dd("bonjour vontre montant tva est " . $mt);
        }
    }
}

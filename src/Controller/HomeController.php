<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/salut", name="hello_base" )
     * @Route("/hello/{prenom}", name="hello_prenom")
     * 
     * Montre la page qui dit bonjour 
     * 
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0) {
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }
    /**
     * @Route("/", name="homepage") 
     */
    public function home(){
        $prenoms = [ 'Lior' => 31 , 'Joseph' => 15, 'Anne' => 55];
        return $this->render(
            'home.html.twig',
            [ 
                'title' => "Salut à tous",
                'age' => 16,
                'tableau' => $prenoms,
            ]
        );
    }
}

?>
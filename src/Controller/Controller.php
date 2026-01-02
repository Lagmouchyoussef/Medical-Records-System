<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{

    #[Route('/home', name: 'app_home')]
    public function index()

    {

        return $this->render ("home.html.twig");

    }
}
class ControllerPhpController extends AbstractController
{
    #[Route('/number', name: 'app_number')]
    public function number():Response
    {
        $number=random_int(1,100);
            return new Response(
                '<html><body>Number: '.$number.'</body></html>'
            );
    }
    #[Route('/controller', name: 'app_controller')]
    public function index()

    {

        $nom="Youssef Lagmouch";

        return $this->render ("home.html.twig", [

            "nom"=>$nom

        ]);
    }
}

<?php

namespace App\Controller\Panel;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\String\u;


class PageController extends AbstractController
{

    #[Route('/home-page')]
    public function homePage(): Response
    {
        return new Response('Returned the text');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        $title = u(str_replace('-', ' ', $slug))->title(true);

        return $this->render('page/browse.html.twig', [
            'title' => 'You browsed the '.$title,
            'pages' => [
                ['title' =>'dhbgdfbght', 'item' => 'ttt'],
                ['title' =>'dhtgh', 'item' => 'fbvdfvb'],
                ['title' =>'ue90rtughtb0', 'item' => 'bdfb'],
                ['title' =>'djgbhv7tygh', 'item' => '5645b h45'],
                ['title' =>'87b hyfch', 'item' => 'bi ovdfh'],
            ],
        ]);
    }
}
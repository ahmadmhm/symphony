<?php

namespace App\Controller\Api;

use Faker\Provider\en_US\Person;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('api/songs', 'app_api_songs', methods: 'GET')]
    public function index()
    {

    }

    #[Route('api/songs/{id<\d+>}', 'app_api_songs_show', methods: 'GET')]
    public function show(int $id, LoggerInterface $logger)
    {
        $song = [
            'id' => $id,
            'title' => Person::firstNameMale(),
            'description' => Person::titleFemale(),
        ];

        $logger->info('Called single song with id = {song}', [
            'song' => $id,
        ]);

        return $this->json($song);
    }
}
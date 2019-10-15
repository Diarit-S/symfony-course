<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RankingController extends AbstractController
{
    /**
     * @Route("/ranking", name="ranking_news")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Ranking Controller',
            'path' => 'src/Controller/RankingController.php',
        ]);
    }
}

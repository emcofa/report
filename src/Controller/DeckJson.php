<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerJson
{

    /**
     * @Route("/card/api/deck")
     */
    public function deck(): Response
    {

        $card = new \App\Card\Deck();
        $data = [
            'title' => 'Playing cards',
            'card_deck' => $card->deck(),
        ];

        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    /**
     * @Route("/card/api/deck/shuffle")
     */
    public function shuffle(): Response
    {
        $card = new \App\Card\Deck();
        $cards = $card->deck();
        $data = [
            'title' => 'Playing cards',
            'card_deck' => $card->shuffle($cards),
        ];

        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }



    //     /**
    //      * @Route("/api/lucky/number2")
    //      */
    //     public function number2(): Response
    //     {
    //         $this->number = random_int(0, 100);

    //         $data = [
    //             'message' => 'Welcome to the lucky number API',
    //             'lucky-number' => $this->number
    //         ];

    //         return new JsonResponse($data);
    //     }



    //     /**
    //      * @Route("/api/lucky/number/{min}/{max}")
    //      */
    //     public function number3(int $min, int $max): Response
    //     {
    //         $this->number = random_int($min, $max);

    //         $data = [
    //             'message' => 'Welcome to the lucky number API',
    //             'min number' => $min,
    //             'max number' => $max,
    //             'lucky-number' => $this->number
    //         ];

    //         return new JsonResponse($data);
    //     }
}

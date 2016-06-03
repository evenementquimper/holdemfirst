<?php

// src/AppBundle/Controller/LuckyController.php

// ...
// --> don't forget this new use statement
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController
{
    // ...

    /**
     * @Route("/api/number")
     */
    public function indexAction()
    {
        $data = array(
            'lucky_number' => rand(0, 100),
        );

        // calls json_encode and sets the Content-Type header
        return new JsonResponse($data);
    }
}

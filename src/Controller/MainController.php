<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController {

    /**
     * @Route("/ping")
     * @return Response
     */
    public function pingAction() {
        $response = new Response();
        $response->setContent(json_encode(array(
            'ping'=> 'pong',
        )));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}

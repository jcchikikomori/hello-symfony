<?php
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function index(): Response
    {
        return new Response('<html><body><h1>Hello Symfony!</h1></body></html>');
    }

    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
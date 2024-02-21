<?php

namespace App\Controllers;

use Framework\Http\Response;

class HomeController
{
    public function index(): Response
    {
        $content = '<h1>Hello world1!</h1>';

        return new Response($content, 200, []);
    }
}

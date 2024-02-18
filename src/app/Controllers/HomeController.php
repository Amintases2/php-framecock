<?php

namespace App\Controllers;

use Framework\Http\Response;

class HomeController
{
    public function index($vars): Response
    {
        $content = '<h1>Hello world!</h1>';

        return new Response($content, 200, []);
    }
}
<?php

namespace App\Controller;

use App\RenderViews\Render;

class Controller {
    use Render;

    public function index(){
       $this->twig->display('home.twig');
}
}
<?php
namespace App\PathError;

use App\RenderViews\Render;

class PathError extends \Exception{
    use Render;
    public function getPath(){
        $this->twig->display('ErrorPath.twig');
    }
   
}
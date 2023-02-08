<?php
namespace App\Routes;

use App\PathError\PathError;
use App\RenderViews\Render;


class Routes{
    use Render;
    private array $routes;

    public $link;

    public function get(string $path,callable|array $action):void
    {
        $this->routes[$path] = $action;
    }

    public function run(string $uri):mixed
    {
        $path = \explode('?', $uri)[0];
        $action = $this->routes[$path] ?? null;


        if(is_callable($action))
        {
            return $this->link = $action();
            
        }

        if(\is_array($action)){
            [$className,$method]=$action;

            if(\class_exists($className) && \method_exists($className,$method)){
                $class = new $className();
                return \call_user_func_array([$class,$method],[]);
            }
        }

       throw new PathError("Error 404");

    }
}
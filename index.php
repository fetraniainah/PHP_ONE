<?php

use App\PathError\PathError;




require 'vendor/autoload.php';





require 'routes/route.php';









try{
    $route->run($_SERVER['REQUEST_URI']);
 }catch(PathError $e){
  echo $e->getPath();
 }




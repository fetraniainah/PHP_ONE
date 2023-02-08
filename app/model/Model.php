<?php
namespace App\Model;

use App\Config\Database;

class Model{
    use Database;
    
    public function index(){
       $this->show();
    }
}